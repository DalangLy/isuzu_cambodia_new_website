<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:image" content="{{asset('storage/images/thumbnail/thumb.jpg')}}">
    <meta property="og:title" content="All New Isuzu D-Max">
    <meta property="og:description" content="All New Isuzu D-Max">
    <meta property="og:url" content="https://www.google.com">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('storage/images/isuzu_logo-one.png')}}" />

    <title>{{__('index_lang.nav_all_new_isuzu_dmax')}}</title>


    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>

    <!-- Start AOS Library (run animation on scroll to viewport)-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- End AOS Library -->

    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pushbar.js@1.0.0/src/pushbar.min.css"/>

    <link href="{{asset('storage/libraries/hamburger/hamburgers.min.css')}}" rel="stylesheet">

    <!-- Styles -->
    <style>
        @font-face {
            font-family: 'phetsarath_ot';
            src: url("{{asset('storage/fonts/Phetsarath OT.ttf')}}");
        }
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body.en {
            font-family: Arial, serif;
            font-size: 0.9em;
        }
        body.laos {
            font-size: 0.8em;
            font-family: phetsarath_ot, Arial, serif;
            /*font-family: 'Phetsarath OT', phetsarath_ot, Arial, serif;*/
        }
        a:link {
            text-decoration: none;
        }

        a:visited {
            text-decoration: none;
        }

        a:hover {
            text-decoration: none;
        }

        a:active {
            text-decoration: none;
        }
    </style>

    <link rel="stylesheet" href="{{asset('storage/styles/global_styles/global_desktop_nav_style.css')}}">
    <link rel="stylesheet" href="{{asset('storage/styles/global_styles/global_car_between_style.css')}}">
    <link rel="stylesheet" href="{{asset('storage/styles/index_styles/index_car_between.css')}}">
    <link rel="stylesheet" href="{{asset('storage/styles/global_styles/global_interest_style.css')}}">
    <link rel="stylesheet" href="{{asset('storage/styles/global_styles/global_mobile_nav_style.css')}}">
    <link rel="stylesheet" href="{{asset('storage/styles/global_styles/margin_bottom_style.css')}}">

</head>
<body class="{!! app()->getLocale(); !!}">
    <div id="d-container">
        @include('global_parts.global_mobile_nav')
        @include('global_parts.desktop_nav')
        @include('index.banner_image')
        @include('index.index_car_between_one')
        @include('index.index_car_between_two')
        @include('index.index_car_between_three')
        @include('index.index_car_between_four')
        @include('index.billboard')
        @include('index.interest')
        @include('global_parts.margin_bottom')
    </div>

    <script defer src="{{asset('storage/scripts/global_scripts/global_desktop_nav_script.js')}}"></script>

    <!-- Start AOS Library (run animation on scroll to viewport)-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- End AOS Library -->

</body>
</html>

<!--Dalang Ly-->
