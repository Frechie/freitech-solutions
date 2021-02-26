@extends('layouts.app')

@section('content')

<section id="team" class="team">    
    <div class="container">
    <article class="my-3" id="accordion">
      <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
        <h3>Meet the Team</h3>
      </div>

      <div>
        <div class="bd-example">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h4 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Accordion Item #1
              </button>
            </h4>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h4 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Accordion Item #2
              </button>
            </h4>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h4 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Accordion Item #3
              </button>
            </h4>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </article>

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
@endsection