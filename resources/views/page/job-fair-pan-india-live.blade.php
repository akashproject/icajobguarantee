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

    <style>
       .banner_header h1 {
            font-weight: 600;
            font-size: 58px;
        }
        .banner_content h2 {
            font-weight: 600;
        }
        .organizar {
            background: #393185;
            border-radius: 15px 15px  0 0;
        }
        .organizar h1{
            color:#fff;
        }
        .slot {
            text-align: center;
        }
        .slot span {
            font-size: 24px;
            font-weight: 300;
            color: #393185;
        }
        .slot h4 {
            font-size: 28px;
            color: #393185;
            font-weight: 600;
        }
        .dashed {
            background-image: linear-gradient(90deg, #979797 80%, #fff 0);
            background-size: 15px 2px;
            border: none;
            height: 1px;
            margin: 0 10px;
        }
        .jobcountdown {
            font-size: 36px;
            color: #333;
            font-weight: 600;
        }
        .message_container {
            background: #f7f7f7;
            box-shadow: 0px 0px 6px 0px #cdcdcd;
            border-radius: 10px;
        }
        .message_container ul {
            margin: 20px 0;
            padding: 0;
            color: #333;
        }
        .message_container li {
            list-style: none;
            padding: 4px 0;
        }
        .usp {
            height: 250px;
        }
        .usp h4 {
            color: #303030;
            font-weight: 600;
        }
        .agenda {
            display: flex;
        }
        .left-padding {
            width: 8px;
            background: #2a6826;
            border-radius: 10px;
        }
        section.section-padding {
            background-color: #f2f5fa!important;
        }
        .navbar-header.float-left {
            padding-top: 38px;
        }
        @media screen and (max-width: 767px) {
            .banner_header h1 {
                font-size: 36px;
            }
            .banner_content h2 {
                font-size: 26px;
            }
            .navbar-header.float-left {
                padding-top: 0;
            }
        }
    </style>

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
            <div class="container">
                <div class="row" style="margin-top: 40px;">
                    <div class="col-md-8 py-5">
                        <div class="banner_container">
                            <div class="banner_header">
                                <h1>Kickstart Your Career at Mumbai University’s Job Fair.</h1>
                            </div>
                            <!-- <div class="banner_content mt-5">
                                <h2>Mastering Finance, One Webinar at a Time</h2>
                            </div> -->
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="text-center py-5">
                                    <div class="">
                                        <h5 style="color: #af0e0e;font-weight: 400;"> <i class="fa fa-warning"></i> <span>Hurry Up!</span> Limited Slots Available </h5>
                                    </div>
                                    <div class="jobcountdown">
                                        <i class="fa fa-clock"></i> 
                                        <span id="days"></span>D: 
                                        <span id="hours"></span>H: 
                                        <span id="minutes"></span>M: 
                                        <span id="seconds"></span>S
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="highlighted-content-wrapper text-center">
                            <div class="ad_banner_form_wrapeer" >
                                <div class="register-fomr-title text-center">
                                    <h3 class="bold-font" style="font-size: 21px!important;"><span> Book </span> Your Seat Now </h3>
                                </div>

                                <div class="register-form-area text-left" >
                                    <form id="banner_lead_capture_form" class="lead_form" action="{{ url('job-fair-capture-lead') }}" method="POST" enctype="multipart/form-data">
                                        <div class="form_process" >
                                            <div class="lead_steps step1 active"> 
                                                @include('common.leadCaptureFormField')
                                                <div class="contact-info formFieldDob">
                                                    <label for="formFieldDob" >Date of birth </label>
                                                    <input id="formFieldDob" name="date_of_birth" type="date" placeholder="Date of birth" autocomplete="off" required>
                                                </div>
                                                <div class="contact-info formFieldAlternateMobileNumber">
                                                    <input id="formFieldAlternateMobileNumber" name="alternate_mobile_number" type="text" placeholder="Enter Your Alternative number" autocomplete="off" required>
                                                </div>
                                                <div class="register-form-area">
                                                    <select class="batch_applied" name="qualification" required>
                                                        <option value=""> Select Qualifications </option>
                                                        <option value="10+2 - Arts">10+2 - Arts</option>
                                                        <option value="10+2 - Commerce">10+2 - Commerce</option>
                                                        <option value="10+2 - Science">10+2 - Science</option>
                                                        <option value="B.A. - Arts">B.A. - Arts</option>
                                                        <option value="B.Com - Commerce">B.Com - Commerce</option>
                                                        <option value="B.Com(H) - Commerce">B.Com(H) - Commerce</option>
                                                        <option value="B.Sc - Science">B.Sc - Science</option>
                                                        <option value="BBA - Management">BBA - Management</option>
                                                        <option value="CA(Final) - Commerce">CA(Final) - Commerce</option>
                                                        <option value="CA(Inter) - Commerce">CA(Inter) - Commerce</option>
                                                        <option value="CS - Commerce">CS - Commerce</option>
                                                        <option value="M.A. - Arts">M.A. - Arts</option>
                                                        <option value="M.Com - Commerce">M.Com - Commerce</option>
                                                        <option value="M.Sc - Science">M.Sc - Science</option>
                                                        <option value="MBA - Managment">MBA - Managment</option>
                                                    </select>
                                                </div>
                                                <div class="contact-info formField⁠CollegeName">
                                                    <input id="formField⁠CollegeName" name="institute" type="text" placeholder="Enter Your ⁠College Name" autocomplete="off" required>
                                                </div>
                                                <div class="hideshowtextfieldwrap" >
                                                    <div class="register-form-area">
                                                        <select class="experience hide_show_text_field" name="experience" required>
                                                            <option value=""> Select Experience </option>
                                                            <option value="Freshers">Freshers</option>
                                                            <option value="6 months - 1 year of experience">6 months - 1 year of experience</option>
                                                            <option value="More than 1 year of experience">More than 1 year of experience</option>
                                                            <option value="Other">Other</option>
                                                        </select>
                                                    </div>
                                                    <div class="contact-info formFieldSpecifyExperince" style="display:none" >
                                                        <input id="formFieldSpecifyExperince" name="other_experience" type="text" placeholder="Please Specity" autocomplete="off" required>
                                                    </div>
                                                </div>
                                                <div class="hideshowtextfieldwrap" >
                                                    <div class="register-form-area">
                                                        <select class="career_option hide_show_text_field" name="career_option" required>
                                                            <option value=""> Select Preferred Career Option </option>
                                                            <option value="Banking">Banking</option>
                                                            <option value="Accounts">Accounts</option>
                                                            <option value="Sales">Sales</option>
                                                            <option value="Finance">Finance</option>
                                                            <option value="Data Analyst">Data Analyst</option>
                                                            <option value="Other">Other</option>
                                                        </select>
                                                    </div>
                                                    <div class="contact-info formFieldSpecifycareer" style="display:none" >
                                                        <input id="formFieldSpecifycareer" name="other_career_option" type="text" placeholder="Please Specity" autocomplete="off" required>
                                                    </div>
                                                </div>

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
                                                <h3> Thank You! Your Application Submitted Successfully </h3>
                                            </div>
                                        </div>
                                    </form> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <section >
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="organizar py-3">
                        <h1> ICA & Mumbai University Job Fair in Mumbai</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="slot py-5">
                        <span> Event Date </span>
                        <h4> 12th December 2024 </h4>
                    </div>    
                </div>
                <div class="col-md-3">
                    <div class="slot py-5">
                        <span> Event Time </span>
                        <h4> 10:00 am Onwards </h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="slot py-5">
                        <span> Venue </span>
                        <h4> Ranade Bhavan Campus, Mumbai University </h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="slot py-5">
                        <span> Eligibility </span>
                        <h4>B.Com, BBA, BMS, BAF or M.Com</h4>
                    </div>
                </div>
            </div>
            <hr class="dashed">
        </div>
    </section>

    <section class="section-padding pt-5" >
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3> What to expect </h3>
                    <div class="message_container my-4 p-5">
                        <h4>Job Fair organized by Mumbai University in partnership with ICA Edu Skills</h4>
                        <h6 class="mt-3" style="font-weight: 400;">Join us on 12th December 2024 for an exclusive Job Fair organized by Mumbai University in partnership with ICA Edu Skills! If you're a graduate or postgraduate in B.Com, BBA, BMS, or M.Com, this is your opportunity to meet top employers, explore high-demand roles, and kickstart a rewarding career. Don’t miss out on this chance to network, learn, and get hired!</h6>
                        <!-- <ul>
                            <li>🏫 Meet top business schools from around the world like Cox, Freeman, Rotman, Schulich, Edinburgh Business School and many more
                            <li>📝 Get insights on business school applications, timelines, test prep & more from expert counsellors!</li>
                            <li>💰  Apply to QS ImpACT scholarships worth $45K in total</li>
                            <li>🎓 Attend panel discussions & presentations by higher education experts and women in leadership</li>
                            <li>💼 This event is suitable for candidates with 2+ years of work experience</li>
                            <li>👨‍🎓 Recent grad or less than 1 year of experience? Join our Master's event: TopUniversities.com/Mumbai</li>
                            <li>💌 Got a question? Write to us: eventsupport@qs.com</li>
                        </ul> -->
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-4 text-center">
                    <div class="usp message_container mt-3 p-4">
                        <img src="https://www.icajobguarantee.com/assets/img/icons/tick.png">
                        <h4>Employability Test</h4>
                        <p> Assess your job readiness and identify key areas for improvement with our employability test </p>      
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="usp message_container mt-3 p-4">
                        <img src="https://www.icajobguarantee.com/assets/img/icons/tick.png">
                        <h4>Skill-Building Workshops</h4>
                        <p> Participate in workshops to sharpen your skills, enhance your resume, and improve your interview techniques. </p>      
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="usp message_container mt-3 p-4">
                        <img src="https://www.icajobguarantee.com/assets/img/icons/tick.png">
                        <h4>Direct Access to Employers</h4>
                        <p>Meet recruiters from leading companies, all actively hiring for roles that match your qualifications.</p>      
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3> Agenda </h3>
                </div>
                <div class="col-12">
                    <div class="agenda mb-5 mt-3">
                        <div class="left-padding">

                        </div>
                        <div class="agenda-content message_container p-5" style="width: 100%;">
                            <h3> <strong> 10:00am - 5:30pm | 7h 30m </strong></h3>
                            <h6>Book interviews with your target B.Com, BBA, BMS, BAF or M.Com</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

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
    @if(get_theme_setting('ajax_submit') == 1)
        @include('common.formSubmitByAjax')
    @else 
        @include('common.formSubmitByPageLoad')
    @endif
    <script>
        let globalUrl = "{{ env("APP_URL") }}"
        let isEnableOtp = {{ (get_theme_setting('enable_otp') == "1")?$contentMain->enable_otp:get_theme_setting('enable_otp') }}
        let isAjaxSubmit = "{{ get_theme_setting('ajax_submit') }}"
        let eventDate = new Date("2024-12-12T09:59:59").getTime();
    </script>
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
    <script>
        $(document).ready(function () {
            // Set the target date and time

            function updateCountdown() {
                const now = new Date().getTime();
                const timeRemaining = eventDate - now;

                if (timeRemaining >= 0) {
                    const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
                    const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

                    $('#days').text(days);
                    $('#hours').text(hours);
                    $('#minutes').text(minutes);
                    $('#seconds').text(seconds);
                } else {
                    $('#jobcountdown').text("Countdown ended");
                }
            }

            // Update the countdown every second
            setInterval(updateCountdown, 1000);


            jQuery('.hide_show_text_field').change(function() {
                if($(this).val() == "Other") {
                    
                    $(this).parent().parent().children(".contact-info").show();
                } else {
                    $(this).parent().parent().children(".contact-info").hide();
                }
                
            });
        });
    </script>
</body>
</html>