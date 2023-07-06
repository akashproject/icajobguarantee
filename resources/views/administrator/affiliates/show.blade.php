@extends('administrator.layouts.admin')
@section('content')
<div class="col-12">
	<div class="card">
		<form class="form-horizontal" method="post" action="{{ url('administrator/save-affiliate-user') }}" enctype="multipart/form-data">
			@csrf
			<div class="card-body">
				<h4 class="card-title"> Affiliate User # {{$affiliateUser->id}}</h4>
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
							<label for="name" class="col-sm-4 text-right control-label col-form-label">Code</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name" id="name" readonly value="{{ $affiliateUser->code }}">
							</div>
						</div>
						<div class="form-group row">
							<label for="name" class="col-sm-4 text-right control-label col-form-label">Name</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="name" id="name" placeholder="Enter Name Here" value="{{ $affiliateUser->name }}">
							</div>
						</div>
                        <div class="form-group row">
							<label for="email" class="col-sm-4 text-right control-label col-form-label">Email</label>
							<div class="col-sm-8">
								<input type="email" class="form-control" name="email" id="email" placeholder="Enter Email Address Here" value="{{ $affiliateUser->email }}">
							</div>
						</div>
                        <div class="form-group row">
							<label for="mobile" class="col-sm-4 text-right control-label col-form-label">Mobile</label>
							<div class="col-sm-8">
								<input type="number" class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile Number Here" value="{{ $affiliateUser->mobile }}">
							</div>
						</div>
                        <div class="form-group row">
							<label for="pan_number" class="col-sm-4 text-right control-label col-form-label">Pan Number</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="pan_number" id="pan_number" placeholder="Enter Pan Number Here" value="{{ $affiliateUser->pan_number }}">
							</div>
						</div>
                        <div class="form-group row">
							<label for="aadhar_number" class="col-sm-4 text-right control-label col-form-label">Aadhar Number</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="aadhar_number" id="aadhar_number" placeholder="Enter Aadhar Number Here" value="{{ $affiliateUser->aadhar_number }}">
							</div>
						</div>
                        <div class="form-group row">
							<label for="account_holder_name" class="col-sm-4 text-right control-label col-form-label">Account Holder Name</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="account_holder_name" id="account_holder_name" placeholder="Enter Account Holder Name" value="{{ $affiliateUser->account_holder_name }}">
							</div>
						</div>
                        <div class="form-group row">
							<label for="account_no" class="col-sm-4 text-right control-label col-form-label">Account Number</label>
							<div class="col-sm-8">
								<input type="number" class="form-control" name="account_no" id="account_no" placeholder="Enter Account Number" value="{{ $affiliateUser->account_no }}">
							</div>
						</div>
                        <div class="form-group row">
							<label for="branch" class="col-sm-4 text-right control-label col-form-label">Branch Name</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="branch" id="branch" placeholder="Enter Account Holder Name" value="{{ $affiliateUser->branch }}">
							</div>
						</div>
                        <div class="form-group row">
							<label for="ifsc" class="col-sm-4 text-right control-label col-form-label">IFSC Code</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="ifsc" id="ifsc" placeholder="Enter Account Holder Name" value="{{ $affiliateUser->ifsc }}">
							</div>
						</div>
					</div>
					<div class="col-md-5">	
						<div class="form-group row">
							<label for="pan_number" class="col-sm-12 text-left control-label col-form-label">Pancard Photo</label>
							<div class="col-sm-12">
								<input type="file" class="form-control" name="pan_number" id="pan_number" placeholder="Enter Account Holder Name" value="">
							</div>
						</div>
						<div class="form-group row">
							<label for="aadhar_photo" class="col-sm-12 text-left control-label col-form-label">Aadhar Photo</label>
							<div class="col-sm-12">
								<input type="file" class="form-control" name="aadhar_photo" id="aadhar_photo" placeholder="Enter Account Holder Name" value="">
							</div>
						</div>
						<div class="form-group row">
							<label for="cheque" class="col-sm-12 text-left control-label col-form-label">Cancel Cheque Photo</label>
							<div class="col-sm-12">
								<input type="file" class="form-control" name="cheque" id="cheque" placeholder="Enter Account Holder Name" value="">
							</div>
						</div>
						<div class="form-group row">
							<label for="no_of_module" class="col-sm-12 text-left control-label col-form-label">QR Code</label>
							<div class="col-sm-12">
								<a href="/administrator/generate-qrcode?center={{$name}}&code={{$affiliateUser->code}}&qr_content={{url('ads/affiliate-qrcode-page')}}" class="btn btn-primary"> Generate </a>								
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="border-top">
				<div class="card-body">
					<button type="submit" class="btn btn-primary">Submit</button>
					<input type="hidden" name="affiliate_user_id" id="affiliate_user_id" value="{{ $affiliateUser->id }}" >
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
