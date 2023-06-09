<div class="contact-info formFieldName">
    <input id="formFieldName" name="name" type="text" placeholder="Enter Your Name" autocomplete="off" required>
</div>
<div class="contact-info formFieldEmail">
    <input id="formFieldEmail" name="email" type="email" placeholder="Enter Your Email" autocomplete="off" required>
</div>
<div class="contact-info formFieldMobile">
    <input id="formFieldMobile" name="mobile" type="number" placeholder="Enter Your Mobile" autocomplete="off" min="6000000000" max="9999999999" required>
</div>
<div class="contact-info formFieldPincode">
    <input id="formFieldPincode" name="pincode" type="number" placeholder="Enter Your Address Pincode" min="100000" max="999999" autocomplete="off" required>
</div>
<input type="hidden" name="center" value="{{ (isset($center) )?$center:'' }}">
<input type="hidden" name="course_id" value="">
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