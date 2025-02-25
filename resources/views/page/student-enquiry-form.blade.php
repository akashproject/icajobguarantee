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
            .lead_preference_selection {
                display: none;
            }
            .lead_prefarence_tab_container {
                display: flex;
                justify-content: center;
            }
            .lead_preference_selection.active{
                display:block;
            }

            .lead_prefarence_tab {
                width: 100%;
                overflow: hidden;
                padding: 20px 15px;
                text-align: center;
                background: #f3f6ff;
                border: 2px solid #1c519b;
                margin: 0 5px;
                border-radius: 10px;
                position: relative;
            }
            .lead_prefarence_tab h2 {
                font-size: 30px;
                font-weight: 800;
                color: #393185;
            }
            .lead_prefarence_tab input {
                visibility: hidden;
                position: absolute;
                left: 0;
                top: 0;
            }
            .lead_prefarence_list {
                width: 100%;
                border: 2px solid #214b96;
                border-radius: 8px;
                padding: 8px 20px;
            }
            
            label.lead_prefarence_list span {
                font-weight: 600;
                color: #214b96;
                font-size: 16px;
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
        <section>
            <div class="container">
                <div class="row justify_center">	
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4 not_in_mobile" >
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
                                <form id="walking_lead_enquiry_form" class="contact_form lead_form" action="{{ url('enquiry-form-submit') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                    <div class="wizerd_group my-3" >
                                        @switch($step)
                                        @case(null)
                                        <div class="wizerd_set" >
                                            <div class="wizerd_welcome_screen" >
                                                <div class="lead_preference_selection active">
                                                    <div class="text-center subheading mt-6">
                                                        <h1 style="color: #393185;font-weight: 800;">WELCOME TO <br> ICA EDU Skills</h1>
                                                        <div class="lead_prefarence_tab_container row justify-content-center">
                                                            <div class="col-12 mb-3">
                                                                <h5> Need some information to suggest a most suitable program for you </h5> 
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="start_counselling" class="lead_prefarence_tab"> 
                                                                    <h2 class="" >START</h2>
                                                                    <input type="radio" id="start_counselling" data-id="start_counselling"  value="Full Time Job" class="lead_prefference wizard-required">
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="lead_preference_selection start_counselling">
                                                    <div class="wizerd_panel_header">
                                                        <div class="text-center">
                                                            <h3 class="heading">May I know what are you looking for</h3>
                                                        </div>
                                                    </div>  
                                                    <div class="lead_prefarence_tab_container row" >
                                                        <div class="col-md-6">
                                                            <label for="lead_prefer_job" class="lead_prefarence_tab"> 
                                                                <h2 class="" >FULL TIME JOB</h2>
                                                                <input type="radio" id="lead_prefer_job" data-id="lead_prefer_job" name="lead_prefference" value="Full Time Job" class="lead_prefference wizard-required">
                                                            </label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="lead_prefer_skill_update" class="lead_prefarence_tab"> 
                                                                <h2 class="" >SKILL DEVELOPMENT</h2>
                                                                <input type="radio" id="lead_prefer_skill_update" data-id="lead_prefer_skill_update" name="lead_prefference" value="Skill Development" class="lead_prefference wizard-required">
                                                            </label>
                                                        </div>
                                                        <div class="col-md-12 text-center">
                                                            <label class="error"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="lead_prefer_job lead_preference_selection">
                                                    <div class="wizerd_panel_header">
                                                        <div class="text-center">
                                                            <h3 class="heading">Which job position you want to reach in 3 - 5 years</h3>
                                                        </div>
                                                    </div>
                                                    <div class="lead_prefarence_tab_container row" >
                                                        <div class="col-md-4">
                                                            <label for="entry_level_job" class="lead_prefarence_tab"> 
                                                                <h2 class="" >Entry Level</h2>
                                                                <input type="radio" data-id="placement_duration" id="entry_level_job" name="job_type" value="Entry Level" class="lead_prefference wizard-required" required>
                                                            </label>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="mid_level_job" class="lead_prefarence_tab"> 
                                                                <h2 class="" >Mid Level</h2>
                                                                <input type="radio" data-id="placement_duration" id="mid_level_job" name="job_type" value="Mid Level" class="lead_prefference wizard-required">
                                                            </label>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="senior_level_job" class="lead_prefarence_tab"> 
                                                                <h2 class="" >Senior Level</h2>
                                                                <input type="radio" data-id="placement_duration" id="senior_level_job" name="job_type" value="Senior Level" class="lead_prefference wizard-required">
                                                            </label>
                                                        </div>
                                                        <div class="col-md-12 text-center">
                                                            <label class="error"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="placement_duration lead_preference_selection">
                                                    <div class="wizerd_panel_header">
                                                        <div class="text-center">
                                                            <h3 class="heading">How many months are you looking to join in?</h3>
                                                        </div>
                                                    </div>
                                                    <div class="lead_prefarence_tab_container row" >
                                                        <div class="col-md-6">
                                                            <label for="get_job_in_3_month" class="lead_prefarence_tab"> 
                                                                <h2 class="" >3</h2>
                                                                <input type="radio" id="get_job_in_3_month" data-id="select_preffered_course" name="placement_duration" value="3" class="lead_prefference wizard-required">
                                                            </label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="get_job_in_6_month" class="lead_prefarence_tab"> 
                                                                <h2 class="" >6</h2>
                                                                <input type="radio" id="get_job_in_6_month" data-id="select_preffered_course" name="placement_duration" value="6 Month" class="lead_prefference wizard-required">
                                                            </label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="get_job_in_12_month" class="lead_prefarence_tab"> 
                                                                <h2 class="" >12</h2>
                                                                <input type="radio" id="get_job_in_12_month" data-id="select_preffered_course" name="placement_duration" value="12 Month" class="lead_prefference wizard-required">
                                                            </label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="get_job_after_12_month" class="lead_prefarence_tab"> 
                                                                <h2 class="" >> 12</h2>
                                                                <input type="radio" id="get_job_after_12_month" data-id="select_preffered_course" name="placement_duration" value="> 12" class="lead_prefference wizard-required">
                                                            </label>
                                                        </div>
                                                        <div class="col-md-12 text-center">
                                                            <label class="error"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="lead_prefer_skill_update lead_preference_selection">
                                                    <div class="">
                                                        <div class="wizerd_panel_header">
                                                            <div class="text-center">
                                                                <h3 class="heading">Which skill you want to add</h3>
                                                            </div>
                                                        </div>
                                                        <div class="lead_prefarence_tab_container row" >
                                                            <div class="col-md-6">
                                                                <label for="skill_update_to_tally_prime" class="lead_prefarence_list"> 
                                                                    <input type="checkbox" id="skill_update_to_tally_prime" name="skill_list[]" value="Tally Prime" class="wizard-required">
                                                                    <span class="" >Tally Prime</span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="skill_update_to_microsoft_office" class="lead_prefarence_list"> 
                                                                    <input type="checkbox" id="skill_update_to_microsoft_office" name="skill_list[]" value="Microsoft Office" class="wizard-required"> 
                                                                    <span class="" >Microsoft Office</span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="skill_update_to_advance_excel" class="lead_prefarence_list"> 
                                                                    <input type="checkbox" id="skill_update_to_advance_excel" name="skill_list[]" value="Advance Excel" class="wizard-required">
                                                                    <span class="" >Advance Excel</span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="skill_update_to_business_accounting" class="lead_prefarence_list"> 
                                                                    <input type="checkbox" id="skill_update_to_business_accounting" name="skill_list[]" value="Business Accounting" class="wizard-required">
                                                                    <span class="" >Business Accounting</span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="skill_update_to_itr_tds" class="lead_prefarence_list"> 
                                                                    <input type="checkbox" id="skill_update_to_itr_tds" name="skill_list[]" value="ITR & TDS" class="wizard-required">
                                                                    <span class="" >ITR & TDS</span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="skill_update_to_gst" class="lead_prefarence_list"> 
                                                                    <input type="checkbox" id="skill_update_to_gst" name="skill_list[]" value="GST" class="wizard-required">
                                                                    <span class="" >GST</span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="skill_update_to_softskill" class="lead_prefarence_list"> 
                                                                    <input type="checkbox" id="skill_update_to_softskill" name="skill_list[]" value="Soft skill and Interview Preparation" class="wizard-required">
                                                                    <span class="" >Soft skill and Interview Preparation</span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="skill_update_to_zoho_book" class="lead_prefarence_list"> 
                                                                    <input type="checkbox" id="skill_update_to_zoho_book" name="skill_list[]" value="Zoho Book" class="wizard-required">
                                                                    <span class="" >Zoho Book</span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="skill_update_to_sap_fico" class="lead_prefarence_list"> 
                                                                    <input type="checkbox" id="skill_update_to_sap_fico" name="skill_list[]" value="SAP FICO" class="wizard-required">
                                                                    <span class="" >SAP FICO</span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="lead_prefer_job" class="lead_prefarence_list"> 
                                                                    <input type="checkbox" id="lead_prefer_job" data-id="lead_prefer_job" name="lead_prefference" value="Full Time Job" class="lead_prefference wizard-required">
                                                                    <span class="" >Job Guarantee Programm</span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-12 text-center">
                                                                <label class="error"></label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix px-3 mt-3"> 
                                                            <a href="javascript:void(0)" onClick="location.reload();" class="form-wizard-previous-btn float-left">Reset</a> 
                                                            <button type="submit" class="form-wizard-next-btn float-right">Next</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="select_preffered_course lead_preference_selection">
                                                    <div class="">
                                                        <div class="wizerd_panel_header">
                                                            <div class="text-center">
                                                                <h3 class="heading">Which field you want to build your career</h3>
                                                            </div>
                                                        </div>
                                                        <div class="lead_prefarence_tab_container row" >
                                                            <div class="col-md-6">
                                                                <label for="career_to_accounting_course" class="lead_prefarence_list"> 
                                                                    <input type="checkbox" id="career_to_accounting_course" name="skill_list[]" value="Accounting Course" class="wizard-required">
                                                                    <span class="" >Accounting & Finance Course</span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="career_to_mis_analytics" class="lead_prefarence_list"> 
                                                                    <input type="checkbox" id="career_to_mis_analytics" name="skill_list[]" value="MIS Analytics" class="wizard-required">
                                                                    <span class="" >MIS Analytics</span>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-12 text-center">
                                                                <label class="error"></label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group clearfix px-3 mt-3"> 
                                                            <a href="javascript:void(0)" onClick="location.reload();" class="form-wizard-previous-btn float-left">Reset</a> 
                                                            <button type="submit" class="form-wizard-next-btn float-right">Next</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @break
                                        @case(1)
                                        <!-- Qualification -->
                                        <div class="wizerd_set" >  
                                            <div class="wizerd_panel_header">
                                                <div class="text-center">
                                                    <h3 class="heading">Tell me about your qualification</h3>
                                                </div>
                                            </div>                                        
                                            <div class="wizerd_fieldset" >
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
                                                            <div class="col-12">
                                                                <label class="mb-0" style="color: #403c9c;font-weight: 600;"> Please specify your year of passing </label>
                                                            </div>
                                                            <div class="col-6" >
                                                                <div class="contact-info formFieldPassingYear">
                                                                    <select id="formFieldPassingYear" class="passing_month" name="passing_month" required class="wizard-required">
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
                                                            <input id="formFieldInstitute" name="institute" type="text" placeholder="Enter Passing College/University" autocomplete="off" required class="wizard-required">
                                                        </div>
                                                    </div>
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldInstitute">
                                                            <label class="mb-0" style="color: #403c9c;font-weight: 600;"> Have you completed or are you currently pursuing any professional courses? </label>
                                                            <div class="field_checkbox_group mt-3">
                                                                <label for="bank_po" ><input type="checkbox" id="bank_po" name="professional_course[]" value="Bank PO" > Bank PO </label>
                                                                <label for="railway" ><input type="checkbox" id="railway" name="professional_course[]" value="Railway" > Railway </label>
                                                                <label for="ssc" ><input type="checkbox" id="ssc" name="professional_course[]" value="State Service Commission" > State Service Commission </label>
                                                                <label for="ca" ><input type="checkbox" id="ca" name="professional_course[]" value="CA" > CA </label>
                                                                <label for="cs" ><input type="checkbox" id="cs" name="professional_course[]" value="CS" > CS </label>
                                                                <label for="cma" ><input type="checkbox" id="cma" name="professional_course[]" value="CMA" > CMA </label>
                                                                <label for="other" ><input type="checkbox" id="other" name="professional_course[]" value="Other" class="hide_show_text_field"> Other </label>
                                                            </div>
                                                        </div>
                                                        <div class="specify_field my-2" style="display:none" >
                                                            <input id="formFieldSpecifyOtherCourse" name="professional_course[]" type="text" placeholder="Please Specity" autocomplete="off" >
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
                                            <div class="wizerd_panel_header">
                                                <div class="text-center">
                                                    <h3 class="heading">Tell me about your professional information</h3>
                                                </div>
                                            </div> 
                                            <div class="wizerd_fieldset" >
                                                
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
                                                                    <div class="col-md-7">
                                                                        <input id="formFieldJobRole" name="job_role[]" type="text" placeholder="What is your job role?" autocomplete="off" class="wizard-required job_role_elem">
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <input id="formFieldJobRoleTimePeriod" name="job_role_time[]" type="number" placeholder="Total Years" autocomplete="off" class="wizard-required job_role_elem">
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <a href="javascript:void(0)" class="add_more_role_btn">Add More</a>
                                                                    </div> 
                                                                </div>
                                                            </div>
                                                            <span style="font-size: 12px;">*If you have multiple job roles, click Add More to include them all.</span>
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
                                        <div class="wizerd_set" >
                                            <div class="wizerd_panel_header">
                                                <div class="text-center">
                                                    <h3 class="heading">Tell me about personal information</h3>
                                                </div>
                                            </div> 
                                            <div class="wizerd_fieldset" >
                                                <div class="row" > 
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldName">
                                                            <input id="formFieldName" name="name" type="text" placeholder="Please enter your name" autocomplete="off" required class="wizard-required">
                                                            <div class="wizard-form-error"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldEmail">
                                                            <input id="formFieldEmail" name="email" type="email" placeholder="Please enter your email address" autocomplete="off" required class="wizard-required">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldMobile">
                                                            <input id="formFieldMobile" name="mobile" type="number" placeholder="Please enter your mobile number" autocomplete="off" min="6000000000" max="9999999999" required class="mb-2 wizard-required">
                                                            <span><input type="checkbox" class="copy_mobile_no"> Is this your whatsapp number </span>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldWhatsapp">
                                                            <input id="formFieldWhatsapp" name="whatsapp" type="number" placeholder="Please enter your whatsapp number" autocomplete="off" min="6000000000" max="9999999999" required class="wizard-required">
                                                        </div>
                                                    </div>
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldDob">
                                                            <label class="mb-0" style="color: #403c9c;font-weight: 600;">May I know your Birthday </label>
                                                            <input id="formFieldDob" name="dob" type="date" placeholder="Enter Date of Birth" autocomplete="off" required class="wizard-required" min="1970-01-01" max="2010-12-31">
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
                                                            <input type="number" id="formFieldPincode" name="pincode" placeholder="Enter Your Pincode" min="700000" max="799999" autocomplete="off" required class="wizard-required">
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
                                                            <select id="formFieldFatherOccupation" data-id="specify_father_occupation_field" class="occupation" name="father_occupation" class="wizard-required">
                                                                <option value="">What is his occupation?</option>
                                                                <option value="Business">Business</option>
                                                                <option value="Govt. Employee">Govt. Employee</option>
                                                                <option value="Private Employee">Private Employee</option>
                                                                <option value="Self Employed">Self Employed</option>
                                                                <option value="Agriculture">Agriculture</option>
                                                                <option value="Retired">Retired</option>
                                                                <option value="Other">Other</option>
                                                            </select>
                                                        </div>
                                                        <div class="specify_father_occupation_field my-2" style="display:none" >
                                                            <input id="formFieldSpecifyOtherCourse" name="other_father_occupation" type="text" placeholder="Please specity other occupation" autocomplete="off" >
                                                        </div>
                                                    </div>
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldMotherName">
                                                            <input id="formFieldMotherName" name="mother_name" type="text" placeholder="What is your mother’s name?" autocomplete="off">
                                                        </div>
                                                    </div>
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldMotherOccupation">
                                                            <select id="formFieldMotherOccupation" data-id="specify_mother_occupation_field"  class="occupation" name="mother_occupation" class="wizard-required">
                                                                <option value="">What is her occupation?</option>
                                                                <option value="House Wife">House Wife</option>
                                                                <option value="Business">Business</option>
                                                                <option value="Govt. Employee">Govt. Employee</option>
                                                                <option value="Private Employee">Private Employee</option>
                                                                <option value="Self Employed">Self Employed</option>
                                                                <option value="Agriculture">Agriculture</option>
                                                                <option value="Retired">Retired</option>
                                                                <option value="Other">Other</option>
                                                            </select>
                                                        </div>
                                                        <div class="specify_mother_occupation_field my-2" style="display:none" >
                                                            <input id="formFieldSpecifyOtherCourse" name="other_mother_occupation" type="text" placeholder="Please specity other occupation" autocomplete="off" >
                                                        </div>
                                                    </div>
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldParentMobile">
                                                            <input id="formFieldParentMobile" name="parent_mobile" type="number" placeholder="Mention your guardian’s mobile no" autocomplete="off" min="6000000000" max="9999999999">
                                                        </div>
                                                    </div>
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldOtherGuardian">
                                                            <label class="mb-0" style="color: #403c9c;font-weight: 600;">*Please share if you have another guardian detail</label>
                                                            <textarea id="formFieldOtherGuardian" name="other_guardian" class="textarea_form-field"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 text-center response_success" style="display:none;">
                                                        <div >
                                                            <p class="margin-0px-bottom response_status" > Invalid One Time Password </p>
                                                            <p class="margin-0px-bottom" >Please Enter OTP or <a href="javascript:void(0)" class="resendOtp" >Resend OTP</a> </p>
                                                            <p class="margin-0px-bottom" >OTP will expire after 2mins : <span class="countdown"> 2:00 </span></p>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="form-group form_style response_success"  style="display:none;">
                                                            <label>One time password<span class="required">*</span></label>
                                                            <input type="number" name="verify_otp" class="form-control verify_otp" autocomplete="off" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group clearfix  mt-3">
                                                    <a href="{{ route('student-enquiry-form-with-slug',[$previousStep,'center'=>$center,'enquiry'=>base64_encode($enquiry)]) }}" class="form-wizard-previous-btn float-left">Previous</a> 
                                                    <input type="hidden" name="otp_validation" value="1" id="otp_validation" > 
                                                    <input type="hidden" name="responsed_otp" class="responsed_otp" value="">
                                                    <button type="submit" class="form-wizard-next-btn float-right">Next</button>
                                                </div>
                                            </div>
                                        </div>
                                        @break
                                        @case(4)
                                        <!-- Know ICA -->
                                        <div class="wizerd_set" >
                                            <div class="wizerd_panel_header">
                                                <div class="text-center">
                                                    <h3 class="heading">Tell Me about your goal</h3>
                                                </div>
                                            </div>
                                            <div class="wizerd_fieldset" >
                                                <div class="row" > 
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldNextGoal">
                                                            <label class="mb-0" style="color: #403c9c;font-weight: 600;"> What is your expected starting salary per month</label>
                                                            <input id="formFieldNextGoal" name="starting_salary" type="number" autocomplete="off" required class="wizard-required" min="10000">
                                                            <div class="wizard-form-error"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldNextGoal">
                                                            <label class="mb-0" style="color: #403c9c;font-weight: 600;"> Expected salary per month after 5 Years</label>
                                                            <input id="formFieldNextGoal" name="next_goal" type="number" autocomplete="off" required class="wizard-required" min="10000">
                                                            <div class="wizard-form-error"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12" >
                                                        <div class="contact-info formFieldlocationPrefarence">
                                                            <label class="mb-0" style="color: #403c9c;font-weight: 600;"> Do you have any location preference for placement? [If yes, please specify]</label>
                                                            <div class="field_checkbox_group mt-3">
                                                                <label for="same_city" ><input type="radio" id="same_city" name="location_prefarence" value="same city" checked> Same City </label>
                                                                <label for="same_state" ><input type="radio" id="same_state" name="location_prefarence" value="same State"> Same State </label>
                                                                <label for="same_india" ><input type="radio" id="same_india" name="location_prefarence" value="Anywhere in India"> Anywhere in India </label>
                                                                <label for="same_world" ><input type="radio" id="same_world" name="location_prefarence" value="Anywhere in World"> Anywhere in World </label>
                                                            </div>
                                                            <div class="wizard-form-error"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group clearfix  mt-3">
                                                    <a href="{{ route('student-enquiry-form-with-slug',[$previousStep,'center'=>$center,'enquiry'=>base64_encode($enquiry)]) }}" class="form-wizard-previous-btn float-left">Previous</a> 
                                                    <button href="javascript:void(0);" class="form-wizard-next-btn float-right">Submit</button>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
        <script src="{{ url('assets/js/enquiry-form.js') }}"></script>

        <script type="text/javascript">
            jQuery("#walking_lead_enquiry_form").validate({
                rules: {
                    lead_prefference: {required: true},
                    placement_duration: {required: true},
                    "skill_list[]": { required: true }
                },
                messages: {
                    lead_prefference: {
                        required: "Please Select Any of the following option ",
                    },
                    placement_duration: {
                        required: "Please Select Any of the following option ",
                    },
                    job_type: {
                        required: "Please Select Any of the following option ",
                    },
                    "skill_list[]": {
                        required: "Please Select Any of the following option ",
                    },
                    qualification: {
                        required: "Please Select highest Qualification ",
                    },
                    passing_month: {
                        required: "Please Select Passing Month ",
                    },
                    passing_year: {
                        required: "Please Select Passing Year ",
                    },
                    institute: {
                        required: "Enter Passing College/University",
                    },
                },
                errorElement : 'label',
                errorLabelContainer: '.error',
                submitHandler: function(form) {
                    let formId = $(form).attr('id');
                    let otp_validation = jQuery("#" + formId + " #otp_validation").val()
                    if(otp_validation == "1"){
                        var verifyOtp = jQuery("#" + formId + " .verify_otp").val();
                        var responsedOtp = jQuery("#" + formId + " .responsed_otp").val();
                        if (verifyOtp != '' && verifyOtp == responsedOtp) {
                            jQuery('.checkout_loader').show();
                            form.submit();
                        } else if (verifyOtp != '' && verifyOtp != responsedOtp) {
                            jQuery("#" + formId + " .response_status").html("OTP is Invalid");
                            jQuery("#" + formId + " .response_status").css("color","red");
                        } else {
                            sendMobileOtp(formId);
                        }
                        return false;
                        
                    } else {
                        form.submit();
                    }
                }
            });
        </script>
    </body>
</html>