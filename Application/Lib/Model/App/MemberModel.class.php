<?php
class MemberModel extends RelationModel {
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
	
	public function add_meber($user_id)
	{
		//生成永久二weima
		$weObj = $this->init ();
		$code_id = $user_id;
		$return = $weObj->getQRCode($code_id,1);
		
		$data ["id"] = (int)$user_id;
		$data ["member"] = 1;
		$data ["ticket"] = $return['ticket'];
		$data ["url"] = $return['url'];
		
		$result = M ( "User" )->save ( $data );
		
		if ($result) {
			return $result;
		}
		else
		{
			return false;
		}
	}
}