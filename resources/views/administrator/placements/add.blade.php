@extends('administrator.layouts.admin')

@section('content')
<div class="col-12">
	<div class="card">
		<form class="form-horizontal" method="post" action="{{ url('administrator/save-placement') }}" enctype="multipart/form-data">
			@csrf
			<div class="card-body">
				<h4 class="card-title"> Add Testimonial </h4>
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
					<div class="col-md-7" >
						<div class="form-group row">
							<label for="name" class="col-sm-3 text-right control-label col-form-label">Name</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="name" id="name" placeholder="Enter Name Here" >
							</div>
						</div>
						<div class="form-group row">
							<label for="bio" class="col-sm-3 text-right control-label col-form-label">Bio</label>
							<div class="col-sm-9">
								<textarea class="form-control editor" name="bio"  id="mceEditor" placeholder="Enter Bio Here" ></textarea>
							</div>
						</div>
						<div class="form-group row">
							<label for="dasignation" class="col-sm-3 text-right control-label col-form-label">Dasignation</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="dasignation" id="dasignation" placeholder="Enter Dasignation Here" >
							</div>
						</div>
						<div class="form-group row">
							<label for="video" class="col-sm-3 text-right control-label col-form-label">Video</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="video" id="video" placeholder="Enter video url Here" >
							</div>
						</div>
						
					</div>
					<div class="col-md-5">
						<div class="form-group row">
							<label for="state" class="col-sm-3 text-right control-label col-form-label"> Center Enrolled </label>
							<div class="col-sm-9">
								<select name="center_id" id="center_id" class="select2 form-control custom-select" style="width: 100%; height:36px;">	
									<option value="">Select Center</option>
									@foreach ($centers as $value)
									<option value="{{ $value->id }}" > {{ $value->name }} </option>
									@endforeach
								</select>
							</div>
						</div>	
						<div class="form-group row">
							<label for="state" class="col-sm-3 text-right control-label col-form-label"> Course Enrolled </label>
							<div class="col-sm-9">
								<select name="course_id" id="course_id" class="select2 form-control custom-select" style="width: 100%; height:36px;">	
									<option value="">Select Course</option>
									@foreach ($courses as $value)
									<option value="{{ $value->id }}" > {{ $value->name }} </option>
									@endforeach
								</select>
							</div>
						</div>	
						<div class="form-group row">
							<label for="state" class="col-sm-3 text-right control-label col-form-label"> Placed At </label>
							<div class="col-sm-9">
								<select name="placed_at" id="placed_at" class="select2 form-control custom-select" style="width: 100%; height:36px;">	
									<option value="">Select Placed At</option>
									@foreach ($recruiters as $value)
									<option value="{{ $value->id }}" > {{ $value->name }} </option>
									@endforeach
								</select>
							</div>
						</div>							
						<div class="form-group row">
							<label for="state" class="col-sm-3 text-right control-label col-form-label">Status</label>
							<div class="col-sm-9">
								<select name="status" id="status" class="select2 form-control custom-select" style="width: 100%; height:36px;">	
									<option value="">Update Status</option>
									<option value="1" > Publish</option>
									<option value="0" > Private </option>
								<select>
							</div>
						</div>
						<div class="form-group row">
							<label for="tags" class="col-md-6 text-left control-label col-form-label">Featured Image</label>
							<div class="col-sm-6 text-center">
								<a href="#imageBox" class="image-profile open-popup-link">
									<img src="https://dummyimage.com/150x150?text=Add%20Image" alt="">
									<input type="hidden" name="featured_image" id="featured_image" value="" >	
								</a>	
								@if(isset($course->featured_image))
									<a href="javascript:void(0)" class="removeImage" style="color: #c90f0f;font-weight: 600;"> Remove Image </a>	
								@endif					
							</div>
						</div>
					</div>
				</div>
				<h4 class="card-title"> Search Engine Options </h4>
				<div class="row">
					<div class="col-md-8" >
						<div class="form-group row">
							<label for="title" class="col-sm-3 text-right control-label col-form-label">Title</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="title" id="title" placeholder="Title Here" >
							</div>
						</div>
						<div class="form-group row">
							<label for="meta_description" class="col-sm-3 text-right control-label col-form-label">Meta Description</label>
							<div class="col-sm-9">
								<textarea class="form-control" name="meta_description" id="meta_description" placeholder="Enter Meta Description Here" ></textarea>
							</div>
						</div>
						<div class="form-group row">
							<label for="schema" class="col-sm-3 text-right control-label col-form-label">Schema Code</label>
							<div class="col-sm-9">
								<textarea class="form-control" name="schema" id="schema" placeholder="Enter Schema Code" ></textarea>
							</div>
						</div>
						<div class="form-group row">
							<label for="utm_campaign" class="col-sm-3 text-right control-label col-form-label">Campaign</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="utm_campaign" id="utm_campaign" placeholder="Enter Utm Campaign Here" value="Google-Organic" >
							</div>
						</div>

						<div class="form-group row">
							<label for="utm_source" class="col-sm-3 text-right control-label col-form-label">Source</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="utm_source" id="utm_source" placeholder="Enter Utm Source Here"  value="SEO">
							</div>
						</div>
						<div class="form-group row">
							<label for="robots" class="col-sm-3 text-right control-label col-form-label">Robots Content</label>
							<div class="col-sm-9">
							<input type="text" class="form-control" name="robots" id="robots" placeholder="Enter Center Pincode Here" value="index, follow">
							</div>
						</div>
						<div class="form-group row">
							<label for="canonical" class="col-sm-3 text-right control-label col-form-label">Cronical Url</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="canonical" id="canonical" placeholder="Enter Canonical Url Here" >
							</div>
						</div>
					</div>
					<div class="col-md-4" >

					</div>
				</div>
			</div>

			<div class="border-top">

				<div class="card-body">

					<button type="submit" class="btn btn-primary">Submit</button>
					<input type="hidden" name="placement_id" id="placement_id" value="" >
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
