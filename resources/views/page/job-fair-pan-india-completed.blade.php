<!DOCTYPE HTML>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ isset($contentMain->title)?$contentMain->title:'Accounts | Finance | Taxation | Courses | Training Institute' }}</title>
    <meta name="description" content="{{ isset($contentMain->meta_description)?$contentMain->meta_description:'' }}" />
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
    <link href="{{ url('assets/css/ads.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/colors/color-7.css') }}" rel="alternate stylesheet" type="text/css" title="color-7">
    @yield('style')
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MS3B79K');</script>
    <!-- End Google Tag Manager -->
</head>
<body>
    <header>
		<div id="main-menu" class="main-menu-container header-style-2" style="box-shadow:-1px -1px 4px;margin: 0;padding: 0;">
			<div class="main-menu py-1" style="height: 118px;">
				<div class="container">
					<div class="navbar-default">
						<div class="navbar-header float-left">
							<a class="navbar-brand text-uppercase" href="javascript:void(0)"><img src="{{ url('assets/images/logo.png') }}" alt="ICA Edu Skills" style="width: 100%;"></a>
						</div><!-- /.navbar-header -->						
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="navbar-header float-right" style="width: auto;text-align: right;">
							<a class="navbar-brand text-uppercase" href="javascript:void(0)"  style="text-align: center;"> 
                                <img src="{{ url('assets/images/mu-logo.png') }}" alt="ICA Edu Skills" style="width: 20%;">
                                <p style="margin: 0;font-size: 14px;"> <strong> Department of commerce </strong></p>
                            </a>
						</div><!-- /.navbar-header -->		
					</div>
				</div>
			</div>
		</div>
	</header>

    <section class="ad-page-banner relative-position backgroud-style" style="background-image:url({{ url('assets/img/banner/job-fair.png') }});">
        <div class="container-fluid">
            <div class="row" style="margin-top: 40px;">
                <a href="https://www.icajobguarantee.com/" ><img src="{{ url('assets/img/banner/mumbai-job-fair-banner.jpg') }}" ></a>
            </div>
        </div>
    </section>

    <footer>
        <section id="footer-area" class="footer-area-section">
            <div class="container">
                <div class="copy-right-menu">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="copy-right-text">
                            <p>© {{ date("Y") }} - ICA Edu Skills Pvt. Ltd. All rights reserved</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="copy-right-menu-item float-right ul-li">
                                <ul>
                                    <li><a href="#">License</a></li>
                                    <li><a href="#">Privacy &amp; Policy</a></li>
                                    <li><a href="#">Term Of Service</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    
    <script src="{{ url('assets/js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script type="text/javascript" src="https://app.cognocart.com/files/deploy/embed_chatbot_47.js"></script>
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
    <script src="{{ url('assets/js/ad-script.js') }}"></script>
 
</body>
</html>