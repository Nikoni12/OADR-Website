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
        <section class="features" style="background:#031261;">
            <div class="container">
                <br><h1 class = "search_head" >SEARCH RESULTS</h2><br>
            </div>
        </section>
        <br> 
        
        <section class="features">
				<div class="container">
                <div class="search-container">
                    <form method="POST" action="<?php echo base_url();?>User/search" enctype="multipart/form-data">
                        <input type="text" placeholder="Search.." name="searchdata" style="width:400px;" value="<?php echo $searchdata ?>" >
                        <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                        <br>
                    </div>
					<div class="row">
                        <?php $a=0;foreach($news as $row) {?>
                            <?php if ($a == 0)
                                echo "<div style='text-align:left;'><h2>News</h2><br></div>"
                            ?>
						<a href="<?php echo base_url('user/newstitle/?newstitle=' . $row->news_title) ?>">
							<div class="row mb-12 border-bottom pb-2">
								<div class="col-md-12" style="border-left:2px solid #031261;">
									<p class="mb-2" style="color:#031261;"><strong><u><?php echo $row->news_title?></u></strong></p></a>
                        
									<p style = "text-align:justify;" class="limit"><?php echo $row->news_content?></p>
                                    <p style = "text-align:justify;" class="limit"><?php echo $row->date_added?></p>
									<a href="<?php echo base_url('user/newstitle/?newstitle=' . $row->news_title) ?>"   style="color:#1499db"><p>More Details...</p></a>
								</div>
							</div>
                            <hr>
                        <?php $a++; }?>
                        <br>
                        
                        <?php  if(is_array($announcements)){?>
                        <?php $a=0;foreach($announcements as $row) {?>
                            <?php if ($a == 0)
                                echo "<div style='text-align:left;'><h2>Announcements</h2><br></div>"
                            ?>
						<a href="<?php echo base_url('User/announcement');?>">
							<div class="row mb-12 border-bottom pb-2">
								<div class="col-md-12" style="border-left:2px solid #031261;">
									<p class="mb-2" style="color:#031261;"><strong><u><?php echo $row->announcement_title?></u></strong></p></a>
                        
									<p style = "text-align:justify;" class="limit"><?php echo $row->announcement_content?></p>
                                    <p style = "text-align:justify;" class="limit"><?php echo $row->date_added?></p>
									<a href="http://localhost/OADR-Website/User/announcement"   style="color:#1499db"><p>More Details...</p></a>
								</div>
							</div>
                            <hr>
                        <?php $a++; }?>
                        <?php }
                        
                        else echo "<p>No Results:</p>"?>
                        <br>

                        <?php $a=0;foreach($events as $row) {?>
                            <?php if ($a == 0)
                                echo "<div style='text-align:left;'><h2>Events</h2><br></div>"
                            ?>
						<a href="<?php echo base_url('User/events');?>">
							<div class="row mb-12 border-bottom pb-2">
								<div class="col-md-12" style="border-left:2px solid #031261;">
									<p class="mb-2" style="color:#031261;"><strong><u><?php echo $row->event_title?></u></strong></p></a>
                        
									<p style = "text-align:justify;" class="limit"><?php echo $row->event_content?></p>
                                    <?php echo "<p>Start: $row->event_start</p>"?>
								    <?php echo "<p>End: $row->event_end</p>"?>
									<a href="<?php echo base_url('User/events');?>"   style="color:#1499db"><p>More Details...</p></a>
								</div>
							</div>
                            <hr>
                        <?php $a++; }?>
					</div>
				</div>
			</section>
        
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