@extends('layouts.main')

    @section('content')

<!-- Start of breadcrumb section

		============================================= -->

	<section id="breadcrumb" class="inner-banner relative-position backgroud-style"  style="padding: 0;margin-top: 44px;">
		<div class="container">
			<img src="{{ getSizedImage('',$contentMain->banner) }}" >
		</div>
	</section>

	<!-- End of breadcrumb section

		============================================= -->

	<section id="blog-detail" class="event-details-header">
		<div class="container">
			<div class="row event-title">
				<div class="col-md-9">
					<h2> {{ $contentMain->event }} </h2>
				</div>
				<div class="col-md-3">
					@if(isset($enableAssessment) && $enableAssessment != '')
					<div class="enroll-btn genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
						<a data-toggle="modal" data-target="#event-lead-generation-form" href="javascript:void(0)"> CHECK YOUR SCORE </a>
					</div>
					@else 
					<div class="enroll-btn genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
						<a data-toggle="modal" data-target="#event-lead-generation-form" href="javascript:void(0)"> BOOK YOUR SEAT </a>
					</div>
					@endif
				</div>
				@include('common.eventLeadCaptureForm')
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="date-meta">
						<span class="mr-5"><i class="fas fa-calendar-alt"></i> 
							{{date('d M, Y',strtotime($contentMain->start_date))}} at {{date('h:i',strtotime($contentMain->start_date))}}
						</span>
						<span class="mr-5"><i class="fas fa-user"></i> Organized By : ICA Edu Skills | {{ $contentMain->center }} </span>
						@if($contentMain->venue)
						<span class="mr-5"><i class="fas fa-map-marker"></i> Venue : {{$contentMain->venue}}</span>
						@endif

						@if($contentMain->online_link)
						<span class="mr-5"><i class="fas fa-map-marker"></i> Join Online : {{$contentMain->online_link}}</span>
						@endif
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="blog-detail" class="event-details-section">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					
					<div class="event-details-content">
						<div class="post-content-details">
							<h6>Click on Interested to stay updated about this event.</h6>
							<div class="row">
								<div class="col-md-8 col-6" style="font-weight: 600;color: #444242;">
									<span> 
										<a href="#" style="color: #7dcb5e;font-size: 23px;">
										<i class="fa fa-thumbs-up"></i></a> {{$contentMain->interested}} Likes 
									</span>
									<span style="width: 100%;display: block;font-size: 12px;color: #837e7e;font-weight: 500;">
									 People have shown interest recently 
									</span>
								</div>
								<div class="col-md-4 col-6 text-right">
									<div class="course-type-list" style="width:auto">												
										<a class="btn-outline" onclick="lead_capture_form_btn(1,'')" href="javascript:void(0)"> Interested? <i class="fas fa-caret-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="event-details-content">
						<div class="post-content-details">
							<h3>About</h3>
							{!! $contentMain->description !!}
						</div>
					</div>
					<div class="event-details-content">
						<div class="post-content-details">
							<h3>Faqs</h3>
							<div class="faq-tab mb35">
								<div class="faq-tab-ques  ul-li" style="padding-left: 20px;">
									<div id="accordion3" class="panel-group">
										@foreach(getFaqs("Course",$contentMain->id) as $key => $value)
										<div class="panel">
											<div class="panel-title" id="heading_{{$key}}">
												<h3 class="mb-2">
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
						</div>
					</div>
				</div>
				<div class="col-md-4">
					@if($contentMain->speaker)
						<div class="side-bar">
							<div class="event side-bar-widget">
								<h2 class="widget-title text-capitalize"><span>Speaker.</span></h2>
								<div class="post-categori ul-li-block">
									<div class="course-pic relative-position text-center">
										<div class="circle-img">
											<img class="width-100" src="{{ (isset($contentMain->speaker_avatar))?getSizedImage('thumb',$contentMain->speaker_avatar):'' }}" alt="">	
										</div>					
									</div>
								</div>

								<div class="text-center">
									<h6 class="mt-2" style="color:#393185">{{$contentMain->speaker}}</h6>
								</div>
							</div>
						</div>
					@endif
					<div class="side-bar">
						<div class="event side-bar-widget">
							<h2 class="widget-title text-capitalize"><span>Event </span>Venue.</h2>
							<div class="event-map-location">
								{!!$contentMain->gmap!!}
							</div>
						</div>
					</div>
					<div class="side-bar">
						<div class="event side-bar-widget">
							<h2 class="widget-title text-capitalize"><span>Share </span>Events.</h2>
							<div class="event-share-posts">
								<div class="share-social ul-li">
									<ul>
										<li>
											<a target="_blank" href="https://wa.me/?text={{ route('view-event',$contentMain->slug) }}" style="color: #3140fb;"><i class="fab fa-whatsapp"></i></a>
										</li>

										<li>
											<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ route('view-event',$contentMain->slug) }}" style="color: #3140fb;"><i class="fab fa-facebook-f"></i></a>
										</li>

										<li>
											<a href="mailto:?subject=Enroll In Event&body=Hello,<br>Please Click on this link<br>{{ route('view-event',$contentMain->slug) }}" style="color: #00acee;"><i class="fas fa-envelope"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    @endsection

@section('script')

<!-- ============================================================== -->

<!-- CHARTS -->

@endsection