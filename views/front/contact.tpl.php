<!DOCTYPE html>
<html lang="en">
<head>
<title>Centre World - Trung tâm thương mại</title>
<link rel="icon" href="images/cw.png" sizes="32x32">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Games Hub Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- portfolio -->	
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="all">
<!-- //portfolio -->	
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="agileinfo-dot">
			<div class="agileits-logo">
				<h1><a href="index.php"><img src="images/cw.png" width="71" height="71"> CENTRE <span>WORLD</span></a></h1>
			</div>
			<?php if(session_get('user')) { ?>
				<?php include_once 'views/front/layout/head-top.php' ?>
			 <?php } else { ?>
				 <?php include_once 'views/front/layout/head-top.html' ?>
			 <?php } ?>
			<div class="w3layouts-banner-info">
				<div class="container">
					<div class="w3layouts-banner-slider">
						<div class="w3layouts-banner-top-slider">
							<div class="slider">
								<div class="callbacks_container">
									<ul class="rslides callbacks callbacks1" id="slider4">
										<li>
											<div class="banner_text">
												<h3>CENTRE WORLD</h3>
												<p>Luôn cập nhật các xu hướng thời trang - làm đẹp.</p>
											</div>
										</li>
										<li>
											<div class="banner_text">
												<h3>CENTRE WORLD</h3>
												<p>Các gian hàng ẩm thực đa dạng, phong phú.</p>
											</div>
										</li>
										<li>
											<div class="banner_text">
												<h3>CENTRE WORLD</h3>
												<p>Vật phẩm gia dụng tiện lợi và phù hợp nhất.</p>
											</div>
										</li>
										<li>
											<div class="banner_text">
												<h3>CENTRE WORLD</h3>
												<p>Khu vui chơi giải trí hấp dẫn phù hợp với mọi gia đình.</p>
											</div>
										</li>
										<li>
											<div class="banner_text">
												<h3>CENTRE WORLD</h3>
												<p>Đội ngũ nhân viên phục vụ chu đáo thân thiện và chuyên nghiệp.</p>
											</div>
										</li>
                                        
                                    </ul>
								</div>
								<div class="clearfix"> </div>
								<script src="js/responsiveslides.min.js"></script>
								<script>
									// You can also use "$(window).load(function() {"
									$(function () {
									  // Slideshow 4
									  $("#slider4").responsiveSlides({
										auto: true,
										pager:true,
										nav:true,
										speed: 500,
										namespace: "callbacks",
										before: function () {
										  $('.events').append("<li>before event fired.</li>");
										},
										after: function () {
										  $('.events').append("<li>after event fired.</li>");
										}
									  });
								
									});
								 </script>
								<!--banner Slider starts Here-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- about -->
	<div class="about" id="about"> 
		<div class="container"> 
			<div class="welcome">
				<div class="agileits-title"> 
					<h2>Giới thiệu</h2>
				</div>
			</div>
			<div class="about-w3lsrow"> 
					<span class="color-elements">Trung tâm thương mại Centre World,</span> là thương hiệu kinh doanh mặt bằng bán lẻ thuộc Tập đoàn Centre - là một nhà phát triển trung tâm thương mại chuyên biệt. Với phương châm “Khách hàng là trên hết”, chúng tôi đã nỗ lực tạo ra các trung tâm thương mại nhằm nâng cao chất lượng cuộc sống, khuyến khích các hoạt động kinh tế ở địa phương, và đóng góp vào cuộc sống, văn hoá cộng đồng. Ngoài ra, Centre World còn hợp tác trong việc xây dựng các cộng đồng năng động và thú vị. Chúng tôi sẽ sử dụng khả năng và kinh nghiệm của mình để tiếp tục mang đến những giá trị mới nhằm thu hút khách hàng, cộng đồng và xã hội.</p>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about --> 
	<!-- contact -->
	<div id="contact" class="contact">
		<div class="contact-row agileits-w3layouts">  
			<div class="col-md-5 contact-w3lsleft map">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15714.693307625323!2d105.76822251131588!3d10.043792366056367!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9a745510330faf4e!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBL4bu5IHRodeG6rXQgLSBDw7RuZyBuZ2jhu4cgQ-G6p24gVGjGoQ!5e0!3m2!1svi!2s!4v1527578546712" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>			</div>
			<div class="col-md-7 contact-w3lsright">
				<h6>Thông tin.</h6>
				<div class="col-xs-6 address-row">
					<div class="col-xs-2 address-left">
						<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 address-right">
						<h5>Địa chỉ</h5>
						<p>256 Nguyễn Văn Cừ<br>Cần Thơ</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-xs-6 address-row w3-agileits">
					<div class="col-xs-2 address-left">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 address-right">
						<h5>Mail</h5>
						<p><a href="mailto:info@centreworld.com"> info@centreworld.com </a></p>
						<p><a href="mailto:contacts@centreworld.com"> contacts@centreworld.com </a></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-xs-6 address-row">
					<div class="col-xs-2 address-left">
						<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 address-right">
						<h5>Điện thoại</h5>
						<p>+84 292 3890 698<br></p>
						<p>+84 123 9090 888<br></p>
					</div>
					<div class="clearfix"> </div>
				</div> 
				<div class="col-xs-6 address-row">
					<div class="col-xs-2 address-left">
						<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 address-right">
						<h5>Thời gian mở cửa</h5>
						<p>Thứ 2 - Thứ 6 : 8:00 đến 22:00<br>
						Thứ 7 - Chủ nhật : 9:00 đến 22:30</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>	
			</div>
			<div class="clearfix"> </div>
		</div>	
	</div>
	<!-- //contact -->  
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<p class="footer-class">©2018 Centre World Corporation</a></p>
		</div>
	</div>
	<!-- //copyright -->
	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<script src="js/responsiveslides.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- Tabs-JavaScript -->
	<script src="js/jquery.filterizr.js"></script>
		<script src="js/controls.js"></script>
		<script type="text/javascript">
			$(function() {
				$('.filtr-container').filterizr();
			});
		</script>
	<!-- //Tabs-JavaScript -->
	<!-- PopUp-Box-JavaScript -->
		<script src="js/jquery.chocolat.js"></script>
		<script type="text/javascript">
			$(function() {
				$('.filtr-item a').Chocolat();
			});
		</script>
	<!-- //PopUp-Box-JavaScript -->

</body>
</html>