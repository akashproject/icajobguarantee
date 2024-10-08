@extends('administrator.layouts.admin')

@section('content')
<div class="col-12">
	<div class="card">
		<form class="form-horizontal" method="post" action="{{ url('administrator/save-university-course') }}" enctype="multipart/form-data">
			@csrf
			<div class="card-body">
				<h4 class="card-title"> Edit Course </h4>
				@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
				@if(session()->has('message'))
					<div class="alert alert-success">
						{{ session()->get('message') }}
					</div>
				@endif
				<div class="row">
					<div class="col-md-8" >
						<div class="form-group row">
							<label for="name" class="col-sm-3 text-right control-label col-form-label">Name</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="name" id="name" placeholder="Enter Name Here"  value="{{ $universityCourse->name }}" >
							</div>
						</div>

						<div class="form-group row">
							<label for="slug" class="col-sm-3 text-right control-label col-form-label">Slug</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="slug" id="slug" placeholder="Slug Here"  value="{{ $universityCourse->slug }}" >
							</div>
						</div>
						<div class="form-group row">
							<label for="description" class="col-sm-3 text-right control-label col-form-label">Description</label>
							<div class="col-sm-9">
								<textarea class="form-control editor" name="description" id="description" placeholder="Enter description Here" >{{ $universityCourse->description }}</textarea>
							</div>
						</div>
						<div class="form-group row">
							<label for="excerpt" class="col-sm-3 text-right control-label col-form-label">Exerpt</label>
							<div class="col-sm-9">
								<textarea class="form-control" name="excerpt" id="excerpt" placeholder="Enter excerpt Here" >{{ $universityCourse->excerpt }}</textarea>
							</div>
						</div>
						<div class="form-group row">
							<label for="course_video_title" class="col-sm-3 text-right control-label col-form-label">Video Title</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="course_video_title" id="course_video_title" placeholder="Enter Video Title Here" value="{{ $universityCourse->course_video_title }}">
							</div>
						</div>
						<div class="form-group row">
							<label for="course_video_link" class="col-sm-3 text-right control-label col-form-label">Video Link</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="course_video_link" id="course_video_link" placeholder="Enter Video Title Here" value="{{ $universityCourse->course_video_link }}" >
							</div>
						</div>
						<div class="form-group row">
							<label for="duration" class="col-sm-3 text-right control-label col-form-label">Course Duration</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="duration" id="duration" placeholder="Enter Course Duration" value="{{ $universityCourse->duration }}" >
							</div>
						</div>
						<div class="form-group row">
							<label for="number_of_enrolled" class="col-sm-3 text-right control-label col-form-label">No Of Enrolled</label>
							<div class="col-sm-9">
								<input type="number" class="form-control" name="number_of_enrolled" id="number_of_enrolled" placeholder="Enter No Of Module" value="{{ $universityCourse->number_of_enrolled }}" >
							</div>
						</div>
						<div class="form-group row">
							<label for="number_of_rating" class="col-sm-3 text-right control-label col-form-label">No Of Rating</label>
							<div class="col-sm-9">
								<input type="number" class="form-control" name="number_of_rating" id="number_of_rating" placeholder="Enter No Of Module" value="{{ $universityCourse->number_of_rating }}" >
							</div>
						</div>
						<div class="form-group row">
							<label for="no_of_module" class="col-sm-3 text-right control-label col-form-label">No Of Module</label>
							<div class="col-sm-9">
								<input type="number" class="form-control" name="no_of_module" id="no_of_module" placeholder="Enter No Of Module" value="{{ $universityCourse->no_of_module }}" >
							</div>
						</div>
						<div class="form-group row">
							<label for="no_of_module" class="col-sm-3 text-left control-label col-form-label">Curriculum</label>
							<div class="col-sm-9">
								<a href="{{ url('administrator/university-curriculum') }}/{{ $universityCourse->id }}" class="btn btn-primary">Curriculum Detail</a>
							</div>
						</div>
						<div class="form-group row">
							<label for="highlights" class="col-sm-3 text-right control-label col-form-label">Course highlights</label>
							<div class="col-sm-9">
								<textarea class="form-control editor" name="highlights" id="highlights" placeholder="Enter Highlights" >{{ $universityCourse->highlights }}</textarea>
							</div>
						</div>
						<div class="form-group row">
							<label for="criteria" class="col-sm-3 text-right control-label col-form-label">Course criteria</label>
							<div class="col-sm-9">
								<textarea class="form-control editor" name="criteria" id="criteria" placeholder="Enter Course Criteria" >{{ $universityCourse->criteria }}</textarea>
							</div>
						</div>	
						
						<div class="form-group row">
							<label for="state" class="col-sm-3 text-right control-label col-form-label">Brochure</label>
							<div class="col-sm-9">
								<select name="brochure_id" id="brochure_id" class="{{$universityCourse->brochure_id}} select2 form-control custom-select" style="width: 100%">	
									<option value="">Select Brochure</option>
									@foreach ($brochures as $brochure)
									<option value="{{$brochure->id}}" {{ ($brochure->id == $universityCourse->brochure_id)?'selected' : '' }} > {{  $brochure->name }} </option>
									@endforeach
								<select>
							</div>
						</div>					
					</div>
					<div class="col-md-4">
						<div class="form-group row">
							<label for="tags" class="col-md-12 text-left control-label col-form-label">Tags</label>
							<div class="col-sm-12">
								<input type="text" class="form-control" id="tags" placeholder="Enter Tags Here" ></input>
							</div>
							<div class="col-sm-12">
								<div class="tag-values">
									@if(isset($universityCourse->tags))
									@foreach($universityCourse->tags as $value)
									<a href="javascript:void(0)"><input type="hidden" name="tags[]" value="{{$value->id}}"><span class="mdi mdi-tag-remove"></span>{{$value->name}}</a>
									@endforeach
									@endif
								</div>
							</div>
							<div class="col-sm-12">
								<div class="tag-content" >

								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="state" class="col-md-12 text-left control-label col-form-label">Enable OTP</label>
							<div class="col-sm-12">
								<select name="enable_otp" id="enable_otp" class="select2 form-control custom-select" style="width: 100%; height:36px;">	
									<option value="">Enable Otp</option>
									<option value="1" {{ ( $universityCourse->enable_otp ==  '1' )? 'selected' : '' }}> Yes</option>
									<option value="0" {{ ( $universityCourse->enable_otp ==  '0' )? 'selected' : '' }}> No </option>
								<select>
							</div>
						</div>
						<div class="form-group row">
							<label for="state" class="col-md-12 text-left control-label col-form-label">Status</label>
							<div class="col-sm-12">
								<select name="status" id="status" class="select2 form-control custom-select" style="width: 100%; height:36px;">	
									<option value="">Update Status</option>
									<option value="1" {{ ( $universityCourse->status ==  '1' )? 'selected' : '' }} > Publish</option>
									<option value="0" {{ ( $universityCourse->status ==  '0' )? 'selected' : '' }}> Private </option>
								<select>
							</div>
						</div>
						<div class="form-group row">
							<label for="tags" class="col-md-6 text-left control-label col-form-label">Featured Image</label>
							<div class="col-sm-6 text-center">
								<a href="#imageBox" class="image-profile open-popup-link">
									<img src="{{ (isset($universityCourse->featured_image))?getSizedImage('thumb',$universityCourse->featured_image):'https://dummyimage.com/150x150?text=Add%20Image' }}" alt="">
									<input type="hidden" name="featured_image" id="featured_image" value="{{ $universityCourse->featured_image }}" >	
								</a>	
								@if(isset($universityCourse->featured_image))
									<a href="javascript:void(0)" class="removeImage" style="color: #c90f0f;font-weight: 600;"> Remove Image </a>	
								@endif					
							</div>
						</div>
						<div class="form-group row">
							<label for="banner_image" class="col-md-6 text-left control-label col-form-label">Banner Image</label>
							<div class="col-sm-6 text-center">
								<a href="#imageBox" class="image-profile open-popup-link">
									<img src="{{ (isset($universityCourse->banner_image))?getSizedImage('thumb',$universityCourse->banner_image):'https://dummyimage.com/150x150?text=Add%20Image' }}" alt="">
									<input type="hidden" name="banner_image" id="banner_image" value="{{ $universityCourse->banner_image }}" >	
								</a>	
								@if(isset($universityCourse->banner_image))
									<a href="javascript:void(0)" class="removeImage" style="color: #c90f0f;font-weight: 600;"> Remove Image </a>	
								@endif					
							</div>
						</div>
						<div class="form-group row">
							<label for="course_video_image" class="col-md-6 text-left control-label col-form-label">Video Thumbnail</label>
							<div class="col-sm-6 text-center">
								<a href="#imageBox" class="image-profile open-popup-link">
									<img src="{{ (isset($universityCourse->course_video_image))?getSizedImage('thumb',$universityCourse->course_video_image):'https://dummyimage.com/150x150?text=Add%20Image' }}" alt="">
									<input type="hidden" name="course_video_image" id="course_video_image" value="{{ $universityCourse->course_video_image }}" >		
								</a>	
								@if(isset($universityCourse->course_video_image))
									<a href="javascript:void(0)" class="removeImage" style="color: #c90f0f;font-weight: 600;"> Remove Image </a>	
								@endif					
							</div>
						</div>
					</div>

				</div>
				<h4 class="card-title"> Search Engine Options </h4>
				<div class="row">
					<div class="col-md-7" >
						<div class="form-group row">
							<label for="title" class="col-sm-3 text-right control-label col-form-label">Title</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="title" id="title" placeholder="Title Here" value="{{ $universityCourse->title }}" >
							</div>
						</div>
						<div class="form-group row">
							<label for="meta_description" class="col-sm-3 text-right control-label col-form-label">Meta Description</label>
							<div class="col-sm-9">
								<textarea class="form-control" name="meta_description" id="meta_description" placeholder="Enter Meta Description Here" >{{ $universityCourse->meta_description }}</textarea>
							</div>
						</div>
						<div class="form-group row">
							<label for="schema" class="col-sm-3 text-right control-label col-form-label">Schema Code</label>
							<div class="col-sm-9">
								<textarea class="form-control" name="schema" id="schema" placeholder="Enter Schema Code" >{{ $universityCourse->schema }}</textarea>
							</div>
						</div>
						<div class="form-group row">
							<label for="utm_campaign" class="col-sm-3 text-right control-label col-form-label">Campaign</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="utm_campaign" id="utm_campaign" placeholder="Enter Utm Campaign Here" value="{{ $universityCourse->utm_campaign }}">
							</div>
						</div>

						<div class="form-group row">
							<label for="utm_source" class="col-sm-3 text-right control-label col-form-label">Source</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="utm_source" id="utm_source" placeholder="Enter Utm Source Here"  value="{{ $universityCourse->utm_source }}">
							</div>
						</div>

						<div class="form-group row">
							<label for="robots" class="col-sm-3 text-right control-label col-form-label">Robots Content</label>
							<div class="col-sm-9">
							<input type="text" class="form-control" name="robots" id="robots" placeholder="Enter Center Pincode Here" value="{{ $universityCourse->robots }}" >
							</div>
						</div>
						<div class="form-group row">
							<label for="canonical" class="col-sm-3 text-right control-label col-form-label">Cronical Url</label>
							<div class="col-sm-9">
							<input type="text" class="form-control" name="canonical" id="canonical" placeholder="Enter Center Pincode Here" value="{{ $universityCourse->canonical }}">
							</div>
						</div>
					</div>
					
				</div>
			</div>

			<div class="border-top">

				<div class="card-body">

					<button type="submit" class="btn btn-primary">Submit</button>
					<input type="hidden" name="course_id" id="model_id" value="{{ $universityCourse->id }}" >
				</div>

			</div>

		</form>

	</div>

</div>              

@endsection

@section('script')

<!-- ============================================================== -->

<!-- CHARTS -->

@endsection

