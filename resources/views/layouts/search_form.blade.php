@if(Request::url() != url('/'))
<div class="collapse" id="collapseMainSearchForm">
@endif
        <form action="{{url('trainers')}}" method="GET" class="hero-form form">
            <div class="container">
                <!--Main Form-->
                <div class="main-search-form">
                    <div class="form-row">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="type" class="col-form-label">Select Training Type ?</label>
                                <select name="type" id="type" data-placeholder="Select Trainer Type" required>
                                    <option value="">Select Type</option>
                                    @foreach(App\Experties::all() as $experties)
                                        <option value="{{$experties->slug}}">{{ucwords($experties->title)}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--end form-group-->
                        </div>
                        <!--end col-md-3-->
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="location" class="col-form-label">Select Trainer Location  ?</label>
                                <select name="location" id="location" data-placeholder="Select Trainer Location" required>
                                    <option value="">Select Location</option>
                                    @foreach(App\Location::all() as $location)
                                        <option value="{{$location->slug}}">{{ucwords($location->location)}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--end form-group-->
                        </div>
                        <!--end col-md-3-->
                        <div class="col-md-3 col-sm-3">
                            <button type="submit" class="btn btn-primary width-100">Search</button>
                        </div>
                        <!--end col-md-3-->
                    </div>
                    <!--end form-row-->
                </div>
                <!--end main-search-form-->
            </div>
            <!--end container-->
        </form>
        <!--end hero-form-->
@if(Request::url() != url('/'))
</div>
@endif