<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--css Files-->
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/rtl.css" rel="stylesheet" type="text/css">
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <link href="css/color.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="css/audioplayer.css" rel="stylesheet" type="text/css">
    <link href="css/prettyPhoto.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!--Wrapper-->
    <div id="wrapper">
        @include('layouts.header')

        @include('partials.banner')

        <!--Mian Content-->
        <div id="main">
            @yield('content')
        </div>
        <!--Mian Content-->

        @include('layouts.footer')
    </div>
    <!--Wrapper-->
    <!--JQUERY START-->
    <script src="js/jquery.js"></script>
    <!--Bootstrap-->
    <script src="js/bootstrap.js"></script>
    <!--PRETTYPHOTO JS-->
    <script src="js/jquery.prettyPhoto.js"></script>
    <!--Owl Carousel-->
    <script src="js/owl.carousel.min.js"></script>
    <!--EVENT TIMER JS-->
    <script src="js/jquery_countdown.js"></script>
    <!---Modernizr Script-->
    <script src="js/modernizr.custom.js"></script>
    <!---Search Script-->
    <script src="js/search-script.js"></script>
    <!--Custom Script-->
    <script src="js/custom_script.js"></script>
</body>

</html>
