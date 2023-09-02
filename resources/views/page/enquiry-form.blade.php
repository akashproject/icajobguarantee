@extends('layouts.ad-main')
    @section('content')
    {{$contentMain->sendBrochure = null}}
    <!-- Start of Header section
	============================================= -->
	<header>
		<div id="main-menu"  class="main-menu-container header-style-2">
			<div class="header-top">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-7">
							
						</div>
						<div class="col-md-5 top-right-bar">
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
                            <form id="global_other_details_form" class="contact_form lead_form" action="{{ url('enquiry-form-submit') }}" method="POST" enctype="multipart/form-data">
                                <div class="form_process" >
                                    <h3> Personal Details </h3>
                                    <div class="row" > 
                                        @csrf
                                        <div class="col-md-3" >
                                            <label for="formFieldName"> Full name </label>
                                            <div class="contact-info formFieldName">
                                                <input id="formFieldName" name="name" type="text" placeholder="Enter Your Name" autocomplete="off" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3" >
                                            <label for="formFieldName"> Email Address </label>
                                            <div class="contact-info formFieldEmail">
                                                <input id="formFieldEmail" name="email" type="email" placeholder="Enter Your Email" autocomplete="off" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3" >
                                            <label for="formFieldMobile"> Mobile Number </label>
                                            <div class="contact-info formFieldMobile">
                                                <input id="formFieldMobile" name="mobile" type="number" placeholder="Enter Your Mobile" autocomplete="off" min="6000000000" max="9999999999" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3" >
                                            <label for="formFieldDob"> Date of Birth </label>
                                            <div class="contact-info formFieldDob">
                                                <input id="formFieldDob" name="dob" type="date" placeholder="Enter Date of Birth" autocomplete="off" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12" >
                                            <div class="contact-info formFieldAddress">
                                                <input id="formFieldAddress" name="address" type="text" placeholder="Enter Your Address" autocomplete="off" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3" >
                                            <div class="contact-info formFieldPincode">
                                                <input id="formFieldPincode" name="pincode" type="text" placeholder="Enter Your Pincode" autocomplete="off" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3" >
                                            <div class="contact-info formFieldCity">
                                                <input id="formFieldCity" name="city" type="text" placeholder="Enter Your City" autocomplete="off" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3" >
                                            <div class="register-form-area">
                                                <select id="formFieldState" class="state" name="state" required>
                                                    <option value="">Select state</option>
                                                    @foreach(getStates() as $state)
                                                    <option value="{{ $state->name }}"> {{ $state->name }} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3" >
                                            <div class="contact-info formFieldOccupation">
                                                <input id="formFieldOccupation" name="occupation" type="text" placeholder="Enter Your Occupation" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <h3>  Guardian Details </h3>
                                    <div class="row" > 
                                        <div class="col-md-3" >
                                            <label for="formFieldParentName"> Father/Mother/Gurdian's Name </label>
                                            <div class="contact-info formFieldParentName">
                                                <input id="formFieldParentName" name="parent_name" type="text" placeholder="Enter Parent Name" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-md-3" >
                                            <label for="formFieldParentMobile"> Gurdian's Mobile Number </label>
                                            <div class="contact-info formFieldParentMobile">
                                                <input id="formFieldParentMobile" name="parent_mobile" type="number" placeholder="Enter Parent Mobile" autocomplete="off" min="6000000000" max="9999999999">
                                            </div>
                                        </div>
                                        <div class="col-md-3" >
                                            <label for="formFieldParentEmail"> Gurdian's Email Address </label>
                                            <div class="contact-info formFieldParentEmail">
                                                <input id="formFieldParentEmail" name="parent_email" type="email" placeholder="Enter Parent Email" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-md-3" >
                                            <label for="formFieldParentOccupation"> Gurdian's Occupation </label>
                                            <div class=" formFieldParentOccupation">
                                                <span>
                                                    <input name="parent_occupation" type="radio" autocomplete="off" value="Business" > Business
                                                </span>
                                                <span>
                                                    <input name="parent_occupation" type="radio" autocomplete="off" value="Service" > Service
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <h3>  Academic Qualification <span style="font-size: 14px;color: #323232;"> (Fill up this section in reverse chronological order)<span> </h3>
                                    <div class="academic_qualification" >
                                        <div class="row" > 
                                            <div class="col-md-2" >
                                                <div class="contact-info formFieldPassingYear">
                                                    <input id="formFieldPassingYear" name="qualification[year][]" type="number" placeholder="Passing Year" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-md-3" >
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
                                            <div class="col-md-3" >
                                                <div class="contact-info formFieldPassingUniversity">
                                                    <input id="formFieldUniversity" name="qualification[board][]" type="text" placeholder="College/University" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-md-2" >
                                                <div class="contact-info formFieldPassingStream">
                                                    <input id="formFieldStream" name="qualification[stream][]" type="text" placeholder="Stream" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-md-2" >
                                                <div class="contact-info formFieldPassingMarks">
                                                    <input id="formFieldMarks" name="qualification[marks][]" type="number" placeholder="Marks (%)" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>  
                                    </div>  
                                    <a href="javascript:void(0)" class="btn btn-primary addMoreBtn" data-id="academic_qualification"> Add More </a>
                                    
                                    <div class="bg-gray">    
                                        <h3> Professional Qualification (If Any)</h3>
                                        <div class="professional_qualification" >
                                            <div class="row" > 
                                                <div class="col-md-2" >
                                                    <div class="contact-info formFieldProfessionalPassingYear">
                                                        <input id="formFieldProfessionalPassingYear" name="professional_qualification[][year]" type="number" placeholder="Passing Year" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="col-md-3" >
                                                    <div class="contact-info formFieldInstituteName">
                                                        <input id="formFieldInstituteName" name="professional_qualification[][institute]" type="text" placeholder="Enter Institute Name" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="col-md-7" >
                                                    <div class="contact-info formFieldCourseDetails">
                                                        <input id="formFieldCourseDetails" name="professional_qualification[][course]" type="text" placeholder="Enter Course Details" autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)" class="btn btn-primary addMoreBtn" data-id="professional_qualification"> Add More </a>
                                    </div>

                                    <div class="bg-gray">    
                                        <h3> Work Experience (If Any)</h3>
                                        <div class="work_experience" >
                                            <div class="row" > 
                                                <div class="col-md-2" >
                                                    <div class="contact-info formFieldPassingYear">
                                                        <input id="formFieldPassingYear" name="experience[year][]" type="number" placeholder="Joining Year" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="col-md-3" >
                                                    <div class="contact-info formFieldInstitureName">
                                                        <input id="formFieldCompanyName" name="experience[company][]" type="text" placeholder="Company Name" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="col-md-3" >
                                                    <div class="contact-info formFieldResponsibility">
                                                        <input id="formFieldResponsibility" name="experience[responsibility][]" type="text" placeholder="Work Responsibility" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="col-md-2" >
                                                    <div class="contact-info formFieldDuration">
                                                        <input id="formFieldDuration" name="experience[duration][]" type="number" placeholder="Total Experience" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="col-md-2" >
                                                    <div class="contact-info formFieldSalary">
                                                        <input id="formFieldSalary" name="experience[][salary]" type="number" placeholder="Work Salary" autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)" class="btn btn-primary addMoreBtn" data-id="work_experience"  > Add More </a>
                                    </div>
                                    <div class="bg-gray">    
                                        <h3> Where do you come to know about ICA</h3>
                                        <div class="row" > 
                                            <div class="col-md-12" >
                                                <div class="formFieldKnowAboutIca required">
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
                                                        <input name="know_from[]" type="checkbox" autocomplete="off" value="Instagram" > Instagram
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
                                            <div class="col-md-3" >
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
                                            <div class="col-md-3" >
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
                                        <div class="row" > 
                                            <div class="col-md-12 py-2" >
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
                                            <div class="col-md-12" >
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
                                    <input name="center_id" type="hidden" value="1" >
                                    <div class="nws-button text-center white text-capitalize py-5">
                                        <button class="submit_classroom_lead_generation_form form_step_1" type="submit">Apply Now <i class="fas fa-arrow-right"> </i> </button> 
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
    @endsection

@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection