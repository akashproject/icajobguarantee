@extends('layouts.main')

    @section('content')

	<!-- Start of breadcrumb section
		============================================= -->
		<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
			<div class="blakish-overlay"></div>
			<div class="container">
				<div class="page-breadcrumb-content text-center">
					<div class="page-breadcrumb-title">
						<h2 class="breadcrumb-head black bold">Genius <span>Courses</span></h2>
					</div>
					<div class="page-breadcrumb-item ul-li">
						<ul class="breadcrumb text-uppercase black">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">Courses</li>
						</ul>
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
								<span><b>View</b> By</span>
								<select>
									<option value="9" selected="">9 Course</option>
									<option value="10">7 Course</option>
									<option value="11">2 Course</option>
									<option value="12">0 Course</option>
								</select>
							</div>
							<div class="tab-button blog-button ul-li text-center float-right">
								<ul class="product-tab">
									<li class="active" rel="tab1"> <i class="fas fa-list"></i></li>
									<li rel="tab2"><i class="fas fa-th"></i></li>									
								</ul>
							</div>
							<div class="shorting-filter float-right">
								<span><b>Sort</b> By</span>
								<select>
									<option value="9" selected="">Popularity</option>
									<option value="10">Most Read</option>
									<option value="11">Most View</option>
									<option value="12">Most Shared</option>
								</select>
							</div>
						</div>

						<div class="genius-post-item">
							<div class="tab-container">
								<div id="tab1" class="tab-content-1">
									<div class="course-list-view">
										<table>
										
											<tr class="list-head">
												<th>COURSE NAME</th>												
												<th>DURATION</th>
												<th>OFFER</th>
												<th>Options</th>
											</tr>
											@if($courses)
                							@foreach ($courses as $value)
											<tr>
												<td>
													<div class="course-list-img-text">
														<div class="course-list-img">
															<img src="{{ URL::to('/') }}/assets//img/course/cl-1.jpg" alt="">
														</div>
														<div class="course-list-text">
															<h3>
																<a href="{{ URL::to('/courses') }}/{{ $value->slug }}">{{ $value->course_name }}</a>
															</h3>
															<div class="course-meta">
																<span class="course-category bold-font"><a href="#">$120.25</a></span>
																<div class="course-rate ul-li">
																	<ul class="rating">
																		<li class="active"><i class="fas fa-star"></i></li>
																		<li class="active"><i class="fas fa-star"></i></li>
																		<li class="active"><i class="fas fa-star"></i></li>
																		<li class="active"><i class="fas fa-star"></i></li>
																		<li><i class="fas fa-star"></i></li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</td>
												
												<td> {{ $value->duration}} </td>
												<td> No Cost EMI </td>
												<td>
													<div class="course-type-list">														
														<a href="{{ URL::to('/courses') }}/{{ $value->slug }}" ><i class="fas fa-download"></i> Brochure</a>
													</div>
													<div class="course-type-list">														
														<a href="{{ URL::to('/courses') }}/{{ $value->slug }}" >Know More <i class="fas fa-caret-right"></i></a>
													</div>
													
												</td>
											</tr>
											@endforeach	
            							@endif	
										</table>
									</div>
								</div><!-- /tab-2 -->
								<div id="tab2" class="tab-content-1 pt35">
									<div class="best-course-area best-course-v2">
										<div class="row">
										@if($courses)
                							@foreach ($courses as $value)
											<div class="col-md-4">
												<div class="best-course-pic-text relative-position">
													<div class="best-course-pic relative-position">
														<img src="{{ URL::to('/assets/img/course/bc-1.jpg') }}" alt="">
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
															<a href="{{ URL::to('/courses') }}/{{ $value->slug }}">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
														</div>
														<div class="blakish-overlay"></div>
													</div>
													<div class="best-course-text">
														<div class="course-title mb20 headline relative-position">
															<h3><a href="{{ URL::to('/courses') }}/{{ $value->slug }}">{{ $value->course_name }}</a></h3>
														</div>
														<div class="course-meta">
															<span class="course-category"><a href="#">{{ $value->category }}</a></span>
															<span class="course-author"><a href="#">250 Students</a></span>
														</div>
													</div>
												</div>
											</div>
											<!-- /course -->
											@endforeach	
            							@endif											
										</div>
									</div>
								</div><!-- /tab-1 -->								
							</div>
						</div>

						<div class="couse-pagination text-center ul-li">
							<ul>
								<li class="pg-text"><a href="#">PREV</a></li>
								<li><a href="#">01</a></li>
								<li><a href="#">02</a></li>
								<li class="active"><a href="#">03</a></li>
								<li><a href="#">04</a></li>
								<li><a href="#">...</a></li>
								<li><a href="#">15</a></li>
								<li class="pg-text"><a href="#">NEXT</a></li>
							</ul>
						</div>
					</div>

					<div class="col-md-3">
						<div class="side-bar">

							<div class="side-bar-widget  first-widget">
								<h2 class="widget-title text-capitalize"><span>Find </span>Your Course.</h2>
								<div class="listing-filter-form pb30">
									<form action="#" method="get">
										<div class="filter-select mb20">
											<label>COURSE TYPE</label>
											<select class="gotoCourseCategory">
												<option value="" selected="">All Categories </option>
											@if($courseTypes)
                								@foreach ($courseTypes as $value)
												<option value="{{ URL::to('/course-category') }}/{{ $value->slug }}" {{ (isset($category->slug) && ($value->slug == $category->slug)) ?"selected":"" }}> {{ $value->name }} </option>
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
										<div class="filter-search mb20">
											<label>FULL TEXT</label>
											<input type="text" class="" placeholder="Looking for?">
										</div>
										<div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
											<a href="#">FIND COURSES <i class="fas fa-caret-right"></i></a>
										</div>
									</form>

								</div>
							</div>

							<div class="side-bar-widget">
								<h2 class="widget-title text-capitalize"><span>Recent  </span>News</h2>
								<div class="latest-news-posts">
									<div class="latest-news-area">
										<div class="latest-news-thumbnile relative-position">
											<img src="{{ URL::to('/') }}/assets//img/blog/lb-1.jpg" alt="">
											<div class="hover-search">
												<i class="fas fa-search"></i>
											</div>
											<div class="blakish-overlay"></div>
										</div>
										<div class="date-meta">
											<i class="fas fa-calendar-alt"></i> 26 April 2018
										</div>
										<h3 class="latest-title bold-font"><a href="#">Affiliate Marketing A Beginner’s Guide.</a></h3>
									</div>
									<!-- /post -->

									<div class="latest-news-posts">
										<div class="latest-news-area">
											<div class="latest-news-thumbnile relative-position">
												<img src="{{ URL::to('/') }}/assets/img/blog/lb-2.jpg" alt="">
												<div class="hover-search">
													<i class="fas fa-search"></i>
												</div>
												<div class="blakish-overlay"></div>
											</div>
											<div class="date-meta">
												<i class="fas fa-calendar-alt"></i> 26 April 2018
											</div>
											<h3 class="latest-title bold-font"><a href="#">No.1 The Best Online Course 2018.</a></h3>
										</div>
										<!-- /post -->
									</div>

									<div class="view-all-btn bold-font">
										<a href="#">View All News <i class="fas fa-chevron-circle-right"></i></a>
									</div>
								</div>
							</div>

							<div class="side-bar-widget">
								<h2 class="widget-title text-capitalize">Popular <span>Tag's.</span></h2>
								<div class="tag-clouds ul-li">
									<ul>
										<li><a href="#">fruits</a></li>
										<li><a href="#">veegetable</a></li>
										<li><a href="#">juices</a></li>
										<li><a href="#">natural food</a></li>
										<li><a href="#">food</a></li>
										<li><a href="#">bread</a></li>
										<li><a href="#">natural</a></li>
										<li><a href="#">healthy</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End of course section
		============================================= -->

		<section id="best-course" class="best-course-section">
			<div class="container">
				<div class="section-title mb45 headline text-center">
					<span class="subtitle text-uppercase">SEARCH OUR COURSES</span>
					<h3>You<span> Recently View.</span></h3>
				</div>
				<div class="best-course-area mb45">
					<div class="row">
					@if($courses)
						@foreach ($courses as $value)
						<div class="col-md-3">
							<div class="best-course-pic-text relative-position">
								<div class="best-course-pic relative-position">
									<img src="{{ URL::to('/') }}/assets/img/course/bc-1.jpg" alt="">
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
										<a href="{{ URL::to('/courses') }}/{{ $value->slug }}">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
									</div>
									<div class="blakish-overlay"></div>
								</div>
								<div class="best-course-text">
									<div class="course-title mb10 headline relative-position">
										<h3><a href="{{ URL::to('/courses') }}/{{ $value->slug }}">{{ $value->course_name }}</a></h3>
									</div>
									<div class="course-short-description mb10" >
										{!! substr($value->excerpt,0,100); !!}...
									</div>
									<div class="course-meta">
										<span class="course-category"><a href="{{ URL::to('/courses') }}/{{ $value->slug }}">Web Design</a></span>
										<span class="course-author"><a href="{{ URL::to('/courses') }}/{{ $value->slug }}">250 Students</a></span>
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

	<!-- Start of sponsor section
		============================================= -->
		<section id="career" class="sponsor-section">
			<div class="container">
				<div class="section-title-2 mb65 headline text-left">
					<h2>Get placed <span> where you belong.</span></h2>
				</div>
				<div class="sponsor-item sponsor-1">
					@foreach(get_placements() as $value)
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
									<img src="{{ URL::to('/') }}/assets/img/course/bc-1.jpg" alt="">
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
									<div class="course-meta">
										<span class="course-category"><a href="{{ URL::to('/courses') }}/{{ $value->slug }}">Web Design</a></span>
										<span class="course-author"><a href="{{ URL::to('/courses') }}/{{ $value->slug }}">250 Students</a></span>
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
										@foreach(get_faqs("CourseType") as $key => $value)
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