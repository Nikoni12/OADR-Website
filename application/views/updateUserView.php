<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<style>
			body, html{
				 
				font-family: 'Oxygen', sans-serif;
				background-image: url("https://i2.wp.com/i.pinimg.com/originals/fa/dc/b2/fadcb24075acb650de29f258af69d830.gif"); 
			}
			.main{
				margin-top: 70px;
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
				font-size: 11px;
				padding-top: 3px;
			}
			.main-login{
				background-color: #fff;
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
				max-width: 80%;
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
		<div class="container fadeInDown">
			<div class="row main">
				<div class="main-login main-center" style="background: -webkit-linear-gradient(#E5147A, #37018A);border-style: solid;
			 border-width: 1px;border-color: #543884; box-shadow: 0px 0px 20px #E805F4;">
					<form class="form-horizontal" method="post" action="<?php echo base_url();?>User/update_data">
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label"  style="color:black;font-size:20px;margin-left: 7px;font-family:Courier New;">ID</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="uid" id="uid"  placeholder="Enter the ID you want to update"/>
								</div>
								<span class="text-danger fontColor"><?php echo form_error('uid'); ?></span>
							</div>
                        </div>
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label"  style="color:black;font-size:20px;margin-left: 7px;font-family:Courier New;">First Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="fname" id="fname"  placeholder="Enter your First Name"/>
								</div>
								<span class="text-danger fontColor"><?php echo form_error('fname'); ?></span>
							</div>
						</div>
                        <div class="form-group">
							<label for="name" class="cols-sm-2 control-label"  style="color:black;font-size:20px;margin-left: 7px;font-family:Courier New;">Last Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="lname" id="lname"  placeholder="Enter your Last Name"/>
								</div>
								<span class="text-danger fontColor"><?php echo form_error('lname'); ?></span>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label"  style="color:black;font-size:20px;margin-left: 7px;font-family:Courier New;">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="uname" id="uname"  placeholder="Enter your Username"/>
								</div>
								<span class="text-danger fontColor"><?php echo form_error('uname'); ?></span>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label"  style="color:black;font-size:20px;margin-left: 7px;font-family:Courier New;">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="pass" id="passw"  placeholder="Enter your Password"/>
								</div>
								<span class="text-danger fontColor"><?php echo form_error('pass'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label"  style="color:black;font-size:20px;margin-left: 7px;font-family:Courier New;">Birthday</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="date" class="form-control" name="bDay" id="bDay" value="date('Y-m-d')"/>
								</div>
								<span class="text-danger fontColor"><?php echo form_error('bDay'); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Contact Number</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="phone2" id="phone2"  placeholder="Enter your Password"/>
								</div>
								<span class="text-danger fontColor"><?php echo form_error('phone2'); ?></span>
							</div>
						</div>

						<div class="form-group ">
                            <input type="submit"  class="btn btn-primary btn-lg btn-block login-button" style="font-family:Courier New;background:#A40E57;" name="update">
						</div>
					</form>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	</body>
</html>