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

	<!-- Start of write for us section
		============================================= -->
		<section id="contact-page" class="contact-page-section">
			<div class="container">
				<div id="page-details-content" class="row">
					<div class="col-lg-12" >
						<p>Do you possess the skill and potential in writing high quality curated content on Accounting, Taxation, GST, SAP and Advanced Excel? If yes, we welcome you to become part of our active writers' community at ICA Edu Skills!</p>

						<h3>Why Write for Us?</h3>

						<ul>
							<li><strong>Reach a Targeted Audience:</strong> Share your knowledge with a dedicated 5 Lakhs+ community of students seeking valuable insights on Accounting, Taxation, Tally, GST, and SAP.</li>
							<li><strong>Establish Yourself as an Authority:</strong> Get your name and work published on a reputable website, solidifying your position as a thought leader in the accounting industry.</li>
							<li><strong>Expand Your Network:</strong> Connect with other accounting professionals, exchange ideas, and build a strong online presence within the industry.</li>
							<li><strong>Refer your Website:</strong> We will allow 2 links which should point to the detailed page with an insightful content.</li>
							<li><strong>Social Media Promotion:</strong> Your insightful content will be shared a targetted audience on major social platforms.</li>
						</ul>
						
						<h3>Content Guidelines</h3>
						<ul>
							<li><strong>In-depth knowledge:</strong> Demonstrate a strong understanding of accounting principles, tax regulations, Tally applications, GST compliance, and SAP functionalities.</li>
							<li><strong>Engaging writing style:</strong> Captivate readers with your ability to explain complex topics clearly, concisely, and in an interesting manner.</li>
							<li><strong>Data-driven approach:</strong> Support your arguments with relevant data, industry trends, Comparative analyses and case studies.</li>
							<li><strong>Commitment to accuracy:</strong> Ensure your work is factually correct, well-edited, and free of errors.</li>
							<li><strong>Writing Guide:</strong> Your content should be in <strong>1000+ words</strong>. You can place insightful information in terms of <strong>PDF, XLS or JPG/PNG</strong> format.  Any promotional content will be rejected by our editorial team.</li>
							<li><strong>Linking Guide:</strong> In the content body, your content need to only have one link to a informative page on your website (not a product/service page).</li>
							<li><strong>Author Profile:</strong> Use Tell us about yourself, your skills, your professional background, and your expertise in specific areas with any social profile link.</li>
						</ul>
						
						<h3>Term & Conditions</h3>
						
						    <p>The Editorial team at ICA Edu Skills will review your content and will have the right to make changes in the content and the links in order to fit the website requirement and satisfy audience search intent.</p>
						        
						<h3>Submit Your Content</h3>

							<p>To start with, <a href="mailto:info@icajobguarantee.com" target="_blank">mail us</a> your content with other supporting documents like pdf, xls, images etc. We're eager to hear from you and see how your contributions can enrich our platform and empower our readers!</p>
					</div>
				</div>
			</div>
		</section>
	<!-- End of write for us section
		============================================= -->
	
            <style type="text/css">
            /* all styles related to this page */
            #page-details-content h3, #page-details-content h4, #page-details-content h5, #page-details-content h6 {
            	color: #393185!important;
            	padding: 0!important;
            	margin: 2% 0!important;
            }
            
            #page-details-content h3 {
            	font-size: 22px!important;	
            }
            
            #page-details-content h4 {
            	font-size: 18px!important;	
            }
            
            #page-details-content h5 {
            	font-size: 16px!important;	
            }
            
            #page-details-content h6 {
            	font-size: 14px!important;	
            }
            
            #page-details-content p {
            	color: #222!important;
            	padding: 1% 0!important; 
            	margin: 1% 0!important;
            }
            
            #page-details-content a {
            	color: #3E4095!important;
            	text-decoration: underline!important;
            }
            
            #page-details-content ul {
            	list-style-type: circle!important;
            	margin: 1% 0 1% 6% 2%!important;
            }
            
            #page-details-content ol {
            	margin: 1% 0 1% 6% 2%!important;
            }
            
            #page-details-content ul li, #page-details-content ol li {
            	color: #222!important;
            	margin-bottom: 0.5%;
            }
            /* all styles related to this page */
            </style>

    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection