<!DOCTYPE html>
<html>
<head> 
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=0, initial-scale=1.0">
    <link rel="icon" href="{{url('frontend/images/logo/logo.png')}}" type="images/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="{{url('frontend/css/bootstrap_v4.3.1_min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('frontend/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('frontend/css/owl.theme.default.min.css')}}" type="text/css">
    <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all">
    <link rel="stylesheet" href="{{url('frontend/css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('frontend/css/custom.css')}}" type="text/css">
</head>
<body>
   
<div class="nit-mobile-box">
@if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
         {{ session('status') }}
    </div>
 @endif
   <div class="nit-close-btn">
        <a class="nit-close" href="{{url('/')}}"><i class="fas fa-times"></i></a>
    </div>
    <div class="login-box">
        <div class="box">
            <i class="fas fa-user"></i>
            <h3>Login</h3>
        </div>
        <form method="POST" action="{{ route('login') }}">
             @csrf
             <input type="hidden" name="user_type" value="2">
             <input  id="email" name="email" placeholder="Email Address" type="email" required autofocus >
             @if ($errors->has('email'))
                <span class="invalid-feedback d-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
             @endif
             <input  id="password" placeholder="Enter Password" type="password"  name="password" required autocomplete="current-password">
             @if ($errors->has('password'))
                                <span class="invalid-feedback d-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
             <input type="submit" class="btn" >
            @if (Route::has('password.request'))
                <a  href="{{ route('password.request') }}">Forgot password</a> 
            @endif
        </form>
    </div>
</div>  
   
<script src="{{url('frontend/js/jQuery_v3.4.1_min.js')}}"></script>
<script src="{{url('frontend/js/bootstrap_v4.3.1_min.js')}}"></script>
<script src="{{url('frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{url('frontend/js/custom.js')}}"></script>


</body>
</html>