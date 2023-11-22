@extends('layouts.main')
    @section('content')
    <style>

        .dashboard-content {
            margin-top: 20px;
            color: #1a1a1a;
        }
        ul.sidebar-menu {
            padding: 0;
        }
        ul.sidebar-menu li {
            list-style: none;
            padding: 10px;
            margin: 2px 0;
            color: #fff;
            background: #6f69a6;
        }

        .dashboard-content ul.product-tab li.active {
            color: #393185;
            background: #fff;
        }

        .contact-info {
            margin-bottom: 10px;
            border-bottom: 1px solid #ccc;
        }

        .register-form-area input {
            height: 42px;
            width: 100%;
            background-color: #f1f1f1;
            padding: 0 15px;
            border-radius: 4px;
            margin-bottom: 5px;
            border: none;
        }
        .collapsible {
        background-color: #777;
        color: white;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 15px;
        }
        label {
            font-size: 12px;
            font-weight: 600;
            color: #4439ad;
        }
        .active, .collapsible:hover {
        background-color: #555;
        }

        .content {
        padding: 0 18px;
        display: none;
        overflow: hidden;
        background-color: #f1f1f1;
        }

        .counter_box {
            box-shadow: 0px 1px 30px 1px #ecf2ff;
            display: flex;
            align-items: center;
            background-color: #ededed;
            padding: 8px;
            width: 100%;
            margin-bottom: 30px;
            justify-content: center;
            border-radius: 10px;
        }
        .counter {
            font-weight: 600;
            font-size: 40px;
            color: #666;
        }
        .counter_box .icon {
            width: auto;
            margin-right: 25px;
        }
        .counter_box .text p {
            font-weight: 600;
            color: #979797;
        }
        .university-tab li.tabitem {
            padding: 20px;
            border: 1px solid #6f69a6;
            border-radius: 10px 10px 0px 0;
            background: #fff;
            cursor: pointer;
        }
        .university-tab li.tabitem.active {
            border-bottom: 0;
            background: #948ec9;
            color: #FFF;
        }
        .tab-content-1 {
            padding: 15px;
            text-align: center;
            border: 1px solid #948ec9;
            margin-top: -1px;
        }
        a.btn-outline {
            color: #352c87;
        }
        .register-form-area button {
            background-color: #0069d9;
        }
        img.my-custom-class {
            border: 1px solid #ccc;
            padding: 3px;
        }
        .share-wrap {
            display: inline-flex;
            clear: both;
            margin: 5px 0;
            width: 100%;
        }
        label.error {
            color: red;
        }
    </style>
    <section class="university-inner-page-banner" style="padding-top: 100px;">   
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <ul class="sidebar-menu">
                        <li> <a href="/referral-portal"> Dashboard </a> </li>
                        <li> <a href="/user/affliate-profile">Profile</a> </li>
                        <li> <a href="/user/referral-links">Password</a> </li>
                        <li> <a href="/user/referral-links">Referral Links</a> </li>
                        <li> <a href="javascript:void(0)">Term &amp; Conditions</a> </li>
                        <li> <a href="/user/referral-support">Support</a> </li>
                        <li> <a href="javascript:void(0)" class="logout">Logout </a> </li>
                    </ul>
                </div>
                <div class="col-md-9">  
                    <div class="faq-tab dashboard-content">
                        <div class="row"> 
                            <div class="col-md-3">
                                <div class="dashboard-grid"> 
                                    <div class="counter_box" style="margin-right: 20px;">
                                        <div class="icon">
                                            <img src="{{ url('assets/images/trophy.png') }}" alt="icon" class="image-fit">
                                        </div>
                                        <div class="text">
                                            <div class="counter">
                                                <span>0</span>
                                            </div>
                                            <p class="mb-0">Clicks</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dashboard-grid"> 
                                    <div class="counter_box" style="margin-right: 20px;">
                                        <div class="icon">
                                            <img src="{{ url('assets/images/trophy.png') }}" alt="icon" class="image-fit">
                                        </div>
                                        <div class="text">
                                            <div class="counter">
                                                <span><a href="/referral-portal?tab=lead-history">0</a></span>
                                            </div>
                                            <p class="mb-0">Leads</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dashboard-grid"> 
                                    <div class="counter_box" style="margin-right: 20px;">
                                        <div class="icon">
                                            <img src="{{ url('assets/images/trophy.png') }}" alt="icon" class="image-fit">
                                        </div>
                                        <div class="text">
                                            <div class="counter">
                                                <span>00</span>
                                            </div>
                                            <p class="mb-0">Coming Soon</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="dashboard-grid"> 
                                    <div class="counter_box" style="margin-right: 20px;">
                                        <div class="icon">
                                            <img src="{{ url('assets/images/trophy.png') }}" alt="icon" class="image-fit">
                                        </div>
                                        <div class="text">
                                            <div class="counter">
                                                <span>00</span>
                                            </div>
                                            <p class="mb-0">Coming Soon</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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