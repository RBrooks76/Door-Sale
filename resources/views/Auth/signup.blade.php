@extends('Auth.Layout.index')
@section('content')

<div class="limiter">
    <div class="container-login100"  style="background-image : {{ asset('assets_login/images/bg-01.jpg')}}">
        <div class="wrap-login100">
            <form class="login100-form validate-form" method="POST" action="{{ route('onSignup') }}">
                @csrf
                <span class="login100-form-logo">
                    <img src="{{ asset('image/logo/logo.png') }}" />
                </span>

                <span class="login100-form-title p-b-40 p-t-10">
                    Sign up
                </span>

                @if(session()->has('message'))
                    <div class="alert alert-danger text-center m-b-30">
                        {{ session()->get('message') }}
                    </div>
                @endif

                <div class="wrap-input100 validate-input" data-validate = "Enter email">
                    <input class="input100" type="text" name="email" placeholder="Email" value="{{ old('email') }}">
                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Confirm password">
                    <input class="input100" type="password" name="cpassword" placeholder="Confirm Password">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" type="submit">Sign up</button>
                    <a href="{{ route('toLogin') }}" class="login100-form-cancel" >Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="dropDownSelect1"></div>

@endsection
