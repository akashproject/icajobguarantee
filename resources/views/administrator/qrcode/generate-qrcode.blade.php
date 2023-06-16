@extends('administrator.layouts.admin')
@section('content')
<div class="col-12">
	<div class="card">
        <div class="card-body">
            <h4 class="card-title"> Generated QR Code </h4>
            <div class="row">
                <div class="col-md-12 text-center" >
                <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->merge('/assets/images/fab.png')->size(256)->margin(1)->generate($qr_content)) !!} ">
                </div>
            </div>
        </div>
    </div>
</div>

   
@endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection
