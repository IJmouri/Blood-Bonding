<!doctype html>
<html>

<head><title>{{  'BloodBonding' }}</title>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="{{ asset('/') }}/front-end/css/style.css" rel="stylesheet">
<link href="{{ asset('/') }}/front-end/css/style2.css" rel="stylesheet">
<link href="{{ asset('/') }}/front-end/css/search_style.css" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">
		.my-active span{
			background-color: #5cb85c !important;
			color: white !important;
			border-color: #5cb85c !important;
		}
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


<center><br><br><br>
 
@if(count($datas)>0)
  <table id="customers">
  
  <tbody>
  <tr> 
      <?php 
           $i = 0 ; 
           $check=0 ;
      ?>
      @foreach ($datas as $data)
      <?php $i++;
      $r=( \Carbon\Carbon::now()->diff( \Carbon\Carbon::parse($data->last_donation_date) ) )->format("%m months");
      ?>
      
      @if($r >= '3 months')
         <?php $check++; ?>
      @if($check == 1)
      
      <thead>
        <tr>
          <th scope="col">Serial No</th>
          <th scope="col">Name</th>
          <th scope="col">Blood Group</th>
          <th scope="col">Phone Number</th>
        </tr>
      </thead>
      @endif
      <td>{{$i}}</td>
      <td>{{ $data->name}}</td>
      <td>{{ $data->blood_group}} </td>
      <td>{{ $data->phone}} </td>
      @endif
    </tr> 
    @endforeach 
    <div class="custom-pagination">
    {{ $datas->links()}}
    </div>
    
    @if($check==0)
    <div class="alert">
    <strong>Sorry! No Donor Is available now.</strong><br>
    <span style='font-size:100px;'>&#128533;</span>  
</div>

        
    @endif
    
  </tbody>

</table>
@else
    NO Donor Found
@endif
</center>
<div class="footer">
<p>Copyright@2019<a href=""> BloodBonding</a>. All Rights Reserved.</p>
</div>
</body>
</html>