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
                z-index: 999;
            }

            .lead_prefarence_tab h2 {
                font-size: 28px;
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
            @media screen and (max-width: 991px) {
                .navbar-header {
                    position: relative;
                }
            }
            .navbar-header {
                width: 100%;
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
                            </div>
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
                            <div class="col-md-12 not_in_mobile" >
                                <div class="form_wizerd_header form-wizard-panel"> 
                                    <div href="javascript:void(0)" class="wizerd_header form-wizard-steps {{ ($step == null)?'active':'' }}">
                                        <span>1.</span>
                                        <h4 >1. @if($step == null)Check Requirement @endif</h4>
                                    </div>
                                    <div href="javascript:void(0)" class="wizerd_header form-wizard-steps {{ ($step == '1')?'active':'' }}" >
                                        <span>2.</span>
                                        <h4>2. @if($step == '1') Educational Information @endif</h4>
                                    </div>
                                    <div href="javascript:void(0)" class="wizerd_header form-wizard-steps {{ ($step == '2')?'active':'' }}">
                                        <span>3.</span>
                                        <h4>3. @if($step == '2') Professional Information @endif</h4>
                                    </div>
                                    <div href="javascript:void(0)" class="wizerd_header form-wizard-steps {{ ($step == '3')?'active':'' }}" >
                                        <span>4.</span>
                                        <h4>4. @if($step == '3') Personal Information @endif</h4>
                                    </div>
                                    <div href="javascript:void(0)" class="wizerd_header form-wizard-steps {{ ($step == '4')?'active':'' }}">
                                        <span></span>
                                        <h4>5. @if($step == '4') Aspirational Details @endif</h4>
                                    </div>
                                    <div href="javascript:void(0)" class="wizerd_header form-wizard-steps {{ ($step == '5')?'active':'' }}">
                                        <span></span>
                                        <h4>6. @if($step == '5') About ICA @endif</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" >
                                <form id="walking_lead_enquiry_form" class="contact_form lead_form" action="{{ url('enquiry-form-submit') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="wizerd_group my-3" >
                                        @switch($step)
                                            @case(null)
                                            <div class="wizerd_set" >
                                                <div class="wizerd_welcome_screen" >
                                                    <div class="lead_preference_selection active">
                                                        <div class="text-center subheading mt-6">
                                                            <h1 style="color: #393185;font-weight: 800;">WELCOME TO <br> ICA EDU SKILLS</h1>
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
                                                    <!--2 Route For Career Or Skill  -->
                                                    <div class="lead_preference_selection start_counselling">
                                                        <div class="wizerd_panel_header">
                                                            <div class="text-center">
                                                                <h3 class="heading">May I know what are you looking for</h3>
                                                            </div>
                                                        </div>  
                                                        <div class="lead_prefarence_tab_container row" >
                                                            <div class="col-md-6">
                                                                <label for="purpose_of_enquiry_job" class="lead_prefarence_tab"> 
                                                                    <h2 class="" >Job Guarantee Course</h2>
                                                                    <input type="radio" id="purpose_of_enquiry_job"  class="lead_prefference wizard-required" data-id="daily_time_spend_job_readiness" name="purpose_of_enquiry" value="Job Guarantee Course" {{ (isset($enq->purpose_of_enquiry) && $enq->purpose_of_enquiry == "Job Guarantee Course")?'selected':'' }}>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="purpose_of_enquiry_skill_update" class="lead_prefarence_tab"> 
                                                                    <h2 class="" >Skill Development Course</h2>
                                                                    <input type="radio" id="purpose_of_enquiry_skill_update"  class="lead_prefference wizard-required" data-id="daily_time_spend_skill_development" name="purpose_of_enquiry" value="Skill Development Course" {{ (isset($enq->purpose_of_enquiry) && $enq->purpose_of_enquiry == "Skill Development Course")?'selected':'' }}>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-12 text-center">
                                                                <label class="error"></label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Route For Career -->
                                                    <div class="daily_time_spend_job_readiness lead_preference_selection">
                                                        <div class="wizerd_panel_header">
                                                            <div class="text-center">
                                                                <h3 class="heading">How much time you can give daily for job readiness?</h3>
                                                            </div>
                                                        </div>
                                                        <div class="lead_prefarence_tab_container row" >
                                                            <div class="col-md-4">
                                                                <label for="daily_time_spend_job_readiness_1-5_hour" class="lead_prefarence_tab"> 
                                                                    <h2 class="" >1.5 Hours</h2>
                                                                    <input type="radio" id="daily_time_spend_job_readiness_1-5_hour" data-id="lead_prefer_job_aspiration" name="daily_time_spend" value="1.5 Hours" class="lead_prefference wizard-required">
                                                                </label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="daily_time_spend_job_readiness_3_hour" class="lead_prefarence_tab"> 
                                                                    <h2 class="" >3 Hours</h2>
                                                                    <input type="radio" id="daily_time_spend_job_readiness_3_hour" data-id="lead_prefer_job_aspiration" name="daily_time_spend" value="3 Hours" class="lead_prefference wizard-required">
                                                                </label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="daily_time_spend_job_readiness_4-5_hour" class="lead_prefarence_tab"> 
                                                                    <h2 class="" >4.5 Hours</h2>
                                                                    <input type="radio" id="daily_time_spend_job_readiness_4-5_hour" data-id="lead_prefer_job_aspiration" name="daily_time_spend" value="4.5 Hours" class="lead_prefference wizard-required">
                                                                </label>
                                                            </div>
                                                            <div class="col-md-12 text-center">
                                                                <label class="error"></label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="lead_prefer_job_aspiration lead_preference_selection">
                                                        <div class="wizerd_panel_header">
                                                            <div class="text-center">
                                                                <h3 class="heading">Where do you want to see yourself in 3-4
                                                                years of experience?</h3>
                                                            </div>
                                                        </div>
                                                        <div class="lead_prefarence_tab_container row" >
                                                            <div class="col-md-4">
                                                                <label for="junior_executive_job_aspiration" class="lead_prefarence_tab"> 
                                                                    <h2 class="" >Junior Executive Position</h2>
                                                                    <input type="radio" data-id="expected_joining_timeline" id="junior_executive_job_aspiration" name="job_aspiration" value="Junior Executive Position" class="lead_prefference wizard-required" required>
                                                                </label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="senior_executive_job_aspiration" class="lead_prefarence_tab"> 
                                                                    <h2 class="" >Senior Executive Position</h2>
                                                                    <input type="radio" data-id="expected_joining_timeline" id="senior_executive_job_aspiration" name="job_aspiration" value="Senior Executive Position" class="lead_prefference wizard-required">
                                                                </label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="manager_position_job_aspiration" class="lead_prefarence_tab"> 
                                                                    <h2 class="" >Assistant Manager/Manager Position</h2>
                                                                    <input type="radio" data-id="expected_joining_timeline" id="manager_position_job_aspiration" name="job_aspiration" value="Assistant Manager/Manager Position" class="lead_prefference wizard-required">
                                                                </label>
                                                            </div>
                                                            <div class="col-md-12 text-center">
                                                                <label class="error"></label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="expected_joining_timeline lead_preference_selection">
                                                        <div class="wizerd_panel_header">
                                                            <div class="text-center">
                                                                <h3 class="heading">In how many months would you like to join job?</h3>
                                                            </div>
                                                        </div>
                                                        <div class="lead_prefarence_tab_container row" >
                                                            <div class="col-md-6">
                                                                <label for="expected_joining_timeline_3_month" class="lead_prefarence_tab"> 
                                                                    <h2 class="" >3</h2>
                                                                    <input type="radio" id="expected_joining_timeline_3_month" data-id="preferred_career_field" name="expected_joining_timeline" value="3 Month" class="lead_prefference wizard-required">
                                                                </label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="expected_joining_timeline_6_month" class="lead_prefarence_tab"> 
                                                                    <h2 class="" >6</h2>
                                                                    <input type="radio" id="expected_joining_timeline_6_month" data-id="preferred_career_field" name="expected_joining_timeline" value="6 Month" class="lead_prefference wizard-required">
                                                                </label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="expected_joining_timeline_12_month" class="lead_prefarence_tab"> 
                                                                    <h2 class="" >12</h2>
                                                                    <input type="radio" id="expected_joining_timeline_12_month" data-id="preferred_career_field" name="expected_joining_timeline" value="12 Month" class="lead_prefference wizard-required">
                                                                </label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="expected_joining_timeline_after_12_month" class="lead_prefarence_tab"> 
                                                                    <h2 class="" >> 12</h2>
                                                                    <input type="radio" id="expected_joining_timeline_after_12_month" data-id="preferred_career_field" name="expected_joining_timeline" value="After 12 Month" class="lead_prefference wizard-required">
                                                                </label>
                                                            </div>
                                                            <div class="col-md-12 text-center">
                                                                <label class="error"></label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="preferred_career_field lead_preference_selection">
                                                        <div class="">
                                                            <div class="wizerd_panel_header">
                                                                <div class="text-center">
                                                                    <h3 class="heading">In which field do you want to build your career</h3>
                                                                </div>
                                                            </div>
                                                            <div class="lead_prefarence_tab_container row" >
                                                                <div class="col-md-6">
                                                                    <label for="career_to_accounting_course" class="lead_prefarence_list"> 
                                                                        <input type="checkbox" id="career_to_accounting_course" name="preferred_career_field[]" value="Accounts, Finance & Taxation" class="wizard-required">
                                                                        <span class="" >Accounts, Finance & Taxation </span>
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="career_to_mis_analytics" class="lead_prefarence_list"> 
                                                                        <input type="checkbox" id="career_to_mis_analytics" name="preferred_career_field[]" value="MIS and Data Analytics" class="wizard-required">
                                                                        <span class="" >MIS and Data Analytics</span>
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

                                                    <!-- Route For Skill Development -->
                                                    <div class="daily_time_spend_skill_development lead_preference_selection">
                                                        <div class="wizerd_panel_header">
                                                            <div class="text-center">
                                                                <h3 class="heading">How much time you can give daily for Skill Development?</h3>
                                                            </div>
                                                        </div>
                                                        <div class="lead_prefarence_tab_container row" >
                                                            <div class="col-md-4">
                                                                <label for="daily_time_spend_skill_update_1-5_hour" class="lead_prefarence_tab"> 
                                                                    <h2 class="" >1.5 Hours</h2>
                                                                    <input type="radio" id="daily_time_spend_skill_update_1-5_hour" data-id="preferred_skill_update_field" name="daily_time_spend" value="1.5 Hours" class="lead_prefference wizard-required">
                                                                </label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="daily_time_spend_skill_update_3_hour" class="lead_prefarence_tab"> 
                                                                    <h2 class="" >3 Hours</h2>
                                                                    <input type="radio" id="daily_time_spend_skill_update_3_hour" data-id="preferred_skill_update_field" name="daily_time_spend" value="3 Hours" class="lead_prefference wizard-required">
                                                                </label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="daily_time_spend_skill_update_4-5_hour" class="lead_prefarence_tab"> 
                                                                    <h2 class="" >4.5 Hours</h2>
                                                                    <input type="radio" id="daily_time_spend_skill_update_4-5_hour" data-id="preferred_skill_update_field" name="daily_time_spend" value="4.5 Hours" class="lead_prefference wizard-required">
                                                                </label>
                                                            </div>
                                                            <div class="col-md-12 text-center">
                                                                <label class="error"></label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="preferred_skill_update_field lead_preference_selection">
                                                        <div class="">
                                                            <div class="wizerd_panel_header">
                                                                <div class="text-center">
                                                                    <h3 class="heading">Which skill you want to add</h3>
                                                                </div>
                                                            </div>
                                                            <div class="lead_prefarence_tab_container row" >
                                                                <div class="col-md-6">
                                                                    <label for="skill_update_to_tally_prime" class="lead_prefarence_list"> 
                                                                        <input type="checkbox" id="skill_update_to_tally_prime" name="preferred_career_field[]" value="Tally Prime" class="wizard-required">
                                                                        <span class="" >TallyPrime</span>
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="skill_update_to_microsoft_office" class="lead_prefarence_list"> 
                                                                        <input type="checkbox" id="skill_update_to_microsoft_office" name="preferred_career_field[]" value="Microsoft Office" class="wizard-required"> 
                                                                        <span class="" >Microsoft Office</span>
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="skill_update_to_advance_excel" class="lead_prefarence_list"> 
                                                                        <input type="checkbox" id="skill_update_to_advance_excel" name="preferred_career_field[]" value="Advance Excel" class="wizard-required">
                                                                        <span class="" >Advanced Excel</span>
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="skill_update_to_business_accounting" class="lead_prefarence_list"> 
                                                                        <input type="checkbox" id="skill_update_to_business_accounting" name="preferred_career_field[]" value="Business Accounting" class="wizard-required">
                                                                        <span class="" >Business Accounting</span>
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="skill_update_to_itr_tds" class="lead_prefarence_list"> 
                                                                        <input type="checkbox" id="skill_update_to_itr_tds" name="preferred_career_field[]" value="ITR & TDS" class="wizard-required">
                                                                        <span class="" >ITR & TDS</span>
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="skill_update_to_gst" class="lead_prefarence_list"> 
                                                                        <input type="checkbox" id="skill_update_to_gst" name="preferred_career_field[]" value="GST" class="wizard-required">
                                                                        <span class="" >GST</span>
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="skill_update_to_softskill" class="lead_prefarence_list"> 
                                                                        <input type="checkbox" id="skill_update_to_softskill" name="preferred_career_field[]" value="Soft skill and Interview Preparation" class="wizard-required">
                                                                        <span class="" >Soft Skill And Interview Preparation</span>
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="skill_update_to_zoho_book" class="lead_prefarence_list"> 
                                                                        <input type="checkbox" id="skill_update_to_zoho_book" name="preferred_career_field[]" value="Zoho Book" class="wizard-required">
                                                                        <span class="" >Zoho Book</span>
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="skill_update_to_sap_fico" class="lead_prefarence_list"> 
                                                                        <input type="checkbox" id="skill_update_to_sap_fico" name="preferred_career_field[]" value="SAP FICO" class="wizard-required">
                                                                        <span class="" >SAP FICO</span>
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="daily_time_spend_job_readiness" class="lead_prefarence_list"> 
                                                                        <input type="checkbox" id="daily_time_spend_job_readiness" data-id="daily_time_spend_job_readiness" name="lead_prefference" value="Full Time Job" class="lead_prefference wizard-required">
                                                                        <span class="" >Job Guarantee Program</span>
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
                                                            <div class="contact-info">
                                                                <label class="mb-0" style="color: #403c9c;font-weight: 600;"> What is your highest qualification?  </label>
                                                                <select id="" class="qualification" name="highest_qualification" required class="wizard-required">
                                                                    <option value=""> Select Qualification</option>
                                                                    <option value="Secondary" {{ ($enq->highest_qualification == 'Secondary')?'selected':'' }}> Secondary </option>
                                                                    <option value="Higher Secondery" {{ ($enq->highest_qualification == 'Higher Secondery')?'selected':'' }}> Higher Secondary </option>
                                                                    <option value="B.Com" {{ ($enq->highest_qualification == 'B.Com')?'selected':'' }}> B.Com </option>
                                                                    <option value="B.Sc" {{ ($enq->highest_qualification == 'B.Sc')?'selected':'' }}> B.Sc </option>
                                                                    <option value="BA" {{ ($enq->highest_qualification == 'BA')?'selected':'' }}> BA </option>
                                                                    <option value="BBA" {{ ($enq->highest_qualification == 'BBA')?'selected':'' }}> BBA </option>
                                                                    <option value="BCA" {{ ($enq->highest_qualification == 'BCA')?'selected':'' }}> BCA </option>
                                                                    <option value="B.Tech" {{ ($enq->highest_qualification == 'B.Tech')?'selected':'' }}> B.Tech </option>
                                                                    <option value="Diploma" {{ ($enq->highest_qualification == 'Diploma')?'selected':'' }}> Diploma </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-12" >
                                                            <div class="contact-info formFieldInstitute">
                                                                <label class="mb-0" style="color: #403c9c;font-weight: 600;">Mention your School/College.</label>
                                                                <input id="formFieldInstitute" name="college" type="text" placeholder="Enter Passing School/College" autocomplete="off" required value="{{ $enq->college }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-12" >
                                                            <div class="row" >
                                                                <div class="col-12">
                                                                    <label class="mb-0" style="color: #403c9c;font-weight: 600;"> Please specify your year of passing </label>
                                                                </div>
                                                                <div class="col-6" >
                                                                    <div class="contact-info formFieldPassingYear">
                                                                        <select id="formFieldPassingYear" name="date_of_passing[month]" required class="wizard-required">
                                                                           <option value=""> Select Month</option>
                                                                            <option value="January" {{ ($enq->date_of_passing != null && $enq->date_of_passing[0] == 'January')?'selected':'' }} >January</option>
                                                                            <option value="February" {{ ($enq->date_of_passing != null && $enq->date_of_passing[0] == 'February')?'selected':'' }} >February</option>
                                                                            <option value="March" {{ ($enq->date_of_passing != null && $enq->date_of_passing[0] == 'March')?'selected':'' }} >March</option>
                                                                            <option value="April" {{ ($enq->date_of_passing != null && $enq->date_of_passing[0] == 'April')?'selected':'' }} >April</option>
                                                                            <option value="May" {{ ($enq->date_of_passing != null && $enq->date_of_passing[0] == 'May')?'selected':'' }} >May</option>
                                                                            <option value="June" {{ ($enq->date_of_passing != null && $enq->date_of_passing[0] == 'June')?'selected':'' }} >June</option>
                                                                            <option value="July" {{ ($enq->date_of_passing != null && $enq->date_of_passing[0] == 'July')?'selected':'' }}  >July</option>
                                                                            <option value="August"  {{ ($enq->date_of_passing != null && $enq->date_of_passing[0] == 'August')?'selected':'' }} >August</option>
                                                                            <option value="September" {{ ($enq->date_of_passing != null && $enq->date_of_passing[0] == 'September')?'selected':'' }} >September</option>
                                                                            <option value="October" {{ ($enq->date_of_passing != null && $enq->date_of_passing[0] == 'October')?'selected':'' }} >October</option>
                                                                            <option value="November" {{ ($enq->date_of_passing != null && $enq->date_of_passing[0] == 'November')?'selected':'' }}>November</option>
                                                                            <option value="December" {{ ($enq->date_of_passing != null && $enq->date_of_passing[0] == 'December')?'selected':'' }} >December</option>
                                                                        </select> 
                                                                    </div>
                                                                </div>
                                                                <div class="col-6" >
                                                                    <select id="formFieldPassingYear" name="date_of_passing[year]" required class="wizard-required">
                                                                        <option value=""> Select Year</option>
                                                                        @for ($year = now()->year; $year >= 1980; $year--)
                                                                            <option value="{{ $year }}" {{ ($enq->date_of_passing != null && $enq->date_of_passing[1] == $year)?'selected':'' }} >{{ $year }}</option>
                                                                        @endfor
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12" >
                                                            <div class="contact-info formFieldstillPursuing mb-0">
                                                                <label for="current_education_status mb-0">
                                                                    <input type="checkbox" id="current_education_status" data-id="specify_semester_field" name="current_education_status" value="Still pursuing post graduation program" {{($enq->current_education_status != null)?'checked':''}}> 
                                                                    <span style="color: #403c9c;font-weight: 600;" > Are you currently pursuing any Degree / Post Graduation Program? </span>
                                                                </label>
                                                            </div>
                                                            <div class="contact-info specify_semester_field" style="display:{{($enq->current_education_status != null)?'block':'none'}};">
                                                                <label class="mb-0" style="color: #403c9c;font-weight: 600;"> What is your Current Semester?  </label>
                                                                <select id="current_semester" name="current_semester" required class="wizard-required" data-id="class_shift_field">
                                                                    <option value="">Select Semester</option>
                                                                    @for($i = 1; $i <= 8; $i++)
                                                                    <option value="{{intToRoman($i)}}" {{ ($enq->current_semester == intToRoman($i))?'selected':'' }} >{{intToRoman($i)}}</option>
                                                                    @endfor
                                                                </select>
                                                            </div>
                                                            <div class="contact-info class_shift_field" style="display:{{($enq->current_education_status != null)?'block':'none'}};">
                                                            <label class="mb-0" style="color: #403c9c;font-weight: 600;"> What is your college timing? </label>
                                                                <div class="field_checkbox_group">
                                                                    <label for="morning" >
                                                                        <input type="radio" id="morning" name="current_shift" value="Morning" {{ ($enq->current_shift == "Morning")?'checked':'' }} > Morning 
                                                                    </label>
                                                                    <label for="day" >
                                                                        <input type="radio" id="day" name="current_shift" value="Day" {{ ($enq->current_shift == "Day")?'checked':'' }} > Day 
                                                                    </label>                
                                                                    <label for="evening" >
                                                                        <input type="radio" id="evening" name="current_shift" value="Evening" {{ ($enq->current_shift == "Evening")?'checked':'' }}  > Evening 
                                                                    </label>                
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-12" >
                                                            <div class="contact-info formFieldInstitute">
                                                                <label class="mb-0" style="color: #403c9c;font-weight: 600;"> Have you completed or are you currently pursuing any professional courses? </label>
                                                                <div class="field_checkbox_group">
                                                                    <label for="bank_po" >
                                                                        <input type="checkbox" id="bank_po" name="professional_course_status[]" value="Bank PO" {{ is_array($enq->professional_course_status) && in_array('Bank PO', $enq->professional_course_status)?'checked':'' }} > Bank PO 
                                                                    </label>
                                                                    <label for="railway" >
                                                                        <input type="checkbox" id="railway" name="professional_course_status[]" value="Railway" {{ is_array($enq->professional_course_status) && in_array('Railway', $enq->professional_course_status)?'checked':'' }} > Railway 
                                                                    </label>
                                                                    <label for="ssc" >
                                                                        <input type="checkbox" id="ssc" name="professional_course_status[]" value="State Service Commission" {{ is_array($enq->professional_course_status) && in_array('State Service Commission', $enq->professional_course_status)?'checked':'' }} > State Service Commission 
                                                                    </label>
                                                                    <label for="ca" ><input type="checkbox" id="ca" name="professional_course_status[]" value="CA" {{ is_array($enq->professional_course_status) && in_array('CA', $enq->professional_course_status)?'checked':'' }} > CA </label>
                                                                    <label for="cs" ><input type="checkbox" id="cs" name="professional_course_status[]" value="CS" {{ is_array($enq->professional_course_status) && in_array('CS', $enq->professional_course_status)?'checked':'' }} > CS </label>
                                                                    <label for="cma" ><input type="checkbox" id="cma" name="professional_course_status[]" value="CMA" {{ is_array($enq->professional_course_status) && in_array('CMA', $enq->professional_course_status)?'checked':'' }} > CMA </label>
                                                                    <label for="other" ><input type="checkbox" id="other" name="professional_course_status[]" value="Other" class="hide_show_text_field" {{ is_array($enq->professional_course_status) && in_array('Other', $enq->professional_course_status)?'checked':'' }} > Other </label>
                                                                </div>
                                                            </div>
                                                            <div class="specify_field my-2" style="display:{{ is_array($enq->professional_course_status) && in_array("Other", $enq->professional_course_status)?'block':'none' }}" >
                                                                <input id="formFieldSpecifyOtherCourse" name="other_professional_course_status" type="text" placeholder="Please Specity" autocomplete="off"  value="{{ $enq->other_professional_course_status }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-12" >
                                                            <div class="contact-info preferred_training_language">
                                                                <select id="preferred_training_language" name="preferred_training_language" required class="wizard-required">
                                                                    <option value="">What is your preferred language for the training</option>
                                                                    <option value="English" {{ ($enq->preferred_training_language == 'English')?'selected':'' }}> English </option>
                                                                    <option value="Hindi" {{ ($enq->preferred_training_language == 'Hindi')?'selected':'' }}> Hindi </option>
                                                                    <option value="Local"  > Local </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix mt-3"> 
                                                        <a href="{{ route('student-enquiry-form',[$center,$previousStep,'enquiry_id'=>base64_encode($enquiry_id)]) }}" class="form-wizard-previous-btn float-left">Previous</a> 
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
                                                            <div class="contact-info ">
                                                                <select name="is_job_role" required class="wizard-required">
                                                                    <option value="">Do you have any work experience? </option>
                                                                    <option value="Yes" {{ ($enq->is_job_role == 'Yes')?'selected':'' }}> Yes </option>
                                                                    <option value="No" {{ ($enq->is_job_role == 'No')?'selected':'' }}> No </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-12" >
                                                            <span style="font-size: 12px;">*If you don’t have any work experience, you can skip the job role section.</span>
                                                            <div class="contact-info">
                                                                <div class="add_more_job_role">
                                                                    <div class="row">
                                                                        <div class="col-md-7">
                                                                            <input name="job_role[0][name]" type="text" placeholder="What is your job role?" autocomplete="off" class="wizard-required job_role_elem">
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <input name="job_role[0][time]" type="number" placeholder="Total Years" autocomplete="off" class="wizard-required job_role_elem">
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <a href="javascript:void(0)" class="add_more_role_btn">Add More</a>
                                                                        </div> 
                                                                    </div>
                                                                </div>
                                                                <span style="font-size: 12px;">*If you have multiple job roles, click Add More to include them all.</span>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix  mt-3">
                                                        <a href="{{ route('student-enquiry-form-with-slug',[$previousStep,'center'=>$center,'enquiry_id'=>base64_encode($enquiry_id)]) }}" class="form-wizard-previous-btn float-left">Previous</a> 
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
                                                            <div class="contact-info ">
                                                                <input name="full_name" type="text" placeholder="Please enter your full name" autocomplete="off" required value="{{ $enq->full_name }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-12" >
                                                            <div class="contact-info ">
                                                                <input name="email_address" type="email" placeholder="Please enter your active email address" autocomplete="off" required value="{{ $enq->email_address }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-12" >
                                                            <div class="contact-info ">
                                                                <input name="mobile_number" id="mobile_number" type="number" placeholder="Please enter your mobile number" autocomplete="off" min="6000000000" max="9999999999" required class="mb-2 wizard-required" value="{{ $enq->mobile_number }}">
                                                                <span><input type="checkbox" class="copy_mobile_no"> Is the above number your whatsapp number? </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-12" >
                                                            <div class="contact-info ">
                                                                <input name="whatsapp_number" id="whatsapp_number" type="number" placeholder="Please enter your whatsapp number" autocomplete="off" min="6000000000" max="9999999999" required value="{{ $enq->whatsapp_number }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-12" >
                                                            <div class="contact-info">
                                                                <label class="mb-0" style="color: #403c9c;font-weight: 600;">May I know your Birthday </label>
                                                                <input name="date_of_birth" id="date_of_birth" type="date" max="<?= date('Y-m-d', strtotime('-15 years')) ?>" autocomplete="off" required  value="{{ $enq->date_of_birth }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12" >
                                                            <div class="contact-info ">
                                                                <input name="address" type="text" placeholder="Enter Your Address" autocomplete="off" required value="{{ $enq->address }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-12" >
                                                            <div class="register-form-area">
                                                                <select id="" class="state" name="state" required>
                                                                    <option value="">Select state</option>
                                                                    @foreach(getStates() as $state)
                                                                    <option value="{{ $state->name }}" {{ ($enq->state == $state->name)?'selected':'' }} > {{ $state->name }} </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-12" >
                                                            <div class="contact-info formFieldCity">
                                                                <input id="" name="city" type="text" placeholder="Enter Your City" autocomplete="off" required value="{{ $enq->city }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-12" >
                                                            <div class="contact-info ">
                                                                <input type="number" name="pincode" placeholder="Enter Your Pincode" min="100000" max="999999" autocomplete="off" required value="{{ $enq->pincode }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h3 class="heading">Guardian Details</h3>
                                                    <div class="row" >
                                                        <div class="col-12" >
                                                            <div class="contact-info">
                                                                <select id="" data-id="specify_guardian_relation_field" class="guardian_identity" name="guardian_identity" class="wizard-required">
                                                                    <option value="">Who is your guardian?</option>
                                                                    <option value="Father" {{ ($enq->guardian_identity == 'Father')?'selected':''}}>Father</option>
                                                                    <option value="Mother" {{ ($enq->guardian_identity == 'Mother')?'selected':''}}>Mother</option>
                                                                    <option value="Other" {{ ($enq->guardian_identity == 'Other')?'selected':''}}>Other</option>
                                                                </select>
                                                            </div>
                                                            <div class="specify_guardian_relation_field my-2" style="display:{{ ($enq->guardian_identity == 'Other')?'block':'none' }}" >
                                                                <label class="mb-0" style="color: #403c9c;font-weight: 600;">*Please share person's name and relation with you </label>
                                                                <textarea id="" name="additional_guardian_details" class="textarea_form-field" type="text" placeholder="Example. John Doe, Uncle" autocomplete="off" >{{$enq->additional_guardian_details}}</textarea>
                                                            </div>
                                                        </div> 
                                                        <div class="col-12" >
                                                            <div class="contact-info ">
                                                                <input name="father_name" type="text" placeholder="What is your father’s name?" autocomplete="off" value="{{ $enq->father_name }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-12" >
                                                            <div class="contact-info ">
                                                                <select id="" data-id="specify_father_occupation_field" name="father_occupation" class="wizard-required occupation">
                                                                    <option value="">What is his occupation?</option>
                                                                    <option value="Business" {{ ($enq->father_occupation == 'Business')?'selected':''}} >Business</option>
                                                                    <option value="Govt. Employee" {{ ($enq->father_occupation == 'Govt. Employee')?'selected':''}} >Govt. Employee</option>
                                                                    <option value="Private Employee" {{ ($enq->father_occupation == 'Private Employee')?'selected':''}} >Private Employee</option>
                                                                    <option value="Self Employed" {{ ($enq->father_occupation == 'Private Employee')?'selected':''}} >Self Employed</option>
                                                                    <option value="Agriculture" {{ ($enq->father_occupation == 'Agriculture')?'selected':''}} >Agriculture</option>
                                                                    <option value="Retired" {{ ($enq->father_occupation == 'Retired')?'selected':''}} >Retired</option>
                                                                    <option value="Other" {{ ($enq->father_occupation == 'Other')?'selected':''}} >Other</option>
                                                                </select>
                                                            </div>
                                                            <div class="specify_father_occupation_field my-2" style="display:{{ ($enq->father_occupation == 'Other')?'block':'none' }}" >
                                                                <input name="other_father_occupation" type="text" value="{{ $enq->other_father_occupation }}" placeholder="Please specity other occupation" autocomplete="off" >
                                                            </div>
                                                        </div>
                                                        <div class="col-12" >
                                                            <div class="contact-info ">
                                                                <input name="mother_name" type="text" placeholder="What is your mother’s name?" autocomplete="off"  value="{{ $enq->mother_name }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-12" >
                                                            <div class="contact-info ">
                                                                <select data-id="specify_mother_occupation_field" name="mother_occupation" class="wizard-required occupation">
                                                                    <option value="">What is her occupation?</option>
                                                                    <option value="House Wife" {{ ($enq->mother_occupation == 'House Wife')?'selected':''}} >House Wife</option>
                                                                    <option value="Business" {{ ($enq->mother_occupation == 'Business')?'selected':''}} >Business</option>
                                                                    <option value="Govt. Employee" {{ ($enq->mother_occupation == 'Govt. Employee')?'selected':''}} >Govt. Employee</option>
                                                                    <option value="Private Employee" {{ ($enq->mother_occupation == 'Private Employee')?'selected':''}} >Private Employee</option>
                                                                    <option value="Self Employed" {{ ($enq->mother_occupation == 'Self Employed')?'selected':''}} >Self Employed</option>
                                                                    <option value="Agriculture" {{ ($enq->mother_occupation == 'Agriculture')?'selected':''}} >Agriculture</option>
                                                                    <option value="Retired" {{ ($enq->mother_occupation == 'Retired')?'selected':''}} >Retired</option>
                                                                    <option value="Other" {{ ($enq->mother_occupation == 'Other')?'selected':''}} >Other</option>
                                                                </select>
                                                            </div>
                                                            <div class="specify_mother_occupation_field my-2" style="display:{{ ($enq->mother_occupation == 'Other')?'block':'none' }}" >
                                                                <input id="" name="other_mother_occupation" type="text"  value="{{ $enq->other_mother_occupation }}" placeholder="Please specity other occupation" autocomplete="off" >
                                                            </div>
                                                        </div>
                                                        <div class="col-12" >
                                                            <div class="contact-info ">
                                                                <input id="" name="parent_mobile_number" type="number" placeholder="Mention your guardian’s mobile no" autocomplete="off" min="6000000000" max="9999999999" value="{{ $enq->parent_mobile_number }}" required>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-12 text-center response_success" style="display:none;">
                                                            <div >
                                                                <p class="margin-0px-bottom response_status" > Invalid One Time Password </p>
                                                                <p class="margin-0px-bottom" >Please Enter OTP or <a href="javascript:void(0)" class="resendOtp" style="color: #403b99;font-weight: 800;">Resend OTP</a> </p>
                                                                <p class="margin-0px-bottom" >OTP will expire after 2mins : <span class="countdown"> 2:00 </span></p>
                                                            </div>
                                                        </div>

                                                        <div class="col-12">
                                                            <div class="form-group form_style response_success"  style="display:none;">
                                                                <label>One time password<span class="required">*</span></label>
                                                                <input type="number" name="verify_otp" class="form-control verify_otp" autocomplete="off" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix  mt-3">
                                                        <a href="{{ route('student-enquiry-form-with-slug',[$previousStep,'center'=>$center,'enquiry_id'=>base64_encode($enquiry_id)]) }}" class="form-wizard-previous-btn float-left">Previous</a> 
                                                        <input type="hidden" name="otp_validation" value="1" id="otp_validation" > 
                                                        <input type="hidden" name="responsed_otp" class="responsed_otp" value="">
                                                        <button type="submit" class="form-wizard-next-btn float-right">Next</button>
                                                    </div>
                                                </div>
                                            </div>
                                            @break
                                            @case(4)
                                            <!-- Know Goal -->
                                            <div class="wizerd_set" >
                                                <div class="wizerd_panel_header">
                                                    <div class="text-center">
                                                        <h3 class="heading">Tell Me about your goal</h3>
                                                    </div>
                                                </div>
                                                <div class="wizerd_fieldset" >
                                                    <div class="row" > 
                                                        <div class="col-12" >
                                                            <div class="contact-info ">
                                                                <label class="mb-0" style="color: #403c9c;font-weight: 600;"> What is your expected starting salary per month</label>
                                                                <input id="" name="expected_starting_salary" value="{{ $enq->expected_starting_salary }}"  type="number" autocomplete="off" required class="wizard-required">
                                                            </div>
                                                        </div>
                                                        <div class="col-12" >
                                                            <div class="contact-info ">
                                                                <label class="mb-0" style="color: #403c9c;font-weight: 600;"> Expected salary per month after 5 Years</label>
                                                                <input id="" name="expected_monthly_salary_after_5_years" value="{{ $enq->expected_monthly_salary_after_5_years }}"  type="number" autocomplete="off" required class="wizard-required">
                                                            </div>
                                                        </div>
                                                        <div class="col-12" >
                                                            <div class="contact-info formFieldlocationPrefarence">
                                                                <label class="mb-0" style="color: #403c9c;font-weight: 600;"> Do you have any location preference for placement? [If yes, please specify]</label>
                                                                <div class="field_checkbox_group mt-3">
                                                                    <label for="same_city" ><input type="radio" id="same_city" name="preferred_job_location" value="same city" {{ ($enq->preferred_job_location == 'same city')?'checked':''}} > Same City </label>
                                                                    <label for="same_state" ><input type="radio" id="same_state" name="preferred_job_location" value="same State" {{ ($enq->preferred_job_location == 'same State')?'checked':''}} > Same State </label>
                                                                    <label for="same_india" ><input type="radio" id="same_india" name="preferred_job_location" value="Anywhere in India" {{ ($enq->preferred_job_location == 'Anywhere in India')?'checked':''}} > Anywhere in India </label>
                                                                    <label for="same_world" ><input type="radio" id="same_world" name="preferred_job_location" value="Anywhere in World" {{ ($enq->preferred_job_location == 'Anywhere in World')?'checked':''}} > Anywhere in World </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix  mt-3">
                                                        <a href="{{ route('student-enquiry-form-with-slug',[$previousStep,'center'=>$center,'enquiry_id'=>base64_encode($enquiry_id)]) }}" class="form-wizard-previous-btn float-left">Previous</a> 
                                                        <button href="javascript:void(0);" class="form-wizard-next-btn float-right">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                            @break
                                            @case(5)
                                            <!-- Know ICA -->
                                            <div class="wizerd_set" >
                                                <div class="wizerd_panel_header">
                                                    <div class="text-center">
                                                        <h3 class="heading">Tell Me about your class preference</h3>
                                                    </div>
                                                </div>
                                                <div class="wizerd_fieldset" >
                                                    <div class="row" > 
                                                        <div class="col-12" >
                                                            <div class="contact-info formFieldDayPreference">
                                                                <label class="mb-0" for="formFieldDayPreference" style="color: #403c9c;font-weight: 600;"> Any Day preference for training </label>
                                                                <div class="field_checkbox_group mt-3 row">
                                                                    <div class="col-md-4">
                                                                        <label for="weekdays" >
                                                                            <input type="checkbox" id="weekdays" name="preferred_training_days[]" value="Weekdays" {{ is_array($enq->preferred_training_days) && in_array('Weekdays', $enq->preferred_training_days)?'checked':'' }} > Weekdays
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label for="weekend" >
                                                                            <input type="checkbox" id="weekend" name="preferred_training_days[]" value="Weekend" {{ is_array($enq->preferred_training_days) && in_array('Weekend', $enq->preferred_training_days)?'checked':'' }} > Weekend
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12" >
                                                            <div class="contact-info formFieldTimeSlot">
                                                                <label class="mb-0" style="color: #403c9c;font-weight: 600;"> Any Time preference for training </label>
                                                                <div class="field_checkbox_group mt-3 row">
                                                                    <div class="col-md-4">
                                                                        <label for="08_00_am_09_30_am" >
                                                                            <input type="checkbox" id="08_00_am_09_30_am" name="preferred_training_time[]" value="8:00 AM - 9:30 AM" {{ is_array($enq->preferred_training_time) && in_array('8:00 AM - 9:30 AM', $enq->preferred_training_time)?'checked':'' }} > 08:00 AM - 09:30 AM
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label for="08_30_am_11_00_am" >
                                                                            <input type="checkbox" id="08_30_am_11_00_am" name="preferred_training_time[]" value="08:30 AM - 11:00 AM" {{ is_array($enq->preferred_training_time) && in_array('08:30 AM - 11:00 AM', $enq->preferred_training_time)?'checked':'' }} > 08:30 AM - 11:00 AM 
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label for="11_00_am_12_30_pm" >
                                                                            <input type="checkbox" id="11_00_am_12_30_pm" name="preferred_training_time[]" value="11:00 AM - 12:30 PM" {{ is_array($enq->preferred_training_time) && in_array('11:00 AM - 12:30 PM', $enq->preferred_training_time)?'checked':'' }} > 11:00 AM - 12:30 PM 
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label for="12_30_pm_02_00_pm" >
                                                                            <input type="checkbox" id="12_30_pm_02_00_pm" name="preferred_training_time[]" value="12:30 PM - 02:00 PM" {{ is_array($enq->preferred_training_time) && in_array('12:30 PM - 02:00 PM', $enq->preferred_training_time)?'checked':'' }} > 12:30 PM - 02:00 PM 
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label for="02_00_pm_03_30_pm" >
                                                                            <input type="checkbox" id="02_00_pm_03_30_pm" name="preferred_training_time[]" value="02:00 PM - 03:30 PM" {{ is_array($enq->preferred_training_time) && in_array('02:00 PM - 03:30 PM', $enq->preferred_training_time)?'checked':'' }} > 02:00 PM - 03:30 PM 
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label for="03_30_pm_05_00_pm" >
                                                                            <input type="checkbox" id="03_30_pm_05_00_pm" name="preferred_training_time[]" value="03:30 PM - 05:00 PM" {{ is_array($enq->preferred_training_time) && in_array('03:30 PM - 05:00 PM', $enq->preferred_training_time)?'checked':'' }} > 03:30 PM - 05:00 PM 
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label for="05_00_pm_06_30_pm" >
                                                                            <input type="checkbox" id="05_00_pm_06_30_pm" name="preferred_training_time[]" value="05:00 PM - 06:30 PM" {{ is_array($enq->preferred_training_time) && in_array('05:00 PM - 06:30 PM', $enq->preferred_training_time)?'checked':'' }} > 05:00 PM - 06:30 PM 
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label for="06_30_pm_08_00_pm" >
                                                                            <input type="checkbox" id="06_30_pm_08_00_pm" name="preferred_training_time[]" value="06:30 PM - 08:00 PM" {{ is_array($enq->preferred_training_time) && in_array('06:30 PM - 08:00 PM', $enq->preferred_training_time)?'checked':'' }} > 06:30 PM - 08:00 PM 
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12" >
                                                            <div class="contact-info formFieldTimeSlot">
                                                                <label class="mb-0" style="color: #403c9c;font-weight: 600;"> How do you come to know about ICA Edu Skills </label>
                                                                <div class="field_checkbox_group mt-3 row">
                                                                    <div class="col-md-3">
                                                                        <label for="website" >
                                                                            <input type="checkbox" id="website" name="pink_form_source[]" value="Website" {{ is_array($enq->pink_form_source) && in_array('Website', $enq->pink_form_source)?'checked':'' }} >Website
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <label for="google" >
                                                                            <input type="checkbox" id="google" name="pink_form_source[]" value="Google Search" {{ is_array($enq->pink_form_source) && in_array('Google Search', $enq->pink_form_source)?'checked':'' }} >Google Search 
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <label for="facebook" >
                                                                            <input type="checkbox" id="facebook" name="pink_form_source[]" value="Facebook" {{ is_array($enq->pink_form_source) && in_array('Facebook', $enq->pink_form_source)?'checked':'' }} >Facebook 
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <label for="instagram" >
                                                                            <input type="checkbox" id="instagram" name="pink_form_source[]" value="Instagram" {{ is_array($enq->pink_form_source) && in_array('Instagram', $enq->pink_form_source)?'checked':'' }} >Instagram 
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <label for="youtube" >
                                                                            <input type="checkbox" id="youtube" name="pink_form_source[]" value="YouTube" {{ is_array($enq->pink_form_source) && in_array('YouTube', $enq->pink_form_source)?'checked':'' }} >YouTube 
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <label for="twitter" >
                                                                            <input type="checkbox" id="twitter" name="pink_form_source[]" value="Twitter" {{ is_array($enq->pink_form_source) && in_array('Twitter', $enq->pink_form_source)?'checked':'' }} > Twitter 
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <label for="linkedin" >
                                                                            <input type="checkbox" id="linkedin" name="pink_form_source[]" value="LinkedIn" {{ is_array($enq->pink_form_source) && in_array('LinkedIn', $enq->pink_form_source)?'checked':'' }} > LinkedIn 
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <label for="banners" >
                                                                            <input type="checkbox" id="banners" name="pink_form_source[]" value="Banners" {{ is_array($enq->pink_form_source) && in_array('Banners', $enq->pink_form_source)?'checked':'' }} > Banners 
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <label for="hoardings" >
                                                                            <input type="checkbox" id="hoardings" name="pink_form_source[]" value="Hoardings" {{ is_array($enq->pink_form_source) && in_array('Hoardings', $enq->pink_form_source)?'checked':'' }} > Hoardings 
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <label for="roadshow" >
                                                                            <input type="checkbox" id="roadshow" name="pink_form_source[]" value="Roadshow" {{ is_array($enq->pink_form_source) && in_array('Roadshow', $enq->pink_form_source)?'checked':'' }} > Roadshow 
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <label for="seminars" >
                                                                            <input type="checkbox" id="seminars" name="pink_form_source[]" value="Seminars" {{ is_array($enq->pink_form_source) && in_array('Seminars', $enq->pink_form_source)?'checked':'' }} > Seminars 
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <label for="handbill_leaflet" >
                                                                            <input type="checkbox" id="handbill_leaflet" name="pink_form_source[]" value="Handbill/Leaflet" {{ is_array($enq->pink_form_source) && in_array('Handbill/Leaflet', $enq->pink_form_source)?'checked':'' }} > Handbill/Leaflet 
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <label for="Friends_Relative_Teacher" >
                                                                            <input type="checkbox" id="Friends_Relative_Teacher" name="pink_form_source[]" value="Friends/Relative/Teacher" {{ is_array($enq->pink_form_source) && in_array('Friends/Relative/Teacher', $enq->pink_form_source)?'checked':'' }} > Friends/Relative/Teacher 
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12" >
                                                            <div class="contact-info formFieldComputerKnowledge">
                                                                <label class="mb-0" style="color: #403c9c;font-weight: 600;"> Any previous computer knowledge</label>
                                                                <div class="row">
                                                                    <div class="col-md-5">
                                                                        <div class="form-group row">
                                                                            <label for="" class="col-sm-3 text-right control-label col-form-label">Subject</label>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" class="" name="previous_computer_knowledge" id="" placeholder="Enter Subject Here" value="{{ $enq->previous_computer_knowledge }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-7">
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 text-center">
                                                            <label class="error"></label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix  mt-3">
                                                        <a href="{{ route('student-enquiry-form-with-slug',[$previousStep,'center'=>$center,'enquiry_id'=>base64_encode($enquiry_id)]) }}" class="form-wizard-previous-btn float-left">Previous</a> 
                                                        <button href="javascript:void(0);" class="form-wizard-next-btn float-right">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                            @break
                                        @endswitch
                                        <input name="center_id" type="hidden" value="{{ $center }}" >
                                        <input name="enquiry" type="hidden" value="{{ (isset($enquiry_id))?$enquiry_id:''}}" >
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
                    "pink_form_source[]": "required",
                    "skill_list[]": { required: true }
                },
                messages: {
                    lead_prefference: {
                        required: "Please Select Any of the following option.",
                    },
                    placement_duration: {
                        required: "Please Select Any of the following option.",
                    },
                    job_type: {
                        required: "Please Select Any of the following option.",
                    },
                    "pink_form_source[]": {
                        required: "Please Select How do you come to know about ICA Edu Skills.",
                    },
                    "skill_list[]": {
                        required: "Please Select Any of the following option.",
                    },
                    qualification: {
                        required: "Please Select highest Qualification.",
                    },
                    passing_month: {
                        required: "Please Select Passing Month.",
                    },
                    passing_year: {
                        required: "Please Select Passing Year.",
                    },
                    institute: {
                        required: "Enter Passing College/University.",
                    },
                },
                errorElement : 'label',
                errorLabelContainer: '.error',
                submitHandler: function(form) {
                    let formId = $(form).attr('id');
                    let otp_validation = jQuery("#" + formId + " #otp_validation").val();
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