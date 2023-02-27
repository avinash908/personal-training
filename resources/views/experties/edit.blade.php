 <div>
     <form action="{{route('experties.update',$experties)}}" method='post' enctype='multipart/form-data'>
    @csrf
     <input type='hidden' name='_method' value='put'>
         <div class='form-group'>
             <label>Title</label>
             <input type='text' name='title' value='{{$experties->title}}' class='form-control' required>
        </div>
         <div class='form-group text-center'>
             <label>Icon</label>
             <input type='file' name='image' class='form-control'>
         <img src="{{url('img/icon/'.$experties->image->url)}}" width='40' height='40'>
        </div>
         <div class='form-group'>
             <button type='submit' class='btn btn-primary btn-block'>UPDATE</button>
        </div>
     </form>
</div>