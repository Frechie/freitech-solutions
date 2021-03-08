@extends('layouts.app')
@section('content')
<section class="design-banner text-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-7 px-0">
                <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
                <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
                <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
            </div>
            <div class="col-lg-3 col-md-5">
                <i class="icofont-computer"></i>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-7">
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
            <!--End of Services  -->

            <div class="col-lg-4 col-md-5">
                <div class="icon-box">
                    <div class="list-group rounded">
                        <a href="#" class="list-group-item list-group-item-action bg-explore" aria-current="true">
                            Related Services
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">Web Design &amp; Development</a>
                        <a href="#" class="list-group-item list-group-item-action">Training &amp; Consultancy</a>
                        <a href="#" class="list-group-item list-group-item-action">Enterprise Security Best Practice</a>
                        <a href="#" class="list-group-item list-group-item-action">Creative Graphics Design</a>
                        <a href="#" class="list-group-item list-group-item-action">Data Analytics &amp; Business Intelligence</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
</section>
@endsection