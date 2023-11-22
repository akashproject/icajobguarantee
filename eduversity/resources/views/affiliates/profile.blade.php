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
                    <div class="dashboard-content">
                        <div class="row" style="justify-content: center;">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-heading text-center">
                                    <h3> Update Profile Information </h3>
                                </div>
                                <div class="register-form-area"> 
                                    <form class="contact_form" action="{{ route('save-affiliate-user') }}" method="POST" enctype="multipart/form-data">
                                        <div class="contact-info">
                                            <input class="name" name="full_name" type="text" value="{{$affiliateUser->name}}" readonly="">
                                        </div>
                                        <div class="contact-info">
                                            <input class="mobile" name="mobile" type="number" value="{{$affiliateUser->mobile}}" readonly="">
                                        </div>
                                        <div class="contact-info">
                                            <input class="email" name="email_address" type="email" value="{{$affiliateUser->email}}" readonly="">
                                        </div>
                                        <div class="contact-info">
                                            <input type="text" class="pan_number" name="pan_number" value="{{$affiliateUser->pan_number}}" readonly="">
                                        </div>
                                        <div class="contact-info">
                                            <label for="cheque"> Upload PAN Card Photo </label>
                                            @if(!$affiliateUser->pan_photo)
                                                <input type="file" class="pan_photo"  id="pan_photo" name="pan_photo" accept="image/png, image/jpeg" {{ ($affiliateUser->pan_photo)?'readonly':'' }}>
                                            @endif
                                            @if($affiliateUser->pan_photo)
                                               <img src="" alt="Pan Image">                    
                                            @endif
                                        </div>
                                        <div class="contact-info">
                                            <input class="aadhar_number" name="aadhar_number" type="text"  value="{{$affiliateUser->aadhar_number}}" placeholder="Enter Adhar Number">
                                        </div>
                                        <div class="contact-info">
                                            <label for="cheque"> Upload Adhar Card Photo </label>
                                            @if(!$affiliateUser->aadhar_photo)
                                                <input type="file" class="adhar"  id="adhar" name="adhar"accept="image/png, image/jpeg" {{ ($affiliateUser->adhar_photo)?'readonly':'' }} >
                                            @endif
                                            @if($affiliateUser->aadhar_photo)
                                                <img src="" alt="Pan Image">  
                                            @endif
                                        </div>
                                        <div class="nws-button text-uppercase text-center white text-capitalize">
                                            <input type="hidden" name="code" value="{{$affiliateUser->code}}">
                                            <button type="submit" class="btn btn-primary btn-block submit_university_lead_generation_form"> Update </button>
                                        </div> 
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-heading text-center">
                                    <h3> Bank Account Information </h3>
                                </div>
                                <div class="register-form-area"> 
                                    <form class="contact_form" action="https://university.icajobguarantee.com" method="POST" enctype="multipart/form-data">
                                        <div class="contact-info">
                                            <input class="account_holder" name="account_holder" value="{{$affiliateUser->account_holder_name}}" type="text" placeholder="Enter Account Holder Name" readonly="">
                                        </div>
                                        <div class="contact-info">
                                            <input class="account" name="account" type="number" value="{{$affiliateUser->account_no}}" placeholder="Enter Bank Account Number" readonly="">
                                        </div>
                                        <div class="contact-info">
                                            <input class="branch" name="branch" type="text" value="{{$affiliateUser->branch}}" placeholder="Enter Branch Name." readonly="">
                                        </div>
                                        <div class="contact-info">
                                            <input class="ifsc" name="ifsc" type="text" value="{{$affiliateUser->branch}}" placeholder="Enter ifsc code" readonly="">
                                        </div>
                                        <div class="contact-info">
                                            <label for="cheque"> Upload Cencel Cheque </label>
                                            <img width="780" height="491" src="https://university.icajobguarantee.com/wp-content/uploads/2023/04/1681990237.jpg" class="my-custom-class" alt="some" decoding="async" srcset="https://university.icajobguarantee.com/wp-content/uploads/2023/04/1681990237.jpg 780w, https://university.icajobguarantee.com/wp-content/uploads/2023/04/1681990237-300x189.jpg 300w, https://university.icajobguarantee.com/wp-content/uploads/2023/04/1681990237-768x483.jpg 768w" sizes="(max-width: 780px) 100vw, 780px">
                                        </div>
                                        
                                        <div class="nws-button text-uppercase text-center white text-capitalize">
                                        <button type="submit" class="btn btn-primary btn-block submit_university_bank_account_details">Submit</button>
                                        <input type="hidden" name="code" value="{{$affiliateUser->code}}">
                                        </div> 
                                    </form>
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