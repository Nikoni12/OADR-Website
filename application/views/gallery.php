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
                <div class="container-xxl">
                <h1 class = "h1title" style = "border-bottom: 2px solid currentColor;">Photo Gallery</h1><br> 
                    <div class="row gy-4">
                        <div class="col-12 col-sm-6 col-md-4">
                            <figure>
                                <a class="d-block" href="">
                                    <img width="1920" height="1280" class="img-fluid" src="<?php echo base_url('assets/img/doj.jpg');?>" alt="IMAGE1" data-caption="Image Title">
                                </a>
                            </figure>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4">
                            <figure>
                                <a class="d-block" href="">
                                    <img width="1920" height="1280" class="img-fluid" src="<?php echo base_url('assets/img/placeholder.jpg');?>" alt="IMAGE2" data-caption="Image Title">
                                </a>
                            </figure>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4">
                            <figure>
                                <a class="d-block" href="">
                                    <img width="1920" height="1280" src="https://images.unsplash.com/photo-1579353977828-2a4eab540b9a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c2FtcGxlfGVufDB8fDB8fA%3D%3D&w=1000&q=80" class="img-fluid" alt="Image 3" data-caption="Image Title">
                                </a>
                            </figure>
                        </div>
                    </div>
                </div>
            </section>
            <div class="modal lightbox-modal" id="lightbox-modal" tabindex="-1">
                <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content">
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="modal-body">
                            <div class="container-fluid p-0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
        <script>
            const imageGrid = document.querySelector(".image-grid");
            const links = imageGrid.querySelectorAll("a");
            const imgs = imageGrid.querySelectorAll("img");
            const lightboxModal = document.getElementById("lightbox-modal");
            const bsModal = new bootstrap.Modal(lightboxModal);
            const modalBody = document.querySelector(".modal-body .container-fluid");

            for (const link of links) {
            link.addEventListener("click", function (e) {
            e.preventDefault();
            const currentImg = link.querySelector("img");
            const lightboxCarousel = document.getElementById("lightboxCarousel");
            if (lightboxCarousel) {
            const parentCol = link.parentElement.parentElement;
            const index = [...parentCol.parentElement.children].indexOf(parentCol);
            const bsCarousel = new bootstrap.Carousel(lightboxCarousel);
            bsCarousel.to(index);
            } else {
            createCarousel(currentImg);
            }
            bsModal.show();
            });
            }

            function createCarousel(img) {
            const markup = `
            <div id="lightboxCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="false">
            <div class="carousel-inner">
            ${createSlides(img)}
            </div> 
            <button class="carousel-control-prev" type="button" data-bs-target="#lightboxCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#lightboxCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
            </div>
            `;

            modalBody.innerHTML = markup;
            }

            function createSlides(img) {
            let markup = "";
            const currentImgSrc = img.getAttribute("src");

            for (const img of imgs) {
            const imgSrc = img.getAttribute("src");
            const imgAlt = img.getAttribute("alt");
            const imgCaption = img.getAttribute("data-caption");

            markup += `
            <div class="carousel-item${currentImgSrc === imgSrc ? " active" : ""}">
            <img src=${imgSrc} alt=${imgAlt}>
            ${imgCaption ? createCaption(imgCaption) : ""}
            </div>
            `;
            }

            return markup;
            }

            function createCaption(caption) {
            return `<div class="carousel-caption">
            <p class="m-0">${caption}</p>
            </div>`;
            }
        </script>
    </body>
</html>