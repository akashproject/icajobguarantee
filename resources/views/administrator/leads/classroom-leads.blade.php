@extends('administrator.layouts.admin')
@section('content')
<div class="col-12">
	@if($leads)
		<div class="card">
			<div class="card-body">
				<div class="form-group row">
					<label for="no_of_module" class="col-sm-2 text-left control-label col-form-label">
						Lead History
					</label>
					<a href="{{ route('admin-export-leads','all') }}" class="btn btn-success"> Export as CSV </a>
				</div>
				<div class="table-responsive">
					<table id="zero_config" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Name</th>
								<th>Mobile</th>
								<th>Email</th>
								<th>Center</th>
								<th>City</th>
								<th>Pincode</th>
								<th>OTP Status</th>
								<th>Utm Campaign</th>
								<th>Utm Source</th>
								<!-- <th>Options</th> -->
							</tr>
						</thead>
						<tbody>
							@foreach ($leads as $value)
							<tr>
								<td>{{ $value->name }}</td>	
								<td>{{ $value->mobile }}</td>														
								<td>{{ $value->email }}</td>													
								<td>{{ $value->center }}</td>													
								<td>{{ $value->city }}</td>													
								<td>{{ $value->pincode }}</td>													
								<td>{{ $value->otp_status }}</td>													
								<td>{{ $value->utm_campaign }}</td>													
								<td>{{ $value->utm_source }}</td>													
																			
								<!-- <td>
									<a href="{{ url('administrator/leads/'.$value->id) }}" class="btn btn-success btn-small">View</a>
								</td> -->
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
