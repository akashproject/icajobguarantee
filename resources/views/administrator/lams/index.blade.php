@extends('administrator.layouts.admin')
@section('content')

<div class="col-12">
	@if($lams)
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
							@foreach ($lams as $value)
							<tr>
								<td>{{ $value->name }}</td>													
								<td>{{ $value->slug }}</td>													
								<td>
									<a href="{{ route('lam-page',$value->slug) }}" target="_blank" class="btn btn-success btn-lg">View</a>
									<a href="{{ route('admin-lam-view-page',$value->id) }}" class="btn btn-primary btn-lg">Edit</a>
									@if($user->role == 'master')
									<a href="{{ route('admin-delete-lam-page',$value->id) }}" class="btn btn-danger btn-lg" onclick="return confirm('Are you sure?')"; >Delete </a>
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

