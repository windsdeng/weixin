<?php
class PublicAction extends Action {
	function _initialize() {
		if (! $_SESSION ["wadmin"]) {
			$this->redirect ( "Admin/Login/index" );
		}
	}
	public function upload() {
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
		$upload->savePath = './Public/Uploads/'; // 设置附件上传目录
		if (! $upload->upload ()) { // 上传错误提示错误信息
			$this->error ( $upload->getErrorMsg () );
		} else { // 上传成功 获取上传文件信息
			$info = $upload->getUploadFileInfo ();
		}
		
		return $info;
	}
}