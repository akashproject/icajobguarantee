@extends('administrator.layouts.admin')
@section('content')
<div class="col-12">
	@if($universities)
		<div class="card">
			<div class="card-body">
				<h5 class="card-title"> Datatable</h5>
				<div class="table-responsive">
					<table id="zero_config" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Name</th>
								<th>Slug</th>
								<th>Options</th>
							</tr>
						</thead>

						<tbody>
							@foreach ($universities as $value)
							<tr>
								<td>{{ $value->name }}</td>													
								<td>{{ $value->slug }}</td>													
								<td>
									<a href="{{ url('universities') }}/{{ $value->slug }}" class="btn btn-success btn-sm">View</a>
									<a href="{{ url('administrator/university-courses') }}/{{ $value->id }}" class="btn btn-success btn-sm">Courses</a>
									<a href="{{ url('administrator/view-university') }}/{{ $value->id }}" class="btn btn-primary btn-sm">Edit</a>
									@if($user->role == 'master')
									<a href="{{ url('administrator/delete-university') }}/{{ $value->id }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"; >Delete </a>
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

