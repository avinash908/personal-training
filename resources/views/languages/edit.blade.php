 <div>
     <form action="{{route('languages.update',$language->id)}}" method='post' enctype='multipart/form-data'>
    @csrf
     <input type='hidden' name='_method' value='put'>
         <div class='form-group'>
             <label>Language</label>
             <input type='text' name='language' value='{{$language->language}}' class='form-control' required>
        </div>
         <div class='form-group'>
             <button type='submit' class='btn btn-primary btn-block'>UPDATE</button>
        </div>
     </form>
</div>