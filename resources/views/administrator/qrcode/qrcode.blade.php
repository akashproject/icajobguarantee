@extends('administrator.layouts.admin')

@section('content')
<div class="col-12">
	<div class="card">
		<form class="form-horizontal" method="get" action="{{ url('administrator/generate-qrcode') }}" enctype="multipart/form-data">
			<div class="card-body">
				<h4 class="card-title"> Generate QR Code </h4>
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
							<label for="qr_content" class="col-sm-3 text-right control-label col-form-label">QR Content</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="qr_content" id="qr_content" placeholder="Enter QR Content" >
							</div>
						</div>	
					</div>
				</div>
			</div>

			<div class="border-top">
				<div class="card-body">
					<button type="submit" class="btn btn-primary">Generate</button>
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