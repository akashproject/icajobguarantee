@extends('administrator.layouts.admin')

@section('content')

<div class="col-12">

	@if($courseType)

		<div class="card">

			<div class="card-body">

				<h5 class="card-title"> Add New Course Type</h5>
				<form class="form-horizontal" method="post" action="{{ url('administrator/save-course-type') }}" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
					<h4 class="card-title"> Add Course </h4>
					@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>

						</div>

					@endif
				<div class="row" >
					<div class="col-md-5" >
						<div class="form-group row">
							<label for="title" class="col-sm-3 text-right control-label col-form-label">Title</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="title" id="title" placeholder="Title Here" >
							</div>
						</div>
						<div class="form-group row">
							<label for="slug" class="col-sm-3 text-right control-label col-form-label">Slug</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="slug" id="slug" placeholder="Slug Here" >
							</div>
						</div>
						<div class="form-group row">
							<label for="state" class="col-sm-3 text-right control-label col-form-label">Status</label>
							<div class="col-sm-9">
								<select name="status" id="status" class="select2 form-control custom-select" style="width: 100%; height:36px;">	
									<option value="">Update Status</option>
									<option value="1" > Publish</option>
									<option value="0" > Private </option>
								<select>
							</div>
						</div>
					</div>
					<div class="col-md-7" >
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

									@foreach ($courseType as $value)
									<tr>
										<td>{{ $value->title }}</td>													
										<td>{{ $value->slug }}</td>
										<td>
											<a href="{{ url('administrator/view-course-type') }}/{{ $value->id }}" class="btn btn-primary btn-lg">Edit</a>
											<a href="{{ url('administrator/delete-course-type') }}/{{ $value->id }}" class="btn btn-danger btn-lg" onclick="return confirm('Are you sure?')"; >Delete </a>
										</td>
									</tr>
									@endforeach							

								</tbody>

							</table>
						</div>
					</div>
				</div>
				<div class="border-top">

				<div class="card-body">

					<button type="submit" class="btn btn-primary">Submit</button>
					<input type="hidden" name="course_id" id="course_id" value="" >
				</div>

				</div>

				</form>
				

			</div>

		</div>

	@endif

</div>                   

@endsection

@section('script')

<!-- ============================================================== -->

<!-- CHARTS -->

@endsection

