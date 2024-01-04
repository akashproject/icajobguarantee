@extends('administrator.layouts.admin')



@section('content')

<div class="col-12">

	@if($centerCourses)

		<div class="card">

			<div class="card-body">

				<h5 class="card-title"> <a href="{{ route('admin-add-center-course',$id) }}" class="btn btn-success">Add Course of center</a> </h5>

				<div class="table-responsive">
					<table id="zero_config" class="table table-striped table-bordered">

						<thead>
							<tr>
								<th>Name</th>
								<th>Options</th>
							</tr>
						</thead>

						<tbody>
							@foreach ($centerCourses as $value)
							<tr>
								<td>{{ $value->name }}</td>													
								<td>
									<a href="javascript:void(0)" class="btn btn-success btn-lg">View</a>
									<a href="{{ route('admin-view-center-course',$value->id) }}" class="btn btn-primary btn-lg">Edit</a>
									@if($user->role == 'master')
									<a href="{{ url('administrator/delete-centerCourse') }}/{{ $value->id }}" class="btn btn-danger btn-lg" onclick="return confirm('Are you sure?')"; >Delete </a>
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

