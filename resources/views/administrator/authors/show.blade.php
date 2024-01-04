@extends('administrator.layouts.admin')

@section('content')
<div class="col-12">
	<div class="card">
		<form class="form-horizontal" method="post" action="{{ url('administrator/save-author') }}" enctype="multipart/form-data">
			@csrf
			<div class="card-body">
				<h4 class="card-title"> General Options </h4>
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
								<input type="text" class="form-control" name="name" id="name" placeholder="Enter Name Here" value="{{ $author->name }}" >
							</div>
						</div>

						<div class="form-group row">
							<label for="slug" class="col-sm-3 text-right control-label col-form-label">Slug</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="slug" id="slug" placeholder="Slug Here"  value="{{ $author->slug }}">
							</div>
						</div>
						
						<div class="form-group row">
							<label for="bio" class="col-sm-3 text-right control-label col-form-label">Bio</label>
							<div class="col-sm-9">
								<textarea class="form-control editor" name="bio"  id="mceEditor" placeholder="Enter bio Here" >{{ $author->bio }}</textarea>
							</div>
						</div>

						<div class="form-group row">
							<label for="qualification" class="col-sm-3 text-right control-label col-form-label">Qualification</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="qualification" id="qualification" placeholder="Qualification Here" value="{{ $author->qualification }}" >
							</div>
						</div>

						<div class="form-group row">
							<label for="certification" class="col-sm-3 text-right control-label col-form-label">Certification</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="certification" id="certification" placeholder="Certification Here" value="{{ $author->certification }}" >
							</div>
						</div>

						<div class="form-group row">
							<label for="profession" class="col-sm-3 text-right control-label col-form-label">Profession</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="profession" id="profession" placeholder="Profession Here" value="{{ $author->profession }}" >
							</div>
						</div>

						<div class="form-group row">
							<label for="organization" class="col-sm-3 text-right control-label col-form-label">Organization</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="organization" id="organization" placeholder="Organization Here" value="{{ $author->organization }}" >
							</div>
						</div>

						<div class="form-group row">
							<label for="linkedin" class="col-sm-3 text-right control-label col-form-label">Linkedin</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="linkedin" id="linkedin" placeholder="Linkedin Here" value="{{ $author->linkedin }}" >
							</div>
						</div>
						
					</div>
					<div class="col-md-4">	
						<div class="form-group row">
							<label for="state" class="col-md-12 text-left control-label col-form-label">Status</label>
							<div class="col-sm-12">
								<select name="status" id="status" class="select2 form-control custom-select" style="width: 100%; height:36px;">	
									<option value="">Update Status</option>
									<option value="1" {{ ( $author->status ==  '1' )? 'selected' : '' }} > Publish</option>
									<option value="0" {{ ( $author->status ==  '0' )? 'selected' : '' }}> Private </option>
								<select>
							</div>
						</div>
						<div class="form-group row">
							<label for="featured_image" class="col-md-6 text-left control-label col-form-label">Featured Image</label>
							<div class="col-sm-6 text-center">
								<a href="#imageBox" class="image-profile open-popup-link">
									<img src="{{ (isset($author->featured_image))?getSizedImage('thumb',$author->featured_image):'https://dummyimage.com/150x150?text=Add%20Image' }}" alt="">
									<input type="hidden" name="featured_image" id="featured_image" value="{{ $author->featured_image }}" >	
								</a>	
								@if(isset($author->featured_image))
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
								<input type="text" class="form-control" name="title" id="title" placeholder="Title Here" value="{{ $author->title }}" >
							</div>
						</div>
						<div class="form-group row">
							<label for="meta_description" class="col-sm-3 text-right control-label col-form-label">Meta Description</label>
							<div class="col-sm-9">
								<textarea class="form-control" name="meta_description" id="meta_description" placeholder="Enter Meta Description Here" >{{ $author->meta_description }}</textarea>
							</div>
						</div>
						<div class="form-group row">
							<label for="schema" class="col-sm-3 text-right control-label col-form-label">Schema Code</label>
							<div class="col-sm-9">
								<textarea class="form-control" name="schema" id="schema" placeholder="Enter Schema Code" >{{ $author->schema }}</textarea>
							</div>
						</div>
						<div class="form-group row">
							<label for="utm_campaign" class="col-sm-3 text-right control-label col-form-label">Campaign</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="utm_campaign" id="utm_campaign" placeholder="Enter Utm Campaign Here" value="{{ $author->utm_campaign }}">
							</div>
						</div>

						<div class="form-group row">
							<label for="utm_source" class="col-sm-3 text-right control-label col-form-label">Source</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="utm_source" id="utm_source" placeholder="Enter Utm Source Here"  value="{{ $author->utm_source }}">
							</div>
						</div>

						<div class="form-group row">
							<label for="robots" class="col-sm-3 text-right control-label col-form-label">Robots Content</label>
							<div class="col-sm-9">
							<input type="text" class="form-control" name="robots" id="robots" placeholder="Enter Center Pincode Here" value="{{ $author->robots }}" >
							</div>
						</div>
						<div class="form-group row">
							<label for="canonical" class="col-sm-3 text-right control-label col-form-label">Cronical Url</label>
							<div class="col-sm-9">
							<input type="text" class="form-control" name="canonical" id="canonical" placeholder="Enter Center Pincode Here" value="{{ $author->canonical }}">
							</div>
						</div>
					</div>
					
				</div>
			</div>

			<div class="border-top">
				<div class="card-body">
					<button type="submit" class="btn btn-primary">Submit</button>
					<input type="hidden" name="author_id" id="author_id" value="{{ $author->id }}" >
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