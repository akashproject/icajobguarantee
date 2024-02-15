@extends('administrator.layouts.admin')



@section('content')
<div class="col-12">

	<div class="card">

		<form class="form-horizontal" method="post" action="{{ url('administrator/save-news') }}" enctype="multipart/form-data">
			@csrf
			<div class="card-body">
				<h4 class="card-title"> Add News </h4>
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
								<input type="text" class="form-control"  value="{{ $news->name }}"  name="name" id="name" placeholder="Enter Name Here" >
							</div>
						</div>
						<div class="form-group row">
							<label for="description" class="col-sm-3 text-right control-label col-form-label">Description</label>
							<div class="col-sm-9">
								<textarea class="form-control editor" name="description"  id="mceEditor" placeholder="Enter description Here" >{{ $news->description }}</textarea>
							</div>
						</div>

						<div class="form-group row">
							<label for="link" class="col-sm-3 text-right control-label col-form-label">External Link</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" value="{{ $news->link }}" name="link" id="link" placeholder="Enter Name Here" >
							</div>
						</div>
					</div>
					<div class="col-md-4">	
						<div class="form-group row">
							<label for="state" class="col-sm-12 text-left control-label col-form-label">Status</label>
							<div class="col-sm-12">
								<select name="status" id="status" class="select2 form-control custom-select" style="width: 100%; height:36px;">	
									<option value="">Update Status</option>
									<option value="1" {{ ( $news->status ==  '1' )? 'selected' : '' }} > Publish</option>
									<option value="0" {{ ( $news->status ==  '0' )? 'selected' : '' }}> Private </option>
								<select>
							</div>
						</div>

						<div class="form-group row">
							<label for="featured_image" class="col-md-6 text-left control-label col-form-label">Featured Image</label>
							<div class="col-sm-6 text-center">
								<a href="#imageBox" class="image-profile open-popup-link">
									<img src="{{ (isset($news->featured_image))?getSizedImage('thumb',$news->featured_image):'https://dummyimage.com/150x150?text=Add%20Image' }}" alt="">
									<input type="hidden" name="featured_image" id="featured_image" value="{{ $news->featured_image }}" >	
								</a>	
								@if(isset($news->featured_image))
									<a href="javascript:void(0)" class="removeImage" style="color: #c90f0f;font-weight: 600;"> Remove Image </a>	
								@endif					
							</div>
						</div>
					</div>
				</div>
			</div>

				



			<div class="border-top">

				<div class="card-body">

					<button type="submit" class="btn btn-primary">Submit</button>

					<input type="hidden" name="news_id" id="news_id" value="{{ $news->id }}" >

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