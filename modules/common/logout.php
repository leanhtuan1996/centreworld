<?php 
include_once 'libraries/helper.php';
if (!defined('IN_SITE')){
	redirect('index.php?m=common&a=404');
}

include_once 'libraries/session.php';
include_once 'libraries/role.php';

if(session_get('user')){
	session_delete('user');	
	include_once '/index.php';
}else{
	redirect('index.php?m=common&a=404');
}

?>