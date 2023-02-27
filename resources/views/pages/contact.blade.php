@extends('layouts.master')
@section('breadcrumb')
{{ Breadcrumbs::render('contact') }}
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
                        Contact Us
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
         <section class="content">
            <section class="block">
                <div class="map height-500px" id="map-contact">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462562.8478599594!2d54.947546376673124!3d25.075707330407372!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43496ad9c645%3A0xbde66e5084295162!2sDubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2s!4v1584796299587!5m2!1sen!2s" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h2>Get In Touch</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec tincidunt arcu, sit
                                amet fermentum sem. Class aptent taciti sociosqu ad litora
                            </p>
                            <br>
                            <figure class="with-icon">
                                <i class="fa fa-map-marker"></i>
                                <span>2519 Stanley Avenue<br>Huntington, NY 11743 </span>
                            </figure>
                            <br>
                            <figure class="with-icon">
                                <i class="fa fa-phone"></i>
                                <span>+1 516-480-4273</span>
                            </figure>
                            <figure class="with-icon">
                                <i class="fa fa-envelope"></i>
                                <a href="#">hello@example.com</a>
                            </figure>
                            <figure class="with-icon">
                                <i class="fa fa-envelope"></i>
                                <a href="#">support@example.com</a>
                            </figure>
                        </div>
                        <!--end col-md-4-->
                        <div class="col-md-8">
                            <h2>Contact Form</h2>
                            <form action="{{url('/contactus')}}" method="post" class="form email" id="contactForm">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name" class="col-form-label required">Your Name</label>
                                            <input name="name" type="text" class="form-control" maxlength="30" id="name" placeholder="Your Name" required>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email" class="col-form-label required">Your Email</label>
                                            <input name="email" type="email" class="form-control" maxlength="60" id="email" placeholder="Your Email" required>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->
                                </div>
                                <!--end row-->
                                <div class="form-group">
                                    <label for="subject" class="col-form-label">Subject</label>
                                    <input name="subject" type="text" class="form-control" id="subject" maxlength="100" placeholder="Subject" required>
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="message" class="col-form-label required">Your Message</label>
                                    <textarea name="message" id="message" class="form-control" rows="4" placeholder="Your Message" required></textarea>
                                </div>
                                <!--end form-group-->
                                <button type="submit" id="submitmessage" class="btn btn-primary float-right">Send Message</button>
                            </form>
                            <!--end form-->
                        </div>
                        <!--end col-md-8 -->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!--end block-->
        </section>
    <!--end content-->
    @include('layouts.footer')
</div>
@endsection
@section('javascript')
<script src="{{asset('js/sweetlib.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(document).on('submit','#contactForm',function(e){
            e.preventDefault();
            $("#submitmessage").html('<i class="fa fa-spinner fa-spin"></i> Loading');
            $("#submitmessage").attr('disabled', 'disabled');
            var route = $(this).attr('action');
            $.ajax({
                url:route,
                method:'POST',
                data: new FormData(this),
                contentType:false,
                cache:false,
                processData:false,
                success:function(data){
                $("#contactForm")[0].reset();
                   swal({
                        title: data.title,
                        text: data.message,
                        icon: "success",
                        button:"Thanks"
                    });
                    $("#submitmessage").html('<i class="fa fa-check"></i> Submited');
                    $("#submitmessage").removeAttr('disabled', 'disabled');
                }
            });
        });
    });
</script>
@endsection