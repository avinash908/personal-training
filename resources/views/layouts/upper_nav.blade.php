<div class="secondary-navigation">
    <div class="container">
        <ul class="left">
            <li>
            <span>
                <i class="fa fa-phone"></i> +1 123 456 789
            </span>
            </li>
        </ul>
        <!--end left-->
        <ul class="right">
            @if(Auth::check())
            <li>
                <a href="{{url('/'.Auth::user()->slug)}}">
                    <i class="fa fa-user"></i>Profile
                </a>
            </li>
            <li>
                <a  href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-in"></i>
                        {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                </form>
            </li>
            @else
            <li>
                <a href="{{route('login')}}">
                    <i class="fa fa-sign-in"></i>Sign In
                </a>
            </li>
            <li>
                <a href="{{route('register')}}">
                    <i class="fa fa-pencil-square-o"></i>Register
                </a>
            </li>
            @endif
        </ul>
        <!--end right-->
    </div>
    <!--end container-->
</div>