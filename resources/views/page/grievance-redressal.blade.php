@extends('layouts.main')
    @section('content')
	<!-- Start of breadcrumb section
		============================================= -->
	<section id="breadcrumb" class="inner-banner relative-position backgroud-style"  style="background-image: url({{ (isset($contentMain->banner_image))?getSizedImage('',$contentMain->banner_image):url('assets/img/banner/brt-1.jpg') }});">
		<div class="container">
			<div class="row">
				<div class="col-md-9">

					<div class="inner-banner-breadcrumb" >
						<span class="breadcrumbElement"> 
							<a href="{{url('/')}}" > Home </a> 
						</span>
						<span class="breadcrumbElement"> 
							 <i class="fas fa-chevron-right"> </i>
						</span> 
						<span class="breadcrumbElement"> 
							{{(isset($contentMain))?$contentMain->name:"Default Page" }}
						 </span>
					</div>
					<div class="inner-banner-content">
						<div class="inner-banner-title">
							<h1>{{(isset($contentMain))?$contentMain->name:"Default Page" }}</h1>
						</div>
						<div class="inner-banner-description">
							{!! (isset($contentMain))?$contentMain->description:"Default Description" !!}
						</div>
					</div>
				</div>
				<div class="col-md-3">
					
				</div>
			</div>
		</div>
	</section>
	<!-- End of breadcrumb section
		============================================= -->
	<!-- Start of about us content
		============================================= -->
		<section id="grievance-redressal" class="grievance-redressal-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="grievance-redressal-content-item">
							<div class="grievance-redressal-item">
							    <h1>What is Job Guarantee?</h1>
								<p>Many students report that the "100% Job Guarantee" promise is misleading, and they struggle to find jobs through the ICA Edu Skills placement support.</p>
								
								<p>A student needs to understand that simply paying for a Job Guarantee course doesn’t make a student employable anywhere in the world. To truly become job-ready, one must complete the structured and proven training process developed by ICA Edu Skills over 26 years. Employers, whether associated with us or not, look for candidates who possess the necessary operational skills to handle accounting tasks effectively.</p>
								
								<h2>List of ICA's Job Guarantee Courses:</h2>
								<p>Job Guarantee applies only to the following career courses:</p>
								    
								    <ul>
								        <li>Certified Industrial Accountant – Express (Duration: 8 months)</li>
								        <li>Certified Industrial Accountant (Duration: 12 months)</li>
								        <li>Certified Industrial Accountant with SAP - (Duration: 18 months)</li>
								        <li>Certified Industrial Accountant – Plus (Duration: 18 months)</li>
								    </ul>
								
								<p>If someone enrolled in any other courses, they won’t benefit from the job guarantee process.</p>
								
								<h2>Job Guarantee Criteria:</h2>
								
								<p>Students who have enrolled in any of the <a style="color: blue; text-decoration: underline;" href="https://www.icajobguarantee.com/courses/accounting-course-cia" target="_blank">Job Guarantee Courses</a> or Programs at an ICA Edu Skills center or franchise across India must meet specific quality criteria to secure a job opportunity. The quality parameters of a student are strictly maintained, taking into account industry needs and recruiters' requirements for a candidate with the necessary skills.</p>
								<div class="row">
								<div class="col-md-4">
								    <img src="https://www.icajobguarantee.com/public/upload/2025-08-13/ica-job-guarantee-criteria.webp" alt="Job" />
								</div>
								<div class="col-md-8">
									<p>The criteria are as follows:-</p>
								
								    <ul>
                                        <li>A student needs to maintain an attendance rate of 90% in the class.</li>
                                        <li>A student must secure 80% marks in aggregate in all the internal examinations conducted at the center.</li>
                                        <li>Students need to attend a Personal Development Program (PDP) <sup style="color: red;">*</sup> session to prepare for the interview.</li>
                                    </ul>
                                    
                                    <p><sup style="color: red;">*</sup> The Personal Development Program is mainly conducted as</p>
                                    
                                    <ul>    
                                        <li>Monthly Mock Interviews</li>
	                                    <li>GDPI (Group Discussion & Personal Interview) / SOBO (Speak Out Bowled Out)</li>
	                                    <li>Resume Writing</li>
	                                    <li>Soft Skills Training</li>
	                               </ul>
	                           </div>
	                           </div>
	                           
	                           <p>As part of the <a style="color: blue; text-decoration: underline;" href="https://www.icajobguarantee.com/placements">ICA's Placement Program</a>, students meeting the criteria mentioned above, are placed into a 6-month internship with a Chartered Accountant or any organization, followed by multiple job interview opportunities.</p>    
	                           
	                           <p>We provide an <strong>Anytime Job Card (ATJ card)</strong> to a student who qualifies for all the criteria mentioned above. This ATJ Card is a lifetime card provided to the students to assist them in getting placed at any of our registered employers. If the first job does not work out, we continue arranging interviews until you are placed in an organization.</p>
                               
                               <p><strong>So the 'Job Guarantee' promise is not fake; it is simply a matter of understanding the term.</strong></p>
                              
                              <p>We believe in accountability. That is why we have a dedicated grievance resolution department to address any concerns about placements.</p>
	                               
							</div>
						</div>
					</div>
			</div>
		</section>
	<!-- End of about us content
		============================================= -->
@endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection