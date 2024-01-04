@extends('administrator.layouts.admin')

@section('content')
<div class="col-12">
	<div class="card">
		<form class="form-horizontal" method="post" action="{{ url('administrator/save-brochure') }}" enctype="multipart/form-data">
			@csrf
			<div class="card-body">
				<h4 class="card-title"> Save Brochure </h4>
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
								<input type="text" class="form-control" name="name" id="name" placeholder="Enter Brochure name here"  value="{{ $brochure->name }}" >
							</div>
						</div>
						<div class="form-group row">
							<label for="tags" class="col-md-3 text-right control-label col-form-label">Brochure</label>
							<div class="col-sm-9">
								<a href="#imageBox" class="image-profile open-popup-link">
									<img src="{{ (isset($brochure->attachment))?url('assets/img/pdf.png'):'https://dummyimage.com/150x150?text=Upload%20File' }}" alt="">
									<input type="hidden" name="attachment" id="attachment" value="{{ $brochure->attachment }}" >	
								</a>
								@if(isset($brochure->attachment))
									<a href="javascript:void(0)" class="removeImage" style="color: #c90f0f;font-weight: 600;"> Remove </a>	
								@endif				
							</div>
						</div>	
					</div>
					<div class="col-md-4">					
						<div class="form-group row">
							<label for="state" class="col-sm-3 text-right control-label col-form-label">Status</label>
							<div class="col-sm-9">
								<select name="status" id="status" class="select2 form-control custom-select" style="width: 100%; height:36px;">	
									<option value="">Update Status</option>
									<option value="1" {{ ( $brochure->status ==  '1' )? 'selected' : '' }} > Publish</option>
									<option value="0" {{ ( $brochure->status ==  '0' )? 'selected' : '' }}> Private </option>
								<select>
							</div>
						</div>						
					</div>
				</div>
				
			</div>

			<div class="border-top">
				<div class="card-body">
					<button type="submit" class="btn btn-primary">Submit</button>
					<input type="hidden" name="brochure_id" id="brochure_id" value="{{ $brochure->id }}" >
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

