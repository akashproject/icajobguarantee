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
        <style>
            .wizerd_header.active h4 {
                color: #fff;
            }
        </style>
    </head>
    <body class="{{ isset($contentMain->template)?$contentMain->template:'default-template' }}">
        @php
            $previousStep = null;
            if($step > 1) {
                $previousStep = $step - 1;
            }
        @endphp
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
        <section>
            <div class="container">
                <div class="row justify_center">	
                    <div class="col-md-12">
                       
                        <div class="row">
                            <div class="col-md-4" >
                                <div class="form_wizerd_header form-wizard-panel"> 
                                    <a href="javascript:void(0)"  class="wizerd_header form-wizard-steps {{ ($step == null)?'active':'' }}">
                                        <span>1.</span>
                                        <h4 >Check Requirement</h4>
                                    </a>
                                    <a href="javascript:void(0)" class="wizerd_header form-wizard-steps {{ ($step == '1')?'active':'' }}" >
                                        <span>2.</span>
                                        <h4>Educational Information</h4>
                                    </a>
                                    <a href="javascript:void(0)"  class="wizerd_header form-wizard-steps {{ ($step == '2')?'active':'' }}">
                                        <span>3.</span>
                                        <h4>Professional Information</h4>
                                    </a>
                                    <a href="javascript:void(0)" class="wizerd_header form-wizard-steps {{ ($step == '3')?'active':'' }}" >
                                        <span>4.</span>
                                        <h4>Personal Information</h4>
                                    </a>
                                    <a href="javascript:void(0)"  class="wizerd_header form-wizard-steps {{ ($step == '4')?'active':'' }}">
                                        <span>5.</span>
                                        <h4>Aspirational Details</h4>
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
                                                            <span class="" >Job</span>
                                                        </label>
                                                        <input type="radio" id="career_course" name="course_type" value="career_course" class="couse_input wizard-required" required>
                                                    </div>
                                                    <div style="width: 50%;overflow: hidden;padding: 10px 15px;text-align: center;">
                                                        <label for="skill_course" class="couse_input_label"> 
                                                            <span class="" >Skill Development</span>
                                                        </label>
                                                        <input type="radio" id="skill_course" name="course_type" value="skill_course" class="couse_input wizard-required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wizerd_fieldset" >
                                                <div class="course_group" style="display:none;">
                                                    <h3 class="heading">Please select course</h3>
                                                    @foreach($courseByCategory as $key => $category)
                                                    <ul class="list-group list-group-light course_list {{$key}}">
                                                        @foreach($category as $childKey => $course)
                                                        <li class="list-group-item">
                                                            <label for="{{$key}}_{{$childKey}}" class="ml-2 list-group-item-label" > 
                                                                    <input id="{{$key}}_{{$childKey}}" name="course[]" class="form-check-input me-1" type="checkbox" value="{{$course}}" aria-label="..." /> {{ $course }}
                                                            </label>
                                                        </li>
                                                        
                                                        @endforeach
                                                    </ul>
                                                    @endforeach
                                                </div>
                                                <div class="form-group clearfix  mt-3">
                                                    <button type="submit" class="form-wizard-next-btn float-right">Next</button>
                                                </div>
                                            </div>
                                        </div>
                                        @break
                                        @case(1)
                                        <!-- Qualification -->
                                        <div class="wizerd_set" >
                                            <!-- <div class="wizerd_welcome_screen" >
                                                <div class="welcome_message text-center">
                                                    <h2>Let Talk About Your Educational qualification</h2>
                                                </div>
                                                <div class="nws-button text-center white text-capitalize">
                                                    <button class="conversational_init-btn" type="button">
                                                        Lets Chat <i class="fas fa-arrow-right"> </i> 
                                                    </button> 
                                                    <img src="https://www.icacourse.in/wp-content/themes/scriptcrown/images/loader.gif" style="width: 42px; display:none;" class="checkout_loader">
                                                </div> 
                                            </div> -->
                                            <div class="wizerd_fieldset" >
                                                <div class="text-center">
                                                    <h3 class="heading">Tell me about your qualification</h3>
                                                </div>
                                                
                                                <div class="row" > 
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldHighestQualification">
                                                            <label class="mb-0" style="color: #403c9c;font-weight: 600;"> What is your highest Qualification?  </label>
                                                            <select id="formFieldHighestQualification" class="qualification" name="qualification" required class="wizard-required">
                                                                <option value=""> Select Qualification</option>
                                                                <option value="10+2"> 10+2 </option>
                                                                <option value="B.Com"> B.Com </option>
                                                                <option value="B.Sc"> B.Sc </option>
                                                                <option value="BA"> BA </option>
                                                                <option value="BBA"> BBA </option>
                                                                <option value="BCA"> BCA </option>
                                                                <option value="MBA"> MBA </option>
                                                                <option value="MCA"> MCA </option>
                                                                <option value="M.Com"> M.Com </option>
                                                                <option value="MA"> MA </option>
                                                                <option value="M.Sc"> M.Sc </option>
                                                                <option value="Others"> Others </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12" >
                                                        <div class="row" >
                                                            <div class="col-6" >
                                                                <div class="contact-info formFieldPassingYear">
                                                                    <label class="mb-0" style="color: #403c9c;font-weight: 600;"> Please specify your year of passing </label>
                                                                    <select id="formFieldPassingYear" class="passing_year" name="passing_year" required class="wizard-required">
                                                                        <option value=""> Select Month</option>
                                                                        <option value="January">January</option>
                                                                        <option value="February">February</option>
                                                                        <option value="March">March</option>
                                                                        <option value="April">April</option>
                                                                        <option value="May">May</option>
                                                                        <option value="June">June</option>
                                                                        <option value="July">July</option>
                                                                        <option value="August">August</option>
                                                                        <option value="September">September</option>
                                                                        <option value="October">October</option>
                                                                        <option value="November">November</option>
                                                                        <option value="December">December</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-6" >
                                                                <label class="mb-0" style="color: #403c9c;font-weight: 600;">  </label>
                                                                <select id="formFieldPassingYear" class="passing_year" name="passing_year" required class="wizard-required">
                                                                    <option value=""> Select Year</option>
                                                                    @for ($year = now()->year; $year >= 1980; $year--)
                                                                        <option value="{{ $year }}">{{ $year }}</option>
                                                                    @endfor
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldInstitute">
                                                            <label class="mb-0" style="color: #403c9c;font-weight: 600;">Mention your College/university. </label>
                                                            <input id="formFieldInstitute" name="institute" type="text" placeholder="Enter Passing Collage/University" autocomplete="off" required class="wizard-required">
                                                        </div>
                                                    </div>
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldLanguage">
                                                            <select id="formFieldLanguage" class="language" name="language" required class="wizard-required">
                                                                <option value="">What is your preferred language for the training</option>
                                                                <option value="English"> English </option>
                                                                <option value="Hindi"> Hindi </option>
                                                                <option value="Local"> Local </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group clearfix  mt-3"> 
                                                    <a href="{{ route('student-enquiry-form',[$previousStep,'center'=>$center,'enquiry'=>base64_encode($enquiry)]) }}" class="form-wizard-previous-btn float-left">Previous</a> 
                                                    <button type="submit" class="form-wizard-next-btn float-right">Next</button>
                                                </div>
                                            </div>
                                        </div>
                                        @break
                                        @case(2)
                                        <!-- Work Experience -->
                                        <div class="wizerd_set" >
                                            <div class="wizerd_fieldset" >
                                                <h3 class="heading">Tell me something about yourself</h3>
                                                <div class="row" > 
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldIsWorkExperience">
                                                            <select id="formFieldIsWorkExperience" class="is_work_experience" name="is_work_experience" required class="wizard-required">
                                                                <option value="">Do you have any work experience? </option>
                                                                <option value="Yes"> Yes </option>
                                                                <option value="No"> No </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-12" >
                                                        <span style="font-size: 12px;">*If you don’t have any work experience, you can skip the job role section.</span>
                                                        <div class="contact-info formFieldJobRole">
                                                            <div class="add_more_job_role">
                                                                <div class="row">
                                                                    <div class="col-md-8">
                                                                        <input id="formFieldJobRole" name="job_role[]" type="text" placeholder="What is your job role?" autocomplete="off" class="wizard-required job_role_elem">
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input id="formFieldJobRoleTimePeriod" name="job_role_time[]" type="text" placeholder="Total Years" autocomplete="off" class="wizard-required job_role_elem">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <span style="font-size: 12px;">*If you have multiple job roles, click <a href="javascript:void(0)" class="add_more_role_btn">Add More</a> to include them all.</span>
                                                            <div class="wizard-form-error"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldprofessionalCourses">
                                                            <label class="mb-0" style="color: #403c9c;font-weight: 600;"> Have you completed or are you currently pursuing any other professional courses? [If yes, please specify.] </label>
                                                            <input id="formFieldprofessionalCourses" name="professional_courses" type="text" placeholder="Enter your professional course" autocomplete="off" required class="wizard-required">
                                                            <div class="wizard-form-error"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group clearfix  mt-3">
                                                    <a href="{{ route('student-enquiry-form-with-slug',[$previousStep,'center'=>$center,'enquiry'=>base64_encode($enquiry)]) }}" class="form-wizard-previous-btn float-left">Previous</a> 
                                                    <button class="form-wizard-next-btn float-right">Next</button>
                                                </div>
                                            </div>
                                        </div>
                                        @break
                                        @case(3)
                                        <!-- Personal Experience -->
                                        <div class="wizerd_set active" >
                                            <div class="wizerd_fieldset" >
                                                <h3 class="heading">Tell Me something about yourself</h3>
                                                <div class="row" > 
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldName">
                                                            <input id="formFieldName" name="name" type="text" placeholder="What is your name?" autocomplete="off" required class="wizard-required">
                                                            <div class="wizard-form-error"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldEmail">
                                                            <input id="formFieldEmail" name="email" type="email" placeholder="Please mention your email id." autocomplete="off" required class="wizard-required">
                                                        </div>
                                                    </div>
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldMobile">
                                                            <input id="formFieldMobile" name="mobile" type="number" placeholder="Please mention your mobile number" autocomplete="off" min="6000000000" max="9999999999" required class="wizard-required">
                                                        </div>
                                                    </div>
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldDob">
                                                            <label class="mb-0" style="color: #403c9c;font-weight: 600;">May I know your Birthday </label>
                                                            <input id="formFieldDob" name="dob" type="date" placeholder="Enter Date of Birth" autocomplete="off" required class="wizard-required" min="1970-01-01" max="2018-12-31">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12" >
                                                        <div class="contact-info formFieldAddress">
                                                            <input id="formFieldAddress" name="address" type="text" placeholder="Enter Your Address" autocomplete="off" required class="wizard-required">
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
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldCity">
                                                            <input id="formFieldCity" name="city" type="text" placeholder="Enter Your City" autocomplete="off" required class="wizard-required">
                                                        </div>
                                                    </div>
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldPincode">
                                                            <input id="formFieldPincode" name="pincode" type="text" placeholder="Enter Your Pincode" autocomplete="off" required class="wizard-required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <h3 class="heading">Guardian Details</h3>
                                                <div class="row" > 
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldFatherName">
                                                            <input id="formFieldFatherName" name="father_name" type="text" placeholder="What is your father’s name?" autocomplete="off">
                                                        </div>
                                                    </div>
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldFatherOccupation">
                                                            <select id="formFieldFatherOccupation" class="father_occupation" name="father_occupation" required class="wizard-required">
                                                                <option value="">What is his occupation?</option>
                                                                <option value="Business">Business</option>
                                                                <option value="Govt. Employee">Govt. Employee</option>
                                                                <option value="Private Employee">Private Employee</option>
                                                                <option value="Self Employed">Self Employed</option>
                                                                <option value="Agriculture">Agriculture</option>
                                                                <option value="Retired">Retired</option>
                                                                <option value="Others">Others</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldMotherName">
                                                            <input id="formFieldMotherName" name="mother_name" type="text" placeholder="What is your mother’s name?" autocomplete="off">
                                                        </div>
                                                    </div>
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldMotherOccupation">
                                                            <select id="formFieldMotherOccupation" class="mother_occupation" name="mother_occupation" required class="wizard-required">
                                                                <option value="">What is her occupation?</option>
                                                                <option value="House Wife">House Wife</option>
                                                                <option value="Business">Business</option>
                                                                <option value="Govt. Employee">Govt. Employee</option>
                                                                <option value="Private Employee">Private Employee</option>
                                                                <option value="Self Employed">Self Employed</option>
                                                                <option value="Agriculture">Agriculture</option>
                                                                <option value="Retired">Retired</option>
                                                                <option value="Others">Others</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldParentMobile">
                                                            <input id="formFieldParentMobile" name="parent_mobile" type="number" placeholder="Mention your guardian’s mobile no" autocomplete="off" min="6000000000" max="9999999999">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="lead_steps step2">
                                                    <div class="otp-content">
                                                        <h4 class="otp-heading"> OTP Verification </h4>
                                                        <p class="message"> <span class="message"> Enter the OTP you receive at </span> +91 XXXXXX<span class="lastDigit"></span> <span class="changeGivenNumber"> (Change) </span> </p>
                                                        <p class="response_status" style="color: #000;"></p>
                                                    </div> 
                                                    <div class="contact-info">
                                                        <input class="verify_otp" name="verify_otp" type="text" placeholder="Enter One Time Password" autocomplete="off">
                                                    </div>
                                                    <div class="otp-content">
                                                        <p class="message"> Did not receive OTP?
                                                            <span class="countdown_label"> Resend in <span class="countdown" >59</span> Sec </span>
                                                            <a class="resendOtp display-none" href="javascript:void(0)"> Resend OTP </a>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="form-group clearfix  mt-3">
                                                    <a href="{{ route('student-enquiry-form-with-slug',[$previousStep,'center'=>$center,'enquiry'=>base64_encode($enquiry)]) }}" class="form-wizard-previous-btn float-left">Previous</a> 
                                                    <button id="onClickSendOtp" class="form-wizard-next-btn float-right">Next</button>
                                                </div>
                                            </div>
                                        </div>
                                        @break
                                        @case(4)
                                        <!-- Know ICA -->
                                        <div class="wizerd_set" >
                                            <!-- <div class="wizerd_welcome_screen" >
                                                <div class="welcome_message text-center">
                                                    <h2>Tel Us about your goal</h2>
                                                </div>
                                                <div class="nws-button text-center white text-capitalize">
                                                    <button class="conversational_init-btn" type="button">
                                                        Lets Chat <i class="fas fa-arrow-right"> </i> 
                                                    </button> 
                                                    <img src="https://www.icacourse.in/wp-content/themes/scriptcrown/images/loader.gif" style="width: 42px; display:none;" class="checkout_loader">
                                                </div> 
                                            </div> -->
                                            <div class="wizerd_fieldset" >
                                                <h3 class="heading">Tell Me something about goal</h3>
                                                <div class="row" > 
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldNextGoal">
                                                            <label class="mb-0" style="color: #403c9c;font-weight: 600;"> What is your expected current salary</label>
                                                            <input id="formFieldNextGoal" name="starting_salary" type="number" autocomplete="off" required class="wizard-required">
                                                            <div class="wizard-form-error"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldNextGoal">
                                                            <label class="mb-0" style="color: #403c9c;font-weight: 600;"> Expected starting salary after 5 Years</label>
                                                            <input id="formFieldNextGoal" name="next_goal" type="text" autocomplete="off" required class="wizard-required">
                                                            <div class="wizard-form-error"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldExpectedCtc">
                                                            <label class="mb-0" style="color: #403c9c;font-weight: 600;"> What is your expected monthly CTC</label>
                                                            <input id="formFieldExpectedCtc" name="expected_ctc" type="number" autocomplete="off" required class="wizard-required">
                                                            <div class="wizard-form-error"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldlocationPrefarence">
                                                            <label class="mb-0" style="color: #403c9c;font-weight: 600;"> Do you have any location preference for placement? [If yes, please specify]</label>
                                                            <div>
                                                            <span><input type="radio" name="location_prefarence" value="same city" checked> Same City </span>
                                                            <span><input type="radio" name="location_prefarence" value="same State"> Same State </span>
                                                            <span><input type="radio" name="location_prefarence" value="Anywhere in India"> Anywhere in India </span>
                                                            <span><input type="radio" name="location_prefarence" value="Anywhere in World"> Anywhere in World </span>
                                                            </div>
                                                            <div class="wizard-form-error"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group clearfix  mt-3">
                                                    <a href="{{ route('student-enquiry-form-with-slug',[$previousStep,'center'=>$center,'enquiry'=>base64_encode($enquiry)]) }}" class="form-wizard-previous-btn float-left">Previous</a> 
                                                    <button href="javascript:;" class="form-wizard-next-btn float-right">Submit Form</button>
                                                </div>
                                            </div>
                                        </div>
                                        @break
                                        @endswitch
                                        <input name="center_id" type="hidden" value="{{ $center }}" >
                                        <input name="enquiry" type="hidden" value="{{ $enquiry }}" >
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
        <script src="{{ url('assets/js/ad.js') }}"></script>
        <script src="{{ url('assets/js/enquiry-form.js') }}"></script>
    </body>
</html>