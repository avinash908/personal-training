@extends('layouts.master')
@section('breadcrumb')
{{ Breadcrumbs::render('profile',$user) }}
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
                    @if(session()->has('success'))
                    <section>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                          <strong>{{session()->get('success')}}</strong>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                    </section>
                    @endif
                    <div class="row flex-column-reverse flex-md-row">
                        <div class="col-md-10">
                            <section class="my-0">
                                <div class="author big">
                                    @if(Auth::check() && Auth::user()->id == $user->id)
                                    <a class="btn btn-primary float-right btn-framed" href="{{url('edit_profile',$user->slug)}}"><i class="fa fa-edit"></i> Edit</a>
                                    @else
                                    <a class="btn btn-primary float-right btn-framed" href="mailto:{{$user->email}}">Contact {{ucwords($user->name)}}</a>
                                    @endif
                                    <div class="author-image">
                                        <div class="background-image" style="background-image:url('{{url('img/'.$user->image->url)}}')">
                                            <img src="{{url('img/'.$user->image->url)}}" alt="">
                                        </div>
                                    </div>
                                    <!--end author-image-->
                                    <div class="author-description">
                                        <div class="section-title">
                                            <h2>{{ucwords($user->name)}}</h2>
                                            <h4 class="location">
                                                <a href="#">{{$user->info->location}}</a>
                                            </h4>

                                            <figure>
                                                <div class="float-left">
                                                    <h5 style="font-family: 'Varela Round',sans-serif;color: #ff0000;font-size: 3.6rem;line-height: 1.1;">{{$user->info->price_for_one}}</h5>
                                                </div>
                                                <div class="text-align-right social">
                                                    <a href="{{$user->info->facebook}}" target="_blank">
                                                        <i class="fa fa-facebook-square"></i>
                                                    </a>
                                                    <a href="{{$user->info->twitter}}" target="_blank">
                                                        <i class="fa fa-twitter-square"></i>
                                                    </a>
                                                    <a href="{{$user->info->instagram}}" target="_blank">
                                                        <i class="fa fa-instagram"></i>
                                                    </a>
                                                </div>
                                            </figure>
                                        </div>
                                        <div class="additional-info">
                                            <ul>
                                                <li>
                                                    <figure>Gender</figure>
                                                    <aside>{{ucwords($user->gender)}}</aside>
                                                </li>
                                                <li>
                                                    <figure>Phone</figure>
                                                    @if($user->info->phone)
                                                        <aside>{{$user->info->phone}}</aside>
                                                    @else
                                                        <aside style="color: red;">not-mentioned</aside>
                                                    @endif
                                                    
                                                </li>
                                                <li>
                                                    <figure>Email</figure>
                                                    <aside><a href="mailto:{{$user->email}}">{{$user->email}}</a></aside>
                                                </li>
                                                <li>
                                                    <figure>Language</figure>
                                                    @if($user->languages->count() > 0)
                                                        @foreach($user->languages as $language)
                                                            <aside style="display: inline-block;">{{$language->language}}</aside>
                                                        @endforeach
                                                    @else
                                                        <aside style="color: red;">not-mentioned</aside>
                                                    @endif
                                                </li>
                                            </ul>
                                            <br>
                                            <figure><strong>Experties</strong></figure>
                                            <ul class="features-checkboxes columns-3">
                                                @foreach($user->experties as $experties)
                                                <li>
                                                    <a href="#">{{ucwords($experties->title)}}</a>
                                                </li>
                                                @endforeach
                                            </ul>
                                            <br>
                                            <figure><strong>Where i can train</strong></figure>
                                            <ul class="features-checkboxes columns-3">
                                                @foreach($user->training_locations as $location)
                                                <li>
                                                    <a href="#">{{ucwords($location->location)}}</a>
                                                </li>
                                                @endforeach
                                            </ul>
                                            <br>
                                            <figure><strong>Who I especiallylike working with</strong></figure>
                                            <ul class="features-checkboxes columns-3">
                                                @foreach($user->like_to_work_with as $like_to_work)
                                                <li>
                                                    <a href="#">{{ucwords($like_to_work->with)}}</a>
                                                </li>
                                                @endforeach
                                            </ul>
                                            @if($user->info->reps_number)
                                                <br>
                                                <figure><strong>UAE REPS number</strong></figure>
                                                <ul class="features-checkboxes columns-3">
                                                    <li>
                                                        <a href="#">{{$user->info->reps_number}}</a>
                                                    </li>
                                                </ul>
                                            @endif
                                            <br>
                                            <figure><strong>Prices</strong></figure>
                                            <ul class="features-checkboxes columns-3">
                                                @if($user->info->price_for_one)
                                                <li>
                                                    Price For One (<a href="#">{{$user->info->price_for_one}}</a>)
                                                </li>
                                                @endif
                                                @if($user->info->price_for_group)
                                                    <li>
                                                        Price For Group (<a href="#">{{$user->info->price_for_group}}</a>)
                                                    </li>
                                                @endif
                                            </ul>
                                        </div>
                                        <!--end addition-info-->
                                    </div>
                                    <!--end author-description-->
                                </div>
                                <!--end author-->
                            </section>
                            <section>
                        <div class="row">
                            <div class="col-md-12">
                                <h2>Tabs</h2>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="one" aria-expanded="true">Info</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="two">Videos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="three">Articles</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="one" role="tabpanel" aria-labelledby="one-tab">
                                        {!! $user->info->about !!}
                                    </div>
                                    <div class="tab-pane fade" id="two" role="tabpanel" aria-labelledby="two-tab">
                                        <div class="row">
                                            @if(Auth::check() && Auth::user()->id == $user->id)
                                                <div class="col-md-12">
                                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#videoModal" class="btn btn-primary" style="margin: 2%;">Embed Video</a>
                                                </div>
                                            @endif
                                        @foreach($user->videos as $video)
                                            <div class="col-md-4">
                                                {!! $video->video !!}
                                            </div>
                                        @endforeach
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="three" role="tabpanel" aria-labelledby="three-tab">
                                         @if(Auth::check() && Auth::user()->id == $user->id)
                                        <div class="col-md-12"> 
                                            <button data-toggle="modal" data-target="#postModal" class="btn btn-primary" style="margin-bottom: 2%;">Create Post</button>
                                        </div>
                                        @endif
                                        <div class="read-more" data-read-more-link-more="Show More" data-read-more-link-less="Show Less">
                                            <div class="items list compact grid-xl-4-items grid-lg-3-items grid-md-2-items">
                                                @foreach($user->posts as $post)
                                                <div class="item">
                                                    <div class="wrapper">
                                                        <div class="image">
                                                            <h3>
                                                                <a href="{{url('article/'.$post->slug)}}" class="title">{{ucwords($post->title)}}</a>
                                                            </h3>
                                                            <a href="{{url('article/'.$post->slug)}}" class="image-wrapper background-image" style="background-image: url('{{($post->image) ? url('img/'.$post->image->url) : url('img/blog-image-04.jpg')}}');">
                                                                <img src="{{($post->image) ? url('img/'.$post->image->url) : url('img/blog-image-04.jpg')}}" alt="">
                                                            </a>
                                                        </div>
                                                        <!--end image-->
                                                        <div class="meta">
                                                            <figure>
                                                                <i class="fa fa-calendar-o"></i>{{$post->created_at->format('d.m.Y')}}
                                                            </figure>
                                                            <figure>
                                                                <a href="{{url('/'.$post->user->slug)}}">
                                                                    <i class="fa fa-user"></i>{{ucwords($post->user->name)}}
                                                                </a>
                                                            </figure>
                                                        </div>
                                                        <!--end meta-->
                                                        <div class="description">
                                                           {!! Str::limit($post->content,80) !!}
                                                        </div>
                                                        <!--end description-->
                                                        @if(Auth::check() && Auth::user()->id == $user->id)
                                                        <div class="detail text-caps underline">
                                                            <i class="fa fa-edit litle_btns edit_post" data-id="{{$post->id}}" data-route="{{route('posts.edit',$post->id)}}"></i>
                                                            <i class="fa fa-trash litle_btns delete_post" data-route="{{route('posts.destroy',$post->id)}}"></i>
                                                        </div>
                                                        @else
                                                        <div class="detail text-caps underline">
                                                            <a href="#">Detail</a>
                                                        </div>
                                                        @endif
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end row-->
                    </section>
                    <section>
                        <h2>Write a Review</h2>
                        <form action="{{url('Review',$user->id)}}" method="post" class="form">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="fname" class="col-form-label">First Name</label>
                                        <input name="first_name" type="text" class="form-control" id="fname" placeholder="First Name.." required>
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="lname" class="col-form-label">Last Name</label>
                                        <input name="last_name" type="text" class="form-control" id="lname" placeholder="Last Name.." required>
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <div class="col-md-4">
                                   <div class="form-group">
                                        <label for="email" class="col-form-label">Your Email</label>
                                        <input name="email" type="email" class="form-control" id="email" placeholder="Your Email" required>
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-4-->
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="review" class="col-form-label">Your Review</label>
                                        <textarea name="body" id="review" class="form-control" rows="4" placeholder="Good seller, I am satisfied."></textarea>
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <ul class="list-group rating_stars">
                                            <li class="list-group-item">
                                               <b> Knowledge : </b> 
                                               <span class="stars_box">
                                                @for($i = 1; $i <= 5; $i++)
                                                    <i class="fa fa-star knowledge_rating" data-rate="{{$i}}"></i>
                                                @endfor
                                               </span>
                                            </li>
                                            <li class="list-group-item">
                                               <b> Training Technique : </b> 
                                               <span class="stars_box">
                                                @for($i = 1; $i <= 5; $i++)
                                                    <i class="fa fa-star training_technique_rating" data-rate="{{$i}}"></i>
                                                @endfor
                                                </span>
                                            </li>
                                            <li class="list-group-item">
                                               <b> Communication : </b>
                                               <span class="stars_box">
                                               @for($i = 1; $i <= 5; $i++)
                                                    <i class="fa fa-star communication_rating" data-rate="{{$i}}"></i>
                                                @endfor
                                                </span>
                                            </li>
                                            <li class="list-group-item">
                                               <b> Results : </b>
                                               <span class="stars_box">
                                               @for($i = 1; $i <= 5; $i++)
                                                    <i class="fa fa-star results_rating" data-rate="{{$i}}"></i>
                                                @endfor
                                                </span>
                                            </li>
                                            <li class="list-group-item">
                                              <b> Service Quality : </b>
                                               <span class="stars_box"> 
                                                @for($i = 1; $i <= 5; $i++)
                                                    <i class="fa fa-star service_quality_rating" data-rate="{{$i}}"></i>
                                                @endfor
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
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
                            <input type="hidden" name="knowledge_rating" id="knowledge_rating" value="0">
                            <input type="hidden" name="training_technique_rating" id="training_technique_rating" value="0">
                            <input type="hidden" name="communication_rating" id="communication_rating" value="0">
                            <input type="hidden" name="results_rating" id="results_rating" value="0">
                            <input type="hidden" name="service_quality_rating" id="service_quality_rating" value="0">
                            <button type="submit" class="btn btn-primary float-right">Submit</button>
                        </form>
                        <!--end form-->
                    </section>
                    <section>

                        <h2>Reviews ({{$user->reviews->count()}})</h2>
                        <div class="comments">
                            @foreach($user->reviews as $review)
                            <div class="comment">
                                <div class="author">
                                    <a class="author-image">
                                        <div class="background-image" style="background-image: url(&quot;<?=url('img/user-default.png')?>&quot;);">
                                            <img src="{{url('img/user-default.png')}}" alt="">
                                        </div>
                                    </a>
                                    <div class="author-description">
                                        <h3>{{ucwords($review->first_name)}} {{ucwords($review->last_name)}}</h3>
                                        <div class="meta">
                                            <span>{{$review->created_at->format('d.m.Y')}}</span>
                                        </div>
                                        <!--end meta-->
                                        <p>{{ucfirst($review->body)}}</p>
                                        <p>
                                            <strong>Knowledge</strong>
                                            <span class="rating" data-rating="{{$review->rating->knowledge_rating}}">
                                            </span>
                                        </p>
                                        <p>
                                            <strong>Training Technique</strong>
                                            <span class="rating" data-rating="{{$review->rating->training_technique_rating}}">
                                            </span>
                                        </p>
                                        <p>
                                            <strong>Communication</strong>
                                            <span class="rating" data-rating="{{$review->rating->communication_rating}}">
                                            </span>
                                        </p>
                                        <p>
                                            <strong>Results</strong>
                                            <span class="rating" data-rating="{{$review->rating->results_rating}}">
                                            </span>
                                        </p>
                                        <p>
                                            <strong>Service Quality </strong>
                                            <span class="rating" data-rating="{{$review->rating->service_quality_rating}}">
                                            </span>
                                        </p>
                                    </div>
                                    <!--end author-description-->
                                </div>
                                <!--end author-->
                            </div>
                            <!--end comment-->
                            @endforeach
                        </div>
                        <!--end comment-->
                        @if($user->reviews->count() > 6)
                        <div class="center">
                            <a href="#" class="btn btn-primary btn-rounded btn-framed">Load More</a>
                        </div>
                        @endif
                    </section>
                        </div>
                        <!--end col-md-9-->
                        @if(Auth::check() && Auth::user()->id == $user->id)
                        <div class="col-md-2">
                            <!--============ Side Bar ===============================================================-->
                            <aside class="sidebar">
                                <section>
                                    <h2>More</h2>
                                        <nav class="nav flex-column side-nav">
                                        <a class="nav-link active icon" href="{{url('/'.$user->slug)}}">
                                            <i class="fa fa-user"></i>Profile
                                        </a>
                                        <a class="nav-link icon" href="{{url('/change-password')}}">
                                            <i class="fa fa-recycle"></i>Change Password
                                        </a>
                                    </nav>
                                </section>
                            </aside>
                            <!--============ End Side Bar ===========================================================-->
                        </div>
                        @endif
                        <!--end col-md-3-->
                    </div>
                </div>
                <!--end container-->
            </section>
            <!--end block-->
        </section>
    <!--end content-->
    @include('layouts.footer')


    @if(Auth::check() && Auth::user()->id == $user->id)
    <div id="videoModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Embed Video</h4>
          </div>
          <div class="modal-body">
            <p style="color:red">Copy your video embed code from youtube and paste it here!</p>
            <form action="{{route('videos.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Iframe</label>
                    <input type="text" name="video" class="form-control required" placeholder='<iframe src="http://www.youtube.com/embed/W7qWa52k-nE"></iframe>' required>
                </div>
                <br>
                <button type="submit" class="btn btn-primary btn-block">UPLOAD</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div id="postModal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Create Post</h4>
          </div>
          <div class="modal-body">
            <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control required" placeholder='My New Training Tips....' required>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control" id="image" accept="image" required>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" class="form-control" id="content" required></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-primary btn-block">UPLOAD</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div id="deletePostModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Alert!</h4>
          </div>
          <div class="modal-body">
            <p style="color:red">Are your sure want to delete!</p>
            <form action="" method="POST" id="delete_post_form">
                @csrf
                <input type="hidden" name="_method" value="delete">
                <br>
                <button type="submit" class="btn btn-primary btn-block">DELETE</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div id="editPostModal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Edit Post</h4>
          </div>
          <div class="modal-body" id="edit_content">
            
          </div>
        </div>
      </div>
    </div>
    @endif
</div>
@endsection


@section('javascript')
@if(Auth::check() && Auth::user()->id == $user->id)
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).on('click','.delete_post',function () {
            var route  = $(this).attr('data-route');
            $("#delete_post_form").attr('action',route);
            $("#deletePostModal").modal('show');
        });
        $(document).on('click','.edit_post',function () {
            var route  = $(this).attr('data-route');
            var id  = $(this).attr('data-id');
            $.ajax({
                url:route,
                type:'GET',
                success:function(data){
                    $("#edit_content").html(data.html);
                    $("#editPostModal").modal('show');
                }
            });
        });
        CKEDITOR.replace( 'content' );
    </script>
@endif
    <script type="text/javascript">
        $(document).ready(function () {
             $(document).on('click','.knowledge_rating',function () {
                    var rating = $(this).attr('data-rate');
                    var onStar = rating; // The star currently selected

                    var stars = $(this).parent().children('i');
                    
                    for (i = 1; i < stars.length+1 ; i++) {
                      $(stars[i]).removeClass('rated_stars');
                    }
                    
                    for (i = 0; i < onStar ; i++) {
                      $(stars[i]).addClass('rated_stars');
                    }

                    $('#knowledge_rating').val(rating); 
                    // alert("knowledge_rating"+rating);

                })
                $(document).on('click','.training_technique_rating',function () {
                    var rating = $(this).attr('data-rate');
                    var onStar = rating; // The star currently selected

                    var stars = $(this).parent().children('i');
                    
                    for (i = 1; i < stars.length+1 ; i++) {
                      $(stars[i]).removeClass('rated_stars');
                    }
                    
                    for (i = 0; i < onStar ; i++) {
                      $(stars[i]).addClass('rated_stars');
                    }

                    $('#training_technique_rating').val(rating); 
                     // alert("training_technique_rating"+rating);

                })
                $(document).on('click','.communication_rating',function () {
                    var rating = $(this).attr('data-rate');
                    var onStar = rating; // The star currently selected

                    var stars = $(this).parent().children('i');
                    
                    for (i = 1; i < stars.length+1 ; i++) {
                      $(stars[i]).removeClass('rated_stars');
                    }
                    
                    for (i = 0; i < onStar ; i++) {
                      $(stars[i]).addClass('rated_stars');
                    }

                    $('#communication_rating').val(rating); 
                    // alert("communication_rating"+rating);

                })
                $(document).on('click','.results_rating',function () {
                    var rating = $(this).attr('data-rate');
                    var onStar = rating; // The star currently selected

                    var stars = $(this).parent().children('i');
                    
                    for (i = 1; i < stars.length+1 ; i++) {
                      $(stars[i]).removeClass('rated_stars');
                    }
                    
                    for (i = 0; i < onStar ; i++) {
                      $(stars[i]).addClass('rated_stars');
                    }

                    $('#results_rating').val(rating); 
                    // alert("results_rating"+rating);

                })
                $(document).on('click','.service_quality_rating',function () {
                    var rating = $(this).attr('data-rate');
                    var onStar = rating; // The star currently selected

                    var stars = $(this).parent().children('i');
                    
                    for (i = 1; i < stars.length+1 ; i++) {
                      $(stars[i]).removeClass('rated_stars');
                    }
                    
                    for (i = 0; i < onStar ; i++) {
                      $(stars[i]).addClass('rated_stars');
                    }

                    $('#service_quality_rating').val(rating); 
                    // alert("service_quality_rating"+rating);

                })


                $('.fa-star').hover(function(){
                    var rating = $(this).attr('data-rate');
                    var onStar = rating; // The star currently selected

                    var stars = $(this).parent().children('i');
                    
                    for (i = 1; i < stars.length+1 ; i++) {
                      $(stars[i]).removeClass('hover_stars');
                    }
                    
                    for (i = 0; i < onStar ; i++) {
                      $(stars[i]).addClass('hover_stars');
                    }
                }, function(){
                    var stars = $(this).parent().children('i');
                    
                    for (i = 0; i < stars.length+1 ; i++) {
                      $(stars[i]).removeClass('hover_stars');
                    }
                });
        })
    </script>
@endsection