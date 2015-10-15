<?php
require_once ("alipay.config.php");
require_once ("lib/alipay_notify.class.php");

// 计算得出通知验证结果
$alipayNotify = new AlipayNotify ( $alipay_config );
$verify_result = $alipayNotify->verifyReturn ();
if ($verify_result) { // 验证成功
	// 商户订单号
	$out_trade_no = $_GET ['out_trade_no'];
	
	// 支付宝交易号
	$trade_no = $_GET ['trade_no'];
	
	// 交易状态
	$result = $_GET ['result'];
	
	// 判断该笔订单是否在商户网站中已经做过处理
	// 如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
	// 如果有做过处理，不执行商户的业务程序
	if (! empty ( $out_trade_no )) {		$sql = "select * from " . DB_PREFIX . "order where orderid='" . $out_trade_no . "'";		$result = mysql_query ( $sql, $conn );				$row=mysql_fetch_row($result);				$url = 'http://' . $_SERVER ['SERVER_NAME'] . '/index.php?g=App&m=Index&a=payover&out_trade_no='.$out_trade_no.'&uid='.$row[1];		
	}
	echo "<script type='text/javascript'>window.location.href='".$url."'</script>";
	echo '<script type="text/javascript">window.close();</script>';
} else {
	// 验证失败
	// 如要调试，请看alipay_notify.php页面的verifyReturn函数
	echo "验证失败";
}
?>
