<aside class="main-sidebar">
<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
  <!-- Sidebar user panel -->
  <div class="user-panel">
	<div class="image float-left">
	  <img src="images/admin.png" class="rounded" alt="User Image">
	</div>
	<div class="info float-left">
	  <p>Big boss</p>
	  <a href="index.php#"><i class="fa fa-circle text-success"></i> Online</a>
	</div>
	  <!-- search form -->
  <form action="index.php#" method="get" class="sidebar-form">
	<div class="input-group">
	  <input type="text" name="q" class="form-control" placeholder="Tìm kiếm...">
	  <span class="input-group-btn">
			<button type="submit" name="Tìm kiếm" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
			</button>
		  </span>
	</div>
  </form>
  <!-- /.search form -->
  </div>
  
  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu" data-widget="tree">        
	<li class="header"></li>
	<li class="treeview">
	  <a href="">
		<i class="fa fa-address-card-o"></i> <span>Thông tin tài khoản</span>
		<span class="pull-right-container">
		  <i class="fa fa-angle-left pull-right"></i>
		</span>
	  </a>
	  <ul class="treeview-menu">
		<li><a href="?page=users"><i class="fa fa-circle-o"></i>Thông tin tài khoản</a></li>
		<li><a href="./register.php"><i class="fa fa-circle-o"></i>Đăng ký</a></li>
	  </ul>
	</li>
	<li class="treeview">
	  <a href="">
		<i class="fa fa-info"></i><span>Thông tin Kiot</span>
		<span class="pull-right-container">
		  <i class="fa fa-angle-left pull-right"></i>
		</span>
	  </a>
	  <ul class="treeview-menu">
		<li><a href="?page=kt"><i class="fa fa-circle-o"></i>Kiot</a></li>
		<li><a href="?page=ct"><i class="fa fa-circle-o"></i>Hợp đồng</a></li>
		<li><a href="?page=rq"><i class="fa fa-circle-o"></i>Tuyển dụng</a></li>
		<li><a href="?page=bill"><i class="fa fa-circle-o"></i>Thanh toán</a></li>
	  </ul>
	</li>
	<li class="treeview">
	  <a href="">
		<i class="fa fa-address-card-o"></i> <span>Thông tin tài khoản</span>
		<span class="pull-right-container">
		  <i class="fa fa-angle-left pull-right"></i>
		</span>
	  </a>
	  <ul class="treeview-menu">
		<li><a href="?page=users"><i class="fa fa-circle-o"></i>Thông tin tài khoản</a></li>
		<li><a href="./register.php"><i class="fa fa-circle-o"></i>Đăng ký</a></li>
	  </ul>
	</li>
	</ul>
	
</section>
<!-- /.sidebar -->
<div class="sidebar-footer">
	<!-- item-->
	<a href="#" class="link" data-toggle="tooltip" title="" data-original-title="Settings"><i class="fa fa-cog fa-spin"></i></a>
	<!-- item-->
	<a href="#" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="fa fa-envelope"></i></a>
	<!-- item-->
	<a href="?page=logout" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="fa fa-power-off"></i></a>
</div>
</aside>
