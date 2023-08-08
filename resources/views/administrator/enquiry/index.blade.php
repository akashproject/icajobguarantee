@extends('administrator.layouts.admin')

@section('content')

<div class="col-12">

	@if($enquiry)
	
		<div class="card">

			<div class="card-body">

				<div class="form-group row">
					<label for="no_of_module" class="col-sm-2 text-left control-label col-form-label">Generate QR Code</label>
					<div class="col-sm-7">
						<a href="/administrator/generate-qrcode?center={{$name}}&code={{$center->mobile}}&qr_content={{url('/enquiry-form')}}" class="btn btn-primary">Generate</a>							
					</div>
				</div>

				<div class="table-responsive">

					<table id="zero_config" class="table table-striped table-bordered">

						<thead>
							<tr>
								<th>Name</th>
								<th>Mobile</th>
								<th>Options</th>
							</tr>
						</thead>

						<tbody>

							@foreach ($enquiry as $value)
							<tr>
								<td>{{ $value->name }}</td>													
								<td>{{ $value->mobile }}</td>													
								<td>
									<a href="{{ url('administrator/enquiry/'.$value->id) }}" class="btn btn-success btn-small">View</a>
								</td>
							</tr>
							@endforeach							
						</tbody>
					</table>
				</div>
			</div>

		</div>

	@endif

</div>                   

@endsection

@section('script')

<!-- ============================================================== -->

<!-- CHARTS -->

@endsection

