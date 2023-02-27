@extends('layouts.master')
@section('breadcrumb')
{{ Breadcrumbs::render('article', $post) }}
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
                        {{ucwords($post->title)}}
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

                            <article class="blog-post clearfix">
                                <a href="{{url('article/'.$post->slug)}}">
                                    <img src="{{asset('img/'.$post->image->url)}}" alt="">
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
                                            {!! $post->content !!}    
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="author">
                                        <div class="author-image">
                                            <div class="background-image" style="background-image: url(&quot;<?=asset('img/'.$post->user->image->url)?>&quot;);">
                                                <img src="<?=asset('img/'.$post->user->image->url)?>" alt="">
                                            </div>
                                        </div>
                                        <!--end author-image-->
                                        <div class="author-description">
                                            <div class="section-title">
                                                <h2>{{ucwords($post->user->name)}}</h2>
                                                <h4 class="location">
                                                    <a href="#">{{ucwords($post->user->info->location)}}</a>
                                                </h4>
                                            </div>
                                            <p>
                                                {{ucfirst($post->user->info->about)}}
                                            </p>
                                        </div>
                                        <!--end author-description-->
                                    </div>
                                    <!--end author-->
                                </div>
                                <!--end blog-post-content-->
                            </article>

                            <!--end Article-->

                            <hr>

                            <section>
                                <h2>Comments <span class="badge badge-danger">{{$post->comments->count()}} </span></h2>
                                <div class="comments">
                                    @foreach($post->comments as $comment)
                                    <div class="comment">
                                        <div class="author">
                                            <a href="#" class="author-image">
                                                <div class="background-image" style="background-image: url('<?=url("img/user-default.png")?>');">
                                                    <img src='{{url("img/user-default.png")}}' alt="">
                                                </div>
                                            </a>
                                            <div class="author-description">
                                                <h3>{{ucwords($comment->first_name)}}</h3>
                                                <div class="meta">
                                                    <span>{{$comment->created_at->format('d.m.Y')}}</span>
                                                </div>
                                                <!--end meta-->
                                                <p>
                                                   {{ucfirst($comment->body)}}
                                                </p>
                                            </div>
                                            <!--end author-description-->
                                        </div>
                                        <!--end author-->
                                    </div>
                                    @endforeach
                                    <!--end comment-->
                                </div>
                                <!--end comments-->
                            </section>

                            <section>
                                <h2>Add Comment</h2>
                                <form action="{{url('Comment',$post->id)}}" method="post" class="form" novalidate="novalidate">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="fname" class="col-form-label">Your Name</label>
                                                <input name="first_name" type="text" class="form-control" id="fname" placeholder="Your Name" required>
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-6-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email" class="col-form-label">Your Email</label>
                                                <input name="email" type="email" class="form-control" id="email" placeholder="Your Email" required>
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-6-->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="comment" class="col-form-label">Your Comment</label>
                                                <textarea name="body" id="comment" class="form-control" rows="4" placeholder="Your Comment" required></textarea>
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Complete Captcha</label>
                                                @captcha
                                                <input type="text" id="captcha" name="captcha" class="form-control required" autocomplete="off" required>
                                            </div>
                                        </div>
                                        <!--end col-md-12-->
                                    </div>
                                    <!--end row-->
                                    <button type="submit" class="btn btn-primary float-right">Add Comment</button>
                                </form>
                                <!--end form-->
                            </section>
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