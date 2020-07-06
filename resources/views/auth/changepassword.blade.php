<!DOCTYPE html>
<html>

<head>

	<link rel="stylesheet" href="{{asset('/')}}/front-end/css/style2.css" />
    <link rel="stylesheet" href="{{asset('/')}}/front-end/css/profile.css" />
    <link rel="stylesheet" href="{{asset('/')}}/front-end/css/style2.css" />

</head>

<body class="skin-red">

	@include('blood.header')

	<style>
		.form-group {
			text-align: left;
		}

		.form-container {

			padding: 20px 10px 20px 30px;


		}
		
        .container{
            width: 35%;
        }
         @media (max-width: 575.98px) { 
        .container{
            width: 100%;
        }
	</style>
	
<div class="header1">
    <a href="" class="logo"><u>BloodBonding</u></a>
        <div class="header1-right">

            <button style="background-color:red;border-radius:5px;height:50px"><a href="{{ route('donor-profile')}}">Profile </a></button>
             
            <div class="dropdown1">
                &nbsp<button class="dropbtn1"><a href="">{{Auth::user()->name}} </a></button>
                <div class="dropdown1-content">
                    <a  href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Sign Out') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                    </form>
                </div>
            </div>
        </div>
</div>


	<br><br><br><br><br><br>

	<div class="container">
		<div class="panel panel-default" style="padding: 5px 5px;">
		                       @foreach ($errors->all() as $error)
                            <p class="text-danger">{{ $error }}</p>
                         @endforeach 
  
			<form action="{{ route('changePassword') }}" method="post" class="form-group form-container">
			@csrf
				<div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
					<label for="oldpassword">Current Password</label>
					<input type="password" id="current-password " required name="old_password" placeholder="Current Password" class="form-control">
					@if ($errors->has('current-password'))
					<span class="help-block">
						<strong>{{ $errors->first('current-password') }}</strong>
					</span>
					@endif
				</div>
				<div class="form-group">
					<label for="newpassword">New Password</label>
					<input type="password" id="new-password" required name="new_password" placeholder="New Password" class="form-control">
					@if ($errors->has('new-password'))
					<span class="help-block">
						<strong>{{ $errors->first('new-password') }}</strong>
					</span>
					@endif
				</div>

				<div class="form-group">
					<label for="c_password">Confirm Password</label>
					<input type="password" id="new-password-confirm" required name="confirm_password" placeholder="Confirm Password" class="form-control">
				</div>

				<div class="form-group">
					<button class="btn btn-lg btn-danger center-aligned" type="submit" name="update_pass">Update Password</button>
				</div>
			</form>

		</div>
	</div>

    <div class="footer">
        <p>Copyright@2019<a href=""> BloodBonding</a>. All Rights Reserved.</p>
    </div>


	<script src="{{asset('/')}}/profile-front-end/plugins/jQuery/jQuery-2.1.3.min.js"></script>
	<!-- Bootstrap 3.3.2 JS -->
	<script src="{{asset('/')}}/profile-front-end/user_bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<!-- FastClick -->
	<script src="{{asset('/')}}/profile-front-end/plugins/fastclick/fastclick.min.js"></script>
	<!-- AdminLTE App -->
	<script src="{{asset('/')}}/profile-front-end/dist/js/app.min.js" type="text/javascript"></script>
	<!-- Sparkline -->
	<script src="{{asset('/')}}/profile-front-end/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
	<!-- jvectormap -->
	<script src="{{asset('/')}}/profile-front-end/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
	<script src="{{asset('/')}}/profile-front-end/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
	<!-- daterangepicker -->
	<script src="{{asset('/')}}/profile-front-end/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
	<!-- datepicker -->
	<script src="{{asset('/')}}/profile-front-end/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
	<!-- iCheck -->
	<script src="{{asset('/')}}/profile-front-end/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
	<!-- SlimScroll 1.3.0 -->
	<script src="{{asset('/')}}/profile-front-end/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<!-- ChartJS 1.0.1 -->
	<script src="{{asset('/')}}/profile-front-end/plugins/chartjs/Chart.min.js" type="text/javascript"></script>

	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="{{asset('/')}}/profile-front-end/dist/js/pages/dashboard2.js" type="text/javascript"></script>

	<!-- AdminLTE for demo purposes -->
	<script src="{{asset('/')}}/profile-front-end/dist/js/demo.js" type="text/javascript"></script>

	<script src="{{asset('/')}}/profile-front-end/dist/js/app.min.js" type="text/javascript"></script>
	<script src="{{asset('/')}}/profile-front-end/loader/js/aos.js"></script>
	<script>
		AOS.init({
			easing: 'ease-in-out-sine'
		});
	</script>

</body>

</html>