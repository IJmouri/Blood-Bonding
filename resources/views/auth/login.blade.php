@extends('layouts.app')
@section('content')

<div class="containerform">  
    <form method="POST" action="{{ route('login') }}" class="modal-content animate">
    @csrf                    
    <div class="containerform">
        <label for="email"><b style="color: #e50606">E-Mail Address</b></label>
        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif                            

        <label for="password"><b style="color: #e50606">{{ __('Password') }}</b></label>
        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
                        
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>
        <div>   
            <button type="submit" class="button"><span>{{ __('Login') }}</span></button>
        </div>
        <div>
            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </div>
</div>
    </form>            
</div>
@endsection
