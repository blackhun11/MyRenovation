<!DOCTYPE html>
<html>
<head>
    <style>
    ::-webkit-scrollbar { 
    display: none; 
    }
    </style>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="{{asset('assets/img/logo1.ico')}}"/>
    <!--Global styles -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/components.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/custom.css')}}" />
    <!--End of Global styles -->
    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}"/>
    <!--End of Plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/login3.css')}}"/>
</head>
<body class="login_backimg">
<div class="preloader" style=" position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 100000;
  backface-visibility: hidden;
  background: #ffffff;">
    <div class="preloader_img" style="width: 200px;
  height: 200px;
  position: absolute;
  left: 48%;
  top: 48%;
  background-position: center;
z-index: 999999">
        <img src="{{asset('assets/img/loader.gif')}}"  style=" width: 40px;" alt="loading...">
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-xl-6 push-xl-3 col-lg-8 push-lg-2 col-md-10 push-md-1 col-sm-10 push-sm-1 login_section">
            <div class="row">
                <div class="col-lg-8 push-lg-2 col-md-10 push-md-1 col-sm-12 login2_border login_section_top">
                    <div class="login_logo login_border_radius1">
                        <h3 class="text-center text-white">
                            {{-- <img src="{{asset('assets/img/logow2.png')}}" alt="logo" class="admire_logo"><br /> --}}
                            <span class="m-t-15">LOG IN</span>
                        </h3>
                    </div>
                    <div class="m-t-15">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-form-label text-white"> {{ __('E-Mail Address') }}</label>
                                <div class="input-group">
                                    <input type="text" class="form-control b_r_20{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" placeholder="E-mail" value="{{ old('email') }}" required autofocus>                                 
                                    <span class="input-group-addon">
                                        <i class="fa fa-envelope text-white"></i>
                                    </span>
                                </div>
                                @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-form-label text-white">{{ __('Password') }}</label>
                                <div class="input-group">
                                    <input type="password" class="form-control b_r_20{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" name="password" placeholder="Password" required>                  
                                    <span class="input-group-addon">
                                        <i class="fa fa-key text-white"></i>
                                    </span>
                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                     @endif
                                </div>
                            </div>

                            <div class="row m-t-15">
                                <div class="col-lg-12">
                                    <label class="custom-control custom-checkbox" style="color:#fff;">
                                        <input type="checkbox" class="custom-control-input form-control" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                        <span class="custom-control-indicator"></span>
                                        <a class="text-white"></a>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 m-t-10">
                                    <a href="{{ route('register') }}" class="forgottxt_clr text-white"><i class="fa fa-external-link"></i> {{ __('Register') }}</a>
                                </div>
                                <div class="col-6 p-l-0 m-t-10">
                                    <div class="float-right">
                                        <a href="{{ route('password.request') }}" class="forgottxt_clr text-white">{{ __('Forgot Your Password?') }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-success btn-block b_r_20 m-t-20">{{ __('Login') }}</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="float-right m-t-25">
                                        <span class="text-white">Sign in with</span>

                                        <span class="fa-stack m-l-10 pointer">
                                        <i class="fa fa-circle fa-stack-2x fb_background"></i>
                                        <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                    </span>
                                        <span class="fa-stack pointer">
                                        <i class="fa fa-circle fa-stack-2x twitter_background"></i>
                                        <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                        <span class="fa-stack pointer">
                                        <i class="fa fa-circle fa-stack-2x google_background"></i>
                                        <i class="fa fa-google fa-stack-1x fa-inverse"></i>
                                    </span>
                                        <span class="fa-stack pointer">
                                        <i class="fa fa-circle fa-stack-2x linkedin_background"></i>
                                        <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- global js -->
<script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/tether.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- end of global js-->
<!--Plugin js-->
<script type="text/javascript" src="{{asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/jquery.backstretch/js/jquery.backstretch.js')}}"></script>
<!--End of plugin js-->
<script type="text/javascript" src="{{asset('assets/js/pages/login3.js')}}"></script>
</body>

</html>