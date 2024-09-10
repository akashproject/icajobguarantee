@extends('administrator.layouts.admin')
@section('content')
<div class="col-12">
	@if($leads)
		<div class="card">
			<div class="card-body">
				<div class="form-group row">
					<div class="col-md-6 text-left">
						<label for="no_of_module" class="text-left control-label col-form-label">Lead History</label>
					</div>
					<div class="col-md-6 text-right">
						<a href="{{ route('admin-export-lead-csv') }}" target="_blank" class="btn btn-success btn-medium"> Export Csv</a>
					</div>
					
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
								<th>UTM Campaign</th>
								<th>UTM Source</th>
								<th>Created At</th>
								<th>Option</th>
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
								<td>{{ $value->utm_campaign }}</td>													
								<td>{{ $value->utm_source }}</td>													
								<td>{{ $value->created_at }}</td>													
								<td>
									<a href="{{ route('admin-update-lead-status',$value->id) }}" class="btn btn-primary btn" onclick="return confirm('Are you sure?')"; > Update </a>
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



