@extends('layouts.main')

    @section('content')

    <!-- Start of breadcrumb section
		============================================= -->
		<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style" style="background-image: url({{ (isset($contentMain->banner_image))?getSizedImage('',$contentMain->banner_image):url('assets/img/banner/brt-1.jpg') }});">
			<div class="blakish-overlay"></div>
			<div class="container">
				<div class="page-breadcrumb-content">
					<div class="page-breadcrumb-title">
						<h2 class="breadcrumb-head black bold">
							{{(isset($contentMain))?$contentMain->name:"Default Page" }}
						</h2>
					</div>
					<div class="page-breadcrumb-description">
						{!! (isset($contentMain))?$contentMain->description:"Default Description" !!}
					</div>
					<div class="page-breadcrumb-option">
						
					</div>
				</div>
			</div>
		</section>
	<!-- End of breadcrumb section
		============================================= -->

	<!-- Start of blog content
		============================================= -->
		<section id="blog-item" class="blog-item-post">
			<div class="container">
				<div class="blog-content-details">
					<div class="row">
						<div class="col-md-9">
							<div class="blog-post-content">
								<div class="short-filter-tab">
									<div class="shorting-filter  float-left">
										<span><b>Sort</b> By</span>
										<select>
											<option value="9" selected="">Popularity</option>
											<option value="10">Most Read</option>
											<option value="11">Most View</option>
											<option value="12">Most Shared</option>
										</select>
									</div>
									<div class="tab-button blog-button ul-li text-center float-right">
										<ul class="product-tab">
											<li class="active" rel="tab1"><i class="fas fa-th"></i></li>
											<li rel="tab2"> <i class="fas fa-list"></i></li>
										</ul>
									</div>
								</div>

								<div class="genius-post-item">
									<div class="tab-container">
										<div id="tab1" class="tab-content-1 pt35">
											<div class="row">
											@foreach(getBlogs() as $value)
												<div class="col-md-6">
													<div class="blog-post-img-content">
														<div class="blog-img-date relative-position">
															<a class="blog-thumnile" href="{{ url('article'); }}/{{$value->slug}}">
																<img src="{{ getSizedImage('mobile',$value->featured_image) }}" alt="">
															</a>
															<div class="course-price text-center gradient-bg">
																<span>{{ date('d M Y', strtotime($contentMain->created_at)); }}</span>
															</div>
														</div>
														<div class="blog-title-content headline">
															<h3><a href="{{ url('article'); }}/{{$value->slug}}">{{$value->name}}</a></h3>
															<div class="blog-content">
																{!!$value->excerpt!!}
															</div>

															<div class="view-all-btn bold-font">
																<a href="{{ url('article'); }}/{{$value->slug}}">Read More <i class="fas fa-chevron-circle-right"></i></a>
															</div>
														</div>
													</div>
												</div>
											@endforeach
											</div>
										</div><!-- 1st tab -->

										<div id="tab2" class="tab-content-1 pt35">
											<div class="blog-list-view">
											@foreach(getBlogs() as $value)
												<div class="list-blog-item">
													<div class="row">
														<div class="col-md-6">
															<div class="blog-post-img-content">
																<div class="blog-img-date relative-position">
																	<a href="{{ url('article'); }}/{{$value->slug}}" class="blog-thumnile">
																		<img src="{{ getSizedImage('mobile',$value->featured_image) }}" alt="">
																	</a>
																	<div class="course-price text-center gradient-bg">
																		<span>{{ date('d M Y', strtotime($contentMain->created_at)); }}</span>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="blog-title-content headline">
																<h3><a href="{{ url('article'); }}/{{$value->slug}}">{{ $value->name }}</a></h3>
																<div class="blog-content">
																	{{ $value->excerpt }} 
																</div>

																<div class="view-all-btn bold-font">
																	<a href="{{ url('article'); }}/{{$value->slug}}">Read More <i class="fas fa-chevron-circle-right"></i></a>
																</div>
															</div>
														</div>
													</div>
												</div>
											@endforeach
											</div>
										</div><!-- 2nd tab -->
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
						</div>

						<div class="col-md-3">
							<div class="side-bar">
								<div class="side-bar-search">
									<form action="#" method="get">
										<input type="text" class="" placeholder="Search">
										<button type="submit"><i class="fas fa-search"></i></button>
									</form>
								</div>

								<div class="side-bar-widget">
									<h2 class="widget-title text-capitalize">blog <span>Categories.</span></h2>
									<div class="post-categori ul-li-block">
										<ul>
											@foreach(getCategories() as $value)
											<li class="cat-item"><a href="#">{{$value->name}}</a></li>
											@endforeach
										</ul>
									</div>
								</div>

								

								<div class="side-bar-widget">
									<h2 class="widget-title text-capitalize">Popular <span>Tag's.</span></h2>
									<div class="tag-clouds ul-li">
										<ul>
											@foreach(getTags() as $value)
												<li><a href="{{url('tags')}}/{{$value->slug}}">{{$value->name}}</a></li>
											@endforeach
										</ul>
									</div>
								</div>

								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End of blog content
		============================================= -->
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection