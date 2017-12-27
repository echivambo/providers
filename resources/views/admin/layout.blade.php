<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/logo.png') }}">
    <title>INFATEC | Pré-Reg</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/plugins/bower_components/toast-master/css/jquery.toast.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/plugins/bower_components/morrisjs/morris.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/estilo.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/colors/blue-dark.css') }}">
{{----------- if error please install laravell laravelcollective/html -------------}}
<!--[if lt IE 9]-->
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js'"></script>
    <![endif]-->

    <script src="{{ asset('js/jquery-3.2.0.min.js') }}"></script>
</head>

<body>
<!-- Preloader -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>

<div id="wrapper">
        @include('admin.header.header')
        @include('admin.sidebar.sidebar')

        <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">

                    @yield('content')

                </div>
                <footer class="footer text-center"> 2017 &copy; INFATEC by stringsystem.com </footer>
            </div>
            <!-- /#page-wrapper -->

</div>


<script src="{{ asset('js/jquery-3.2.0.min.js') }}"></script>
<script src="{{ asset('admin/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('admin/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
<script src="{{ asset('admin/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('admin/js/waves.js') }}"></script>
<script src="{{ asset('admin/plugins/bower_components/waypoints/lib/jquery.waypoints.js') }}"></script>
<script src="{{ asset('admin/plugins/bower_components/counterup/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('admin/plugins/bower_components/raphael/raphael-min.js') }}"></script>
<script src="{{ asset('admin/plugins/bower_components/morrisjs/morris.js') }}"></script>
<script src="{{ asset('admin/js/custom.min.js') }}"></script>
<script src="{{ asset('admin/js/dashboard1.js') }}"></script>
<script src="{{ asset('admin/plugins/bower_components/toast-master/js/jquery.toast.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $.toast({
            heading: 'Welcome to Pixel admin',
            text: 'Use the predefined ones, or specify a custom position object.',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'info',
            hideAfter: 3500,
            stack: 6
        })
    });
</script>
</body>
</html>