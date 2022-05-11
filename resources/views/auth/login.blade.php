@extends('layouts.auth_app')
@section('title')
Login
@endsection
@section('content')
<div class="card card">
    <div class="card-header">
        <h4>{{ __('auth.login') }}</h4>
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            @if ($errors->any())
            <div class="alert alert-danger p-0">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="form-group">
                <label for="email">{{ __('auth.email') }}</label>
                <input aria-describedby="emailHelpBlock" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="{{ __('auth.enter_email') }}" tabindex="1" value="{{ (Cookie::get('email') !== null) ? Cookie::get('email') : old('email') }}" autofocus required>
                <div class="invalid-feedback">
                    {{ $errors->first('email') }}
                </div>
            </div>

            <div class="form-group">
                <div class="d-block">
                    <label for="password" class="control-label">{{ __('auth.password') }}</label>
                </div>
                <input aria-describedby="passwordHelpBlock" id="password" type="password" value="{{ (Cookie::get('password') !== null) ? Cookie::get('password') : null }}" placeholder="{{ __('auth.enter_password') }}" class="form-control{{ $errors->has('password') ? ' is-invalid': '' }}" name="password" tabindex="2" required>
                <div class="invalid-feedback">
                    {{ $errors->first('password') }}
                </div>
            </div>
            <div class="row">
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-lg btn-block" tabindex="4">
                        {{ __('auth.login')}}
                    </button>
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
    {{ __('auth.no_account') }}
    <a href="{{ route('register') }}">{{ __('auth.register') }}</a>
</div>
<script src="https://use.fontawesome.com/releases/v6.1.1/js/all.js" crossorigin="anonymous"></script>

@endsection