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
               &nbsp <button class="dropbtn1"><a href="">{{Auth::user()->name}} </a></button>
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


      <form action="{{ route('uploc')}}" method="POST" class="form-horizontal">
        @csrf
        <div class="form-group">
          <div class="col-75">
            <select class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}" name="location" required autofocus>
              <option value="Dhaka">Dhaka</option>
              <option value="Chattagram">Chattagram</option>
              <option value="Barishal">Barishal</option>
              <option value="Cumilla">Cumilla</option>
              <option value="Sylhet">Sylhet</option>
              <option value="Dinajpur">Dinajpur</option>
              <option value="Rangpur">Rangpur</option>
              <option value="Khulna">Khulna</option>
            </select>
            @if ($errors->has('location'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('location') }}</strong>
            </span>
            @endif
          </div>
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