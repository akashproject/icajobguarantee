@extends('administrator.layouts.admin')



@section('content')

<div class="col-12">
	@if($centers)
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
							@foreach ($centers as $value)
							<tr>
								<td>{{ $value->name }}</td>													
								<td>{{ $value->slug }}</td>													
								<td>

									<a href="{{ url('centers') }}/{{ $value->slug }}" class="btn btn-success">View</a>
									<a href="{{ url('administrator/view-center') }}/{{ $value->id }}" class="btn btn-primary">Edit</a>
									<!-- <a href="{{ route('center-courses',$value->id) }}" class="btn btn-primary">Courses</a> -->
									<form method="post" action="{{ route('admin-duplicator') }}" style="display: inline;">
										@csrf
										<input type="hidden" name="id" value="{{ $value->id }}" >
										<input type="hidden" name="model" value="centers" >
										<button type="submit" class="btn btn-primary  btn-small">Duplicate</button>
									</form>
									@if($value->status == '1')
										<a href="{{ route('admin-generate-pink-form',$value->code) }}" class="btn btn-primary">Pink Form</a>
									@endif
									@if($user->role == 'master')
									<a href="{{ url('administrator/delete-center') }}/{{ $value->id }}" class="btn btn-danger" onclick="return confirm('Are you sure?')"; >Delete </a>
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

