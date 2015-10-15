<?php
class MenuAction extends PublicAction {
	function _initialize() {
		parent::_initialize ();
	}
	public function index() {
		$result = R ( "Api/Api/getarraymenu" );
		$this->assign ( "menu", $result );
		$this->assign ( "menulist", $result );
		$this->display ();
	}
	public function addmenu() {
		$result = R ( "Api/Api/addmenu", array (
				$_POST ['parent'],
				$_POST ['name'],
				$_POST ['addmenu'] 
		) );
		$this->success ( "操作成功" );
	}
	public function del() {
		$result = R ( "Api/Api/delmenu", array (
				$_GET ['id'] 
		) );
		$this->success ( "删除成功" );
	}
}