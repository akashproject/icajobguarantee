@extends('administrator.layouts.admin')
@section('content')

<div class="col-12">
	@if($users)
		<div class="card">
			<div class="card-body">
				<h5 class="card-title"> Datatable</h5>
				<div class="table-responsive">
					<table id="zero_config" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Name</th>
								<th>Email</th>
								<th>Mobile</th>
								<th>Options</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($users as $value)
							<tr>
								<td>{{ $value->name }}</td>													
								<td>{{ $value->email }}</td>													
								<td>{{ $value->mobile }}</td>													
								<td>
									<a href="#" class="btn btn-success btn-lg">View</a>
									<a href="{{ url('administrator/view-page') }}/{{ $value->id }}" class="btn btn-primary btn-lg">Edit</a>
									@if($user->role == 'master')
									<a href="{{ url('administrator/delete-page') }}/{{ $value->id }}" class="btn btn-danger btn-lg" onclick="return confirm('Are you sure?')"; >Delete </a>
									@endif
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

