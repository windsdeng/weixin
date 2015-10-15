<?php
class LoginAction extends Action {
	public function index() {
		$this->display ( "Public:login" );
	}
	public function login() {
		$result = R ( "Api/Api/login", array (
				$_POST ["username"],
				$_POST ["password"] 
		) );
		
		if ($result) {
			$_SESSION ["wadmin"] = $result;
			$this->success ( "登录成功", U ( "Admin/Index/index" ) );
		} else {
			$this->error ( "登录失败", U ( "Admin/Index/index" ) );
		}
	}
	public function logout() {
		unset ( $_SESSION ["wadmin"] );
		$this->success ( '已注销登录！', U ( "Admin/Login/index" ) );
	}
}