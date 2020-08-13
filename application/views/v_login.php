<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo SITE_NAME ." : ". ucfirst($this->uri->segment(1)) ." - ". ucfirst($this->uri->segment(2)) ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/img/favicon.png') ?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets_login/vendor/bootstrap/css/bootstrap.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets_login/fonts/iconic/css/material-design-iconic-font.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets_login/vendor/animate/animate.css') ?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets_login/vendor/css-hamburgers/hamburgers.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets_login/vendor/animsition/css/animsition.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets_login/vendor/select2/select2.min.css') ?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets_login/vendor/daterangepicker/daterangepicker.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets_login/css/util.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/assets_login/css/main.css') ?>">
<!--===============================================================================================-->
</head>
<!-- Ubah background dibawah ini -->
<body>
<!-- <body style="background-image: url('<?php echo site_url('assets/img/back.png') ?>');"> -->
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-b-20">
				<form class="login100-form validate-form" method="POST" action="<?php echo base_url('login') ?>">
					
					<span class="login100-form-title p-b-20">
						SISTEM INFORMASI PEMELIHARAAN ARSITEKTURAL GEDUNG KANTOR PEMERINTAH PROVINSI JAWA TENGAH
					</span>

					<span class="login100-form-avatar">
						<img src="<?php echo base_url('assets/assets_login/images/logo-jateng.png') ?>" alt="AVATAR">
					</span>

					<span class="login100-form-title p-b-20 p-t-20">
						BIRO UMUM SETDA PROVINSI JAWA TENGAH
					</span>
					
					<?php if(isset($error)) { echo $error; }; ?>
					<div class="wrap-input100 validate-input m-t-15 m-b-35" data-validate = "Masukkan email anda">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email" autocomplete="off"></span>
						<?php echo form_error('email'); ?>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Masukkan password anda">
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Password" autocomplete="off"></span>
						<?php echo form_error('password'); ?>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/assets_login/vendor/jquery/jquery-3.2.1.min.js') ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/assets_login/vendor/animsition/js/animsition.min.js') ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/assets_login/vendor/bootstrap/js/popper.js') ?>"></script>
	<script src="<?php echo base_url('assets/assets_login/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/assets_login/vendor/select2/select2.min.js') ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/assets_login/vendor/daterangepicker/moment.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/assets_login/vendor/daterangepicker/daterangepicker.js') ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/assets_login/vendor/countdowntime/countdowntime.js') ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/assets_login/js/main.js') ?>"></script>

</body>
</html>