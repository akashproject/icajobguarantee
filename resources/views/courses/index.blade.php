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
	<!-- Start of course section
		============================================= -->
	<section id="course-page" class="course-page-section">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="short-filter-tab">
						<div class="shorting-filter  float-left">
							<span><b>View</b> By </span>
							<select class="gotoCourseCategory">
								<option value="" selected=""> Categories </option>
							@if(getCourseTypes())
								@foreach (getCourseTypes() as $value)
								<option value="{{ URL::to('/category') }}/{{ $value->slug }}" {{ (isset($category->slug) && ($value->slug == $category->slug)) ?"selected":"" }}> {{ $value->name }} </option>
								@endforeach	
							@endif		
							</select>
						</div>
						
						
					</div>

					<div class="genius-post-item">
						<div class="tab-container">
							@if(check_device('desktop'))
								<div class="course-list-view">
									<table>
									
										<tr class="list-head">
											<th>COURSE NAME</th>												
											<th>DURATION</th>
											<th>MODULE</th>
											<th>Options</th>
										</tr>
										@if($courses)
										@foreach ($courses as $value)
										<tr>
											<td>
												<div class="course-list-img-text">
													<div class="course-list-img">
														<img src="{{ (isset($value->featured_image))?getSizedImage('thumb',$value->featured_image):URL::to('/assets/img/course/cl-1.jpg') }}" alt="">
													</div>
													<div class="course-list-text">
														<h3>
															<a target="_blank" href="{{ URL::to('/courses') }}/{{ $value->slug }}">{{ $value->course_name }}</a>
														</h3>
														<div class="course-meta">
															<span class="course-category bold-font"><a href="#">{{ $value->category }}</a></span>
															<div class="course-rate ul-li">
																<ul class="rating">
																	<li class="active"><i class="fas fa-star"></i></li>
																	<li class="active"><i class="fas fa-star"></i></li>
																	<li class="active"><i class="fas fa-star"></i></li>
																	<li class="active"><i class="fas fa-star"></i></li>
																	<li class="active"><i class="fas fa-star"></i></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</td>
											
											<td> <i class="fas fa-clock"></i> {{ $value->duration}} </td>
											<td> <i class="fas fa-book"></i> {{ $value->no_of_module }} Modules </td>
											<td>
												<div class="course-type-list">														
													<a class="btn-filled" href="javascript:void(0)" onclick="lead_capture_form_btn({{ $value->brochure_id }},'')"><i class="fas fa-download"></i> Brochure</a>
												</div>
												<div class="course-type-list">														
													<a class="btn-outline" target="_blank" href="{{ URL::to('/courses') }}/{{ $value->slug }}" >Know More <i class="fas fa-caret-right"></i></a>
												</div>
												
											</td>
										</tr>
										@endforeach	
									@endif	
									</table>
								</div>
							@else
								<div class="best-course-area best-course-v2">
									<div class="row">
									@if($courses)
										@foreach ($courses as $course)
										<div class="col-md-4">
										<div class="best-course-pic-text relative-position">
												<div class="best-course-pic relative-position">
													<img src="{{ (isset($course->featured_image))?getSizedImage('',$course->featured_image):URL::to('/assets/img/course/bc-1.jpg') }}" alt="">
													<div class="trend-badge-2 text-center text-uppercase">
														<i class="fas fa-bolt"></i>
														<span>Trending</span>
													</div>
													
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
														<a href="courses/{{ $course->slug }}">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
													</div>
													<div class="blakish-overlay"></div>
												</div>
												<div class="best-course-text">
													<div class="course-title mb20 headline relative-position height-60">
														<h3><a href="courses/{{ $course->slug }}"> {{ $course->name }} </a> 
														<span class="trend-bestseller text-uppercase bold-font">
															<i class="fas fa-bolt"></i> Bestseller</span> 
														</h3>
													</div>
													<div class="course-meta">
														<span class="course-category"><i class="fas fa-clock"></i> {{ $course->duration }}</span>
														<span class="course-author"><i class="fas fa-book"></i> {{ $course->no_of_module }} Modules</span>
													</div>
												</div>
												<div class="more-btn text-center" >
													<div class="course-type-list">	
														<a class="btn-filled" href="javascript:void(0)" onclick="lead_capture_form_btn({{ $course->brochure_id }},'')"><i class="fas fa-download"></i> Brochure</a>
													</div>
													<div class="course-type-list">		
														<a class="btn-outline" href="{{ URL::to('/courses') }}/{{ $course->slug }}" >View More <i class="fas fa-caret-right"></i></a>
													</div>														
												</div>
											</div>
										</div>
										<!-- /course -->
										@endforeach	
									@endif											
									</div>
								</div>
							@endif
														
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="side-bar">
						<div class="side-bar-widget  first-widget">
							<h2 class="widget-title text-capitalize"><span>Find </span>Your Course.</h2>
							<div class="listing-filter-form pb30">
								
								<div class="filter-select mb20">
									<label>COURSE TYPE</label>
									<select class="gotoCourseCategory">
										<option value="" selected="">All Categories </option>
									@if($courseTypes)
										@foreach ($courseTypes as $value)
										<option value="{{ URL::to('/category') }}/{{ $value->slug }}" {{ (isset($category->slug) && ($value->slug == $category->slug)) ?"selected":"" }}> {{ $value->name }} </option>
										@endforeach	
									@endif		
									</select>
								</div>

								<div class="filter-select mb20">
									<label>STUDY LAVEL</label>
									<select>
										<option value="9" selected="">All Locations</option>
										<option value="10">Default Listing</option>
										<option value="11">Category Listing</option>
										<option value="12">Orderly Listing</option>
									</select>
								</div>
								<form action="{{ url('/courses')}}" method="get">
									<div class="filter-search mb20">
										<label>Search Course</label>
										<input type="text" class="" name="search"  placeholder="Looking for?">
									</div>
									<button type="submit" class="genius-btn gradient-bg text-center text-uppercase">
										FIND COURSES <i class="fas fa-caret-right"></i>
									</button>
								</form>

							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End of course section
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
	<section id="courses" class="best-course-section">
		<div class="container">
			<div class="section-title mb10 headline text-center">
				<span class="subtitle text-uppercase">SEARCH OUR COURSES</span>
				<h3>Check<span> Another Domain.</span></h3>
			</div>
			<div class="best-course-area mb10">
				<div class="row">
				@if($courseTypes)
					@foreach ($courseTypes as $value)
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
									<a target="_blank" href="{{ URL::to('/category') }}/{{ $value->slug }}">Know More <i class="fas fa-arrow-right"></i></a>
								</div>
								<div class="blakish-overlay"></div>
							</div>
							<div class="best-course-text">
								<div class="course-type-title mb10 headline relative-position">
									<h3><a href="{{ URL::to('/category') }}/{{ $value->slug }}">{{ $value->name }}</a></h3>
								</div>
								<div class="course-short-description mb10" >
									{!! substr($value->excerpt,0,100); !!}...
								</div>
								
							</div>
							<div class="more-btn text-center" >
								<div class="course-type-list">	
									<a class="btn-filled" href="javascript:void(0)" onclick="lead_capture_form_btn({{ $value->brochure_id }},'')"><i class="fas fa-download"></i> Brochure</a>
								</div>
								<div class="course-type-list">														
									<a class="btn-outline" target="_blank" href="{{ URL::to('/category') }}/{{ $value->slug }}" >View More <i class="fas fa-caret-right"></i></a>
								</div>														
							</div>
						</div>
					</div>
					<!-- /course -->
				@endforeach	
					@endif	
					
				</div>
			</div>
		</div>
	</section>
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
										@foreach(getFaqs($model) as $key => $value)
										<div class="panel">
											<div class="panel-title" id="heading_{{$key}}">
												<h3>
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