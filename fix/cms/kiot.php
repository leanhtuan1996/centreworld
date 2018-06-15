
    <section class="content">
   <div class="box">
	  <div class="box-header">
		<h3 class="box-title">Thông tin Kiot</h3>
	  </div>
	  <!-- /.box-header -->
	  <div class="box-body">
	
			 <table id="kiot_table" class="table table-bordered table-hover display nowrap margin-top-10 table-responsive">
                
       <div class="box">
            <div class="box-header">
            <button type="submit" class="btn btn-block btn-warning btn-xs" data-toggle="modal" data-target="#add-kiot-modal"> Thêm Kiot</button>
            </div>
		  <thead>
			  <tr>
				  <th>Vị trí kiot</th>
				  <th>Tên thương hiệu</th>
				  <th>Giá</th>
         		  <th>Tên tầng</th>
         		  <th>Tình trạng</th>
         		  <th>Hình ảnh</th>
         		  <th>Chỉnh sửa</th>
         		  <th>Xóa</th>
         
			  </tr>
		  </thead>
		  <tbody>
  <!-- show kiot  -->
  <?php 
      include 'moudule/show.kiot.php'
  ?>
			
		  </tbody>
		  <tfoot>
			  <tr>
				  <th>Tên Kiot</th>
				  <th>Miêu tả</th>
				  <th>Giá</th>
         		  <th>Tên tầng</th>
         		  <th>Tình trạng</th>
         		  <th>Hình ảnh</th>
         		  <th>Chỉnh sửa</th>
         		  <th>Xóa</th>
			  </tr>
		  </tfoot>
		</table>
	  </div>
	  <!-- /.box-body -->
	</div>
  </div>
  </section>
	<!-- /.box -->
	<!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <div class="rpanel-title"> Service Panel <span class="btn pull-right"><i class="ion ion-close" data-toggle="control-sidebar"></i></span> </div>
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="nav-item"><a href="data.html#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li class="nav-item"><a href="data.html#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-cog fa-spin"></i></a></li>
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
	<div id="add-kiot-modal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <!-- add kiot -->
   <?php
      include 'moudule/add.kiot.php'
   ?>
                   	              <!-- SHOW ERROR -->
                     <?php if(isset($error['price'])) { ?>
                            <?php show_error($error, 'price') ?>
                            <?php }  
                            ?>
<?php if(isset($error['description'])) { ?>
    <?php show_error($error, 'description') ?>
<?php }  
?>
                    <?php if(isset($error['addkiot'])) { ?>
                            <?php show_error($error, 'addkiot') ?>
                            <?php }  
                            ?>
                            <?php if(isset($error['id_floor'])) { ?>
                            <?php show_error($error, 'id_floor') ?>
                            <?php }  
                            ?>

                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h5 class="modal-title" id="myModalLabel">Add Kiot</h5>
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
                                                                                    <label class="control-label mb-10" for="name_add">Vị trí kiot</label>
                                                                                    <div class="input-group">
                                                                                        <input type="text" name ="name_k" class="form-control" value="" required>
                                                                                    </div>
                                                                                </div>
                                                                            <div class="form-group">
                                                                                    <label class="control-label mb-10" for="price_add">Giá</label>
                                                                                    <div class="input-group">
                                                                                        <input type="text" name ="price" class="form-control" id="test1" oninput="validateNumber(this);" value="" required>
                                                                                    </div>
                                                                                </div>

                                                                            <div class="form-group">
                                                                                <label class="control-label mb-10" for="description_add">Tên thương hiệu</label>
                                                                                <div class="input-group">
                                                                 
                                                                                    <input type="phone" name="description" class="form-control" id="price_add" value=""required> 
                                                                                </div>
                                                                            </div>
                                                                            </div>
                                                                            <div class="form-group"	>			 
                                                                            <label>Floor</label>
                                                                            <select class="form-control" name="sltParent">
                                                                                <option name ="id_floor" value="1">Khu mua sắm</option><option name ="id_floor" value="2">Khu ăn uống</option><option name ="id_floor" value="3">Khu vui chơi</option></select>
                                                                        </div>
                                                                        <div class="controls">
						                                                              	<input type="file" name="fImg"class="form-control" required="" aria-invalid="false"> <div class="help-block"></div></div>		
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
                                        <button type="submit" class="btn btn-success waves-effect" id="save-new-kiot">Save</button>
                                        <input type="hidden" name="request_name" value="addkiot"/>
                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        </form>
                        <div class="controls">
					
	 
	
	
	