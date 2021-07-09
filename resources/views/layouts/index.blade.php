<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Samcom</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">  
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">  
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/jqvmap/jqvmap.min.css') }}"> 
    <link rel="stylesheet" href="{{ asset('dashboard/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/dist/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/summernote/summernote-bs4.min.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <!-- header -->
    @include('elements.header')
    <!-- sidebar -->
    @include('elements.sidebar')
    <!-- midcontent   -->
    @yield('content')  
    <!-- footer -->
    @include('elements.footer')
</div>
    <script src="{{ asset('dashboard/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="{{ asset('dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/sparklines/sparkline.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('dashboard/dist/js/adminlte.js') }}"></script>
    <script src="{{ asset('dashboard/dist/js/demo.js') }}"></script>
    <script src="{{ asset('dashboard/dist/js/pages/dashboard.js') }}"></script>
</body>
</html>
