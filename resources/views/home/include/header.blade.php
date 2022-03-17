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
      <ul class="navbar-nav ml-auto align-items-center d-none d-lg-flex">
        <li class="nav-item active">
          <a class="nav-link text-uppercase" href="{{url('/')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-uppercase" href="{{url('/blog')}}">Blog</a>
        </li>
        <li class="nav-item">
          <form class="form-inline mb-0">
            <div class="input-group">
              <div class="input-group-prepend ">
                <span class="input-group-text border-0 bg-transparent searchicon">
                  <i data-feather="search"></i>
                </span>
              </div>
              <input type="text" class="form-control border-0 search-navbar" placeholder="Search..." aria-label="search" aria-describedby="basic-addon1">
            </div>
          </form>
        </li>

      </ul>
    </nav>
    <a class="btn btn-primary" href="{{url('/shop')}}"><i data-feather="layers"></i>Get Orders</a>
  </header>
  <!-- header -->
  <!--Moble-collapse-->
  <div class="collapse mobile-collapse card rounded-0 pb-3" id="collapse-mobile">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-uppercase" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-uppercase" href="blog.php">Blog</a>
            </li>
            <li class="nav-item">
              <form class="form-inline mb-0">
                <div class="input-group">
                  <div class="input-group-prepend ">
                    <span class="input-group-text border-0 bg-transparent searchicon">
                      <i data-feather="search"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control border-0 search-navbar" placeholder="Search..." aria-label="search" aria-describedby="basic-addon1">
                </div>
              </form>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>