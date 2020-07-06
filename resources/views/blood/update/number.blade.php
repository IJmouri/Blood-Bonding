<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="{{asset('/')}}/front-end/css/profile.css" />


	<link rel="stylesheet" href="{{asset('/')}}/front-end/css/style2.css" />

</head>

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

<body>
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


	<br><br><br><br><br><br><br><br><br>

	<div class="container">

		<div class="panel panel-default" style="padding: 20px;">

			<form action="{{ route('upphone')}}" method="POST">
				@csrf

				<div class="form-group">
					<label for="contact_no">Contact No</label>
					<input type="text" name="phone" value="{{ $value ->phone}}" class="form-control" required pattern="^\d{13}$" title="11 numeric characters only" maxlength="13">
					@if ($errors->has('phone'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('phone') }}</strong>
					</span>
					@endif
				</div>

				<div class="form-group">
					<div class="col-md-9">
						<input type="hidden" name="user_id" value="{{ $value -> id}}" class="form-control" />
					</div>
				</div>

				<div class="form-group">
					<button class="btn btn-lg btn-danger center-aligned" type="submit" name="update">Update</button>
				</div>

			</form>
		</div>
	</div>
	<div class="footer">
		<p>Copyright@2019<a href=""> BloodBonding</a>. All Rights Reserved.</p>
	</div>
</body>

</html>