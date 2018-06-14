<?php 
include_once 'libraries/helper.php';
if (!defined('IN_SITE')){
	redirect('index.php?m=common&a=404');
}

include_once 'libraries/session.php';
include_once 'models/user.php';
include_once 'models/kiot.php';



//Co ton tai
if(is_submit('add')){
    // echo "<script type='text/javascript'>alert('$message');</script>";
//Co ton tai
$position =input_post('position');
$salary =input_post('salary');
$ID_k =input_post('ID_k');
$recruitment = $_POST['sltParent'];
$date_time = date('Y-m-d H:i:s');

$data = array(
	'position' => $position,
	'salary' => $salary,
	'ID_k' => $ID_k,
	'recruitment' => $recruitment,
	'date_time' => $date_time,


);

	$error = db_user_validate($data);

	if(!$error){
		$error = add($data);
	}
}


if(session_get('user')){

	$id = session_get('user')['id'];
	$contract = getContract($id);    
        

	$user = getUserById($id);
	$kiot = getkiottById( $contract['ID_k']);

	if(is_submit('pass')){
		$password = md5(input_post('password'));
   
		$pass= array (
	   'password' => $password,
		'id' => $id,
   
		);
		resetUser($pass);
		echo '<script language="javascript">';
		echo 'alert("Thay đổi mật khẩu thành công")';
		echo '</script>';
   }

include_once 'views/front/info.tpl.php'; 
}
else{
	redirect('index.php?m=common&a=404');
}

?>