<!DOCTYPE html>
<html>

<head>

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
	</style>

	<br><br><br><br><br><br><br><br><br>

	<div class="container" style="width: 35%;">

		<div class="panel panel-default" style="padding: 5px 5px;">

			<form action="{{ route('upBlood')}}" method="POST">
				@csrf

				<div class="form-group">
					<label for="name">Blood Group</label><br>
					<select class="form-control demo-default" required id="blood_group" name="blood_group" required>
						<option value=""> </option>
						<option value="A+">A+</option>
						<option value="A-">A-</option>
						<option value="B+">B+</option>
						<option value="B-">B-</option>
						<option value="O+">O+</option>
						<option value="O-">O-</option>
						<option value="AB+">AB+</option>
						<option value="AB-">AB-</option>
					</select>
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