<?php
class WeixinAction extends PublicAction {
	function _initialize() {
		parent::_initialize ();
	}
	public function index() {
		$config = M ( "Wxconfig" )->find ();
		$this->assign ( "config", $config );
		$this->assign ( "url", 'http://' . $_SERVER ['HTTP_HOST'] . U('Admin/Wechat/index') );
		
		$menu = M ( "Wxmenu" )->select ();
		$this->assign ( "menu", $menu );
		
		$message = M ( "Wxmessage" )->select ();
		$this->assign ( "message", $message );
		$this->display ();
	}
	public function setconfig() {
		$result = M ( "Wxconfig" )->where ( array (
				"id" => "1" 
		) )->save ( $_POST );
		$this->success ( "配置成功!" );
	}
	public function addmenu() {
		if ($_POST ["menu_id"]) {
			$_POST ["status"] = '1';
			$result = M ( "Wxmenu" )->save ( $_POST );
			if ($result) {
				$this->success ( "修改菜单成功!" );
			}
		} else {
			$_POST ["status"] = '1';
			unset ( $_POST ["menu_id"] );
			$result = M ( "Wxmenu" )->add ( $_POST );
			if ($result) {
				$this->success ( "添加菜单成功!" );
			}
		}
	}
	public function delmenu() {
		$id = $_GET ["id"];
		$result = M ( "Wxmenu" )->where ( array (
				"menu_id" => $id 
		) )->delete ();
		if ($result) {
			$this->success ( "删除菜单成功!" );
		}
	}
	public function addmessage() {
		$data = $_POST;
		if ($_FILES ['picurl'] ['name'] !== '') {
			$img = $this->upload ();
			$picurl = $img [0] [savename];
			$data ["picurl"] = $picurl;
		}
		
		if ($_POST ["message_id"] == 0) {
			unset ( $data ["message_id"] );
			$result = M ( "Wxmessage" )->add ( $data );
		} else {
			$data ["id"] = $data ["message_id"];
			unset ( $data ["message_id"] );
			$result = M ( "Wxmessage" )->save ( $data );
		}
		
		if ($result) {
			$this->success ( "操作成功!" );
		}
	}
	public function delmessage(){
		$result = M("Wxmessage")->where(array("id"=>$_GET["id"]))->delete();
		if ($result) {
			$this->success("删除成功!");
		}
	}
}
