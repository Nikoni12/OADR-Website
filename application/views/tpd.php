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
                <h1 class = "direct_head" >TRAINING AND PROGRAM DEVELOPMENT DIVISION</h1><br>
                <h3 class="direct_head" style="color:black";>Training and Program Development Division CY 2022 TRAINING CALENDAR</h3>
            </div>
        </section>
        <br><br> 
			<section class="features">
				<div class="container">
				<!--<h1 class = "h1title" style = "border-bottom: 2px solid currentColor;">Training and Program Development Division</h1><br>-->
					<div class="row">
						<?php $counter=0;$i=1; foreach($training as $row) { ?>
							<?php if ($counter < 4){ ?> 
							<a href="/" onclick="return false;" class="text-dark">
							<div class="row mb-12 border-bottom pb-2 " style="height:95%; padding-left:0;"  >
                            <div class="col-md-3">
								<p class="calendar"><?php echo strtoupper(date("d", strtotime($row->start_date)))."\n"?> <em><?php echo strtoupper(date("F", strtotime($row->start_date)))."\n"?></em></p>
                            </div>
								<div class="col-md-9">
									<tr>
										<td><p class='mb-2' style="color:#031261;"><strong><?php echo $row->title?></strong></p></td>
                                        <td><p class='mb-2'><b><i>Course Dates: <?php echo $row->start_date?> - <?php echo $row->end_date?></i></b></p></td>
										<td><p style = 'text-align:justify;' class="limit poppinsfont"><?php echo $row->description?></p></td>
									</tr>
									<!--<button id="myBtn<?php echo $i?>" class="btn" style="background:#68A4C4; color:white;"><i class="fa fa-eye" style="color:white;" aria-hidden="true"></i> View </button>-->
								</div>&nbsp;
							</div>
							</a>
							&nbsp;
							<?php }
							else {  
									if ($counter == 4) {?>
									
									<h2 class = "archivenews_title" style="padding:30px; padding-left:10px;" >Archive</h2><br>
									<?php } ?>

										<div class="col-md-12">
										<tr class="archivenews">
											<td><?php echo "<p class='mb-2'>$row->date_added<h10 style='color:#031261' id='myBtn$i' class='btn'>&nbsp; &nbsp; &nbsp;$row->title<h10></p>" ?><a></a></td> 
										</tr>
										</div>

							<?php } ?>
						<?php $counter++; $i++; }?>
					</div>
		</section>
		</div>
        <section class="features">
                <div class="container">
                    <div class="row">
                    <div class="col-md-5" style="margin-left:10px;">
                    <img style = "max-width:150px;"class="img-fluid" src="<?php echo base_url('assets/img/dojlogo.png');?>">
                    <img style = "max-width:250px;"class="img-fluid" src="<?php echo base_url('assets/img/OADRNOBG.png');?>">
                    </div>
                    
                        <div class="col-md-6" style = "padding-right:0; ">
                        <b><p style="color:black";>For questions related to the above training courses, please contact:</p></b><br>
                        <i><p>Training and Program Development Division 
                        Training, 
                        Accreditation and Promotion Service </p>
                        <p>Department of Justice - Office for Alternative Dispute Resolution</p>
                        <p>4F NFA New Building, NFA Compound, Visayas Avenue, Brgy. Vasra, 1128 Quezon City</p>
                        <p>(63) 915-783-2641 | training.oadr@gmail.com</p></i>
                        </div>
                    </div>
                </div>
            </section>
		</main>
        <!---
		    <?php $i=1; foreach($training as $row) { ?>

			<div id="myModal<?php echo $i?>" class="modal">
				<div class="modal-dialog modal-lg">
					<div class="modal-content" style = " background-color: #fefefe; margin: auto; padding: 20px; border: 1px solid #888; width: 80%;"> 
						<div class="modal-header"><p style="poppinsfont"><b><?php echo $row->title?></b></p></div>
						<div class="modal-body"><p style="poppinsfont"><?php echo $row->description?></p>
							<td><p> Start:<?php echo $row->start_date?></p></td>
							<td><p> End:<?php echo $row->end_date?></p></td>
						</div>
						<div class="modal-footer">
							<span class="close<?php echo $i?>"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button></span>
						</div>

					</div>
				</div>

			</div>
			
			<?php $i++; }?>
		
			<script>
			<?php $i=1; foreach($training as $row) { ?>

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
			</script>--->

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