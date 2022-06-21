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
    

    <style>
        .infohead{
            font-weight:bold;
        }
        .infodiv{
            text-align: justify;
        }
        .infotext{
            line-height: 1.8;
        }
    </style>
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
    
    <section>
    <div class="container">
        <h6 style="color:#031261;">OFFICE FOR ALTERNATIVE DISPUTE RESOLUTION (OADR)</h6>
        <?php foreach($titleofnews as $row) { ?> 
        <?php echo "<h1>$row->news_title</h1>"?>
        <h8 style="color:#828386;"><?php echo $row->date_added?></h8><br><br>
        <div class="containbox">
                <div class="nutritionheader"><a href="http://localhost/OADR-Website/User/news" style="text-decoration: none;">News & Announcements</a> > 
                <a href="" style="text-decoration: none;"><?php echo $row->news_title?></a></div>
        </div>
        <h2 id="border"></h2>
        <div class="infodiv">
            <img class="infoimg" src='<?php echo base_url() . 'uploads/' . $row->news_image; ?>' style="width:100%; height:auto;">
            <p class="infohead"><br><?php echo $row->news_title ?></p>
            <p class="infotext">
            <?php echo $row->news_content ?>
            </p>
        </div>
        <?php } ?>
    </section>

    <section>
        <div class="container px-3 my-3">
        <a href="http://localhost/OADR-Website/User/news" style="text-decoration:none; color:black;"><h2>More News</h2></a> <br><br>
          <div class="row gx-5">
            <?php foreach (array_slice($news, 0, 3) as $row ){ ?> 
          <div class="col-lg-4 mb-4 mb-lg-0">
              <div class=""><img class="img-fluid" style = "max-width:350px;"  src='<?php echo base_url() . 'uploads/' . $row->news_image; ?>'></i></div><br>
              <a href="<?php echo base_url('user/newstitle/?newstitle=' . $row->news_title) ?>"><h5 class="fw-bolder"><?php echo $row->news_title ?></h5></a>
          </div>
          <?php } ?>
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