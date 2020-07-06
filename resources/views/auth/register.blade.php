@extends('layouts.app')
@section('content')

    <form method="POST" action="{{ route('register') }}" class="modal-content animate">
    @csrf
        <div class="containerform">
            <div class="row">
                <div class="col-25">
                    <label for="name" ><b style="color: #e50606">{{ __('Name') }}</b></label>
                </div>
                <div class="col-75">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                </div>
            </div>
            <div class="row">
                <div class="col-25">    
                    <label for="email" ><b style="color: #e50606">{{ __('E-Mail Address') }}</b></label>
                </div>
                <div class="col-75">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                </div>        
            </div>
            <div class="row">
                <div class="col-25">
                <label for="blood-group" ><b style="color: #e50606">{{ __('Blood Group') }}</b></label>
                </div>
                <div class="col-75">    
                <select class="form-control{{ $errors->has('blood_group') ? ' is-invalid' : '' }}" name="blood_group" >
                  
                        <option value="A+">A+</option>
                        <option value="B+">B+</option>
                        <option value="AB+">AB+</option>
    		            <option value="AB-">AB-</option>
		                <option value="A-">A-</option>
		                <option value="B-">B-</option>
		                <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                    @if ($errors->has('blood_group'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('blood_group') }}</strong>
                        </span>
                    @endif
                </div>
            </div>        
            <div class="row">
                <div class="col-25">
                    <label for="phone" ><b style="color: #e50606">{{ __('Phone') }}</b></label>
                </div>
                <div class="col-75">
                    <input type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" placeholder="880" name="phone" required autofocus>
                    @if ($errors->has('phone'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-25">        
                    <label for="location" ><b style="color: #e50606">{{ __('Location') }}</b></label>
                </div>
                <div class="col-75">
                    <select class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}" name="location" required autofocus>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Chattagram">Chattagram</option>
                    <option value="Cumilla">Barishal</option>
                    <option value="Cumilla">Cumilla</option>
                    <option value="Cumilla">Sylhet</option>
                    <option value="Cumilla">Dinajpur</option>
                    <option value="Cumilla">Rangpur</option>
                    <option value="Cumilla">Khulna</option>
                </select>   
                 @if ($errors->has('location'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('location') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-25">        
                    <label for="last_donation_date" ><b style="color: #e50606">{{ __('Last Donation Date') }}</b></label>
                </div>
                <div class="col-75">
                    <input type="date" class="form-control{{ $errors->has('last_donation_date') ? ' is-invalid' : '' }}" name="last_donation_date" required autofocus>
                    @if ($errors->has('last_donation_date'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('last_donation_date') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="password"><b style="color: #e50606">{{ __('Password') }}</b></label>
                </div>
            
                <div class="col-75">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif     
                </div>
            </div>         
            <div class="row">
                <div class="col-25">                  
                    <label for="password-confirm"><b style="color: #e50606">{{ __('Confirm Password') }}</b></label>
                </div>
                <div class="col-75">
                   <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
               </div>
            </div>
            <div class="row">
                <div class="col">                              
                    <button type="submit" class="button">
                       <span> {{ __('Register') }}</span>
                    </button>                    
                </div>
            </div>
    </form>                
</div>
@endsection
