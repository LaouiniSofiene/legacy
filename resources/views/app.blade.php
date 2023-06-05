<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>Legacy Ventures Malta | Premier General Contractor & Project Management Firm in Malta</title>
    <meta name="description" content="Legacy Ventures Malta is a premier general contractor and project management firm in Malta, specializing in luxury residential and commercial properties, backed by years of experience and expertise in the construction industry.">


        <!-- Favicons -->
        <link rel="shortcut icon" href="favicon.png">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&amp;subset=cyrillic" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
        <link href="./frontend/css/style.css" rel="stylesheet" media="screen">
        <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet"/>
</head>
<body>
    @if (Auth::check())
    <script>
        window.Laravel = {!!json_encode([
            'isLoggedin' => true,
            'user' => Auth::user()
        ])!!}
    </script>
    @else
        <script>
            window.Laravel = {!!json_encode([
                'isLoggedin' => false
            ])!!}
        </script>
    @endif
    <div id="app"></div>
<script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
 <!-- SCRIPTS -->

<script src="./frontend/js/jquery.min.js"></script>
<script src="./frontend/js/bootstrap.min.js"></script>
<script src="./frontend/js/jquery.validate.min.js"></script>
<script src="./frontend/js/jquery.ajaxchimp.min.js"></script>
<script src="./frontend/js/jquery.magnific-popup.js"></script>
<script src="./frontend/js/owl.carousel.min.js"></script>
<script src="./frontend/js/isotope.pkgd.min.js"></script>
<script src="./frontend/js/imagesloaded.pkgd.js"></script>

<!-- SLIDER REVOLUTION -->
<script src="./frontend/js/rev-slider/jquery.themepunch.tools.min.js"></script>
<script src="./frontend/js/rev-slider/jquery.themepunch.revolution.min.js"></script>

<!-- SLIDER REVOLUTION 5x EXTENSIONS   -->
<script src="./frontend/js/rev-slider/revolution.extension.actions.min.js"></script>
<script src="./frontend/js/rev-slider/revolution.extension.carousel.min.js"></script>
<script src="./frontend/js/rev-slider/revolution.extension.kenburn.min.js"></script>
<script src="./frontend/js/rev-slider/revolution.extension.layeranimation.min.js"></script>
<script src="./frontend/js/rev-slider/revolution.extension.migration.min.js"></script>
<script src="./frontend/js/rev-slider/revolution.extension.navigation.min.js"></script>
<script src="./frontend/js/rev-slider/revolution.extension.parallax.min.js"></script>
<script src="./frontend/js/rev-slider/revolution.extension.slideanims.min.js"></script>
<script src="./frontend/js/rev-slider/revolution.extension.video.min.js"></script>
<script src="./frontend/js/rev-slider-init.js"></script>
<script src="./frontend/js/interface.js"></script> 
<script src="https://player.vimeo.com/api/player.js"></script>
</body>
</html>