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
        <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
        <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
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
                <h1 class = "h1title" style = "border-bottom: 2px solid currentColor;">Overview</h1><br> 
                <div class="row ">
                    <div class="col-md-6" style = "background-color:#e5e4e2; padding:20px;">
                        <div class="row ">
                            <div class="col-md-1" style = "text-align:center;padding: 30px 0;">
                                <i class="fa fa-bullseye" style = "color:#031261;font-size:40px;"aria-hidden="true"></i>
                            </div>
                            <div class="col-md-11">
                                <h5 class="h1title" style = "font-size:24px;"><span style = "font-size: 40px;">M</span>ission</h5>
                                <p style = "text-align:justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" style = "background-color:#e5e4e2; padding:10px;">
                    <div class="row ">
                            <div class="col-md-1" style = "text-align:center;padding: 30px 0;">
                                <i class="fa fa-eye" style = "color:#031261;font-size:40px;"aria-hidden="true"></i>
                            </div>
                            <div class="col-md-11">
                                <h5 class="h1title" style = "font-size:24px;"><span style = "font-size: 40px;">V</span>ision</h5>
                                <p style = "text-align:justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12"><br>
                        <h5 class="h1title" style = "font-size:24px;">OADR GAD Agenda</h5>
                        <p style = "font-size:20px;"><span style = "font-size: 30px;">O</span>rganization-focused goal statments</p>
                        <p style = "text-align:justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        <p style = "font-size:20px;"><span style = "font-size: 30px;">C</span>lient-focused goal statments</p>
                        <p style = "text-align:justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p><br>
                    </div>
                    <div class="col-md-12" ><br>
                        <h5 class="h1title" style = "font-size:24px;">GFPS Directory</h5>
                        <p style = "text-align:justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p><br>
                    </div>

                <br>
                <h1 class = "h1title" style = "border-bottom: 2px solid currentColor;">GAD Plan and Budget</h1><br> 
                <div class="row" style = "--bs-gutter-x:0;">
                    <div class="swiper mySwiper" style = "max-width:50%;">
                        <div class="swiper-wrapper">
                            <?php foreach($plan as $row) { ?>
                                <div class="card shadow h-100 swiper-slide mx-auto" style = "border: 2px solid #E0AA3E;">
                                <div class="card-body">
                                    <a href="<?php echo base_url().'uploads/'.$row->plan_file;?>" target="_blank">
                                        <p style = "text-align:center; font-size:100px; color:red;"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></p>
                                        <p style = "text-align:center;"><?php echo $row->plan_title;?></p>
                                    </a> 
                                </div>
                            </div>
                            <?php }?>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
                    <script>
                        var swiper = new Swiper(".mySwiper", {
                            effect: "cube",
                            grabCursor: true,
                            loop: true,
                            cubeEffect: {
                                shadow: true,
                                slideShadows: true,
                                shadowOffset: 20,
                                shadowScale: 0.94,
                            },
                            pagination: {
                                el: ".swiper-pagination",
                            },
                            navigation: {
                                nextEl: ".swiper-button-next",
                                prevEl: ".swiper-button-prev",
                            },
                        });
                    </script>
                </div>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <h1 class = "h1title" style = "border-bottom: 2px solid currentColor;">GAD Accomplishment Report</h1><br> 
                <div class="row" style = "--bs-gutter-x:0;">
                    <div class="col clearfix">
                        <span class="title-section d-flex justify-content-end">
                            <button class="btn btn-outline-warning btn-sm prev-btn" type="button"><i class="fa fa-arrow-left"></i>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <span class="mx-1">&nbsp;</span>
                            <button class="btn btn-outline-warning btn-sm next-btn" type="button"><i class="fa fa-arrow-right"></i>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </span>
                    </div><br><br>
                    <div class="swiper mySwiper2" style = " width:100%;">
                        <div class="swiper-wrapper">
                            <?php foreach($report as $row) { ?>
                                <div class=" swiper-slide mx-auto" style = "border: 2px solid #E0AA3E;">
                                    <div class="card-body">
                                        <a href="<?php echo base_url().'uploads/'.$row->report_file;?>" target="_blank">
                                            <p style = "text-align:center; font-size:100px; color:red;"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></p>
                                            <p style = "text-align:center;"><?php echo $row->report_title;?></p>
                                        </a>
                                    </div>
                                </div>
                            <?php }?>
                            
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
                    <script>
                        var swiper = new Swiper('.mySwiper2', {
                            slidesPerView: 2,
                            centeredSlides: true,
                            spaceBetween: 30,
                            pagination: {
                                el: '.swiper-pagination',
                                type: 'fraction',
                            },
                            navigation: {
                                nextEl: '.next-btn',
                                prevEl: '.prev-btn',
                            },
                        });
                    </script>
                </div>
                <br>
                <h1 class = "h1title" style = "border-bottom: 2px solid currentColor;">GAD Activities</h1><br> 
                <div class="row">
                    <?php foreach($act as $row) { ?>
                        <div class="col-md-3 mt-3 col-lg-3"  >
                            <div class="card" style="width: 18rem;" >
                                <img class="img-fluid" src='<?php echo base_url()?>uploads/<?php echo $row->act_file?>'>
                                <div class="card-body" style = "border: 2px solid #E0AA3E;">
                                    <h5 class="card-title" style="color:#031261"><b><?php echo $row->act_title?></h5></b>
                                    <p class="card-text" style = "text-align:justify;"><?php echo $row->act_overview?></p>
                                    <!--<a href = "https://pcw.gov.ph/18-day-campaign-to-end-vaw/" target = "_blank"><button type="button" class="btn btn-outline-warning">Read More >></button></a>-->
                                </div>
                            </div>
                        </div>
                    <?php }?>
                    
    			</div>
                <br>
                <h1 class = "h1title" style = "border-bottom: 2px solid currentColor;">Information, Education, and Communication Materials on GAD</h1><br> 
                <div class="row" >
                    <div class="col-md-12 " style = "--bs-gutter-x:0;" >
                        <h5 class="h1title" style = "font-size:24px;"><span style = "font-size: 40px;">P</span>ublications</h5>
                        <div class="swiper mySwiper3" style = " width:100%;">
                        <div class="swiper-wrapper">
                            <?php foreach($pub as $row) { ?>
                                <div class=" swiper-slide mx-auto" style = "border: 2px solid #E0AA3E; width: 300px;height: 300px;">
                                <div class="card-body">
                                    <a href="<?php echo base_url().'uploads/'.$row->pub_file;?>" target="_blank">
                                        <p style = "text-align:center; font-size:100px; color:red;"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></p>
                                        <p style = "text-align:center;"><?php echo $row->pub_title;?></p>
                                    </a>
                                </div>
                            </div>
                            <?php }?>
                            
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
                    <script>
                        var swiper = new Swiper(".mySwiper3", {
                            effect: "coverflow",
                            grabCursor: true,
                            centeredSlides: true,
                            slidesPerView: "auto",
                            coverflowEffect: {
                                rotate: 50,
                                stretch: 0,
                                depth: 100,
                                modifier: 1,
                                slideShadows: true,
                            },
                            pagination: {
                                el: ".swiper-pagination",
                            },
                        });
                    </script>
                    </div>
                    <div class="col-md-12" style = "padding-left:40px;">
                        <h5 class="h1title" style = "font-size:24px;"><span style = "font-size: 40px;">A</span>udio Visual Materials</h5>
                        <div class="row" style = " overflow-x: hidden;overflow-y: scroll; height:300px;">
                            <?php foreach($avm as $row) { ?>
                                <iframe class="col-md-4 mt-3 col-lg-3" src="<?php echo $row->vid_link;?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style = "height:300px;"></iframe>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-12" style = "padding-left:40px;">
                        <h5 class="h1title" style = "font-size:24px;"><span style = "font-size: 40px;">I</span>nfographics</h5>
                        <div class="row">
                            <?php foreach($info as $row) { ?>
                                <div class="col-md-4 mt-3 col-lg-3">
                                    <a href="<?php echo base_url().'uploads/'.$row->img_file;?>" class="d-block mb-4 h-100" data-toggle="lightbox" data-caption="<?php echo $row->img_title;?>">
                                        <img class="img-fluid img-thumbnail" src='<?php echo base_url().'uploads/'.$row->img_file;?>'>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-12" style = "padding-left:40px;">
                        <h5 class="h1title" style = "font-size:24px;"><span style = "font-size: 40px;">P</span>CW Publications</h5>
                        <div class="col clearfix">
                        <span class="title-section d-flex justify-content-end">
                            <button class="btn btn-outline-warning btn-sm prev-btn2" type="button"><i class="fa fa-arrow-left"></i>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <span class="mx-1">&nbsp;</span>
                            <button class="btn btn-outline-warning btn-sm next-btn2" type="button"><i class="fa fa-arrow-right"></i>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </span>
                    </div><br>
                        <div class="swiper mySwiper4" style = " width:100%;">
                        <div class="swiper-wrapper">
                            <?php foreach($pcw as $row) { ?>
                                <div class=" swiper-slide mx-auto" style = "border: 2px solid #E0AA3E;">
                                    <div class="card-body">
                                        <a href="<?php echo base_url().'uploads/'.$row->pcw_file;?>" target="_blank">
                                            <p style = "text-align:center; font-size:100px; color:red;"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></p>
                                            <p style = "text-align:center;"><?php echo $row->pcw_title;?></p>
                                        </a>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
                    <script>
                        var swiper = new Swiper('.mySwiper4', {
                            slidesPerView: 2,
                            centeredSlides: true,
                            spaceBetween: 30,
                            pagination: {
                                el: '.swiper-pagination',
                                type: 'fraction',
                            },
                            navigation: {
                                nextEl: '.next-btn2',
                                prevEl: '.prev-btn2',
                            },
                        });
                    </script>
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
<script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.0/dist/index.bundle.min.js"></script>
<script src="<?php echo base_url('assets/js/main.js');?>"></script>

</body>

</html>