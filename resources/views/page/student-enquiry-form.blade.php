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
        <meta property="og:site_name" content="ICA Edu Skills" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="{{ isset($contentMain->title)?$contentMain->title:'' }}" />
        <meta property="og:description" content="{{ isset($contentMain->meta_description)?$contentMain->meta_description:'' }}" />
        <meta property="og:url" content="https://www.icajobguarantee.com/" />
        <meta property="og:image" content="https://www.facebook.com/ICAJobguarantee" />
        <meta property="og:image:secure_url" content="https://www.facebook.com/ICAJobguarantee" />
        <meta property="og:video" content="https://www.youtube.com/channel/UC6WWqdZzUMAsZqTQHRyEj_A" />
        <meta property="og:video:secure_url" content="https://www.youtube.com/channel/UC6WWqdZzUMAsZqTQHRyEj_A" />
        <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}">
        <link href="{{ url('assets/css/fontawesome-all.css') }}" rel="stylesheet">
        <link href="{{ url('assets/css/flaticon.css') }}" rel="stylesheet">
        <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ url('assets/css/ads.css') }}" rel="stylesheet">
        <link href="{{ url('assets/css/responsive.css') }}" rel="stylesheet">
        <link href="{{ url('assets/css/colors/color-7.css') }}" rel="alternate stylesheet" type="text/css" title="color-7">
        <link href="{{ url('assets/css/enquiry-form.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body class="{{ isset($contentMain->template)?$contentMain->template:'default-template' }}">
	<header>
		<div id="main-menu"  class="main-menu-container header-style-2">
			<div class="header-top">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6">
							
						</div>
						<div class="col-md-6 top-right-bar">
							<div class="header-top-bar ul-li">
								<ul>
									<li><a href="mailto:{{get_theme_setting('email')}}" ><i class="fas fa-envelope"></i> {{get_theme_setting('email')}}</a></li>
									<li><a href="tel:{{get_theme_setting('mobile')}}" ><i class="fas fa-phone-square"></i> {{get_theme_setting('mobile')}}</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="main-menu">
				<div class="container">
					<div class="navbar-default">
						<div class="navbar-header float-left">
							<a class="navbar-brand text-uppercase" href="javascript:void(0)"><img src="{{ url('assets/images/logo.png') }}" alt="ICA Edu Skills"></a>
								
						</div><!-- /.navbar-header -->						
						
						<!-- Collect the nav links, forms, and other content for toggling -->
						
					</div>
				</div>
			</div>
		</div>
	</header>	
    <!-- Start of Header section
        ============================================= -->
        <section class="header-devider"></section>
        <section class="header-margin"></section>
        <section style="background: #eeeeee;">
            <div class="container">
                <div class="row justify_center">	
                    <div class="col-md-12">
                        <div class="popup-text text-center gradient-bg text-white mb30">
                            <h3 style="text-transform: uppercase;font-size: 25px;">ENQUIRY FORM</h3> 
                        </div>
                        <div class="row">
                            <div class="col-md-4" >
                                <div class="form_wizerd_header form-wizard-panel"> 
                                    <div class="wizerd_header form-wizard-steps {{ ($step == null)?'active':'' }}">
                                        <span>1.</span>
                                        <h4>Check Courses</h4>
                                    </div>
                                    <div class="wizerd_header form-wizard-steps {{ ($step == '1')?'active':'' }}" >
                                        <span>2.</span>
                                        <h4>Qualification</h4>
                                    </div>
                                    <div class="wizerd_header form-wizard-steps {{ ($step == '2')?'active':'' }}">
                                        <span>3.</span>
                                        <h4>Work Experience</h4>
                                    </div>
                                    <div class="wizerd_header form-wizard-steps {{ ($step == '3')?'active':'' }}">
                                        <span>4.</span>
                                        <h4>ICA Details</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8" >
                                <form id="global_other_details_form" class="contact_form lead_form" action="{{ url('enquiry-form-submit') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                    <div class="wizerd_group" >
                                        <div class="wizerd_set active" >
                                            <div class="wizerd_welcome_screen" >
                                                <h1 >WELCOME TO<br> ICA EDU Skills</h1>
                                                <div class="text-center subheading mt-6">
                                                    <h3>May I Know what are you Looking for</h3>
                                                </div>
                                                <div class="course_selection">
                                                    <div style="width: 50%;overflow: hidden;padding: 10px 15px;text-align: center;">
                                                        <label for="career_course"  class="couse_input_label"> 
                                                            <span class="" >Career courses</span>
                                                        </label>
                                                        <input type="radio" id="career_course" name="course_name" value="career_course" class="couse_input wizard-required" required>
                                                    </div>
                                                    <div style="width: 50%;overflow: hidden;padding: 10px 15px;text-align: center;">
                                                        <label for="skill_course" class="couse_input_label"> 
                                                            <span class="" >Skill Developemnt</span>
                                                        </label>
                                                        <input type="radio" id="skill_course" name="course_name" value="skill_course" class="couse_input wizard-required">
                                                    </div>
                                                </div>
                                            <div>
                                            <div class="wizerd_fieldset" >

                                            <div>
                                        </div>
                                        <div class="wizerd_set" >
                                            <div class="wizerd_welcome_screen" >

                                            <div>
                                            <div class="wizerd_fieldset" >

                                            <div>
                                        </div>
                                        <input name="center_id" type="hidden" value="1" >
                                        <div class="nws-button text-center white text-capitalize py-5" style="display:none">
                                            <button class="submit_classroom_lead_generation_form form_step_1" type="submit">
                                                Next <i class="fas fa-arrow-right"> </i> 
                                            </button>
                                            <img src="https://www.icacourse.in/wp-content/themes/scriptcrown/images/loader.gif" style="width: 42px; display:none;" class="checkout_loader">
                                        </div>
                                    </div>
                                </form>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            let globalUrl = "{{ env("APP_URL") }}"
        </script>
        <script src="{{ url('assets/js/jquery-2.1.4.min.js') }}"></script>
        <script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ url('assets/js/enquiry-form.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    </body>
</html>