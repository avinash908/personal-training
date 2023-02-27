<footer class="footer">
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <a href="#" class="brand">
                        <img src="{{asset('img/logo.png')}}" alt="" width="120px;">
                    </a>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec tincidunt arcu, sit amet
                        fermentum sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra.
                    </p>
                </div>
                <!--end col-md-5-->
                <div class="col-md-3">
                    <h2>Navigation</h2>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <nav>
                                <ul class="list-unstyled">
                                   <li>
                                        <a class="nav-link" href="{{url('/')}}">Home</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{{url('/become_coach')}}">Be a WoW Coach Pro </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{{url('/blog')}}">Wow Blog</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{{url('/login')}}">Sign In</a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="{{url('/register')}}">Registor</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                         <div class="col-md-6 col-sm-6">
                            <nav>
                                <ul class="list-unstyled">
                                   
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!--end col-md-3-->
                <div class="col-md-4">
                    <h2>Contact</h2>
                    <address>
                        <figure>
                            124 Abia Martin Drive<br>
                            New York, NY 10011
                        </figure>
                        <br>
                        <strong>Email:</strong> <a href="#">hello@example.com</a>
                        <br>
                        <br>
                        <a href="{{url('/contact')}}" class="btn btn-primary text-caps btn-framed">Contact Us</a>
                    </address>
                </div>
                <!--end col-md-4-->
            </div>
            <!--end row-->
        </div>
        <div class="background">
            <div class="background-image original-size">
                <img src="{{asset('img/footer-background-icons.jpg')}}" alt="">
            </div>
            <!--end background-image-->
        </div>
        <!--end background-->
    </div>
</footer>