<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign up</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="Login_v4/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v4/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v4/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v4/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v4/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login_v4/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v4/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v4/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login_v4/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v4/css/util.css">
	<link rel="stylesheet" type="text/css" href="Login_v4/css/main.css">
<!--===============================================================================================-->
</head>
<body>
<?php session_start() ;
if (empty ($_SESSION['IDclient']))
{
?>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				
				<form class="login100-form validate-form"action = "adduser.php" method = "POST">
					<span class="login100-form-title p-b-49" action = "adduser.php" method = "POST">
						Sign up
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "IIN is reauired">
						<span class="label-input100">IIN</span>
							<input class="input100" type="text" name="IIN" placeholder="Type your IIN">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "email is reauired">
						<span class="label-input100">Full Name</span>
							<input class="input100" type="text" name="clientname" placeholder="Type your full name">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

						<div class="wrap-input100 validate-input m-b-23" data-validate = "email is reauired">
						<span class="label-input100">email</span>
							<input class="input100" type="email" name="email" placeholder="Type your email">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "password is reauired">
						<span class="label-input100">password</span>
							<input class="input100" type="password" name="password" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "password is reauired">
						<span class="label-input100">confirm password</span>
							<input class="input100" type="password" name="password_confirm" placeholder="confirm your password">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "CardNumber is reauired">
						<span class="label-input100">CardNumber</span>
							<input class="input100" type="text" name="CardNumber" placeholder="Type your CardNumber">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "ContactNumber is reauired">
						<span class="label-input100">ContactNumber</span>
							<input class="input100" type="text" name="ContactNumber" placeholder="Type your ContactNumber">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
		 		
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Sign in
							</button>
						</div>
					</div>

					<div class="txt1 text-center p-t-54 p-b-20">
						
					</div>

					
					</div>
				</form>
			</div>
		</div>
	</div>
	
<?php  }
else {
	echo "You are entered to the system as " . $_SESSION['client_full_name'];
	echo '<a href="LOGOUT.php"> logout</a>';// logout system
	echo '<a href="output.php"> client</a>';//output client data
 }
?>
	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>