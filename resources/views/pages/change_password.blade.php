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
                  
                    <div class="row">
                        <div class="col-md-3">
                            <aside class="sidebar">
                                <section>
                                    <h2>More</h2>
                                        <nav class="nav flex-column side-nav">
                                        <a class="nav-link icon" href="{{url('/'.Auth::user()->slug)}}">
                                            <i class="fa fa-user"></i>Profile
                                        </a>
                                        <a class="nav-link active icon" href="{{url('/change-password')}}">
                                            <i class="fa fa-recycle"></i>Change Password
                                        </a>
                                    </nav>
                                </section>
                            </aside>
                        </div>
                        <!--end col-md-3-->
                        <div class="col-md-9">
                           <form action="{{url('change_password')}}" method="POST" class="form">
                              @csrf
                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                      @if(session()->has('danger'))
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                              <strong>{{session()->get('danger')}}</strong>
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                        @endif
                                        <div class="form-group">
                                            <label for="current_password" class="col-form-label required">Current Password</label>
                                            <input type="password" name="current_password" value="{{ old('current_password') }}" class="form-control @error('current_password') is-invalid @enderror" id="current_password" required>
                                            @if($errors->has('current_password'))
                                                @foreach($errors->get('current_password') as $message)
                                                  <span style="color:red">{{$message}}</span>
                                                @endforeach
                                             @endif
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group">
                                          <label for="password">New Password</label>
                                          <input type="password" name="password" value="{{ old('password') }}" class="form-control @error('password') is-invalid @enderror" id="password" required>
                                          @if($errors->has('password'))
                                              @foreach($errors->get('password') as $message)
                                                <span style="color:red">{{$message}}</span>
                                              @endforeach
                                          @endif
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group">
                                          <label for="password_confirmation">Confirm Password</label>
                                          <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}"  class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" required>
                                          @if($errors->has('password_confirmation'))
                                              @foreach($errors->get('password_confirmation') as $message)
                                                <span style="color:red">{{$message}}</span>
                                              @endforeach
                                          @endif
                                        </div>
                                        <!--end form-group-->
                                        <button type="submit" class="btn btn-primary float-right">Change Password</button>
                                    </div>
                                    <!--end col-md-6-->
                                </div>
                            </form>
                        </div>
                        <!--end col-md-9-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!--end block-->
        </section>
    @include('layouts.footer')
</div>
@endsection