<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/logo.png') }}">
    <title>Procurement | PSI Moçambique</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/plugins/bower_components/toast-master/css/jquery.toast.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/plugins/bower_components/morrisjs/morris.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/estilo.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/colors/blue-dark.css') }}">

    <!--DATA TABLE & EXPORT FILE-->
    <link rel="stylesheet" type="text/css" href="{{ asset('DataTables/datatables.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.2.1/jszip-2.5.0/dt-1.10.16/b-1.4.2/b-flash-1.4.2/b-html5-1.4.2/b-print-1.4.2/fc-3.2.3/fh-3.1.3/kt-2.3.2/r-2.2.0/datatables.min.css"/>



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
                <footer class="footer text-center"> 2017 © Copyright Procurement | PSI Moz. By <a href="http://evidevi.com/">evidevi.com</a>. </footer>
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


    <!--DATA TABLE & EXPORT FILE-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
<script type="text/javascript" src="{{ asset('DataTables/datatables.min.js') }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.2.1/jszip-2.5.0/dt-1.10.16/b-1.4.2/b-flash-1.4.2/b-html5-1.4.2/b-print-1.4.2/fc-3.2.3/fh-3.1.3/kt-2.3.2/r-2.2.0/datatables.min.js"></script>

<script type="text/javascript" src="{{ asset('DataTables/outros/jquery-1.12.4.js') }}"></script>
<script type="text/javascript" src="{{ asset('DataTables/outros/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('DataTables/outros/dataTables.buttons.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('DataTables/outros/buttons.flash.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('DataTables/outros/jszip.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('DataTables/outros/pdfmake.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('DataTables/outros/vfs_fonts.js') }}"></script>
<script type="text/javascript" src="{{ asset('DataTables/outros/buttons.html5.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('DataTables/outros/buttons.print.min.js') }}"></script>

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