@extends('administrator.layouts.admin')
@section('content')
<div class="col-12">
	@if($leads)
		<div class="card">
			<div class="card-body">
				<div class="form-group row">
					<label for="no_of_module" class="col-sm-2 text-left control-label col-form-label">Lead History</label>
				</div>
				<div class="table-responsive">
					<table id="zero_config" class="table table-striped table-bordered">
						<thead>

							<tr>
								<th>Name</th>
								<th>Email</th>
								<th>Mobile</th>
								<th>Center</th>
								<th>Pincode</th>
							</tr>

						</thead>
						<tbody>
							@foreach ($leads as $value)
							<tr>
								<td>{{ $value->name }}</td>													
								<td>{{ $value->email }}</td>													
								<td>{{ $value->mobile }}</td>													
								<td>{{ $value->center }}</td>													
								<td>{{ $value->pincode }}</td>													
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



