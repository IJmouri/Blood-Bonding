<!DOCTYPE html>
<html>

<head>
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

            padding: 8px 8px 8px 8px;

        }


        .buttonload {
            background-color: #b52107;


            border: none;

            color: white;

            padding: 12px 18px;

            font-size: 16px;

        }

        .fa {
            margin-left: -12px;
            margin-right: 8px;
        }
        .container{
            width: 35%;
        }
         @media (max-width: 575.98px) { 
        .container{
            width: 100%;
        }
    
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

    <div class="container" style="">

        <div class="panel panel-default" style="padding: 20px;">

            <form action="{{ route('upDate')}}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-6">
                        <label for="last_donation_date"><b style="color: #e50606">{{ __('Last Donation Date') }}</b></label>
                    </div>

                    <div class="form-group">
                        <div class="col-md-9">
                            <input type="hidden" name="user_id" value="{{ $value -> id}}" class="form-control" />
                        </div>
                    </div>

                    <div class="col-6">
                        <input type="date" class="form-control{{ $errors->has('last_donation_date') ? ' is-invalid' : '' }}" name="last_donation_date" value="{{ $value -> last_donation_date}}" required autofocus>
                        @if ($errors->has('last_donation_date'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('last_donation_date') }}</strong>
                        </span>
                        @endif
                    </div>
       
                </div>
                <br><br>
                <div class="form-group">
                    <button class="buttonload" type="submit" name="update"><i class="fa fa-spinner fa-spin"></i>Update</button>
                </div>


                </button>



            </form>
        </div>
    </div>
    <div class="footer">
        <p>Copyright@2019<a href=""> BloodBonding</a>. All Rights Reserved.</p>
    </div>
</body>

</html>