@extends('Auth.Layout.index')
@section('content')

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100" style="background-image: url(assets_metronic/bg/bg-2.jpg);">
            <form class="login100-form validate-form" method="POST" action="{{ route('onLogin') }}">
                @csrf
                <span class="login100-form-logo">
                    <img src="{{ asset('image/logo/logo.png') }}" />
                </span>

                <span class="login100-form-title p-b-34 p-t-27">
                    Log in
                </span>

                @if(session()->has('message'))
                    <div class="alert alert-danger text-center m-b-30">
                        {{ session()->get('message') }}
                    </div>
                @endif

                <div class="wrap-input100 validate-input" data-validate = "Enter username">
                    <input class="input100" type="text" name="email" placeholder="Email">
                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>

                <div class="contact100-form-checkbox">
                    <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                    <label class="label-checkbox100" for="ckb1">
                        Remember me
                    </label>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" type="submit">Login</button>
                    <a href="{{ route('toHome') }}" class="login100-form-cancel" >Cancel</a>
                </div>
                <div class="text-center to-sign-up">
                    <span>You don't have account ?</span>
                    <a class="txt1" href="{{ route('toSignup') }}">&nbsp;Sign Up</a>
                </div>
                <div class="text-center p-t-50">
                    <a class="txt1" href="#">
                        Forgot Password?
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="dropDownSelect1"></div>
<script src="{{ asset('assets/js/main.js')}}"></script>
@endsection
