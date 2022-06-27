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
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="sweetalert2.min.js"></script>
        <link rel="stylesheet" href="sweetalert2.min.css">
    </head>
	<body style = "background-color:white;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6"><br><br><br><img class="img-fluid" src="<?php echo base_url('assets/img/OADRNOBG.png');?>"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome!</h1>
                                    </div>
                                    <form method="post"  action="<?php echo base_url();?>User/login">
                                        <div class="form-floating mb-3">
                                            <input type="text" name = "username" class="form-control" id="floatingInput" placeholder="Enter Username" style = "border-radius:10rem;font-size:.8rem;">
                                            <label style = "font-size:.8rem;"for="floatingInput">Enter Username</label>
                                            <span class="text-danger fontColor"><?php echo form_error('username'); ?></span>
                                        </div>
                                        <div class="form-floating">
                                            <input type="password" name = "password" class="form-control" id="floatingPassword" placeholder="Enter Password" style = "border-radius:10rem;font-size:.8rem;">
                                            <label style = "font-size:.8rem;" for="floatingPassword">Enter Password</label>
                                            <span class="text-danger fontColor"><?php echo form_error('password'); ?></span>
                                        </div>
                                        <br>
                                        <button type="submit" style = " border-radius:10rem; width:100%;"class="btn btn-outline-primary">Submit</button>
                                    </form>
                                </div>
                            </div>   
                        </div>  
                    </div>
                </div>
                </div>
            </div>
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
	</body> 
    <?php if($this->session->userdata('account')){   ?>
    <script>
		Swal.fire({
					title: 'Account Changed',
					text: "Your account has been updated. Please Login again.",
					icon: 'success',
					iconColor: 'gold',
					confirmButtonColor: 'gold'
				})
		</script>
    <?php $this->session->unset_userdata('account');} else if($this->session->userdata('password')){?>
        <script>
		Swal.fire({
					title: 'Password Changed',
					text: "You successfully changed your password. Please login again.",
					icon: 'success',
					iconColor: 'gold',
					confirmButtonColor: 'gold'
				})
		</script>
    <?php $this->session->unset_userdata('password');} else if($this->session->userdata('logout')){?>
        <script>
		Swal.fire({
					title: 'Thank you',
					text: "You successfully logged out from the system.",
					icon: 'success',
					iconColor: 'gold',
					confirmButtonColor: 'gold'
				})
		</script>
    <?php $this->session->unset_userdata('logout');}?>
</html>