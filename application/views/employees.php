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
    </head>
    <body>
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
                <h1 class = "h1title" style = "border-bottom: 2px solid currentColor;">Employees</h1><br> 
                    <div class="row ">
                        <div class="col-md-3 sidebar" style = "">
								<nav>
                                <h4 style="font-weight:bold;">ABOUT</h4>
                                <a href="<?php echo base_url('User/about');?>">Who we are</a>
                                <a href="<?php echo base_url('User/mvision');?>">Mission and Vision</a>
                                <a href="<?php echo base_url('User/quality');?>">Quality Policy</a>
                                <a href="<?php echo base_url('User/orgstructure');?>">Organizational Struture</a>
                                <a href="<?php echo base_url('User/director');?>">Director</a>
                                <a href="<?php echo base_url('User/employees');?>">Employees</a>
                                </nav>
                            </div>
                            <div class="col-md-8 text-center"style = "border-left:1px solid #031261; padding-left:20px;padding-right:20px;">
							<div id="demo" class="carousel carousel-dark slide" data-bs-ride="carousel">
								<div class="carousel-indicators">
									<button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
									<?php $counter = 1; foreach (array_slice($emp,1) as $row){ ?>
									<button type="button" data-bs-target="#demo" data-bs-slide-to="<?php echo $counter?>"></button>
									<?php $counter++; }?>
								</div>
								<div class="carousel-inner">
								<?php foreach(array_slice($emp, 0, 1) as $row ){ ?>
									<div class="carousel-item active">
										<div class="col-xl-10 col-sm-8 mb-7 mx-auto">
											<div class="bg-white shadow-lg p-3 mb-5 bg-body rounded">
											<h5 class="mb-0"><?php echo $row->place?></h5> <br>
												<img class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm" width="100" src="<?php echo base_url("uploads/$row->image");?>">
												<h5 class="mb-0"><?php echo $row->name?></h5><span class="small text-uppercase text-muted"><?php echo $row->position?></span>
												<h5><span class="small text-uppercase "><?php echo $row->email?></span></h5>
												<!--
												<ul class="social mb-0 list-inline mt-3">
													<li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
													<li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
													<li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
													<li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
												</ul>-->
											</div>
										</div>
									</div>
									<?php }?>

									<?php foreach(array_slice($emp,1) as $row) { ?>
									<div class="carousel-item">
									<div class="col-xl-10  col-sm-8 mb-7 mx-auto">
											<div class="bg-white shadow-lg p-3 mb-5 bg-body rounded">
											<h5 class="mb-0"><?php echo $row->place?></h5> <br>
												<img class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm" width="100" src="<?php echo base_url("uploads/$row->image");?>">
												<h5 class="mb-0"><?php echo $row->name?></h5><span class="small text-uppercase text-muted"><?php echo $row->position?></span>
												<h5><span class="small text-uppercase "><?php echo $row->email?></span></h5>
												<!--
												<ul class="social mb-0 list-inline mt-3">
													<li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
													<li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
													<li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
													<li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
												</ul>-->
											</div>
										</div>
									</div>
									<?php }?>
									
								</div>
								<button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
									<span class="carousel-control-prev-icon"></span>
									<span class="visually-hidden">Previous</span>
								</button>
								<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
									<span class="carousel-control-next-icon"></span>
									<span class="visually-hidden">Next</span>
								</button>
							</div>
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
						<?php foreach ($cert as $row) {?>
						<div class="col-lg-2 col-md-5 text-center">
							<div class="mt-5">
								<div class="mb-2"><img style = "max-width:100px;"class="img-fluid" src="<?php echo base_url("uploads/$row->image");?>"></div>
							</div>
						</div>
						<?php }?>
					</div>
				</div>
			</section>
            <br>
        </main>
        <?php $this->view('footer'); ?>

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

</body>

</html>