@extends('layouts.ad-main')
@section('content')

<!-- Page Styles -->
<style type="text/css">
#section-light {
	background: #fff;
}	

#section-deep  {
	background: #F0F4F6;
}
h1, h2, h3, h4, h5, h6 {
	margin: 15px 0!important;
}	
h1 {
	font-size: 30px!important;	
}
h1 span {
	color: #393185!important;
	font-weight: 700!important;
}
h2 {
	font-size: 24px!important;
	color: #393185!important;
}	
.course-block {
	width: 100%;
	display: table;
    padding: 15px;
    box-shadow: 0px 0px 7px 3px #cccccc87;
    margin: auto;
    background: #ffffff;
	text-align: center;
}
.my-5 {
    margin-bottom: 3rem !important;
}
.ad-banner-option .apply-now {
	background: #01069D;
    padding: 12px;
    border: 2px solid;
    border-radius: 6px;
    margin: 0 1rem;
    color: #3f3a98;
    font-size: 15px;
    font-weight: 600;
}
.ad-banner-option span {
    display: inline-block;
}


banner {
    background-color: var(--thm-white);
    height: 830px;
    width: 100%;
    position: relative;
}
.z-1 {
    position: relative;
    z-index: 1;
}
.relative {
    position: relative;
}
*, ::after, ::before {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
    unicode-bidi: isolate;
}

.image-fit {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
}

img {
    max-width: 100%;
}
img {
    vertical-align: middle;
    border-style: none;
}
*, ::after, ::before {
    box-sizing: border-box;
}
</style>	
<!-- Page Styles -->


<!-- center header -->
<section id="section-light">
	<div class="container">
		<!-- Banner Start -->
		<div class="banner relative z-1">
		   <img src="https://www.icacourse.in/wp-content/themes/scriptcrown/images/banner/element_1.png" class="element_1" alt="Element">
		   <img src="https://www.icacourse.in/wp-content/themes/scriptcrown/images/banner/element_line.png" class="element_line" alt="Element Line">
		   <!-- Texts -->
		   <div class="transform-center">
			  <div class="container">
				 <div class="row align-items-center">
					<div class="col-lg-6">
					   <div class="text_box">
						  <h1 style="font-size: 61px;">
							 <div class="strong">Reinvent The PRACTICAL</div>
							 <div class="sub">Learning Experience<br />
								With Us
							 </div>
						  </h1>
						  <p>India’s #1 Accounts, Finance & Taxation Training Institute to Provide Job Guarantee Courses</p>
						  <div class="text-center">
							 <a href="/online-accounting-courses/" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-rounded mr-4 mb-4">Explore Courses <i class="fal fa-chevron-right ml-2"></i></a>
						  </div>
					   </div>
					</div>
					<div class="col-lg-6">
					   <div class="image_box relative">
						  <img src="https://www.icacourse.in/wp-content/uploads/2023/02/accounting-and-taxation-courses-online.webp" alt="Accounting and Taxation Institute - Ahmedabad" class="image-fit">
						  <span class="bg-thm-color-three circle_element"></span>
					   </div>
					</div>
				 </div>
			  </div>
		   </div>
		   <!-- Bottom Line -->
		   <div class="bottom-line container"></div>
		</div>
		<!-- Banner End -->
	</div>
</section>
<!-- center header -->

<!-- Course details -->
<section id="course-details" class="galleries-section">
   <div class="container">
   <div class="testimonial-slide">
      <div class="section-title mb20 headline text-center">
         <span class="subtitle text-uppercase">Course Info</span>
         <h1> Explore The Best <span>Accounting, GST, SAP FICO, TallyPrime, Taxation</span> Courses</h1>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="row text-center">
				<div class="col-md-6 col-6">
					<div class="course-block">
                     <h2>Industrial Accounting Course (CIA)</h2>
						<div class="mb10" style="display: inline-block; overflow: hidden; color: #279e5e;">
						   <div class="comment-ratting float-left ul-li mr-3" >
							  <ul>
								 <li><i class="fas fa-star"></i></li>
								 <li><i class="fas fa-star"></i></li>
								 <li><i class="fas fa-star"></i></li>
								 <li><i class="fas fa-star"></i></li>
								 <li><i class="fas fa-star"></i></li>
							  </ul>
						   </div>
						   <div class="comment-ratting float-left ul-li px-3" style="font-weight: 600;border-left: 1px  solid;border-right: 1px solid;">
							  <span>97,784 Votes</span>
						   </div>
						   <div class="comment-ratting float-left ul-li mx-3" style="font-weight: 600;">
							  <span>109,043 Students</span>
						   </div>
						</div>
						<p>Best Accounting Course in India with practical training modules and 100% Job Guarantee for aspiring students and professionals.</p>
						<div style="text-align: left; display: inline-block; overflow: hidden;">
							<div>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> Business Accounting</span>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> TallyPrime</span>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> Direct Tax</span>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> GST</span>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> SAP</span>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> Advanced Accounts</span>
							</div>
						</div>
						<div class="col-12 text-center" >
							<div class="ad-banner-option">
								<span class="apply-now text-white">
									<a href="https://www.icajobguarantee.com/courses/accouting-course-cia" target="_blank"> View Details </a>
								</span>	
								<span class="apply-now text-white">
									<a onclick="lead_capture_form_btn('',3)" href="javascript:void(0)"> Download Brochure </a>
								</span>
							</div>
						</div>		
					</div>
				</div>
				<div class="col-md-6 col-6">
					<div class="course-block">
                     <h2>GST Certification Course</h2>
						<div class="mb10" style="display: inline-block; overflow: hidden; color: #279e5e;">
						   <div class="comment-ratting float-left ul-li mr-3" >
							  <ul>
								 <li><i class="fas fa-star"></i></li>
								 <li><i class="fas fa-star"></i></li>
								 <li><i class="fas fa-star"></i></li>
								 <li><i class="fas fa-star"></i></li>
								 <li><i class="fas fa-star"></i></li>
							  </ul>
						   </div>
						   <div class="comment-ratting float-left ul-li px-3" style="font-weight: 600;border-left: 1px  solid;border-right: 1px solid;">
							  <span>72,175 Votes</span>
						   </div>
						   <div class="comment-ratting float-left ul-li mx-3" style="font-weight: 600;">
							  <span>74,274 Students</span>
						   </div>
						</div>
						<p>Boost your career by enrolling in the most comprehensive GST Certification Course. Become a Certified GST Practitioner in top MNCs.</p>
						<div style="text-align: left; display: inline-block; overflow: hidden;">
							<div>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> GST Concepts</span>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> Levy & Collection of Tax</span>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> Valuation</span>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> Payment of Tax</span>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> Returns</span>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> GST using Tally</span>
							</div>
						</div>
						<div class="col-12 text-center" >
							<div class="ad-banner-option">
								<span class="apply-now text-white">
									<a href="https://www.icajobguarantee.com/courses/gst-certification-course" target="_blank"> View Details </a>
								</span>	
								<span class="apply-now text-white">
									<a onclick="lead_capture_form_btn('',3)" href="javascript:void(0)"> Download Brochure </a>
								</span>
							</div>
						</div>		
					</div>
				</div>
			</div>	
			<div class="row text-center">	
				<div class="col-md-6 col-6">
					<div class="course-block">
                     <h2>SAP FICO Course (Business User)</h2>
						<div class="mb10" style="display: inline-block; overflow: hidden; color: #279e5e;">
						   <div class="comment-ratting float-left ul-li mr-3" >
							  <ul>
								 <li><i class="fas fa-star"></i></li>
								 <li><i class="fas fa-star"></i></li>
								 <li><i class="fas fa-star"></i></li>
								 <li><i class="fas fa-star"></i></li>
								 <li><i class="fas fa-star"></i></li>
							  </ul>
						   </div>
						   <div class="comment-ratting float-left ul-li px-3" style="font-weight: 600;border-left: 1px  solid;border-right: 1px solid;">
							  <span>55,094 Votes</span>
						   </div>
						   <div class="comment-ratting float-left ul-li mx-3" style="font-weight: 600;">
							  <span>60,960 Students</span>
						   </div>
						</div>
						<p>Master the fundamentals of SAP Finance and Controlling (FICO) with this comprehensive SAP FICO course. Gain the skills to manage financial data effectively and become an SAP Certified Expert.</p>
						<div style="text-align: left; display: inline-block; overflow: hidden;">
							<div>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> SAP ERP Overview &Navigation</span>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> Procure to Pay Process</span>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> Order to Cash Process</span>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> General Ledger Accouting</span>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> Accounts Payable Business Process</span>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> Accruals & Deferrals</span>
							</div>
						</div>
						<div class="col-12 text-center" >
							<div class="ad-banner-option">
								<span class="apply-now text-white">
									<a href="https://www.icajobguarantee.com/courses/sap-fico-course" target="_blank"> View Details </a>
								</span>
								<span class="apply-now text-white">
									<a onclick="lead_capture_form_btn('',3)" href="javascript:void(0)"> Download Brochure </a>
								</span>
							</div>
						</div>		
					</div>
				</div>
				<div class="col-md-6 col-6">
					<div class="course-block">
                     <h2>Tally Prime + GST Course</h2>
						<div class="mb10" style="display: inline-block; overflow: hidden; color: #279e5e;">
						   <div class="comment-ratting float-left ul-li mr-3" >
							  <ul>
								 <li><i class="fas fa-star"></i></li>
								 <li><i class="fas fa-star"></i></li>
								 <li><i class="fas fa-star"></i></li>
								 <li><i class="fas fa-star"></i></li>
								 <li><i class="fas fa-star"></i></li>
							  </ul>
						   </div>
						   <div class="comment-ratting float-left ul-li px-3" style="font-weight: 600;border-left: 1px  solid;border-right: 1px solid;">
							  <span>93,771 Votes</span>
						   </div>
						   <div class="comment-ratting float-left ul-li mx-3" style="font-weight: 600;">
							  <span>99,524 Students</span>
						   </div>
						</div>
						<p>Learn Tally GST with Tally Prime GST course which covers the all Tally Prime modules together with GST, TDS, Returns Filing, PF, ESI, Payroll, Bill of Materials, Purchase and Sales Cycles, Backup/Restore and Security etc</p>
						<div style="text-align: left; display: inline-block; overflow: hidden;">
							<div>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> Company Creation </span>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> Cost Centre & Cost Category</span>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> Accounting </span>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> Inventory</span>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> Bill of Materials (BOM)</span>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> Purchase & Sales Cycle </span>
							</div>
						</div>
						<div class="col-12 text-center" >
							<div class="ad-banner-option">
								<span class="apply-now text-white">
									<a href="https://www.icajobguarantee.com/courses/tallyprime-gst-course" target="_blank"> View Details </a>
								</span>							
								<span class="apply-now text-white">
									<a onclick="lead_capture_form_btn('',3)" href="javascript:void(0)"> Download Brochure </a>
								</span>
							</div>
						</div>		
					</div>
				</div>
			</div>
			<div class="row text-center">	
				<div class="col-md-6 col-6">
					<div class="course-block">
                     <h2>Advanced Excel Course</h2>
						<div class="mb10" style="display: inline-block; overflow: hidden; color: #279e5e;">
						   <div class="comment-ratting float-left ul-li mr-3" >
							  <ul>
								 <li><i class="fas fa-star"></i></li>
								 <li><i class="fas fa-star"></i></li>
								 <li><i class="fas fa-star"></i></li>
								 <li><i class="fas fa-star"></i></li>
								 <li><i class="fas fa-star"></i></li>
							  </ul>
						   </div>
						   <div class="comment-ratting float-left ul-li px-3" style="font-weight: 600;border-left: 1px  solid;border-right: 1px solid;">
							  <span>15,080 Votes</span>
						   </div>
						   <div class="comment-ratting float-left ul-li mx-3" style="font-weight: 600;">
							  <span>16,409 Students</span>
						   </div>
						</div>
						<p>Dive deeper into Microsoft Excel with the Advanced Excel course and master advanced techniques to unlock the full potential of this powerful tool. Go beyond basic formulas and functions to automate tasks, analyze complex data, and create stunning visualizations that impress people.</p>
						<div style="text-align: left; display: inline-block; overflow: hidden;">
							<div>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> Database Design </span>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> Number & Conditional Formatting </span>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> Cell Reference</span>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> Lookup & Reference Functioon</span>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> Logical Functions & Formatting Documents</span>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> Financial Functions</span>
							</div>
						</div>
						<div class="col-12 text-center" >
							<div class="ad-banner-option">
								<span class="apply-now text-white">
									<a href="https://www.icajobguarantee.com/courses/advanced-excel-course" target="_blank"> View Details </a>
								</span>	
								<span class="apply-now text-white">
									<a onclick="lead_capture_form_btn('',3)" href="javascript:void(0)"> Download Brochure </a>
								</span>
							</div>
						</div>		
					</div>
				</div>
				<div class="col-md-6 col-6">
					<div class="course-block">
                     <h2>MIS Course + Analytics Program</h2>
						<div class="mb10" style="display: inline-block; overflow: hidden; color: #279e5e;">
						   <div class="comment-ratting float-left ul-li mr-3" >
							  <ul>
								 <li><i class="fas fa-star"></i></li>
								 <li><i class="fas fa-star"></i></li>
								 <li><i class="fas fa-star"></i></li>
								 <li><i class="fas fa-star"></i></li>
								 <li><i class="fas fa-star"></i></li>
							  </ul>
						   </div>
						   <div class="comment-ratting float-left ul-li px-3" style="font-weight: 600;border-left: 1px  solid;border-right: 1px solid;">
							  <span>259 Votes</span>
						   </div>
						   <div class="comment-ratting float-left ul-li mx-3" style="font-weight: 600;">
							  <span>601 Students</span>
						   </div>
						</div>
						<p>Take your tech career to the next level with an MIS course, and gain in-demand skills for today's workforce. Enroll now and stay ahead!</p>
						<div style="text-align: left; display: inline-block; overflow: hidden;">
							<div>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> Power BI </span>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> Advanced Excel </span>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> G-Suite </span>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> Data Studio </span>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> VBA </span>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> SQL </span>
							</div>
						</div>
						<div class="col-12 text-center" >
							<div class="ad-banner-option">
								<span class="apply-now text-white">
									<a href="https://www.icajobguarantee.com/courses/mis-course" target="_blank"> View Details </a>
								</span>							
								<span class="apply-now text-white">
									<a onclick="lead_capture_form_btn('',3)" href="javascript:void(0)"> Download Brochure </a>
								</span>
							</div>
						</div>		
					</div>
				</div>
			</div>
			<div class="row text-center">	
				<div class="col-md-6 col-6">
					<div class="course-block">
                     <h2>ZOHO Books</h2>
						<div class="mb10" style="display: inline-block; overflow: hidden; color: #279e5e;">
						   <div class="comment-ratting float-left ul-li mr-3" >
							  <ul>
								 <li><i class="fas fa-star"></i></li>
								 <li><i class="fas fa-star"></i></li>
								 <li><i class="fas fa-star"></i></li>
								 <li><i class="fas fa-star"></i></li>
								 <li><i class="fas fa-star"></i></li>
							  </ul>
						   </div>
						   <div class="comment-ratting float-left ul-li px-3" style="font-weight: 600;border-left: 1px  solid;border-right: 1px solid;">
							  <span>128 Votes</span>
						   </div>
						   <div class="comment-ratting float-left ul-li mx-3" style="font-weight: 600;">
							  <span>391 Students</span>
						   </div>
						</div>
						<p>Amp up your Accounting skills with ZOHO Book Training. Learn ZOHO Books for Accounting, GST, Voucher Entry, Sales Invoicing and make yourself more marketable to potential employers.</p>
						<div style="text-align: left; display: inline-block; overflow: hidden;">
							<div>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> ZOHO Books Introduction</span>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> Company Settings in ZOHO</span>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> Voucher Entry in ZOHO</span>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> Purchase Invoice in ZOHO</span>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> Sales Invoice in ZOHO</span>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> GST in ZOHO</span>
							</div>
						</div>
						<div class="col-12 text-center" >
							<div class="ad-banner-option">
								<span class="apply-now text-white">
									<a href="https://www.icajobguarantee.com/courses/zoho-books" target="_blank"> View Details </a>
								</span>							
								<span class="apply-now text-white">
									<a onclick="lead_capture_form_btn('',3)" href="javascript:void(0)"> Download Brochure </a>
								</span>
							</div>
						</div>		
					</div>
				</div>
				<div class="col-md-6 col-6">
					<div class="course-block">
                     <h2>Microsoft Office Certification</h2>
						<div class="mb10" style="display: inline-block; overflow: hidden; color: #279e5e;">
						   <div class="comment-ratting float-left ul-li mr-3" >
							  <ul>
								 <li><i class="fas fa-star"></i></li>
								 <li><i class="fas fa-star"></i></li>
								 <li><i class="fas fa-star"></i></li>
								 <li><i class="fas fa-star"></i></li>
								 <li><i class="fas fa-star"></i></li>
							  </ul>
						   </div>
						   <div class="comment-ratting float-left ul-li px-3" style="font-weight: 600;border-left: 1px  solid;border-right: 1px solid;">
							  <span>1460 Votes</span>
						   </div>
						   <div class="comment-ratting float-left ul-li mx-3" style="font-weight: 600;">
							  <span>1986 Students</span>
						   </div>
						</div>
						<p>Learn Word, Excel, and PowerPoint, and become a Microsoft expert with our Microsoft Office Course. Enroll today and take your office skills to the next level!</p>
						<div style="text-align: left; display: inline-block; overflow: hidden;">
							<div>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> Hardware & Software </span>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> Working with Windows 10 </span>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> File & Folder Management </span>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> Introduction to Ms Word 2019 </span>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> SAP</span>
								<span style="display: block;"><i class="fas fa-check" style="color: green;"></i> Advanced Accounts</span>
							</div>
						</div>
						<div class="col-12 text-center" >
							<div class="ad-banner-option">
								<span class="apply-now text-white">
									<a href="https://www.icajobguarantee.com/courses/microsoft-office-course" target="_blank"> View Details </a>
								</span>								
								<span class="apply-now text-white">
									<a onclick="lead_capture_form_btn('',3)" href="javascript:void(0)"> Download Brochure </a>
								</span>
							</div>
						</div>		
					</div>
				</div>		
			</div>
         </div>
      </div>
   </div>
</section>
<!-- End of Course Syllabus
   ============================================= -->
<!-- Course details -->

<!-- Data Band -->
<section id="section-light">


</section>
<!-- Data Band -->

<!-- About Us Band -->
<section id="section-deep">


</section>
<!-- About Us Band -->

<!-- Testimonials -->
<section id="section-light">


</section>
<!-- Testimonials -->

<!-- Testimonials -->
<section id="section-deep">


</section>
<!-- Testimonials -->

   @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection