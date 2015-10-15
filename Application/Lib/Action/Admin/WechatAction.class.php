<?php
class WechatAction extends Action {
	public function init() {
		import ( 'Wechat', APP_PATH . 'Common/Wechat', '.class.php' );
		$config = M ( "Wxconfig" )->where ( array (
				"id" => "1" 
		) )->find ();
		
		$options = array (
				'token' => $config ["token"], // 填写你设定的key
				'encodingaeskey' => $config ["encodingaeskey"], // 填写加密用的EncodingAESKey
				'appid' => $config ["appid"], // 填写高级调用功能的app id
				'appsecret' => $config ["appsecret"], // 填写高级调用功能的密钥
				'partnerid' => $config ["partnerid"], // 财付通商户身份标识
				'partnerkey' => $config ["partnerkey"], // 财付通商户权限密钥Key
				'paysignkey' => $config ["paysignkey"]  // 商户签名密钥Key
				);
		$weObj = new Wechat ( $options );
		return $weObj;
	}
	public function index() {
		$weObj = $this->init ();
		$weObj->valid ();
		$type = $weObj->getRev ()->getRevType ();				
		include dirname(dirname(dirname(dirname(dirname(__FILE__))))).'/Public/Conf/button_config.php'; 
		switch ($type) {
			case Wechat::MSGTYPE_TEXT :
// 				$weObj->text ( "hello, I'm wechat" )->reply ();
				$key = $weObj->getRev()->getRevContent();
				
				$replay = M("Wxmessage")->where(array("key"=>$key))->select();
				for ($i = 0; $i < count($replay); $i++) {
					if ($replay[$i]["type"]==0) {
						$appUrl = 'http://' . $this->_server ( 'HTTP_HOST' ) . __ROOT__;
						$newsArr[$i] = array(
								'Title' => $replay[$i]["title"],
								'Description' => $replay[$i]["description"],
								'PicUrl' => $appUrl . '/Public/Uploads/'.$replay[$i]["picurl"],
								'Url' => $replay[$i]["url"].'&uid=' . $weObj->getRevFrom ()
						);
					}else{
						$weObj->text ( $replay[$i]["description"] )->reply ();
						exit ();
					}
				}
				
				if(!empty($newsArr))
				{
					$weObj->getRev ()->news ( $newsArr )->reply ();
				}
				else
				{
					$weObj->transfer_customer_service()->reply();
				}
				exit ();
				
				break;
			case Wechat::MSGTYPE_EVENT :
				$eventype = $weObj->getRev ()->getRevEvent ();
				if ($eventype ['event'] == "CLICK") {
					if( $eventype ['key']=='GET_PIC')
					{
						$usersresult = R ( "Api/Api/getuser", array (
							$weObj->getRevFrom ()
						) );
						
						if($usersresult['member']==1)
						{
							$ticket = R ( "Api/Api/ticket", array (
								$usersresult 
							) );
							
							$image = realpath(dirname(__FILE__).'/../../../../').'/imgpublic/'.$ticket['pic'];
							
							$data['media'] = "@$image";
							$res = $weObj->uploadMedia($data, 'image');

							$weObj->getRev ()->image ( $res['media_id'] )->reply ();
						}
						else
						{
							$text = '您还不是族长，不能为您生成推广图片，<a href="http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.'g=App&m=Index&a=listsp&id=1">立即购买</a>成为族长,开始赚钱！';
							$weObj->text ( $text )->reply ();
						}
						exit ();
					}
					elseif( $eventype ['key']=='GET_URL')
					{
						$usersresult = R ( "Api/Api/getuser", array (
							$weObj->getRevFrom ()
						) );
						
						if($usersresult['member']==1)
						{
							$url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.'g=App&m=Member&a=register&mid='.$usersresult['id'];
							$weObj->text ( $url )->reply ();
						}
						else
						{
							$text = '您还不是族长，不能为您生成推广图片，<a href="http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.'g=App&m=Index&a=listsp&id=1">立即购买</a>成为族长,开始赚钱！';
							$weObj->text ( $text )->reply ();
						}
						exit ();
					}
					else
					{
						$appUrl = 'http://' . $this->_server ( 'HTTP_HOST' ) . __ROOT__;
						
						$news = M ( "Wxmessage" )->where ( array (
								"key" => $eventype ['key'],
								"type" => 0 
						) )->select ();
						
						if ($news) {
							for($i = 0; $i < count ( $news ); $i ++) {
								$newsArr[$i] = array(
									'Title' => $news[$i]["title"],
									'Description' => $news[$i]["description"],
									'PicUrl' => $appUrl . '/Public/Uploads/'.$news[$i]["picurl"],
									'Url' => $news[$i]["url"].'&uid=' . $weObj->getRevFrom ()
								);
							}

							$weObj->getRev ()->news ( $newsArr )->reply ();
						}
						
						
						
						$replay = M("Wxmessage")->where(array("key"=>$eventype ['key'],"type" => 1))->select();
						if(!empty($replay[0]["description"]))
						{
							$weObj->text ( $replay[0]["description"] )->reply ();
							exit ();
						}
						
					}
				}elseif ($eventype['event'] == "subscribe") {
					//初始化用户
					$m = M ( "User" );
					$where = array();
					$where["uid"] = $weObj->getRevFrom ();
					$result = $m->where($where)->find ();
						
					$user = array();
					
					//获取头像等信息
					$openid = $weObj->getRevFrom ();
					$wx_info = $weObj->getUserInfo($openid);
					$user['wx_info'] = json_encode($wx_info);
					
					if(!empty($eventype['ticket']) && empty($result['l_id']) && empty($result['member']))
					{
						$where = array();
						$where["ticket"] = $eventype['ticket'];
						$results = $m->where($where)->find ();
						
						if(!empty($results['id']))
						{
							$user ["l_id"] = $results['id'];
							
							//增加分销人
							$a_info = array();
							$a_info['id'] = $results['id'];
							$a_info['a_cnt'] = $results['a_cnt']+1;
							$user_id = M ( "User" )->save ( $a_info );
							
							if(strlen($results['uid'])>10)
							{
								$data = array();
								$data['touser'] = $results['uid'];
								$data['msgtype'] = 'text';
								$data['text']['content'] = '【'.$wx_info[nickname].'】通过二维码关注了本公众号，成为您的'.$message_name.'家族成员！';
								$weObj->sendCustomMessage($data);
							}
							
							if($results['l_id'])//b jibie
							{
								$where = array();
								$where["id"] = $results['l_id'];
								$b_results = $m->where($where)->find ();
								
								if(!empty($b_results))
								{
									$b_info = array();
									$b_info['id'] = $b_results['id'];
									$b_info['b_cnt'] = $b_results['b_cnt']+1;
									$user_id = M ( "User" )->save ( $b_info );
									
									$user["l_b"] = $b_results['id'];
									
									if(strlen($b_results['uid'])>10)
									{
										$data = array();
										$data['touser'] = $b_results["uid"];
										$data['msgtype'] = 'text';
										$data['text']['content'] = '【'.$wx_info[nickname].'】通过二维码关注了本公众号，成为您的'.$message_name.'家族成员！';
										$weObj->sendCustomMessage($data);
									}
									
									if($b_results['l_id'])//c jibie
									{
										$where = array();
										$where["id"] = $b_results['l_id'];
										$c_results = $m->where($where)->find ();
										
										if(!empty($c_results))
										{
											$c_info = array();
											$c_info['id'] = $c_results['id'];
											$c_info['c_cnt'] = $c_results['c_cnt']+1;
											$user_id = M ( "User" )->save ( $c_info );
											
											$user["l_c"] = $c_results['id'];
											
											if(strlen($c_results['uid'])>10)
											{
												$data = array();
												$data['touser'] = $c_results["uid"];
												$data['msgtype'] = 'text';
												$data['text']['content'] = '【'.$wx_info[nickname].'】通过二维码关注了本公众号，成为您的'.$message_name.'家族成员！';
												$weObj->sendCustomMessage($data);
											}
										}
									}
								}
							}
						}
					}
					
					
					if(!empty($result['id']))
					{
						$user['id'] = $result['id'];
						$user_id = M ( "User" )->save ( $user );
					}
					else
					{
						$user ["uid"] = $openid;
						$user_id = M ( "User" )->add ( $user );
					}
					
					if( !empty($result['l_id']) )
					{
						$user["l_id"] = $result['l_id'];
					}
					
					if(empty($result["l_id"]) && !empty($result['member']))
					{
						$text = '恭喜您由公众号【'.$message_name.'】推荐成为'.$message_name.'的第'.$result['id'].'位会员！2015年'.$message_name.'引领你开启“赚钱新模式”，带你一起赚钱一起飞！							

如果已经知道怎么玩，请直接<a href="http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.'g=App&m=Index&a=listsp&id=1">点击购买</a>成为族长，开启睡觉赚钱新模式，让你每天都能赚大钱，早行动早赚钱！';
					}
					else
					{
						if(!empty($user["l_id"]))
						{
							$user_info = M ( "User" )->where( array('id'=>$user ["l_id"]) )->find();
							$user_info = json_decode($user_info['wx_info'],true);
							
							if($result['id']>1)
							{
								$user_id = $result['id'];
							}
							
							$text = '恭喜您由【'.$user_info['nickname'].'】推荐成为'.$message_name.'的第'.$user_id.'位会员！2015年'.$message_name.'引领你开启“赚钱新模式”，带你一起赚钱一起飞！							
！
如果已经知道怎么玩，请直接<a href="http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.'g=App&m=Index&a=listsp&id=1">点击购买</a>成为族长，开启睡觉赚钱新模式，让你每天都能赚大钱，早行动早赚钱！';
						}
						else
						{
							$text = '欢迎您【'.$wx_info['nickname'].'】关注'.$message_name.'，由于“'.$message_name.'”发现您还没有推荐人，如果您有推荐人，请先不要购买，立即联系您的推荐人，重新关注。如果您没有推荐人请购买成为族长！
如果已经知道怎么玩，请直接<a href="http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.'g=App&m=Index&a=listsp&id=1">点击购买</a>成为族长，开启睡觉赚钱新模式，让你每天都能赚大钱，早行动早赚钱！';
						}
					}
					
					
    				$weObj->text ( $text )->reply ();
				}
				exit ();
				break;
			default :
				$weObj->text ( "help info" )->reply ();
		}
	}
	/*
	
	*/
	public function createMenu() {
		include dirname(dirname(dirname(dirname(dirname(__FILE__))))).'/Public/Conf/button_config.php'; 

		$weObj = $this->init ();
		$weObj->createMenu ( $newmenu );
		$this->success ( "重新创建菜单成功!" );
	}
}