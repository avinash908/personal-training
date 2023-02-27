@extends('layouts.master')
@section('breadcrumb')
{{ Breadcrumbs::render('register') }}
@endsection
@section('content')

<div class="page sub-page">
        <!--*********************************************************************************************************-->
        <!--************ HERO ***************************************************************************************-->
        <!--*********************************************************************************************************-->
        <section class="hero">
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
                <!--============ Page Title =========================================================================-->
                <div class="page-title">
                    <div class="container">
                        <h1>Register</h1>
                    </div>
                    <!--end container-->
                </div>
                <!--============ End Page Title =====================================================================-->
                <div class="background"></div>
                <!--end background-->
            </div>
            <!--end hero-wrapper-->
        </section>
        <!--end hero-->

        <!--*********************************************************************************************************-->
        <!--************ CONTENT ************************************************************************************-->
        <!--*********************************************************************************************************-->
        <section class="content">
            <section class="block">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8">
                            <form class="form clearfix" method="POST" action="{{ route('register') }}">
                                 @csrf
                                <div class="form-group">
                                    <label for="name" class="col-form-label required">{{ __('Name') }}</label>
                                    <input name="name" type="text" class="form-control  @error('name') is-invalid @enderror" id="name" placeholder="Your Name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                     @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="email" class="col-form-label required">{{ __('E-Mail Address') }}</label>
                                    <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Your Email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="gender" class="col-form-label required">{{ __('Gender') }}</label>
                                    <select name="gender" id="gender" class="@error('gender') is-invalid @enderror" required>
                                        <option value="male" {{(old("gender") == 'male' ? 'selected' : '')}}>Male</option>
                                        <option value="female" {{(old("gender") == 'female' ? 'selected' : '')}}>Female</option>
                                        <option value="other" {{(old("gender") == 'other' ? 'selected' : '')}}>Other</option>
                                    </select>
                                    @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="password" class="col-form-label required @error('password') is-invalid @enderror">{{ __('Password') }}</label>
                                    <input name="password" type="password" class="form-control" id="password" placeholder="Password"  required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="repeat_password" class="col-form-label required">{{ __('Repeat password') }}</label>
                                    <input name="password_confirmation" type="password" class="form-control " id="repeat_password" placeholder="Repeat Password" required>
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    @captcha
                                    <input type="text" id="captcha" name="captcha" class="form-control required" autocomplete="off" required>
                                </div>
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <!-- <label>
                                        <input type="checkbox" name="newsletter" value="1">
                                        Receive Newsletter
                                    </label> -->
                                    <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
                                </div>
                            </form>
                            <hr>
                            <p>
                                By clicking "Register" button, you agree with our <a href="#" class="link">Terms & Conditions.</a>
                            </p>
                        </div>
                        <!--end col-md-6-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!--end block-->
        </section>
        <!--end content-->

        <!--*********************************************************************************************************-->
        <!--footer-->
        @include('layouts.footer')
        <!--end footer-->
    </div>
@endsection
