<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="6DeeIWcl9BNACN8eR4CLVFhUqiwIOfJjLK71Otwt">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Some description for the page" />
    <meta property="og:title" content="Kurasa supermarket" />
    <meta property="og:description" content="Kurasa supermarket" />
    <meta property="og:image" content="Kurasa supermarket" />
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Kurasa supermarket</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="https://kurasa.org/images/square-kurasa-logo.png" />

    <!-- Style css -->

    <link href="{{asset('public/vendor/chartist/css/chartist.min.css')}}" rel="stylesheet" type="text/css"/>




    <link href="{{asset('public/vendor/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('public/css/style.css')}}" rel="stylesheet" type="text/css"/>


</head>
<body>

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="gooey">
        <span class="dot"></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!--*******************
    Preloader end
********************-->

<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">
    @include('layouts.header')
    <div class="content-body">
        @yield('content')
    </div>
    <!--**********************************
Footer start
***********************************-->
    <div class="footer">
        <div class="copyright">
            <p>Copyright © Designed &amp; Developed by <a href="https://kurasa.org/" target="_blank">Kurasa</a> 2023</p>
        </div>
    </div>
    <!--**********************************
      Footer end
    ***********************************-->
    <!--**********************************
        Footer end
    ***********************************-->

    <!--**********************************
       Support ticket button start
    ***********************************-->

    <!--**********************************
       Support ticket button end
    ***********************************-->


</div>
<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->

<script src="{{asset('public/vendor/global/global.min.js')}}" type="text/javascript"></script>
<script src="{{asset('public/vendor/jquery-nice-select/js/jquery.nice-select.min.js')}}" type="text/javascript"></script>
<script src="{{asset('public/vendor/chart.js/Chart.bundle.min.js')}}" type="text/javascript"></script>
<script src="{{asset('public/vendor/apexchart/apexchart.js')}}" type="text/javascript"></script>
<script src="{{asset('public/vendor/peity/jquery.peity.min.js')}}" type="text/javascript"></script>
<script src="{{asset('public/js/dashboard/dashboard-1.js')}}" type="text/javascript"></script>
<script src="{{asset('public/js/custom.min.js')}}" type="text/javascript"></script>
<script src="{{asset('public/js/deznav-init.js')}}" type="text/javascript"></script>
<script src="{{asset('public/js/demo.js')}}" type="text/javascript"></script>
<script src="{{asset('public/js/styleSwitcher.js')}}" type="text/javascript"></script>


</body>

</html>
