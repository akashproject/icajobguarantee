@extends('layouts.ad-main')
    @section('content')
    <aside class="left-sidebar" data-sidebarbg="skin5">
        @include('common.menu')
    </aside>
    <section class="page-wrapper" >
        <div class="header_portal">
            <div class="row">
                <h3 class="portal_heading" > <i class="fal fa-book"></i> Assessment Results </h3>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                @foreach ($reports as $key => $value)
                    <div class="col-lg-6">
                        <div class="service_block shadow_1">
                            <div class="text">
                                <h5 class="title"><a href="#">{{$key + 1}}. {{ $value->name }}</a></h5>
                                <div class="result_content">
                                    <p class="mb-0">{{ $value->description }}</p>
                                    <p class="mb-0">
                                        Total Mark : <strong> {{ $value->total_mark }} </strong>
                                    </p>
                                    <p class="mb-0">
                                        Assessment Duration : <strong> {{ $value->duration }} Minutes</strong>
                                    </p>
                                    <div class="mt-4" >
                                    <a href="{{ url('view-result') }}/{{ $value->report_id }}" class="thm-btn bg-thm-color-two thm-color-two-shadow btn-rectangle"> Check Result </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach   
            </div>
        </div>
    </section>
    @endsection
@section('script')
<!-- ============================================================== -->
<!-- CHARTS -->
@endsection