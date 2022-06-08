<!DOCTYPE html>
<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />  
 </head>  
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<style>
			body, html{
				 
				font-family: 'Oxygen', sans-serif;
				background-image: url("https://i2.wp.com/i.pinimg.com/originals/fa/dc/b2/fadcb24075acb650de29f258af69d830.gif"); 
			}

			.main{
				margin-top: 50px;
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
				margin-bottom: 50px;
			}

			label{
				margin-bottom: 10px;
			}

			input,
			input::-webkit-input-placeholder {
				font-size: 17px;
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
				max-width: 500px;
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
			.fontColor {
				color:white;
				font-weight: bold;
			}

		</style>
	</head>
	<body><br><br>
	<h1 class=" text-center" style="font-size: 75px; background: -webkit-linear-gradient(#A13670, #262254);-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;font-family:Georgia;-webkit-text-stroke-width: 2px; -webkit-text-stroke-color: #9A77CF;">INCOGNITO'S<br></h1><p class=" text-center" style="font-size:
	40px; background: -webkit-linear-gradient(#A13670, #262254); -webkit-background-clip: text; -webkit-text-fill-color: transparent;
	font-family:Georgia;-webkit-text-stroke-width: 1px; -webkit-text-stroke-color: #9A77CF;">PC PARTS</p>
		<div class="container fadeInDown">
			<div class="row main" >
			<div class="main-login main-center" style="background: -webkit-linear-gradient(#E5147A, #37018A);border-style: solid;
			 border-width: 1px;border-color: #543884; box-shadow: 0px 0px 20px #E805F4;">
                    <form method="post"  action="<?php echo base_url();?>User/login_validation">
						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label " style="color:black;font-size:20px;margin-left: 7px;font-family:Courier New;">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username" style="font-family:Courier New;" placeholder="Enter your Username"/>
                                </div>
                                <span class="text-danger fontColor"><?php echo form_error('username'); ?></span>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label" style="color:black;font-size:20px;margin-left: 7px;font-family:Courier New;">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password" style="font-family:Courier New;"  placeholder="Enter your Password"/>
								</div>
                                <span class="text-danger fontColor"><?php echo form_error('password'); ?></span>
							</div>
						</div>
                        <div class="form-group ">
							<input type="submit" class="btn btn-primary btn-lg btn-block login-button" name = "register" style="font-family:Courier New;background:#A40E57;" value = "LOGIN"/>
						</div>
					</form>
				</div>
			</div>
		</div>

		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	</body>
</html>
