<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />
    <title>Bright laundry services</title>
    <!-- icons -->
    <link href="{{url('public/assets/admin/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{url('public/assets/admin/plugins/iconic/css/material-design-iconic-font.min.css')}}">
    <!-- bootstrap -->
    <link href="{{url('public/assets/admin/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- style -->
    <link rel="stylesheet" href="{{url('public/assets/admin/css/pages/extra_pages.css')}}">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{url('public/assets/admin/img/favicon.ico')}}" />
</head>

<body>
    <div class="limiter">
        <div class="container-login100 page-background">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="POST" action="{{ route('login.custom') }}">

                    <span class="login100-form-logo">
                        <i class="zmdi zmdi-flower"></i>
                    </span>
                    <span class="login100-form-title p-b-34 p-t-27">
                        Log in
                    </span>

                    @if (Session::get('fail'))
                    <div class="alert alert-light">
                    {{Session::get('fail')}}
                    </div>
                    @endif
                    @csrf

                    <div class="wrap-input100 validate-input" data-validate="Enter username">
                        <input type="text" placeholder="Email" id="email" value="" class="input100" name="email" required autofocus>
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                        
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="password" placeholder="Password" required>
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                        
                    </div>




                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">
                            Remember me
                        </label>
                    </div>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            Login
                        </button>
                    </div>
<!--                    <div class="text-center p-t-90">
                        <a class="txt1" href="#">
                            Forgot Password?
                        </a>
                    </div> -->
                </form>
            </div>
        </div>
    </div>
    <!-- start js include path -->
    <script src="{{url('public/assets/admin/plugins/jquery/jquery.min.js')}}"></script>
    <!-- bootstrap -->
    <script src="{{url('public/assets/admin/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{url('public/assets/admin/js/pages/extra_pages/login.js')}}"></script>
    <!-- end js include path -->
</body>

</html>