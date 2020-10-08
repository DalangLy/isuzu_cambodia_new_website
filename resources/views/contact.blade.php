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

    <title>{{__('index_lang.nav_contact_us')}}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pushbar.js@1.0.0/src/pushbar.min.css"/>

    <link href="{{asset('storage/libraries/hamburger/hamburgers.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

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
            line-height: 1.5;
        }
        body.laos {
            font-size: 0.8em;
            /*font-family: 'Phetsarath OT', Arial, serif;*/
            font-family: phetsarath_ot, Arial, serif;
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
    <link rel="stylesheet" href="{{asset('storage/styles/global_styles/global_mobile_nav_style.css')}}">

</head>
<body class="{!! app()->getLocale(); !!}">
    <div id="d-container">
        @include('global_parts.global_mobile_nav')
        @include('global_parts.desktop_nav')
        @include('contact.contact_image')
        @include('contact.contact_form')
    </div>

    <script defer src="{{asset('storage/scripts/global_scripts/global_desktop_nav_script.js')}}"></script>
</body>
</html>
<!--Dalang Ly-->
