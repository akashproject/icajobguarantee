@extends('administrator.layouts.admin')

@section('content')
<div class="col-12">
	<div class="card">
		<form class="form-horizontal" method="post" action="{{ url('administrator/save-assessment') }}" enctype="multipart/form-data">
			@csrf
			<div class="card-body">
				<h4 class="card-title"> Edit Assessment </h4>
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
							<label for="course_id" class="col-sm-3 text-right control-label col-form-label">Course</label>
							<div class="col-sm-9">
								<select name="course_id" id="course_id" class="select2 form-control custom-select" style="width: 100%; height:36px;">	
									@foreach ($courses as $course)
									<option value="{{ $course->id }}" {{ ( $course->id == $assessment->course_id)? 'selected' : '' }}> {{ $course->name }} </option>
									@endforeach
								<select>
							</div>
						</div>
						<div class="form-group row">
							<label for="name" class="col-sm-3 text-right control-label col-form-label">Name</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="name" id="name" placeholder="Enter Name Here"  value="{{ $assessment->name }}" >
							</div>
						</div>
						<div class="form-group row">
							<label for="description" class="col-sm-3 text-right control-label col-form-label">Description</label>
							<div class="col-sm-9">
								<textarea class="form-control editor" name="description" id="description" placeholder="Enter description Here" >{{ $assessment->description }}</textarea>
							</div>
						</div>
						<div class="form-group row">
							<label for="total_mark" class="col-sm-3 text-right control-label col-form-label">Total Mark</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="total_mark" id="total_mark" placeholder="Enter Total Mark Here" value="{{ $assessment->total_mark }}" >
							</div>
						</div>
						<div class="form-group row">
							<label for="duration" class="col-sm-3 text-right control-label col-form-label">Duration</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="duration" id="duration" placeholder="Enter Assessment Duration" value="{{ $assessment->duration }}" >
							</div>
						</div>
						<div class="form-group row">
							<label for="state" class="col-sm-3 text-right control-label col-form-label">Status</label>
							<div class="col-sm-9">
								<select name="status" id="status" class="select2 form-control custom-select" style="width: 100%; height:36px;">	
									<option value="">Update Status</option>
									<option value="1" {{ ( $assessment->status ==  '1' )? 'selected' : '' }} > Publish</option>
									<option value="0" {{ ( $assessment->status ==  '0' )? 'selected' : '' }}> Private </option>
								<select>
							</div>
						</div>
					</div>
				</div>
				
			</div>

			<div class="border-top">

				<div class="card-body">

					<button type="submit" class="btn btn-primary">Submit</button>
					<input type="hidden" name="assessment_id" id="assessment_id" value="{{ $assessment->id }}" >
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

