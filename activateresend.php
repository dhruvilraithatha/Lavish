<?php include "LOGIN-SIGNUP/includes/dbconnect.php"; ?>
<?php
//include "LOGIN-SIGNUP/login-code.php";
//include('LOGIN-SIGNUP/login-code.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: FRIEND_FEED/profilepage.php");
}
?>
<!DOCTYPE html
<html lang="en" >
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>
	L A V I S H | Login Page - 4
		</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
		</script>
		<!--end::Web font -->
		<!--begin::Base Styles -->
		<link href="LOGIN-SIGNUP/vendors.bundle.css" rel="stylesheet" type="text/css" />
		<link href="LOGIN-SIGNUP/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Base Styles -->
		<link rel="shortcut icon" href="LOGIN-SIGNUP/favicon.ico" />
	</head>
	<!-- end::Head -->
	<!-- end::Body -->
	<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--singin m-login--2 m-login-2--skin-3" id="m_login" style="background-image: url(LOGIN-SIGNUP/bg-2.jpg);">
				<div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
					<div class="m-login__container">
						<div class="m-login__logo">
							<a href="#">
								<img src="logo-1.png" >
							</a>
						</div>
						<div class="m-login__signin">
							<form class="m-login__form m-form" action="LOGIN-SIGNUP/mail.php?type=resend" method="post">
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Email" name="email" autocomplete="off" disabled value="Your Account isn't Activated Yet.">
								</div>
								<div class="m-login__form-action">
									<button id="m_login_signin_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn" name="submit">
										Re-Send Activation Link.
									</button>
								</div>
							</form>
						</div>


					</div>
				</div>
			</div>
		</div>
		<!-- end:: Page -->
		<!--begin::Base Scripts -->
		<script src="LOGIN-SIGNUP/vendors.bundle.js" type="text/javascript"></script>
		<script src="LOGIN-SIGNUP/scripts.bundle.js" type="text/javascript"></script>
		<!--end::Base Scripts -->
		<!--begin::Page Snippets -->
		<script src="LOGIN-SIGNUP/login.js" type="text/javascript"></script>
		<!--end::Page Snippets -->
	</body>
	<!-- end::Body -->
</html>
