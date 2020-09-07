<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" type="image/png" href="<?= get_template_directory_uri(); ?>/custom-login/images/icons/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/custom-login/vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/custom-login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/custom-login/fonts/iconic/css/material-design-iconic-font.min.css">

	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/custom-login/vendor/animate/animate.css">
	
	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/custom-login/vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/custom-login/vendor/animsition/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/custom-login/vendor/select2/select2.min.css">
	
	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/custom-login/vendor/daterangepicker/daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/custom-login/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/custom-login/css/main.css">

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?= get_template_directory_uri(); ?>/custom-login/images/bg-01.jpg');">
			<div class="wrap-login100">
				<!-- <form class="login100-form validate-form">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
					</div>
				</form> -->

				<?php
					if ( ! is_user_logged_in() ) { // Display WordPress login form:
							$args = array(
									'redirect' => admin_url(), 
									'form_id' => 'container-login100',
									'label_username' => __( 'Login' ),
									'label_password' => __( 'Senha' ),
									'label_remember' => __( 'Lembre-me' ),
									'label_log_in' => __( 'Entrar' ),
									'remember' => true
							);
							wp_login_form( $args );
					} else { // If logged in:
							wp_loginout( home_url() ); // Display "Log Out" link.
							echo " | ";
							wp_register('', ''); // Display "Site Admin" link.
					}
				?>

			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	

	<script src="<?= get_template_directory_uri(); ?>/custom-login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?= get_template_directory_uri(); ?>/custom-login/vendor/animsition/js/animsition.min.js"></script>
	<script src="<?= get_template_directory_uri(); ?>/custom-login/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= get_template_directory_uri(); ?>/custom-login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?= get_template_directory_uri(); ?>/custom-login/vendor/select2/select2.min.js"></script>
	<script src="<?= get_template_directory_uri(); ?>/custom-login/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?= get_template_directory_uri(); ?>/custom-login/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="<?= get_template_directory_uri(); ?>/custom-login/vendor/countdowntime/countdowntime.js"></script>
	<script src="<?= get_template_directory_uri(); ?>/custom-login/js/main.js"></script>

</body>
</html>