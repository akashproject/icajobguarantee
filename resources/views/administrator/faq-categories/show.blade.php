@extends('administrator.layouts.admin')

@section('content')

<div class="col-12">

	@if($faqCategory)

		<div class="card">

			<div class="card-body">

				<h5 class="card-title"> Add New Faq Category</h5>
				<form class="form-horizontal" method="post" action="{{ url('administrator/save-faq-category') }}" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
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
					<div class="row" >
						<div class="col-md-7" >
							<div class="form-group row">
								<label for="name" class="col-sm-3 text-right control-label col-form-label">Name</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="name" id="name" placeholder="Title Here" value="{{ $faqCategory->name}}">
								</div>
							</div>
														
							<div class="form-group row">
								<label for="slug" class="col-sm-3 text-right control-label col-form-label">Slug</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="slug" id="slug" placeholder="Slug Here" value="{{ $faqCategory->slug}}" >
								</div>
							</div>
							<div class="form-group row">
								<label for="excerpt" class="col-sm-3 text-right control-label col-form-label">Excerpt</label>
								<div class="col-sm-9">
									<textarea class="form-control" name="excerpt" id="excerpt" placeholder="Enter Excerpt Here" >{{ $faqCategory->excerpt}}</textarea>
								</div>
							</div>
							<div class="form-group row">
								<label for="description" class="col-sm-3 text-right control-label col-form-label">Description</label>
								<div class="col-sm-9">
									<textarea class="form-control editor" name="description" id="description" placeholder="Enter description Here" >{{ $faqCategory->description}}</textarea>
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
							<h4 class="card-title"> Search Engine Options </h4>
							<div class="form-group row">
								<label for="title" class="col-sm-3 text-right control-label col-form-label">Title</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="title" id="title" placeholder="Title Here" value="{{ $faqCategory->title}}" >
								</div>
							</div>
							<div class="form-group row">
								<label for="meta_description" class="col-sm-3 text-right control-label col-form-label">Meta Description</label>
								<div class="col-sm-9">
									<textarea class="form-control" name="meta_description" id="meta_description" placeholder="Enter Meta Description Here" >{{ $faqCategory->meta_description}}</textarea>
								</div>
							</div>
							<div class="form-group row">
								<label for="schema" class="col-sm-3 text-right control-label col-form-label">Schema Code</label>
								<div class="col-sm-9">
									<textarea class="form-control" name="schema" id="schema" placeholder="Enter Schema Code" >{{ $faqCategory->schema}}</textarea>
								</div>
							</div>
							<div class="form-group row">
								<label for="utm_campaign" class="col-sm-3 text-right control-label col-form-label">Campaign</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="utm_campaign" id="utm_campaign" placeholder="Enter Utm Campaign Here" value="{{ $faqCategory->utm_campaign}}" >
								</div>
							</div>

							<div class="form-group row">
								<label for="utm_source" class="col-sm-3 text-right control-label col-form-label">Source</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="utm_source" id="utm_source" placeholder="Enter Utm Source Here"  value="{{ $faqCategory->utm_source}}">
								</div>
							</div>
							<div class="form-group row">
								<label for="robots" class="col-sm-3 text-right control-label col-form-label">Robots Content</label>
								<div class="col-sm-9">
								<input type="text" class="form-control" name="robots" id="robots" value="{{ $faqCategory->robots}}" placeholder="Enter Center Pincode Here" >
								</div>
							</div>
						</div>
						<div class="col-md-5" >
							<div class="table-responsive">
								<table id="zero_config" class="table table-striped table-bordered">

									<thead>

										<tr>
											<th>Name</th>
											<th>Slug</th>
											<th>Count</th>
										</tr>

									</thead>

									<tbody>

										@foreach ($listCategory as $value)
										<tr>
											<td>{{ $value->name }}
												<div>
													<a href="{{ url('administrator/view-faq-category') }}/{{ $value->id }}" class="">Edit</a> | 
													<a href="{{ url('administrator/delete-faq-category') }}/{{ $value->id }}" class=""; >Delete </a>
												</div>
											</td>													
											<td>{{ $value->slug }}</td>
											<td>
											<a href="{{ url('administrator/view-faq-category') }}/{{ $value->id }}" class="">4</a>
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
							<input type="hidden" name="faq_category_id" id="faq_category_id" value="{{ $faqCategory->id}}" >
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