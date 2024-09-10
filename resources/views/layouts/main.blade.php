<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ isset($contentMain->title)?$contentMain->title:'Accounts | Finance | Taxation | Courses | Training Institute' }}</title>
    <meta name="facebook-domain-verification" content="he9zy5upymc72288m3qpcwda5dygul" />
    <meta name="description" content="{{ isset($contentMain->meta_description)?$contentMain->meta_description:'Accounts | GST | Tally | SAP | Learn accounts, finance, taxation, and banking job guarantee courses. Enroll with India&#039;s No.1 Educational Training Institute.' }}" />
    <link rel="canonical" href="{{url()->current()}}"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="{{ isset($contentMain->title)?$contentMain->title:'' }}">
    <meta name="robots" content="{{ isset($contentMain->robots)?$contentMain->robots:'' }}" />
    <meta name="google-site-verification" content="_Is7-guFC312LQs0E9yYfc90B7NW6Dx--HQZrLtBeLs" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:site_name" content="ICA Edu Skills" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ isset($contentMain->title)?$contentMain->title:'Accounts | Finance | Taxation | Courses | Training Institute | Computerized Accounts Training Institute' }}" />
    <meta property="og:description" content="{{ isset($contentMain->meta_description)?$contentMain->meta_description:'Accounts | GST | Tally | SAP | Learn accounts, finance, taxation, and banking job guarantee courses. Enroll with India&#039;s No.1 Educational Training Institute.' }}" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:image" content="https://www.facebook.com/ICAJobguarantee" />
    <meta property="og:image:secure_url" content="https://www.facebook.com/ICAJobguarantee" />
    <meta property="og:video" content="https://www.youtube.com/channel/UC6WWqdZzUMAsZqTQHRyEj_A" />
    <meta property="og:video:secure_url" content="https://www.youtube.com/channel/UC6WWqdZzUMAsZqTQHRyEj_A" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@IcaSkills" />
    <meta name="twitter:title" content="{{ isset($contentMain->title)?$contentMain->title:'Accounts | Finance | Taxation | Courses | Training Institute | Computerized Accounts Training Institute' }}" />
    <meta name="twitter:description" content="{{ isset($contentMain->meta_description)?$contentMain->meta_description:'Accounts | GST | Tally | SAP | Learn accounts, finance, taxation, and banking job guarantee courses. Enroll with India&#039;s No.1 Educational Training Institute.' }}" />
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
    <link href="{{ url('assets/css/responsive.css') }}" rel="stylesheet">
    @if(check_device('desktop'))
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">
    @else
    <link href="{{ url('assets/css/mobile.css') }}" rel="stylesheet">
    @endif
    
    <link href="{{ url('assets/css/colors/color-7.css') }}" rel="alternate stylesheet" type="text/css" title="color-7">
    @yield('style')

    @if(isset($contentMain->schema))
    {!! $contentMain->schema !!}
    @else
    {!! get_theme_setting('schema') !!}
    @endif
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MS3B79K');</script>
    <!-- End Google Tag Manager -->
    <script>
        let popUp = 1
	</script>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MS3B79K"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
    
    @if(get_theme_setting('ajax_submit') == 1)
        @include('common.formSubmitByAjax')
    @else 
        @include('common.formSubmitByPageLoad')
    @endif
    
    <script>
        let globalUrl = "{{ env("APP_URL") }}"
       
        let isEnableOtp = {{ (get_theme_setting('enable_otp') == "1")?get_theme_setting('enable_otp'):$contentMain->enable_otp }}
        let isAjaxSubmit = "{{ get_theme_setting('ajax_submit') }}"
    </script>
    <script src="{{ url('assets/js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script type="text/javascript" src="https://www.googleadservices.com/pagead/conversion_async.js" charset="utf-8"></script>
    <script type="text/javascript" src="https://app.cognocart.com/files/deploy/embed_chatbot_47.js"></script>
    <script src='https://widgets.sociablekit.com/google-reviews/widget.js' async defer></script>
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
    <script src="{{ url('assets/js/script.js') }}"></script>
    
</body>

</html>