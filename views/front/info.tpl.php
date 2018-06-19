
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Centre World - Trung tâm thương mại</title>
    <link rel="icon" href="images/cw.png" sizes="32x32">
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
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
    	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="assets/vendor_components/bootstrap/dist/css/bootstrap-extend.css">
    <link rel="stylesheet" href="assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.css">
</head>

<body>
<form action="" method="POST"enctype="multipart/form-data" class="form-horizontal row-fluid">     
	<div id="check-info-modal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h5 class="modal-title" id="myModalLabel"></h5>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Row -->
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="">
                                                    <div class="panel-wrapper ">
                                                        <div class="panel-body pa-0">
                                                            <div class="col-sm-12 col-xs-12">
                                                                <div class="form-wrap">
                                                                    <form action="#">
                                                                        <div class="form-body overflow-hide">
                                                                        <div class="form-group">
                                                                                    <label class="control-label mb-10" for="name_add">Tên </label>
                                                                                    <div class="input-group">
                                                                                        <input type="text" class="form-control" value="<?php echo $user['name'] ?>"style="cursor: no-drop;" disabled >
                                                                                    </div>
                                                                                </div>
                                                                                    <div class="form-group">
                                                                                    <label class="control-label mb-10" for="price_add">Email</label>
                                                                                    <div class="input-group">
                                                                                        <input type="text"  class="form-control" value="<?php echo $user['email'] ?>" style="cursor: no-drop;" disabled >
                                                                                    </div>
                                                                                    </div>

                                                                            <div class="form-group">
                                                                                <label class="control-label mb-10" for="description_add">Kiot sở hữu số</label>
                                                                                <div class="input-group">
                                                                 
                                                                                    <input type="text"  class="form-control"  value="<?php echo $contract['ID_k'] ?>"style="cursor: no-drop;" disabled> 
                                                                                </div>
                                                                            </div>
                                                                            </div>

                                                                            
                                                                            <div class="form-group">
                                                                                    <label class="control-label mb-10" for="price_add">Tầng</label>
                                                                                    <div class="input-group">
                                                                                        <input type="text"  class="form-control" value="<?php echo $contract['name_floor'] ?>" style="cursor: no-drop;" disabled>
                                                                                    </div>
                                                                                    </div>
	
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">

                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Thoát</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        </form>
                        <form action="" method="POST"enctype="multipart/form-data" class="form-horizontal row-fluid">     
	                    <div id="hire-modal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h5 class="modal-title" id="myModalLabel"></h5>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Row -->
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="">
                                                    <div class="panel-wrapper ">
                                                        <div class="panel-body pa-0">
                                                            <div class="col-sm-12 col-xs-12">
                                                                <div class="form-wrap">
                                                                    <form action="#">
                                                                        <div class="form-body overflow-hide">
                                                                        <div class="form-group"	>			 
                                                                            <label>Tuyển Dụng</label>
                                                                            <select class="form-control" name="sltParent">
                                                                                <option name ="recruitment" value="1">Nhân viên chính thức</option><option name ="recruitment" value="2">Nhân viên hợp đồng</option></select>
                                                                        </div>
                                                                            <div class="form-group">
                                                                                    <label class="control-label mb-10" for="price_add">Vị trí</label>
                                                                                    <div class="input-group">
                                                                                        <input type="text" name ="position" class="form-control" id="price_add" value="" required>
                                                                                    </div>
                                                                                </div>

                                                                            <div class="form-group">
                                                                                <label class="control-label mb-10" for="description_add">Lương</label>
                                                                                <div class="input-group">
                                                                 
                                                                                    <input type="phone" name="salary" class="form-control" id="test1" oninput="validateNumber(this);"  value=""required> 
                                                                                </div>
                                                                            </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                    <label class="control-label mb-10" for="price_add">Ở quầy kiot số</label>
                                                                                    <div class="input-group ">
                                                                                        <input type="text" name ="ID_k" class="form-control"  value="<?php echo $contract['ID_k'] ?>" style="cursor: no-drop;"  >
                                                                                    </div>
                                                                                </div>

                                                                                              <div class="form-group">
                                                                                    <label class="control-label mb-10" for="price_add"></label>
                                                                                    <td class="product-images"><img src="<?php echo $kiot['image'] ?>"  alt="" width="120"></td>
                                                                                </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success waves-effect" id="save-new-kiot">Lưu</button>
                                        <input type="hidden" name="request_name" value="add"/>
                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Hủy</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        </form>
                        <form action="" method="POST"enctype="multipart/form-data" class="form-horizontal row-fluid">     
	                    <div id="pass-modal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h5 class="modal-title" id="myModalLabel"></h5>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Row -->
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="">
                                                    <div class="panel-wrapper ">
                                                        <div class="panel-body pa-0">
                                                            <div class="col-sm-12 col-xs-12">
                                                                <div class="form-wrap">
                                                                    <form action="#">
                                                                        <div class="form-body overflow-hide">
                                                                            

                                                                            <div class="form-group">
                                                                            <label class="control-label mb-10" >Mật khẩu cũ</label>
                                                                                <div class="input-group">
                                                                 
                                                                                    <input type="password" name="" placeholder="mật khẩu cũ" class="form-control" id="" value=""required> 
                                                                                </div>
                                                                                <div class="input-group">
                        <h5>Nhập mật khẩu <span class="text-danger">*</span></h5>
						<div class="controls">

							<input type="password" name="password" class="form-control" required data-validation-required-message="This field is required" minlength="6"> </div>
                    </div>
                    <div class="input-group">
                        <h5>Nhập lại mật khẩu<span class="text-danger">*</span></h5>
						<div class="controls">
							<input type="password" name="password2" data-validation-match-match="password" class="form-control" required> </div>
                    </div>
                    </div>
                    </div>
                                                                            </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success waves-effect" id="save-new-kiot">Lưu</button>
                                        <input type="hidden" name="request_name" value="pass"/>
                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Hủy</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        </form>
    <h1 class="title-agile text-center">Thông tin khách hàng</h1>
    <div class="content-w3ls">
        <div class="agileits-grid">
        <div class="content-top-agile">
        <h2><a href="index.php">trang chủ</a></h2>
            </div>
            <div class="content-bottom">
                    <div class="field_w3ls">
                        <div class="field-group">
                            
                        <div class="wthree-field" style="padding-bottom: 8px;">
                        <input  type="submit" value = "kiểm tra thông tin" data-toggle="modal" data-target="#check-info-modal"  > 
                        </div>

                        <div class="field-group">
                         

                        </div>
                      <div class="field-group">
                         <div class="wthree-field">
                         <input  type="submit" value = "tuyển nhân viên" data-toggle="modal" data-target="#hire-modal"  > 
                        </div>

                        </div>
                        </div>
                        <div class="field-group">
                         

                         </div>
                        <div class="field-group">
                            
                            <div class="wthree-field" style="padding-bottom: 8px;">
                            <input  type="submit" value = "Thay đổi mật khẩu" data-toggle="modal" data-target="#pass-modal"  > 
                            </div>
    
    
                            </div>
                    </div>
                    <div class="wthree-field">
                        <input id ="logout" onclick ="logout()" type="submit" value="Đăng xuất" /> 
                        </div>
                        
                        
                    
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

        function logout(){

            window.location.href= "?m=common&a=logout"
        }
    </script>
		<script>
		$(function(){
			$("#first, #second").on("keyup", function () {
			  var fst=$("#first").val();
			  var sec=$("#second").val();
			  if (Number(fst)<Number(sec)) {
				alert("yêu cầu nhập lại");
			  return true;
			  }
			})
		  })

		</script>


    <script>
    $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})

    </script>
    <script>
var validNumber = new RegExp(/^\d*\.?\d*$/);
var lastValid = document.getElementById("test1").value;
function validateNumber(elem) {
  if (validNumber.test(elem.value)) {
    lastValid = elem.value;
  } else {
    elem.value = lastValid;
  }
}
</script>
  <script src="../../admin/js/pages/validation.js"></script>
    <script>
    ! function(window, document, $) {
        "use strict";
        $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(), $(".skin-square input").iCheck({
            checkboxClass: "icheckbox_square-green",
            radioClass: "iradio_square-green"
        }), $(".touchspin").TouchSpin(), $(".switchBootstrap").bootstrapSwitch();
    }(window, document, jQuery);
    </script>

    <!-- /script for show password -->

</body>
<!-- //Body -->

</html>