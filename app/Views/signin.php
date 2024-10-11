<!doctype html>
<html lang="en" dir="ltr">
  <head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="msapplication-TileColor" content="#0061da">
		<meta name="theme-color" content="#1643a3">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<link rel="icon" href="<?=base_url();?>assets/favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="<?=base_url();?>assets/favicon.ico" />

		<!-- TITLE -->
		<title>A2Z-<?=@$title;?>.</title>

		<!-- DASHBOARD CSS -->
		<link href="<?=base_url();?>assets/css/dashboard.css" rel="stylesheet"/>

		<!-- HORIZONTAL-MENU CSS -->
		<link href="<?=base_url();?>assets/plugins/horizontal-menu/dropdown-effects/fade-down.css" rel="stylesheet">
		<link href="<?=base_url();?>assets/plugins/horizontal-menu/webslidemenu.css" rel="stylesheet">

		<!-- SINGLE-PAGE CSS -->
		<link href="<?=base_url();?>assets/plugins/single-page/css/main.css" rel="stylesheet" type="text/css">

		<!--C3.JS CHARTS PLUGIN -->
		<link href="<?=base_url();?>assets/plugins/charts-c3/c3-chart.css" rel="stylesheet"/>

		<!-- CUSTOM SCROLL BAR CSS-->
		<link href="<?=base_url();?>assets/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet"/>

		<!--- FONT-ICONS CSS -->
		<link href="<?=base_url();?>assets/css/icons.css" rel="stylesheet"/>

  </head>
	<body>

		<!-- BACKGROUND-IMAGE -->
		<div class="login-img">

			<!-- GLOABAL LOADER -->
			<div id="global-loader">
				<img src="<?=base_url();?>assets/images/loader.svg" class="loader-img" alt="Loader">
			</div>

			<div class="page">
				<div class="">
				    <!-- CONTAINER OPEN -->
					<div class="col col-login mx-auto">
						<div class="text-center">
							<img src="<?=base_url();?>assets/images/brand/logo.png" class="" alt="">
						</div>
					</div>
					<div class="container-login100">
						<div class="wrap-login100 p-6">
							<form class="login100-form validate-form" action="<?=base_url().'index.php/login'?>" method="post">
								<span class="login100-form-title">
									Member Login
								</span>
								<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
									<input class="input100" type="text" name="name" placeholder="Email">
									<span class="focus-input100"></span>
									<span class="symbol-input100">
										<i class="zmdi zmdi-email" aria-hidden="true"></i>
									</span>
								</div>
								<div class="wrap-input100 validate-input" data-validate = "Password is required">
									<input class="input100" type="password" name="password" placeholder="Password">
									<span class="focus-input100"></span>
									<span class="symbol-input100">
										<i class="zmdi zmdi-lock" aria-hidden="true"></i>
									</span>
									<span id="error_msg"></span>

								</div>
                                <div class="container-login100-form-btn">
									<button  class="login100-form-btn btn-primary" name="loginbnt">
										Login
									</a>
								</div>
							 
							</form>
						</div>
					</div>
					<!-- CONTAINER CLOSED -->
				</div>
			</div>
		</div>
		<!-- BACKGROUND-IMAGE CLOSED -->

		<!-- JQUERY SCRIPTS -->
		<script src="<?=base_url();?>assets/js/vendors/jquery-3.2.1.min.js"></script>

		<!-- BOOTSTRAP SCRIPTS -->
		<script src="<?=base_url();?>assets/js/vendors/bootstrap.bundle.min.js"></script>

		<!-- SPARKLINE -->
		<script src="<?=base_url();?>assets/js/vendors/jquery.sparkline.min.js"></script>

		<!-- CHART-CIRCLE -->
		<script src="<?=base_url();?>assets/js/vendors/circle-progress.min.js"></script>

		<!-- RATING STAR -->
		<script src="<?=base_url();?>assets/plugins/rating/jquery.rating-stars.js"></script>

		<!-- INPUT MASK PLUGIN-->
		<script src="<?=base_url();?>assets/plugins/input-mask/jquery.mask.min.js"></script>

		<!-- CUSTOM SCROLL BAR JS-->
		<script src="<?=base_url();?>assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!-- CUSTOM JS-->
		<script src="<?=base_url();?>assets/js/custom.js"></script>

	</body>
</html>



 