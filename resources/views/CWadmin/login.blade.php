<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

	<title>Đăng nhập - ChuyenWEB</title>
	<meta name="description" content="Login page example">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!--begin::Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">        <!--end::Fonts -->

	<!-- set token -->
	<meta name="_token" content="{{csrf_token()}}" />

	<!--begin::Page Custom Styles(used by this page) -->
	<link href="{{asset('assets/css/pages/login/login-4.css')}}" rel="stylesheet" type="text/css" />
	<!--end::Page Custom Styles -->

	<!--begin::Global Theme Styles(used by all pages) -->
	<link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
	<!--end::Global Theme Styles -->

	<!--begin::Layout Skins(used by all pages) -->

	<link href="{{asset('assets/css/skins/header/base/light.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/css/skins/header/menu/light.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/css/skins/brand/dark.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/css/skins/aside/dark.css')}}" rel="stylesheet" type="text/css" />        <!--end::Layout Skins -->

	<style>
		#message {
			text-align: center;
			color: red;
			font-weight: 500;
			font-size: 14px;
		}
		#login_signin_submit:action {
			box-shadow: 1px 3px 3px #962626;
		    height: 49px;
		    padding-left: 2.5rem;
		    padding-right: 2.5rem;
		}
	</style>

	<!-- <link rel="shortcut icon" href="https://keenthemes.com/metronic/themes/metronic/theme/default/demo1/dist/assets/media/logos/favicon.ico" />  -->
</head>
<!-- end::Head -->

<!-- begin::Body -->
<body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading"  >

	<!-- begin:: Page -->
	<div class="kt-grid kt-grid--ver kt-grid--root">
		<div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v4 kt-login--signin" id="kt_login">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url({{asset('assets/media/bg/bg-2.jpg')}})">
				<div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
					<div class="kt-login__container">
						<div class="kt-login__logo">
							<a href="#">
								<img width="70%" src="{{asset('assets/images/logo.png')}}">  	
							</a>
						</div>
						<div class="kt-login__signin">
							<div class="kt-login__head">
								<h3 class="kt-login__title">Đăng nhập vào trang quản trị</h3>
							</div>
							<form class="kt-form" enctype="multipart/form-data"> 
								@csrf
								<div class="input-group">
									<input class="form-control" id="email" type="text" value="phuong97nhp" placeholder="Nhập vào tài khoản" name="email" autocomplete="off">
								</div>
								<div class="input-group">
									<input class="form-control" id="password" type="password" value="123465" placeholder="Nhập vào mật khẩu" name="password">
								</div>
								<div class="row kt-login__extra">
									<div class="col">
										<label class="kt-checkbox" id="checkboxRemember">
											<input type="checkbox" value="true" id="remember" name="remember"> Nhớ mật khẩu ? 
											<span></span>
										</label>
									</div>
									<div class="col kt-align-right">
										<a href="javascript:;" id="kt_login_forgot" class="kt-login__link">Tôi không nhớ mật khẩu ?</a>
									</div>
								</div>
								<div class="col kt-message">
									<div id="message">&nbsp;&nbsp;&nbsp;</div>
								</div>
								<div class="kt-login__actions">
									<button id="login_signin_submit" type="button" class="btn btn-brand btn-pill kt-login__btn-primary">Đăng nhập</button>
								</div>
							</form>
						</div>
					</div>	
				</div>
			</div>
		</div>	
	</div>

	<!-- end:: Page -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="{{asset('assets/js/templeate_script_admin.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/js/pages/custom/login/login-general.js')}}" type="text/javascript"></script>
	<!--end::Page Scripts -->
</body>
<!-- end::Body -->

</html>
