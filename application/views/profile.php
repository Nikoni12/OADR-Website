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
				padding: 20px 20px;

			}

			.login-button{
				margin-top: 5px;
			}

			.login-register{
				font-size: 11px;
				text-align: center;
			}
            hr.new5 {
              border: 10px solid gray;
              border-radius: 5px;
              width: 98%;
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
			.profPic {
				position:absolute;
				margin-left:20%;
				margin-top:-3%;
			}
		</style>
	</head>
	<body>
		<div>
			<div class="row main">
				<div class="main-login main-center fadeInDown" style="background: -webkit-linear-gradient(#E5147A, #37018A);border-style: solid;
			 border-width: 1px;border-color: #543884; box-shadow: 0px 0px 20px #E805F4; color: white;">
                    <h2>Profile</h2>
                <?php
                        foreach($data as $row){
                            echo "<b>Welcome</b> ".$row->fname." ".$row->mname." ".$row->lname;
                            echo "<br><b>Username: </b> ".$row->uname;
                            echo "<br><b>Birthday: </b> ".$row->birthday;
							echo "<img class = 'profPic' style = 'width: 100px; height: 100px;' src = 'http://localhost/CODE_IGN/uploads/".$row->profile_pic."'>";
                            echo "<br><b>Contact Details</b>";
                            echo "<br><b>Email: </b> ".$row->email;
                            echo "<br><b>Contact: </b> ".$row->contact_num;
                        }
                 ?>
                    <a href = 'logout'><button class = "btn btn-primary btn-lg btn-block login-button" style="font-family:Courier New;background:#A40E57;">LOGOUT</button></a>
                 <hr class = "new5">
                    <h3>RESET PASSWORD</h3>
                    <form method="post" action="<?php echo base_url();?>User/check_password">
						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label" style="color:white;font-size:20px;margin-left: 7px;font-family:Courier New;">Enter Current Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="curPass" id="curPass"  placeholder="Enter your current password"/>
                                </div>
                                <span class="text-danger"><?php echo form_error('curPass'); ?></span>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label" style="color:white;font-size:20px;margin-left: 7px;font-family:Courier New;">Enter New Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="newPass" id="newPass"  placeholder="Enter your New Password"/>
								</div>
                                <span class="text-danger"><?php echo form_error('newPass'); ?></span>
							</div>
						</div>
                        <div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Re-Enter New Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="rnewPass" id="rnewPass"  placeholder="Enter your New Password"/>
								</div>
                                <span class="text-danger"><?php echo form_error('rnewPass'); ?></span>
							</div>
						</div>
                        <div class="form-group ">
							<input type="submit" class="btn btn-primary btn-lg btn-block login-button" style="font-family:Courier New;background:#A40E57;" name = "register" value = "SUBMIT"/>
						</div>
					</form>
				</div>
			</div>
		</div>

		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	</body>
</html>