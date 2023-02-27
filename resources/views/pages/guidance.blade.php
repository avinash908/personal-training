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
    <!-- content -->
    <section class="content" style="margin-bottom: 490px;">
            <section class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8" style="padding: 3rem;background-color: #fff">
                            <h1 style="margin-bottom: 2%;text-align: center;">Get Experts Guidance</h1>
                        	<form action="{{url('/guide_me')}}" method="POST" id="guidance_form">
                                @csrf
                                <div class="form-group">
                                    <h2>What training type you want?</h2>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="checkbox" id="general_fitness" name="training_type[]" value="General fitness">
                                              <label class="form-check-label" for="general_fitness">General fitness</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                             <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="checkbox" id="kids_swimming" name="training_type[]" value="kids_swimming">
                                              <label class="form-check-label" for="inlineCheckbox1">Kids Swimming</label>
                                            </div> 
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="checkbox" id="athletic"  name="training_type[]" value="Athletic">
                                              <label class="form-check-label" for="athletic">Athletic</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="checkbox" id="boxing"  name="training_type[]" value="Boxing">
                                              <label class="form-check-label" for="boxing">Boxing</label>
                                            </div> 
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="checkbox" id="swimming"  name="training_type[]" value="Swimming">
                                              <label class="form-check-label" for="swimming">Swimming</label>
                                            </div> 
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="checkbox" id="squash"  name="training_type[]" value="Squash">
                                              <label class="form-check-label" for="squash">Squash</label>
                                            </div> 
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="checkbox" id="crossFit"  name="training_type[]" value="CrossFit">
                                              <label class="form-check-label" for="crossFit">CrossFit</label>
                                            </div> 
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="checkbox" id="tennis"  name="training_type[]" value="Tennis">
                                              <label class="form-check-label" for="tennis">Tennis</label>
                                            </div> 
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="checkbox" id="badminton"  name="training_type[]" value="Badminton">
                                              <label class="form-check-label" for="badminton">Badminton</label>
                                            </div> 
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="checkbox" id="body_building"  name="training_type[]" value="Body Building">
                                              <label class="form-check-label" for="body_building">Body Building</label>
                                            </div> 
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="checkbox" id="artisticGymnastics"  name="training_type[]" value="ArtisticGymnastics">
                                              <label class="form-check-label" for="artisticGymnastics">ArtisticGymnastics</label>
                                            </div> 
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="checkbox" id="special_needs"  name="training_type[]" value="Special needs">
                                              <label class="form-check-label" for="special_needs">Special needs</label>
                                            </div> 
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="checkbox" id="children_fitness"  name="training_type[]" value="Children Fitness">
                                              <label class="form-check-label" for="children_fitness">Children Fitness</label>
                                            </div> 
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="checkbox" id="rhythmic_gymnastics"  name="training_type[]" value="Rhythmic Gymnastics">
                                              <label class="form-check-label" for="rhythmic_gymnastics">Rhythmic Gymnastics</label>
                                            </div> 
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="checkbox" id="endurance"  name="training_type[]" value="Endurance">
                                              <label class="form-check-label" for="endurance">Endurance</label>
                                            </div> 
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="checkbox" id="karate"  name="training_type[]" value="Karate">
                                              <label class="form-check-label" for="karate">Karate</label>
                                            </div> 
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="checkbox" id="trampoline"  name="training_type[]" value="Trampoline">
                                              <label class="form-check-label" for="trampoline">Trampoline</label>
                                            </div> 
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="checkbox" id="cycling"  name="training_type[]" value="Cycling">
                                              <label class="form-check-label" for="cycling">Cycling</label>
                                            </div> 
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="checkbox" id="jiu_jitsu"  name="training_type[]" value="Jiu Jitsu">
                                              <label class="form-check-label" for="jiu_jitsu">Jiu Jitsu</label>
                                            </div> 
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="checkbox" id="yoga"  name="training_type[]" value="Yoga">
                                              <label class="form-check-label" for="yoga">Yoga</label>
                                            </div> 
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="checkbox" id="football"  name="training_type[]" value="Football">
                                              <label class="form-check-label" for="football">Football</label>
                                            </div> 
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="checkbox" id="mma"  name="training_type[]" value="MMA">
                                              <label class="form-check-label" for="mma">MMA</label>
                                            </div> 
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="checkbox" id="calisthenics"  name="training_type[]" value="Calisthenics">
                                              <label class="form-check-label" for="calisthenics">Calisthenics</label>
                                            </div> 
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="checkbox" id="handball"  name="training_type[]" value="Handball">
                                              <label class="form-check-label" for="handball">Handball</label>
                                            </div> 
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="checkbox" id="pilates"  name="training_type[]" value="option1">
                                              <label class="form-check-label" for="pilates">Pilates</label>
                                            </div> 
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="checkbox" id="zumba"  name="training_type[]" value="Zumba">
                                              <label class="form-check-label" for="zumba">Zumba</label>
                                            </div> 
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="checkbox" id="volleyball"  name="training_type[]" value="Volleyball">
                                              <label class="form-check-label" for="volleyball">Volleyball</label>
                                            </div> 
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="checkbox" id="pre_post_natal"  name="training_type[]" value="Pre And Post Natal">
                                              <label class="form-check-label" for="pre_post_natal">Pre&Post Natal</label>
                                            </div> 
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="checkbox" id="ems"  name="training_type[]" value="Cricket">
                                              <label class="form-check-label" for="ems">EMS</label>
                                            </div> 
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="checkbox" id="cricket"  name="training_type[]" value="Cricket">
                                              <label class="form-check-label" for="cricket">Cricket</label>
                                            </div> 
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="checkbox" id="rehabilitation"  name="training_type[]" value="Rehabilitation">
                                              <label class="form-check-label" for="rehabilitation">Rehabilitation</label>
                                            </div> 
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="checkbox" id="trx"  name="training_type[]" value="TRX">
                                              <label class="form-check-label" for="trx">TRX</label>
                                            </div> 
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="checkbox" id="basketball"  name="training_type[]" value="Basketball">
                                              <label class="form-check-label" for="basketball">Basketball</label>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h2>What’s your training goal?</h2>
                                    <textarea class="form-control" name="training_goal" required></textarea>
                                </div>
                                <div class="form-group">
                                    <h2>Do you need nutrition advice?</h2>
                                     <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" id="nutrition_advice"  name="nutrition_advice" value="Yes" required>
                                              <label class="form-check-label" for="nutrition_advice">Yes</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" id="nutrition_advice"  name="nutrition_advice" value="No" required>
                                              <label class="form-check-label" for="nutrition_advice">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h2>What’s your preferred training city?</h2>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="checkbox" id="abu_dhabi" name="preferred_training_city[]"  value="Abu Dhabi">
                                              <label class="form-check-label" for="abu_dhabi">Abu Dhabi</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="checkbox" id="gAjman" name="preferred_training_city[]"  value="GAjman">
                                              <label class="form-check-label" for="gAjman">GAjman</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="checkbox" id="umm_al_Quain" name="preferred_training_city[]"  value="Umm Al Quain">
                                              <label class="form-check-label" for="umm_al_Quain">Umm Al Quain</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="checkbox" id="sharjah"  name="preferred_training_city[]" value="Sharjah">
                                              <label class="form-check-label" for="sharjah">Sharjah</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="checkbox" id="ras_al_khaimah"  name="preferred_training_city[]" value="Ras Al Khaimah">
                                              <label class="form-check-label" for="ras_al_khaimah">Ras Al Khaimah</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="checkbox" id="dubai"  name="preferred_training_city[]" value="Dubai">
                                              <label class="form-check-label" for="dubai">Dubai</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="checkbox" id="al_ain" name="preferred_training_city[]"  value="Al Ain">
                                              <label class="form-check-label" for="al_ain">Al Ain</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="checkbox" id="fujairah" name="preferred_training_city[]"  value="Fujairah">
                                              <label class="form-check-label" for="fujairah">Fujairah</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h2>What’s your preferred training location (district or suburb)? </h2>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" id="at_my_home"  name="preferred_training_location" value="At my home" required>
                                              <label class="form-check-label" for="at_my_home">At my home</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" id="at_my_building_gym"   name="preferred_training_location" value="At my building gym" required>
                                              <label class="form-check-label" for="at_my_building_gym">At my building gym</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" id="as_per_coach_recommendation"   name="preferred_training_location" value="As per coach recommendation" required>
                                              <label class="form-check-label" for="as_per_coach_recommendation">As per coach recommendation</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h2>Coach gender?</h2>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" id="male"  name="gender" value="Male" required>
                                              <label class="form-check-label" for="male">Male</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" id="female"  name="gender" value="Female" required>
                                              <label class="form-check-label" for="female">Female</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-check form-check-inline">
                                              <input class="form-check-input" type="radio" id="no_preference"  name="gender" value="No preference" required>
                                              <label class="form-check-label" for="no_preference">No preference</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h2>Your details?</h2>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                                 <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                                 <div class="form-group">
                                    <label>Mobile phone</label>
                                    <input type="tele" name="phone" class="form-control" required>
                                </div>
                                <p style="color: red">*Please ensure you check your email spam folder if you have not received an email reply within 24 hours</p>
                                <div class="form-group">
                                    <input class="form-check-input" type="checkbox" id="send_me_links"  name="send_me_links" value="Please send me the 3 links to suitable coaches">
                                    <label for="send_me_links">Please send me the 3 links to suitable coaches</label>
                                </div>
                                <div class="form-group">
                                    <input class="form-check-input" type="checkbox" id="send_my_contact"  name="send_my_contact" value="Please send my contact information to 3 suitable coaches">
                                    <label for="send_my_contact">Please send my contact information to 3 suitable coaches</label>
                                </div>
                                <p style="color: red"><strong style="color: #000">Replies</strong> <br>If you haven't received a reply within 24 hours, please check your spam/junk folder.</p>

                                <button type="submit" class="btn btn-primary float-right" id="submit_guidance_form">Submit</button>
                            </form>
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
@section('javascript')
<script src="{{asset('js/sweetlib.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(document).on('submit','#guidance_form',function(e){
            e.preventDefault();
            $("#submit_guidance_form").html('<i class="fa fa-spinner fa-spin"></i> Loading');
            $("#submit_guidance_form").attr('disabled', 'disabled');
            var route = $(this).attr('action');
            $.ajax({
                url:route,
                method:'POST',
                data: new FormData(this),
                contentType:false,
                cache:false,
                processData:false,
                success:function(data){
                $("#guidance_form")[0].reset();
                   swal({
                        title: data.title,
                        text: data.message,
                        icon: "success",
                        button:"Thanks"
                    });
                    $("#submit_guidance_form").html('<i class="fa fa-check"></i> Submited');
                    $("#submit_guidance_form").removeAttr('disabled', 'disabled');
                }
            });
        });
    });
</script>
@endsection