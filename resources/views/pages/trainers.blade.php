@extends('layouts.master')
@section('breadcrumb')
{{ Breadcrumbs::render('trainers') }}
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
                    <h1>Trainers</h1>
                </div>
                <!--end container-->
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
        <section class="block">
                <div class="container">
                    <!--============ Section Title===================================================================-->
                    <div class="section-title clearfix">
                        <div class="float-right d-xs-none thumbnail-toggle">
                            <a href="#" class="change-class active" data-change-from-class="list" data-change-to-class="masonry" data-parent-class="authors">
                                <i class="fa fa-th"></i>
                            </a>
                            <a href="#" class="change-class" data-change-from-class="masonry" data-change-to-class="list" data-parent-class="authors">
                                <i class="fa fa-th-list"></i>
                            </a>
                        </div>
                    </div>
                    <!--============ Items ==========================================================================-->
                    <div class="authors masonry items grid-xl-4-items grid-lg-4-items grid-md-4-items">
                    @foreach($trainers as $trainer)
                        <div class="item author">
                            <div class="wrapper">
                                <div class="image">
                                    <h3>
                                        <a href="{{url('/'.$trainer->slug)}}" class="title">{{ucwords($trainer->name)}}</a>
                                    </h3>
                                    <a href="{{url('/'.$trainer->slug)}}" class="image-wrapper background-image">
                                        <img src="{{url('img/'.$trainer->image->url)}}" alt="">
                                    </a>
                                </div>
                                <!--end image-->
                                <h4 class="location">
                                    <a href="javascript:void(0)">{{ucwords($trainer->info->location)}}</a>
                                </h4>
                                <div class="additional-info">
                                    <ul>
                                        <li>
                                            <figure>Email</figure>
                                            <aside>{{ucwords($trainer->email)}}</aside>
                                        </li>
                                        <li>
                                            <figure>Phone</figure>
                                            <aside>{{ucwords($trainer->info->phone)}}</aside>
                                        </li>
                                    </ul>
                                </div>
                                <!--end addition-info-->
                                <a href="{{url('/'.$trainer->slug)}}" class="detail text-caps underline">Detail</a>
                            </div>
                        </div>
                        <!--end item-->
                    @endforeach
                    </div>

                    <!-- pagination -->
                    {{ $trainers->links('partials.pagination') }}
                    <!--end page-pagination-->
                </div>
                <!--end container-->
            </section>
            <!--end block-->
    </section>
    <!--end content-->
    @include('layouts.footer')
</div>
@endsection