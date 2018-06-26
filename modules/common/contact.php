<?php 
 include_once 'libraries/helper.php';
if (!defined('IN_SITE')){
	redirect('index.php?m=common&a=404');
}
include_once 'views/front/contact.tpl.php';
?>