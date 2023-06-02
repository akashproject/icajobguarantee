<div class="contact-info">
    <input class="name" name="name" type="text" placeholder="Enter Your Name" autocomplete="off" required>
</div>
<div class="contact-info">
    <input class="email" name="email" type="email" placeholder="Enter Your Email" autocomplete="off" required>
</div>
<div class="contact-info">
    <input class="mobile" name="mobile" type="number" placeholder="Enter Your Mobile" autocomplete="off" required>
</div>
<div class="register-form-area">
    <select class="state" name="state" required>
        <option value="">Select State</option>
        @foreach(getStates() as $value)
            <option value="{{$value->name}}" data-id="{{$value->id}}"> {{$value->name}} </option>
        @endforeach
    </select>
</div>
<div class="register-form-area">
    <select class="city_id" name="city" required>
        <option value="">Select City</option>
    </select>
</div>
<div class="contact-info">
    <input type="text" class="occupation" name="occupation" placeholder="Enter Your Occupation" autocomplete="off" required>
</div>
<div class="register-form-area">
    <select class="invest" name="invest" required>
        <option value="">Are you ready to Invest  15-20 lakh ?</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
    </select>
</div>
<input type="hidden" class="formFieldOtpResponse" value="">
<input type="hidden" name="utm_campaign" value="{{ isset($contentMain->utm_campaign)?$contentMain->utm_campaign:'' }}">
<input type="hidden" name="utm_source" value="{{ isset($contentMain->utm_source)?$contentMain->utm_source:'' }}">
<input type="hidden" name ="utm_term" value="<?php echo (isset($_GET['utm_term']))?$_GET['utm_term']:""; ?>" >  
<input type="hidden" name ="utm_device" value="<?php echo (isset($_GET['utm_device']))?$_GET['utm_device']:""; ?>" >  
<input type="hidden" name ="utm_adgroup" value="<?php echo (isset($_GET['utm_adgroup']))?$_GET['utm_adgroup']:""; ?>" >  
<input type="hidden" name ="utm_content" value="<?php echo (isset($_GET['utm_content']))?$_GET['utm_content']:""; ?>" >   