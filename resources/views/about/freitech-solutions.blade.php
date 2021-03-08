@extends('layouts.app')
@section('content')

<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-7 text-center">
                <div class="icon-box">
                    <h3>Freitech Solutions: Effective Technology Solution </h3>
                    <hr>
                    <article style="text-align: justify;">
                        <p>
                            The dependent on Technological Solution to every day human problems can only increase and any undividual or organization
                            that refuse to align to this change would realise that in no time their organization would barely exist if it has not gone into
                            extinction.
                        </p>
                        <p>
                            At Frietech Solution, we have a team of dedicated, resourcefuila and highly smart individuals with relevant experience in
                            proffering Technological Solutions to problems and process.
                        </p>
                        <p>
                            Our goal is to improve efficiciency and eliminate every form of redundancies thereby creating a System that is highly efficient,
                            easily maintaninanble, cost-effective and mapped to a real-life problem domain.
                        </p>
                        <p>
                            Whatever your Business Requirements are, kindly drop a message and we will be aeager to discuss with you with a view to providing the
                            best Solutions tailored for your organization...
                        </p>
                    </article>
                    <hr>
                    <div>
                        <a href="" class="btn bg-explore w-100">Explore....</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-5">
            </div>
        </div>
    </div>
    </div>
</section>

<section id="services" class="services section-bg">
    <div class="container">
        <div class="row">
            <!-- Web Design and Development Section -->
            <div class="col-md-6">
                <div class="icon-box">
                    <i class="icofont-computer"></i>
                    <h4><a href="#">Web Design &amp; Development </a></h4>
                    <hr>
                    <p>
                        It&apos;s the 21st Century, and Disruptive Technology seems to be major palyer.</p>
                    <p>No longer do we have to go Grocery Shopping, with just few clicks and typing, Groceries get delivered
                        to our doorsteps.
                    </p>
                    <p>
                        No longer do we have to go to the banks to complete financial trasanctions, with login credentials on a digital
                        device, we can conduct all of our Financial activities seamlessly and in record time.
                    </p>
                    <p>
                        Its 21st Century O&apos;clock and any organization without an online presence is living on a tome-bomb that
                        would detonate soonest.
                    </p>
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

            <!-- Big Data Analytics and Visualization Section -->

            <div class="col-md-6 mt-4 mt-md-0">
                <div class="icon-box">
                    <i class="icofont-chart-bar-graph"></i>
                    <h4>
                        <a href="#">Big Data Analytics &amp; Business Intelligence</a>
                    </h4>
                    <hr>
                    <article style="text-align: justify;">
                        <p>
                            <strong>Take a guess:</strong> How much data do you think is generated across the globe?
                            My guts feeling tells me your guess falls below the mark except you are a Big Data Enthusiast/Analyst
                            with updated information.
                        </p>
                        <p>
                            A peek at <a href="https://internetlivestats.com" target="_blank">Live Internet Metric</a> reveals that there are <strong>4+ Billion</strong> active users on the internet,
                            <strong>150+ billion </strong> emails being sent daily, <strong>5+ billions Google</strong> searches daily.
                        </p>
                        <p>
                            Possessing the right Tools, Resources and Technologies in order to extract meaniful Insights from this huge data gold-mine
                            is what would detemine how far your organization thrives in this ever-dirsuptive 21st century society.
                        </p>
                        <p>
                            It is no longer about making decisions but having an effctive decison making system. Put differently,
                            Yow do you make the decision that determines your decision.
                        </p>
                    </article>
                    <hr>
                    <div class="text-center">
                        <a href="" class="btn bg-explore w-100">Explore....</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="icon-box">
                    <i class="icofont-settings"></i>
                    <h4><a href="#">Enterprise Apps Customization &amp; Integrations</a></h4>
                    <hr>
                    <p>
                        In my experience as a Technology consulatant, organisations upon the purchase of an Enterprise organisation
                        always ensures that the Technology utilization is at a reasonable percentage that matches the Financial efforts
                        and Resources put in.
                    </p>
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

            <div class="col-md-6 mt-4 mt-md-0">
                <div class="icon-box">
                    <i class="icofont-network"></i>
                    <h4><a href="#">Training &amp; Consulting</a></h4>
                    <hr>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                        <hr>
                        <div class="text-center">
                            <a href="" class="btn bg-explore w-100">Explore....</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Services Section -->
@endsection