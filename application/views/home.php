<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<title>OADR-PH</title>
		<meta content="" name="description">
		<meta content="" name="keywords">
		<link href="<?php echo base_url('assets/img/apple-touch-icon.png');?>" rel="apple-touch-icon">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">
		<link href="<?php echo base_url('assets/vendor/animate.css/animate.min.css');?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/vendor/aos/aos.css');?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css');?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/vendor/boxicons/css/boxicons.min.css');?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/vendor/glightbox/css/glightbox.min.css');?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.css');?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">
		<link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
		<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
	</head>
	<body style = "background-color:#fff5ee;">
		<?php include_once('header.php');?>
		<section id="hero" class="d-flex justify-cntent-center align-items-center">
			<div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
				<div class="carousel-item active">
					<div class="carousel-container">
						<img  class="img-fluid animate__animated animate__fadeInDown"  src="<?php echo base_url('assets/img/OADRNOBG.png');?>">
						<h5 class="animate__animated animate__fadeInUp" style = "color:white;">DEPARTMENT OF JUSTICE &ensp;<img  class="img-fluid" style = "color:white;max-width:40px; height:40px;" src="<?php echo base_url('assets/img/dojlogo.png');?>"></h5>
						<a href="" class="btn-get-started animate__animated animate__fadeInUp">Explore</a>
					</div>
				</div>
			</div>
		</section>
		<main id="main">
			<section class="features">
				<div class="container">
					<div class="row ">
						<h2>Announcements</h2><br>
						<div class="col-md-12" >
							<div id="demo" class="carousel slide" data-bs-ride="carousel">
								<div class="carousel-indicators">
									<button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
									<button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
									<button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
								</div>
								<div class="carousel-inner" >
									<div class="carousel-item active">
										<section class="features">
											<div class="container ">
												<div class="row ">
													<div class="col-md-8" style>
														<img class="img-fluid" style = "max-width:800px;" src="<?php echo base_url('assets/img/doj.jpg');?>">
													</div>
													<div class="col-md-4" style = "background-color:#E0AA3E;">
														<br>
														<h2 class="text-center">TITLE1</h2><br>
														<p style = "text-align:justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
														<a href="http://localhost/OADR-Website/User/newstitle" ><button type="button" class="btn btn-outline-primary">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></button></a>
													</div>
												</div>
											</div>
										</section>
									</div>
									<div class="carousel-item">
										<section class="features">
											<div class="container">
												<div class="row">
													<div class="col-md-8">
														<img class="img-fluid" style = "max-width:800px;" src="<?php echo base_url('assets/img/news1.jpg');?>">
													</div>
													<div class="col-md-4" style = "background-color:#E0AA3E;">
														<br>
														<h2 class="text-center">TITLE2</h2><br>
														<p style = "text-align:justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
														<a href="http://localhost/OADR-Website/User/newstitle" ><button type="button" class="btn btn-outline-primary">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></button></a>
													</div>
												</div>
											</div>
										</section>
									</div>
									<div class="carousel-item">
										<section class="features">
											<div class="container">
												<div class="row">
													<div class="col-md-8">
														<img class="img-fluid" style = "max-width:800px;" src="<?php echo base_url('assets/img/news2.jpg');?>">
													</div>
													<div class="col-md-4" style = "background-color:#E0AA3E;">
														<br>
														<h2 class="text-center">TITLE3</h2><br>
														<p style = "text-align:justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
														<a href="http://localhost/OADR-Website/User/newstitle" ><button type="button" class="btn btn-outline-primary">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></button></a>
													</div>
												</div>
											</div>
										</section>
									</div>
								</div>
								<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
									<span class="carousel-control-prev-icon"></span>
								</button>
								<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
									<span class="carousel-control-next-icon"></span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="features"  >
				<div class="container">
					<div class="row">
						<h2>Upcoming Events</h2><br>
						<div class="col-md-12" >
							<div id="demo2" class="carousel carousel-dark slide" data-interval="false">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<section class="features " >
											<div class="container" style = "" >
												<div class="row ">
													<div class="col-md-4" style = "border: 2px solid #0f4d92; border-radius: 0 20px; background-color: #6a93cb; background-image: linear-gradient(315deg, #6a93cb 0%, #a4bfef 74%);" >
														<h1 class = "month">JUNE <br>2022</h1>
													</div>
													<div class="col-md-8" style = "background-color:#fffff0; border: 2px solid #0f4d92; border-radius: 30px 20px;" >
														<br>
														<h3>NO EVENTS</h3><br>
													</div>
												</div>
											</div>
										</section>
									</div>
									<div class="carousel-item">
										<section class="features ">
											<div class="container">
												<div class="row ">
													<div class="col-md-4" style = "border: 2px solid #0f4d92; border-radius: 0 20px; background-color: #6a93cb; background-image: linear-gradient(315deg, #6a93cb 0%, #a4bfef 74%);" >
														<h1 class = "month">JULY <br>2022</h1>
													</div>
													<div class="col-md-8" style = "background-color:#fffff0; border: 2px solid #0f4d92; border-radius: 30px 20px;" >
														<br>
														<h3>NO EVENTS</h3><br>
													</div>
												</div>
											</div>
										</section>
									</div>
									<div class="carousel-item">
										<section class="features ">
											<div class="container">
												<div class="row ">
													<div class="col-md-4" style = "border: 2px solid #0f4d92; border-radius: 0 20px; background-color: #6a93cb; background-image: linear-gradient(315deg, #6a93cb 0%, #a4bfef 74%);" >
														<h1 class = "month">AUGUST <br> 2022</h1>
													</div>
													<div class="col-md-8" style = "background-color:#fffff0; border: 2px solid #0f4d92; border-radius: 30px 20px;" >
														<br>
														<h3>NO EVENTS</h3><br>
													</div>
												</div>
											</div>
										</section>
									</div>
								</div>
								<button class="carousel-control-prev" type="button" data-bs-target="#demo2" data-bs-slide="prev">
									<span class="carousel-control-prev-icon"></span>
								</button>
								<button class="carousel-control-next" type="button" data-bs-target="#demo2" data-bs-slide="next">
									<span class="carousel-control-next-icon"></span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="page-section" id="services">
				<div class="container px-4 px-lg-5">
					<h2 class="text-center mt-0">We are ISO Certified  <img style = "max-width:100px;"class="img-fluid" src="<?php echo base_url('assets/img/certification.png');?>"></h2>
					<hr class="divider" />
					<div class="row gx-4 gx-lg-5">
						<div class="col-lg-2 col-md-5 text-center">
							<div class="mt-5">
								<div class="mb-2"><img style = "max-width:100px;"class="img-fluid" src="<?php echo base_url('assets/img/1.png');?>"></div>
							</div>
						</div>
						<div class="col-lg-2 col-md-5 text-center">
							<div class="mt-5">
								<div class="mb-2"><img style = "max-width:100px;"class="img-fluid" src="<?php echo base_url('assets/img/2.png');?>"></div>
							</div>
						</div>
						<div class="col-lg-2 col-md-5 text-center">
							<div class="mt-5">
								<div class="mb-2"><img style = "max-width:100px;"class="img-fluid" src="<?php echo base_url('assets/img/3.png');?>"></div>
							</div>
						</div>
						<div class="col-lg-2 col-md-5 text-center">
							<div class="mt-5">
								<div class="mb-2"><img style = "max-width:100px;"class="img-fluid" src="<?php echo base_url('assets/img/4.png');?>"></div>
							</div>
						</div>
						<div class="col-lg-2 col-md-5 text-center">
							<div class="mt-5">
								<div class="mb-2"><img style = "max-width:100px;"class="img-fluid" src="<?php echo base_url('assets/img/5.png');?>"></div>
							</div>
						</div>
						<div class="col-lg-2 col-md-5 text-center">
							<div class="mt-5">
								<div class="mb-2"><img style = "max-width:100px;"class="img-fluid" src="<?php echo base_url('assets/img/6.png');?>"></div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
		<div class="footer-basic">
			<footer>
				<div class="social">
					<a href="#"><i class="fa fa-facebook-square"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-linkedin-square"></i></a>
					<a href="#"><i class="fa fa-twitter-square"></i></a>
				</div>
				<ul class="list-inline">
					<li class="list-inline-item"><a href="http://localhost/OADR-Website/User/about">About</a></li>
					<li class="list-inline-item"><a href="">Quality Policy</a></li>
					<li class="list-inline-item"><a href="">Employees</a></li>
					<li class="list-inline-item"><a href="">Contact Us</a></li>
					<li class="list-inline-item"><a href="">Resources</a></li>
				</ul>
				<p class="copyright">Office for Alternative Dispute Resolution © 2022</p>
			</footer>
		</div>
		<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
		<script src="<?php echo base_url('assets/vendor/purecounter/purecounter.js');?>"></script>
		<script src="<?php echo base_url('assets/vendor/aos/aos.js');?>"></script>
		<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
		<script src="<?php echo base_url('assets/vendor/glightbox/js/glightbox.min.js');?>"></script>
		<script src="<?php echo base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js');?>"></script>
		<script src="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.js');?>"></script>
		<script src="<?php echo base_url('assets/vendor/waypoints/noframework.waypoints.js');?>"></script>
		<script src="<?php echo base_url('assets/vendor/php-email-form/validate.js');?>"></script>
		<script src="<?php echo base_url('assets/js/main.js');?>"></script>
		<script src="<?php echo base_url('assets/js/script.js');?>"></script>
	</body> 
</html>