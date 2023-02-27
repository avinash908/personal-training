<section>
    <h2>Popular Posts</h2>
    @foreach(App\Post::orderBy('viewsCount')->limit(3)->get() as $l_post)
    <div class="sidebar-post">
        <a href="{{url('article/'.$l_post->slug)}}" class="background-image" style="background-image: url('<?=url("img/".$l_post->image->url)?>)'">
            <img src="{{url('img/'.$l_post->image->url)}}">
        </a>
        <!--end background-image-->
        <div class="description">
            <h4>
                <a href="{{url('article/'.$l_post->slug)}}">{{ucwords($l_post->title)}}</a>
            </h4>
            <div class="meta">
                <a href="{{url('/'.$l_post->user->slug)}}">{{ucwords($l_post->user->name)}}</a>
                <figure>{{$l_post->created_at->format('d.m.Y')}}</figure>
            </div>
            <!--end meta-->
        </div>
        <!--end description-->
    </div>
    @endforeach
    <!--end sidebar-post-->
</section>