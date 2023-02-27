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
                        WowBlog
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
                        <div class="col-md-8">

                            @foreach($posts as $post)
                            <article class="blog-post clearfix">
                                <a href="{{url('article/'.$post->slug)}}">
                                    <img src="{{asset('img/'.$post->image->url)}}" alt="" style="max-width: 100%;width: 100%">
                                </a>
                                <div class="article-title">
                                    <h2><a href="{{url('article/'.$post->slug)}}">{{ucwords($post->title)}}</a></h2>
                                </div>
                                <div class="meta">
                                    <figure>
                                        <a href="{{url('/'.$post->user->slug)}}" class="icon">
                                            <i class="fa fa-user"></i>
                                            {{ucwords($post->user->name)}}
                                        </a>
                                    </figure>
                                    <figure>
                                        <i class="fa fa-calendar-o"></i>
                                        {{$post->created_at->format('d.m.Y')}}
                                    </figure>
                                </div>
                                <div class="blog-post-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            {!! Str::limit($post->content,100) !!}    
                                        </div>
                                    </div>
                                    <a href="{{url('article/'.$post->slug)}}" class="btn btn-primary btn-framed detail">Read more</a>
                                </div>
                            </article>
                            @endforeach
                            <!--end Articles-->
                            <!-- pagination -->
                            {{ $posts->links('partials.pagination') }}
                            <!--end page-pagination-->
                        </div>
                        <!--end col-md-8-->

                        <div class="col-md-4">
                            <!--============ Side Bar ===============================================================-->
                            <aside class="sidebar">
                                @include('partials.popular_posts')
                            </aside>
                            <!--============ End Side Bar ===========================================================-->
                        </div>
                        <!--end col-md-3-->
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