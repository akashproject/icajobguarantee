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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
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
                                    <a href="{{ route('student-enquiry-form') }}"  class="wizerd_header form-wizard-steps {{ ($step == null)?'active':'' }}">
                                        <span>1.</span>
                                        <h4>Check Courses</h4>
                                    </a>
                                    <a href="{{ route('student-enquiry-form-with-slug',1) }}" class="wizerd_header form-wizard-steps {{ ($step == '1')?'active':'' }}" >
                                        <span>2.</span>
                                        <h4>Educational Information</h4>
                                    </a>
                                    <a href="{{ route('student-enquiry-form-with-slug',2) }}"  class="wizerd_header form-wizard-steps {{ ($step == '2')?'active':'' }}">
                                        <span>3.</span>
                                        <h4>Professional Information</h4>
                                    </a>
                                    <a href="{{ route('student-enquiry-form-with-slug',3) }}" class="wizerd_header form-wizard-steps {{ ($step == '3')?'active':'' }}" >
                                        <span>2.</span>
                                        <h4>Personal Information</h4>
                                    </a>
                                    <a href="{{ route('student-enquiry-form-with-slug',4) }}"  class="wizerd_header form-wizard-steps {{ ($step == '4')?'active':'' }}">
                                        <span>4.</span>
                                        <h4>ICA Details</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-8" >
                                <form id="global_other_details_form" class="contact_form lead_form" action="{{ url('enquiry-form-submit') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                    <div class="wizerd_group my-3" >
                                        @switch($step)
                                        @case(null)
                                        <div class="wizerd_set active" >
                                            <div class="wizerd_welcome_screen" >
                                                <h1 >WELCOME TO<br> ICA EDU Skills</h1>
                                                <div class="text-center subheading mt-6">
                                                    <h3>May I Know what are you Looking for</h3>
                                                </div>
                                                <div class="course_selection">
                                                    <div style="width: 50%;overflow: hidden;padding: 10px 15px;text-align: center;">
                                                        <label for="career_course"  class="couse_input_label"> 
                                                            <span class="" >Job Oriented Courses</span>
                                                        </label>
                                                        <input type="radio" id="career_course" name="course_type" value="career_course" class="couse_input wizard-required" required>
                                                    </div>
                                                    <div style="width: 50%;overflow: hidden;padding: 10px 15px;text-align: center;">
                                                        <label for="skill_course" class="couse_input_label"> 
                                                            <span class="" >Skill Development Courses</span>
                                                        </label>
                                                        <input type="radio" id="skill_course" name="course_type" value="skill_course" class="couse_input wizard-required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wizerd_fieldset" >
                                                <h3 class="heading"> Please select course</h3>
                                                <ul class="list-group list-group-light course_list career_course">
                                                    <li class="list-group-item">
                                                        <input id="accounting_course" name="course[]" class="form-check-input me-1" type="checkbox" value="Accounts & Taxation" aria-label="..." />
                                                        <label for="accounting_course" class="ml-2" > Accounts & Taxation </label>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <input id="mis_course" name="course[]" class="form-check-input me-1" type="checkbox" value="MIS & Data Analytics" aria-label="..." />
                                                        <label for="mis_course" class="ml-2" > MIS & Data Analytics  </label>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <input id="mis_course" name="course[]" class="form-check-input me-1" type="checkbox" value="Capital Market & Investment" aria-label="..." />
                                                        <label for="mis_course" class="ml-2" > Capital Market & Investment  </label>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <input id="digital_marketing" name="course[]" class="form-check-input me-1" type="checkbox" value="Digital marketing" aria-label="..." />
                                                        <label for="digital_marketing" class="ml-2" > Digital marketing  </label>
                                                    </li>
                                                </ul>
                                                <ul class="list-group list-group-light course_list skill_course">
                                                    <li class="list-group-item">
                                                        <input id="tally" name="course[]" class="form-check-input me-1" type="checkbox" value="Tally" aria-label="..." />
                                                        <label for="tally" class="ml-2" > Tally </label>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <input id="business_computer_applications" name="course[]" class="form-check-input me-1" type="checkbox" value="Business Computer Applications" aria-label="..." />
                                                        <label for="business_computer_applications" class="ml-2" >Business Computer Applications</label>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <input id="soft_skill" name="course[]" class="form-check-input me-1" type="checkbox" value="Soft skill and interviews skills" aria-label="..." />
                                                        <label for="soft_skill" class="ml-2" >Soft skill and interviews skills</label>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <input id="gst" name="course[]" class="form-check-input me-1" type="checkbox" value="GST" aria-label="..." />
                                                        <label for="gst" class="ml-2" >GST</label>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <input id="income_tax" name="course[]" class="form-check-input me-1" type="checkbox" value="income Tax" aria-label="..." />
                                                        <label for="income_tax" class="ml-2" >income Tax</label>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <input id="tds" name="course[]" class="form-check-input me-1" type="checkbox" value="TDS" aria-label="..." />
                                                        <label for="tds" class="ml-2" >TDS</label>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <input id="finalisation" name="course[]" class="form-check-input me-1" type="checkbox" value="Advance accounts - Finalisation and profit screening" aria-label="..." />
                                                        <label for="finalisation" class="ml-2" >Advance accounts - Finalisation and profit screening</label>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <input id="sap" name="course[]" class="form-check-input me-1" type="checkbox" value="SAP" aria-label="..." />
                                                        <label for="sap" class="ml-2" >SAP</label>
                                                    </li>
                                                </ul>
                                                <div class="form-group clearfix  mt-3">
                                                    <button type="submit" class="form-wizard-next-btn float-right">Next</button>
                                                </div>
                                            </div>
                                        </div>
                                        @break
                                        @case(1)
                                        <!-- Qualification -->
                                        <div class="wizerd_set" >
                                            <div class="wizerd_welcome_screen" >
                                                <div class="welcome_message text-center">
                                                    <h2>Let Talk About Your Educational qualification</h2>
                                                </div>
                                                <div class="nws-button text-center white text-capitalize">
                                                    <button class="conversational_init-btn" type="button">
                                                        Lets Chat <i class="fas fa-arrow-right"> </i> 
                                                    </button> 
                                                    <img src="https://www.icacourse.in/wp-content/themes/scriptcrown/images/loader.gif" style="width: 42px; display:none;" class="checkout_loader">
                                                </div> 
                                            </div>
                                            <div class="wizerd_fieldset" >
                                                <div class="text-center">
                                                    <h3 class="heading">Tell me about your qualification</h3>
                                                </div>
                                                
                                                <div class="row" > 
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldPassingYear">
                                                            <label class="mb-0" style="color: #403c9c;font-weight: 600;"> May I know Last Qualification </label>
                                                            <input id="formFieldPassingYear" name="qualification" type="text" placeholder="Enter Last Qualification" autocomplete="off" required class="wizard-required">
                                                        </div>
                                                    </div>
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldPassingYear">
                                                            <label class="mb-0" style="color: #403c9c;font-weight: 600;"> May I know Passing Year </label>
                                                            <input id="formFieldPassingYear" name="passing_year" type="month" placeholder="Enter Passing Year" autocomplete="off" required class="wizard-required">
                                                        </div>
                                                    </div>
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldInstitute">
                                                            <label class="mb-0" style="color: #403c9c;font-weight: 600;"> From Which College/University Your are passing </label>
                                                            <input id="formFieldInstitute" name="institute" type="text" placeholder="Enter Passing Collage/University" autocomplete="off" required class="wizard-required">
                                                        </div>
                                                    </div>
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldLanguage">
                                                            <select id="formFieldLanguage" class="language" name="language" required class="wizard-required">
                                                                <option value="">What is your preferred language for the training</option>
                                                                <option value="English"> English </option>
                                                                <option value="Bengali"> Bengali </option>
                                                                <option value="Hindi"> Hindi </option>
                                                                <option value="Odia"> Odia </option>
                                                                <option value="Marathi"> Marathi </option>
                                                                <option value="Telugu"> Telugu </option>
                                                                <option value="Tamil"> Tamil </option>
                                                                <option value="Assamese"> Assamese </option>
                                                                <option value="Kannada"> Kannada </option>
                                                                <option value="Punjabi"> Punjabi </option>
                                                                <option value="Gujarati"> Gujarati </option>
                                                                <option value="Malayali"> Malayali </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group clearfix  mt-3">
                                                    <button href="javascript:;" class="form-wizard-next-btn float-right">Next</button>
                                                </div>
                                            </div>
                                        </div>
                                        @break
                                        @case(2)
                                        <!-- Work Experience -->
                                        <div class="wizerd_set" >
                                            <div class="wizerd_welcome_screen" >
                                                <div class="welcome_message text-center">
                                                    <h2>Let Talk About Your work experience</h2>
                                                </div>
                                                <div class="nws-button text-center white text-capitalize">
                                                    <button class="conversational_init-btn" type="button">
                                                        Lets Chat <i class="fas fa-arrow-right"> </i> 
                                                    </button> 
                                                    <img src="https://www.icacourse.in/wp-content/themes/scriptcrown/images/loader.gif" style="width: 42px; display:none;" class="checkout_loader">
                                                </div> 
                                            </div>
                                            <div class="wizerd_fieldset" >
                                                <h3 class="heading">Tell me something about yourself</h3>
                                                <div class="row" > 
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldOccupation">
                                                            <select id="formFieldOccupation" class="occupation" name="occupation" required class="wizard-required">
                                                                <option value="">Select Occupation</option>
                                                                <option value="student"> Student </option>
                                                                <option value="private_service"> Working On Private Sector </option>
                                                                <option value="govt_service"> Working On Govt Job </option>
                                                                <option value="business"> Own Business </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldOccupation">
                                                            <select id="formFieldOccupation" class="occupation" name="occupation" required class="wizard-required">
                                                                <option value="">Are you doing any other course</option>
                                                                <option value="CA"> CA </option>
                                                                <option value="CS"> CS </option>
                                                                <option value="CMA"> CMA </option>
                                                                <option value="MBA"> MBA </option>
                                                                <option value="Bank PO / clerical"> Bank PO / clerical </option>
                                                                <option value="Govt JOB / railways">Govt JOB / railways</option>
                                                                <option value="Others">Others</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldOccupation">
                                                            <select id="formFieldOccupation" class="occupation" name="occupation" required class="wizard-required">
                                                                <option value="">Any Location preference</option>
                                                                <option value="Same city"> Same city </option>
                                                                <option value="Same state"> Same state </option>
                                                                <option value="Anywhere in india"> Anywhere in india </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group clearfix  mt-3">
                                                    <button href="javascript:;" class="form-wizard-next-btn float-right">Next</button>
                                                </div>
                                            </div>
                                        </div>
                                        @break
                                        @case(3)
                                        <!-- Personal Experience -->
                                        <div class="wizerd_set active" >
                                            <div class="wizerd_welcome_screen" >
                                                <div class="welcome_message text-center">
                                                    <h2>Let Talk About Your Personal Infomation</h2>
                                                </div>
                                                <div class="nws-button text-center white text-capitalize">
                                                    <button class="conversational_init-btn" type="button">
                                                        Lets Chat <i class="fas fa-arrow-right"> </i> 
                                                    </button> 
                                                    <img src="https://www.icacourse.in/wp-content/themes/scriptcrown/images/loader.gif" style="width: 42px; display:none;" class="checkout_loader">
                                                </div> 
                                            </div>
                                            <div class="wizerd_fieldset" >
                                                <h3 class="heading">Tell Me something about yourself</h3>
                                                <div class="row" > 
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldName">
                                                            <input id="formFieldName" name="name" type="text" placeholder="May I know your full name?" autocomplete="off" required class="wizard-required">
                                                            <div class="wizard-form-error"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldEmail">
                                                            <input id="formFieldEmail" name="email" type="email" placeholder="Share Your Email ID" autocomplete="off" required class="wizard-required">
                                                        </div>
                                                    </div>
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldMobile">
                                                            <input id="formFieldMobile" name="mobile" type="number" placeholder="Enter Your Mobile" autocomplete="off" min="6000000000" max="9999999999" required class="wizard-required">
                                                        </div>
                                                    </div>
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldDob">
                                                            <label > May I know your Birthday </label>
                                                            <input id="formFieldDob" name="dob" type="date" placeholder="Enter Date of Birth" autocomplete="off" required class="wizard-required">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12" >
                                                        <div class="contact-info formFieldAddress">
                                                            <input id="formFieldAddress" name="address" type="text" placeholder="Enter Your Address" autocomplete="off" required class="wizard-required">
                                                        </div>
                                                    </div>
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldPincode">
                                                            <input id="formFieldPincode" name="pincode" type="text" placeholder="Enter Your Pincode" autocomplete="off" required class="wizard-required">
                                                        </div>
                                                    </div>
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldCity">
                                                            <input id="formFieldCity" name="city" type="text" placeholder="Enter Your City" autocomplete="off" required class="wizard-required">
                                                        </div>
                                                    </div>
                                                    <div class="col-12" >
                                                        <div class="register-form-area">
                                                            <select id="formFieldState" class="state" name="state" required class="wizard-required">
                                                                <option value="">Select state</option>
                                                                @foreach(getStates() as $state)
                                                                <option value="{{ $state->name }}"> {{ $state->name }} </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="heading">Guardian Details</h3>
                                                <div class="row" > 
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldParentName">
                                                            <input id="formFieldParentName" name="parent_name" type="text" placeholder="Enter Father/Mother/Gurdian's Name" autocomplete="off">
                                                        </div>
                                                    </div>
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldParentMobile">
                                                            <input id="formFieldParentMobile" name="parent_mobile" type="number" placeholder="Gurdian's Mobile Number" autocomplete="off" min="6000000000" max="9999999999">
                                                        </div>
                                                    </div>
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldParentEmail">
                                                            <input id="formFieldParentEmail" name="parent_email" type="email" placeholder="Gurdian's Email Address" autocomplete="off">
                                                        </div>
                                                    </div>
                                                    <div class="col-12" >
                                                        <div class="formFieldParentOccupation">
                                                            <label for="business" class="occupation_wrap" >
                                                                <input name="parent_occupation" class="parent_occupation" id="business" type="radio" autocomplete="off" value="Business" style="vertical-align: middle;">My Parent Doing Business
                                                            </label>

                                                            <label for="service" class="occupation_wrap" >
                                                                <input name="parent_occupation"  class="parent_occupation" id="service" type="radio" autocomplete="off" value="Service" style="vertical-align: middle;"> My Parent Doing Service
                                                            </label>
                                                                
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group clearfix  mt-3">
                                                    <button href="javascript:;" class="form-wizard-next-btn float-right">Next</button>
                                                </div>
                                            </div>
                                        </div>
                                        @break
                                        @case(4)
                                        <!-- Know ICA -->
                                        <div class="wizerd_set" >
                                            <div class="wizerd_welcome_screen" >
                                                <div class="welcome_message text-center">
                                                    <h2>From where you heard about ICA</h2>
                                                </div>
                                                <div class="nws-button text-center white text-capitalize">
                                                    <button class="conversational_init-btn" type="button">
                                                        Lets Chat <i class="fas fa-arrow-right"> </i> 
                                                    </button> 
                                                    <img src="https://www.icacourse.in/wp-content/themes/scriptcrown/images/loader.gif" style="width: 42px; display:none;" class="checkout_loader">
                                                </div> 
                                            </div>
                                            <div class="wizerd_fieldset" >
                                                <ul class="list-group list-group-light">
                                                    <li class="list-group-item">
                                                        <input id="friend" class="form-check-input me-1" type="checkbox" value="Friend" aria-label="..." />
                                                        <label for="friend" class="ml-2" > Friend </label>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <input id="teacher" class="form-check-input me-1" type="checkbox" value="Teacher" aria-label="..." />
                                                        <label for="teacher" class="ml-2" > Teacher  </label>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <input id="advertisement" class="form-check-input me-1" type="checkbox" value="Advertisement" aria-label="..." />
                                                        <label for="advertisement" class="ml-2" > Advertisement  </label>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <input id="social_media" class="form-check-input me-1" type="checkbox" value="Social media" aria-label="..." />
                                                        <label for="social_media" class="ml-2" > Social media </label>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <input id="google" class="form-check-input me-1" type="checkbox" value="Google" aria-label="..." />
                                                        <label for="google" class="ml-2" >Google</label>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <input id="Seminar" class="form-check-input me-1" type="checkbox" value="Seminar" aria-label="..." />
                                                        <label for="Seminar" class="ml-2" >Seminar</label>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <input id="employers" class="form-check-input me-1" type="checkbox" value="Employers" aria-label="..." />
                                                        <label for="employers" class="ml-2" >Employers</label>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <input id="ca" class="form-check-input me-1" type="checkbox" value="CA" aria-label="..." />
                                                        <label for="ca" class="ml-2" >CA</label>
                                                    </li>
                                                </ul>
                                                <div class="nws-button text-center white text-capitalize mt-5">
                                                    <button class="conversational_init-btn" type="submit">
                                                        Submit Form
                                                    </button> 
                                                    <img src="https://www.icacourse.in/wp-content/themes/scriptcrown/images/loader.gif" style="width: 42px; display:none;" class="checkout_loader">
                                                </div> 
                                            </div>
                                        </div>
                                        @break
                                        @endswitch
                                        <input name="center_id" type="hidden" value="{{ $center }}" >
                                        <input name="enquiry" type="hidden" value="{{ $enquiry }}" >
                                        <div class="nws-button text-center white text-capitalize py-5" style="display:none">
                                            <button class="submit_classroom_lead_generation_form form_step_1" type="submit">
                                                Next <i class="fas fa-arrow-right"> </i> 
                                            </button>
                                            <img src="https://www.icacourse.in/wp-content/themes/scriptcrown/images/loader.gif" style="width: 42px; display:none;" class="checkout_loader">
                                        </div>
                                    </div>
                                    <input name="step" type="hidden" value="{{ $step }}" >
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
        <script src="{{ url('assets/js/enquiry-form.js') }}"></script>
    </body>
</html>