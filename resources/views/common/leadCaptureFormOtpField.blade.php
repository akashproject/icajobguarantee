<div class="lead_steps step2">
    <div class="otp-content">
        <h4 class="otp-heading"> OTP Verification </h4>                                   
        <p class="message"> <span class="message"> Enter the OTP you recive at </span> +91 XXXXXX<span class="lastDigit"></span> <span class="changeGivenNumber"> (Change) </span> </p>
        <p class="response_status" style="color: #000;"></p>
    </div> 
    <div class="contact-info">
        <input class="verify_otp" name="verify_otp" type="text" placeholder="Enter One Time Password" autocomplete="off">
    </div>
</div>
<div class="nws-button text-center white text-capitalize">
    <button class="submit_classroom_lead_generation_form form_step_1" type="submit" disabled>Apply Now <i class="fas fa-arrow-right" > </i> </button> 
    <img src="https://www.icacourse.in/wp-content/themes/scriptcrown/images/loader.gif" style="width: 42px; display:none;" class="checkout_loader">
</div>
<!-- Mendetory Fields -->
<input type="hidden" class="formFieldOtpResponse" value="">
<input type="hidden" name="utm_campaign" value="{{ isset($contentMain->utm_campaign)?$contentMain->utm_campaign:'' }}">
<input type="hidden" name="utm_source" value="{{ isset($contentMain->utm_source)?$contentMain->utm_source:'' }}">
<input type="hidden" name ="utm_term" value="<?php echo (isset($_GET['utm_term']))?$_GET['utm_term']:""; ?>" >  
<input type="hidden" name ="utm_device" value="<?php echo (isset($_GET['utm_device']))?$_GET['utm_device']:""; ?>" >  
<input type="hidden" name ="utm_adgroup" value="<?php echo (isset($_GET['utm_adgroup']))?$_GET['utm_adgroup']:""; ?>" >  
<input type="hidden" name ="utm_content" value="<?php echo (isset($_GET['utm_content']))?$_GET['utm_content']:""; ?>" >   
<input type="hidden" name ="store_area" value="{{ isset($contentMain->store_area)?$contentMain->store_area:'1' }}" >
<input type="hidden" name ="source_url" value="{{ url()->current() }}" >
<input type="hidden" name ="LeadType" value="DM" >