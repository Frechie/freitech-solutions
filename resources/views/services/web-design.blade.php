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
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-7">
                <div class="icon-box">
                    <div class="text-center">
                        <a href="{{ url('/services/web-design') }}" class="btn btn-explore w-100">
                            Web Design &amp; Development
                        </a>
                    </div>
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

                </div>
            </div>

            <div class="col-lg-4 col-md-5">
                <div class="list-group rounded">
                    <a href="#" class="list-group-item list-group-item-action btn-explore" aria-current="true">
                        The current link item
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">A second link item</a>
                    <a href="#" class="list-group-item list-group-item-action">A third link item</a>
                    <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
                    <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">A disabled link item</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
</section>
@endsection