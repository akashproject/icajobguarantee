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
                    <div class="form-container bg-white" >
                        <div class="gradient-bg"></div>
                        <div class="popup-text text-center gradient-bg text-white mb30">
                            <h3 style="text-transform: uppercase;font-size: 25px;"> ENQUIRY FORM</h3> 
                        </div>
                        <div class="popup_banner_form_wrapeer" > 
                            <div class="row"> 
                                <div class="col-md-4" >
                                    <div class="form_wizerd_header form-wizard-panel"> 
                                        <div class="wizerd_header form-wizard-steps active">
                                            <span>1.</span>
                                            <h4>Personal Details</h4>
                                        </div>
                                        <div class="wizerd_header form-wizard-steps">
                                            <span>2.</span>
                                            <h4>Qualification</h4>
                                        </div>
                                        <div class="wizerd_header form-wizard-steps">
                                            <span>3.</span>
                                            <h4>Work Experience</h4>
                                        </div>
                                        <div class="wizerd_header form-wizard-steps">
                                            <span>4.</span>
                                            <h4>ICA Details</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8" >
                                    <form id="global_other_details_form" class="contact_form lead_form" action="{{ url('enquiry-form-submit') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form_process" >
                                            <div class="conversation_screen">
                                                <div class="welcome_message_wrap screen_1 active"> 
                                                    <div class="welcome_msg_content wizard-fieldset">
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
                                                        <div class="form-wizard-next-btn text-center" style="overflow:hidden">
                                                            <a class="" href="javascript:void(0)">
                                                                Lets Chat <i class="fas fa-arrow-right"> </i> 
                                                            </a>  
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="course_list" class="welcome_message_wrap step_1">
                                                    <h3 class="heading"> Please select course</h3>
                                                    <ul class="list-group list-group-light course_list career_course">
                                                        <li class="list-group-item">
                                                            <input id="accounting_course" class="form-check-input me-1" type="checkbox" value="" aria-label="..." />
                                                            <label for="accounting_course" class="ml-2" > Accounts and taxation </label>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <input id="mis_course" class="form-check-input me-1" type="checkbox" value="" aria-label="..." />
                                                            <label for="mis_course" class="ml-2" > MIS & Data analytics  </label>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <input id="digital_marketing" class="form-check-input me-1" type="checkbox" value="" aria-label="..." />
                                                            <label for="digital_marketing" class="ml-2" > Digital marketing  </label>
                                                        </li>
                                                    </ul>
                                                    <ul class="list-group list-group-light course_list skill_course">
                                                        <li class="list-group-item">
                                                            <input id="tally" class="form-check-input me-1" type="checkbox" value="Tally" aria-label="..." />
                                                            <label for="tally" class="ml-2" > Tally </label>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <input id="business_computer_applications" class="form-check-input me-1" type="checkbox" value="Business Computer Applications" aria-label="..." />
                                                            <label for="business_computer_applications" class="ml-2" >Business Computer Applications</label>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <input id="soft_skill" class="form-check-input me-1" type="checkbox" value="Soft skill and interviews skills" aria-label="..." />
                                                            <label for="soft_skill" class="ml-2" >Soft skill and interviews skills</label>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <input id="gst" class="form-check-input me-1" type="checkbox" value="GST" aria-label="..." />
                                                            <label for="gst" class="ml-2" >GST</label>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <input id="income_tax" class="form-check-input me-1" type="checkbox" value="income Tax" aria-label="..." />
                                                            <label for="income_tax" class="ml-2" >income Tax</label>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <input id="tds" class="form-check-input me-1" type="checkbox" value="TDS" aria-label="..." />
                                                            <label for="tds" class="ml-2" >TDS</label>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <input id="finalisation" class="form-check-input me-1" type="checkbox" value="Advance accounts - Finalisation and profit screening" aria-label="..." />
                                                            <label for="finalisation" class="ml-2" >Advance accounts - Finalisation and profit screening</label>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <input id="sap" class="form-check-input me-1" type="checkbox" value="SAP" aria-label="..." />
                                                            <label for="sap" class="ml-2" >SAP</label>
                                                        </li>
                                                    </ul>
                                                    <div class="form-group clearfix  mt-3">
                                                        <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                                                        <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                                                    </div>
                                                </div>
                                                <div class="welcome_message_wrap screen_5">
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
                                                <div id="personal_details" class="form_section wizard-fieldset step_5">
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
                                                        <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                                                    </div>
                                                </div>
                                                <div class="welcome_message_wrap wizard-fieldset screen_2">
                                                    <div class="welcome_message text-center">
                                                        <h2> Let Talk About Your Qualification</h2>
                                                    </div>
                                                    <div class="nws-button text-center white text-capitalize">
                                                        <button class="conversational_init-btn" type="button">
                                                            Lets Chat <i class="fas fa-arrow-right"> </i> 
                                                        </button> 
                                                        <img src="https://www.icacourse.in/wp-content/themes/scriptcrown/images/loader.gif" style="width: 42px; display:none;" class="checkout_loader">
                                                    </div>   
                                                </div>
                                                <div id="qualification" class="form_section wizard-fieldset step_2">
                                                    <h3 class="heading">  Academic Qualification 
                                                    <span style="font-size: 14px;color: #323232;"><span> </h3>
                                                    <div class="academic_qualification mb-3" >
                                                        <div class="row" > 
                                                            <div class="col-md-4" >
                                                                <div class="contact-info formFieldPassingYear">
                                                                    <input id="formFieldPassingYear" name="qualification[year][]" type="month" placeholder="Passing Year" autocomplete="off">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4" >
                                                                <div class="contact-info formFieldPassingDegree">
                                                                    <select id="formFieldDegree" name="qualification[degree][]" type="text" placeholder="Degree" autocomplete="off">
                                                                        <option value="10+2 - Arts"> 10+2 - Arts </option>
                                                                        <option value="10+2 - Commerce"> 10+2 - Commerce </option>
                                                                        <option value="10+2 - Science"> 10+2 - Science </option>
                                                                        <option value="B.A. - Arts"> B.A. - Arts </option>
                                                                        <option value="B.Com - Commerce"> B.Com - Commerce </option>
                                                                        <option value="B.Com(H) - Commerce"> B.Com(H) - Commerce </option>
                                                                        <option value="B.Ed - Arts"> B.Ed - Arts </option>
                                                                        <option value="B.Sc - Science"> B.Sc - Science </option>
                                                                        <option value="B.Tech - Science"> B.Tech - Science </option>
                                                                        <option value="BBA - Management"> BBA - Management </option>
                                                                        <option value="BCA - Science"> BCA - Science </option>
                                                                        <option value="CA(Final) - Commerce"> CA(Final) - Commerce </option>
                                                                        <option value="CA(Inter) - Commerce"> CA(Inter) - Commerce </option>
                                                                        <option value="CS - Commerce"> CS - Commerce </option>
                                                                        <option value="Graduation"> Graduation </option>
                                                                        <option value="ICWA -Commerce"> ICWA -Commerce </option>
                                                                        <option value="M.A. - Arts"> M.A. - Arts </option>
                                                                        <option value="M.Com - Commerce"> M.Com - Commerce </option>
                                                                        <option value="M.Sc - Science"> M.Sc - Science </option>
                                                                        <option value="MBA - Management"> MBA - Management </option>
                                                                        <option value="MCA - Science"> MCA - Science </option>
                                                                        <option value="Others"> Others </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4" >
                                                                <div class="contact-info formFieldPassingUniversity">
                                                                    <input id="formFieldUniversity" name="qualification[board][]" type="text" placeholder="College/University" autocomplete="off">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6" >
                                                                <div class="contact-info formFieldPassingStream">
                                                                    <input id="formFieldStream" name="qualification[stream][]" type="text" placeholder="Stream" autocomplete="off">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6" >
                                                                <div class="contact-info formFieldPassingMarks">
                                                                    <input id="formFieldMarks" name="qualification[marks][]" type="number" placeholder="Marks (%)" autocomplete="off">
                                                                </div>
                                                            </div>
                                                        </div>  
                                                    </div>  
                                                    <a href="javascript:void(0)" class="btn btn-primary addMoreBtn" data-id="academic_qualification"> Add More </a>
                                                    <div class="bg-gray my-3">    
                                                        <h3 class="heading"> Professional Qualification (If Any)</h3>
                                                        <div class="professional_qualification" >
                                                            <div class="row" > 
                                                                <div class="col-md-6" >
                                                                    <div class="contact-info formFieldProfessionalPassingYear">
                                                                        <input id="formFieldProfessionalPassingYear" name="professional_qualification[][year]" type="number" placeholder="Passing Year" autocomplete="off">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6" >
                                                                    <div class="contact-info formFieldInstituteName">
                                                                        <input id="formFieldInstituteName" name="professional_qualification[][institute]" type="text" placeholder="Enter Institute Name" autocomplete="off">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12" >
                                                                    <div class="contact-info formFieldCourseDetails">
                                                                        <input id="formFieldCourseDetails" name="professional_qualification[][course]" type="text" placeholder="Enter Course Details" autocomplete="off">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="javascript:void(0)" class="btn btn-primary addMoreBtn" data-id="professional_qualification"> Add More </a>
                                                    </div>
                                                    <div class="form-group clearfix  mt-3">
                                                        <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                                                        <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                                                    </div>
                                                </div>
                                                <div class="welcome_message_wrap wizard-fieldset screen_3">
                                                    <div class="welcome_message text-center">
                                                        <h2> Let Talk About Your Work Experience</h2>
                                                    </div>
                                                    <div class="nws-button text-center white text-capitalize">
                                                        <button class="conversational_init-btn" type="button">
                                                            Lets Chat <i class="fas fa-arrow-right"> </i> 
                                                        </button> 
                                                        <img src="https://www.icacourse.in/wp-content/themes/scriptcrown/images/loader.gif" style="width: 42px; display:none;" class="checkout_loader">
                                                    </div>   
                                                </div>
                                                <div id="experience" class="form_section wizard-fieldset step_3">
                                                    <div class="bg-gray my-3">    
                                                        <h3 class="heading"> Work Experience (If Any)</h3>
                                                        <div class="work_experience" >
                                                            <div class="row" > 
                                                                <div class="col-md-6" >
                                                                    <div class="contact-info formFieldPassingYear">
                                                                        <input id="formFieldPassingYear" name="experience[year][]" type="number" placeholder="Joining Year" autocomplete="off">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6" >
                                                                    <div class="contact-info formFieldInstitureName">
                                                                        <input id="formFieldCompanyName" name="experience[company][]" type="text" placeholder="Company Name" autocomplete="off">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6" >
                                                                    <div class="contact-info formFieldResponsibility">
                                                                        <input id="formFieldResponsibility" name="experience[responsibility][]" type="text" placeholder="Work Responsibility" autocomplete="off">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6" >
                                                                    <div class="contact-info formFieldDuration">
                                                                        <input id="formFieldDuration" name="experience[duration][]" type="number" placeholder="Total Experience" autocomplete="off">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6" >
                                                                    <div class="contact-info formFieldSalary">
                                                                        <input id="formFieldSalary" name="experience[][salary]" type="number" placeholder="Work Salary" autocomplete="off">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="javascript:void(0)" class="btn btn-primary addMoreBtn" data-id="work_experience"  > Add More </a>
                                                    </div>
                                                    <div class="form-group clearfix  mt-3">
                                                        <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                                                        <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                                                    </div>
                                                </div>
                                                <div class="welcome_message_wrap wizard-fieldset screen_4">
                                                    <div class="welcome_message text-center">
                                                        <h2> May I know! What you know about ICA</h2>
                                                    </div>
                                                    <div class="nws-button text-center white text-capitalize">
                                                        <button class="conversational_init-btn" type="button">
                                                            Lets Chat <i class="fas fa-arrow-right"> </i> 
                                                        </button> 
                                                        <img src="https://www.icacourse.in/wp-content/themes/scriptcrown/images/loader.gif" style="width: 42px; display:none;" class="checkout_loader">
                                                    </div>   
                                                </div>
                                                <div id="about_ica" class="form_section wizard-fieldset step_4">
                                                    <div class="bg-gray my-3">    
                                                        <h3 class="heading"> Where do you come to know about ICA</h3>
                                                        <div class="row" > 
                                                            <div class="col-md-12" >
                                                                <div class="formFieldKnowAboutIca required wizard-required">
                                                                    <span>
                                                                        <input name="know_from[]" type="checkbox" autocomplete="off" value="Website" > Website
                                                                    </span>
                                                                    <span>
                                                                        <input name="know_from[]" type="checkbox" autocomplete="off" value="Google" > Google
                                                                    </span>
                                                                    <span>
                                                                        <input name="know_from[]" type="checkbox" autocomplete="off" value="Facebook" > Facebook
                                                                    </span>
                                                                    <span>
                                                                        <input name="know_from[]" type="checkbox" autocomplete="off" value="Instagram"> Instagram
                                                                    </span>
                                                                    <span>
                                                                        <input name="know_from[]" type="checkbox" autocomplete="off" value="YouTube" > YouTube
                                                                    </span>
                                                                    <span>
                                                                        <input name="know_from[]" type="checkbox" autocomplete="off" value="Twitter" > Twitter
                                                                    </span>
                                                                    <span>
                                                                        <input name="know_from[]" type="checkbox" autocomplete="off" value="Linkedin" > Linkedin
                                                                    </span>
                                                                    <span>
                                                                        <input name="know_from[]" type="checkbox" autocomplete="off" value="Banners" > Banners
                                                                    </span>
                                                                    <span>
                                                                        <input name="know_from[]" type="checkbox" autocomplete="off" value="Hoardings" > Hoardings
                                                                    </span>
                                                                    <span>
                                                                        <input name="know_from[]" type="checkbox" autocomplete="off" value="Seminars" > Seminars
                                                                    </span>
                                                                    <span>
                                                                        <input name="know_from[]" type="checkbox" autocomplete="off" value="Hanbill/Leaflet" > Handbill/Leaflet
                                                                    </span>
                                                                    <span>
                                                                        <input name="know_from[]" type="checkbox" autocomplete="off" value="Friends/Relatives" > Friends/Relatives
                                                                    </span>
                                                                    <span>
                                                                        <input name="know_from[]" type="checkbox" autocomplete="off" value="Other" > Other
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row" > 
                                                            <div class="col-md-6" >
                                                                <label for="formFieldParentOccupation"> Interest for JOB </label>
                                                                <div class=" formFieldParentOccupation">
                                                                    <span>
                                                                        <input name="job_interest" type="radio" autocomplete="off" value="Yes" > Yes
                                                                    </span>
                                                                    <span>
                                                                        <input name="job_interest" type="radio" autocomplete="off" value="No" > No
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6" >
                                                                <label for="formFieldParentOccupation"> Date of admission </label>
                                                                <div class=" formFieldParentOccupation">
                                                                    <span>
                                                                        <input name="admission_date" type="radio" autocomplete="off" value="Yes" > Immidiate
                                                                    </span>
                                                                    <span>
                                                                        <input name="admission_date" type="radio" autocomplete="off" value="No" > Later
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3> Preffered class timing</h3>
                                                        <div class="row my-3" > 
                                                            <div class="col-md-6 py-2" >
                                                                <label for="formFieldParentOccupation"> Preffered Days </label>
                                                                <div class=" formFieldParentOccupation">
                                                                    <span>
                                                                        <input name="slot_day[]" type="checkbox" autocomplete="off" value="Monday" > Monday
                                                                    </span>
                                                                    <span>
                                                                        <input name="slot_day[]" type="checkbox" autocomplete="off" value="Tuesday" > Tuesday
                                                                    </span>
                                                                    <span>
                                                                        <input name="slot_day[]" type="checkbox" autocomplete="off" value="Wednesday" > Wednesday
                                                                    </span>
                                                                    <span>
                                                                        <input name="slot_day[]" type="checkbox" autocomplete="off" value="Thursday" > Thursday
                                                                    </span>
                                                                    <span>
                                                                        <input name="slot_day[]" type="checkbox" autocomplete="off" value="Friday" > Friday
                                                                    </span>
                                                                    <span>
                                                                        <input name="slot_day[]" type="checkbox" autocomplete="off" value="Saturday" > Saturday
                                                                    </span>
                                                                    <span>
                                                                        <input name="slot_day[]" type="checkbox" autocomplete="off" value="Sunday" > Sunday
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6" >
                                                                <label for="formFieldParentOccupation"> Preffered Time Slot </label>
                                                                <div class="formFieldParentOccupation">
                                                                    <span>
                                                                        <input name="slot_time[]" type="checkbox" autocomplete="off" value="8:00 Am - 9:30 Am" > 8:00 Am - 9:30 Am
                                                                    </span>
                                                                    <span>
                                                                        <input name="slot_time[]" type="checkbox" autocomplete="off" value="9:30 Am - 11:00 Am" > 9:30 Am - 11:00 Am
                                                                    </span>
                                                                    <span>
                                                                        <input name="slot_time[]" type="checkbox" autocomplete="off" value="11:00 Am - 12:30 Pm" > 11:00 Am - 12:30 Pm
                                                                    </span>
                                                                    <span>
                                                                        <input name="slot_time[]" type="checkbox" autocomplete="off" value="12:30 Pm - 2:00 Pm" > 12:30 Pm - 2:00 Pm
                                                                    </span>
                                                                    <span>
                                                                        <input name="slot_time[]" type="checkbox" autocomplete="off" value="02:00 Pm - 3:30 Pm" > 02:00 Pm - 3:30 Pm
                                                                    </span>
                                                                    <span>
                                                                        <input name="slot_time[]" type="checkbox" autocomplete="off" value="3:30 Pm - 5:00 Pm" > 3:30 Pm - 5:00 Pm
                                                                    </span>
                                                                    <span>
                                                                        <input name="slot_time[]" type="checkbox" autocomplete="off" value="5:00 Pm - 6:30 Pm" > 5:00 Pm - 6:30 Pm
                                                                    </span>
                                                                    <span>
                                                                        <input name="slot_time[]" type="checkbox" autocomplete="off" value="6:30 Pm - 8:00 Pm" > 6:30 Pm - 8:00 Pm
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix  mt-3">
                                                        <a href="javascript:;" class="form-wizard-next-btn float-right">Submit Conversation</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <input name="center_id" type="hidden" value="1" >
                                            <div class="nws-button text-center white text-capitalize py-5" style="display:none">
                                                <button class="submit_classroom_lead_generation_form form_step_1" type="submit">
                                                    Apply Now <i class="fas fa-arrow-right"> </i> 
                                                </button>
                                                <img src="https://www.icacourse.in/wp-content/themes/scriptcrown/images/loader.gif" style="width: 42px; display:none;" class="checkout_loader">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div >
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