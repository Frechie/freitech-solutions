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
                <img class="img-fluid" src="{{asset('assets/img/slide/slide-1.jpg') }}" alt="">
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-7">
                <article style="text-align: justify;">
                    <h2>Web Design &amp; Development</h2>

                    <p>
                        This introduction to Python will kickstart your learning of&nbsp;<strong>Python&nbsp;
                        for data science</strong>, as well as programming in general. This beginner-friendly 
                        Python course will take you from zero to programming in Python in a matter of hours.
                    </p>

                    <p>
                        Upon its completion, you&#39;ll be able to write your own Python scripts and perform 
                        basic hands-on data analysis using our Jupyter-based lab environment. If you want to 
                        learn Python from scratch, this free course is for you.
                    </p>

                    <p>
                        You can start creating your own data science projects and collaborating with other 
                        data scientists using&nbsp;<a href="http://cocl.us/PythonforDataScienceMainPage" rel="noopener" target="_blank">IBM Watson Studio</a>. When you sign up, you get free access to Watson Studio. Start now and take advantage of this platform.</p>

                    <hr />
                </article>
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