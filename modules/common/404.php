<?php 
 include_once 'libraries/helper.php';
if (!defined('IN_SITE')){
	redirect('index.php?m=common&a=404');
}
include_once 'views/front/404.tpl.php';
include_once 'libraries/dbconn.php';
?>