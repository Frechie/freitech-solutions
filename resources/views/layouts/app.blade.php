<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="description" content="NIgeria Number 1 Technology Soluytion">
  <meta name="author" content="Alfred Ifogbe, Technology Consultant & Software Engineer">
  <meta name="keywords" content="Nigeria Technology Solution, Technology Consultant">
  <meta name="keywords" content="Data Analytics and Visualization, Power-Bi MySQL, Python">
  <meta name="keywords" content="Creative Grapgics Design, Nigeria Creative Grapics Designer">
  <title>Freitech Solutions : Everything Technology</title>
  <link href="{{asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/css/bootstrap/bootstrap.min.css' ) }}" rel="stylesheet">
  <link href="{{ asset('assets/css/main-site-styles.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/animate/animate.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/icofont/icofont.min.css') }}" rel="stylesheet">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
      <div class="container animated fadeInDown">
        <a class="navbar-brand" href="{{url('/') }}">FreitechSolution</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mx-auto mb-2 mb-md-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                ABOUT
              </a>
              <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                <li><a class="dropdown-item" href="{{ url('/about') }}">FrietechSolution</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="{{ url('/about/team') }}">TEAM</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/services/web-design') }}">SERVICES</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="accountDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                ACCOUNT
              </a>
              <ul class="dropdown-menu" aria-labelledby="accountDropdown">
                <li><a class="dropdown-item" href="{{ route('login') }}">LOGIN</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="{{ route('register') }}">REGISTER</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/blog') }}">BLOG</a>
            </li>
          </ul>

        </div>
      </div>
    </nav>
  </header>
  <main>

    @yield('content')

  </main>
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Freitech Solutions</h3>
              <p>
                30A Coker Road <br>
                Ilupeju, Lagos<br><br>
                <strong>Phone:</strong> +234 703 057 3953<br>
                <strong>Email:</strong> enquiries@freitech-solutions.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
                <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li> <a href="#">Home</a></li>
              <li> <a href="#">About us</a></li>
              <li> <a href="#">Services</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Services</h4>
            <ul>
              <li> <a href="">Web Design &amp; Development</a></li>
              <li> <a href="">Data Analytics &amp; Visualization </a></li>
              <li> <a href="">Enterprise Apps Customization &amp; Integration</a></li>
              <li> <a href=""> Creative Graphics Design</a></li>
              <li> <a href="">Training &amp; Consultation</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6">

          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="copyright">
        Copyright &copy; {{date('Y') }} <strong class="text-white"><span><a class="text-white" href="{{url('/')}}">Freitech Solutions</a></span></strong>. All Rights Reserved <br>
        <small>The information contained herein may not be published, broadcast, rewritten, or redistributed
          without the prior written authority of <strong><span><a class="text-white" href="{{url('/')}}">Freitech Solutions.</a></span></strong></small>
      </div>
    </div>
  </footer>
  <script src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
</body>

</html>