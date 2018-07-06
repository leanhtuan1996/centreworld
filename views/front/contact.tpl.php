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
			<div id="content">
			<div id="dnn_ContentPane">			
			<div class="DnnModule DnnModule-DNN_HTML DnnModule-2133"><a name="2133"></a>
<div><div id="dnn_ctr2133_ContentPane"><!-- Start_Module_2133 --><div id="dnn_ctr2133_ModuleContent" class="DNNModuleContent ModDNNHTMLC">
	<div id="dnn_ctr2133_HtmlModule_lblContent" class="Normal">
	<p style="font-size: 15px; font-weight: bold; color: #133c8b;">Giới thiệu chung:</p>
<p><img alt="" src="/portals/0/KMKCT/nua-quang-cao-MBCT.gif" width="730" height="480"></p>
<p style="line-height: 18px;"><span style="font-size: 13px;">
Là nhà bán lẻ hàng đầu Việt Nam, với gần 80 cửa hàng trên khắp toàn quốc, hệ thống centreworld luôn là sự lựa chọn hàng đầu của mọi gia đình trong mua sắm phục vụ cho nhu cầu hàng ngày và vui chơi, giải trí, ẩm thực.</span></p>
<span style="font-size: 13px;">
</span>
<p style="line-height: 18px;"><span style="font-size: 13px;">
Khu Cho Thuê centreworld với không gian mua sắm rộng rãi, hiện đại, đa dạng ngành hàng như ẩm thực, thời trang, vui chơi giải trí, đồ dùng gia đình, chăm  sóc sức khỏe sắc đẹp với các thương hiệu nổi tiếng trong nước và quốc tế. Đến với centreworld, khách hàng có thể dễ dàng lưa chọn những sản phẩm thời trang dạo phố, thời trang công sở thanh lịch của những thương hiệu nổi tiếng. Các cửa hàng trang sức tại centreworld là nơi hội tụ của những thương hiệu trang sức hàng đầu Việt Nam. Ngoài ra các sản phẩm đồng hồ, kính mắt cũng được bày bán tại Khu Cho Thuê centreworld. Nếu có nhu cầu tìm kiếm các sản phẩm chăm sóc sức khỏe sắc đẹp, khách hàng có thể dễ dàng tìm thấy các sản phẩm dưỡng da, trang điểm của các thương hiệu đến từ Hàn Quốc, Pháp, Mỹ, ….Sau những giờ trải nghiệm mua sắm thú vị, khách hàng có thể dễ dàng thưởng thức được những miếng gà rán giòn tan, những miếng burger tuyệt hảo hoặc những ly kem ngọt mát trong các nhà hàng thức ăn nhanh tại centreworld. Khu vui chơi giải trí với trang thiết bị hiện đại cùng hàng trăm trò chơi mới lạ sẽ giúp cho các bé thiếu nhi cùng gia đình có những giây phút thư giãn thoải mái, sảng khoái. </span></p>
<span style="font-size: 13px;">
</span>
<p style="line-height: 18px;"><span style="font-size: 13px;">
Với chất lượng hàng hóa đảm bảo, thái độ phục vụ tốt, không gian mua sắm đẹp, hệ thống centreworld hiện là bạn đồng hành của hơn 1,000 đối tác thuê mặt bằng và đón tiếp, phục vụ hơn 500,000 lượt khách mua sắm mỗi ngày.
<br>
</span></p>
<p style="font-size: 15px; font-weight: bold; color: #133c8b;">Quyền lợi khi đồng hành cùng centreworld:</p>
<center>
<table style="width: 100%;" cellspacing="3" cellpadding="2" border="0">
    <thead>
    </thead>
    <tbody>
        <tr>
            <td style="text-align: left; vertical-align: top;"><span style="font-size: 13px;">•&nbsp;</span></td>
            <td style="width: 99%;"><span style="font-size: 13px;">Cơ hội tiếp cận lượng khách hàng ổn định một cách nhanh chóng và dễ dàng</span></td>
        </tr>
        <tr>
            <td style="text-align: left; vertical-align: top;"><span style="font-size: 13px;">•&nbsp;</span></td>
            <td style="width: 99%;"><span style="font-size: 13px;">Cơ hội đồng hành cùng centreworld phát triển mở rộng mạng lưới trên cả nước
            </span></td>
        </tr>
        <tr>
            <td style="text-align: left; vertical-align: top;"><span style="font-size: 13px;">•&nbsp;</span></td>
            <td style="width: 99%;"><span style="font-size: 13px;">Chính sách giá và hỗ trợ hoạt động kinh doanh ưu đãi, linh hoạt.</span></td>
        </tr>
    </tbody>
</table>
</center><br>
<br>
<p style="font-size: 15px; font-weight: bold; color: #133c8b;">Đăng ký thuê mặt bằng tại centreworld:</p>
<center>
<table style="width: 100%;" cellspacing="3" cellpadding="2" border="0">
    <thead>
    </thead>
    <tbody>
        <tr valign="top">
            <td style="text-align: left; vertical-align: top;"><span style="font-size: 13px;"><strong>1.</strong></span> </td>
            <td style="width: 99%;"><span style="font-size: 13px;"><strong>Tiêu chí lựa chọn đối tác thuê mặt bằng</strong></span></td>
        </tr>
        <tr valign="top">
            <td style="text-align: left; vertical-align: top;">&nbsp;</td>
            <td style="width: 99%;"><span style="font-size: 13px;">Khi xem xét các hồ sơ đề nghị thuê mặt bằng của Quý đối tác, centreworld sẽ ưu tiên lựa chọn Quý đối tác sau để đồng hành cùng centreworld:</span></td>
        </tr>
        <tr valign="top">
            <td style="text-align: left; vertical-align: top;"><span style="font-size: 13px;">&nbsp;</span></td>
            <td style="width: 99%;">
            <center>
            <table style="border-collapse: collapse;" cellspacing="2" cellpadding="2" border="0" width="98%">
                <tbody>
                    <tr valign="top">
                        <td><span style="font-size: 13px;">•&nbsp;</span></td>
                        <td style="width: 99%;"><span style="font-size: 13px;">Đối tác là những doanh nghiệp có thương hiệu uy tín quốc tế, quốc gia và địa phương.</span></td>
                    </tr>
                    <tr valign="top">
                        <td><span style="font-size: 13px;">•&nbsp;</span></td>
                        <td style="width: 99%;"><span style="font-size: 13px;">Sản phẩm dịch vụ phù hợp với đối tượng khách hàng đang mua sắm tại centreworld.</span></td>
                    </tr>
                </tbody>
            </table>
            </center>
            </td>
        </tr>
        <tr valign="top">
            <td style="text-align: left; vertical-align: top;"><span style="font-size: 13px;"><strong>2.</strong></span> </td>
            <td style="width: 99%;"><span style="font-size: 13px;"><strong>Phương thức đăng ký thuê mặt bằng</strong></span></td>
        </tr>
        <tr valign="top">
            <td style="text-align: left; vertical-align: top;"><span style="font-size: 13px;">&nbsp;</span></td>
            <td style="width: 99%;"><span style="font-size: 13px;">Quy trình thuê mặt bằng <a href="contact/quytrinh_thue_matbang.pdf"><strong><em>(download tại đây)</em></strong></a><strong><em></em></strong></span></td>
        </tr>
        <tr valign="top">
            <td style="text-align: left; vertical-align: top;"><span style="font-size: 13px;">&nbsp;</span></td>
            <td style="width: 99%;"><span style="font-size: 13px;">Hồ sơ cần thiết khi thuê mặt bằng:</span></td>
        </tr>
        <tr valign="top">
            <td style="text-align: left; vertical-align: top;"><span style="font-size: 13px;">&nbsp;</span></td>
            <td style="width: 99%;">
            <center>
            <table style="border-collapse: collapse;" cellspacing="2" cellpadding="2" border="0" width="98%">
                <tbody>
                    <tr valign="top">
                        <td><span style="font-size: 13px;">•&nbsp;</span></td>
                        <td style="width: 99%;"><span style="font-size: 13px;">Giai đoạn 1: Khi đăng ký thuê mặt bằng tại centreworld, Quý đối tác cần gửi thông tin cho centreworld theo mẫu - Phiếu đăng ký thuê mặt bằng <a href="contact/quytrinh_thue_matbang.pdf"><strong><em>(download thông tin tại đây)</em></strong></a></span>
                        </td>
                    </tr>
                    <tr valign="top">
                        <td><span style="font-size: 13px;">•&nbsp;</span></td>
                        <td style="width: 99%;"><span style="font-size: 13px;">Giai đoạn 2: Khi trao đổi chi tiết về cơ hội  hợp tác, Quý đối tác cần bổ sung các giấy tờ sau: </span></td>
                    </tr>
                    <tr valign="top">
                        <td><span style="font-size: 13px;">&nbsp;</span></td>
                        <td style="width: 99%;">
                        <center>
                        <table style="border-collapse: collapse;" cellspacing="2" cellpadding="2" border="0" width="98%">
                            <tbody>
                                <tr valign="top">
                                    <td><span style="font-size: 13px;">-&nbsp;</span></td>
                                    <td style="width: 99%;"><span style="font-size: 13px;">Giấy Chứng Nhận Đăng Ký Kinh Doanh (đối với doanh nghiệp) hoặc Bản sao CMND và hộ khẩu (đối với khách hàng cá nhân)</span></td>
                                </tr>
                                <tr valign="top">
                                    <td><span style="font-size: 13px;">-&nbsp;</span></td>
                                    <td style="width: 99%;"><span style="font-size: 13px;">Giấy Chứng Nhận Đăng Ký Nhãn Hiệu bởi Cục Sở Hữu Trí Tuệ (nếu cần)</span></td>
                                </tr>
                                <tr valign="top">
                                    <td><span style="font-size: 13px;">-&nbsp;</span></td>
                                    <td style="width: 99%;"><span style="font-size: 13px;">Giấy tờ chứng minh nguồn gốc xuất xứ hàng hóa.</span></td>
                                </tr>
                                <tr valign="top">
                                    <td><span style="font-size: 13px;">-&nbsp;</span></td>
                                    <td style="width: 99%;"><span style="font-size: 13px;">Tải liệu giới thiệu về thương hiệu.</span></td>
                                </tr>
                                <tr valign="top">
                                    <td><span style="font-size: 13px;">-&nbsp;</span></td>
                                    <td style="width: 99%;"><span style="font-size: 13px;">Hình ảnh hoạt động tại các cửa hàng, chi nhánh bên ngoài, bên trong các TTTM/Siêu thị (nếu có)</span></td>
                                </tr>
                                <tr valign="top">
                                    <td><span style="font-size: 13px;">-&nbsp;</span></td>
                                    <td style="width: 99%;"><span style="font-size: 13px;">Giấy tờ khác theo quy định pháp luật hiện hành nếu kinh doanh hàng hóa dịch vụ đặc thù.</span></td>
                                </tr>
                            </tbody>
                        </table>
                        </center>
                        </td>
                    </tr>
                </tbody>
            </table>
            </center>
            </td>
        </tr>
        <tr valign="top">
            <td style="text-align: left; vertical-align: top;"><span style="font-size: 13px;"><strong>3.</strong></span> </td>
            <td style="width: 99%;"><span style="font-size: 13px;"><strong>Giới thiệu mặt bằng cho thuê tại hệ thống centreworld <a title="Download file Gioi thieu mat bang cho thue" href="contact/quytrinh_thue_matbang.pdf"target="_blank"><em>(dowload tại đây)</em></a></strong></span></td>
        </tr>
        <tr valign="top">
            <td style="text-align: left; vertical-align: top;"><span style="font-size: 13px;"><strong>4.</strong></span> </td>
            <td style="width: 99%;"><span style="font-size: 13px;"><strong>Thông tin liên hệ:</strong></span></td>
        </tr>
        <tr valign="top">
            <td style="text-align: left; vertical-align: top;"><span style="font-size: 13px;">&nbsp;</span></td>
            <td style="width: 99%;"><span style="font-size: 13px;">Để biết thông tin chi tiết và đăng ký thuê mặt bằng, vui lòng liên hệ: <br>
            </span>
            <span style="font-size: 13px;"><strong>Liên hiệp HTX TM TP. Cần Thơ (CanTho Centrel)  <br>
            Phòng Quản Lý Không Gian Mua Sắm <br>
            </strong>
            Địa chỉ : 42 Võ Trường Toản<br>
            Điện thoại: 0907 999 999; Ext: 1167 | Fax: +84 8 3915 4335<br>
            Email: tccuong.httt0114@student.ctuet.edu.vn<br>
            </span>
            </td>
        </tr>
    </tbody>
</table>
</center>
</div>

</div><!-- End_Module_2133 --></div></div>
<div class="SLi1"></div>

</div></div>
			<div id="dnn_ContentPane2" class="DNNEmptyPane">
			</div>
			<div id="dnn_ContentPane3" class="DNNEmptyPane">
			</div>
            
		</div>
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
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5b31d0ffeba8cd3125e32bc5/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>