<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="zxx">
<head>
  <!-- favicon -->
  <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}">
  <!-- theme meta -->
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

  <!-- google font css -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
    rel="stylesheet"
  />
  <link
    href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700;900&display=swap"
    rel="stylesheet"
  />

  <!-- styles -->

  <!-- Swiper slider -->
  <link rel="stylesheet" href="{{ url('assets/frontend/theme-v3/plugins/swiper/swiper-bundle.css') }}" />

  <!-- Fontawesome -->
  <link rel="stylesheet" href="{{ url('assets/frontend/theme-v3/plugins/font-awesome/v6/brands.css') }}" />
  <link rel="stylesheet" href="{{ url('assets/frontend/theme-v3/plugins/font-awesome/v6/solid.css') }}" />
  <link rel="stylesheet" href="{{ url('assets/frontend/theme-v3/plugins/font-awesome/v6/fontawesome.css') }}" />
  <link href="{{ url('assets/css/ads.css') }}" rel="stylesheet">
  <!-- Main Stylesheet -->
  <link href="{{ url('assets/frontend/theme-v3/styles/main.css') }}" rel="stylesheet" />
    
</head>

<header class="header">
  <nav class="navbar container">
    <!-- logo -->
    <div class="order-0">
      <a href="index.html">
        <img src="{{ url('assets/images/logo.png') }}" height="30" width="147" alt="logo" />
      </a>
    </div>
    <!-- navbar toggler -->
    <input id="nav-toggle" type="checkbox" class="hidden" />
    <label
      id="show-button"
      for="nav-toggle"
      class="order-1 flex cursor-pointer items-center lg:order-1 lg:hidden"
    >
      <svg class="h-6 fill-current" viewBox="0 0 20 20">
        <title>Menu Open</title>
        <path d="M0 3h20v2H0V3z m0 6h20v2H0V9z m0 6h20v2H0V0z"></path>
      </svg>
    </label>
    <label
      id="hide-button"
      for="nav-toggle"
      class="order-2 hidden cursor-pointer items-center lg:order-1"
    >
      <svg class="h-6 fill-current" viewBox="0 0 20 20">
        <title>Menu Close</title>
        <polygon
          points="11 9 22 9 22 11 11 11 11 22 9 22 9 11 -2 11 -2 9 9 9 9 -2 11 -2"
          transform="rotate(45 10 10)"
        ></polygon>
      </svg>
    </label>
    <!-- /navbar toggler -->
    <ul
      id="nav-menu"
      class="navbar-nav order-2 hidden w-full flex-[0_0_100%] lg:order-1 lg:flex lg:w-auto lg:flex-auto lg:justify-center lg:space-x-5"
    >
      <li class="nav-item">
        <a href="" class="nav-link active">Home</a>
      </li>
      <li class="nav-item">
        <a href="#about" class="nav-link">Features</a>
      </li>
      <li class="nav-item">
        <a href="#features" class="nav-link">USPs</a>
      </li>
      <li class="nav-item">
        <a href="#features" class="nav-link">Why Choose Us</a>
      </li>
      <li class="nav-item">
        <a href="#testimonial" class="nav-link">Testimonials</a>
      </li>
    </ul>
    <div class="order-1 ml-auto hidden items-center md:order-2 md:ml-0 lg:flex">
      <a onclick="lead_capture_form_btn('',3)"  class="btn btn-white" href="javascript:void(0)"> Enroll now </a>
    </div>
  </nav>
</header>

<body><!-- Banner -->
<section class="section banner relative" id="home">
  <div class="container">
    <div class="row items-center">
      <div class="lg:col-7">
        <h1 class="banner-title">
          Learn Certified Industrial Accountant & Get 100% Assured Placement
        </h1>
        <p class="mt-6">
            100% Job Guarantee | Four Certifications | 10 Simulation Softwares
        </p>
        <p class="mt-6">
            Elevate your skills and transform your career with specialized training towards professional excellence
        </p>
      </div>
      <div class="lg:col-5">
        <div class="highlighted-content-wrapper text-center">

            <div class="ad_banner_form_wrapeer bg-white" >

                <div class="register-fomr-title text-center">

                    <h3 class="bold-font" style="font-size: 21px!important;"><span> Become a </span><br /> Certified Accounting Professional </h3>

                    <p style="color: #222!important;" class="bold-font">Our experts will help you choose the best Accounting Training program for a successful career</p>

                </div>

                <div class="register-form-area text-left" >

                    <form id="banner_lead_capture_form" class="lead_form" action="{{ url('capture-lead') }}" method="POST" enctype="multipart/form-data">

                        <div class="form_process" >

                            <div class="lead_steps step1 active"> 

                                @include('common.leadCaptureFormField')

                                <div class="form-group disclaimer text-left">

                                    <p style="margin:0">

                                        <input style="margin-left: 0;width: auto;vertical-align: middle;height: auto;" type="checkbox" class="" checked="">  I agree to receive updates on <i class="fa fa-whatsapp" style="color: green;"></i> whatsapp. 

                                    </p>

                                    <p>

                                        <input style="margin-left: 0;width: auto;vertical-align: middle;height: auto;" type="checkbox" class="" checked=""> I agree to <a href="/privacy-policy" target="_blank">Privacy Policy</a> &amp; overriding DNC/NDNC request for Call/SMS. 

                                    </p>

                                </div>

                            </div>
                            @include('common.leadCaptureFormOtpField')
                        </div>
                        <div class="form_success" style="display:none">
                            <div class="form-success-content">

                                <span class="success-icon"> <i class="fas fa-check"></i> </span>

                                <h4> Thank You! Your Application Submitted Successfully </h4>

                            </div>

                        </div>

                    </form> 

                </div>

            </div>

        </div>
      </div>
    </div>
  </div>
  <img
    class="banner-shape absolute -top-28 right-0 -z-[1] w-full max-w-[30%]"
    src="{{ url('assets/frontend/theme-v3/images/banner-shape.svg') }}"
    alt=""
  />
</section>
<!-- ./end Banner -->

<!-- Key features -->
<section class="section key-feature relative" id="about">
  <img
    class="absolute left-0 top-0 -z-[1] -translate-y-1/2"
    src="{{ url('assets/frontend/theme-v3/images/icons/feature-shape.svg') }}"
    alt=""
  />
  <div class="container">
    <div class="row justify-between text-center lg:text-start">
      <div class="lg:col-5">
        <h2>Accounting Course Features</h2>
      </div>
      <div class="mt-6 lg:col-5 lg:mt-0">
        <p>
        Explore a rewarding career by joining an accounting Class, under expert guidance and industry-recognized certification.
        </p>
      </div>
    </div>
    <div
      class="key-feature-grid mt-10 grid grid-cols-2 gap-7 md:grid-cols-3 xl:grid-cols-4"
    >
      <div
        class="flex flex-col justify-between rounded-lg bg-white p-5 shadow-lg"
      >
        <div>
          <h3 class="h4 text-xl lg:text-2xl">Up-to-Date Accounts Syllabus</h3>
          <p>Ammended accounting course modules to keep you on track with the industry.</p>
        </div>
        <span class="icon mt-4">
          <img
            class="objec-contain"
            src="{{ url('assets/frontend/theme-v3/images/icons/feature-icon-1.svg') }}"
            alt=""
          />
        </span>
      </div>
      <div
        class="flex flex-col justify-between rounded-lg bg-white p-5 shadow-lg"
      >
        <div>
          <h3 class="h4 text-xl lg:text-2xl">Get Hands on Experience</h3>
          <p>With our real-life project made by industry experts and academia.</p>
        </div>
        <span class="icon mt-4">
          <img
            class="objec-contain"
            src="{{ url('assets/frontend/theme-v3/images/icons/feature-icon-2.svg') }}"
            alt=""
          />
        </span>
      </div>
      <div
        class="flex flex-col justify-between rounded-lg bg-white p-5 shadow-lg"
      >
        <div>
          <h3 class="h4 text-xl lg:text-2xl">Get Doubts Cleared</h3>
          <p>Our academia & trainers are always here to help you get your doubts solved.</p>
        </div>
        <span class="icon mt-4">
          <img
            class="objec-contain"
            src="{{ url('assets/frontend/theme-v3/images/icons/feature-icon-3.svg') }}"
            alt=""
          />
        </span>
      </div>
      <div
        class="flex flex-col justify-between rounded-lg bg-white p-5 shadow-lg"
      >
        <div>
          <h3 class="h4 text-xl lg:text-2xl">Test Your Knowledge</h3>
          <p>With our Learnersmall App, you can test your concepts with assignments and quizzes.</p>
        </div>
        <span class="icon mt-4">
          <img
            class="objec-contain"
            src="{{ url('assets/frontend/theme-v3/images/icons/feature-icon-4.svg') }}"
            alt=""
          />
        </span>
      </div>
      <div
        class="flex flex-col justify-between rounded-lg bg-white p-5 shadow-lg"
      >
        <div>
          <h3 class="h4 text-xl lg:text-2xl">Sit for the Final Exam</h3>
          <p>Your training will be completed once you take the final exam.</p>
        </div>
        <span class="icon mt-4">
          <img
            class="objec-contain"
            src="{{ url('assets/frontend/theme-v3/images/icons/feature-icon-5.svg') }}"
            alt=""
          />
        </span>
      </div>
      <div
        class="flex flex-col justify-between rounded-lg bg-white p-5 shadow-lg"
      >
        <div>
          <h3 class="h4 text-xl lg:text-2xl">Get Industry Recognized Certification</h3>
          <p>You will be certified as Accounting Professional by ICA Edu Skills and NSDC.</p>
        </div>
        <span class="icon mt-4">
          <img
            class="objec-contain"
            src="{{ url('assets/frontend/theme-v3/images/icons/feature-icon-6.svg') }}"
            alt=""
          />
        </span>
      </div>
      
    </div>
  </div>
</section>
<!-- ./end Key features -->

<!-- Services -->
<section class="section services" id="features">
  <div class="container">
    <div class="tab row gx-5 items-center" data-tab-group="integration-tab">
      <div class="lg:col-6 lg:order-2">
        <div class="tab-content" data-tab-content>
          <div class="tab-content-panel active" data-tab-panel="0">
            <div class="radious" style="border-radius: 15px;overflow: hidden;width: 80%;text-align: right;">
              <img
                class="w-full object-contain"
                src="{{ url('assets/frontend/theme-v3/images/why_choose_us-min.jpg') }}"
              />
            </div>
          </div>
          <div class="tab-content-panel" data-tab-panel="1">
            <div class="radious" style="border-radius: 15px;overflow: hidden;width: 80%;text-align: right;">
              <img
                class="w-full object-contain"
                src="{{ url('assets/frontend/theme-v3/images/why_choose_us-min.jpg') }}"
              />
            </div>
          </div>
          <div class="tab-content-panel" data-tab-panel="2">
            <div class="radious" style="border-radius: 15px;overflow: hidden;width: 80%;text-align: right;">
              <img
                class="w-full object-contain"
                src="{{ url('assets/frontend/theme-v3/images/why_choose_us-min.jpg') }}"
              />
            </div>
          </div>
        </div>
      </div>
      <div class="mt-6 lg:col-6 lg:order-1 lg:mt-0">
        <div class="text-container">
          <h2 class="lg:text-4xl">
            Why do Accounting Training from ICA Edu Skills?
          </h2>
          <p class="mt-4">
            The accounting course perfectly fits those, who are passionate about learning accounts and moving a career ahead in the accounting industry:
          </p>
          <ul class="tab-nav -ml-4 mt-8 border-b-0" data-tab-nav>
            <li class="tab-nav-item active" data-tab="0">
              <img
                class="mr-3"
                src="{{ url('assets/frontend/theme-v3/images/icons/checkmark-circle.svg') }}"
                alt=""
              />
              NSDC Certified Training
            </li>
            <li class="tab-nav-item" data-tab="1">
              <img
                class="mr-3"
                src="{{ url('assets/frontend/theme-v3/images/icons/checkmark-circle.svg') }}"
                alt=""
              />
              100% Job Guarantee
            </li>
            <li class="tab-nav-item" data-tab="2">
              <img
                class="mr-3"
                src="{{ url('assets/frontend/theme-v3/images/icons/checkmark-circle.svg') }}"
                alt=""
              />
              10 Simulation Software
            </li>
            <li class="tab-nav-item" data-tab="2">
              <img
                class="mr-3"
                src="{{ url('assets/frontend/theme-v3/images/icons/checkmark-circle.svg') }}"
                alt=""
              />
              Real-Life Projects
            </li>
            <li class="tab-nav-item" data-tab="2">
              <img
                class="mr-3"
                src="{{ url('assets/frontend/theme-v3/images/icons/checkmark-circle.svg') }}"
                alt=""
              />
              Group Discussion
            </li>
            <li class="tab-nav-item" data-tab="2">
              <img
                class="mr-3"
                src="{{ url('assets/frontend/theme-v3/images/icons/checkmark-circle.svg') }}"
                alt=""
              />
              Mock Interviews
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row gx-5 my-12 items-center lg:mt-0">
      <div class="lg:col-7">
        <div class="relative">
          <img class="w-full object-contain" src="{{ url('assets/frontend/theme-v3/images/accounting-placed.webp') }}" />
          <img
            class="absolute bottom-6 left-1/2 -z-[1] -translate-x-1/2"
            src="{{ url('assets/frontend/theme-v3/images/shape.svg') }}"
            alt=""
          />
        </div>
      </div>
      <div class="mt-6 lg:col-5 lg:mt-0">
        <div class="text-container">
          <h2 class="lg:text-4xl">
            How Our Training Process Works?
          </h2>
          <p class="mt-4">
          ICA Edu Skills leads in practical training with assured placements. Our training includes:
          </p>
          <ul class="mt-6 text-dark lg:-ml-4">
            <li class="flex items-center rounded px-4">
              <img
                class="mr-3"
                src="{{ url('assets/frontend/theme-v3/images/icons/checkmark-circle.svg') }}"
                alt=""
              />
              Expert-led classroom sessions by CA faculty
            </li>
            <li class="flex items-center rounded px-4">
              <img
                class="mr-3"
                src="{{ url('assets/frontend/theme-v3/images/icons/checkmark-circle.svg') }}"
                alt=""
              />
              Hands-on learning with 10 simulation software
            </li>
            <li class="flex items-center rounded px-4">
              <img
                class="mr-3"
                src="{{ url('assets/frontend/theme-v3/images/icons/checkmark-circle.svg') }}"
                alt=""
              />
              Rigorous assignments for skill evaluation
            </li>
            <li class="flex items-center rounded px-4">
              <img
                class="mr-3"
                src="{{ url('assets/frontend/theme-v3/images/icons/checkmark-circle.svg') }}"
                alt=""
              />
              6-month paid internship for real-world experience
            </li>
            <li class="flex items-center rounded px-4">
              <img
                class="mr-3"
                src="{{ url('assets/frontend/theme-v3/images/icons/checkmark-circle.svg') }}"
                alt=""
              />
              100% guaranteed placement upon course completion
            </li>
           
          </ul>
        </div>
      </div>
    </div>
    <div class="row gx-5 mt-12 items-center lg:mt-0">
      <div class="lg:col-7 lg:order-2">
        <div class="video pb-5 pr-9">
          <div class="video-thumbnail overflow-hidden rounded-2xl">
            <img
              class="w-full object-contain"
              src="{{ url('assets/frontend/theme-v3/images/video-thumb.jpeg') }}"
              alt=""
            />
            <button class="video-play-btn">
              <img src="{{ url('assets/frontend/theme-v3/images/icons/play-icon.svg') }}" alt="" />
            </button>
          </div>
          <div
            class="video-player absolute left-0 top-0 z-10 hidden h-full w-full"
          >
            <iframe
              class="h-full w-full"
              allowfullscreen=""
              src="https://www.youtube.com/watch?v=WurU2MMqI6Y"
            ></iframe>
          </div>
          <img
            class="intro-shape absolute bottom-0 right-0 -z-[1]"
            src="{{ url('assets/frontend/theme-v3/images/shape.svg') }}"
            alt=""
          />
        </div>
      </div>
      <div class="mt-6 lg:col-5 lg:order-1 lg:mt-0">
        <div class="text-container">
          <h2 class="lg:text-4xl">Career Opportunities After Accounting Certification</h2>
          <p class="mt-4">
          After joining the accounting classes and completing the course, candidates can apply for the following job openings:
          </p>
          <p class="mt-4">
          Public Accountant Internal Auditor Tax Accountant Financial Analyst Bookkeeper Accounting Clerk Accountant Manager Financial Advisor
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ./end Services -->

<!-- Reviews -->
<section class="reviews" id="testimonial">
  <div class="container">
    <div class="row justify-between">
      <div class="lg:col-6">
        <h2>Hear from Our Students</h2>
      </div>
      <div class="lg:col-6">
        <p>
          Our students share inspiring stories of personal and academic growth, highlighting their success and transformative learning experiences. Their testimonials reflect the impact of our supportive community and quality education.
        </p>
      </div>
    </div>
    <div class="row mt-10">
      <div class="col-12">
        <div class="swiper reviews-carousel">
          <div class="swiper-wrapper">
            @foreach(getTestimonials() as $testimonial)
            <div class="swiper-slide">
              <div class="review">
                <div class="review-author-avatar" style="border: 1px solid;overflow: hidden;">
                    <img src="{{ (isset($testimonial->featured_image))?getSizedImage('',$testimonial->featured_image):'https://dummyimage.com/140x140' }}" alt="">	
                </div>
                <h4 class="mb-2">{{ $testimonial->name }}</h4>
                <p class="mb-4 text-[#666]">{{ $testimonial->dasignation }}</p>
                {!! $testimonial->comment !!}
                <div
                  class="review-rating mt-6 flex items-center justify-center space-x-2.5"
                >
                  <img src="{{ url('assets/frontend/theme-v3/images/icons/star.svg') }}" alt="" />
                  <img src="{{ url('assets/frontend/theme-v3/images/icons/star.svg') }}" alt="" />
                  <img src="{{ url('assets/frontend/theme-v3/images/icons/star.svg') }}" alt="" />
                  <img src="{{ url('assets/frontend/theme-v3/images/icons/star.svg') }}" alt="" />
                  <img src="{{ url('assets/frontend/theme-v3/images/icons/star-white.svg') }}" alt="" />
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <!-- If we need pagination -->
          <div
            class="swiper-pagination reviews-carousel-pagination !bottom-0"
          ></div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Reviews -->

<!-- Call To action -->
<section class="px-5 py-20 xl:py-[120px]">
  <div class="container">
    <div
      class="bg-gradient row justify-center rounded-b-[80px] rounded-t-[20px] px-[30px] pb-[75px] pt-16"
    >
      <div class="lg:col-11">
        <div class="row">
          <div class="lg:col-7">
            <h2 class="h1 text-white">Want to know more about our Courses?</h2>
            <a class="btn btn-white mt-8" href="#home">Download Brochure</a>
          </div>
          <div class="mt-8 lg:col-5 lg:mt-0">
            <p class="text-white">
            We offer Job Guarantee and Skill Development programs designed to provide practical industry exposure and boost employability. Would you like to learn more?
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

 <footer class="footer bg-theme-light/50">
  
  <div class="container max-w-[1440px]">
    <div
      class="footer-copyright mx-auto border-t border-border pb-10 pt-7 text-center"
    >
      <p>© {{ date("Y") }} - ICA Edu Skills Pvt. Ltd. All rights reserved</p>
    </div>
  </div>
</footer>
<script>
    let globalUrl = "{{ env("APP_URL") }}"
    let isEnableOtp = {{ (get_theme_setting('enable_otp') == "1")?$contentMain->enable_otp:get_theme_setting('enable_otp') }}
    let isAjaxSubmit = "{{ get_theme_setting('ajax_submit') }}"
</script>
<!-- jQuery -->
<!-- <script src="{{ url('assets/frontend/theme-v3/plugins/jquery/jquery.min.js') }}"></script> -->
<!-- Swiper JS -->
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
<script src="{{ url('assets/frontend/theme-v3/plugins/swiper/swiper-bundle.js') }}"></script>
<script src="{{ url('assets/frontend/theme-v3/plugins/shufflejs/shuffle.js') }}"></script>

<!-- Main Script -->
<script src="{{ url('assets/frontend/theme-v3/scripts/main.js') }}"></script>
<script src="{{ url('assets/js/ad-script.js') }}"></script>

</body>
</html>