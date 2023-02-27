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

            <!-- search form -->
            @include('layouts.search_form')
            <!-- end search form -->
            <!--============ End Hero Form ======================================================================-->
            <div class="page-title">
                <div class="container">
                    <h1>Edit Profile</h1>
                </div>
                <!--end container-->
            </div>
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
            <!--************ CONTENT ************************************************************************************-->
        <!--*********************************************************************************************************-->
        <section class="content">
            <section class="block">
                <div class="container">
                    @if(session()->has('danger'))
                    <section>
                        <div class="alert alert-warning" role="alert">
                            <h2 class="alert-heading">Your Profile Is Not Updated!</h2>
                            <p>Please Update Your Profile.</p>
                            <p>{{session()->get('danger')}}</p>
                        </div>
                    </section>
                    @endif
                    <div class="row">
                        <div class="col-md-3">
                            <nav class="nav flex-column side-nav">
                                <a class="nav-link active icon" href="my-profile.html">
                                    <i class="fa fa-user"></i>My Profile
                                </a>
                                <a class="nav-link icon" href="my-ads.html">
                                    <i class="fa fa-heart"></i>Clients
                                </a>
                                <a class="nav-link icon" href="bookmarks.html">
                                    <i class="fa fa-star"></i>Articles
                                </a>
                                <a class="nav-link icon" href="change-password.html">
                                    <i class="fa fa-recycle"></i>Change Password
                                </a>
                                <a class="nav-link icon" href="sold-items.html">
                                    <i class="fa fa-check"></i>Settings
                                </a>
                            </nav>
                        </div>
                        <!--end col-md-3-->
                        <div class="col-md-9">
                            <form action="{{url('UpdateProfile')}}" method="POST" class="form" enctype="multipart/form-data">
                                @csrf
                                <!-- <input type="hidden" name="_method" value="{{csrf_token()}}"> -->
                                <div class="row">
                                    <div class="col-md-8">
                                        <h2>Personal Information</h2>
                                        <section>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="title" class="col-form-label">Gender</label>
                                                        <select name="gender" id="gender" class="@error('gender') is-invalid @enderror" required>
					                                        <option value="male" {{($user->gender == 'male' ? 'selected' : '')}}>Male</option>
					                                        <option value="female" {{($user->gender == 'female' ? 'selected' : '')}}>Female</option>
					                                        <option value="other" {{($user->gender == 'other' ? 'selected' : '')}}>Other</option>
					                                    </select>
					                                    @if($errors->has('gender'))
                                                            @foreach($errors->get('gender') as $message)
                                                              <span style="color:red">{{$message}}</span>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                    <!--end form-group-->
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label for="name" class="col-form-label required">Your Name</label>
                                                        <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" value="{{ucwords($user->name)}}" required>
                                                    </div>
                                                    <!--end form-group-->
                                                    @if($errors->has('name'))
                                                        @foreach($errors->get('name') as $message)
                                                          <span style="color:red">{{$message}}</span>
                                                        @endforeach
                                                    @endif
                                                </div>
                                                <!--end col-md-8-->
                                            </div>
                                            <!--end row-->
                                            <div class="form-group">
                                                <label for="user_location" class="col-form-label required">Your Location</label>
                                                <input name="user_location" type="text" class="form-control" id="user_location" placeholder="Your Location" value="{{$user->info->location}}" required>
                                                @if($errors->has('user_location'))
                                                    @foreach($errors->get('user_location') as $message)
                                                      <span style="color:red">{{$message}}</span>
                                                    @endforeach
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="language" class="col-form-label required">Your Languages</label>
                                                <select name="language[]" id="language" class="@error('language') is-invalid @enderror" multiple required>
                                                     @foreach(App\Language::all() as $language)
                                                        <option value="{{$language->id}}" @foreach($user->languages as $user_language) {{($user_language->id == $language->id) ? 'selected' : ''}} @endforeach>{{$language->language}}</option>
                                                    @endforeach
                                                </select>
                                                @if($errors->has('language'))
                                                    @foreach($errors->get('language') as $message)
                                                      <span style="color:red">{{$message}}</span>
                                                    @endforeach
                                                @endif
                                            </div>
                                            <div class="form-group">
                                              
                                                <label for="experties" class="col-form-label required">Your Experties</label>
                                                <select name="experties[]" id="experties" class="@error('experties') is-invalid @enderror" multiple required>
			                                         @foreach(App\Experties::all() as $experties)
				                                        <option value="{{$experties->id}}" @foreach($user->experties as $user_experties) {{($user_experties->id == $experties->id) ? 'selected' : ''}} @endforeach>{{$experties->title}}</option>
				                                    @endforeach
			                                    </select>
			                                    @if($errors->has('experties'))
                                                    @foreach($errors->get('experties') as $message)
                                                      <span style="color:red">{{$message}}</span>
                                                    @endforeach
                                                @endif
                                            </div>
                                            <div class="row">
                                            	<div class="col-md-6">
                                            		<div class="form-group">
		                                                <label for="price_for_one" class="col-form-label required">Price (One to One)</label>
		                                                <input name="price_for_one" type="text" class="form-control" id="price_for_one" placeholder="Price for one" value="{{$user->info->price_for_one}}" required>
		                                            </div>
                                            	</div>
                                            	<div class="col-md-6">
                                            		<div class="form-group">
		                                                <label for="price_for_group" class="col-form-label">Price (Group)</label>
		                                                <input name="price_for_group" type="text" class="form-control" id="price_for_group" placeholder="Price for group"  value="{{$user->info->price_for_group}}">
		                                            </div>
                                            	</div>
                                                @if($errors->has('price_for_one'))
                                                    @foreach($errors->get('price_for_one') as $message)
                                                      <span style="color:red">{{$message}}</span>
                                                    @endforeach
                                                @endif
                                                @if($errors->has('price_for_group'))
                                                    @foreach($errors->get('price_for_group') as $message)
                                                      <span style="color:red">{{$message}}</span>
                                                    @endforeach
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="location" class="col-form-label required">Training  Locations</label>
                                                <select name="location[]" id="location" class="@error('location') is-invalid @enderror" multiple required>
			                                         @foreach(App\Location::all() as $location)
				                                        <option value="{{$location->id}}" @foreach($user->training_locations as $t_location) {{($t_location->id == $location->id) ? 'selected' : ''}} @endforeach
                                                            >{{$location->location}}</option>
				                                    @endforeach
			                                    </select>
			                                     @if($errors->has('location'))
                                                    @foreach($errors->get('location') as $message)
                                                      <span style="color:red">{{$message}}</span>
                                                    @endforeach
                                                @endif
                                            </div>
                                            <!--end form-group-->
                                            <div class="form-group">
                                                <label for="res_number" class="col-form-label">UAE REPS Number (optional)</label>
                                                <input name="res_number" type="text" class="form-control" id="res_number" placeholder="UAE REPS Number" value="{{$user->info->reps_number}}">
                                                @if($errors->has('res_number'))
                                                    @foreach($errors->get('res_number') as $message)
                                                      <span style="color:red">{{$message}}</span>
                                                    @endforeach
                                                @endif
                                            </div>
                                            <!--end form-group-->
                                            <div class="form-group">
                                                <label>Free Trial</label>
                                                <figure>
                                                    <label>
                                                        <input type="radio" name="free_trial" value="0" {{(!$user->info->free_trial) ? 'checked' : ''}} required>
                                                        No
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="free_trial" value="1" {{($user->info->free_trial) ? 'checked' : ''}} required>
                                                        Yes
                                                    </label>
                                                </figure>
                                                 @if($errors->has('free_trial'))
                                                    @foreach($errors->get('free_trial') as $message)
                                                      <span style="color:red">{{$message}}</span>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </section>

                                        <section>
                                            <h2>Contact</h2>
                                            <div class="form-group">
                                                <label for="phone" class="col-form-label">Phone</label>
                                                <input name="phone" type="text" value="{{$user->info->phone}}" class="form-control" id="phone" placeholder="Your Phone">
                                                @if($errors->has('phone'))
                                                    @foreach($errors->get('phone') as $message)
                                                      <span style="color:red">{{$message}}</span>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </section>

                                        <section>
                                            <h2>Social</h2>
                                            <div class="form-group">
                                                <label for="facebook" class="col-form-label">Facebook</label>
                                                <input name="facebook" value="{{$user->info->facebook}}" type="text" class="form-control" id="facebook" placeholder="https://www.facebook.com/jane.doe">
                                                @if($errors->has('facebook'))
                                                    @foreach($errors->get('facebook') as $message)
                                                      <span style="color:red">{{$message}}</span>
                                                    @endforeach
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="twitter" class="col-form-label">Twitter</label>
                                                <input name="twitter" value="{{$user->info->twitter}}"  type="text" class="form-control" id="twitter" placeholder="https://www.twitter.com/jane.doe">
                                                @if($errors->has('twitter'))
                                                    @foreach($errors->get('twitter') as $message)
                                                      <span style="color:red">{{$message}}</span>
                                                    @endforeach
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="instagram" class="col-form-label">Instagram</label>
                                                <input name="instagram" value="{{$user->info->instagram}}"  type="text" class="form-control" id="instagram" placeholder="https://www.instagram.com/jane.doe">
                                                @if($errors->has('instagram'))
                                                    @foreach($errors->get('instagram') as $message)
                                                      <span style="color:red">{{$message}}</span>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </section>

                                        <section>
                                            <h2>About You</h2>
                                            <div class="form-group">
                                                <label for="like_to_work_with" class="col-form-label">- Who I especially like working with</label>
                                                <select name="work_with[]" id="like_to_work_with" class="@error('work_with') is-invalid @enderror" multiple>
                                                    @foreach(App\LikeToWork::all() as $like_to_work)
                                                    <option value="{{$like_to_work->id}}"
                                                        @foreach($user->like_to_work_with as $u_like_to_work) {{($u_like_to_work->id == $like_to_work->id) ? 'selected' : ''}} @endforeach 
                                                        >{{ucwords($like_to_work->with)}}</option>
                                                    @endforeach
                                                </select>
                                                 @if($errors->has('work_with'))
                                                    @foreach($errors->get('work_with') as $message)
                                                      <span style="color:red">{{$message}}</span>
                                                    @endforeach
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="about" class="col-form-label">More About You</label>
                                                <textarea name="about" id="about" class="form-control" rows="4">{{$user->info->about}}</textarea>
                                                @if($errors->has('about'))
                                                    @foreach($errors->get('about') as $message)
                                                      <span style="color:red">{{$message}}</span>
                                                    @endforeach
                                                @endif
                                            </div>
                                            <!--end form-group-->
                                        </section>
                                        <section class="clearfix">
                                            <button type="submit" class="btn btn-primary float-right">Save Changes</button>
                                        </section>
                                    </div>
                                    <!--end col-md-8-->
                                    <div class="col-md-4">
                                        <div class="profile-image">
                                            <div class="image background-image" style="background-image:url('{{url('img/'.$user->image->url)}}');">
                                                <img src="{{url('img/'.$user->image->url)}}">
                                            </div>
                                            <div class="single-file-input">
                                                <input type="file" id="user_image" name="user_image"  accept="image/x-png,image/gif,image/jpeg">
                                                <div class="btn btn-framed btn-primary small">Upload a picture</div>
                                            </div>
                                        </div>
                                        @if($errors->has('user_image'))
                                            @foreach($errors->get('user_image') as $message)
                                              <span style="color:red">{{$message}}</span>
                                            @endforeach
                                        @endif
                                    </div>
                                    <!--end col-md-3-->
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!--end block-->
        </section>
        <!--end content-->
    <!--end content-->
    @include('layouts.footer')
</div>
@endsection
@section('javascript')
<script type="text/javascript">
    $(document).ready(function() {
        $('#experties').select2({});
        $('#language').select2({});
        $('#location').select2({});
        $('#like_to_work_with').select2({});
    });
</script>
@endsection