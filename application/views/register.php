<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>INCOGNITO FINALS</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />  
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<style>
			body, html{
				font-family: 'Oxygen', sans-serif;
				background-image: url("https://i2.wp.com/i.pinimg.com/originals/fa/dc/b2/fadcb24075acb650de29f258af69d830.gif"); 
			}

			.main{
				margin-top: 10px;
			}

			h1.title { 
				font-size: 50px;
				font-family: 'Passion One', cursive; 
				font-weight: 400; 
			}

			hr{
				width: 10%;
				color: #fff;
			}

			.form-group{
				margin-bottom: 15px;
			}

			label{
				margin-bottom: 15px;
			}

			input,
			input::-webkit-input-placeholder {
				font-size: 14px;
				padding-top: 3px;
			}

			.main-login{
				background-color: #fff;
				/* shadows and rounded borders */
				-moz-border-radius: 2px;
				-webkit-border-radius: 2px;
				border-radius: 2px;
				-moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
				-webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
				box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

			}

			.main-center{
				margin-top: 30px;
				margin: 0 auto;
				max-width: 660px;
				padding: 40px 40px;

			}

			.login-button{
				margin-top: 5px;
			}

			.login-register{
				font-size: 11px;
				text-align: center;
			}
            .fadeInDown {
              -webkit-animation-name: fadeInDown;
              animation-name: fadeInDown;
              -webkit-animation-duration: 1s;
              animation-duration: 1s;
              -webkit-animation-fill-mode: both;
              animation-fill-mode: both;
            }
            @-webkit-keyframes fadeInDown {
              0% {
                opacity: 0;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
              }
              100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
              }
            }
            @keyframes fadeInDown {
              0% {
                opacity: 0;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
              }
              100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
              }
            }
            *:focus {
                outline: none;
            } 
            #icon {
              width:60%;
            }
			.fontColor {
				color:white;
				font-weight: bold;
			}

		</style>
	
</head>
<body>
<div class="container">
	<h1 class=" text-center" style="font-size: 55px; background: -webkit-linear-gradient(#A13670, #262254);-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;font-family:Tahoma;-webkit-text-stroke-width: 2px; -webkit-text-stroke-color: #9A77CF;">REGISTER HERE</h1>
	<div class="row">
		<div class="col-sm-4">
			<div class="container fadeInDown">
			<div class="row main">
				<div class="main-login main-center" style="background: -webkit-linear-gradient(#E5147A, #37018A);border-style: solid;
			 border-width: 1px;border-color: #543884; box-shadow: 0px 0px 20px #E805F4;">
					<form class="form-horizontal" method="POST" enctype="multipart/form-data" action="<?php echo base_url().'user/register'; ?>">
						
						<div class="form-group" style="margin-top:-35px;">
							<label for="name" class="cols-sm-2 control-label" style="color:black;font-size:18px;margin-left: 7px;font-family:Courier New;">First Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="first_name" id="first_name"  style="font-family:Courier New;" placeholder="Enter your First Name"/>
								</div>
                                <span class="text-danger fontColor"><?php echo form_error('first_name'); ?></span>
							</div>
						</div>
                        <div class="form-group">
							<label for="name" class="cols-sm-2 control-label" style="color:black;font-size:18px;margin-left: 7px;font-family:Courier New;">Middle Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="middle_name" id="middle_name"  style="font-family:Courier New;" placeholder="Enter your Middle Name"/>
								</div>
                                <span class="text-danger fontColor"><?php echo form_error('middle_name'); ?></span>
							</div>
						</div>
                        <div class="form-group">
							<label for="name" class="cols-sm-2 control-label" style="color:black;font-size:18px;margin-left: 7px;font-family:Courier New;">Last Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="last_name" id="last_name" style="font-family:Courier New;" placeholder="Enter your Last Name"/>
								</div>
                                <span class="text-danger fontColor"><?php echo form_error('last_name'); ?></span>
							</div>
						</div>
                         <div class="form-group">
							<label for="username" class="cols-sm-2 control-label" style="color:black;font-size:18px;margin-left: 7px;font-family:Courier New;">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username" style="font-family:Courier New;" placeholder="Enter your Username"/>
								</div>
                                <span class="text-danger fontColor"><?php echo form_error('username'); ?></span>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label" style="color:black;font-size:18px;margin-left: 7px;font-family:Courier New;">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password" style="font-family:Courier New;" placeholder="Enter your Password"/>
								</div>
                                <span class="text-danger fontColor"><?php echo form_error('password'); ?></span>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label" style="color:black;font-size:18px;margin-left: 7px;font-family:Courier New;">Confirm Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password_confirm" id="password_confirm" style="font-family:Courier New;" placeholder="Confirm your Password"/>
								</div>
                                <span class="text-danger fontColor"><?php echo form_error('confirm'); ?></span>
							</div>
						</div>
                        <div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label" style="color:black;font-size:18px;margin-left: 7px;font-family:Courier New;">Birthday</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true" ></i></span>
									<input type="date" class="form-control" name="bday" id="bday" style="font-family:Courier New;"value="date('Y-m-d')"/>
								</div>
                                <span class="text-danger fontColor"><?php echo form_error('bday'); ?></span>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label" style="color:black;font-size:18px;margin-left: 7px;font-family:Courier New;">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email" style="font-family:Courier New;" placeholder="Enter your Email"/>
								</div>
                                <span class="text-danger fontColor"><?php echo form_error('email'); ?></span>
							</div>
						</div>
                        <div class="form-group">
							<label for="email" class="cols-sm-2 control-label" style="color:black;font-size:18px;margin-left: 7px;font-family:Courier New;">Contact Number</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="tel" class="form-control" name="phone" id="phone" pattern="[0-9]{11}" style="font-family:Courier New;" placeholder="Enter your Phone Number"/>
								</div>
                                <span class="text-danger fontColor"><?php echo form_error('phone'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label" style="color:black;font-size:18px;margin-left: 7px;font-family:Courier New;">Profile Picture</label>
							<div class="cols-sm-10">
								<div class="input-group" style="font-family:Courier New;">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true" ></i></span>
									<input type="file" class="form-control form-control-sm" name="profile_pic" id="profile_pic" />
								</div>
                            </div>
                        </div>
						<div class="form-group ">
							<input type="submit" class="btn btn-primary btn-lg btn-block login-button" style="font-family:Courier New;background:#A40E57;" name = "register"/>
						</div>
					</form>
					<p align = 'center' style="color:white;font-size:18px;margin-left: 7px;font-family:Courier New;">Already have an account? <a href = 'http://localhost/CODE_IGN/User/login'>Click Here.</a>
					<?php
				if($this->session->flashdata('message')){
					?>
					<div class="alert alert-info text-center">
						<?php echo $this->session->flashdata('message'); ?>
					</div>
					<?php
					unset($_SESSION['message']);
				}	
		    ?>
				</div>
			</div>
		</div>
        <br>
		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
		</div>
	</div>
</div>
</body>
</html>