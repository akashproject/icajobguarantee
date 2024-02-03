@extends('administrator.layouts.admin')



@section('content')

<div class="col-12">

	@if($assessments)

		<div class="card">

			<div class="card-body">

				<h5 class="card-title"> Datatable</h5>

				<div class="table-responsive">

					<table id="zero_config" class="table table-striped table-bordered">

						<thead>
							<tr>
								<th>Name</th>
								<th>Total Marks</th>
								<th>Duration</th>
								<th>Options</th>
							</tr>
						</thead>

						<tbody>

							@foreach ($assessments as $value)
							<tr>
								<td>{{ $value->name }}</td>													
								<td>{{ $value->total_mark }}</td>													
								<td>{{ $value->duration }} Minutes </td>													
								<td>
									<a href="{{ url('administrator/question') }}/{{ $value->id }}" class="btn btn-primary btn-lg">Quesions</a>
									<a href="{{ url('administrator/view-assessment') }}/{{ $value->id }}" class="btn btn-primary btn-lg">Edit</a>
									<a href="{{ url('administrator/delete-assessment') }}/{{ $value->id }}" class="btn btn-danger btn-lg" onclick="return confirm('Are you sure?')"; >Delete </a>
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

