<?php 
include_once 'libraries/helper.php';
if (!defined('IN_SITE')){
	redirect('index.php?m=common&a=404');
}

include_once 'libraries/session.php';
include_once 'libraries/role.php';

if(session_get('user')){
	session_delete('user');	
	echo '<script language="javascript">';
    echo 'window.location.href = "index.php"';
    echo '</script>';
}else{
	redirect('index.php?m=common&a=404');
}

?>