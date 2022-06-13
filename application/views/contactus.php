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
            <section class="features">
                <div class="container">
                    <div class="row text-center">
                        <h2>Contact Us</h2><br>
                        <div class="col-md-4 col-sm-4 col-lg-4 shadow p-3 mb-5 bg-body rounded" style = "border-right:.25rem solid #E0AA3E!important;border-left:.25rem solid #E0AA3E!important">
                            <div class="contact-info-box">
                                <i class="fa fa-phone-square"></i>
                                <h5 itemprop="headline">PHONE</h5>
                                <p itemprop="description">(+632) 523 8482, (+632) 523 6826.</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-lg-4 shadow p-3 mb-5 bg-body rounded" style = "border-right:.25rem solid #E0AA3E!important;border-left:.25rem solid #E0AA3E!important">
                                <div class="contact-info-box">
                                    <i class="fa fa-map-marker"></i>
                                    <h5 itemprop="headline">ADDRESS</h5>
                                    <p itemprop="description">Department of Justice Padre Faura Street Ermita, Manila 1000</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-lg-4 shadow p-3 mb-5 bg-body rounded" style = "border-right:.25rem solid #E0AA3E!important;border-left:.25rem solid #E0AA3E!important">
                                <div class="contact-info-box">
                                    <i class="fa fa-envelope"></i>
                                    <h5 itemprop="headline">EMAIL</h5>
                                    <p itemprop="description">info.oadr@gmail.com</p>
                                </div>
                            </div>
                        </div> 
                    </div>  
                </div>
            </section>
            <section class="features">
                <div class="container">
                    <div class="row">
                        <iframe class="col-md-6" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.982959976328!2d121.04382741481925!3d14.656908489766622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4d29f24eb168db9b!2sNATIONAL%20FOOD%20AUTHORITY%20NFA!5e0!3m2!1sen!2sph!4v1655110690166!5m2!1sen!2sph" width="355" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <div class="col-md-6" style = "padding-right:0; padding-left:10px;">
                            <br>
                            <form>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Juan Dela Cruz">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="juandelacruz@gmail.com">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Subject</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Inquiry">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <button type="submit" style = " border-radius:10rem; width:100%;"class="btn btn-outline-primary">Submit</button>
                            </form>
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

</body>

</html>