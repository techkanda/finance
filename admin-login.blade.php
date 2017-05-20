<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }} - Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link href="{!! asset('css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css"/>
    <!-- Google fonts - Roboto -->
    <link href="{!! asset('http://fonts.googleapis.com/css?family=Roboto:300,400,500,700') !!}" rel="stylesheet" type="text/css"/>
    <!-- theme stylesheet-->
    <link href="{!! asset('css/style.blue.css') !!}" rel="stylesheet" type="text/css"/>
    <!-- jQuery Circle-->
    <link href="{!! asset('css/grasp_mobile_progress_circle-1.0.0.min.css') !!}" rel="stylesheet" type="text/css"/>
    <!-- Custom stylesheet - for your changes-->
    <link href="{!! asset('css/custom.css') !!}" rel="stylesheet" type="text/css"/>
    <!-- Favicon-->
    <link href="{!! asset('img/favicon.ico') !!}" rel="stylesheet" type="text/css"/>
    <!-- Font Awesome CDN-->    
    <!-- you can replace it by local Font Awesome-->
    <link href="{!! asset('https://use.fontawesome.com/99347ac47f.js') !!}" rel="stylesheet" type="text/css"/>
    <!-- Font Icons CSS-->
    <link href="{!! asset('https://file.myfontastic.com/da58YPMQ7U5HY8Rb6UxkNf/icons.css') !!}" rel="stylesheet" type="text/css"/>
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page login-page">

      <div class="container">
        <div class="form-outer text-center d-flex align-items-center">
          <div class="form-inner">
            <div class="logo text-uppercase"><strong class="text-primary">{{ config('app.name') }}</strong>
            </div><p>Admin Login</p>
            <form id="login-form" role="form" method="POST" action="{{ route('admin.login.submit') }}">
                        {{ csrf_field() }}
              <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="login-username" class="label-custom">E-Mail</label>
                <input id="login-username" type="text" name="email" value="{{ old('email') }}" required="">
              </div>
              <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="login-password" class="label-custom">Password</label>
                <input id="login-password" type="password" name="password" value="{{ old('password') }}" required="">
              </div>
            <div class="form-group">
                <label>
                    <input class="label-custom" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                </label>
            </div>
            <button type="submit" class="btn btn-primary">
                Login
            </button>
              <!-- This should be submit button but I replaced it with <a> for demo purposes-->
            </form><a href="{{ route('password.request') }}" class="forgot-pass">Forgot Password?</a><!-- <small>Do not have an account? </small><a href="register.html" class="signup">Signup</a> -->
          </div>
          <div class="copyrights text-center">
            <p>Developed by <a href="http://techkanda.com" class="external">Tech Kanda</a></p>
            <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
          </div>
        </div>
      </div>
    </div>
    <!-- Javascript files-->
    <script type="text/javascript" src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/tether.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.cookie.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/grasp_mobile_progress_circle-1.0.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/front.js') }}"></script> 
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
  </body>
</html>





