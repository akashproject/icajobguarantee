@extends('layouts.main')

    @section('content')

		@php
			$reviewRatings = get_reviews_ratings("Blog",$contentMain->id);
		@endphp

	<!-- Start of Blog single content
		============================================= -->
		<section id="blog-detail" class="blog-details-section">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="blog-details-content">
							<div class="post-content-details">
								<div class="blog-detail-thumbnile mb35">
									<img src="{{ getSizedImage('mobile',$contentMain->featured_image) }}" alt="">
								</div>
								<h2>{{ $contentMain->name }}</h2>

								<div class="date-meta text-uppercase">
									<a href="" ><i class="fas fa-calendar-alt"></i> {{ date('d M Y', strtotime($contentMain->created_at)); }}</a>
									<a href="{{url('author')}}/{{ getAuthorById($contentMain->author_id)->slug }}" ><i class="fas fa-user"></i> {{ getAuthorById($contentMain->author_id)->name }} </a>
									<a href="" ><i class="fas fa-comment-dots"></i> {{ $reviewRatings['reviewCount'] }} COMMENTS</a>
								</div>
								<div class="blog-description" >
									{!! $contentMain->description !!}
								</div>
							</div>
							<div class="blog-share-tag">
								<div class="share-text float-left">
									Share this news
								</div>
								<div class="share-social ul-li float-right">
									<ul>
										<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="blog-category ul-li">
								<ul>
									@if(isset($contentMain->tags))
									@foreach($contentMain->tags as $value)
										<li><a href="{{url('tags')}}/{{$value->slug}}">{{$value->name}}</a></li>
									@endforeach
									@endif
								</ul>
							</div>
							<div class="author-comment">
								<div class="author-img">
									<img src="{{(isset(getAuthorById($contentMain->author_id)->featured_image))?getSizedImage('thumb',getAuthorById($contentMain->author_id)->featured_image):''}}" alt="{{ getAuthorById($contentMain->author_id)->name }}">
								</div>
								<div class="author-designation-comment">
									BY: <span>{{ getAuthorById($contentMain->author_id)->name }}</span> 
									{!! getAuthorById($contentMain->author_id)->bio !!}
								</div>
							</div>
							<div class="next-prev-post">
								@if(isset($previous->slug))
								<div class="next-post-item float-left">
									<a href="{{url('article')}}/{{$previous->slug}}"><i class="fas fa-arrow-circle-left"></i>Previous Post</a>
								</div>
								@endif
								@if(isset($next->slug))
								<div class="next-post-item float-right">
									<a href="{{url('article')}}/{{$next->slug}}">Next Post<i class="fas fa-arrow-circle-right"></i></a>
								</div>
								@endif
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
										@if(isset($contentMain->categories))
										<ul>
										@foreach($contentMain->categories as $value)
											<li class="cat-item"><a href="{{url('category')}}/{{$value->slug}}">{{$value->name}}</a></li>
										@endforeach
										</ul>
										@endif
								</div>
							</div>

							<div class="side-bar-widget">
								<h2 class="widget-title text-capitalize"><span>Related </span>News.</h2>
									@foreach($tranding as $value)
									<div class="latest-news-posts">
										<div class="latest-news-area">
											<div class="latest-news-thumbnile relative-position">
												<img src="{{ getSizedImage('thumb',$contentMain->featured_image) }}" alt="">
												<div class="hover-search">
													<i class="fas fa-search"></i>
												</div>
												<div class="blakish-overlay"></div>
											</div>
											<div class="date-meta">
												<i class="fas fa-calendar-alt"></i> 26 April 2018
											</div>
											<h3 class="latest-title bold-font"><a href="{{ url('article') }}/{{ $value->slug }}"> {{ $value->name }}</a></h3>
										</div>
										<!-- /post -->
									</div>
									@endforeach
									<div class="view-all-btn bold-font">
										<a href="{{ url('blogs') }}">View All News <i class="fas fa-chevron-circle-right"></i></a>
									</div>
								</div>
							</div>

							<div class="side-bar-widget">
								<h2 class="widget-title text-capitalize">Popular <span>Tag's.</span></h2>
								<div class="tag-clouds ul-li">
									<ul>
										@if(isset($contentMain->tags))
										@foreach($contentMain->tags as $value)
											<li><a href="{{url('tags')}}/{{$value->slug}}">{{$value->name}}</a></li>
										@endforeach
										@endif
									</ul>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- End of Blog single content
		============================================= -->
		
		<section id="review" class="teacher-details-area" >
			<div class="container"> 
				
				<div class="row" >
					<div class="col-md-9" >
						@if($reviewRatings)
						<!-- /course-details -->				
						<div class="course-review">
							<div class="section-title-2 mb20 headline text-left">
								<h2>Blog <span>Reviews:</span></h2>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="ratting-preview">
										<div class="row">
											<div class="col-md-4">
												<div class="avrg-rating ul-li">
													<b>Average Rating</b>													
													<span class="avrg-rate">{{ $reviewRatings['avarageRating'] }}</span>
													<ul>
														<li><i class="fas fa-star"></i></li>
														<li><i class="fas fa-star"></i></li>
														<li><i class="fas fa-star"></i></li>
														<li><i class="fas fa-star"></i></li>
														<li><i class="fas fa-star"></i></li>
													</ul>
													<b>{{ $reviewRatings['reviewCount'] }} Ratings</b>
												</div>
											</div>
											<div class="col-md-8">												
												<div class="avrg-rating ul-li">
													<span>Details</span>
													@foreach($reviewRatings['ratings'] as $key => $value)
													<div class="rating-overview">
														<span class="start-item">{{$key}} Starts</span>
														<span class="start-bar"></span>
														<span class="start-count">{{$value}}</span>
													</div>
													@endforeach
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /review overview -->
						@else
						<h5> There are no reviews yet. Be the first one to write one. </h4>
						@endif
						<div class="couse-comment">
							<div class="blog-comment-area ul-li about-teacher-2">
								<ul class="comment-list">
									@if($reviewRatings)
									@foreach($reviewRatings['reviews'] as $review)
									<li>
										<div class="author-name-rate">
											<div class="author-name float-left">
												BY: <span>{{$review->reviewer_name}}</span> 
											</div>
											<div class="comment-ratting float-right ul-li">
												<ul>
													@for($i=1; $i<=$review->rating; $i++)
														<li class="active"><i class="fas fa-star"></i></li>
													@endfor
												</ul>
											</div>
											<div class="time-comment float-right">{{ $review->created_at }}</div>
										</div>
										<div class="author-designation-comment">
											<h3>{{$review->title}}</h3>
											<p>
												{{$review->review}}
											</p>
										</div>
									</li>
									@endforeach		
									@endif
								</ul>

								<div class="reply-comment-box">
									<div class="p-2 mb-2 review-success text-white " style="display:none">
									 Review has been submitted successfully 
									</div>
									<div class="review-option">
										<div class="section-title-2  headline text-left float-left">
											<h2>Add <span>Reviews.</span></h2>
										</div>
										<div class="review-stars-item float-right mt15">
											<span>Your Rating: </span>
											<form class="rating">
												<label>
													<input type="radio" name="stars" value="1" />
													<span class="icon"><i class="fas fa-star"></i></span>
												</label>
												<label>
													<input type="radio" name="stars" value="2" />
													<span class="icon"><i class="fas fa-star"></i></span>
													<span class="icon"><i class="fas fa-star"></i></span>
												</label>
												<label>
													<input type="radio" name="stars" value="3" />
													<span class="icon"><i class="fas fa-star"></i></span>
													<span class="icon"><i class="fas fa-star"></i></span>
													<span class="icon"><i class="fas fa-star"></i></span>   
												</label>
												<label>
													<input type="radio" name="stars" value="4" />
													<span class="icon"><i class="fas fa-star"></i></span>
													<span class="icon"><i class="fas fa-star"></i></span>
													<span class="icon"><i class="fas fa-star"></i></span>
													<span class="icon"><i class="fas fa-star"></i></span>
												</label>
												<label>
													<input type="radio" name="stars" value="5" />
													<span class="icon"><i class="fas fa-star"></i></span>
													<span class="icon"><i class="fas fa-star"></i></span>
													<span class="icon"><i class="fas fa-star"></i></span>
													<span class="icon"><i class="fas fa-star"></i></span>
													<span class="icon"><i class="fas fa-star"></i></span>
												</label>
											</form>
										</div>
									</div>
									<div class="teacher-faq-form">
										<form id="submit-review" method="POST" action="/no-form" data-lead="Residential">
											<div class="row">
												<div class="col-md-6">
													<label for="name">Your Name</label>
													<input type="text" name="reviewer_name" id="reviewer_name" required="required">
												</div>
												<div class="col-md-6">
													<label for="phone">Email Address</label>
													<input type="email" name="reviewer_email" id="reviewer_email" required="required">
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<label for="name">Summary</label>
													<input type="text" name="title" id="title" required="required">
												</div>
											</div>
											<label for="review">Message</label>
											<textarea name="review" id="review" rows="2" cols="20" required="required"></textarea>
											<div class="nws-button text-center  gradient-bg text-uppercase">
												<button type="submit" class="submitReview">Send Message now</button> 
											</div>
											<input type="hidden" name="model" id="model" value="Blog">
											<input type="hidden" name="model_id" id="model_id" value="{{ $contentMain->id }}">
											<input type="hidden" id="rating" name="rating" value="" />
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3" >
					</div>
				</div>
				
			</div>
		</section>
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection