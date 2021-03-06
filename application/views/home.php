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
		<div id="fb-root"></div>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v14.0" nonce="11fU4RAl"></script>
		<style>
			.limit {
   overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 7; /* number of lines to show */
   -webkit-box-orient: vertical;
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
		<div class="topnav poppinsfont" style = "position: -webkit-sticky; position: sticky; top: 0;">
			<a href="#adr">ADR</a>
			<a href="#announcement">News</a>
			<a href="#upcomingevent">Upcoming Events</a>
			<a href="#mediafeed">Media Feed</a>
			<div class="search-container">
				<form method="POST" action="<?php echo base_url();?>User/search" enctype="multipart/form-data">
				<input type="text" placeholder="Search.." name="searchdata">
				<button type="submit"><i class="fa fa-search"></i></button>
				</form>
			</div>
		</div>
		<main id="main" class = "home-main" style = "overflow-x: hidden;overflow-y: scroll; height:520px;">
	
		<section class="features adrcontain" style="padding:0;" id="adr">
		
                <div class="container sect_post">
                    <div class="row">
					<div class="logobar">
								<div class="mb-2"><img style = "max-width:150px;"class="img-fluid" src="<?php echo base_url('assets/img/dojlogo.png');?>"></div>
								<div class="mb-2"><img style = "max-width:250px;"class="img-fluid" src="<?php echo base_url('assets/img/OADRNOBG.png');?>"></div>
					</div>
					<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
					<iframe class="col-md-6" src="https://www.youtube.com/embed/tGFijuVyzyQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style = "height:300px;"></iframe>
                        <div class="col-md-6 sect_info">
						<h2 class ="sect_title">What is Alternative Dispute Resolution (ADR)?</h2>
				<div class="border"></div>
				<p class="sect_text">
					Alternative dispute resolution (ADR) refers to the different ways people can resolve disputes without a trial. Common ADR processes include mediation, arbitration, and neutral evaluation. These processes are generally confidential, less formal, and less stressful than traditional court proceedings.
					<p class="sect_text">ADR often saves money and speeds settlement. In mediation, parties play an important role in resolving their own disputes. This often results in creative solutions, longer-lasting outcomes, greater satisfaction, and improved relationships.</p>
				</p>
                        </div>
                    </div>
                </div>
            </section>
			<section style="padding:0; margin:0;">
				<div class="row resourceimg" style="margin-right:0;">
				<div class="column" >
					<div style="margin-left:32px;"><h2 class="resourcetxt">Solve Problems with Alternative Resolutions.</h2></div>
				</div>
				<div class="column">
				<a href="http://localhost/OADR-Website/User/resources"><button class="button">DOWNLOAD</button><a>
				<a href="http://localhost/OADR-Website/User/about"><button class="button">LEARN MORE</button></a>
				</div>
				</div>
			</section>
			<br><br><br><br>
			<section class="features" id="announcement">
				<div class="container">
				<h1 class = "h1title" style = "border-bottom: 2px solid currentColor;">News</h1><br> 
					<div class="row" >
						<div class="col-md-12 " >
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
													<?php foreach(array_slice($news, 0, 1) as $row ){ ?>
													<div class="col-md-11" style = "padding-right:0; padding-left:0; float:none;margin:auto;">
													<a href="<?php echo $row->news_link?>" target="_blank"><img class="img-fluid " style="width:1200px; max-height:600px; "src='<?php echo base_url() . 'uploads/' . $row->news_image; ?>'>
														<div style = "background-color:#002244; border-radius:0rem;"><h2 style = "color:white;"class="text-center carouseltitle"><br><?php echo $row->news_title?></h2><br></div></a>
													</div>
													<!--<div class="col-md-4" style = "background-color:#E0FFFF;color:black;padding-right:0; padding-left:0; border-radius:0.25rem;">
														<div style = "background-color:#002244; border-radius:0.25rem;"><h2 style = "color:white;"class="text-center carouseltitle"><br><?php echo $row->news_title?></h2><br></div>
														<div style ="padding:20px;">
															<p style = "text-align:justify;" class="carouselimit carouseltext "><?php echo $row->news_content?></p>
															-<a href="<?php echo base_url('user/newstitle/?newstitle=' . $row->news_title) ?>class="text-dark" ><a href="<?php echo $row->news_link?>"><button type="button" class="btn btn-outline-dark">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></button></a>
														</div>
														<br><br>
													</div>-->
													<?php }?>
												</div>
											</div>
										</section>
									</div>
									<?php foreach(array_slice($news, 1, 2) as $row ){?>
									<div class="carousel-item">
										<section class="features">
											<div class="container">
												<div class="row">
													<div class="col-md-11" style = "padding-right:0; padding-left:0; float:none;margin:auto;">
													<a href="<?php echo $row->news_link?>" target="_blank"><img class="img-fluid" style="width:1200px; height:600px;" src='<?php echo base_url() . 'uploads/' . $row->news_image; ?>'>
														<div style = "background-color:#002244; border-radius:0rem;"><h2 style = "color:white;"class="text-center carouseltitle"><br><?php echo $row->news_title?></h2><br></div></a>
													</div>
													<!--<div class="col-md-4" style = "background-color:#E0FFFF;color:black;padding-right:0; padding-left:0; border-radius:0.25rem;">
														<div style = "background-color:#002244; border-radius:0.25rem;"><h2 style = "color:white;"class="text-center carouseltitle"><br><?php echo $row->news_title?></h2><br></div>
														<div style ="padding:20px;">
															<p style = "text-align:justify;" class="carouselimit carouseltext"><?php echo $row->news_content?></p>
															<a href="<?php echo base_url('user/newstitle/?newstitle=' . $row->news_title) ?>" ><a href="<?php echo $row->news_link?>"><button type="button" class="btn btn-outline-dark">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></button></a>
														</div>
														<br><br>
													</div>-->
												</div>
											</div>
										</section>
									</div>
									<?php  }?>
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

			<section class="features" id="upcomingevent">
                <div class="container">
				<h1 class = "h1title" style = "border-bottom: 2px solid currentColor;">Upcoming Events</h1><br> 
					<div class="row mt-4 ">
						<?php foreach(array_slice($event, 0, 3) as $row ){ 
							$s = explode(" ", $row->event_start);
							unset($s[1]);
							unset($s[2]);
							$s = implode(" ", $s);
							$date_now = new DateTime();
 							$date2    = new DateTime($s);
							 if ($date2 > $date_now){?>
      					<div class="col-md-4 shadow-lg p-3 mb-5 bg-body rounded">
        					<div class="card border-0 mb-4">
          						<img class="img-fluid" style="width:408px; height:255px;"src='<?php echo base_url() . 'uploads/' . $row->event_image; ?>'>
          						<div class="date-pos bg-info-gradiant p-2 d-inline-block text-center rounded  position-absolute"><?php echo strtoupper(date("F", strtotime($s)))."\n"?>
								<span class="d-block"><?php echo strtoupper(date("d", strtotime($s)))."\n"?></span></div>
          						<h5 class="font-weight-medium mt-3"><a href="<?php echo base_url('User/events');?>" class="text-decoration-none link"><?php echo $row->event_title?></a></h5>
          						<p class="mt-3 limithomevent"><?php echo $row->event_content?></p>
        					</div>
      					</div>
						<?php } }?>

						
    				</div>
					<div class="col-md-4 mx-auto text-center">
							<a href="<?php echo base_url('User/events');?>"><button type="button" class="btn btn-warning">View All Events</button></a>
      					</div> 
                </div>
            </section>
			<section class="features" id="mediafeed">
            	<div class="container">
                	<h1 class = "h1title" style = "border-bottom: 2px solid currentColor;">Media Feed</h1><br> 
                    <div class="row ">
                        <div class="col-md-3 sidenav"	style = "border-right:1px solid #031261;">
							<nav>
								<a href="https://www.dbm.gov.ph/index.php/about-us/philippine-transparency-seal"><img class="img-fluid" style="width:305px; height:179px;" src="<?php echo base_url('assets/img/transparencyseal.png');?>"></a>
								<a href="https://www.foi.gov.ph/"><img class="img-fluid" style="width:305px; height:179px;" src="<?php echo base_url('assets/img/foi.jpg');?>"></a>
								<a href="<?php echo base_url('User/resources/7');?>"><img class="img-fluid" style="width:305px; height:179px;" src="<?php echo base_url('assets/img/citizenscharter.jpg');?>"></a>
								<a href="https://op-proper.gov.ph/"><img class="img-fluid" style="width:305px; height:179px;" src="<?php echo base_url('assets/img/bannerpresident.png');?>"></a>
							</nav>
                        </div>&ensp;
						<div class="col-md-8" style = "overflow-y: scroll; height:800px; background:skyblue;">
							<a class="twitter-timeline" href="https://twitter.com/DOJPH?ref_src=twsrc%5Etfw">Tweets by DOJPH</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
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
			<?php $this->view('footer'); ?>
		</main>
		
		<!--<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>-->
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