<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../images/favicon.ico">

    <title>Fox Admin - Log in </title>
  
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
	<link rel="stylesheet" href="css/skins/_all-skins.css">	

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<?php 
include_once '../libraries/database.php';
include_once '../libraries/helper.php';
include_once '../libraries/role.php';
include_once '../libraries/session.php';
include_once '../models/user.php';
?>
<?php
if (is_submit('login_admin'))
{
// lấy thông tin người dùng
$email = input_post('email');
$password = input_post('pass');
//làm sạch thông tin, xóa bỏ các tag php, ký tự đặc biệt 
//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection

$email = strip_tags($email);
$email = addslashes($email);
$password = strip_tags($password);
$password = addslashes($password);
if ($email == "" || $password =="") 
    {
  echo "<script>alert('Tên đăng nhập hoặc mật khẩu bạn không được để trống!')</script>";
    }
    else
    {			           
  $users_ad = getUserByEmail($email);

  if ($users_ad && $users_ad['password'] === md5($password)  && $users_ad['lever'] == 1)
        {
    session_set('user_admin', $users_ad);
    
           redirect('index.php');
        }
        else
      {
          echo "<script>alert('Tên đăng nhập hoặc mật khẩu không đúng !')</script>";
      }                            
    }
}
?> 
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index.php"><b>Centre world</b> Admin</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Đăng nhập trang quản lý</p>

    <form action="" method="post" class="form-element">
      <div class="form-group has-feedback">
        <input type="email" name = "email" class="form-control" placeholder="Email">
        <span class="ion ion-email form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name ="pass" class="form-control" placeholder="Password">
        <span class="ion ion-locked form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-6">
          <div class="checkbox">
            <input type="checkbox" id="basic_checkbox_1" >
			<label for="basic_checkbox_1">Ghi nhớ</label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-12 text-center">
          <button type="submit" class="btn btn-info btn-block btn-flat margin-top-10">ĐĂNG NHẬP</button>
          <input type="hidden" name="request_name" value="login_admin"/>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <!-- /.social-auth-links -->


  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->


	<!-- jQuery 3 -->
	<script src="assets/vendor_components/jquery/dist/jquery.min.js"></script>
	
	<!-- popper -->
	<script src="assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>
