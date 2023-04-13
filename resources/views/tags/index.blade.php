@extends('layouts.main')

    @section('content')
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
								</div>

								<div class="genius-post-item">
									<div class="tab-container">
										

										<div id="tab1" class="tab-content-1 pt35">
											<div class="blog-list-view">
											@foreach($contents as $value)
												<div class="list-blog-item">
													<div class="row">
														<div class="col-md-12">
															<div class="blog-title-content headline">
																<h3><a href="{{ url('article'); }}/{{$value->slug}}">{{ $value->name }}</a></h3>
																<div class="blog-content">
																	{!! $value->excerpt !!} 
																</div>
																<div class="">
																	<span>26 April 2018</span>
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
									{!! $contents->links() !!}
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
									<h2 class="widget-title text-capitalize">Popular <span>Tag's.</span></h2>
									<div class="tag-clouds ul-li">
										<ul>
											@foreach(getTags() as $value)
												<li><a href="{{url('tags')}}/{{$value->slug}}">{{$value->name}}</a></li>
											@endforeach
										</ul>
									</div>
								</div>
								<div class="side-bar-widget">
									<h2 class="widget-title text-capitalize">blog <span>Categories.</span></h2>
									<div class="post-categori ul-li-block">
										<ul>
											<li class="cat-item"><a href="#">Design Graphic Book</a></li>
											<li class="cat-item"><a href="#">Student Bag’s</a></li>
											<li class="cat-item"><a href="#">Education T-shirt</a></li>
											<li class="cat-item"><a href="#">Student Watch</a></li>
											<li class="cat-item"><a href="#">Tutorial Videos</a></li>
											<li class="cat-item"><a href="#">Other Products</a></li>
										</ul>
									</div>
								</div>

								<div class="side-bar-widget">
									<h2 class="widget-title text-capitalize"><span>Related </span>News.</h2>
									<div class="latest-news-posts">
										<div class="latest-news-area">
											<div class="latest-news-thumbnile relative-position">
												<img src="assets/img/blog/lb-1.jpg" alt="">
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
													<img src="assets/img/blog/lb-2.jpg" alt="">
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