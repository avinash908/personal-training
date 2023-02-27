@extends('layouts.master')
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
                    <h1 class="center">
                        Find your WOWCoach in UAE
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
    <section class="content">
        <!--============ Why Started  =========================================================================-->
        <section class="block">
            <div class="container">
                <div class="block">
                    <h2 style="text-align: center;margin-bottom: 0px;">Tired of not achieving your fitness goals?</h2>
                    <h2 style="text-align: center;margin-bottom: 2%;">Dreaming of leveling up in sports? </h2>
                    <h3 >Me too, that’s why I created WOW Coaches.</h3>
                    <p class="wow_p">WOW Coaches brings you UAE best reviewed personal trainers, certified sports instructors and world-class sports centers to help you achieve your fitness goals and level up in sports.</p>
                    <p class="wow_p">Personally, I chose the wrong coach for my daughter, and a review could have helped me choose the right one.</p>
                    <p class="wow_p">Review your coach to enter a draw to win two classes by one of our Wow Coaches.</p>
                </div>
                <!--end block-->
            </div>
            <!--end container-->
            <div class="background" data-background-color="#fff"></div>
            <!--end background-->
        </section>
        <!--============ End Why Started =====================================================================-->
        <!--============ Experties Ads ===========================================================================-->
        <section class="block">
                <div class="container">
                    <h2 align="center">The Most Reviewed WOW Coaches byExpertise</h2>
                    <ul class="categories-list clearfix">
                        <?php
                            $allexperties = App\Experties::all(); 
                            $count = 0;  
                        ?>
                        @foreach($allexperties as $experties)
                        <li>
                           
                            <i class="category-icon">
                                <img src="{{asset('img/icon/'.$experties->image->url)}}" alt="">
                            </i>
                            <h3><a href="{{url('trainers?type='.$experties->slug)}}">{{ucwords($experties->title)}}</a></h3>
                        </li>
                        @endforeach
                    </ul>
                    <!--end categories-list-->
                </div>
                <!--end container-->
            </section>
        <!--============ End Experties Ads =======================================================================-->
        <!--============ Experts Guidance =========================================================================-->
        <section class="block">
            <div class="container">
                <div class="block text-center">
                    <h2>Experts Guidance</h2>
                    <p class="wow_p">With hundreds of personal trainers, sports instructorsand providersin UAE, we understand that finding the perfect coachis not easy, that’s where WOW Coaches come in. Let us match you with a free trial.</p>
                    <a href="{{url('/guidance')}}" class="btn btn-primary btn-lg text-caps btn-framed">Get Started</a>
                </div>
                <!--end block-->
            </div>
            <!--end container-->
            <div class="background" data-background-color="#fff"></div>
            <!--end background-->
        </section>
        <!--============ End Experts Guidance  =====================================================================-->
        <!-- wowblog -->
        <section class="block">
            <div class="container">
                <div class="block text-center">
                    <h2>Be a WOWCoach PRO</h2>
                    <h3>Are you a personal trainer? Get new clients, transform lives. <a href="{{url('/become_coach')}}" style="color: red;">Be a WOW Coach Pro</a></h3>
                    <h3>Are you a sports instructor? Get new clients, levelthem up. <a href="{{url('/become_coach')}}" style="color: red;">Be a WOW Coach Pro</a></h3>
                    <h3>Are you a sports company? Get new client, compete and win.Join <a href="{{url('/become_coach')}}" style="color: red;">WOW CoachesNetwork</a></h3>
                </div>
                <!--end block-->
            </div>
        </section>
        <!-- wowblog -->
    </section>
    <!--end content-->
    @include('layouts.footer')
</div>
@endsection