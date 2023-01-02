@extends('administrator.layouts.admin')

@section('content')
<div class="col-12">
	<div class="card">
		<form class="form-horizontal" method="post" action="{{ url('administrator/save-settings') }}" enctype="multipart/form-data">
			@csrf
			<div class="card-body">
				<h4 class="card-title"> Save Settings </h4>
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
				<h6 class="card-title"> General Settings </h6>
				<div class="row">
					<div class="col-md-7" >
						<div class="form-group row">
							<label for="header_logo" class="col-sm-3 text-right control-label col-form-label">Header Logo</label>
							<div class="col-sm-9">
								<input type="file" class="form-control" name="header_logo" id="header_logo" >
							</div>
						</div>

						<div class="form-group row">
							<label for="footer_logo" class="col-sm-3 text-right control-label col-form-label">Footer Logo</label>
							<div class="col-sm-9">
								<input type="file" class="form-control" name="footer_logo" id="footer_logo" >
							</div>
						</div>

						<div class="form-group row">
							<label for="footer_about" class="col-sm-3 text-right control-label col-form-label">Footer About</label>
							<div class="col-sm-9">
								<textarea class="form-control" name="footer_about" id="footer_about" placeholder="Enter footer about Here" >{{ $settings['footer_about'] }} </textarea>
							</div>
						</div>
						<h5> Contact Information </h5>
						<div class="form-group row">
							<label for="mobile" class="col-sm-3 text-right control-label col-form-label">Mobile Number</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="mobile" id="mobile" value="{{ (isset($settings['mobile']))?$settings['mobile']:'' }}" >    
							</div>
						</div>
						<div class="form-group row">
							<label for="email" class="col-sm-3 text-right control-label col-form-label">Email Address</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="email" id="email" value="{{ (isset($settings['email']))?$settings['email']:'' }}" >
							</div>
						</div>
						
					</div>
					

				</div>
				
			</div>

			<div class="border-top">

				<div class="card-body">

					<button type="submit" class="btn btn-primary">Submit</button>
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

