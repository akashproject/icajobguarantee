@extends('administrator.layouts.admin')

@section('content')

<div class="col-12">

	@if($enquiry)

		<div class="card">

			<div class="card-body">

				<h5 class="card-title"> Datatable</h5>

				<div class="table-responsive">

					<table id="zero_config" class="table table-striped table-bordered">

						<thead>
							<tr>
								<th>Name</th>
								<th>Mobile</th>
								<th>Options</th>
							</tr>
						</thead>

						<tbody>

							@foreach ($enquiry as $value)
							<tr>
								<td>{{ $value->name }}</td>													
								<td>{{ $value->mobile }}</td>													
								<td>
									<a href="javascript:void();" class="btn btn-success btn-lg">Reffer</a>
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

