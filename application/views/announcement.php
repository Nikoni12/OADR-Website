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
                <h1 class = "h1title" style = "border-bottom: 2px solid currentColor;">Announcements</h1><br> 
				<?php 
                    foreach($announcement as $row) {
				?>
					<div class="row">
                        <div class="row mb-12 border-bottom pb-2">
                            <div class="col-md-3">
								<?php echo "<td>"."<img src='".base_url().'uploads/'.$row->announcement_image."' class='img-fluid shadow-1-strong rounded'>"."</td>"; ?>
                            </div>
                            <div class="col-md-9">
                               	<?php echo "<p class='mb-2'><strong>$row->announcement_title</strong></p>" ?>
                                <?php echo "<p style = 'text-align:justify;'> <u>$row->announcement_content</u></p>" ?>
                                <button data-bs-toggle="modal" data-bs-target="#oadr1" type="button" class="btn btn-outline-info">View <i class="fa fa-eye" aria-hidden="true"></i></button>
                            </div>
                        </div>
					</div>
					<?php
					}
					?>
				</div>
			</section>
		</main>
        <div class="modal fade" id="oadr1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">TITLE</h5>
                </div>
                <div class="modal-body">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
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
		<script src="<?php echo base_url('assets/js/script.js');?>"></script>
	</body> 
</html>