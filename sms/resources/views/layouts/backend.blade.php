<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ Route::currentRouteName() }} | {{ config('app.name') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta content='text/html;charset=utf-8' http-equiv='content-type'>
    <meta content='Gesmansys' name='description'>

    <link rel="stylesheet" href="{!! asset('/assets/plugins/fuelux/wizard.css') !!}">
<!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{!! asset('/assets/bower_components/bootstrap/dist/css/bootstrap.min.css') !!}" edia="all" rel="stylesheet" type="text/css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{!! asset('/assets/bower_components/font-awesome/css/font-awesome.min.css') !!}" edia="all" rel="stylesheet" type="text/css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{!! asset('/assets/bower_components/Ionicons/css/ionicons.min.css') !!}" edia="all" rel="stylesheet" type="text/css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{!! asset('/assets/dist/css/AdminLTE.min.css') !!}" edia="all" rel="stylesheet" type="text/css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{!! asset('/assets/dist/css/skins/_all-skins.min.css') !!}" edia="all" rel="stylesheet" type="text/css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{!! asset('/assets/bower_components/morris.js/morris.css') !!}" edia="all" rel="stylesheet" type="text/css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{!! asset('/assets/bower_components/jvectormap/jquery-jvectormap.css') !!}" edia="all" rel="stylesheet" type="text/css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{!! asset('/assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') !!}" edia="all" rel="stylesheet" type="text/css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{!! asset('/assets/bower_components/bootstrap-daterangepicker/daterangepicker.css') !!}" edia="all" rel="stylesheet" type="text/css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{!! asset('/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') !!}">
    <!-- DataTables -->
  <link rel="stylesheet" href="{!! asset('/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" />

    <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <link rel="stylesheet" href="{!! asset('/assets/front-end/css/select2.css') !!}">
    @yield('headExtra')

    @stack('css')

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SMS</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                @if(isset(Auth::user()->profile_image))
                    <img alt="{!! Auth::user()->name !!}" src="{!! asset('/user/'.Auth::user()->profile_image) !!}"  class="user-image" alt="User Image">
                @endif
                <span class="hidden-xs">{!! Auth::user()->name !!}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                @if(isset(Auth::user()->profile_image))
                    <img alt="{!! Auth::user()->name !!}" src="{!! asset('/user/'.Auth::user()->profile_image) !!}" class="img-circle" alt="User Image">
                @endif
                <p>
                    <span class='user-name'>{!! Auth::user()->name !!}</span>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="{!! url('admin/profile') !!}">Edit Profile</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="{{ route('profile.password') }}">Change Password</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="{{ url('/logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Sign out</a>
                  </div>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
                <!-- /.row -->
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
            @if(isset(Auth::user()->profile_image))
                <img alt="{!! Auth::user()->name !!}" src="{!! asset('/user/'.Auth::user()->profile_image) !!}"  class="img-circle" alt="User Image">
            @endif
        </div>
        <div class="pull-left info">
          <p>{!! Auth::user()->name !!}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- /.search form -->
       <!-- sidebar menu: : style can be found in sidebar.less -->
        @include('partials.sidebar')
    </section>
    <!-- /.sidebar -->
  </aside>
    
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ Route::currentRouteName() }}
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('adminHome') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">{{ Route::currentRouteName() }}</li>
      </ol>
        @if (Session::has('flash_message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert"
                        aria-hidden="true">&times;</button>
                {{ Session::get('flash_message') }}
            </div>
        @endif

        @include('flash::message')
    </section>

    <!-- Main content -->
    <section class="content">
        
        @yield('content')
        
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright © 2019 {{ config('app.name') }} All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>

<!-- jQuery 3 -->
<script src="{!! asset('/assets/bower_components/jquery/dist/jquery.min.js') !!}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{!! asset('/assets/bower_components/jquery-ui/jquery-ui.min.js') !!}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 3.3.7 -->
<script src="{!! asset('/assets/bower_components/bootstrap/dist/js/bootstrap.min.js') !!}"></script>
<!-- Morris.js charts -->
<script src="{!! asset('/assets/bower_components/raphael/raphael.min.js') !!}"></script>
<script src="{!! asset('/assets/bower_components/morris.js/morris.min.js') !!}"></script>
<!-- Sparkline -->
<script src="{!! asset('/assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') !!}"></script>
<!-- jvectormap -->
<script src="{!! asset('/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') !!}"></script>
<script src="{!! asset('/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') !!}"></script>
<!-- jQuery Knob Chart -->
<script src="{!! asset('/assets/bower_components/jquery-knob/dist/jquery.knob.min.js') !!}"></script>
<!-- daterangepicker -->
<script src="{!! asset('/assets/bower_components/moment/min/moment.min.js') !!}"></script>
<script src="{!! asset('/assets/bower_components/bootstrap-daterangepicker/daterangepicker.js') !!}"></script>
<!-- datepicker -->
<script src="{!! asset('/assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') !!}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{!! asset('/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') !!}"></script>
<!-- DataTables -->
<script src="{!! asset('/assets/bower_components/datatables.net/js/jquery.dataTables.min.js') !!}"></script>
<script src="{!! asset('/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}"></script>
<!-- Slimscroll -->
<script src="{!! asset('/assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') !!}"></script>
<!-- FastClick -->
<script src="{!! asset('/assets/bower_components/fastclick/lib/fastclick.js') !!}"></script>
<!-- AdminLTE App -->
<script src="{!! asset('/assets/dist/js/adminlte.min.js') !!}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{!! asset('/assets/dist/js/pages/dashboard.js') !!}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{!! asset('/assets/dist/js/demo.js') !!}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>

<script src="{!! asset('/front-end/js/select2.min.js') !!}"></script>

<!-- page script -->
<script>
  $(function () {
    $("select.js-select2bx").select2();
    $('.datepicker').datepicker();
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>


@yield('footerExtra')
@stack('js')

<!-- / START - page related files and scripts [optional] -->

<!-- / END - page related files and scripts [optional] -->
</body>
</html>