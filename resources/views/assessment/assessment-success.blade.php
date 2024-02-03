@extends('layouts.ad-main')
    @section('content')
    <aside class="left-sidebar" data-sidebarbg="skin5">
        @include('common.menu')
    </aside>
    <section class="page-wrapper" >
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-md-2">

                </div>
                <div id="secondary" class="col-xl-9 col-lg-8 col-md-12 col-sm-12">
                    <div class="text-center">
                        <div class="thank-you-img-wrap">
                            <img src="{{ url('assets/images/essay.png') }}" >
                        </div>
                    </div>
                    <div class="text-center" style="margin-top: 14px;">
                        <h3 style="margin-bottom:0"> Thank You ! </h3>
                        <h6> You have successfully complete your assessment </h6>
                    </div>
                    <div class="assessment_success" >
                        <p> In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available </p>
                    </div>
                    <div class="assessment_contact text-center" >
                        <span> <i class="fal fa-phone"></i> Call Now : <a href="tel:+919330904622" >+91-9330-904-622 </a> </span> | <span> <i class=" fab fa-whatsapp"></i> Chat With Us : <a href="https://api.whatsapp.com/send?phone=8450006000" > 8450006000 </a> </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection