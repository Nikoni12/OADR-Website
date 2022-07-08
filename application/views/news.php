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
		<style>
            .container-scroll {max-height: 300px; max-width: 500px;overflow: hidden; overflow-y: scroll;}
            .crop {        		height: 20%;
                                width: 100%;
                                padding: 0;
                                overflow: hidden;
                                position: relative;
                                display: inline-block;
                                margin: 0 5px 0 5px;
                                text-align: center;
                                text-decoration: none;
                                text-overflow: ellipsis;
                                white-space: nowrap;
 }

        </style>
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
				<h1 class = "h1title" style = "border-bottom: 2px solid currentColor;">Recent News</h1><br> 
					<div class="row">
						<?php $counter = 0;foreach($news as $row) { ?>
							<?php if ($counter < 4){ ?> 
							<a href="<?php echo base_url('user/newstitle/?newstitle=' . $row->news_title) ?>" class="text-dark">
							<div class="row mb-12 border-bottom pb-2 newsrow" style="height:95%">
								<div class="col-md-3" style="padding-left:0">
									<?php echo "<td>"."<img src='".base_url().'uploads/'.$row->news_image."' class='img-fluid shadow-1-strong rounded newsimg' style='max-height:300px; width:306px;'>"."</td>"; ?>
								</div>
								<div class="col-md-9">
									<tr>
									<td><?php echo "<p class='mb-2'><strong>$row->news_title</strong></p>" ?></td>
									<td> <p style = "text-align=justify;" class="limit poppinsfont"><u><?php echo$row->news_content?></u></p></td>
									<td><?php echo "<p>$row->date_added</p>" ?></td>
									<td><p style="color:skyblue;"><b>Read More..</b></p></td>
									</tr>
								</div>
							</div>
						</a>
							<?php }
							else {  
									if ($counter == 4) {?>
									
									<h2 class = "archivenews_title" style="padding:30px; padding-left:10px;" >Archive</h2><br>
									<?php } ?>

										<div class="col-md-12">
										<tr class="archivenews">
											<td><p class="mb-2"><?php echo$row->date_added?><a href="<?php echo base_url('user/newstitle/?newstitle=' . $row->news_title) ?>"
											 style="color:#031261">&nbsp; &nbsp; &nbsp;<?php echo$row->news_title?></p></a></td>
										</tr>
										</div>

							<?php } ?>
						
						<?php $counter++; }?>
					</div>
				</div>
			</section>
		</main>
		<?php $this->view('footer'); ?>
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