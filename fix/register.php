<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../images/favicon.ico">

    <title>Super Admin - Registration </title>
  
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="assets/vendor_components/font-awesome/css/font-awesome.min.css">

	<!-- Ionicons -->
	<link rel="stylesheet" href="assets/vendor_components/Ionicons/css/ionicons.min.css">

	<!-- Theme style -->
	<link rel="stylesheet" href="css/master_style.css">

	<!-- foxadmin Skins. Choose a skin from the css/skins
	   folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="../css/skins/_all-skins.css">	

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <?php 
include_once '../libraries/helper.php';
include_once '../libraries/database.php';
include_once '../libraries/session.php';
include_once '../models/user.php';
include_once '../models/role.php';



$error = array();

if(is_submit('register')){
    // echo "<script type='text/javascript'>alert('$message');</script>";
//Co ton tai
$email =input_post('email');
$password = md5(input_post('password'));
$name =input_post('name');

$data = array(
	'email' => $email,
	'password' => $password,
	'name' => $name,

);

	$error = db_user_validate($data);

	if(!$error){
		$error = addUser($data);
  }
  echo '<script language="javascript">';
  echo 'window.location.href = "index.php?page=index"';
  echo '</script>';
  
}
	


?>
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index.html"><b>Centre World </b>Admin</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Đăng ký thành viên mới</p>
    <?php if(isset($error['email'])) { ?>
        <?php show_error($error, 'email') ?>
    <?php }  
    ?>
<?php if(isset($error['addUser'])) { ?>
    <?php show_error($error, 'addUser') ?>
<?php }  
?>

  <form action="" method="POST"enctype="multipart/form-data" class="form-horizontal row-fluid"> 
      <div class="form-group has-feedback">
      <div class="form-group"><input type="text" class="form-control"   name="name"  value= "" placeholder="Họ và tên(*)" required></div>
      </div>
      <div class="form-group has-feedback">
      <div class="form-group"><input type="email" class="form-control" name="email"  value= "" placeholder="Email(*)" required></div>
      </div>
      <div class="form-group has-feedback">
      <div class="form-group"><input type="password" class="form-control"  name="password"  value= "" placeholder="Mật khẩu(*)" required></div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="checkbox">
            <input type="checkbox" id="basic_checkbox_1" >
			<label for="basic_checkbox_1">Tôi đồng ý với các <a href="register.html#"><b>Điều khoản</b></a></label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-12 text-center">
        <button class="btn btn-info btn-block btn-flat margin-top-10"  type="submit">Đăng ký</button> 
        <input type="hidden" name="request_name" value="register"/>	
        </div>
        <!-- /.col -->
      </div>
    </form>
	
	<div class="social-auth-links text-center">
      <p>- Đăng nhập bằng -</p>
      <a href="register.html#" class="btn btn-social-icon btn-circle btn-facebook"><i class="fa fa-facebook"></i></a>
      <a href="register.html#" class="btn btn-social-icon btn-circle btn-google"><i class="fa fa-google-plus"></i></a>
    </div>
	<!-- /.social-auth-links -->
    
     <div class="margin-top-20 text-center">
      <p>Bạn đã có tài khoản?<a href="../login.php
      " class="text-info m-l-5">Đăng nhập</a></p>
     </div>
    
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->


	<!-- jQuery 3 -->
	<script src="assets/vendor_components/jquery/dist/jquery.min.js"></script>
	
	<!-- popper -->
	<script src="assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>
	
	
</body>
</html>
