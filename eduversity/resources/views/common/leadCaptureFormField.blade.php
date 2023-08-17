@csrf
<div class="contact-info formFieldName">
    <input id="formFieldName" name="name" type="text" placeholder="Enter Your Name" autocomplete="off" required>
</div>
<div class="contact-info formFieldEmail">
    <input id="formFieldEmail" name="email" type="email" placeholder="Enter Your Email" autocomplete="off" required>
</div>
<div class="contact-info formFieldMobile">
    <input id="formFieldMobile" name="mobile" type="number" placeholder="Enter Your Mobile" autocomplete="off" min="6000000000" max="9999999999" required>
</div>
@if(!isset($university))
<div class="contact-info formFieldCity">
    <input id="formFieldCity" name="city" type="text" placeholder="Enter Your City" autocomplete="off" required>
</div>
@endif
<input type="hidden" name="university" value="{{ (isset($universityName))?$universityName:'' }}">
<input type="hidden" name="course_id" value="">
<input type="hidden" name="brochure_id" value="">