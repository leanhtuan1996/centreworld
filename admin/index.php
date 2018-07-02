<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Centre World - Admin</title>
	<link rel="icon" href="images/cw.png" sizes="32x32">
    
	<!-- Bootstrap 4.0-->
  <link rel="stylesheet" href="assets/vendor_components/bootstrap/dist/css/bootstrap.css">
  	<!-- iCheck for checkboxes and radio inputs -->
	<link rel="stylesheet" href="assets/vendor_plugins/iCheck/all.css">
	
	<!-- Bootstrap Color Picker -->
	<link rel="stylesheet" href="assets/vendor_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
	
	<!-- Bootstrap time Picker -->
	<link rel="stylesheet" href="assets/vendor_plugins/timepicker/bootstrap-timepicker.min.css">
	
	<!-- Select2 -->
  <link rel="stylesheet" href="assets/vendor_components/select2/dist/css/select2.min.css">
  	<!-- Glyphicons -->
	<link rel="stylesheet" href="assets/vendor_components/glyphicons/glyphicon.css">
	
  	
  <link rel="stylesheet" href="assets/vendor_components/bootstrap-daterangepicker/daterangepicker.css">
  	<!-- bootstrap datepicker -->	
	<link rel="stylesheet" href="assets/vendor_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
	
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="assets/vendor_components/bootstrap/dist/css/bootstrap-extend.css">
	
	<!-- font awesome -->
	<link rel="stylesheet" href="assets/vendor_components/font-awesome/css/font-awesome.css">
	
	<!-- ionicons -->
	<link rel="stylesheet" href="assets/vendor_components/Ionicons/css/ionicons.css">
	
	<!-- theme style -->
	<link rel="stylesheet" href="css/master_style.css">
	
	<!-- fox_admin skins. choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="css/skins/_all-skins.css">
	
	<!-- weather weather -->
	<link rel="stylesheet" href="assets/vendor_components/weather-icons/weather-icons.css">
	
	<!-- jvectormap -->
	<link rel="stylesheet" href="assets/vendor_components/jvectormap/jquery-jvectormap.css">
	
	<!-- date picker -->
	<link rel="stylesheet" href="assets/vendor_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.css">
	
	<!-- daterange picker -->
	<link rel="stylesheet" href="assets/vendor_components/bootstrap-daterangepicker/daterangepicker.css">
	
	<!-- bootstrap wysihtml5 - text editor -->
	<link rel="stylesheet" href="assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.css">
	

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
include_once '../libraries/session.php';   
if(!session_get('user_admin')) {
	redirect("login.php");
}
?>
  </head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <!-- header -->
  <?php include_once __DIR__ .'/includes/head.php';
  ?>

  <!-- Control Sidebar Toggle Button -->
  	<div>
		<button class="control-sidebar-btn btn btn-dark" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></button>
	</div>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include __DIR__ .'/includes/side.php';
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      
    </section>
	<?php

include_once '../libraries/database.php';
include_once '../libraries/role.php'; 
include_once '../models/user.php';
include_once '../models/kiot.php';
?>


    <!-- Main content -->
    <?php if(isset($_REQUEST['page']))
{
	
	$page=$_REQUEST['page'];
	
	switch ($page)
	{
		
		case "users":
		include "cms/user.php";
		
		break;
		
		
		case "kt":
		include "cms/kiot.php";
		
		break;

		case "ct":
		include "cms/contract.php";
		
        break;
        
        case "upkt":
		include "cms/updatekiot.php";
		
        break;
        
        case "delk":
	    	include "cms/delk.php";
		
        break;

        case "delrq":
	    	include "cms/delrq.php";
		
        break;

        case "pf":
        include "cms/profile.php";
        
         break;


        case "delus":
        include "cms/delus.php";
        
            break;


        case "delk":
        include "cms/delk.php";
        
            break;

        case "rq":
        include "cms/request.php";
            
        break;

        case "edit";
        include "cms/edit.php";

        break;

        case "confirm";
        include "cms/confirm.php";

        break;


        case "addrq";
        include "cms/addrq.php";

        break;

        case "bill";
        include "cms/bill.php";

        break;


        case "pay";
        include "cms/pay.php";

        break;

        case "delbill";
        include "cms/delbill.php";

        break;


        case "logout";
        include "cms/logout.php";

        break;

        case "delct";
        include "cms/delct.php";

        break;




		
	
	}
	
}

else include "./cms/center.php";

  ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include_once __DIR__ .'/includes/footer.php';
 ?>
 

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <div class="rpanel-title"> Service Panel <span class="btn pull-right"><i class="ion ion-close" data-toggle="control-sidebar"></i></span> </div>
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="nav-item"><a href="index.html#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li class="nav-item"><a href="index.html#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-cog fa-spin"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Admin Birthday</h4>

                <p>Will be July 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Jhone Updated His Profile</h4>

                <p>New Email : jhone_doe@demo.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Disha Joined Mailing List</h4>

                <p>disha@demo.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Code Change</h4>

                <p>Execution time 15 Days</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Web Design
                <span class="label label-danger pull-right">40%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 40%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Data
                <span class="label label-success pull-right">75%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 75%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Order Process
                <span class="label label-warning pull-right">89%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 89%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Development 
                <span class="label label-primary pull-right">72%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 72%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <input type="checkbox" id="report_panel" class="chk-col-grey" >
			<label for="report_panel" class="control-sidebar-subheading ">Report panel usage</label>

            <p>
              general settings information
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="allow_mail" class="chk-col-grey" >
			<label for="allow_mail" class="control-sidebar-subheading ">Mail redirect</label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="expose_author" class="chk-col-grey" >
			<label for="expose_author" class="control-sidebar-subheading ">Expose author name</label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <input type="checkbox" id="show_me_online" class="chk-col-grey" >
			<label for="show_me_online" class="control-sidebar-subheading ">Show me as online</label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <input type="checkbox" id="off_notifications" class="chk-col-grey" >
			<label for="off_notifications" class="control-sidebar-subheading ">Turn off notifications</label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">              
              <a href="javascript:void(0)" class="text-red margin-r-5"><i class="fa fa-trash-o"></i></a>
              Delete chat history
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  
</div>
<!-- ./wrapper -->
  	
	 

    <!-- end - This is for export functionality only -->
	
	<!-- foxadmin for Data Table -->

	<!-- jQuery 3 -->
  <script src="assets/vendor_components/jquery/dist/jquery.js"></script>
  <script src="assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js"></script>
	
	<!-- jQuery UI 1.11.4 -->
	<script src="assets/vendor_components/jquery-ui/jquery-ui.js"></script>
	
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
	  $.widget.bridge('uibutton', $.ui.button);
	</script>
	
	<!-- popper -->
	<script src="assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="assets/vendor_components/bootstrap/dist/js/bootstrap.js"></script>	
	
	<!-- ChartJS -->
	<script src="assets/vendor_components/chart-js/chart.js"></script>
	
	<!-- Sparkline -->
	<script src="assets/vendor_components/jquery-sparkline/dist/jquery.sparkline.js"></script>
	
	<!-- jvectormap -->
	<script src="assets/vendor_plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>	
	<script src="assets/vendor_plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	
	<!-- jQuery Knob Chart -->
	<script src="assets/vendor_components/jquery-knob/js/jquery.knob.js"></script>
	
	<!-- daterangepicker -->
	<script src="assets/vendor_components/moment/min/moment.min.js"></script>
	<script src="assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js"></script>
	
	<!-- datepicker -->
	<script src="assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
	
	<!-- Bootstrap WYSIHTML5 -->
	<script src="assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js"></script>
	
	<!-- Slimscroll -->
	<script src="assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>
	
	<!-- FastClick -->
	<script src="assets/vendor_components/fastclick/lib/fastclick.js"></script>
	
	<!-- fox_admin App -->
	<script src="js/template.js"></script>
	
	<!-- fox_admin dashboard demo (This is only for demo purposes) -->
	<script src="js/pages/dashboard.js"></script>
	
	<!-- fox_admin for demo purposes -->
	<script src="js/demo.js"></script>
	
	<!-- weather for demo purposes -->
  <script src="assets/vendor_plugins/weather-icons/WeatherIcon.js"></script>
  	<!-- iCheck 1.0.1 -->
	<script src="assets/vendor_plugins/iCheck/icheck.min.js"></script>
  
  	      	
	<!-- DataTables -->
	<script src="assets/vendor_components/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	
	<!-- This is data table -->
  <script src="assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js"></script>
    
    <!-- start - This is for export functionality only -->
    <script src="assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.flash.min.js"></script>
    <script src="assets/vendor_plugins/DataTables-1.10.15/ex-js/jszip.min.js"></script>
    <script src="assets/vendor_plugins/DataTables-1.10.15/ex-js/pdfmake.min.js"></script>
    <script src="assets/vendor_plugins/DataTables-1.10.15/ex-js/vfs_fonts.js"></script>
    <script src="assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.html5.min.js"></script>
    <script src="assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.print.min.js"></script>
    <script src="js/pages/data-table.js"></script>
    <script type="text/javascript" src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    	
	<!-- bootstrap color picker -->
	<script src="assets/vendor_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
	
	<!-- bootstrap time picker -->
  <script src="assets/vendor_plugins/timepicker/bootstrap-timepicker.min.js"></script>
  	
	<!-- Select2 -->
	<script src="assets/vendor_components/select2/dist/js/select2.full.js"></script>
	
	<!-- InputMask -->
	<script src="assets/vendor_plugins/input-mask/jquery.inputmask.js"></script>
	<script src="assets/vendor_plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
  <script src="assets/vendor_plugins/input-mask/jquery.inputmask.extensions.js"></script>
  	<!-- date-range-picker -->
	<script src="assets/vendor_components/moment/min/moment.min.js"></script>
  <script src="assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js"></script>
  	
	<!-- foxadmin for advanced form element -->
	<script src="js/pages/advanced-form-element.js"></script>

  <script src ="assets/tinymce/tinymce.min.js" type ="text/javascript">  </script>
	
	<script type="text/javascript">
	
		WeatherIcon.add('icon1'	, WeatherIcon.SLEET , {stroke:false , shadow:false , animated:true } );
		WeatherIcon.add('icon2'	, WeatherIcon.SNOW , {stroke:false , shadow:false , animated:true } );
		WeatherIcon.add('icon3'	, WeatherIcon.LIGHTRAINTHUNDER , {stroke:false , shadow:false , animated:true } );

  </script>
  	<!-- JqueryPrintArea -->
	<script src="assets/vendor_plugins/JqueryPrintArea/demo/jquery.PrintArea.js"></script>
	
	<script>
    $(document).ready(function() {
        $("#print").click(function() {
            var mode = 'iframe'; //popup
            var close = mode == "popup";
            var options = {
                mode: mode,
                popClose: close
            };
            $("section.printableArea").printArea(options);
        });
    });


    $(function() {
	"use strict";
	
	tinymce.init({
	  selector: '.tinymce',
	  height: 300,
	  plugins: [
		'advlist autolink lists link image charmap print preview anchor',
		'searchreplace visualblocks code fullscreen',
		'insertdatetime media table contextmenu paste code'
	  ],
	  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
	 
	});
});
    </script>


<script>

  $('#user_table').DataTable();

  function confirmDelete(isDelete) {
                            swal({
                                    title: "Bạn có muốn xoá không?",
                                    text: "Thông tin sẽ biến mất ",
                                    icon: "info",
                                    buttons: {
                                        cancel: true,
                                        delete: {
                                            text: "Xoá ngay",
                                            value: 'delete',
                                            className: 'btn-danger'
                                        }
                                    },
                                })
                                .then((value) => {
                                    switch (value) {     
                                        case "delete":
                                            return isDelete(true);
                                            break;                  
                                        default:
                                            return isDelete(false);
                                            break;
                                    }
                                }); 
                        }

    jQuery(document).ready(($) => {
      $('#user_table tbody').delegate('button.delete_user', 'click', (e) => {
        var id = $(e.currentTarget.parentElement.parentElement).attr('id');
        if (id) {
          confirmDelete((isDelete) => {
            if(isDelete) {
              $.get(`?page=delus&id=`, {
                id: id
              }, (data) => {
                location.reload();
              })
            }
          })
        }
      })
    })
</script>

<script>

    $('#kiot_table').DataTable();
  
    function confirmDelete(isDelete) {
                              swal({
                                      title: "Bạn có muốn xoá không?",
                                      text: "Thông tin sẽ biến mất ",
                                      icon: "info",
                                      buttons: {
                                          cancel: true,
                                          delete: {
                                              text: "Xoá ngay",
                                              value: 'delete',
                                              className: 'btn-danger'
                                          }
                                      },
                                  })
                                  .then((value) => {
                                      switch (value) {     
                                          case "delete":
                                              return isDelete(true);
                                              break;                  
                                          default:
                                              return isDelete(false);
                                              break;
                                      }
                                  }); 
                          }
  
      jQuery(document).ready(($) => {
        $('#kiot_table tbody').delegate('button.delete_kiot', 'click', (e) => {
          var id = $(e.currentTarget.parentElement.parentElement).attr('id');
          if (id) {
            confirmDelete((isDelete) => {
              if(isDelete) {
                $.get(`?page=delk&id=`, {
                  id: id
                }, (data) => {
                  location.reload();
                })
              }
            })
          }
        })
      })
  </script>


  <script>

$('#rq_table').DataTable();

function confirmDelete(isDelete) {
                          swal({
                                  title: "Bạn có muốn xoá không?",
                                  text: "Thông tin sẽ biến mất ",
                                  icon: "info",
                                  buttons: {
                                      cancel: true,
                                      delete: {
                                          text: "Xoá ngay",
                                          value: 'delete',
                                          className: 'btn-danger'
                                      }
                                  },
                              })
                              .then((value) => {
                                  switch (value) {     
                                      case "delete":
                                          return isDelete(true);
                                          break;                  
                                      default:
                                          return isDelete(false);
                                          break;
                                  }
                              }); 
                      }

  jQuery(document).ready(($) => {
    $('#rq_table tbody').delegate('button.edit', 'click', (e) => {
      var id = $(e.currentTarget).attr('data-id');
      var status = $(e.currentTarget.parentElement.parentElement).find('option:selected').attr('value');
      if (id && status) {
        location.href= "index.php?page=edit&ID_h=" + id + "&status=" + status;
      }
    })
  })
</script>

<script>

$('#rq_table').DataTable();

function confirmDelete(isDelete) {
                          swal({
                                  title: "Bạn có muốn xoá không?",
                                  text: "Thông tin sẽ biến mất ",
                                  icon: "info",
                                  buttons: {
                                      cancel: true,
                                      delete: {
                                          text: "Xoá ngay",
                                          value: 'delete',
                                          className: 'btn-danger'
                                      }
                                  },
                              })
                              .then((value) => {
                                  switch (value) {     
                                      case "delete":
                                          return isDelete(true);
                                          break;                  
                                      default:
                                          return isDelete(false);
                                          break;
                                  }
                              }); 
                      }

  jQuery(document).ready(($) => {
    $('#rq_table tbody').delegate('button.delete_rq', 'click', (e) => {
      var id = $(e.currentTarget).attr('data-id')
      if (id) {
        confirmDelete((isDelete) => {
          if(isDelete) {
            $.get(`?page=delrq`, {
              ID_h: id
            }, (data) => {
              location.reload();
            })
          }
        })
      }
    })
  })
</script>
	

  <script>

$('#bill_table').DataTable();

function confirmDelete(isDelete) {
                          swal({
                                  title: "Bạn có muốn xoá không?",
                                  text: "Thông tin sẽ biến mất ",
                                  icon: "info",
                                  buttons: {
                                      cancel: true,
                                      delete: {
                                          text: "Xoá ngay",
                                          value: 'delete',
                                          className: 'btn-danger'
                                      }
                                  },
                              })
                              .then((value) => {
                                  switch (value) {     
                                      case "delete":
                                          return isDelete(true);
                                          break;                  
                                      default:
                                          return isDelete(false);
                                          break;
                                  }
                              }); 
                      }
                      jQuery(document).ready(($) => {
    $('#bill_table tbody').delegate('button.delete_bill', 'click', (e) => {
      var id = $(e.currentTarget).attr('data-id')
      if (id) {
        confirmDelete((isDelete) => {
          if(isDelete) {
            $.get(`?page=delbill`, {
              id_b: id
            }, (data) => {
              location.reload();
            })
          }
        })
      }
    })
  })
  jQuery(document).ready(($) => {
    $('#bill_table tbody').delegate('button.confirm_bill', 'click', (e) => {
      var id = $(e.currentTarget).attr('data-id');
      var status = $(e.currentTarget.parentElement.parentElement).find('option:selected').attr('value');
      if (id && status) {
        location.href= "index.php?page=confirm&id_b=" + id + "&status=" + status;
      }
    })
  })
</script>

  <script>

$('#contract_table').DataTable();

function confirmDelete(isDelete) {
                          swal({
                                  title: "Bạn có muốn xoá không?",
                                  text: "Thông tin sẽ biến mất ",
                                  icon: "info",
                                  buttons: {
                                      cancel: true,
                                      delete: {
                                          text: "Xoá ngay",
                                          value: 'delete',
                                          className: 'btn-danger'
                                      }
                                  },
                              })
                              .then((value) => {
                                  switch (value) {     
                                      case "delete":
                                          return isDelete(true);
                                          break;                  
                                      default:
                                          return isDelete(false);
                                          break;
                                  }
                              }); 
                      }

  jQuery(document).ready(($) => {
    $('#contract_table tbody').delegate('button.delete_contract', 'click', (e) => {
      var id = $(e.currentTarget).attr('data-id')
      if (id) {
        confirmDelete((isDelete) => {
          if(isDelete) {
            $.get(`?page=delct`, {
              ID_CT: id
            }, (data) => {
              location.reload();            
            })
          }
        })
      }
    })
  })
</script>

<script>
var validNumber = new RegExp(^[0-9]+(\.[0-9]{1,2})?$);
var lastValid = document.getElementById("test1").value;
function validateNumber(elem) {
  if (validNumber.test(elem.value)) {
    lastValid = elem.value;
  } else {
    elem.value = lastValid;
  }
}
</script>
</body>
</html>