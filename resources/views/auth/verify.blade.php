@extends('layouts.master')
@section('breadcrumb')
{{ Breadcrumbs::render('verify') }}
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
                        <h1>{{ __('Verify Your Email Address') }}</h1>
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
                            @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    {{ __('A fresh verification link has been sent to your email address.') }}
                                </div>
                            @endif

                                {{ __('Before proceeding, please check your email for a verification link.') }}
                                {{ __('If you did not receive the email') }},
                                <form class="form clearfix" method="POST" action="{{ route('verification.resend') }}">
                                    @csrf
                                    <div class="d-flex justify-content-between align-items-baseline">
                                        <button type="submit" class="btn btn-primary">{{ __('click here to request another') }}</button>
                                    </div>
                                </form>
                        </div>
                     </div>
                        <!--end col-md-6-->
                </div>
                    <!--end row-->
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
