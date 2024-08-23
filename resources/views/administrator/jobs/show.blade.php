@extends('administrator.layouts.admin')

@section('content')
<div class="col-12">
	<div class="card">
		<form class="form-horizontal" method="post" action="{{ url('administrator/save-job') }}" enctype="multipart/form-data">
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
								<input type="text" class="form-control" name="name" id="name" placeholder="Enter Name Here" value="{{ $job->name }}" >
							</div>
						</div>
						<div class="form-group row">
							<label for="description" class="col-sm-3 text-right control-label col-form-label">Description</label>
							<div class="col-sm-9">
								<textarea class="form-control editor" name="description" id="description" placeholder="Enter description Here" >{{ $job->description }}</textarea>
							</div>
						</div>
						<div class="form-group row">
							<label for="location" class="col-sm-3 text-right control-label col-form-label">Job Location</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="location" id="location" placeholder="Enter Actual Price Here"  value="{{ $job->location }}" >
							</div>
						</div>
						<div class="form-group row">
							<label for="type" class="col-sm-3 text-right control-label col-form-label">Job Type</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="type" id="type" placeholder="Enter Offer Price Here" value="{{ $job->type }}" >
							</div>
						</div>
						<div class="form-group row">
							<label for="experince" class="col-sm-3 text-right control-label col-form-label">Work Experince</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="experince" id="experince" placeholder="Enter Course Duration" value="{{ $job->experince }}" >
							</div>
						</div>
						<div class="form-group row">
							<label for="salary" class="col-sm-3 text-right control-label col-form-label">Salary</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="salary" id="salary" placeholder="Enter No Of Module" value="{{ $job->salary }}" >
							</div>
						</div>					
					</div>
					<div class="col-md-4">
						<div class="form-group row">
							<label for="type_id" class="col-md-12 text-left control-label col-form-label">Cateogry</label>
							<div class="col-sm-12">
								<select name="type_id" id="type_id" class="select2 form-control custom-select" style="width: 100%; height:36px;">	
									@foreach ($jobType as $value)
									<option value="{{  $value->id }}" {{ ( $value->id ==  $job->type_id )? 'selected' : '' }} > {{  $value->name }} </option>
									@endforeach
								<select>
							</div>
						</div>
						<div class="form-group row">
							<label for="state" class="col-md-12 text-left control-label col-form-label">Status</label>
							<div class="col-sm-12">
								<select name="status" id="status" class="select2 form-control custom-select" style="width: 100%; height:36px;">	
									<option value="">Update Status</option>
									<option value="1" {{ ( $job->status ==  '1' )? 'selected' : '' }} > Publish</option>
									<option value="0" {{ ( $job->status ==  '0' )? 'selected' : '' }}> Private </option>
								<select>
							</div>
						</div>
					</div>

				</div>
			</div>

			<div class="border-top">

				<div class="card-body">

					<button type="submit" class="btn btn-primary">Submit</button>
					<input type="hidden" name="job_id" id="model_id" value="{{ $job->id }}" >
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

