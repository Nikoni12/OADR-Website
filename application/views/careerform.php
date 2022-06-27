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
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="sweetalert2.min.js"></script>
        <link rel="stylesheet" href="sweetalert2.min.css">
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
                                <a href="http://localhost/OADR-Website/User/chiefofficer">Chief Administrative Officer</a>
								<a href="http://localhost/OADR-Website/User/trainingspecialist">Training Specialist</a>
								<a href="http://localhost/OADR-Website/User/administrativeassistant">Administrative Assistant</a>
								<a href="http://localhost/OADR-Website/User/technicalconsultant">Technical Consultant</a>
								<a href="http://localhost/OADR-Website/User/careerform">Careers Form</a>
                                </nav>
                            </div>
                            <div class="col-md-8" style = "border-left:1px solid #031261; padding-left:20px;padding-right:20px;">
							<div class="newscarhead"><h1>Application Form</h1><br></div>
                                <form method="post"  action="<?php echo base_url();?>User/applicationform" enctype="multipart/form-data" >
                                    <div class="form-group">
                                        <label for="username">Name:</label>
                                        <input type="text" class="form-control" id="adminname" name="name"  placeholder="Enter Name">
                                        <span class="text-danger fontColor"><?php echo form_error('name'); ?></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Email:</label>
                                        <input type="email" class="form-control" id="adminname" name="email"  placeholder="Enter Email">
                                        <span class="text-danger fontColor"><?php echo form_error('email'); ?></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Phone Number:</label>
                                        <input type="text" class="form-control" id="adminname" name="pnum"  placeholder="Enter Number">
                                        <span class="text-danger fontColor"><?php echo form_error('pnum'); ?></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Position:</label>
                                        <select class="select form-control" name="category" id="support-category" style = "max-width:100%;">
                                            <option value ="" disabled selected>Select Category</option>
                                            <option value="Chief Administrative Officer">Chief Administrative Officer</option>
                                            <option value="Training Specialist">Training Specialist</option>
                                            <option value="Administrative Assistant">Administrative Assistant</option>
                                            <option value="Technical Consultant">Technical Consultant</option>
                                        </select>
                                        <span class="text-danger fontColor"><?php echo form_error('category'); ?></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Message</label>
                                        <textarea class="form-control" name = "message" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        <span class="text-danger fontColor"><?php echo form_error('message'); ?></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="username">CV or Resume (PDF)</label>
                                        <input type="file" class="form-control" accept='application/pdf' id="adminname" name="resume">
                                    </div><br>
                                    <button type="submit" style = " border-radius:10rem; width:100%;"class="btn btn-outline-primary">Submit</button>
                                </form>
                            </div>
                        </div>
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

<script src="<?php echo base_url('assets/js/main.js');?>"></script>
<?php if($this->session->userdata('sent')){   ?>
    <script>
		Swal.fire({
					title: 'Application Sent',
					text: "You successfully sent your application. You may check your email for further information.",
					icon: 'success',
					iconColor: 'gold',
					confirmButtonColor: 'gold'
				})
		</script>
<?php $this->session->unset_userdata('sent');} else if($this->session->userdata('invalid')){ ?>
 
    <script>
		Swal.fire({
                    title: 'Invalid File',
					text: "Please upload PDF File Only",
					icon: 'success',
					iconColor: 'gold',
					confirmButtonColor: 'gold'
				})
		</script>
    <?php $this->session->unset_userdata('invalid');}?>
</body>

</html>