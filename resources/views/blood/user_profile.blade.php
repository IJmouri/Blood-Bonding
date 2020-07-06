<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <link rel="stylesheet" href="{{asset('/')}}/front-end/css/style2.css" />
    <link rel="stylesheet" href="{{asset('/')}}/front-end/css/style2.css" />
<style>
.m{
  margin-left:250px;
  margin-right:250px;

}
.color{
  color:white;
}
</style>

</head>

<body class="skin-red">
 @include ('blood.header')

  <!-- Right side column. Contains the navbar and content of the page -->
  <!-- Content Header (Page header) -->
  <section class="content" data-aos="zoom-in">

   

    <center>
      <h2 style="color:firebrick">Welcome {{Auth::user()->name}} </h2>
       <h3 style="color:firebrick">“If you’re a blood donor, you’re a hero to someone, somewhere, who received your gracious gift of life.”</h3></center>

    </center>
  </section>

  <div class="w3-container">
    <!-- Content Header (Page header) -->

        <div class="m" style="background-color:firebrick;width:70%">

      <ul class="goal">
        <li class="gl">
          <b class="color">Username : {{Auth::user()->name}}</b><a href="{{ route('cname')}}"> </span></a><br></li>
        <li class="gl"><b class="color">Blood Group : {{Auth::user()->blood_group}}</b><span class="close"> <a href="{{ route('cblood',['id'=>Auth::user()->id])}}"> <i class="fa fa-edit"></i></a><br></li>

        <li class="gl"><b class="color">Email : {{Auth::user()->email}}</b><br></li>
        <li class="gl"><b class="color">Phone : {{Auth::user()->phone}}</b><span class="close"> <a href="{{ route('cphone',['id'=>Auth::user()->id])}}"> <i class="fa fa-edit"></i></a> </li>
        <li class="gl"><b class="color">Location : {{Auth::user()->location}}</b><span class="close"> <a href="{{ route('cloc',['id'=>Auth::user()->id])}}"> <i class="fa fa-edit"></i> </a> </li>
        <li class="gl"><b class="color">Last Donation Date : {{Auth::user()->last_donation_date}}</b><span class="close"> <a href="{{ route('cdate',['id'=>Auth::user()->id])}}"> <i class="fa fa-edit"></i></a> </li>
      </ul>

    </section>

  </div>

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
  
  <div class="footer">
    <p>Copyright@2019<a href=""> BloodBonding</a>. All Rights Reserved.</p>
  </div>
</body>

</html>