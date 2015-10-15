<?php
if (ini_get('magic_quotes_gpc')) {
	function stripslashesRecursive(array $array){
		foreach ($array as $k => $v) {
			if (is_string($v)){
				$array[$k] = stripslashes($v);
			} else if (is_array($v)){
				$array[$k] = stripslashesRecursive($v);
			}
		}
		return $array;
	}
	$_GET = stripslashesRecursive($_GET);
	$_POST = stripslashesRecursive($_POST);
}
echo $_GET['echostr'];exit;
define ( 'APP_NAME', 'Application' );

define( 'APP_SITE', getcwd());

define ( 'APP_PATH', APP_SITE.'/Application/' );

define ( 'APP_DEBUG', true );

require './Core/index.php';


?>