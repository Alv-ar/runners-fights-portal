@extends('layouts.auth_app')
@section('title')
    Register
@endsection
@section('content')
    <div class="card">
        <div class="card-header"><h4>{{ __('auth.register')}}</h4></div>

        <div class="card-body pt-1">
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="first_name">{{ __('auth.full_name')}}:</label><span
                                    class="text-danger">*</span>
                            <input id="firstName" type="text"
                                   class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                   name="name"
                                   tabindex="1" placeholder="{{ __('auth.enter_full_name') }}" value="{{ old('name') }}"
                                   autofocus required>
                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">{{ __('auth.email')}}:</label><span
                                    class="text-danger">*</span>
                            <input id="email" type="email"
                                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                   placeholder="{{ __('auth.enter_email') }}" name="email" tabindex="1"
                                   value="{{ old('email') }}"
                                   required autofocus>
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password" class="control-label">{{ __('auth.password') }}
                                :</label><span
                                    class="text-danger">*</span>
                            <input id="password" type="password"
                                   class="form-control{{ $errors->has('password') ? ' is-invalid': '' }}"
                                   placeholder="{{ __('auth.set_password') }}" name="password" tabindex="2" required>
                            <div class="invalid-feedback">
                                {{ $errors->first('password') }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password_confirmation"
                                   class="control-label">{{ __('auth.confirm_password') }}:</label><span
                                    class="text-danger">*</span>
                            <input id="password_confirmation" type="password" placeholder="{{ __('auth.confirm_password') }}"
                                   class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid': '' }}"
                                   name="password_confirmation" tabindex="2">
                            <div class="invalid-feedback">
                                {{ $errors->first('password_confirmation') }}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-lg btn-block" tabindex="4">
                                {{ __('auth.register') }}
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="flex items-center justify-end mt-4 text-center">
                    <a href="{{ url('login/github') }}" class="btn btn-lg btn-block">
                        <span class="fa-brands fa-github"></span> {{ __('auth.register_github') }}
                    </a> 
                    <a href="{{ url('login/google') }}" class="btn btn-lg btn-block">
                        <span class="fa-brands fa-google"></span> {{ __('auth.register_google') }}
                    </a> 
                    </div>
                </div>
                
            </form>
        </div>
    </div>
    <div class="mt-5 text-muted text-center">
        {{ __('auth.already_account') }}
         <a
                href="{{ route('login') }}">{{ __('auth.login') }}</a>
    </div>
    <script src="https://use.fontawesome.com/releases/v6.1.1/js/all.js" crossorigin="anonymous"></script>

@endsection
