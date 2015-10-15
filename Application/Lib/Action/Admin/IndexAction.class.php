<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends PublicAction {
	function _initialize() {
		parent::_initialize ();
		
		if(file_exists("./Public/Conf/group_".$_SESSION ["wadmin"].".php"))
		{
			require "./Public/Conf/group_".$_SESSION ["wadmin"].".php";
			
			$this->group_json = json_decode($group_json);
		}
		else
		{
			$this->group_json = array(1,2,3,4,5,6,7);
		}
	}
	public function index() {
		
		
		$this->assign ( "group_json", $this->group_json );
		$this->display ();
	}
	public function setting() {
		$result = R ( "Api/Api/setting", array (
				$_POST ["name"],
				$_POST ["notification"] 
		) );
		$this->success ( "修改成功");
	}
	public function set() {
		if ($_SESSION ["wadmin"] && in_array(1,$this->group_json)) {
			$result = R ( "Api/Api/getsetting" );
			$this->assign ( "info", $result );
			
			$themedir = getDir("./Application/Tpl/App");
			
			for ($i = 0; $i < count($themedir); $i++) {
				$theme[$i] = simplexml_load_file("./Application/Tpl/App".$themedir[$i]."/config.xml");
				if (isset($theme[$i])) {
					$theme[$i]->dir = $themedir[$i];
				}
			}
			$this->assign("theme",$theme);
			$this->assign("settheme",$result["theme"]);
			$payresult = R ( "Api/Api/getalipay" );
			$this->assign ( "alipay", $payresult );
			
			$buyday = 0;
			if(file_exists('./Public/Conf/buyday.php'))
			{
				require './Public/Conf/buyday.php';
			}
			$this->assign ( "buyday", $buyday );
			$result = M ( "Admin" )->select ();
			
			
			$group_des=array();
			$group_des[1]='商城设置';
			$group_des[2]='菜单管理';
			$group_des[3]='商品管理';
			$group_des[4]='订单管理';
			$group_des[5]='用户管理';
			$group_des[6]='微信管理';
			$group_des[7]='提现管理';
			
			foreach($result as $key=>$info)
			{
				if(file_exists("./Public/Conf/group_".$info["username"].".php"))
				{
					require "./Public/Conf/group_".$info["username"].".php";
					
					$group_json = json_decode($group_json);
				}
				else
				{
					$group_json = array(1,2,3,4,5,6,7);
				}
				
				
				$group = '';
				foreach($group_json as $json_info)
				{
					$group .= $group_des[$json_info].'|';
				}
				
				$result[$key]['group'] = $group;
			}
			
			$this->assign ( "result", $result );
			$this->display ();
		}
	}
	public function settheme(){
		$name = $_GET["name"];
		$data = array("id"=>1,"theme"=>$name);
		$result = M("Info")->save($data);
		$this->success("操作成功");
	}
	public function setalipay(){
		$result = R ( "Api/Api/setalipay", array (
				$_POST ["alipayname"],
				$_POST ["partner"],
				$_POST ["key"]
		) );
		
		$this->success ( "操作成功" );
	}
	
	public function setfenxiao(){
		$buyday = '<?php $buyday = '.(int)$_POST['buyday'].';?>';
		
		file_put_contents("./Public/Conf/buyday.php",$buyday);
		
		$this->success ( "操作成功" );
	}
	
	public function changepass()
	{
		$oldpass = $_POST['oldpass'];
		$newpass = $_POST['newpass'];
		$newpass2 = $_POST['newpass2'];
	
		if($newpass == $newpass2)
		{
			$where = array();
			$where ["username"] = $_SESSION ["wadmin"];
			$where ["password"] = md5 ( $oldpass );
			$result = M ( "Admin" )->where ( $where )->find ();
		
			
			if ($result) {
				$where = array();
				$where ["id"] = $result['id'];
				
				$data = array('password'=>md5 ( $newpass ));
				$result = M ( "Admin" )->where ( $where )->save ($data);
				
				unset ( $_SESSION ["wadmin"] );
				$this->success ( '操作成功' );
		
			} else {
				$this->error ( "原密码不正确");
			}
		}
		else
		{
			$this->error ( "两次密码不相同！" );
		}
	}
	
	public function addadmin()
	{
		$name = $_POST['name'];
		$pass = $_POST['pass'];
		$group = $_POST['group'];
		
		$where = array();
		$where ["username"] = $name;
		$result = M ( "Admin" )->where ( $where )->find ();
		
		if ($result) 
		{
			$this->success ( "用户名已存在" );
		}
		else
		{
			M ( "Admin" )->add(array('username'=>$name,'password'=>md5($pass)));
			 
			$group_json = json_encode($group); 
			 
			$group_info = '<?php $group_json = \''.$group_json.'\';?>';
			
			file_put_contents("./Public/Conf/group_".$name.".php",$group_info);
			
			$this->success ( "操作成功" );
		}
	}
	
	public function deladmin()
	{
		$result = M ( "Admin" )->where ( array (

				"id" => $_GET ["id"] 

		) )->delete ();
		
		$this->success ( "删除成功！" );
	}
}