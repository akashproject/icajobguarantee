@extends('administrator.layouts.admin')

@section('content')

<div class="col-12">
	@if($status == 1)
		@if($affiliateUsers)
			<div class="card">
				<div class="card-body">
					<h5 class="card-title"> User <a href="{{ url('administrator/add-affiliate-user') }}" class="btn btn-primary">Add New User</a></h5> 
					<div class="table-responsive">
						<table id="zero_config" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th>Name</th>
									<th>Mobile</th>
									<th>Code</th>
									<th>Options</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($affiliateUsers as $value)
								<tr>
									<td>{{ $value->name }}</td>													
									<td>{{ $value->mobile }}</td>													
									<td>{{ $value->code }}</td>													
									<td>
										<div style="display: inline-block;">
											<select name="status" id="status" class="select2 form-control change-status" style="width: 100%; height:38px;" onChange="changeUserStatus(this,{{$value->id}});">
												<option value="1" {{ ( '1' ==  $value->status )? 'selected' : '' }} > Enable</option>
												<option value="0" {{ ( '0' ==  $value->status )? 'selected' : '' }} > Disable</option>
											<select>
										</div>
										<a href="{{ url('administrator/view-affiliate-user') }}/{{ $value->id }}" class="btn btn-primary btn-lg">Edit</a>
										<a href="{{ url('administrator/delete-affiliate-user') }}/{{ $value->id }}" class="btn btn-danger btn-lg" onclick="return confirm('Are you sure?')"; >Delete </a>
									</td>
								</tr>
								@endforeach							
							</tbody>
						</table>
					</div>
				</div>
			</div>
		@endif
	@else
	<div class="card">
		<div class="card-body text-center">
			<h4 class="card-title"> This features is Currently Locked </h4> 
		</div>
	</div>
	@endif
</div>   
@endsection
@section('script')

<!-- ============================================================== -->

<!-- CHARTS -->

@endsection

