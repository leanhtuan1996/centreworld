<div class="header-top">
		<div class="container">
			<div class="header-top-info">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="nav navbar-nav">
								<li class="active"><a href="?m=common&a=info" class="scroll">Xin chào:<?php
								$user = session_get('user');
								echo $user ['name'];
								?></a></li>
								<li><a href="#testimonial" class="scroll">Tuyển dụng</a></li>
								<li><a href="#gallery" class="scroll">Kiot</a></li>
								<li><a href="#about" class="scroll">Giới thiệu</a></li>
								<li><a href="#markets" class="scroll">Dịch vụ</a></li>
								<li><a href="#team" class="scroll">Tin tức nhanh</a></li>
								<li><a href="#mail" class="scroll">Liên hệ</a></li>
							</ul>
						</nav>
					</div>
					<!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
	</div>