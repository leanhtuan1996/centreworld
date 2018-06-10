<?php 

//Định nghĩa một hằng số bảo về project
define('IN_SITE', true);

//Lấy module và action trên URL
$module = isset($_GET['m']) ? $_GET['m'] : '';
$action = isset($_GET['a']) ? $_GET['a'] : '';

if(empty($module) && empty($action)){
	$module = 'common';
	$action = 'index';
}


//Tạo đường dẫn
$path = 'modules/' .$module. '/' .$action. '.php';

//Trường hợp URL chạy đúng
if(file_exists($path)){
	include_once 'libraries/database.php';
	include_once 'libraries/session.php';
	include_once 'libraries/role.php';
	include_once 'libraries/helper.php';
	include_once $path;
}else{
	include_once 'modules/common/404.php';
}

?>