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
<div class="contact-info formFieldPincode">
    <input id="formFieldPincode" name="pincode" type="number" placeholder="Enter Your Address Pincode" min="100000" max="999999" autocomplete="off" required>
</div>
<input type="hidden" name="center" value="{{ (isset($center) )?$center:'' }}">
<input type="hidden" name="course_id" value="">