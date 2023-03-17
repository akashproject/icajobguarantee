@extends('layouts.main')
    @section('content')
	<!-- Start of breadcrumb section
		============================================= -->
		<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
			<div class="blakish-overlay"></div>
			<div class="container">
				<div class="page-breadcrumb-content text-center">
					<div class="page-breadcrumb-title">
						<h2 class="breadcrumb-head black bold">Genius <span>Online Shop</span></h2>
					</div>
					<div class="page-breadcrumb-item ul-li">
						<ul class="breadcrumb text-uppercase black">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">Shop</li>
						</ul>
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
													@foreach ($cities as $value)
													<option value="{{ URL::to('/city') }}/{{ $value->slug }}" > {{ $value->name }} </option>
													@endforeach	
												@endif	
											</select>
										</div>

										<form action="{{url('/centers')}}" method="get">
											<div class="filter-search mb20">
												<label>Search Pincode</label>
												<input type="text" class="" name="pincode" placeholder="Search by pincode" value="{{isset($pincode)?$pincode:''}}">
											</div>
											<button type="submit" class="text-white border-none genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
												FIND CENTER <i class="fas fa-caret-right"></i>
											</button>
										</form>
									</div>
								</div>

								
							</div>
						</div>
						<div class="col-md-9">
							<div class="shop-product-item">
								<div class="short-filter-tab">
									<div class="shorting-filter  float-left">
										<span><b>Sort</b> By</span>
										<select>
											<option value="" selected=""></option>											
											<option value="9">Nearest</option>											
										</select>
									</div>
									<div class="tab-button blog-button ul-li text-center float-right">
										<ul class="product-tab">
											<li class="active" rel="tab1"><i class="fas fa-th"></i></li>
											<li rel="tab2"> <i class="fas fa-list"></i></li>
										</ul>
									</div>
								</div>
								<div class="product-showcase">
									<div class="genius-shop-item">
										<div class="tab-container">
											<div id="tab1" class="tab-content-1 best-product-section">
												<div class="row">
													@foreach($centers as $value)
													<div class="col-md-4">
														<div class="product-img-text">
															<div class="product-img text-center mb10">
																<img src="{{url('assets/img/product/bp-1.png')}}" alt="">
															</div>
															<div class="product-text-content text-center mb20">
																<div class="best-title-price">
																	<div class="course-title headline">
																		<h3><a href="{{ URL::to('/centers') }}/{{ $value->slug }}">{{ $value->name }}</a></h3>
																	</div>
																</div>															
															</div>	
															<div class="more-btn text-center" >
																<div class="course-type-list">	
																	<span class="btn-outline" onclick="lead_capture_form_btn('',{{ $value->id }})"><i class="fas fa-download"></i> Brochure</span>
																</div>
																<div class="course-type-list">														
																	<a href="{{ URL::to('/centers') }}/{{ $value->slug }}" >View More <i class="fas fa-caret-right"></i></a>
																</div>														
															</div>														
														</div>
													</div>
													@endforeach													
												</div>
											</div><!-- tab-1 -->

											<div id="tab2" class="tab-content-1 course-page-section">
												<div class="course-list-view">
													<table>
														<tr class="list-head">
															<th>COURSE NAME</th>
															<th>COURSE TYPE</th>
															<th>STARTS</th>
															<th>LENGTH</th>
														</tr>
														<tr>
															<td>
																<div class="course-list-img-text">
																	<div class="course-list-img">
																		<img src="assets/img/course/cl-1.jpg" alt="">
																	</div>
																	<div class="course-list-text">
																		<h3><a href="#">Fully Responsive Web Design & Development.</a></h3>
																		<div class="course-meta">
																			<span class="course-category bold-font"><a href="#">$120.25</a></span>
																			<div class="course-rate ul-li">
																				<ul>
																					<li><i class="fas fa-star"></i></li>
																					<li><i class="fas fa-star"></i></li>
																					<li><i class="fas fa-star"></i></li>
																					<li><i class="fas fa-star"></i></li>
																					<li><i class="fas fa-star"></i></li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
															</td>
															<td>
																<div class="course-type-list">
																	<span>Graphic Design & 3D</span>
																</div>
															</td>
															<td>6-06-2018</td>
															<td>3 Months</td>
														</tr>
														<tr>
															<td>
																<div class="course-list-img-text">
																	<div class="course-list-img">
																		<img src="assets/img/course/cl-2.jpg" alt="">
																	</div>
																	<div class="course-list-text">
																		<h3><a href="#">Fully Responsive Web Design & Development.</a></h3>
																		<div class="course-meta">
																			<span class="course-category bold-font"><a href="#">$120.25</a></span>
																			<div class="course-rate ul-li">
																				<ul>
																					<li><i class="fas fa-star"></i></li>
																					<li><i class="fas fa-star"></i></li>
																					<li><i class="fas fa-star"></i></li>
																					<li><i class="fas fa-star"></i></li>
																					<li><i class="fas fa-star"></i></li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
															</td>
															<td>
																<div class="course-type-list">
																	<span>Graphic Design & 3D</span>
																</div>
															</td>
															<td>6-06-2018</td>
															<td>3 Months</td>
														</tr>
														<tr>
															<td>
																<div class="course-list-img-text">
																	<div class="course-list-img">
																		<img src="assets/img/course/cl-3.jpg" alt="">
																	</div>
																	<div class="course-list-text">
																		<h3><a href="#">Fully Responsive Web Design & Development.</a></h3>
																		<div class="course-meta">
																			<span class="course-category bold-font"><a href="#">$120.25</a></span>
																			<div class="course-rate ul-li">
																				<ul>
																					<li><i class="fas fa-star"></i></li>
																					<li><i class="fas fa-star"></i></li>
																					<li><i class="fas fa-star"></i></li>
																					<li><i class="fas fa-star"></i></li>
																					<li><i class="fas fa-star"></i></li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
															</td>
															<td>
																<div class="course-type-list">
																	<span>Graphic Design & 3D</span>
																</div>
															</td>
															<td>6-06-2018</td>
															<td>3 Months</td>
														</tr>
														<tr>
															<td>
																<div class="course-list-img-text">
																	<div class="course-list-img">
																		<img src="assets/img/course/cl-4.jpg" alt="">
																	</div>
																	<div class="course-list-text">
																		<h3><a href="#">Fully Responsive Web Design & Development.</a></h3>
																		<div class="course-meta">
																			<span class="course-category bold-font"><a href="#">$120.25</a></span>
																			<div class="course-rate ul-li">
																				<ul>
																					<li><i class="fas fa-star"></i></li>
																					<li><i class="fas fa-star"></i></li>
																					<li><i class="fas fa-star"></i></li>
																					<li><i class="fas fa-star"></i></li>
																					<li><i class="fas fa-star"></i></li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
															</td>
															<td>
																<div class="course-type-list">
																	<span>Graphic Design & 3D</span>
																</div>
															</td>
															<td>6-06-2018</td>
															<td>3 Months</td>
														</tr>
														<tr>
															<td>
																<div class="course-list-img-text">
																	<div class="course-list-img">
																		<img src="assets/img/course/cl-5.jpg" alt="">
																	</div>
																	<div class="course-list-text">
																		<h3><a href="#">Fully Responsive Web Design & Development.</a></h3>
																		<div class="course-meta">
																			<span class="course-category bold-font"><a href="#">$120.25</a></span>
																			<div class="course-rate ul-li">
																				<ul>
																					<li><i class="fas fa-star"></i></li>
																					<li><i class="fas fa-star"></i></li>
																					<li><i class="fas fa-star"></i></li>
																					<li><i class="fas fa-star"></i></li>
																					<li><i class="fas fa-star"></i></li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
															</td>
															<td>
																<div class="course-type-list">
																	<span>Graphic Design & 3D</span>
																</div>
															</td>
															<td>6-06-2018</td>
															<td>3 Months</td>
														</tr>
														<tr>
															<td>
																<div class="course-list-img-text">
																	<div class="course-list-img">
																		<img src="assets/img/course/cl-1.jpg" alt="">
																	</div>
																	<div class="course-list-text">
																		<h3><a href="#">Fully Responsive Web Design & Development.</a></h3>
																		<div class="course-meta">
																			<span class="course-category bold-font"><a href="#">$120.25</a></span>
																			<div class="course-rate ul-li">
																				<ul>
																					<li><i class="fas fa-star"></i></li>
																					<li><i class="fas fa-star"></i></li>
																					<li><i class="fas fa-star"></i></li>
																					<li><i class="fas fa-star"></i></li>
																					<li><i class="fas fa-star"></i></li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
															</td>
															<td>
																<div class="course-type-list">
																	<span>Graphic Design & 3D</span>
																</div>
															</td>
															<td>6-06-2018</td>
															<td>3 Months</td>
														</tr>
													</table>
												</div>
											</div><!-- /tab-2 -->
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
										<a href="{{ URL::to('/course-category') }}/{{ $value->slug }}">Know More <i class="fas fa-arrow-right"></i></a>
									</div>
									<div class="blakish-overlay"></div>
								</div>
								<div class="best-course-text">
									<div class="course-title mb10 headline relative-position">
										<h3><a href="{{ URL::to('/course-category') }}/{{ $value->slug }}">{{ $value->name }}</a></h3>
									</div>
									<div class="course-short-description mb10" >
										{!! substr($value->excerpt,0,100); !!}...
									</div>
								</div>
								<div class="more-btn text-center" >
									<div class="course-type-list">	
										<span class="btn-outline" href="javascript:void(0)" onclick="lead_capture_form_btn({{ $value->id }},'')"><i class="fas fa-download"></i> Brochure</span>
									</div>
									<div class="course-type-list">														
										<a href="{{ URL::to('/course-category') }}/{{ $value->slug }}" >View More <i class="fas fa-caret-right"></i></a>
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