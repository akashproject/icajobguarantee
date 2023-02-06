@extends('administrator.layouts.admin')
@section('content')
<div class="card add-media" >
    <div class="card-body" >
        <h4 class="card-title"> Upload Media </h4>
        <form method="post" action="{{url('administrator/upload')}}" enctype="multipart/form-data" class="dropzone" id="dropzone">
            @csrf
        </form>
    </div>
</div>

<div class="col-12">
	<div class="card">
        <div class="card-body">
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
                <div class="col-md-2" >
                </div>
                <div class="col-md-4">
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
                    <a href="#imageBox" class="image-thumbnail open-popup-link">
                        <img src="{{ getSizedImage('thumb',$value->id) }}" alt="{{$value->alternative}}" style="width:100%">
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div id="imageBox" class="white-popup mfp-hide">
    <h5 class="text-center">GET IN TOUCH</h2>
</div>
@endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection