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
													@foreach ($cities as $cityValue)
													<option value="{{ URL::to('/city') }}/{{ $cityValue->slug }}" {{ (isset($city->id) && ($city->id == $cityValue->id)) ?"selected":"" }}> {{ $cityValue->name }} </option>
													@endforeach	
												@endif	
											</select>
										</div>
										<form action="{{url('/centers')}}" method="get">
											<div class="filter-search mb20">
												<label>Search Pincode</label>
												<input type="text" class="" name="pincode" placeholder="Search by pincode">
											</div>
											<button type="submit" class="text-white border-none genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
												FIND CENTER <i class="fas fa-caret-right"></i>
											</button>
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

								<div class="side-bar-widget">
									<h2 class="widget-title text-capitalize"><span>Featured</span> Course.</h2>
									<div class="featured-course">
										<div class="best-course-pic-text relative-position">
											<div class="best-course-pic relative-position">
												<img src="{{ URL::to('/') }}/assets//img/blog/fb-1.jpg" alt="">
												<div class="trend-badge-2 text-center text-uppercase">
													<i class="fas fa-bolt"></i>
													<span>Trending</span>
												</div>
											</div>
											<div class="best-course-text">
												<div class="course-title mb20 headline relative-position">
													<h3><a href="#">Fully Responsive Web Design &amp; Development.</a></h3>
												</div>
												<div class="course-meta">
													<span class="course-category"><a href="#">Web Design</a></span>
													<span class="course-author"><a href="#">250 Students</a></span>
												</div>
											</div>
										</div>
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
															<div class="product-img text-center mb20">
																<img src="{{url('assets/img/product/bp-1.png')}}" alt="">
															</div>
															<div class="product-text-content relative-position">
																<div class="best-title-price float-left">
																	<div class="course-title headline">
																		<h3><a href="{{ URL::to('/center') }}/{{ $value->slug }}">{{ $value->name }}</a></h3>
																	</div>
																	<div class="price-start">
																		Start from
																		<span>$55.25</span>
																	</div>
																</div>
																<div class="add-cart text-center">
																	<i class="fas fa-cart-plus"></i>
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
		<section id="best-product" class="best-product-section best-product-4">
			<div class="container">
				<div class="section-title-2 mb65 headline text-left">
					<h2>Genius <span>Best Products.</span></h2>
				</div>
				<div id="best-product-slide-item" class="best-product-slide">
					<div class="product-img-text">
						<div class="product-img text-center mb20">
							<img src="assets/img/product/bp-1.png" alt="">
						</div>
						<div class="product-text-content relative-position">
							<div class="best-title-price float-left">
								<div class="course-title headline">
									<h3><a href="#">Mobile Apps Books.</a></h3>
								</div>
								<div class="price-start">
									Start from
									<span>$55.25</span>
								</div>
							</div>
							<div class="add-cart text-center">
								<i class="fas fa-cart-plus"></i>
							</div>
						</div>
					</div>

					<div class="product-img-text">
						<div class="product-img text-center mb20">
							<img src="assets/img/product/bp-2.png" alt="">
						</div>
						<div class="product-text-content relative-position">
							<div class="best-title-price float-left">
								<div class="course-title headline">
									<h3><a href="#">Mobile Apps Books.</a></h3>
								</div>
								<div class="price-start">
									Start from
									<span>$55.25</span>
								</div>
							</div>
							<div class="add-cart text-center">
								<i class="fas fa-cart-plus"></i>
							</div>
						</div>
					</div>
					<div class="product-img-text">
						<div class="product-img text-center mb20">
							<img src="assets/img/product/bp-3.png" alt="">
						</div>
						<div class="product-text-content relative-position">
							<div class="best-title-price float-left">
								<div class="course-title headline">
									<h3><a href="#">Mobile Apps Books.</a></h3>
								</div>
								<div class="price-start">
									Start from
									<span>$55.25</span>
								</div>
							</div>
							<div class="add-cart text-center">
								<i class="fas fa-cart-plus"></i>
							</div>
						</div>
					</div>
					<div class="product-img-text">
						<div class="product-img text-center mb20">
							<img src="assets/img/product/bp-4.png" alt="">
						</div>
						<div class="product-text-content relative-position">
							<div class="best-title-price float-left">
								<div class="course-title headline">
									<h3><a href="#">Mobile Apps Books.</a></h3>
								</div>
								<div class="price-start">
									Start from
									<span>$55.25</span>
								</div>
							</div>
							<div class="add-cart text-center">
								<i class="fas fa-cart-plus"></i>
							</div>
						</div>
					</div>
					<div class="product-img-text">
						<div class="product-img text-center mb20">
							<img src="assets/img/product/bp-5.png" alt="">
						</div>
						<div class="product-text-content relative-position">
							<div class="best-title-price float-left">
								<div class="course-title headline">
									<h3><a href="#">Mobile Apps Books.</a></h3>
								</div>
								<div class="price-start">
									Start from
									<span>$55.25</span>
								</div>
							</div>
							<div class="add-cart text-center">
								<i class="fas fa-cart-plus"></i>
							</div>
						</div>
					</div>
					<div class="product-img-text">
						<div class="product-img text-center mb20">
							<img src="assets/img/product/bp-6.png" alt="">
						</div>
						<div class="product-text-content relative-position">
							<div class="best-title-price float-left">
								<div class="course-title headline">
									<h3><a href="#">Mobile Apps Books.</a></h3>
								</div>
								<div class="price-start">
									Start from
									<span>$55.25</span>
								</div>
							</div>
							<div class="add-cart text-center">
								<i class="fas fa-cart-plus"></i>
							</div>
						</div>
					</div>
					<div class="product-img-text">
						<div class="product-img text-center mb20">
							<img src="assets/img/product/bp-1.png" alt="">
						</div>
						<div class="product-text-content relative-position">
							<div class="best-title-price float-left">
								<div class="course-title headline">
									<h3><a href="#">Mobile Apps Books.</a></h3>
								</div>
								<div class="price-start">
									Start from
									<span>$55.25</span>
								</div>
							</div>
							<div class="add-cart text-center">
								<i class="fas fa-cart-plus"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End of recent view product
		============================================= -->


    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection