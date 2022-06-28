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
                                width: 95%;
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
				<h1 class = "h1title" style = "border-bottom: 2px solid currentColor;">Announcements</h1><br> 
					<div class="row">
						<?php $i=1; foreach($announcement as $row) { ?>
							<a href="<?php echo base_url('user/newstitle/?newstitle=' . $row->announcement_title) ?>" class="text-dark"></a>
							<div class="row mb-12 border-bottom pb-2">
								<div class="col-md-3">
									<?php echo "<td>"."<img src='".base_url().'uploads/'.$row->announcement_image."' class='img-fluid shadow-1-strong rounded' style='max-height:300px; width:100%;'>"."</td>"; ?>
								</div>
								<div class="col-md-9">
									<tr>
										<td><p class='mb-2'><strong><?php echo $row->announcement_title?></strong></p></td>
										<td><p style = 'text-align:justify;' class="limit"> <u><?php echo $row->announcement_content?></u></p></td>
										<td><p><?php echo $row->date_added?></p></td>
									</tr>
									<button id="myBtn<?php echo $i?>" class="btn" style="background:#68A4C4; color:white;"><i class="fa fa-eye" style="color:white;" aria-hidden="true"></i> View </button>
								</div>
							</div>
						
						<?php $i++; }?>
					</div>
		</section>
		</div>
		</main>

		    <?php $i=1; foreach($announcement as $row) { ?>

			<div id="myModal<?php echo $i?>" class="modal">
				<div class="modal-dialog modal-lg">
					<div class="modal-content" style = " background-color: #fefefe; margin: auto; padding: 20px; border: 1px solid #888; width: 80%;"> 
						<div class="modal-header"><p><b><?php echo $row->announcement_title?></b></p></div>
						<div class="modal-body"><p><?php echo $row->announcement_content?></p></div>
						<div class="modal-footer">
							<span class="close<?php echo $i?>"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button></span>
						</div>

					</div>
				</div>

			</div>
			
			<?php $i++; }?>
		
			<script>
			<?php $i=1; foreach($announcement as $row) { ?>

				var modal<?php echo $i?> = document.getElementById("myModal<?php echo $i?>");

				var btn<?php echo $i?> = document.getElementById("myBtn<?php echo $i?>");
				
				var span<?php echo $i?> = document.getElementsByClassName("close<?php echo $i?>")[0];

				btn<?php echo $i?>.onclick = function() {
				modal<?php echo $i?>.style.display = "block";
				}

				span<?php echo $i?>.onclick = function() {
				modal<?php echo $i?>.style.display = "none";
				}
				
				window.onclick = function(event) {
				if (event.target == modal<?php echo $i?>) {
					modal<?php echo $i?>.style.display = "none";
				}
			}
			<?php $i++; }?>
			</script>

		


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