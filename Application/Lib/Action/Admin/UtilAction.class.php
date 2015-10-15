<?php
class UtilAction extends PublicAction {
	function _initialize() {
		parent::_initialize ();
	}
	public function index(){
		$this->display();
	}
}