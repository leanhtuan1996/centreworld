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
			<!-- portfolio -->
			<div class="portfolio" id="gallery">
		<div class="container">
			<div class="agileits-title"> 
				<h3>Kiot</h3> 
			</div>
			<ul class="simplefilter w3layouts agileits">
				<li class="active w3layouts agileits" data-filter="all">All</li>
				<li class="w3layouts agileits" data-filter="1">Tầng trệt</li>
				<li class="w3layouts agileits" data-filter="2">Tầng 1</li>
				<li class="w3layouts agileits" data-filter="3">Tầng 2</li>
				<li class="w3layouts agileits" data-filter="4">Tầng 3</li>
			</ul>

			

			<div class="filtr-container w3layouts agileits">
			
			<?php 
			$kiot = geatallKiotbyid_floor(0);
			$count = count($kiot);
			for ($i = 0; $i< $count ; $i++){

				$ID_k = $kiot[$i]['ID_k'];
								
				$name_pro = $kiot[$i]['name_k'];
				
				$img = $kiot[$i]['image'];

				$description = $kiot[$i]['description'];
				
				$id_floor = $kiot[$i]['id_floor'];

			?>

				<div class="filtr-item w3layouts agileits portfolio-t" data-category="1" data-sort="Busy streets">
					<a href="<?php echo $img ?>" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="<?php echo $img ?>" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
							<h3><?php echo $description ?> <span><?php echo $name_pro ?></span></h3>
							</figcaption>
						</figure>
					</a>
				</div>
				<?php } ?>

			<?php 
			$kiot = geatallKiotbyid_floor(1);
			$count = count($kiot);
			for ($i = 0; $i< $count ; $i++){

				$ID_k = $kiot[$i]['ID_k'];
								
				$name_pro = $kiot[$i]['name_k'];
				
				$img = $kiot[$i]['image'];

				$description = $kiot[$i]['description'];
				
				$id_floor = $kiot[$i]['id_floor'];

			?>

				<div class="filtr-item w3layouts agileits portfolio-t" data-category="2" data-sort="Busy streets">
					<a href="<?php echo $img ?>" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="<?php echo $img ?>" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
							<h3><?php echo $description ?> <span><?php echo $name_pro ?></span></h3>
							</figcaption>
						</figure>
					</a>
				</div>
				<?php } ?>

			<?php 
			$kiot = geatallKiotbyid_floor(2);
			$count = count($kiot);
			for ($i = 0; $i< $count ; $i++){

				$ID_k = $kiot[$i]['ID_k'];
								
				$name_pro = $kiot[$i]['name_k'];
				
				$img = $kiot[$i]['image'];

				$id_floor = $kiot[$i]['id_floor'];

				$description = $kiot[$i]['description'];

			?>

				<div class="filtr-item w3layouts agileits portfolio-t" data-category="3" data-sort="Busy streets">
					<a href="<?php echo $img ?>" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="<?php echo $img ?>" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
							<h3><?php echo $description ?> <span><?php echo $name_pro ?></span></h3>
							</figcaption>
						</figure>
					</a>
				</div>
				<?php } ?>

							<?php 
			$kiot = geatallKiotbyid_floor(3);
			$count = count($kiot);
			for ($i = 0; $i< $count ; $i++){

				$ID_k = $kiot[$i]['ID_k'];
								
				$name_pro = $kiot[$i]['name_k'];
				
				$img = $kiot[$i]['image'];

				$id_floor = $kiot[$i]['id_floor'];

				$description = $kiot[$i]['description'];

			?>

				<div class="filtr-item w3layouts agileits portfolio-t" data-category="4" data-sort="Busy streets">
					<a href="<?php echo $img ?>" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="<?php echo $img ?>" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3><?php echo $description ?> <span><?php echo $name_pro ?></span></h3>
							</figcaption>
						</figure>
					</a>
				</div>
				<?php } ?>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //testimonial -->
	<div class="jarallax testimonial" id="testimonial">
		<div class="testimonial-dot">
			<div class="container">
				<div class="agileits-title testimonial-heading"> 
					<h3>Tuyển dụng</h3> 
				</div>

			<div class="markets-grids">
			<?php
							$rq = getallrqbystatus();
						
			

							$count = count($rq);
							
							for ($i=0; $i < $count ; $i++)
							{
								$kiot = getkiottById($rq[$i]['ID_k']);
								
								$id = $rq[$i]['ID_k'];
								$ID_h = $rq[$i]['ID_h'];
								
								$recruitment = $rq[$i]['recruitment'];
								
								$position = $rq[$i]['position'];
								
								$salary = $rq[$i]['salary'];
								?>
								<div class="col-md-4 w3ls-markets-grid">
									<div class="agileits-icon-grid">
										<div class="icon-left">
											<i class="fa fa-gamepad" aria-hidden="true"></i>
										</div>
										<div class="icon-right">
											<h5><?php echo $kiot ['description'] ?> - <?php echo $kiot ['name_k'] ?></h5>
											<p> tuyển dụng: <?php echo $position ?></p>
											<p>vị trí : <?php 		 if ($recruitment == 1)
							{
								echo 'Nhân viên chính thức ';
							}
							else

							{
								
								echo 	'Nhân viên hợp đồng';
						
							}
 ?></p>

										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
							<?php }?>

			</div>
		  </div>
  </div>
</div>
		<!-- team -->
		<div class="team" id="team" style="padding-bottom: 200px;">
			<div class="container">
				<div class="agileits-title"> 
					<h3>Tin tức nhanh</h3> 
				</div>
				<div class="agileits-team-grids">
					<div class="col-md-3 agileits-team-grid" style="width: 380px;height: 250px;">
						<div class="team-info">
							<img src="images/t1.jpg" alt="">
							<div class="team-caption"> 
								<h3>SPECIAL OFFERS</h3>
								<ul>
								</ul>
							</div>
						</div>
								<p class="text-center">Nằm trong chuỗi các sự kiện tri ân Quý khách hàng, Giovanni trân trọng mang tới chương trình SPECIAL OFFERS với những ưu đãi hấp dẫn. Vậy bạn đã biết chuỗi các sự kiện tri ân Quý khách hàng chưa? Hãy cùng khám phá chuỗi các sự kiện tri ân Quý khách hàng nhé!</p>
					</div>
					<div class="col-md-3 agileits-team-grid" style="width: 380px;height: 250px;">
						<div class="team-info">
							<img src="images/t2.jpg" alt="">
							<div class="team-caption"> 
								<h3>KHAI TRƯƠNG GIAN HÀNG H&M </h3>
								<ul>
								</ul>
							</div>
						</div>
								<p class="text-center">Là một trong những thương hiệu đình đám với giá cả khá là bình dân H&M sẽ được ra mắt vào thời gian tới. Với không gian của gian hàng rộng rãi có thể trưng bày nhiều sản phầm để quý khách có thể lựa chọn. Với việc khai trương sẽ có những phần quà hấp dẫn giành tặng quý khách hàng!</p>
					</div>
				  <div class="col-md-3 agileits-team-grid" style="width: 380px;height: 250px;">
						<div class="team-info">
							<img src="images/t3.jpg" alt="">
							<div class="team-caption"> 
								<h3>VUI XUÂN ĐẮC LỘC ĐÓN ƯU ĐÃI NGẬP TRÀN</h3>
								<ul>
								</ul>
							</div>
						</div>
								<p class="text-center">Tết sung túc là khi gia đình hạnh phúc, thuận hòa, là khi xung quanh ngập sắc hoa tươi, là khi gửi trao những lời chúc xuân ý nghĩa. Hiểu được điều đó Tết Mậu Tuất 2018, Centre World sẽ tái hiện khung cảnh HỘI CHỢ XUÂN ĐẮC LỘC với hàng loạt những décor đậm đà sắc xuân!</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!-- //team -->
	
	<!-- markets -->
	<div class="markets" id="markets">
		<div class="container">
			<div class="agileits-title"> 
				<h3>Dịch vụ</h3>
			</div>
			<div class="markets-grids">
				<div class="col-md-4 w3ls-markets-grid">
					<div class="agileits-icon-grid">
						<div class="icon-left">
							<i class="fa fa-gamepad" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Thời Trang - Làm Đẹp</h5>
							<p>Tổng hợp các gian hàng cập nhật xu hướng thời trang mặc đẹp, mẹo làm đẹp mới nhất. Bí quyết, cách làm đẹp da, kiểu tóc đẹp, ăn mặc trẻ trung, hiện đại. Phù hợp với mọi đối tượng lứa tuổi.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 w3ls-markets-grid">
					<div class="agileits-icon-grid">
						<div class="icon-left">
							<i class="fa fa-cutlery" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Ẩm Thực</h5>
							<p>Các gian hàng ẩm thực đa dạng phong phú từ nhiều thể loại khác nhau như khu Food court, nhà hàng, các quán cà phê. Từ ẩm thực Hàn Quốc, Nhật Bản hay các dạng thức ăn nhanh của Mỹ.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 w3ls-markets-grid">
					<div class="agileits-icon-grid">
						<div class="icon-left">
							<i class="fa fa-home" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Nhà Cửa - Gia Đình</h5>
							<p>Các sản phẩm đồ dùng gia đình, đồ dùng tiện ích cần thiết cho ngôi nhà của bạn. Những gian hàng với những nhân viên tư vấn cực thân thiện chuyên nghiệp giúp bạn tìm được những sản phầm phù hợp nhất.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 w3ls-markets-grid">
					<div class="agileits-icon-grid">
						<div class="icon-left">
							<i class="fa fa-gamepad" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Vui Chơi Giải Trí</h5>
							<p>Khu vui chơi giải trí trong nhà với hàng trăm trò chơi, nhiều khu vui chơi theo lứa tuổi, sở thích là nơi lý tưởng để cha mẹ đưa trẻ đi trốn nóng dịp cuối tuần và ngày nghỉ.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 w3ls-markets-grid">
					<div class="agileits-icon-grid">
						<div class="icon-left">
							<i class="fa fa-comments" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Góp ý</h5>
							<p>Những thắc mắc sẽ được đội ngủ nhân viên giải đáp cận kẽ và những ý kiến của khách hàng về dịch vụ cũng như về thiết bị ở trung tâm thương mại.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 w3ls-markets-grid">
					<div class="agileits-icon-grid">
						<div class="icon-left">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Tin tức</h5>
							<p>Nhận thông báo tin tức về các dịch vụ, các sự kiện khuyến mãi sớm nhất, thẻ thành viên và nhu cầu cho thuê Kiot hoặc tuyển nhân viên.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //markets -->

	<!-- mail -->
	<div class="mail" id="mail">
		<div class="container">
			<div class="agileits-title">
				<h3>Liên hệ</h3>
			</div> 
			<div class="w3_mail_grids">
				<form action="#" method="post">
					<span class="input input--jiro">
						<input class="input__field input__field--jiro" type="text" id="input-10" name="Name" placeholder="Tên liên hệ" required/>
						<label class="input__label input__label--jiro" for="input-10">
							<span class="input__label-content input__label-content--jiro">Tên liên hệ</span>
						</label>
					</span>
					<span class="input input--jiro">
						<input class="input__field input__field--jiro" type="email" id="input-11" name="Email" placeholder="Địa chỉ Email" required/>
						<label class="input__label input__label--jiro" for="input-11">
							<span class="input__label-content input__label-content--jiro">Địa chỉ Email</span>
						</label>
					</span>
					<span class="input input--jiro">
						<input class="input__field input__field--jiro" type="text" id="input-12" name="Phone Number" placeholder="Số điện thoại" required/>
						<label class="input__label input__label--jiro" for="input-12">
							<span class="input__label-content input__label-content--jiro">Số điện thoại</span>
						</label>
					</span>
					<textarea name="Tin nhắn" placeholder="Lời nhắn..." required></textarea>
					<input type="submit" value="Gửi tin nhắn">
				</form>
			</div>
		</div>
	</div>
	<script src="js/classie.js"></script>
	<script>
			(function() {
				// trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
				if (!String.prototype.trim) {
					(function() {
						// Make sure we trim BOM and NBSP
						var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
						String.prototype.trim = function() {
							return this.replace(rtrim, '');
						};
					})();
				}

				[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
					// in case the input is already filled..
					if( inputEl.value.trim() !== '' ) {
						classie.add( inputEl.parentNode, 'input--filled' );
					}

					// events:
					inputEl.addEventListener( 'focus', onInputFocus );
					inputEl.addEventListener( 'blur', onInputBlur );
				} );

				function onInputFocus( ev ) {
					classie.add( ev.target.parentNode, 'input--filled' );
				}

				function onInputBlur( ev ) {
					if( ev.target.value.trim() === '' ) {
						classie.remove( ev.target.parentNode, 'input--filled' );
					}
				}
			})();
		</script>
	<!-- //mail -->
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
<!--End of Tawk.to Script-->
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