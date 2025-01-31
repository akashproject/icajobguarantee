@extends('administrator.layouts.admin')
@section('content')
<div class="col-12">
	<div class="card">
        <div class="card-body">
            <h4 class="card-title"> Generated QR Code </h4>
            <div class="row">
                <div class="col-md-12 text-center" >
                    <img src="{{$qrPath}}" >
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
@endsection