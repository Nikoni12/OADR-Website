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
@media (max-width: 767px) {
    .carousel-inner .carousel-item > div {
        display: none;
    }
    .carousel-inner .carousel-item > div:first-child {
        display: block;
    }
}

.carousel-inner .carousel-item.active,
.carousel-inner .carousel-item-next,
.carousel-inner .carousel-item-prev {
    display: flex;
}

/* medium and up screens */
@media (min-width: 768px) {
    
    .carousel-inner .carousel-item-end.active,
    .carousel-inner .carousel-item-next {
      transform: translateX(25%);
    }
    
    .carousel-inner .carousel-item-start.active, 
    .carousel-inner .carousel-item-prev {
      transform: translateX(-25%);
    }
}

.carousel-inner .carousel-item-end,
.carousel-inner .carousel-item-start { 
  transform: translateX(0);
}
  </style>
  </head>
  <body style = "background-color:#fff5ee;">
    <?php include_once('header.php');?>
    <section id="hero" class="d-flex justify-cntent-center align-items-center">
      <div class="container carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
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
    <section id="testimonial">
        <div class="container">
            <div class="row">
            <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="col-md-12">
                        <div class="card"style = "background-color:transparent;border:none;">
                            <div class="card-img" style = "text-align:center;">
                            <img class="img-fluid" style = "max-width:150px;"src="<?php echo base_url('assets/img/avatarboy.png');?>">
								<p>John Doe</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-12">
                        <div class="card"style = "background-color:transparent;border:none;">
                            <div class="card-img" style = "text-align:center;">
                            <img class="img-fluid" style = "max-width:150px;"src="<?php echo base_url('assets/img/avatargirl.png');?>">
                            <p>John Doe</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
            </div>
        </div>
    </section>
    </main>
    <div class="footer-basic">
      <footer>
        <div class="social">
          <a href="#"><i class="fa fa-facebook-square"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
          <a href="#"><i class="fa fa-linkedin-square"></i></a>
          <a href="#"><i class="fa fa-twitter-square"></i></a>
        </div>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="http://localhost/OADR-Website/User/about">About</a></li>
          <li class="list-inline-item"><a href="">Quality Policy</a></li>
          <li class="list-inline-item"><a href="">Employees</a></li>
          <li class="list-inline-item"><a href="">Contact Us</a></li>
          <li class="list-inline-item"><a href="">Resources</a></li>
        </ul>
        <p class="copyright">Office for Alternative Dispute Resolution © 2022</p>
      </footer>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript">
 let items = document.querySelectorAll('.carousel .carousel-item')

items.forEach((el) => {
    const minPerSlide = 6
    let next = el.nextElementSibling
    for (var i=1; i<minPerSlide; i++) {
        if (!next) {
            // wrap carousel by using first child
            next = items[0]
        }
        let cloneChild = next.cloneNode(true)
        el.appendChild(cloneChild.children[0])
        next = next.nextElementSibling
    }
});


</script>
  </body> 
</html>