@extends('administrator.layouts.admin')
@section('content')

<div class="col-12">
	@if($pages)
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
							@foreach ($pages as $value)
							<tr>
								<td>{{ $value->name }}</td>													
								<td>{{ $value->slug }}</td>													
								<td>
									<a href="{{ url($value->slug) }}" class="btn btn-success btn-small">View</a>
									<a href="{{ url('administrator/view-page') }}/{{ $value->id }}" class="btn btn-primary btn-small">Edit</a>
									<form method="post" action="{{ route('admin-duplicator') }}" style="display: inline;">
										@csrf
										<input type="hidden" name="id" value="{{ $value->id }}" >
										<input type="hidden" name="model" value="pages" >
										<button type="submit" class="btn btn-primary  btn-small">Duplicate</button>
									</form>
									@if($user->role == 'master')
									<a href="{{ url('administrator/delete-page') }}/{{ $value->id }}" class="btn btn-danger btn-small" onclick="return confirm('Are you sure?')"; >Delete </a>
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

