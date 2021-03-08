@extends('layouts.app')
@section('content')
<section id="team" class="team">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8">
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
                                            Alfred Ifogbe
                                        </button>
                                    </h4>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="member d-flex align-items-start">
                                                <div class="col-lg-3 col-md-4 pic">
                                                    <img src="{{ asset('assets/img/team/team-1.jpg') }}" class="img-fluid" alt="">
                                                </div>
                                                <div class="col-lg-9 col-md-8 member-info">
                                                    <h4>Alfred Ifogbe</h4>
                                                    <span>Software Engineer &amp; Technology Consultant</span>
                                                    <p>
                                                        <strong>This is the first item's accordion body.</strong> It is hidden by default,
                                                        until the collapse plugin adds the appropriate classes that we use to style each
                                                        element.
                                                    </p>
                                                    <p>
                                                        These classes control the overall appearance, as well as the showing and hiding
                                                        via CSS transitions. You can modify any of this with custom CSS or overriding our
                                                        default variables. It's also worth noting that just about any HTML can go within
                                                        the <code>.accordion-body</code>, though the transition does limit overflow.
                                                    </p>
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
                                <div class="accordion-item">
                                    <h4 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Tayo Odufuwa
                                        </button>
                                    </h4>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="member d-flex align-items-start">
                                                <div class="col-lg-3 col-md-4 pic">
                                                    <img src="{{ asset('assets/img/team/team-2.jpg') }}" class="img-fluid" alt="">
                                                </div>
                                                <div class="col-lg-9 col-md-8 member-info">
                                                    <h4>Tayo Odufuwa</h4>
                                                    <span>Data Analyst &amp; Technology Enthusiast</span>
                                                    <p>
                                                        <strong>This is the first item's accordion body.</strong> It is hidden by default,
                                                        until the collapse plugin adds the appropriate classes that we use to style each
                                                        element.
                                                    </p>
                                                    <p>
                                                        These classes control the overall appearance, as well as the showing and hiding
                                                        via CSS transitions. You can modify any of this with custom CSS or overriding our
                                                        default variables. It's also worth noting that just about any HTML can go within
                                                        the <code>.accordion-body</code>, though the transition does limit overflow.
                                                    </p>
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
                                <div class="accordion-item">
                                    <h4 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Folasade Ademola
                                        </button>
                                    </h4>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="member d-flex align-items-start">
                                                <div class="col-lg-3 col-md-4 pic">
                                                    <img src="{{ asset('assets/img/team/team-3.jpg') }}" class="img-fluid" alt="">
                                                </div>
                                                <div class="col-lg-9 col-md-8 member-info">
                                                    <h4>Folasade Ademola</h4>
                                                    <span>Enterprise Secuirty Expert &amp; Technology Consultant</span>
                                                    <p>
                                                        <strong>This is the first item's accordion body.</strong> It is hidden by default,
                                                        until the collapse plugin adds the appropriate classes that we use to style each
                                                        element.
                                                    </p>
                                                    <p>
                                                        These classes control the overall appearance, as well as the showing and hiding
                                                        via CSS transitions. You can modify any of this with custom CSS or overriding our
                                                        default variables. It's also worth noting that just about any HTML can go within
                                                        the <code>.accordion-body</code>, though the transition does limit overflow.

                                                    </p>
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
                            </div>
                        </div>
                    </div>
                </article>
            </div><!-- End of Team Design   -->
            <div class="col-lg-3 col-md-4">
                <div class="row">
                    <div class="container">
                        <article class="my-3" id="accordion">
                            <div class="bd-heading sticky-xl-top align-self-start mt-5 mb-3 mt-xl-0 mb-xl-2">
                                <h3>Meet the Team</h3>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

@endsection