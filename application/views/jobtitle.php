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
                <h1 class = "h1title" style = "border-bottom: 2px solid currentColor;">Careers</h1><br> 
                    <div class="row ">
                        <div class="col-md-3 sidebar" style = "">
                            <nav>
                                <h4 style="font-weight:bold;">Job Opportunities</h4>
                                <?php foreach($job as $row) {?>
                                <a href="<?php echo base_url('user/jobtitle/?jobtitle=' . $row->position_title) ?>"><?php echo $row->position_title?></a>
                                <?php }?>
                                </nav>
                            </div>
                            <div class="col-md-8" style = "border-left:1px solid #031261; padding-left:20px;padding-right:20px; line-height:2;">
							<div class="newscarhead"><h1><?php echo $row->position_title?></h1><br></div> 
							<h4>OFFICE FOR ALTERNATIVE DISPUTE RESOLUTION | NCR</h4><br>
							<div id=""><b>Position Title :</b> <?php echo $row->position_title?></div><br>
							<div id=""><b>Plantilla Item No. :</b> <?php echo $row->plantilla?></div><br>
							<div id=""><b>Salary/Job/Pay Grade :</b> <?php echo $row->paygrade?></div><br>
							<div id=""><b>Monthly Salary :</b> <?php echo $row->salary?></div><br>
                            <div id=""><b>Education :</b> <?php echo $row->education?></div><br>
                            <div id=""><b>Training :</b> <?php echo $row->training?></div><br>
                            <div id=""><b>Work Experience :</b> <?php echo $row->experience?></div><br>
							<div id=""><b>Eligibility :</b> <?php echo $row->eligibility?></div><br>
							<div id=""><b>Competency :</b> <?php echo $row->competency?></div><br>
                            <div id=""><b>Place of Assignment:</b><?php echo $row->place?></div><br>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <section class="features">
                <div class="container">
                    <hr class="divider" />
                    <div class="col-md-12" style="margin-left:10px;">
                    </div>
                        <div class="col-md-12" style = "padding-right:0; ">
                        <b><p style="color:black";>The OADR highly encourages all interested and qualified applicants, including persons with disability (PWD) and members of the indigenous communities, irrespective of sexual orientation and gender identity to apply for the above vacant positions. Interested and qualified applicants should signify their interest in writing, 
                        and through OADR Online Recruitment Form at <a href="https://bit.ly/OADRJuly62022">https://bit.ly/OADRJuly62022</a> and upload the following documents not later than August 5, 2022</p></b><br>
                        <i><p>1. Fully accomplished under oath Personal Data Sheet (CS Form 212 Revised 2017) with recent passport-sized picture (3.5cm x 4.5cm) and Work Experience Sheet which can be downloaded at <a href="www.csc.gov.ph">www.csc.gov.ph;</a></p>
                        <p>2. Performance rating in the last rating period (if applicable);</p>
                        <p>3. Photocopy of certificate of eligibility/rating/license; and</p>
                        <p>4. Photocopy of Transcript of Records and Diploma</p></i>
                        <p>5. Photocopy of Certificate of Employment/ Service Record (if applicable); and</p></i>
                        <p>6. Photocopy of Training Certificates</p></i>
                        </div>
                </div>
            </section>
        <section class="features">
                <div class="container">
                    <div class="row">                  
                        <div class="col-md-6" style = "padding-right:0; ">
                        <b><p style="color:black";>QUALIFIED APPLICANTS are advised to hand in or send through courier/email their application to:</p></b><br>
                        <i><p><b>John Michael V. Gallenero</b></p>
                        <p>OIC Chief, Finance and Administrative Division</p>
                        <p>4th Floor, NFA Building, NFA Compound</p>
                        <p>Visayas Avenue, Brgy. Vasra, </p></i>
                        <p>Diliman, Quezon City</p></i>
                        <p>psb.secretariat.oadr@gmail.com</p></i>
                        </div>
                        <div class="col-md-5">
                    <br><br><br>
                    <img style = "max-width:150px;"class="img-fluid" src="<?php echo base_url('assets/img/dojlogo.png');?>">
                    <img style = "max-width:250px;"class="img-fluid" src="<?php echo base_url('assets/img/OADRNOBG.png');?>">
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

<script src="<?php echo base_url('assets/js/main.js');?>"></script>

</body>

</html>