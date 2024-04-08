<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
    <head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title> Admin Login | Nneels Ecommerce </title>

		<!--- Favicon -->
		<link rel="icon" href="{{asset('assets/images/nneels-favicon.png')}}" type="image/x-icon"/>

		<!--- Icons css -->
		<link href="{{asset('admin/assets/css/icons.css')}}" rel="stylesheet">

		
		<!--- Right-sidemenu css -->
		<link href="{{asset('admin/assets/plugins/sidebar/sidebar.css')}}" rel="stylesheet">

		<!--- Custom Scroll bar -->
		<link href="{{asset('admin/assets/plugins/mscrollbar/jquery.mCustomScrollbar.css')}}" rel="stylesheet"/>

		<!--- Style css -->
		<link href="{{asset('admin/assets/css/style.css')}}" rel="stylesheet">
		<link href="{{asset('admin/assets/css/skin-modes.css')}}" rel="stylesheet">

		<!--- Sidemenu css -->
		<link href="{{asset('admin/assets/css/sidemenu.css')}}" rel="stylesheet">

		<!--- Animations css -->
		<link href="{{asset('admin/assets/css/animate.css')}}" rel="stylesheet">
		
		<!--- Switcher css -->
		<link href="{{asset('admin/assets/switcher/css/switcher.css')}}" rel="stylesheet">
		<link href="{{asset('admin/assets/switcher/demo.css')}}" rel="stylesheet">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    </head>
	
	<body class="main-body">
		<div class="my-auto page page-h">
			<div class="main-signin-wrapper">
				<div class="main-card-signin d-md-flex wd-100p">
				<div class="wd-md-50p login d-none d-md-block page-signin-style p-5 text-white" >
					<div class="my-auto authentication-pages">
						<div class="d-flex flex-column justify-content-center align-items-center" >
							<img src="{{asset('assets/images/nneels-updated-logo.jpg')}}" class=" m-0 mt-5 mb-4" alt="logo" height="80px">
							<h6 class="mb-4">&copy <?php echo date('Y'); ?>. All rights reserved. </h6>
							<a href="https://ekodus.com" class="btn btn-primary" style="background-color: #475aee1c;border-color: #0ba36036;">Design & Maintained by <b>Ekodus Technologies Pvt. Ltd.</b></a>
						</div>
					</div>
				</div>
				<div class="p-5 wd-md-50p">
					<div class="main-signin-header">
						<h2>Welcome back!</h2>
						<h4>Please sign in to continue</h4>
						<form id="loginForm">
							@csrf
							<div class="form-group">
								<label>Email</label>
								<input class="form-control" name="email" placeholder="Enter your email" type="email" required>
							</div>
							<div class="form-group">
								<label>Password</label>
								<input class="form-control" name="password" placeholder="Enter your password" type="password" required>
							</div>
							<button class="btn btn-main-primary btn-block signInBtn" type="submit">Sign In</button>
						</form>
					</div>
					<div class="main-signin-footer mt-3 mg-t-5">
						<p><a href="#">Forgot password?</a></p>
					</div>
				</div>
			</div>
			</div>
		</div>
		<!-- /main-signin-wrapper -->
		
		<!-- Back-to-top -->
		<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

		<!--- JQuery min js -->
		<script src="{{asset('admin/assets/plugins/jquery/jquery.min.js')}}"></script>

		{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> --}}

		<!--- Datepicker js -->
		<script src="{{asset('adminassets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

		<!--- Bootstrap Bundle js -->
		<script src="{{asset('adminassets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

		<!--- Ionicons js -->
		<script src="{{asset('admin/assets/plugins/ionicons/ionicons.js')}}"></script>

		
		<!--- Moment js -->
		<script src="{{asset('admin/assets/plugins/moment/moment.js')}}"></script>

		<!--- JQuery sparkline js -->
		<script src="{{asset('admin/assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

		<!--- Perfect-scrollbar js -->
		<script src="{{asset('admin/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
		<script src="{{asset('admin/assets/plugins/perfect-scrollbar/p-scroll.js')}}"></script>


		<!--- Rating js -->
		<script src="assets/plugins/rating/jquery.rating-stars.js"></script>
		<script src="assets/plugins/rating/jquery.barrating.js"></script>

		<!--- Custom Scroll bar Js -->
		<script src="assets/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>


		<!--- Sidebar js -->
		<script src="assets/plugins/side-menu/sidemenu.js"></script>


		<!--- Right-sidebar js -->
		<script src="assets/plugins/sidebar/sidebar.js"></script>
		<script src="assets/plugins/sidebar/sidebar-custom.js"></script>
		
		<!--- Eva-icons js -->
		<script src="assets/js/eva-icons.min.js"></script>

		<!--- Scripts js -->
		<script src="assets/js/script.js"></script>

		<!--- Custom js -->
		<script src="assets/js/custom.js"></script>
		
		<!--- Switcher js -->
		<script src="assets/switcher/js/switcher.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
		
		<script>
			$('#loginForm').on('submit', function(e){
				e.preventDefault();

				$('.signInBtn').text('Please wait...');
				$('.signInBtn').attr('disabled', true);

				let formData = new FormData(this);

				$.ajax({
					url:"{{route('admin.login')}}",
					type:"POST",
					contentType:false,
					processData:false,
					data:formData,
					success:function(data){
						if(data.status == 200){
							toastr.success(data.message)
							setTimeout(() => {
								$('.signInBtn').text(data.message);
								$('.signInBtn').text('Redirecting...');
								window.location.replace(data.data)
							}, 2000);
						}else{
							toastr.error(data.message)
							$('.signInBtn').text('Sign In');
							$('.signInBtn').attr('disabled', false);
						}
					},error:function(err){
						console.log(err)
						$('.signInBtn').text('Sign In');
						$('.signInBtn').attr('disabled', false);
					}

				});
			});
		</script>
	</body>
</html>