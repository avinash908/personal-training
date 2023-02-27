<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="ThemeStarz">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('fonts/font-awesome.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/selectize.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/user.css')}}">
    <link rel="stylesheet" href="{{asset('css/select2.css')}}">
    <style type="text/css">
        .wow_p{
            opacity: inherit !important;
        }
        .select2-container{
            display: none !important;
        }
        iframe {
            max-width: 100% !important;
        }
        .litle_btns{
            cursor: pointer;
            margin: 2px;
            padding: 2px;
            font-size: 1.7rem;
        }
        .litle_btns:hover{
            background-color: white;
            transition: 0.6s;
        }
        .rating_stars li i {
            margin: 1px;
            font-size: 1.9rem;
            cursor: pointer;
        }
        .rating_stars li i:hover ~ i:after{
            color: yellow;
        }
        .rated_stars{
            color: yellow;
        }
        .hover_stars{
            color: yellow;
        }
        .stars_box{
            float: right;
        }
        .become_wow_coach p{
            font-size: 1.6rem;
            color: red;
        }
        .become_wow_coach ul li{
            padding: 10px;
            font-size: 1.6rem;
            font-weight: 400;
        }
    </style>
	<title>{{ config('app.name') }}</title>

</head>
<body>
    @yield('content')
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('')}}js/popper.min.js"></script>
    <script type="text/javascript" src="{{asset('')}}bootstrap/js/bootstrap.min.js"></script>
    <script src="{{asset('js/selectize.min.js')}}"></script>
    <script src="{{asset('js/masonry.pkgd.min.js')}}"></script>
    <script src="{{asset('js/icheck.min.js')}}"></script>
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    <script src="{{asset('js/select2.js')}}"></script>
    <script src="{{asset('js/readmore.min.js')}}"></script>
    @yield('javascript')
</body>
</html>