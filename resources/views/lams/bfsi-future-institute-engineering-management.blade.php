
<!DOCTYPE HTML>
<html lang="en">
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
    <link rel="icon" href="https://www.icajobguarantee.com/assets/images/favicon.ico">
    <link href="https://www.icajobguarantee.com/assets/css/owl.carousel.css" rel="stylesheet">
    <link href="https://www.icajobguarantee.com/assets/css/fontawesome-all.css" rel="stylesheet">
    <link href="https://www.icajobguarantee.com/assets/css/flaticon.css" rel="stylesheet">
    <link href="https://www.icajobguarantee.com/assets/css/meanmenu.css" rel="stylesheet">
    <link href="https://www.icajobguarantee.com/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://www.icajobguarantee.com/assets/css/video.min.css" rel="stylesheet">
    <link href="https://www.icajobguarantee.com/assets/css/lightbox.css" rel="stylesheet">
    <link href="https://www.icajobguarantee.com/assets/css/progess.css" rel="stylesheet">
    <link href="https://www.icajobguarantee.com/assets/css/animate.min.css" rel="stylesheet">
    <link href="https://www.icajobguarantee.com/assets/css/ads.css" rel="stylesheet">
    <link href="https://www.icajobguarantee.com/assets/frontend/bfsi/css/bfsi-landing-page.css" rel="stylesheet">
    <link href="https://www.icajobguarantee.com/assets/css/responsive.css" rel="stylesheet">
    <link href="https://www.icajobguarantee.com/assets/css/colors/color-7.css" rel="alternate stylesheet" type="text/css" title="color-7">
	<link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MS3B79K');</script>
    <!-- End Google Tag Manager -->
</head>

<body>
		<div class="banner-landing" style="background-image: url('/assets/frontend/bfsi/images/diverse-team.webp');">
            <div class="banner-bottom" style="background-image: url('/assets/frontend/bfsi/images/banner-bottom.svg');"></div>
			<img src="/assets/frontend/bfsi/images/round-dot.png" alt="" class="banner-dot-obj">
			<img src="/assets/frontend/bfsi/images/round-dot.png" alt="" class="banner-dot-obj2">
            <div class="container">
				<div class="row d-flex align-items-center justify-content-between">
					<div class="col-xl-7 col-md-12 my-4 ps-lg-5">
						<div class="d-flex">
							<div class="banner-logo"><img src="/assets/frontend/bfsi/images/bfsi.png" alt="" class="img-fluid"></div>
							<div class="banner-logo-ica mb-4 ml-2"><img src="/assets/frontend/bfsi/images/logo-ica.png" alt="" class="img-fluid"></div>
							<!-- <div class="banner-logo mb-4 ml-2"><img src="/assets/img/gcr-logo.png" alt="" class="img-fluid" style="height: 85px;"></div> -->
						</div>
						
						<h1 class="mb-4 text-white">CRACK THE CODE <span>TO</span> SMART MONEY MOVES</h1>
						<h2>All Participants shall receive BFSI Certificates!</h2>
						<p class="mt-4 mb-4 text-white">Get ready for a 90-minute power-packed session that makes finance fun, simple, and real - right in your classroom!</p>

						@if(check_device("mobile"))
						<div class="about-btn text-center mt-3 position-relative" style="z-index: 2;">
							<div class="genius-yellow-btn gradient-yellow-bg text-center text-uppercase ul-li-block bold-font">
								<a class="creative_register_btn" href="javascript:void(0)"> Register Now <i class="fas fa-caret-right"></i></a>
							</div>
						</div>
						@endif
					</div>
                    <div class="col-xl-5 col-md-12">
                        <div class="highlighted-content-wrapper text-center">
                            <div class="register_cta_content mt-2" >
                                <div class="slot_content">
                                    <h4>Limited Slots Available!</h4>
                                </div>
                                <div class="p-3 creative_wrapper creative_register_btn" >
                                    <img src="{{ url('/assets/img/job-fair-cta.png') }}" >
                                </div>
                                <div class="about-btn text-center mt-3">
                                    <div class="genius-yellow-btn gradient-yellow-bg text-center text-uppercase ul-li-block bold-font">
                                        <a class="creative_register_btn" href="javascript:void(0)"> Register Now <i class="fas fa-caret-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="ad_banner_form_wrapeer" style="display:none;">
                                <div class="register-fomr-title text-center">
                                    <h3 class="bold-font text-white" style="font-size: 21px!important;"><span> Book </span> Your Seat Now </h3>
                                </div>

                                <div class="register-form-area text-left" >
                                    <form id="banner_lead_capture_form" class="lead_form" action="{{ route('lam-page-form-submit') }}" method="POST" enctype="multipart/form-data">
                                        <div class="form_process" >
                                            <div class="lead_steps step1 active"> 
                                                <div class="field_step_1" >
                                                    @include('common.leadCaptureFormField')
                                                    <div class="nws-button text-center white text-capitalize">
                                                        <button class="submit_classroom_lead_generation_form form_step_btn" type="button" disabled> Next <i class="fas fa-arrow-right" > </i> </button> 
                                                        <img src="https://www.icacourse.in/wp-content/themes/scriptcrown/images/loader.gif" style="width: 42px; display:none;" class="checkout_loader">
                                                    </div>
                                                </div>
                                                <div class="field_step_2" style="display:none">
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
                                                            <option value="M.Sc - Science">BCA</option>
                                                            <option value="MBA - Managment">MBA - Managment</option>
                                                        </select>
                                                    </div>
                                                    <div class="contact-info formField⁠CollegeName">
                                                        <input id="formField⁠CollegeName" name="institute" type="text" placeholder="Enter Your College & Area Name" autocomplete="off" required>
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
                                                                <option value="Banking">Accounts & Taxation</option>
                                                                <option value="Accounts">Finance</option>
                                                                <option value="Sales">MIS & Data Analysis</option>
                                                                <option value="Finance">Banking</option>
                                                                <option value="Data Analyst">Sales</option>
                                                                <option value="Other">Other</option>
                                                            </select>
                                                        </div>
                                                        <div class="contact-info formFieldSpecifycareer" style="display:none" >
                                                            <input id="formFieldSpecifycareer" name="other_career_option" type="text" placeholder="Please Specity" autocomplete="off" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group disclaimer text-left">
                                                        <p style="margin:0" class="text-white">
                                                            <input style="margin-left: 0;width: auto;vertical-align: middle;height: auto;" type="checkbox" class="" checked="">  I agree to receive updates on <i class="fa fa-whatsapp" style="color: green;"></i> whatsapp. 
                                                        </p>
                                                        <p class="text-white">
                                                            <input style="margin-left: 0;width: auto;vertical-align: middle;height: auto;" type="checkbox" class="" checked=""> I agree to <a href="/privacy-policy" target="_blank">Privacy Policy</a> &amp; overriding DNC/NDNC request for Call/SMS. 
                                                        </p>
                                                    </div>
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
	</div>
</div>

<div class="section-features">
	<div class="container">
		<div class="row justify-content-center mb-5">
			<div class="col-xl-7">
				<div class="text-center">
					<h2 class="">Must-Know Money Topics for Every Student</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-4 col-md-6 my-2">
				<div class="features-bar">
					<h4>Investment Basics</h4>
				</div>
			</div>
			<div class="col-xl-4 col-md-6 my-2">
				<div class="features-bar">
					<h4>Introduction to Mutual Funds</h4>
				</div>
			</div>
			<div class="col-xl-4 col-md-6 my-2">
				<div class="features-bar">
					<h4>Understanding Inflation</h4>
				</div>
			</div>
			<div class="col-xl-4 col-md-6 my-2">
				<div class="features-bar">
					<h4>Basics of Financial Planning</h4>
				</div>
			</div>
			<div class="col-xl-4 col-md-6 my-2">
				<div class="features-bar">
					<h4>Behavioral Finance & Investment Decisions</h4>
				</div>
			</div>
			<div class="col-xl-4 col-md-6 my-2">
				<div class="features-bar">
					<h4>Overview of the Primary Market</h4>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="number-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="number-headline mb-5">Future Institute Of Engineering & Management - ICA Gariahat, Seminar 2025</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-4 col-md-4">
				<div class="text-center number-bar mb-4">
					<h5 class="mb-3">Event Date</h5>
					<div class="number-box">
						<h2>21st August 2025</h2>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-md-4">
				<div class="text-center number-bar mb-4">
					<h5 class="mb-3">Event Time</h5>
					<div class="number-box">
						<h2>03:00 PM</h2>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-md-4">
				<div class="text-center number-bar mb-4">
					<h5 class="mb-3">Eligibility</h5>
					<div class="number-box">
						<h2>Arts, Science, Commerce and Vacation UG / PG</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="section-experience">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="experience-headline mb-5">Learn Today. Lead Tomorrow:</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="experience-bar mb-4">
					<h4>Practical finance skills that open doors for life and career!</h4>
					<ul>
						<li><img src="/assets/frontend/bfsi/images/check.svg" alt="">Build strong money management skills,</li>
						<li><img src="/assets/frontend/bfsi/images/check.svg" alt="">Start investing with confidence,</li>
						<li><img src="/assets/frontend/bfsi/images/check.svg" alt="">Protect savings from inflation,</li>
						<li><img src="/assets/frontend/bfsi/images/check.svg" alt="">Create practical financial plans</li>
						<li><img src="/assets/frontend/bfsi/images/check.svg" alt="">Make smarter spending decisions</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="experience-bar mb-4">
					<h4 > </h4>
					<ul>
						<li><img src="/assets/frontend/bfsi/images/check.svg" alt="">Avoid common investment mistakes</li>
						<li><img src="/assets/frontend/bfsi/images/check.svg" alt="">Understand how stock markets work</li>
						<li><img src="/assets/frontend/bfsi/images/check.svg" alt="">Apply financial knowledge in daily life</li>
						<li><img src="/assets/frontend/bfsi/images/check.svg" alt="">Strengthen your resume with certification</li>
						<li><img src="/assets/frontend/bfsi/images/check.svg" alt="">Gain an edge in career and entrepreneurship</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="section-employers">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-7 text-center">
				<h2 class="experience-headline mb-5">What Makes The Seminar Different</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<div class="employers-bar text-center mb-4">
					<img src="/assets/frontend/bfsi/images/check.svg" alt="" class="img-fluid mb-3">
					<h4>Interactive Sessions</h4>
					<p>Ask questions and get real answers</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="employers-bar text-center mb-4">
					<img src="/assets/frontend/bfsi/images/check.svg" alt="" class="img-fluid mb-3">
					<h4>Real-World Knowledge</h4>
					<p>Practical tips you can use from day one.</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="employers-bar text-center mb-4">
					<img src="/assets/frontend/bfsi/images/check.svg" alt="" class="img-fluid mb-3">
					<h4>Free Certification</h4>
					<p>Add weight to your resume with BFSI Certification</p>
				</div>
			</div>
		</div>
	</div>
</section>


<div class="banner-counter">
	<div class="clock-container m-auto m-lg-0">
		<div class="clock" id="clock">
			<span id="days">00</span>
			<span class="label">DAY</span>
			<span id="hours">00</span>
			<span class="label">HRS</span>
			<span id="minutes">00</span>
			<span class="label">MIN</span>
			<span id="seconds">00</span>
			<span class="label">SEC</span>
		</div>
	</div>
</div>

<footer class="landing-footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<p>© 2025 - ICA Edu Skills Pvt. Ltd. All rights reserved</p>
			</div>
		</div>
	</div>
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
	let eventDate = new Date("2025-08-21T11:59:59").getTime();
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

		// Set your custom start date
		const startDate = new Date('2025-08-21T15:00:00'); // Example: Jan 1, 2025

		function updateClock() {
		const now = new Date();

		// Calculate number of full days passed since the start date
		const timeDiff = startDate.getTime() - now.getTime();
		const daysPassed = Math.floor(timeDiff / (1000 * 60 * 60 * 24));

		// Format time
		const h = now.getHours().toString().padStart(2, '0');
		const m = now.getMinutes().toString().padStart(2, '0');
		const s = now.getSeconds().toString().padStart(2, '0');

		// Update the content in HTML
		document.getElementById('days').textContent = ` ${daysPassed}`;
		document.getElementById('hours').textContent = h;
		document.getElementById('minutes').textContent = m;
		document.getElementById('seconds').textContent = s;
		}

		// Call every second
		setInterval(updateClock, 1000);
		updateClock(); // Initial call to avoid 1s delay


		jQuery('.hide_show_text_field').change(function() {
			if($(this).val() == "Other") {
				
				$(this).parent().parent().children(".contact-info").show();
			} else {
				$(this).parent().parent().children(".contact-info").hide();
			}
			
		});

		jQuery(".creative_register_btn").on('click',function() {
			jQuery(this).parent().parent().parent().hide()			
			jQuery(".register_cta_content").hide();
			jQuery(".ad_banner_form_wrapeer").show();
		});

		jQuery(".form_step_btn").on("click",function() {
			jQuery(".field_step_1").hide();
			jQuery(".field_step_2").show();
			jQuery("button.submit_classroom_lead_generation_form.form_step_1").show();
		})
	});
    </script>
</body>