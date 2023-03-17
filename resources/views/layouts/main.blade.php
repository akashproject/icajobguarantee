<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ isset($contentMain->title)?$contentMain->title:'' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="{{ isset($contentMain->title)?$contentMain->title:'' }}">
    <meta name="description" content="{{ isset($contentMain->meta_description)?$contentMain->meta_description:'' }}">
    <link rel="canonical" href="{{url()->current()}}"/>
    <!-- All in One SEO 4.2.7.1 - aioseo.com -->
    <meta name="description" content="{{ isset($contentMain->meta_description)?$contentMain->meta_description:'' }}" />
    <meta name="robots" content="max-image-preview:large" />
    <meta name="google-site-verification" content="_Is7-guFC312LQs0E9yYfc90B7NW6Dx--HQZrLtBeLs" />
    <link rel="canonical" href="https://www.icajobguarantee.com/" />
    <meta name="generator" content="All in One SEO (AIOSEO) 4.2.7.1 " />
    <meta property="og:locale" content="en_US" />
    <meta property="og:site_name" content="ICA Edu Skills" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ isset($contentMain->title)?$contentMain->title:'' }}" />
    <meta property="og:description" content="{{ isset($contentMain->meta_description)?$contentMain->meta_description:'' }}" />
    <meta property="og:url" content="https://www.icajobguarantee.com/" />
    <meta property="og:image" content="https://www.facebook.com/ICAJobguarantee" />
    <meta property="og:image:secure_url" content="https://www.facebook.com/ICAJobguarantee" />
    <meta property="og:video" content="https://www.youtube.com/channel/UC6WWqdZzUMAsZqTQHRyEj_A" />
    <meta property="og:video:secure_url" content="https://www.youtube.com/channel/UC6WWqdZzUMAsZqTQHRyEj_A" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@IcaSkills" />
    <meta name="twitter:title" content="{{ isset($contentMain->title)?$contentMain->title:'' }}" />
    <meta name="twitter:description" content="{{ isset($contentMain->meta_description)?$contentMain->meta_description:'' }}" />
    <meta name="twitter:creator" content="@IcaSkills" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:label1" content="Written by" />
    <meta name="twitter:data1" content="ica-admin" />
    <meta name="twitter:label2" content="Est. reading time" />
    <meta name="twitter:data2" content="1 minute" />
    <!-- Css -->
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link href="{{ url('assets/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/meanmenu.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/video.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/lightbox.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/progess.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/colors/switch.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/colors/color-7.css') }}" rel="alternate stylesheet" type="text/css" title="color-7">
    @yield('style')

</head>

<body>
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
    <script>
        let globalUrl = "{{ env("APP_URL") }}"
    </script>
    <script src="{{ url('assets/js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="{{ url('assets/js/popper.min.js') }}"></script>
    <script src="{{ url('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('assets/js/jarallax.js') }}"></script>
    <script src="{{ url('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ url('assets/js/lightbox.js') }}"></script>
    <script src="{{ url('assets/js/jquery.meanmenu.js') }}"></script>
    <script src="{{ url('assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{ url('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ url('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ url('assets/js/jquery-ui.js') }}"></script>
    <!-- <script src="{{ url('assets/js/gmap3.min.js') }}"></script> -->
    <!-- <script src="{{ url('assets/js/switch.js') }}"></script> -->
    <script src="{{ url('assets/js/script.js') }}"></script>
</body>

</html>