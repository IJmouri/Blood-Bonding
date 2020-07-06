<!DOCTYPE html>
<html>
<head>
<title>{{  'BloodBonding' }}</title>

    <link href="{{ asset('/') }}/front-end/css/style.css" rel="stylesheet">
    <link href="{{ asset('/') }}/front-end/css/search_style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</style>
</head>
<body>
<div class="header">
  <a href="{{ url('/') }}" class="logo"><u>Blood Bonding</u></a>
  <div class="header-right">
    <a  href="{{ url('/') }}">Home</a>
    <a  href="{{route('login')}}">Login</a>
    <a  href="{{route('register')}}">SignUp</a>
  </div>
</div>
<div class="style22">
<marquee behavior="scroll" scrollamount="4" style="color:red">Warning: Do not pay any amount to any person promising supply of blood packets or arranging donors.We have no agents, does not arrange blood/donors and does not collect money for any service.</marquee>
</div>
<div class="container" >
  <form action="{{ route('donor-search') }}" method="get">
  <div class="row">
    <div class="col-25">
      <label for="bloodgroup" style="color:white">Blood Group</label>
    </div>
    <div class="col-75">
      <select id="blood-group" name="blood_group">
        <option value="A+">A+</option>
        <option value="B+">B+</option>
        <option value="AB+">AB+</option>
    		<option value="AB-">AB-</option>
		    <option value="A-">A-</option>
		    <option value="B-">B-</option>
		    <option value="O+">O+</option>
		    <option value="O-">O-</option>
      </select>
    </div>
  </div>
  
  <div class="row">
    <div class="col-25">
      <label for="location" style="color:white">Location</label>
    </div>
    <div class="col-75">
      <select id="location" name="location">
        <option value="Dhaka">Dhaka</option>
        <option value="Chattagram">Chattagram</option>
        <option value="Barishal">Barishal</option>
        <option value="Cumilla">Cumilla</option>
        <option value="Sylhet">Sylhet</option>
        <option value="Dinajpur">Dinajpur</option>
        <option value="Rangpur">Rangpur</option>
        <option value="Khulna">Khulna</option>


      </select>
    </div>
  </div>
  <div class="row">
  <input type="submit" value="Search">
  </div>
  </form>
</div>

<div class="footer">
<p>Copyright@2019<a href=""> BloodBonding</a>. All Rights Reserved.</p>
</div>
</body>
</html>
