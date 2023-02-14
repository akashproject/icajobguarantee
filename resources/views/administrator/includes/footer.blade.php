
<div id="imageBox" class="white-popup mfp-hide">
    <div class="card">
        <div class="card-body">
			<div class="row" >
				<div class="col-md-9" >
					<div class="row filter-container" >
						<div class="col-md-6" >
							<div class="form-group row">
								<div class="col-sm-6">
									<select name="extension" id="extension" class="select2 form-control custom-select" style="width: 100%; height:36px;">	
										<option value="1"> Images </option>
										<option value="3"> Videos </option>
										<option value="4" > Audios </option>
										<option value="7"> Documents </option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group row">
								<label for="name" class="col-sm-3 text-right control-label col-form-label">Search </label>
								<div class="col-sm-9">
									<input type="text" class="form-control" name="search" id="searchMedia" placeholder="Search" >
								</div>
							</div>
						</div>
					</div>
					<div class="row image-thumbnail-container">
						@foreach ($media as $value)        
							
							<a href="#imageBox" class="image-thumbnail open-popup-link" data-id="{{$value->id}}">
								<img src="{{ getSizedImage('thumb',$value->id) }}" alt="{{$value->alternative}}" style="width:100%">
							</a>
						@endforeach
					</div>
				</div>
				<div class="col-md-3" >
					<div class="view-media-container" >
						<h5> Expand Details </h5>
						<form class="form-horizontal" method="post" action="{{ url('administrator/save-media-detail') }}" enctype="multipart/form-data"> @csrf
							<div class="row">
								<div class="col-md-12" >
									<div class="form-group row">
										<label for="alternative" class="col-sm-12 text-left control-label col-form-label">Title</label>
										<div class="col-sm-12">
											<input type="text" class="form-control" name="title" id="title" placeholder="Title Here" >
										</div>
									</div>
									<div class="form-group row">
										<label for="alternative" class="col-sm-12 text-left control-label col-form-label">Alt Text</label>
										<div class="col-sm-12">
											<textarea class="form-control" name="alternative" id="alternative" placeholder="Enter Alt Text" ></textarea>
										</div>
									</div>
									<div class="form-group row">
										<label for="description" class="col-sm-12 text-left control-label col-form-label">Description</label>
										<div class="col-sm-12">
											<textarea class="form-control" name="description" id="description" placeholder="Enter Description" ></textarea>
										</div>
									</div>
									<div class="form-group row">
										<label for="utm_campaign" class="col-sm-12 text-left control-label col-form-label">File Url</label>
										<div class="col-sm-12">
											<input type="text" class="form-control" name="" id="" placeholder="" readonly>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
            </div>
			<div class="row">
				<div class="col-md-12 text-right">
                    <div class="form-group">
						<button type="button" class="btn btn-primary" onclick="setMedia()"> Upload Media </button>
                    </div>
                </div>
        	</div>
        </div>
    </div>
</div>
<footer class="footer text-center">
	<strong>Copyright &copy; {{ date('Y') }}
        <a href="{{ env('APP_URL') }}" target="_blank">ICAjobgurentee </a></strong>
	All Rights Reserved by <a href="https://scriptcrown.com">ICAjobgurentee</a>.
</footer>