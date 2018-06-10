<?php 
include_once 'libraries/helper.php';
if (!defined('IN_SITE')){
	redirect('index.php?m=common&a=404');
}

$error = array();

include_once 'libraries/session.php';
include_once 'models/user.php';


if(session_get('user')){
	redirect('?m=common&a=index');
}

if(is_submit('login')){
		//Co ton tai
	$email = input_post('email');
	$password = input_post('password');

	//Lay thong tin user tu db
	$user = getUserByEmail($email);

	//Kiem tra ton tai user
	if($user && $user['password'] === md5($password)){
		//Tao session
		session_set('user', $user);
		
		redirect('?m=common&a=index');
	}else{
		$error['user'] = 'Tài khoản hoặc mật khẩu không đúng';
	}
}

include 'views/front/login.tpl.php';

?>