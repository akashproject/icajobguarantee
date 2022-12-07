@extends('administrator.layouts.admin')

@section('content')
<div class="col-12">
	<div class="card">
		<form class="form-horizontal" method="post" action="{{ url('administrator/save-course') }}" enctype="multipart/form-data">
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

				<div class="row">
					<div class="col-md-7" >
						<div class="form-group row">
							<label for="title" class="col-sm-3 text-right control-label col-form-label">Title</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="title" id="title" placeholder="Title Here"  value="{{ $course->title }}" >
							</div>
						</div>

						<div class="form-group row">
							<label for="slug" class="col-sm-3 text-right control-label col-form-label">Slug</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="slug" id="slug" placeholder="Slug Here"  value="{{ $course->slug }}" >
							</div>
						</div>
						<div class="form-group row">
							<label for="description" class="col-sm-3 text-right control-label col-form-label">Description</label>
							<div class="col-sm-9">
								<textarea class="form-control" name="description" id="description" placeholder="Enter description Here" >{{ $course->description }}</textarea>
							</div>
						</div>
						<div class="form-group row">
							<label for="price" class="col-sm-3 text-right control-label col-form-label">Actual Price</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="price" id="price" placeholder="Enter Actual Price Here" value="{{ $course->price }}" >
							</div>
						</div>
						<div class="form-group row">
							<label for="offer_price" class="col-sm-3 text-right control-label col-form-label">Offer Price</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="offer_price" id="offer_price" placeholder="Enter Offer Price Here" value="{{ $course->offer_price }}" >
							</div>
						</div>
						<div class="form-group row">
							<label for="duration" class="col-sm-3 text-right control-label col-form-label">Course Duration</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="duration" id="duration" placeholder="Enter Course Duration" value="{{ $course->duration }}" >
							</div>
						</div>
						<div class="form-group row">
							<label for="no_of_module" class="col-sm-3 text-right control-label col-form-label">No Of Module</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="no_of_module" id="no_of_module" placeholder="Enter No Of Module" value="{{ $course->no_of_module }}" >
							</div>
						</div>
						<div class="form-group row">
							<label for="highlights" class="col-sm-3 text-right control-label col-form-label">Course highlights</label>
							<div class="col-sm-9">
								<textarea class="form-control" name="highlights" id="highlights" placeholder="Enter Highlights" >{{ $course->highlights }}</textarea>
							</div>
						</div>
						<div class="form-group row">
							<label for="criteria" class="col-sm-3 text-right control-label col-form-label">Course criteria</label>
							<div class="col-sm-9">
								<textarea class="form-control" name="criteria" id="criteria" placeholder="Enter Course Criteria" >{{ $course->criteria }}</textarea>
							</div>
						</div>
						<div class="form-group row">
							<label for="schema" class="col-sm-3 text-right control-label col-form-label">Schema Code</label>
							<div class="col-sm-9">
								<textarea class="form-control" name="schema" id="schema" placeholder="Enter Schema Code" >{{ $course->schema }}</textarea>
							</div>
						</div>
					</div>
					<div class="col-md-5">
						<div class="form-group row">
							<label for="type_id" class="col-sm-3 text-right control-label col-form-label">Cateogry</label>
							<div class="col-sm-9">
								<select name="type_id" id="type_id" class="select2 form-control custom-select" style="width: 100%; height:36px;">	
									<option value="1">Uncategorized</option>
								<select>
							</div>
						</div>
						<div class="form-group row">
							<label for="utm_campaign" class="col-sm-3 text-right control-label col-form-label">Campaign</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="utm_campaign" id="utm_campaign" placeholder="Enter Utm Campaign Here" value="{{ $course->utm_campaign }}">
							</div>
						</div>

						<div class="form-group row">
							<label for="utm_source" class="col-sm-3 text-right control-label col-form-label">Source</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="utm_source" id="utm_source" placeholder="Enter Utm Source Here"  value="{{ $course->utm_source }}">
							</div>
						</div>
						<div class="form-group row">
							<label for="state" class="col-sm-3 text-right control-label col-form-label">Enable OTP</label>
							<div class="col-sm-9">
								<select name="enable_otp" id="enable_otp" class="select2 form-control custom-select" style="width: 100%; height:36px;">	
									<option value="">Enable Otp</option>
									<option value="1" {{ ( $course->enable_otp ==  '1' )? 'selected' : '' }}> Yes</option>
									<option value="0" {{ ( $course->enable_otp ==  '0' )? 'selected' : '' }}> No </option>
								<select>
							</div>
						</div>
						<div class="form-group row">
							<label for="state" class="col-sm-3 text-right control-label col-form-label">Status</label>
							<div class="col-sm-9">
								<select name="status" id="status" class="select2 form-control custom-select" style="width: 100%; height:36px;">	
									<option value="">Update Status</option>
									<option value="1" {{ ( $course->status ==  '1' )? 'selected' : '' }} > Publish</option>
									<option value="0" {{ ( $course->status ==  '0' )? 'selected' : '' }}> Private </option>
								<select>
							</div>
						</div>
					</div>

				<div>

			</div>

			<div class="border-top">

				<div class="card-body">

					<button type="submit" class="btn btn-primary">Submit</button>
					<input type="hidden" name="course_id" id="course_id" value="{{ $course->id }}" >
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

