<?php
class MemberAction extends Action {
	function _initialize() {

	}

	function index() {
		$uid = $_GET['uid'];
		$where = array('uid'=>$uid);
		$users = M("User")->where($where)->find();

		$this->assign("users",$users);
		if ( empty($users) ) {
			exit('未查到该用户信息');
		}
		if ( IS_POST ) {
				
			if (!$_POST['login']) {
				$this->error("请输入用户名");
				exit;
			}else {
				$map['login'] = $_POST['login'];
				$map['uid'] = array('neq',$_GET['uid']);
				$check = M("User")->where($map)->find();
				if (!empty($check)) {
					$this->error("该用户名已存在！请重新输入");
					exit;
				}
			}

			if (!$_POST['password']) {
				unset($_POST['password']);
			}else {
				$_POST['password'] = md5($_POST['password']);
			}

			import ( 'ORG.Net.UploadFile' );
			$upload = new UploadFile (); // 实例化上传类
			$upload->maxSize = 3145728; // 设置附件上传大小
			$upload->allowExts = array (
					'jpg',
					'gif',
					'png',
					'jpeg',
					'xlsx',
					'xls'
			); // 设置附件上传类型
			$upload->savePath = './Public/Uploads/';
			$wx_info = array();
			$wx_info = json_decode($users['wx_info'],true);
			if (! $upload->upload ()) { // 上传错误提示错误信息
				$wx_info['nickname'] = $_POST['login'];
				$_POST['wx_info'] = json_encode($wx_info);
			} else { 
				$info = $upload->getUploadFileInfo ();
				$path = $upload->savePath.$info[0]['savename'];
				$wx_info['nickname'] = $_POST['login'];
				$wx_info['headimgurl'] = $path;
				$_POST['wx_info'] = json_encode($wx_info);
			}
			M("User")->where($where)->save($_POST);
			$this->success("保存成功！",U('App/Index/member',array("uid"=>$users['uid'])) );
			exit;
		}

		$this->display("./default/Index/member_index");
	}


	function login() {
		if ( IS_POST ) {
			if (!$_POST['login']) {
				$this->error("请输入用户名");
				exit;
			}
			if (!$_POST['password']) {
				$this->error("请输入登陆密码");
				exit;
			}

			$thisUser = M("User")->where(array('login'=>$_POST['login']))->find();
			if (empty($thisUser)) {
				$this->error("用户名不存在！");
				exit;
			}else {
				if ($thisUser['password'] == md5($_POST['password'])) {
					$_SESSION["uid"] = $thisUser['uid'];
					
					$this->success("登陆成功！",U('App/Index/member',array("uid"=>$thisUser['uid'])) );exit;
				}else {
					$this->error("密码错误！");
					exit;
				}
			}
		}
		
		$this->display("./default/Index/member_login");
	}
	
	
	function logout() {
		unset($_SESSION["uid"]);
		$this->success("退出登录！",U('App/Member/login'));
		exit;
	}

	function register() {
		if ( IS_POST ) {
			if (!$_POST['login']) {
				$this->error("请输入用户名");
				exit;
			}else {
				$map['login'] = $_POST['login'];
				$check = M("User")->where($map)->find();
				if (!empty($check)) {
					$this->error("该用户名已存在！请重新输入");
					exit;
				}
			}
			if (!$_POST['password']) {
				$this->error("请输入登陆密码");
				exit;
			}
			$_POST['uid'] = rand();
			$_POST['password'] = md5($_POST['password']);
			$id = M("User")->add($_POST);
			$new_user_id = $id;
			$user = array();
			$user['uid'] = $id;
			$wx_info = json_encode(array('nickname'=>$map['login'],'subscribe_time'=>time()));
			$user['wx_info'] = $wx_info;
			
			if($_GET['mid']){
				$m = M ( "User" );
				include dirname(dirname(dirname(dirname(dirname(__FILE__))))).'/Public/Conf/button_config.php'; 
				$where = array();
				$where["id"] = (int)$_GET['mid'];
				$results = $m->where($where)->find ();
				
				if(!empty($results['id']))
				{
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
						$data['text']['content'] = '【'.$map[login].'】通过分享链接，成为您的'.$message_name.'团队成员！';
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
								$data['text']['content'] = '【'.$map[login].'】通过分享链接，成为您的'.$message_name.'团队成员！';
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
										$data['text']['content'] = '【'.$map[login].'】通过分享链接，成为您的'.$message_name.'团队成员！';
										$weObj->sendCustomMessage($data);
									}
								}
							}
						}
					}
				}
			}
			
			M("User")->where($map)->save($user);
			$_SESSION["uid"] = $new_user_id;
			$this->success("登陆成功！",U('App/Index/member',array("uid"=>$id)));exit;
			
		}
		$this->display("./default/Index/member_register");
	}
	
}