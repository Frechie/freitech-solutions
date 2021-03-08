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
      <img src="{{ asset('assets/img/slide/slide-1.jpg') }}" class="img-fluid w-100 h-100" alt="">
      <div class="dark-overlay"></div>
      <div class="container">
        <div class="carousel-caption">
          <h1 class="animated fadeInDown">Freitech Solutions</h1>
          <p class="animated fadeInUp">
            Whatever your technology needs are, you have come to the right place.
            Look no furthetr as we promise to keep our word: Proffering technological solutions...
            We are only a call away...
          </p>
          <p class="animated fadeInUp"><a class="btn btn-lg bg-explore" href="#">Learn More</a></p>

        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('assets/img/slide/slide-2.jpg') }}" class="img-fluid w-100 h-100" alt="">
      <div class="dark-overlay"></div>
      <div class="container">
        <div class="carousel-caption">
          <h1 class="animated fadeInDown">Data Analytics and Visualization</h1>
          <p class="animated fadeInUp">Some representative placeholder content for the second slide of the carousel.</p>
          <p class="animated fadeInUp"><a class="btn btn-lg bg-explore" href="#">Learn More...</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('assets/img/slide/slide-1.jpg') }}" class="img-fluid w-100 h-100" alt="">
      <div class="dark-overlay"></div>
      <div class="container">
        <div class="carousel-caption">
          <h1 class="animated fadeInDown">Creative Graphics Design</h1>
          <p class="animated fadeInUp"> Some representative placeholder content for the third slide of this carousel.</p>
          <p class="animated fadeInUp"><a class="btn btn-lg bg-explore" href="#">Learn More....</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('assets/img/slide/slide-3.jpg') }}" class="img-fluid w-100 h-100" alt="">
      <div class="dark-overlay"></div>
      <div class="container">
        <div class="carousel-caption">
          <h1 class="animated fadeInDown">Technology and Business Consultanting</h1>
          <p class="animated fadeInUp">Some representative placeholder content for the third slide of this carousel.</p>
          <p class="animated fadeInUp"><a class="btn btn-lg bg-explore" href="#">Learn More...</a></p>
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

<section style="margin-top: 1rem;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-md-6 stretch-card grid-margin">
        <div class="card bg-explore card-img-holder text-white card-size">
          <div class="card-body">
            <a class="text-white" href="{{ url('/dashboard/new') }}">
              <img src="{{ asset('assets/img/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
              <i class="icofont-computer icon"></i>
              <h4 class="mb-5 text-center text-big">Professional Web Design &amp; Development </h4>
            </a>
          </div>
        </div>
        <div class="icon-box icon-box-size">
          <p>
            Having a Website that is proessionaly rendered across multiple devices and platform is not a luxury but rather a neccesity.
            <span>As a matter of fact, to think contrary is to initiate the death of the organization</span>
          </p>
          <hr>
          <div class="text-center">
            <a href="{{ url('/services/web-design') }}" class="btn bg-explore w-100">Explore....</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 stretch-card grid-margin">
        <div class="card bg-primary card-img-holder text-white card-size">
          <div class="card-body">
            <a class="text-white" href="{{ url('/dashboard/new') }}">
              <img src="{{ asset('assets/img/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
              <i class="icofont-chart-bar-graph icon"></i>
              <h4 class="mb-5 text-center text-big">Big Data Analytics &amp; Business Intelligence</h4>
            </a>
          </div>
        </div>
        <div class="icon-box icon-box-size">
          <article style="text-align: justify;">
            <p>
              It is no longer about making decisions but having an effctive decison making system. i.e
              What tools aids your decision making?
            </p>
            <p>
              <strong>We help you make sense out of your data!!!</strong>
            </p>
          </article>
          <hr>
          <div class="text-center">
            <a href="" class="btn bg-explore w-100">Explore....</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 stretch-card grid-margin">
        <div class="card bg-warning card-img-holder text-white card-size">
          <div class="card-body">
            <a class="text-white" href="{{ url('/dashboard/new') }}">
              <img src="{{ asset('assets/img/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
              <i class="icofont-settings icon"></i>
              <h4 class="mb-5 text-center text-big">Enterprise Apps Customization &amp; Integrations</h4>
            </a>
          </div>
        </div>
        <div class="icon-box icon-box-size">
          <p>
            Freitech Solutions, with in-depths knowledge ensures that clients get the most they can from their Enterprise Apps
            by extending the core features or integratiing the System with an external systems...
          </p>
          <hr>
          <div class="text-center">
            <a href="" class="btn bg-explore w-100">Explore....</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 stretch-card grid-margin">
        <div class="card bg-success card-img-holder text-white card-size">
          <div class="card-body">
            <a class="text-white" href="{{ url('/dashboard/new') }}">
              <img src="{{ asset('assets/img/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
              <i class="icofont-network icon"></i>
              <h4 class="mb-5 text-center text-big ">Capacity Training &amp; Consulting</h4>
            </a>
          </div>
        </div>
        <div class="icon-box icon-box-size">
          <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            <hr>
            <div class="text-center">
              <a href="" class="btn bg-explore w-100">Explore....</a>
            </div>
          </div>

        </div>
      </div><!-- /.col-lg-3 -->
    </div><!-- /.row -->
</section>
<hr>
<section id="team" class="team">
  <div class="container">
    <div class="section-title text-center">
      <h2>Subject Matter Expert&apos;S</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="member d-flex align-items-start">
          <div class="pic">
            <img src="{{ asset('assets/img/team/team-1.jpg') }}" class="img-fluid" alt="">
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
          <div class="pic">
            <img src="{{ asset('assets/img/team/team-2.jpg') }}" class="img-fluid" alt="">
          </div>
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
            <img src="{{ asset('assets/img/team/team-3.jpg') }}" class="img-fluid" alt="">
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
            <img src="{{ asset('assets/img/team/team-4.jpg') }}" class="img-fluid" alt="">
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