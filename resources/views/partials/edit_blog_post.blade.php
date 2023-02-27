<form action="{{route('posts.update',$post->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="put">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{$post->title}}" class="form-control required" placeholder='My New Training Tips....' required>
    </div>
    <div class="form-group">
        <label for="image">Image (if you don't upload the image will be same..)</label>
        <input type="file" name="image" class="form-control" id="image" accept="image">
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <textarea name="e_content" class="form-control" id="content" required>{!! $post->content!!}</textarea>
    </div>
    <br>
    <button type="submit" class="btn btn-primary btn-block">UPDATE</button>
</form>
<script type="text/javascript">
    
    CKEDITOR.replace( 'e_content' );
</script>