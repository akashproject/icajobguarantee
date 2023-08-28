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
    <section id="events" class="list-event-section">
        <div class="container">
            <div class="section-title mb10 headline text-center">
                <span class="subtitle text-uppercase">ICA Events</span>
                <h3>ICA<span> Events.</span></h3>
            </div>
            <div class="blog-content-details">
                <div class="row">
                    <div class="col-md-8">
                        <div class="blog-post-content">
                            <div class="short-filter-tab">
                                <div class="shorting-filter  float-left">
                                    <span><b>Sort</b> By</span>
                                    <select>
                                        <option value="9" selected="">All Events</option>
                                        <option value="10">Past Events</option>
                                        <option value="11">Open Now</option>
                                        <option value="12">Upcoming Events</option>
                                    </select>
                                </div>
                            </div>
                            <div class="genius-post-item">
                                @foreach(getEvents() as $value)
                                <div class="list-event-item mt50">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="">
                                                <div class="blog-img-date relative-position">
                                                    <div class="blog-thumnile">
                                                        <img src="{{ ($value->featured_image)?getSizedImage('',$value->featured_image):url('assets/img/logo/center-logo.webp') }}" alt="">
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="blog-title-content headline">
                                                <div class="blog-content">
                                                    <div class="latest-events mt10">
                                                        <div class="latest-event-item">
                                                            <div class="events-date  relative-position text-center">
                                                                <div class="event-gradient-bdr"></div>
                                                                <span class="event-date bold-font">{{date('d',strtotime($value->start_date))}}</span>
                                                                {{date('M Y',strtotime($value->start_date))}}
                                                            </div>
                                                            <div class="event-text">
                                                                <h3 class="latest-title bold-font"><a href="{{url('event/'.$value->slug)}}">{{$value->name}}</a></h3>
                                                                <div class="course-meta">
                                                                    <span class="course-author" style="color: #4e4e4e;">
                                                                        <a href="{{url('centers/'.$value->center_slug)}}">ICA |<strong>{{$value->center}}</strong></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="px-1" style="font-size: 14px;">
                                                        {{$value->excerpt}}
                                                    </div>
                                                </div>
                                                <div class="view-all-btn bold-font">
                                                    <a href="{{url('events/'.$value->slug)}}">Read More <i class="fas fa-chevron-circle-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
						<div class="about-resigter-form backgroud-style relative-position">
							<div class="register-content">
								<div class="register-fomr-title text-center">
									<h3 class="bold-font"><span>Get a</span> Free Registration.</h3>
									<p>More Than 122K Online Available Courses</p>
								</div>
								<div class="register-form-area">
									<form class="contact_form" action="#" method="POST" enctype="multipart/form-data">
										<div class="contact-info">
											<input class="name" name="name" type="text" placeholder="Your Name.">
										</div>
										<div class="contact-info">
											<input class="nbm" name="nbm" type="number" placeholder="Your Number">
										</div>
										<div class="contact-info">
											<input class="email" name="email" type="email" placeholder="Email Address.">
										</div>
										<div class="nws-button text-uppercase text-center white text-capitalize">
											<button type="submit" value="Submit">SUBMIT REQUEST </button> 
										</div> 
									</form>
								</div>
							</div>
						</div>
						<div class="bg-mockup">
							<img src="{{ url('assets/img/about/phone.png')}}" alt="">
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