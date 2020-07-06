@extends('blood.header')
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset('/')}}/front-end/css/style2.css" />
    <link rel="stylesheet" href="{{asset('/')}}/front-end/css/style2.css" />
    <link rel="stylesheet" href="{{asset('/')}}/front-end/css/profile.css" />
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>  
</head>
<body>
<div class="header1">
    <a href="" class="logo"><u>BloodBonding</u></a>
        <div class="header1-right">

              <button style="color:red;border-radius:5px"><a href="">Profile </a></button>

            <div class="dropdown1">
                <button class="dropbtn1"><a href="">{{Auth::user()->name}} </a></button>
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


<center>
      <h2 style="color:firebrick">Welcome {{Auth::user()->name}} </h2>
       <h3 style="color:firebrick">“If you’re a blood donor, you’re a hero to someone, somewhere, who received your gracious gift of life.”</h3>
</center>
  <div class="container" >
    <div class="panel panel-default" style="padding: 20px; border-color:firebrick;width:100%">
      <ul class="goal">
        <li class="gl">
          <b class="color">Username : {{Auth::user()->name}}</b><a href="{{ route('cname')}}"> </span></a><br></li>
        <li class="gl"><b class="color">Email : {{Auth::user()->email}}</b><br></li>
        <li class="gl"><b class="color">Blood Group : {{Auth::user()->blood_group}}</b><br></li>
        <li class="gl"><b class="color">Phone : {{Auth::user()->phone}}</b><span class="close"> <a href="{{ route('cphone',['id'=>Auth::user()->id])}}"> <i class="fas fa-edit"></i></a> </li>
        <li class="gl"><b class="color">Location : {{Auth::user()->location}}</b><span class="close"> <a href="{{ route('cloc',['id'=>Auth::user()->id])}}"> <i class="fas fa-edit"></i> </a> </li>
        <li class="gl"><b class="color">Last Donation Date : {{Auth::user()->last_donation_date}}</b><span class="close"> <a href="{{ route('cdate',['id'=>Auth::user()->id])}}"> <i class="fas fa-edit"></i></a> </li>
        <li class="gl"><b class="color">Change Password</b><span class="close"> <a href="{{ route('chngpass')}}"> <i class="fas fa-edit"></i></a> </li>
      </ul>
</div>
</body>
</html>
