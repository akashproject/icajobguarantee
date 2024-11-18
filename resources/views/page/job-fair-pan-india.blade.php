@extends('layouts.ad-main')
    @section('content')
    <style>
        .vertical-center {
            width: 100%;
            padding: 20px;
            border: solid 5px #ccc;
            margin: 50px 0;
        }
        .vertical-center h3{
            font-size: 3pc;
            color: #3f407a;
        }
        .vertical-center h1{
            font-size: 10pc;
            color: #3f407a;
            font-weight: 600;
        }
        .vertical-center h4{
            color: #333;
        }
        @media screen and (max-width: 767px) { 
            .vertical-center h3{
                font-size: 20px;color: #3f407a;
            }
            .vertical-center h1{
                font-size: 48px;color: #3f407a;
            }
            .vertical-center h4{
                font-size: 15px;
                color: #333;
            }
        }
    </style>
    <section class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="height: 100vh;">
                    <div class="vertical-center">
                        <h3 > ICA Edu Skills & Mumbai University Mega Job Fair </h3>
                        <h1 > Coming Soon... </h1>
                        <h4> Mark your calendar and return here on <strong>November 15th</strong> — We'll be live that day! </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
@section('script')
@endsection