@extends('administrator.layouts.admin')

@section('content')

<div class="col-12">
	<div class="card">
		<form class="form-horizontal" method="post" action="{{ url('administrator/send-lead') }}" enctype="multipart/form-data">
			@csrf
			<div class="card-body">
				<h4 class="card-title"> Transfer Lead </h4>
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

				<div class="form-group row">
					<label for="to_center" class="col-sm-3 text-right control-label col-form-label">Select Center</label>
					<div class="col-sm-9">
						<select name="to_center" id="to_center" class="select2 form-control custom-select" required>	
							<option value="">Select Center</option>
							@foreach ($centers as $value)
							<option value="{{  $value->id }}" > {{  $value->name }} </option>
							@endforeach
						<select>
					</div>
				</div>
				<div class="form-group row">
					<label for="name" class="col-sm-3 text-right control-label col-form-label">Name</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="name" id="name" placeholder="Enter Lead's Name" >
					</div>
				</div>
				<div class="form-group row">
					<label for="name" class="col-sm-3 text-right control-label col-form-label">Email Address</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="email" id="email" placeholder="Enter Lead's Email Address" >
					</div>
				</div>
				<div class="form-group row">
					<label for="mobile" class="col-sm-3 text-right control-label col-form-label">Mobile No.</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter Lead's Mobile No" >
					</div>
				</div>
				<div class="form-group row">
					<label for="name" class="col-sm-3 text-right control-label col-form-label">City</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="city" id="city" placeholder="Enter Lead's City" >
					</div>
				</div>
				<div class="form-group row">
					<label for="pincode" class="col-sm-3 text-right control-label col-form-label">Pincode</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="pincode" id="pincode" placeholder="Enter Lead's Pincode" >
					</div>
				</div>
				<div class="form-group row">
					<label for="remarks" class="col-sm-3 text-right control-label col-form-label">Remarks</label>
					<div class="col-sm-9">
						<textarea class="form-control" name="remarks"  id="mceEditor" placeholder="Enter Remarks" ></textarea>
					</div>
				</div>
			</div>

			<div class="border-top">
				<div class="card-body">
					<button type="submit" class="btn btn-primary">Submit</button>
					<input type="hidden" name="from_center" id="from_center" value="{{$center->id}}" >
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



