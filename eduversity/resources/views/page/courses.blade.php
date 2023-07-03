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
	
	<!-- Start of sponsor section
		============================================= -->
	<section id="career" class="sponsor-section">
		<div class="container">
			<div class="section-title-2 mb65 headline text-left">
				<h2>Get placed <span> where you belong.</span></h2>
			</div>
			<div class="sponsor-item sponsor-1">
				@foreach(getRecruiters() as $value)
				<div class="sponsor-pic text-center">
					<img src="{{ getSizedImage('',$value->featured_image) }}" alt="">
				</div>
				@endforeach		
			</div>
		</div>
	</section>
	<!-- End of sponsor section
	============================================= -->
	
	<!-- Start of faq section
	============================================= -->
		<section id="faq" class="teacher-details-area">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
					<div class="about-teacher about-faq faq-secound-home-version">
							<div class="section-title-2  headline text-left">
								<h2>Frequently  <span>Ask &amp; Questions.</span></h2>
							</div>							
							<div class="faq-tab mb35">
								<div class="faq-tab-ques  ul-li">
									<div id="accordion3" class="panel-group">
										@foreach(getFaqs("Course") as $key => $value)
										<div class="panel">
											<div class="panel-title" id="heading_{{$key}}">
												<h3 class="mb-{{$key}}">
													<button class="btn btn-link" data-toggle="collapse" data-target="#collapse_{{$key}}" aria-expanded="true" aria-controls="collapse_{{$key}}">
													{{ $value->question }}
													</button>
												</h3>
											</div>
											<div id="collapse_{{$key}}" class="collapse" aria-labelledby="heading_{{$key}}" data-parent="#accordion3">
												<div class="panel-body">
												{!! $value->answer !!}
												</div>
											</div>
										</div>
										@endforeach                                       
									</div>
									<!-- end of #accordion -->
								</div>
							</div>

							<div class="about-btn">
								<div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
									<a href="#">Make Question <i class="fas fa-caret-right"></i></a>
								</div>
								<div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
									<a href="{{ url('contact-us')}}">contact us <i class="fas fa-caret-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End of faq section
	============================================= -->
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection