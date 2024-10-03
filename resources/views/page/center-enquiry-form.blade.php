<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>{{ isset($contentMain->title)?$contentMain->title:'Accounts | Finance | Taxation | Courses | Training Institute' }}</title>
        <meta name="description" content="{{ isset($contentMain->meta_description)?$contentMain->meta_description:'' }}" />
        <link rel="canonical" href="{{url()->current()}}"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="title" content="{{ isset($contentMain->title)?$contentMain->title:'' }}">
        <meta name="robots" content="{{ isset($contentMain->robots)?$contentMain->robots:'' }}" />
        <meta property="og:site_name" content="ICA Edu Skills" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="{{ isset($contentMain->title)?$contentMain->title:'' }}" />
        <meta property="og:description" content="{{ isset($contentMain->meta_description)?$contentMain->meta_description:'' }}" />
        <meta property="og:url" content="https://www.icajobguarantee.com/" />
        <meta property="og:image" content="https://www.facebook.com/ICAJobguarantee" />
        <meta property="og:image:secure_url" content="https://www.facebook.com/ICAJobguarantee" />
        <meta property="og:video" content="https://www.youtube.com/channel/UC6WWqdZzUMAsZqTQHRyEj_A" />
        <meta property="og:video:secure_url" content="https://www.youtube.com/channel/UC6WWqdZzUMAsZqTQHRyEj_A" />
        <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}">
        <link href="{{ url('assets/css/fontawesome-all.css') }}" rel="stylesheet">
        <link href="{{ url('assets/css/flaticon.css') }}" rel="stylesheet">
        <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ url('assets/css/ads.css') }}" rel="stylesheet">
        <link href="{{ url('assets/css/responsive.css') }}" rel="stylesheet">
        <link href="{{ url('assets/css/colors/color-7.css') }}" rel="alternate stylesheet" type="text/css" title="color-7">
        <link href="{{ url('assets/css/center-enquiry.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body class="{{ isset($contentMain->template)?$contentMain->template:'default-template' }}">
        <section class="wizard-section">
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="form-wizard">
                        <form action="" method="post" role="form">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-wizard-header">
                                        <p>Fill all form field to go next step</p>
                                        <ul class="list-unstyled form-wizard-steps clearfix">
                                            <li class="active"><span>Personal Details</span></li>
                                            <li><span>Qualification</span></li>
                                            <li><span>Work Experience</span></li>
                                            <li><span>ICA Details</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="welcome_message_wrap wizard-fieldset show">
                                        <div class="welcome_message text-center">
                                            <h2> Let Talk About Your Personal Infomation</h2>
                                        </div>
                                        <div class="nws-button text-center white text-capitalize form-wizard-next-btn">
                                            <button class="init_screen" type="button">
                                                Lets Chat <i class="fas fa-arrow-right"> </i> 
                                            </button> 
                                            <img src="https://www.icacourse.in/wp-content/themes/scriptcrown/images/loader.gif" style="width: 42px; display:none;" class="checkout_loader">
                                        </div>   
                                    </div>
                                    <fieldset class="wizard-fieldset">
                                        <h5>Personal Information</h5>
                                        <div class="form-group">
                                        <input type="text" class="form-control wizard-required" id="fname">
                                        <label for="fname" class="wizard-form-text-label">First Name*</label>
                                        <div class="wizard-form-error"></div>
                                        </div>
                                        <div class="form-group">
                                        <input type="text" class="form-control wizard-required" id="lname">
                                        <label for="lname" class="wizard-form-text-label">Last Name*</label>
                                        <div class="wizard-form-error"></div>
                                        </div>
                                        <div class="form-group">
                                        Gender
                                        <div class="wizard-form-radio">
                                            <input name="radio-name" id="radio1" type="radio">
                                            <label for="radio1">Male</label>
                                        </div>
                                        <div class="wizard-form-radio">
                                            <input name="radio-name" id="radio2" type="radio">
                                            <label for="radio2">Female</label>
                                        </div>
                                        </div>
                                        <div class="form-group">
                                        <input type="text" class="form-control wizard-required" id="zcode">
                                        <label for="zcode" class="wizard-form-text-label">Zip Code*</label>
                                        <div class="wizard-form-error"></div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                                        </div>
                                    </fieldset>
                                    <div class="welcome_message_wrap wizard-fieldset">
                                        <div class="welcome_message text-center">
                                            <h2> Let Talk About Your Qualification</h2>
                                        </div>
                                        <div class="nws-button text-center white text-capitalize form-wizard-next-btn">
                                            <button class="init_screen" type="button">
                                                Lets Chat <i class="fas fa-arrow-right"> </i> 
                                            </button> 
                                            <img src="https://www.icacourse.in/wp-content/themes/scriptcrown/images/loader.gif" style="width: 42px; display:none;" class="checkout_loader">
                                        </div>   
                                    </div>
                                    <fieldset class="wizard-fieldset">
                                        <h5>Account Information</h5>
                                        <div class="form-group">
                                        <input type="email" class="form-control wizard-required" id="email">
                                        <label for="email" class="wizard-form-text-label">Email*</label>
                                        <div class="wizard-form-error"></div>
                                        </div>
                                        <div class="form-group">
                                        <input type="text" class="form-control wizard-required" id="username">
                                        <label for="username" class="wizard-form-text-label">User Name*</label>
                                        <div class="wizard-form-error"></div>
                                        </div>
                                        <div class="form-group">
                                        <input type="password" class="form-control wizard-required" id="pwd">
                                        <label for="pwd" class="wizard-form-text-label">Password*</label>
                                        <div class="wizard-form-error"></div>
                                        <span class="wizard-password-eye"><i class="far fa-eye"></i></span>
                                        </div>
                                        <div class="form-group">
                                        <input type="password" class="form-control wizard-required" id="cpwd">
                                        <label for="cpwd" class="wizard-form-text-label">Confirm Password*</label>
                                        <div class="wizard-form-error"></div>
                                        </div>
                                        <div class="form-group clearfix">
                                        <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                                        <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                                        </div>
                                    </fieldset>
                                    <div class="welcome_message_wrap wizard-fieldset">
                                        <div class="welcome_message text-center">
                                            <h2> Do you have work Experience? </h2>
                                        </div>
                                        <div class="nws-button text-center white text-capitalize form-wizard-next-btn">
                                            <button class="init_screen" type="button">
                                                Lets Discuss <i class="fas fa-arrow-right"> </i> 
                                            </button> 
                                            <img src="https://www.icacourse.in/wp-content/themes/scriptcrown/images/loader.gif" style="width: 42px; display:none;" class="checkout_loader">
                                        </div>   
                                    </div>
                                    <fieldset class="wizard-fieldset">
                                        <h5>Bank Information</h5>
                                        <div class="form-group">
                                            <input type="text" class="form-control wizard-required" id="bname">
                                            <label for="bname" class="wizard-form-text-label">Bank Name*</label>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                        <div class="form-group">
                                        <input type="text" class="form-control wizard-required" id="brname">
                                        <label for="brname" class="wizard-form-text-label">Branch Name*</label>
                                        <div class="wizard-form-error"></div>
                                        </div>
                                        <div class="form-group">
                                        <input type="text" class="form-control wizard-required" id="acname">
                                        <label for="acname" class="wizard-form-text-label">Account Name*</label>
                                        <div class="wizard-form-error"></div>
                                        </div>
                                        <div class="form-group">
                                        <input type="text" class="form-control wizard-required" id="acon">
                                        <label for="acon" class="wizard-form-text-label">Account Number*</label>
                                        <div class="wizard-form-error"></div>
                                        </div>
                                        <div class="form-group clearfix">
                                        <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                                        <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                                        </div>
                                    </fieldset>
                                    <div class="welcome_message_wrap wizard-fieldset">
                                        <div class="welcome_message text-center">
                                            <h2> From where you know about ICA? </h2>
                                        </div>
                                        <div class="nws-button text-center white text-capitalize form-wizard-next-btn">
                                            <button class="init_screen" type="button">
                                                Let Us Know <i class="fas fa-arrow-right"> </i> 
                                            </button> 
                                            <img src="https://www.icacourse.in/wp-content/themes/scriptcrown/images/loader.gif" style="width: 42px; display:none;" class="checkout_loader">
                                        </div>   
                                    </div>
                                    <fieldset class="wizard-fieldset">
                                        <h5>Payment Information</h5>
                                        <div class="form-group">
                                        Payment Type
                                        <div class="wizard-form-radio">
                                            <input name="radio-name" id="mastercard" type="radio">
                                            <label for="mastercard">Master Card</label>
                                        </div>
                                        <div class="wizard-form-radio">
                                            <input name="radio-name" id="visacard" type="radio">
                                            <label for="visacard">Visa Card</label>
                                        </div>
                                        </div>
                                        <div class="form-group">
                                        <input type="text" class="form-control wizard-required" id="honame">
                                        <label for="honame" class="wizard-form-text-label">Holder Name*</label>
                                        <div class="wizard-form-error"></div>
                                        </div>
                                        <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="form-group">
                                            <input type="text" class="form-control wizard-required" id="cardname">
                                            <label for="cardname" class="wizard-form-text-label">Card Number*</label>
                                            <div class="wizard-form-error"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="form-group">
                                            <input type="text" class="form-control wizard-required" id="cvc">
                                            <label for="cvc" class="wizard-form-text-label">CVC*</label>
                                            <div class="wizard-form-error"></div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-12">Expiry Date</div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <div class="form-group">
                                            <select class="form-control">
                                                <option value="">Date</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                                <option value="">3</option>
                                                <option value="">4</option>
                                                <option value="">5</option>
                                                <option value="">6</option>
                                                <option value="">7</option>
                                                <option value="">8</option>
                                                <option value="">9</option>
                                                <option value="">10</option>
                                                <option value="">11</option>
                                                <option value="">12</option>
                                                <option value="">13</option>
                                                <option value="">14</option>
                                                <option value="">15</option>
                                                <option value="">16</option>
                                                <option value="">17</option>
                                                <option value="">18</option>
                                                <option value="">19</option>
                                                <option value="">20</option>
                                                <option value="">21</option>
                                                <option value="">22</option>
                                                <option value="">23</option>
                                                <option value="">24</option>
                                                <option value="">25</option>
                                                <option value="">26</option>
                                                <option value="">27</option>
                                                <option value="">28</option>
                                                <option value="">29</option>
                                                <option value="">30</option>
                                                <option value="">31</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <div class="form-group">
                                            <select class="form-control">
                                                <option value="">Month</option>
                                                <option value="">jan</option>
                                                <option value="">Feb</option>
                                                <option value="">March</option>
                                                <option value="">April</option>
                                                <option value="">May</option>
                                                <option value="">June</option>
                                                <option value="">Jully</option>
                                                <option value="">August</option>
                                                <option value="">Sept</option>
                                                <option value="">Oct</option>
                                                <option value="">Nov</option>
                                                <option value="">Dec</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <div class="form-group">
                                            <select class="form-control">
                                                <option value="">Years</option>
                                                <option value="">2019</option>
                                                <option value="">2020</option>
                                                <option value="">2021</option>
                                                <option value="">2022</option>
                                                <option value="">2023</option>
                                                <option value="">2024</option>
                                                <option value="">2025</option>
                                                <option value="">2026</option>
                                                <option value="">2027</option>
                                                <option value="">2028</option>
                                                <option value="">2029</option>
                                                <option value="">2030</option>
                                                <option value="">2031</option>
                                                <option value="">2032</option>
                                                <option value="">2033</option>
                                                <option value="">2034</option>
                                                <option value="">2035</option>
                                                <option value="">2036</option>
                                                <option value="">2037</option>
                                                <option value="">2038</option>
                                                <option value="">2039</option>
                                                <option value="">2040</option>
                                            </select>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="form-group clearfix">
                                        <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                                        <a href="javascript:;" class="form-wizard-submit float-right">Submit</a>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <script>
            let globalUrl = "{{ env("APP_URL") }}"
        </script>
        <script src="{{ url('assets/js/jquery-2.1.4.min.js') }}"></script>
        <script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ url('assets/js/center-enquiry.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    </body>
</html>