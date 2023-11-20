@extends('administrator.layouts.admin')



@section('content')

<div class="col-12">
	@if($buckets)

		<div class="card">

			<div class="card-body">

				<h5 class="card-title"> Buckets <a href="{{ route('admin-add-bucket') }}" class="btn btn-success"> Create Bucket </a></h5>

				<div class="table-responsive">

					<table id="zero_config" class="table table-striped table-bordered">

						<thead>
							<tr>
								<th>Name</th>
								<th>Options</th>
							</tr>
						</thead>

						<tbody>
							@foreach ($buckets as $value)
							<tr>
								<td>{{ $value->name }}</td>													
								<td>
									<a href="{{ url('administrator/view-bucket') }}/{{ $value->id }}" class="btn btn-primary btn-lg">Edit</a>
									<a href="{{ url('administrator/delete-bucket') }}/{{ $value->id }}" class="btn btn-danger btn-lg" onclick="return confirm('Are you sure?')"; >Delete </a>
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

