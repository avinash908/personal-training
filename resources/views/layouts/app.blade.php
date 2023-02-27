<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ config('app.name') }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

  <link rel="stylesheet" href="{{asset('css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('css/OverlayScrollbars.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.dataTables.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/buttons.dataTables.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/toastr.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
     <!--  <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li> -->
      <!-- Notifications Dropdown Menu -->
     <!--  <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li> -->
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/')}}" class="brand-link">
      <img src="{{asset('img/logo.png')}}" alt="Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">WOWCoach</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('img/'.Auth::user()->image->url)}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ url('/'.Auth::user()->slug)}}" class="d-block">{{ucwords(Auth::user()->name)}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('home')}}" class="nav-link {{ Request::url() == url('home') ? 'active' : '' }}">
              <p>
                <i class="nav-icon fas fa-tachometer-alt"></i>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('users.index')}}" class="nav-link {{ Request::url() == url('users') ? 'active' : '' }}">
              <p>
                <i class="nav-icon fa fa-users"></i>
                Users
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('posts.index')}}" class="nav-link {{ Request::url() == url('posts') ? 'active' : '' }}">
              <p>
                <i class="nav-icon fa fa-sticky-note"></i>
                Posts
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('experties.index')}}" class="nav-link {{ Request::url() == url('experties') ? 'active' : '' }}">
              <p>
                <i class="nav-icon fas fa-tools"></i>
                Experties
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview {{(Request::url() == url('languages') || Request::url() == url('locations')) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Languages & Locations
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: {{(Request::url() == url('languages') || Request::url() == url('locations')) ? 'block' : 'none' }};">
              <li class="nav-item">
                <a href="{{route('languages.index')}}" class="nav-link {{ Request::url() == url('languages') ? 'active' : '' }}">
                  <i class="fa fa-language nav-icon"></i>
                  <p>Languages</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('locations.index')}}" class="nav-link {{ Request::url() == url('locations') ? 'active' : '' }}">
                  <i class="fa fa-map-marker nav-icon"></i>
                  <p>Locations</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">MORE</li>
          @if(Auth::user()->role_id == 1)
           <li class="nav-item">
            <a href="{{route('settings')}}" class="nav-link {{ Request::url() == url('settings') ? 'active' : '' }}">
              <p>
                <i class="nav-icon fa fa-cog"></i>
                Settings
              </p>
            </a>
          </li>
          @endif
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                  <p>
                    <i class="nav-icon fas fa-arrow-left"></i>
                  </p>
                    {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </li>
         

                                    
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <div class="content-wrapper">
    @yield('content')
  </div>
<footer class="main-footer">
    <strong>Copyright &copy; {{date('Y')}} <a href="{{url('/')}}">WOWCoach</a>.</strong>
    All rights reserved.
</footer>

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('js/jquery-ui.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('js/jquery.overlayScrollbars.min.js')}}"></script>
<!--Admin App JS -->
<script src="{{asset('js/adminlte.js')}}"></script>
<script src="{{asset('js/toastr.min.js')}}"></script>
<!-- Datatable js -->
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('js/buttons.flash.min.js')}}"></script>
<script src="{{asset('js/jszip.min.js')}}"></script>
<script src="{{asset('js/pdfmake.min.js')}}"></script>
<script src="{{asset('js/vfs_fonts.js')}}"></script>
<script src="{{asset('js/buttons.html5.min.js')}}"></script>
<script src="{{asset('js/buttons.print.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script type="text/javascript">
$(document).ready(function() {
  $(document).on('click','.pt_edit',function () {
    var dataId = $(this).attr('data-id');
    var route = $(this).attr('data-route');
    $.ajax({
      url:route,
      method:'GET',
      success:function(data){
        // console.log(data);
        $('#edit_data').html(data.html);
        $('.pt_edit_modal').modal('show');
      }
    })
  })
    $(document).on('click','.pt_delete',function(){
        var route = $(this).attr('data-route');
        $('#pt_delete_form').attr('action',route);
        $('.pt_delete_modal').modal('show');
    })
    $('.pt-datatale').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>
@yield('javascript')
@include('partials.success')
@include('partials.error')
</body>
</html>

