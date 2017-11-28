
<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
        Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Spectral by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="{{ asset('assets/js/ie/html5shiv.js') }}"></script><![endif]-->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <!--[if lte IE 8]><link rel="stylesheet" href="{{ asset('assets/css/ie8.css') }}" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="{{ asset('assets/css/ie9.css') }}" /><![endif]-->
</head>
<body class="landing">

<!-- Page Wrapper -->
<div id="page-wrapper">

    @include('layouts.includs.menu')

    @yield('content')


    @include('layouts.includs.footer')

</div>

<!-- Scripts -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.scrollex.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.scrolly.min.js') }}"></script>
<script src="{{ asset('assets/js/skel.min.js') }}"></script>
<script src="{{ asset('assets/js/util.js') }}"></script>
<!--[if lte IE 8]><script src="{{ asset('assets/js/ie/respond.min.js') }}"></script><![endif]-->
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>