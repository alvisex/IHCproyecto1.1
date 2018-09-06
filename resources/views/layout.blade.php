<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    {{-- --}}
    <link rel="apple-touch-icon" sizes="76x76" href={{ asset('img/apple-icon.png') }} >
    <link rel="icon" type="image/png" href={{ asset('img/favicon.png') }} >

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Now UI Kit by Creative Tim
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href= {{ asset('css/bootstrap.min.css') }} rel="stylesheet" />
    <link href={{ asset('css/now-ui-kit.css?v=1.2.0') }} rel="stylesheet" />

    <script src={{ asset('js/instascan.min.js') }} type="text/javascript"></script>

</head>

@yield('content')

<!--   Core JS Files   -->
<script src={{ asset('js/core/jquery.min.js') }} type="text/javascript"></script>
<script src={{ asset('js/core/popper.min.js') }} type="text/javascript"></script>
<script src={{ asset('js/core/bootstrap.min.js') }} type="text/javascript"></script>


<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src={{ asset('js/plugins/bootstrap-switch.js') }}></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src={{ asset('js/plugins/nouislider.min.js') }} type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src={{ asset('js/plugins/bootstrap-datepicker.js') }} type="text/javascript"></script>
{{--
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
--}}

<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src={{ asset('js/now-ui-kit.js?v=1.2.0') }} type="text/javascript"></script>
</body>

</html>