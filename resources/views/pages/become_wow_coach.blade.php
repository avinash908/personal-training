@extends('layouts.master')
@section('breadcrumb')
{{ Breadcrumbs::render('blog') }}
@endsection
@section('content')
<div class="page home-page">
    <header class="hero has-dark-background">
        <div class="hero-wrapper">
            <!-- uppper navbar -->
            @include('layouts.upper_nav')
            <!-- End upper navbar -->
            <!--  -->
           <!-- Main Navbar -->
            @include('layouts.navbar')
            <!-- End NAvbar -->
            
            <div class="page-title">
                <div class="container">
                    <h1>
                        Be A Wow Coach Pro
                    </h1>
                </div>
            </div>
            <!-- search form -->
            @include('layouts.search_form')
            <!-- end search form -->
            <!--============ End Hero Form ======================================================================-->
            <div class="background">
                <div class="background-image">
                   <img src="{{asset('img/banner_2.jpg')}}" alt="">
                </div>
                <!--end background-image-->
            </div>
            <!--end background-->
        </div>
        <!--end hero-wrapper-->
    </header>
    <!-- content -->
    <section class="content" style="margin-bottom: 490px;">
            <section class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <article class="blog-post clearfix">
                                <div class="article-title">
                                    <h2>Be a Wow Coach Pro</h2>
                                </div>
                                <div class="blog-post-content become_wow_coach">
                                    <p>Do you’ve happy clients?</p>
                                    <p>If yes, then you can be a Free for Life member.</p>
                                    <p>How?</p>
                                    <p>3 monthly positive reviews from 3 new customers = Free month and so on For Life.</p>
                                    <p>Can Wow Coaches help you get more clients?</p>
                                    <p>Yes, we can.</p>
                                    <p>We will build your online brand.</p>
                                    <p>Leave the heavy lifting of social media advertising to us.</p>
                                    <p>Our daily goal is to be the top site ranked by Google in UAE.</p>
                                    <h1 style="text-align: center;margin:2%">MonthlySubscription = 200 AED.</h1>
                                    WOW Coaches offer:
                                    <ul>
                                       <li>Detailed profilewith your videos.</li>
                                        <li>Online booking calendar to let your leads and clients know your availability up to date.</li>
                                       <li>Targeted WOW Coaches Facebook & Instagram paid ads.</li>
                                       <li>Promote your events on WOWEvents.</li>
                                        <li>A branded Vanity URL by your name:</li>
                                       <li>Add it to your social media profile.</li>
                                       <li>Share it with your clients and leads to promote yourself via your customers reviews.</li>
                                       <li>As you become a member of WOW Coaches:
                                        <ul>
                                           <li>Your profile will become more visible on Google, Facebook and Instagram.</li>
                                           <li>A Catapultof clients trafficwill goto your social media andwebsite.</li>
                                           <li>You’ll maximize the use of your time through our online booking system.</li>
                                        <ul>
                                        </li>
                                    </ul>
                                        <p>Avail your Free for Life offer and enjoy the first three months for free.</p>
                                        <h2 style="text-align: center;margin:2%;color: red;"><a href="{{route('register')}}" style="text-decoration: underline;">Register</a> Now (3 months free)</h2>

                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <!--end container-->
            </section>
            <!--end block-->
        </section>
    <!--end content-->
    @include('layouts.footer')
</div>
@endsection