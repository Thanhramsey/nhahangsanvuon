<!DOCTYPE html>
<html lang="en">

<head>

	<title>Nhà Hàng Sân Vườn</title>
	<!--

Eatery Cafe Template

http://www.templatemo.com/tm-515-eatery

-->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="icon" type="image/x-icon" href="<?php echo base_url() ?>public/assets/images/favicon.ico">
	<link rel="stylesheet" href="<?php echo base_url() ?>public/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>public/assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>public/assets/css/animate.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>public/assets/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>public/assets/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>public/assets/css/magnific-popup.css">

	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>public/assets/css/templatemo-style.css">

</head>

<body>

	<!-- PRE LOADER -->
	<section class="preloader">
		<div class="spinner">

			<span class="spinner-rotate"></span>

		</div>
	</section>


	<!-- MENU -->
	<section class="navbar custom-navbar navbar-fixed-top tin-tuc" role="navigation">
		<div class="container">

			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
				</button>

				<!-- lOGO TEXT HERE -->
				<a href="trang-chu" class="navbar-brand">NHÀ HÀNG <span>.</span> SÂN VƯỜN</a>
			</div>

			<!-- MENU LINKS -->
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-nav-first">
					<li><a href="trang-chu" class="smoothScroll">Trang Chủ</a></li>
					<li><a href="tin-tuc" class="smoothScroll">Tin tức</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<!-- <li><a href="#">Gọi ngay! <i class="fa fa-phone"></i> 0977.66.9989</a></li> -->
					<a href="#footer" class="section-btn">Đặt bàn</a>
				</ul>
			</div>

		</div>
	</section>


	<section id="content">
		<div class="container" style="margin-top:50px">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 product-content" id="list-content">
				<div class="product-wrap">
					<h2 style="border-bottom:2px solid black">
						Tin tức
					</h2>
					<div class="row m-0" style="padding-left:15px">
						<div class = "text-center pull-left">
							<ul class ="pagination">
							<?php echo $strphantrang; ?>
							</ul>
						</div>
					</div>
					<div class="row m-0" style="padding-left:15px">
						<?php foreach ($list as $item) : ?>
							<div class="col-md-6" style="margin-bottom: 10px;height: 350px;">
									<a class="fs-ne2-img" href="tin-tuc/<?php echo $item['alias']; ?>">
										<img style="width: 100%; height: 80%;" src="<?php echo base_url() ?>public/images/posts/<?php echo $item['img']; ?>">
									</a>
									<h3 style="margin:10px 0px  !important"><a class="fs-ne2-tit" href="<?php echo base_url() ?>tin-tuc/<?php echo $item['alias']; ?>" title=""><?php echo $item['title']; ?></a></h3>
										<div class="fs-ne2-txt"><?php echo $item['introtext']; ?></div>
										<p class="fs-ne2-bot">
											<span class="fs-ne2-user">
												<img class="lazy" src="" style="">
											</span>
											<span>Đăng lúc: <?php echo $item['created']; ?></span>
										</p>
							</div>
						<?php endforeach; ?>

					</div>
				</div>
			</div>
			<a href="<?php echo base_url() ?>trang-chu" class="btn btn-large btn-rounded" style="margin-top:10px;background:#ce3232;color:#fff">Trờ về</a>
		</div>
		</div>
	</section>

	<!-- FOOTER -->
	<footer id="footer" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row">

				<div class="col-md-3 col-sm-8">
					<div class="footer-info">
						<div class="section-title">
							<h2 class="wow fadeInUp" data-wow-delay="0.2s">Địa chỉ</h2>
						</div>
						<address class="wow fadeInUp" data-wow-delay="0.4s">
							<p>Thôn Hợp Thắng<br> Xã IaDrang<br>Huyện Chuprong</p>
						</address>
					</div>
				</div>

				<div class="col-md-3 col-sm-8">
					<div class="footer-info">
						<div class="section-title">
							<h2 class="wow fadeInUp" data-wow-delay="0.2s">Liên Hệ</h2>
						</div>
						<address class="wow fadeInUp" data-wow-delay="0.4s">
							<p>0977669989</p>
						</address>
					</div>
				</div>

				<div class="col-md-4 col-sm-8">
					<div class="footer-info footer-open-hour">
						<div class="section-title">
							<h2 class="wow fadeInUp" data-wow-delay="0.2s">Thời gian phục vụ</h2>
						</div>
						<div class="wow fadeInUp" data-wow-delay="0.4s">
							<p>Cả tuần</p>
							<div>
								<strong>Monday - Sunday</strong>
								<p>9:00 AM - 10:00 PM</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-2 col-sm-4">
					<ul class="wow fadeInUp social-icon" data-wow-delay="0.4s">
						<li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
						<li><a href="#" class="fa fa-twitter"></a></li>
						<li><a href="#" class="fa fa-instagram"></a></li>
						<li><a href="#" class="fa fa-google"></a></li>
					</ul>

					<div class="wow fadeInUp copyright-text" data-wow-delay="0.8s">
						<p><br>Copyright &copy; 2022 <br>Nhà hàng Sân Vườn

							<br><br>Design: VNPT Gia Lai
						</p>
					</div>
				</div>

			</div>
		</div>
	</footer>
	<a class="btn-call-now btn-call-01 cursorsHover" href="tel:032 742 7268" rel="nofollow">
		<em class="licon-telephone"><i class="fa fa-phone"></i></em>
		<span class="cursorsHover" style="font-size:14px">032 742 7268</span>
	</a>
	<div class="go-top"><i class="fa fa-angle-double-up"></i><i class="fa fa-angle-double-up"></i></div>


	<!-- SCRIPTS -->
	<script src="<?php echo base_url() ?>public/assets/js/jquery.js"></script>
	<script src="<?php echo base_url() ?>public/assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>public/assets/js/jquery.stellar.min.js"></script>
	<script src="<?php echo base_url() ?>public/assets/js/wow.min.js"></script>
	<script src="<?php echo base_url() ?>public/assets/js/owl.carousel.min.js"></script>
	<script src="<?php echo base_url() ?>public/assets/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo base_url() ?>public/assets/js/smoothscroll.js"></script>
	<script src="<?php echo base_url() ?>public/assets/js/custom.js"></script>

</body>

</html>