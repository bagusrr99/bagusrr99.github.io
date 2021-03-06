<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="../img/logo/kopiTokHitam.png" type="image/png">
	<title>KopiTok</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	<link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
</head>

<body>
<?php
function format_angka($angka) {
  if ($angka > 1) {
    $hasil =  number_format($angka,0, ",",".");
  }
  else {
    $hasil = 0; 
  }
  return $hasil;
}?>

	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="top_menu row m0">
			<div class="container-fluid">
				<div class="float-left">
					<p>Hubungi: (0123) 4896</p>
				</div>
				<div class="float-right">
					<ul class="right_side">
						<li>
							<h6>Untuk pemesanan silahkan Login </h6>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.php">
						<img src="../img/logo/kopiTokHitam.png" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					 aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<div class="row w-100">
							<div class="col-lg-12 pr-0">
								<ul class="nav navbar-nav navbar-right right_nav pull-right">
								<hr>
									<li class="nav-item">
										<a href="file/web/login.php" class="icons">
											<i class="fa fa-sign-in"><h6>&nbsp; Login / Register &nbsp;</h6></i>
										</a>
									</li>
								<hr>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->

	<!--================Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="overlay"></div>
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content row">
					<div class="offset-lg-2 col-lg-8">
						<h3 >Selamat Datang</h3>

						<a class="white_bg_btn">Penuhi semangat hari-harimu dengan kebutuhan cafein yang cukup</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Banner Area =================-->

	<!--================Feature Product Area =================-->
	<section class="feature_product_area section_gap">
		<div class="main_box">
			<div class="container-fluid">
				<div class="row">
					<div class="main_title">
						<h2>Daftar Menu Terbaru</h2>
						<p>Penuhi semangat hari-harimu dengan kebutuhan cafein yang cukup</p>
					</div>
				</div>
				<div class="row">
					<?php

                include_once("file/web/koneksi.php");
                $select=mysqli_query($konek,"SELECT * FROM produk ORDER BY id_produk DESC");
                while ($data = mysqli_fetch_array($select)) 

                	{echo "<div class='col col1'>
						<div class='f_p_item'>
							<div class='f_p_img'>
								<img class='img-fluid' src='../img/GambarProduk/".$data['gambar']."' alt=''>
							</div>
							<a href='#'>
								<h4>".$data['nama_produk']."</h4>
							</a>
							<h5>Rp.".format_angka($data['harga'])."</h5>
						</div>
					</div>";}
                ?>

				</div>

			</div>
		</div>
	</section>
	<!--================End Feature Product Area =================-->


	<!--================ start footer Area  =================-->
	<footer class="footer-area section_gap">
		
				<p class="col-lg-12 footer-text text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> KopiTok. All rights reserved
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
	</footer>
	<!--================ End footer Area  =================-->



	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="vendors/lightbox/simpleLightbox.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="vendors/isotope/isotope-min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="vendors/counter-up/jquery.waypoints.min.js"></script>
	<script src="vendors/flipclock/timer.js"></script>
	<script src="vendors/counter-up/jquery.counterup.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/theme.js"></script>
</body>

</html>