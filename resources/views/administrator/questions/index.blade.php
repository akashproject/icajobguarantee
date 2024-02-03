@extends('administrator.layouts.admin')
@section('content')

<div class="col-12">

	@if($questions)

		<div class="card">
			<div class="card-body">
				<h5 class="card-title"> Datatable</h5>
				<div class="table-responsive">
					<table id="zero_config" class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Name</th>
								<th>Score</th>
								<th>Options</th>
							</tr>
						</thead>

						<tbody>
							@foreach ($questions as $value)
							<tr>
								<td>{{ $value->question }}</td>													
								<td>{{ $value->score }}</td>													
								<td>
									<a href="{{ url('administrator/view-question') }}/{{ $value->id }}" class="btn btn-primary btn-lg">Edit</a>
									<a href="{{ url('administrator/delete-question') }}/{{ $value->id }}" class="btn btn-danger btn-lg" onclick="return confirm('Are you sure?')"; >Delete </a>
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

