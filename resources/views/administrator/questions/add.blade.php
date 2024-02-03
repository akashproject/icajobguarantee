@extends('administrator.layouts.admin')
@section('content')
<div class="col-12">
	<div class="card">
		<form class="form-horizontal" method="post" action="{{ url('administrator/save-question') }}" enctype="multipart/form-data">
			@csrf
			<div class="card-body">
				<h4 class="card-title"> Add Question </h4>
				@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>

					</div>

				@endif
				@if(session()->has('message'))
					<div class="alert alert-success">
						{{ session()->get('message') }}
					</div>
				@endif
				<div class="row">
					<div class="col-md-9" >
						<div class="form-group row">
							<label for="assessment_id" class="col-sm-3 text-right control-label col-form-label">Assessment</label>
							<div class="col-sm-9">
								<select name="assessment_id" id="assessment_id" class="select2 form-control custom-select" style="width: 100%; height:36px;">	
									@foreach ($assessments as $value)
									<option value="{{ $value->id }}" > {{ $value->name }} </option>
									@endforeach
								<select>
							</div>
						</div>
						<div class="form-group row">
							<label for="question" class="col-sm-3 text-right control-label col-form-label">Question</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="question" id="question" placeholder="Enter Name Here" >
							</div>
						</div>
						<div class="form-group row">
							<label for="description" class="col-sm-3 text-right control-label col-form-label">Description</label>
							<div class="col-sm-9">
								<textarea class="form-control editor" name="description"  id="mceEditor" placeholder="Enter description Here" ></textarea>
							</div>
						</div>
						<div class="form-group row">
							<label for="score" class="col-sm-3 text-right control-label col-form-label">Score</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="score" id="score" placeholder="Enter Score Here" >
							</div>
						</div>
						<div class="form-group row">
							<label for="question" class="col-sm-3 text-right control-label col-form-label">Answers</label>
							<div class="col-sm-9">
								@for ($i = 1; $i <= 4; $i++)									
									<div>
										<input type="text" class="form-control" name="answer[{{$i}}][answer]" id="answer_{{ $i }}" value="" placeholder="Enter Answer Here" style="width: 80%;display: inline;margin-right: 5px;">
										<input type="checkbox" name="answer[{{$i}}][is_true]" value="1" /> Is True
									</div>
									<br>
								@endfor
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
				
				</div>
			</div>

			<div class="border-top">

				<div class="card-body">

					<button type="submit" class="btn btn-primary">Submit</button>
					<input type="hidden" name="question_id" id="question_id" value="" >
				</div>

			</div>

		</form>

	</div>
</div>              
@endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection

