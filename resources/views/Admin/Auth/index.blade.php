@extends('Admin.Layout.index')
@section('content')

    <div class="d-flex flex-column flex-root">
        <!--begin::Login-->
        <div class="login login-5 login-signin-on d-flex flex-row-fluid" id="kt_login">
            <div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid" style="background-image: url(assets_metronic/bg/bg-2.jpg);">
                <div class="login-form text-center text-white p-7 position-relative overflow-hidden">
                    <!--begin::Login Header-->
                    <div class="d-flex flex-center mb-15">
                        <a href="#">
                            <img src="assets/media/logos/logo-letter-13.png" class="max-h-75px" alt="" />
                        </a>
                    </div>
                    <!--end::Login Header-->
                    <!--begin::Login Sign in form-->
                    <div class="login-signin">
                        <div class="mb-20">
                            <h3 class="opacity-40 font-weight-normal">Sign In To Admin</h3>
                            <p class="opacity-40">Enter your details to login to your account:</p>
                        </div>
                        @if($errors->has('fullname') || $errors->has('email') || $errors->has('password') || $errors->has('cpassword') )
                            <div class="alert alert-custom alert-danger fade show alert-custom-style" role="alert" id="alertDanger">
                                <div class="alert-icon"><i class="flaticon-warning"></i></div>
                                <div class="alert-text text-center">You should fullfill all content.</div>
                                <div class="alert-close">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true"><i class="ki ki-close"></i></span>
                                    </button>
                                </div>
                            </div>
                        @endif
                        <form class="form" id="kt_login_signin_form">
                            @csrf
                            <div class="form-group">
                                <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8" type="email" placeholder="Email" name="email" autocomplete="off" id="inEmail"/>
                            </div>
                            <div class="form-group">
                                <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8" type="password" placeholder="Password" name="password" id="inPassword"/>
                            </div>
                            <div class="form-group text-center mt-10">
                                <button class="btn btn-pill btn-primary opacity-90 px-15 py-3" type="button" onclick="onSignin()" >Sign In</button>
                                <a href="{{route('toHome')}}" class="btn btn-pill btn-outline-white opacity-70 px-15 py-3 m-2">Cancel</a>
                            </div>
                        </form>
                        <div class="mt-10">
                            <span class="opacity-40 mr-4">Don't have an account yet?</span>
                            <a href="javascript:;" id="kt_login_signup" class="text-white opacity-30 font-weight-normal">Sign Up</a>
                        </div>
                    </div>
                    <!--end::Login Sign in form-->
                    <!--begin::Login Sign up form-->
                    <div class="login-signup">
                        <div class="mb-20">
                            <h3 class="opacity-40 font-weight-normal">Sign Up</h3>
                            <p class="opacity-40">Enter your details to create your account</p>
                        </div>
                        <form class="form text-center" id="kt_login_signup_form" method="POST" action="{{ route('onAdminSignup') }}">
                            @csrf
                            <div class="form-group">
                                <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8" type="text" placeholder="Fullname" name="fullname" />
                            </div>
                            <div class="form-group">
                                <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8" type="email" placeholder="Email" name="email" autocomplete="off" />
                            </div>
                            <div class="form-group">
                                <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8" type="password" placeholder="Password" name="password" />
                            </div>
                            <div class="form-group">
                                <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8" type="password" placeholder="Confirm Password" name="cpassword" />
                            </div>
                            <div class="form-group">
                                <button class="btn btn-pill btn-primary opacity-90 px-15 py-3 m-2" type="submit">Sign Up</button> {{--  id="kt_login_signup_submit" --}}
                                <a id="kt_login_signup_cancel" class="btn btn-pill btn-outline-white opacity-70 px-15 py-3 m-2">Cancel</a>
                            </div>
                        </form>
                    </div>
                    <!--end::Login Sign up form-->
                    <!--begin::Login forgot password form-->
                    <div class="login-forgot">
                        <div class="mb-20">
                            <h3 class="opacity-40 font-weight-normal">Forgotten Password ?</h3>
                            <p class="opacity-40">Enter your email to reset your password</p>
                        </div>
                        <form class="form" id="kt_login_forgot_form">
                            <div class="form-group mb-10">
                                <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8" type="text" placeholder="Email" name="email" autocomplete="off" />
                            </div>
                            <div class="form-group">
                                <button class="btn btn-pill btn-primary opacity-90 px-15 py-3 m-2">Request</button> {{--id="kt_login_forgot_submit" --}}
                                <button id="kt_login_forgot_cancel" class="btn btn-pill btn-outline-white opacity-70 px-15 py-3 m-2">Cancel</button>
                            </div>
                        </form>
                    </div>
                    <!--end::Login forgot password form-->
                </div>
            </div>
        </div>
        <!--end::Login-->
    </div>
<script>

    $(document).ready(function(){
        setTimeout(noneDisplayAlert, 2000);
    })

    function noneDisplayAlert(){
        $('#alertDanger').css('display', 'none');
    }

    function onSignin(){
        $.ajax({
            type : 'POST',
            url  : "{{ route('onAdminSignin') }}",
            data : {
                _token      : "{{ csrf_token() }}",
                email       : $('#inEmail').val(),
                password    : $('#inPassword').val()
            },
            success:function(response){
                console.log(response);
                if( response == 'Success') window.location.href="{{ route('toAdminList') }}";
            }
        })
    }

</script>
@endsection('content')
