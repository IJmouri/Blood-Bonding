<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{  'BloodBonding' }}</title>
    <!-- Fonts -->
    <!-- Styles -->
    <link href="{{ asset('/') }}/front-end/css/style.css" rel="stylesheet">
    <link href="{{ asset('/') }}/front-end/css/log_reg_style.css" rel="stylesheet">
    
</head>
<body>

<div class="header">
  <a href="{{ url('/') }}" class="logo"><u>Blood Bonding</u></a>
  <div class="header-right">
    <a href="{{ url('/') }}">Home</a>
    <a href="{{route('login')}}">Login</a>
    <a href="{{route('register')}}">SignUp</a>
  </div>
</div>
    
<div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                       
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <div class="footer">
<p>Copyright@2019<a href=""> BloodBonding</a>. All Rights Reserved.</p>
</div>
</body>
</html>
