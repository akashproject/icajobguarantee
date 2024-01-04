@extends('administrator.layouts.admin')
@section('content')
<div class="col-12">
	<div class="card">
		<form class="form-horizontal" method="post" action="{{ url('administrator/save-affiliate-user') }}" enctype="multipart/form-data">
			@csrf
			<div class="card-body">
				<h4 class="card-title"> Add Affiliate User </h4>
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
							<label for="email" class="col-sm-3 text-right control-label col-form-label">Email</label>
							<div class="col-sm-9">
								<input type="email" class="form-control" name="email" id="email" placeholder="Enter Email Address Here" >
							</div>
						</div>
                        <div class="form-group row">
							<label for="mobile" class="col-sm-3 text-right control-label col-form-label">Mobile</label>
							<div class="col-sm-9">
								<input type="number" class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile Number Here" >
							</div>
						</div>
                        <div class="form-group row">
							<label for="pan_number" class="col-sm-3 text-right control-label col-form-label">Pan Number</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="pan_number" id="pan_number" placeholder="Enter Pan Number Here" >
							</div>
						</div>
                        <div class="form-group row">
							<label for="aadhar_number" class="col-sm-3 text-right control-label col-form-label">Aadhar Number</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="aadhar_number" id="aadhar_number" placeholder="Enter Aadhar Number Here" >
							</div>
						</div>
                        <div class="form-group row">
							<label for="account_holder_name" class="col-sm-3 text-right control-label col-form-label">Account Holder Name</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="account_holder_name" id="account_holder_name" placeholder="Enter Account Holder Name" >
							</div>
						</div>
                        <div class="form-group row">
							<label for="account_no" class="col-sm-3 text-right control-label col-form-label">Account Number</label>
							<div class="col-sm-9">
								<input type="number" class="form-control" name="account_no" id="account_no" placeholder="Enter Account Number" >
							</div>
						</div>
                        <div class="form-group row">
							<label for="branch" class="col-sm-3 text-right control-label col-form-label">Branch Name</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="branch" id="branch" placeholder="Enter Account Holder Name" >
							</div>
						</div>
                        <div class="form-group row">
							<label for="ifsc" class="col-sm-3 text-right control-label col-form-label">IFSC Code</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="ifsc" id="ifsc" placeholder="Enter Account Holder Name" >
							</div>
						</div>
					</div>
					<div class="col-md-5">	
						
					</div>
				</div>
			</div>

			<div class="border-top">
				<div class="card-body">
					<button type="submit" class="btn btn-primary">Submit</button>
					<input type="hidden" name="affiliate_user_id" id="affiliate_user_id" value="" >
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
