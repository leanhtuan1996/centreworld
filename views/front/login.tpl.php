
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Centre World - Trung tâm thương mại</title>
    <link rel="icon" href="images/cw.png" sizes="32x32">
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Core Login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
    <!-- Index-Page-CSS -->
    <link rel="stylesheet" href="css/stylehub.css" type="text/css" media="all">
    <!-- //Custom-Stylesheet-Links -->
    <!--fonts -->
    <link href="//fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400,500,600,700,800" rel="stylesheet">
    <!-- //fonts -->
    <!-- Font-Awesome-File -->
    <link rel="stylesheet" href="css/font-hub.css" type="text/css" media="all">
</head>

<body>
    <h1 class="title-agile text-center">Centre World </h1>
    <div class="content-w3ls">
        <div class="agileits-grid">
            <div class="content-top-agile">
                <h2>Đăng nhập Centre World</h2>
            </div>
            <div class="content-bottom">
                <form action="" method="post">
					<?php if(isset($error['user'])) { ?>
							    <?php show_error($error, 'user') ?>
							<?php }  
							?>
                    <div class="field_w3ls">
                        <div class="field-group">
                            <input name="email"  type="email" value="" placeholder="Email" required>
                        </div>
                        <div class="field-group">
                            <input  type="password" class="form-control" name="password" value="" placeholder="Mật khẩu">
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        
                    </div>
                    <div class="wthree-field">
                        <input id="saveForm" type="submit" value="Đăng Nhập" />
						<input type="hidden" name="request_name" value="login"/>
                    </div>
                  
                </form>
            </div>
            <!-- //content bottom -->
        </div>
    </div>
    <div class="copyright text-center">
				©2018 Centre World Corporation
        </p>
    </div>
    <!--//copyright-->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- script for show password -->
    <script>
        $(".toggle-password").click(function () {

            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    </script>
    <!-- /script for show password -->

</body>
<!-- //Body -->

</html>