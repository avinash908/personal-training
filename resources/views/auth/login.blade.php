@extends('layouts.master')
@section('breadcrumb')
{{ Breadcrumbs::render('login') }}
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
                        <h1>Sign In</h1>
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
                        <div class="col-md-4">
                             <form method="POST" action="{{ route('login') }}" class="form clearfix">
                                @csrf
                                <div class="form-group">
                                    <label for="email" class="col-form-label required">{{ __('E-Mail Address') }}</label>
                                    <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Your Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="password" class="col-form-label required">{{ __('Password') }}</label>
                                    <input name="password" type="password" class="form-control  @error('password') is-invalid @enderror" id="password" placeholder="Password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!--end form-group-->
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <label>
                                        <input type="checkbox" name="remember" id="remember" value="1" {{ old('remember') ? 'checked' : '' }}>
                                        {{ __('Remember Me') }}
                                    </label>
                                    <button type="submit" class="btn btn-primary">Sign In</button>
                                </div>
                            </form>
                            <hr>
                            <p>
                                Troubles with signing? <a class="link"  href="{{ route('password.request') }}">
                                Click here.</a>
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
    <!--end page-->
@endsection
