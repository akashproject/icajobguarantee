@extends('administrator.layouts.admin')



@section('content')

<div class="col-12">

	@if($events)

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
							@foreach ($events as $value)
							<tr>
								<td>{{ $value->name }}</td>													
								<td>{{ $value->slug }}</td>													
								<td>

									<a href="{{ url('event') }}/{{ $value->slug }}" class="btn btn-success btn-lg">View</a>
									<a href="{{ url('administrator/view-event') }}/{{ $value->id }}" class="btn btn-primary btn-lg">Edit</a>
									<a href="{{ url('administrator/delete-event') }}/{{ $value->id }}" class="btn btn-danger btn-lg" onclick="return confirm('Are you sure?')"; >Delete </a>
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

