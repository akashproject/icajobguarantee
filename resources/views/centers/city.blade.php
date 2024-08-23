@extends('layouts.main')
    @section('content')
	<!-- Start of breadcrumb section
		============================================= -->
	<section id="breadcrumb" class="inner-banner relative-position backgroud-style"  style="background-image: url({{ (isset($contentMain->banner_image))?getSizedImage('',$contentMain->banner_image):url('public/upload/2023-05-15/inner-banners.jpg') }});">
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


	<!-- Start of shop product section
		============================================= -->
		<section id="shop-product" class="shop-product-section">
			<div class="container">
				<div class="product-item">
					<div class="row">
						<div class="col-md-3">
							<div class="side-bar">
								<div class="side-bar-widget  first-widget">
									<h2 class="widget-title text-capitalize"><span>Find </span>By Location.</h2>
									<div class="listing-filter-form pb30">										
										<div class="filter-select mb20">
											<label>Find By States</label>
											<select class="gotoCourseCategory">
												<option value="" selected="">All States </option>
											@if($states)
												@foreach ($states as $value)
												<option value="{{ URL::to('/state') }}/{{ $value->slug }}" {{ (isset($state->slug) && ($value->slug == $state->slug)) ?"selected":"" }}> {{ $value->name }} </option>
												@endforeach	
											@endif		
											</select>
										</div>

										<div class="filter-select mb20">
											<label>Find By City</label>
											<select class="gotoCourseCategory">
												<option value="9" selected="">All Cities</option>
												@if(isset($cities))
													@foreach ($cities as $cityValue)
													<option value="{{ URL::to('/city') }}/{{ $cityValue->slug }}" {{ (isset($city->id) && ($city->id == $cityValue->id)) ?"selected":"" }}> {{ $cityValue->name }} </option>
													@endforeach	
												@endif	
											</select>
										</div>
										<!-- <form action="{{url('/centers')}}" method="get">
											<div class="filter-search mb20">
												<label>Search Pincode</label>
												<input type="text" class="" name="pincode" placeholder="Search by pincode">
											</div>
											<button type="submit" class="text-white border-none genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
												FIND CENTER <i class="fas fa-caret-right"></i>
											</button>
										</form> -->
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-9">
							<div class="shop-product-item">
								<div class="product-showcase">
									<div class="genius-shop-item">
										<div class="tab-container">
											<div id="tab1" class="best-product-section">
												@if(count($centers) >0 )
												<div class="row">
													@foreach($centers as $value)
													<div class="col-md-4">
														<div class="product-img-text">
															<div class="product-img text-center mb10">
																<img src="{{ ($value->featured_image)?getSizedImage('',$value->featured_image):url('assets/img/logo/center-logo.webp') }}" alt="">
															</div>
															<div class="product-text-content text-center mb20">
																<div class="best-title-price">
																	<div class="course-title headline">
																		<h3><a target="_blank" href="{{ URL::to('/centers') }}/{{ $value->slug }}">{{ $value->name }}</a></h3>
																	</div>
																</div>															
															</div>	
															<div class="course-meta mb10 text-center">
																<span class="course-category"><a href="{{ url('/state/'.getStateById($value->state_id)->slug) }}"><i class="fas fa-map-marker"></i> {{ getStateById($value->state_id)->name }}</a> ,<a href="{{ url('/city/'.getCityById($value->city_id)->slug) }}"> {{ getCityById($value->city_id)->name }} </a></span>
															</div>
															<div class="more-btn text-center" >
																<div class="course-type-list">	
																	<a class="btn-filled" href="javascript:void(0)" onclick="lead_capture_form_btn('',{{ $value->id }})"><i class="fas fa-download"></i> Brochure</a>
																</div>
																<div class="course-type-list">														
																	<a class="btn-outline" target="_blank" href="{{ URL::to('/centers') }}/{{ $value->slug }}" >View More <i class="fas fa-caret-right"></i></a>
																</div>														
															</div>														
														</div>
													</div>
													@endforeach													
												</div>
												@else 
												<div class="message-title"> 
													<h3> There is no center on your location! Check ICA Online </h3> 
												</div>
												<div class="row"  style="justify-content: center;">
													<div class="col-md-4">
														<div class="best-course-pic-text">
															<div class="best-course-pic relative-position">
																<img src="http://localhost/icajobguarantee/assets/img/course/bc-1.jpg" alt="">
																
																<div class="course-rate ul-li">
																	<ul>
																		<li><i class="fas fa-star"></i></li>
																		<li><i class="fas fa-star"></i></li>
																		<li><i class="fas fa-star"></i></li>
																		<li><i class="fas fa-star"></i></li>
																		<li><i class="fas fa-star"></i></li>
																	</ul>
																</div>
																<div class="course-details-btn">
																	<a href="https://www.icacourse.in/">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
																</div>
																<div class="blakish-overlay"></div>
															</div>
															<div class="best-course-text text-center">
																<div class="course-title mb20 headline relative-position">
																	<h3>
																		<a href="https://www.icacourse.in/"> ICA Online Course </a>
																	</h3>
																</div>
															</div>
															<div class="more-btn text-center">
																<div class="course-type-list">
																	<a class="btn-outline" href="https://www.icacourse.in/">Visit Online <i class="fas fa-caret-right"></i></a>
																</div>														
															</div>	
														</div>
													</div>
												</div>
												@endif
											</div><!-- tab-1 -->
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</section>
	<!-- End of shop product section
		============================================= -->

	<!-- Start of recent view product
		============================================= -->
		<section id="courses" class="best-course-section">
			<div class="container">
				<div class="section-title mb10 headline text-center">
					<span class="subtitle text-uppercase">SEARCH OUR COURSES</span>
					<h3>Check<span> Another Domain.</span></h3>
				</div>
				<div class="best-course-area mb10">
					<div class="row">
						@foreach (getCourseTypes() as $value)
						<div class="col-md-3">
							<div class="best-course-pic-text relative-position">
								<div class="best-course-pic relative-position">
									<img src="{{ (isset($value->featured_image))?getSizedImage('',$value->featured_image):url('/assets/img/course/bc-1.jpg') }}" alt="">
									<div class="course-rate ul-li">
										<ul>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
											<li><i class="fas fa-star"></i></li>
										</ul>
									</div>
									<div class="course-details-btn">
										<a  target="_blank" href="{{ URL::to('/category') }}/{{ $value->slug }}">Know More <i class="fas fa-arrow-right"></i></a>
									</div>
									<div class="blakish-overlay"></div>
								</div>
								<div class="best-course-text">
									<div class="course-title mb10 headline relative-position">
										<h3><a href="{{ URL::to('/category') }}/{{ $value->slug }}">{{ $value->name }}</a></h3>
									</div>
									<div class="course-short-description mb10" >
										{!! substr($value->excerpt,0,100); !!}...
									</div>
								</div>
								<div class="more-btn text-center" >
									<div class="course-type-list">	
										<a class="btn-filled" href="javascript:void(0)" onclick="lead_capture_form_btn({{ $value->id }},'')"><i class="fas fa-download"></i> Brochure</a>
									</div>
									<div class="course-type-list">														
										<a class="btn-outline" href="{{ URL::to('/category') }}/{{ $value->slug }}" >View More <i class="fas fa-caret-right"></i></a>
									</div>														
								</div>
							</div>
						</div>
						<!-- /course -->
						@endforeach		
					</div>
				</div>
			</div>
		</section>
	<!-- End of recent view product
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
										@foreach(getFaqs("Center") as $key => $value)
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
									<a href="#">contact us <i class="fas fa-caret-right"></i></a>
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