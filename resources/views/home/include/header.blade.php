<html>
<head>
  <title>Laundry</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="{{url('public/assets/web/css/aos.css')}}" />
  <link rel="stylesheet" href="{{url('public/assets/web/css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{url('public/assets/web/fonts/bootstrap-icons.css')}}" />
  <link rel="stylesheet" href="{{url('public/assets/web/css/slick.min.css')}}" />
  <link rel="stylesheet" href="{{url('public/assets/web/css/slick-theme.min.css')}}" />
  <link rel="stylesheet" href="{{url('public/assets/web/css/style.css')}}" />
  <link rel="stylesheet" href="{{url('public/assets/web/js/jquery.min.js')}}" />
  <script src="{{url('public/assets/web/js/jquery.min.js')}}"></script>
  <style>
    html {
  scroll-behavior: smooth;
}
  </style>
</head>

<body>
  <!-- header -->

  <header>
    <nav class="navbar navbar-expand-lg bg-white py-0 ">
      <a class="navbar-brand p-0" href="{{url('/')}}">
        <img src="{{url('public/assets/web/img/logo.png')}}" alt="logo" class="img-fluid logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse-mobile" aria-expanded="false" aria-controls="collapse-mobile">
        <i class="bi bi-list h1"></i>
      </button>
      <ul class="navbar-nav ml-auto align-items-center">
        <li class="nav-item active">
          <a class="nav-link text-uppercase" href="{{url('/')}}">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-uppercase" href="#">Laundry Services</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-uppercase" href="#">Linen Subscription</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-uppercase" href="#">Commercial linen</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-uppercase" href="#about_us">About Us</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-uppercase" href="#">Contact Us</a>
        </li>


        <li class="nav-item">
          <a class="nav-link text-uppercase" href="#">FAQ</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-uppercase" href="{{url('/blog')}}">Blog</a>
        </li>


            <?php  if (session()->has('logAdmin') && session('logAdmin')->role == 'customer') { ?>
              <li class="nav-item">
                <a class="nav-link text-uppercase" href="{{url('/dashboard')}}">Dashboard</a>
            </li>
            <?php } ?>

      </ul>
    </nav>
    <a class="btn btn-primary" style="min-width: 0 !important;" href="{{url('/login')}}"><i data-feather="layers"></i>Sign In</a>
  </header>
  <!-- header -->
  <!--Moble-collapse-->
  <div class="collapse mobile-collapse card rounded-0 pb-3" id="collapse-mobile">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">

          <ul class="navbar-nav">

        <li class="nav-item active">
          <a class="nav-link text-uppercase" href="{{url('/')}}">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-uppercase" href="#">Laundry Services</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-uppercase" href="#">Linen Subscription</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-uppercase" href="#">Commercial linen</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-uppercase" href="#about_us">About Us</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-uppercase" href="#">Contact Us</a>
        </li>


        <li class="nav-item">
          <a class="nav-link text-uppercase" href="#">FAQ</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-uppercase" href="{{url('/blog')}}">Blog</a>
        </li>
         <?php  if (session()->has('logAdmin') && session('logAdmin')->role == 'customer') { ?>
              <li class="nav-item">
                <a class="nav-link text-uppercase" href="{{url('/dashboard')}}">Dashboard</a>
            </li>
          <?php } ?>


        <li class="nav-item">
            <a class="btn btn-primary px-4" style="min-width: 0 !important;" href="{{url('/login')}}"><i data-feather="layers" style="width: 20px; height: 20px;" class="mr-2"></i> Sign In</a>
        </li>


          </ul>

        </div>
      </div>
    </div>
  </div>