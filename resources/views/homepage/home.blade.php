@extends('layouts.app')

@section('content')
<div id="slider" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#slider" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('assets/img/slide/slider-img-1.jpg') }}" class="img-fluid w-100 h-100" alt="">
      <div class="container">
        <div class="carousel-caption">
          <h1>Freitech Solutions</h1>
          <p>Delivering Cutting-Edge Solution within Timeline and Budget</p>
          <p><a class="btn btn-lg btn-primary" href="#">Learn More</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('assets/img/slide/slider-img-4.jpg') }}" class="img-fluid w-100 h-100" alt="">
      <div class="container">
        <div class="carousel-caption">
          <h1>Data Analytics and Visualization</h1>
          <p>Some representative placeholder content for the second slide of the carousel.</p>
          <p><a class="btn btn-lg btn-primary" href="#">Learn More...</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('assets/img/slide/slider-img-5.jpg') }}" class="img-fluid w-100 h-100" alt="">
      <div class="container">
        <div class="carousel-caption">
          <h1>Creative Graphics Design</h1>
          <p>Some representative placeholder content for the third slide of this carousel.</p>
          <p><a class="btn btn-lg btn-primary" href="#">Learn More....</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('assets/img/slide/slider-img-3.jpg') }}" class="img-fluid w-100 h-100" alt="">
      <div class="container">
        <div class="carousel-caption">
          <h1>Technology and Business Consultanting</h1>
          <p>Some representative placeholder content for the third slide of this carousel.</p>
          <p><a class="btn btn-lg btn-primary" href="#">Learn More...</a></p>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<section id="about">
  <div class="container">
    <div class="row">
    <div class="section-title text-center">
      <h2>Freitech-Solutions Ideals</h2>
      <hr>
    </div>
      <div class="col-lg-6 col-md-6">     
        <div class="card">
          <div class="card-header">
            Freitech Solution
          </div>
          <div class="card-body">
            <h5 class="card-title">The one-stop technology solution center</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Learn More....</a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="card">
          <div class="card-header">
            Freitech Solution
          </div>
          <div class="card-body">
            <h5 class="card-title">The one-stop technology solution center</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Learn More....</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<hr>
<section id="services" class="services section-bg">
  <div class="container">
    <div class="section-title text-center">
      <h2>Services and Offerings</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="icon-box">
          <i class="icofont-computer"></i>
          <h4><a href="#">Web Design &amp; Development </a></h4>
          <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint 
            occaecati cupiditate non provident</p>
        </div>
      </div>
      <div class="col-md-6 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="icofont-chart-bar-graph"></i>
          <h4><a href="#">Data Analytics &amp; Visualizations</a></h4>
          <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="icon-box">
          <i class="icofont-settings"></i>
          <h4><a href="#">Enterprise Apps Customization &amp; Integrations</a></h4>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
        </div>
      </div>
      <div class="col-md-6 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="icofont-network"></i>
          <h4><a href="#">Training &amp; Consulting</a></h4>
          <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- End Services Section -->
<hr>

<section id="team" class="team">
  <div class="container">
    <div class="section-title text-center">
      <h2>Subject Matter Expert</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="member d-flex align-items-start">
          <div class="pic">
          <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
          </div>
          <div class="member-info">
            <h4>Alfred Ifogbe</h4>
            <span>Software Engineer &amp; Technology Consultant</span>
            <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
            <div class="social">
              <a href=""><i class="icofont-twitter"></i></a>
              <a href=""><i class="icofont-instagram"></i></a>
              <a href=""> <i class="icofont-linkedin"></i> </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mt-4 mt-lg-0">
        <div class="member d-flex align-items-start">
          <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Odufuwa Tayo</h4>
            <span>Data Anayst &amp; Tecnology Enthiusat</span>
            <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
            <div class="social">
              <a href=""><i class="icofont-twitter"></i></a>
              <a href=""><i class="icofont-instagram"></i></a>
              <a href=""> <i class="icofont-linkedin"></i> </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mt-4">
        <div class="member d-flex align-items-start">
          <div class="pic">
          <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
          </div>
          <div class="member-info">
            <h4>Yemisi Nyaaku</h4>
            <span>Creative Graphics Specialist</span>
            <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
            <div class="social">
              <a href=""><i class="icofont-twitter"></i></a>
              <a href=""><i class="icofont-instagram"></i></a>
              <a href=""> <i class="icofont-linkedin"></i> </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mt-4">
        <div class="member d-flex align-items-start">
          <div class="pic">
          <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
          </div>
          <div class="member-info">
            <h4>Folasade Ademola </h4>
            <span>Security Expert &amp; Technology Consultant</span>
            <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
            <div class="social">
              <a href=""><i class="icofont-twitter"></i></a>
              <a href=""><i class="icofont-instagram"></i></a>
              <a href=""> <i class="icofont-linkedin"></i> </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<hr>
@endsection