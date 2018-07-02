<!-- show profile -->

<?php
include 'moudule/show.profile.php'
?>

    <section class="content">

      <div class="row">
        <div class="col-xl-4 col-lg-5">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">

              <h3 class="profile-username text-center"><?php echo $user['name']?></h3>

              <p class="text-muted text-center"><?php echo $user['position']?>.</p>
              
				
              <div class="row social-states">
				  <div class="col-6 text-right"><a href="profile.html#" class="link"><i class="ion ion-ios-people-outline"></i> 254</a></div>
				  <div class="col-6 text-left"><a href="profile.html#" class="link"><i class="ion ion-images"></i> 54</a></div>
			  </div>
            
              <div class="row">
              	<div class="col-12">
              		<div class="profile-user-info">
						<p>Địa chỉ Email</p>
						<h6 class="margin-bottom"><?php echo $user['email']?></h6>
						<p>Số điện thoại</p>
						<h6 class="margin-bottom"><?php echo $user['phone_number']?></h6> 
						<p>Địa chỉ</p>
						<h6 class="margin-bottom"><?php echo $user['address']?></h6>

						<p class="margin-bottom">Kết nối với chúng tôi</p>
						<div class="user-social-acount">
							<button class="btn btn-circle btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></button>
							<button class="btn btn-circle btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></button>
							<button class="btn btn-circle btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></button>
						</div>
            
					</div>
          <div class="timeline-footer text-right">
           <a href = "" type="submit"class="btn btn-block btn-success" data-toggle="modal" data-target="#update-user-modal"><i class="fa fa-edit"></i> Cập nhật</a>
           <a href = "" type="submit"class="btn btn-block btn-primary" data-toggle="modal" data-target="#add-contract-modal"><i class="fa fa-plus" aria-hidden="true"></i> Thêm hợp đồng</a>
            </div>

             	</div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-8 col-lg-7">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              
              <li><a class="active" href="profile.html#timeline" data-toggle="tab">Hợp đồng</a></li>
            </ul>
                        
            <div class="tab-content">
             
             <div class="active tab-pane" id="timeline">
                <!-- The timeline -->
                <ul class="timeline">
					<!-- timeline time label -->
					<li class="time-label">
						  <span class="bg-green">
							15 Jan. 2017
						  </span>
					</li>
					<!-- /.timeline-label -->
					<!-- timeline item -->
					<li>
					  <i class="ion ion-email bg-blue"></i>

					  <div class="timeline-item">

						<h3 class="timeline-header"><a href="profile.html#">Hợp đồng</a></h3>

						<div class="timeline-body">
            <div class="col-sm-12 invoice-col">

          <?php
          if ( $user['position'] == 'Khách hàng' ){

              include 'moudule/show.contract.pf.php';
          }
          
          ?>
</div>
						</div>
						<div class="timeline-footer text-right">
						  <a href="profile.html#" class="btn btn-primary btn-sm">Xem thêm</a>
						  <a href="profile.html#" class="btn btn-danger btn-sm">Xóa</a>
						</div>
					  </div>
					</li>
					<!-- END timeline item -->
					<!-- timeline item -->
					<li>
					  <i class="fa fa-clock-o bg-gray"></i>
					</li>
				  </ul>
              </div>    
              <!-- /.tab-pane -->
              
              <div class="tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-bordered-sm rounded-circle" src="../../images/user1-128x128.jpg" alt="user image">
                        <span class="username">
                          <a href="profile.html#">John Doe</a>
                          <a href="profile.html#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">5 minutes ago</span>
                  </div>
                  <!-- /.user-block -->
                  <div class="activitytimeline">
					  <p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.
					  </p>
					  <ul class="list-inline">
						<li><a href="profile.html#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
						<li><a href="profile.html#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
						</li>
						<li class="pull-right">
						  <a href="profile.html#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
							(5)</a></li>
					  </ul>
					  <form class="form-element">
						  <input class="form-control input-sm" type="text" placeholder="Type a comment">
					 </form>
                  </div>
                </div>
                <!-- /.post -->
                
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-bordered-sm rounded-circle" src="../../images/user6-128x128.jpg" alt="user image">
                        <span class="username">
                          <a href="profile.html#">John Doe</a>
                          <a href="profile.html#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">5 minutes ago</span>
                  </div>
                  <!-- /.user-block -->
                  <div class="activitytimeline">
					  <div class="row margin-bottom">
						<div class="col-sm-6">
						  <img class="img-fluid" src="../../images/photo1.png" alt="Photo">
						</div>
						<!-- /.col -->
						<div class="col-sm-6">
						  <div class="row">
							<div class="col-sm-6">
							  <img class="img-fluid" src="../../images/photo2.png" alt="Photo">
							  <br><br>
							  <img class="img-fluid" src="../../images/photo3.jpg" alt="Photo">
							</div>
							<!-- /.col -->
							<div class="col-sm-6">
							  <img class="img-fluid" src="../../images/photo4.jpg" alt="Photo">
							  <br><br>
							  <img class="img-fluid" src="../../images/photo1.png" alt="Photo">
							</div>
							<!-- /.col -->
						  </div>
						  <!-- /.row -->
						</div>
						<!-- /.col -->
					  </div>
					  <!-- /.row -->

					  <ul class="list-inline">
						<li><a href="profile.html#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
						<li><a href="profile.html#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
						</li>
						<li class="pull-right">
						  <a href="profile.html#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
							(5)</a></li>
					  </ul>

					  <form class="form-element">
						  <input class="form-control input-sm" type="text" placeholder="Type a comment">
					 </form>
					</div>
				</div>
                <!-- /.post -->

                <!-- Post -->
                <div class="post clearfix">
                  <div class="user-block">
                    <img class="img-bordered-sm rounded-circle" src="../../images/user7-128x128.jpg" alt="user image">
                        <span class="username">
                          <a href="profile.html#">John Doe</a>
                          <a href="profile.html#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">5 minutes ago</span>
                  </div>
                  <!-- /.user-block -->
                    <div class="activitytimeline">
					  <p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.
					  </p>

					  <form class="form-horizontal form-element">
						<div class="form-group row no-gutters">
						  <div class="col-sm-9">
							<input class="form-control input-sm" placeholder="Response">
						  </div>
						  <div class="col-sm-3">
							<button type="submit" class="btn btn-danger pull-right btn-block btn-sm">Send</button>
						  </div>
						</div>
					  </form>
					</div>
                </div>
                <!-- /.post -->
                
              </div>
              <!-- /.tab-pane -->
              
              <div class="tab-pane" id="settings">
                <form class="form-horizontal form-element col-12">
                  <div class="form-group row">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputName" placeholder="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail" placeholder="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPhone" class="col-sm-2 control-label">Phone</label>

                    <div class="col-sm-10">
                      <input type="tel" class="form-control" id="inputPhone" placeholder="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="inputExperience" placeholder=""></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputSkills" placeholder="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="ml-auto col-sm-10">
                      <div class="checkbox">
                       	<input type="checkbox" id="basic_checkbox_1" checked="">
						<label for="basic_checkbox_1"> I agree to the</label>
                          &nbsp;&nbsp;&nbsp;&nbsp;<a href="profile.html#">Terms and Conditions</a>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="ml-auto col-sm-10">
                      <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <div class="rpanel-title"> Service Panel <span class="btn pull-right"><i class="ion ion-close" data-toggle="control-sidebar"></i></span> </div>
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="nav-item"><a href="profile.html#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li class="nav-item"><a href="profile.html#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-cog fa-spin"></i></a></li>
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
  <form action="" method="POST"enctype="multipart/form-data" class="form-horizontal row-fluid">     
	<div id="update-user-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                	              <!-- SHOW ERROR -->
                                <?php if(isset($error_add['name'])) {
	
	?>
                            <?php show_error($error, 'name') ?>
                            <?php
}


?>
                    <?php if(isset($error_add['position'])) {
	
	?>
                            <?php show_error($error, 'position') ?>
                            <?php
}


?>
                    <?php if(isset($error_add['phone_number'])) {
	
	?>
                            <?php show_error($error, 'phone_number') ?>
                            <?php
}


?>
                    <?php if(isset($error_add['editUser'])) {
	
	?>
                            <?php show_error($error, 'editUser') ?>
                            <?php
}


?>

                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h5 class="modal-title" id="myModalLabel">Cập nhật thông tin</h5>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Row -->
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="">
                                                    <div class="panel-wrapper">
                                                        <div class="panel-body pa-0">
                                                            <div class="col-sm-12 col-xs-12">
                                                                <div class="form-wrap">
                                                                    <form action="#">
                                                                        <div class="form-body overflow-hide">
                                                                            <div class="form-group">
                                                                                <label class="control-label mb-10" for="firstName_add">Họ vs tên</label>
                                                                                <div class="input-group">
                                                                              
                                                                                    <input type="text" name = "name" class="form-control" id="firstName_add" value="<?php echo $user['name']?> " >
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                    <label class="control-label mb-10" for="lastName_add">Địa chỉ</label>
                                                                                    <div class="input-group">
                                                                                       
                                                                                        <input type="text" name ="address" class="form-control" id="lastName_add" value="<?php echo $user['address']?>" >
                                                                                    </div>
                                                                                </div>

                                                                            <div class="form-group">
                                                                                <label class="control-label mb-10">Số điện thoại</label>
                                                                                <div class="input-group">
                                                                 
                                                                                    <input type="phone" name="phone_number"  id="test1" oninput="validateNumber(this);"   placeholder="+84"class="form-control"  value="<?php echo $user['phone_number']?>" >
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="control-label mb-10">Vai trò</label>
                                                                               <select class="form-control" name ="sltParent" >
                                                                                <option name ="position" value="Khách hàng">Khách hàng</option><option name ="position" value="Nhân viên">Nhân viên</option></select>
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
                                        <button type="submit" class="btn btn-success waves-effect" id="save-new-user">Lưu</button>
                                        <input type="hidden" name="request_name" value="editUser"/>
                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Hủy</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        </form>
                        <?php
$kiot = getkiotbystatus();


if(is_submit('addcontract')){
    //Co ton tai
    $name = input_post('name');
    $name_k =$_POST['name_k'];
    $phone_number = input_post('phone_number');
    $ID_k = $_POST['ID_k'];
    $address = input_post('address'); 
    $date_time= date('Y-m-d H:i:s');
    $email= $_POST['email'];
    $CTid= input_post('citizenship_card');
    $data = array(
        'name' => $name,
        'name_k' => $name_k,
        'phone_number' => $phone_number,
        'email' => $email,
        'date_time' => $date_time,
        'citizenship_card' => $CTid,
        'address' => $address,
        'ID_k' => $ID_k,
    );

            // $message = "wrong answer";
            // echo "<script type='text/javascript'>alert('$message');</script>";	
            // editkiotbystatus($status);
          addcontract($data);
          editkiotbystatus($ID_k);

    }
?>
                        <form action="" method="POST">     
                  	<div id="add-contract-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                       <!-- add contract -->

                	              <!-- SHOW ERROR -->

                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h5 class="modal-title" id="myModalLabel">Cấp hợp đồng</h5>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Row -->
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="">
                                                    <div class="panel-wrapper">
                                                        <div class="panel-body pa-0">
                                                            <div class="col-sm-12 col-xs-12">
                                                                <div class="form-wrap">
                                                                    <form action="#">
                                                                        <div class="form-body overflow-hide">
                                                                            <div class="form-group">
                                                                                <label class="control-label mb-10" for="firstName_add">Họ và tên</label>
                                                                                <div class="input-group">                                                                              
                                                                                    <input type="text" name = "name" class="form-control" id="firstName_add" value="<?php echo $user['name']?> " >
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                    <label class="control-label mb-10" for="lastName_add">Địa chỉ</label>
                                                                                    <div class="input-group">
                                                                                        <input type="text" name ="address" class="form-control" id="lastName_add" value="<?php echo $user['address']?>" >
                                                                                    </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="control-label mb-10" for="phone_add">Số điện thoại</label>
                                                                                <div class="input-group">                                                                
                                                                                    <input type="phone" name="phone_number" class="form-control"  value="<?php echo $user['phone_number']?>" >
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                            <div class="form-group">
                                                                                <label class="control-label mb-10" >Email</label>
                                                                                <div class="input-group">                                                                            
                                                                                    <input type="text" name = "email" class="form-control"  value="<?php echo $user['email']?> " >
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="control-label mb-10" >Số CMND</label>
                                                                                <div class="input-group">
                                                                              
                                                                                    <input type="text" name = "citizenship_card" class="form-control"  value=" " >
                                                                                </div>
                                                                            </div>
    
                                                                              <!-- /.input group -->
                                                                            </div>
                                                                            <div class="form-group">
                                                                            <label>Kiot cồ trống</label>
                                                                              <select class="form-control" name = "ID_k">
                                                                                <?php

for ($i=0; $i <count($kiot) ; $i++) {
	
	$ID_k = $kiot[$i] ['ID_k'];
	
  $namek = $kiot[$i] ['name_k'];
  $floor = $kiot[$i] ['id_floor'];
  $status = $kiot[$i] ['status'];
  $description = $kiot[$i] ['description'];
	
	
	
	?>

                                                                                    <option value="<?php echo $ID_k ?>" ><?php echo $namek ?>-<?php echo $description ?></option>

                                                                                <?php    
}

?>
                                                                           

                                                                              </select>
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
                                        <button type="submit" class="btn btn-success waves-effect" >Lưu</button>
                                        <input type="hidden" name="request_name" value="addcontract"/>
                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Hủy</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        
                        </form>
</body>
</html>
