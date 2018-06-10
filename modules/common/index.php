<?php 
 include_once 'libraries/helper.php';
if (!defined('IN_SITE')){
	redirect('index.php?m=common&a=404');
}

include_once './models/kiot.php';

$kiot = getAllkiot();
include_once 'views/front/index.tpl.php';



?>