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
        <?php $this->view('header'); ?>
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
            <section class="image-grid">
                <div class="container">
                    <h1 class = "h1title" style = "border-bottom: 2px solid currentColor;">Photo Gallery</h1><br> 
                    <div class="row">
                    <?php foreach($pics as $row) { ?>
                        <div class="col-md-4 mt-3 col-lg-3">
                        <?php ?>
                            <a href="<?php echo base_url() . 'uploads/' . $row->album_image; ?>" class="d-block mb-4 h-100" data-toggle="lightbox" data-caption="<?php echo $row->album_title; ?>">
                                <img class=" img-fluid img-thumbnail" src='<?php echo base_url() . 'uploads/' . $row->album_image; ?>'>
                            </a>
                        </div>
                        <?php }?>
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
        <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.0/dist/index.bundle.min.js"></script>
    </body>
</html>