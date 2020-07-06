@extends('layouts.app')

@section('content')
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('$flash_message_error') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ url('forgot-password') }}" class="modal-content animate">
                        @csrf
                          {!! session('flash_message_error') !!}
                        
                        <div class="containerform">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><b style="color: #e50606">{{ __('E-Mail Address') }}</b></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="background-color:red">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
