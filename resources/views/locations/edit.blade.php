 <div>
     <form action="{{route('locations.update',$location->id)}}" method='post' enctype='multipart/form-data'>
    @csrf
     <input type='hidden' name='_method' value='put'>
         <div class='form-group'>
             <label>Location</label>
             <input type='text' name='location' value='{{$location->location}}' class='form-control' required>
        </div>
         <div class='form-group'>
            <button type='submit' class='btn btn-primary btn-block'>UPDATE</button>
        </div>
     </form>
</div>