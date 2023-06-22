@extends('administrator.layouts.admin')
@section('content')
<div class="col-12">
	@if($affiliateUsers)
		<div class="card">
			<div class="card-body">
				<h5 class="card-title"> User <a href="{{ url('administrator/add-affiliate-user') }}" class="btn btn-primary">Add New User</a></h5> 
                
				<div class="table-responsive">
					<table id="zero_config" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Name</th>
								<th>Mobile</th>
								<th>Code</th>
								<th>Options</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($affiliateUsers as $value)
							<tr>
								<td>{{ $value->name }}</td>													
								<td>{{ $value->mobile }}</td>													
								<td>{{ $value->code }}</td>													
								<td>
									<a href="{{ url('affiliate-dashboard') }}/{{ $value->code }}" class="btn btn-success btn-lg">View</a>
									<a href="{{ url('administrator/view-affiliate-user') }}/{{ $value->id }}" class="btn btn-primary btn-lg">Edit</a>
									<a href="{{ url('administrator/delete-affiliate-user') }}/{{ $value->id }}" class="btn btn-danger btn-lg" onclick="return confirm('Are you sure?')"; >Delete </a>
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
