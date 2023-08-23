@honeypot
<div class="contact-info">
    <input class="name" name="name" type="text" placeholder="Enter Your Name" autocomplete="off" required>
</div>
<div class="contact-info">
    <input class="email" name="email" type="email" placeholder="Enter Your Email" autocomplete="off" required>
</div>
<div class="contact-info">
    <input class="mobile" name="mobile" type="number" placeholder="Enter Your Mobile" autocomplete="off" min="6000000000" max="9999999999" required>
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
<div class="form-group disclaimer text-left">
    <p style="margin:0">
        <input style="margin-left: 0;width: auto;vertical-align: middle;height: auto;" type="checkbox" class="" checked="">  I agree to receive updates on <i class="fa fa-whatsapp" style="color: green;"></i> whatsapp. 
    </p>
    <p>
        <input style="margin-left: 0;width: auto;vertical-align: middle;height: auto;" type="checkbox" class="" checked=""> I agree to <a href="/privacy-policy" target="_blank">Privacy Policy</a> &amp; overriding DNC/NDNC request for Call/SMS. 
    </p>
</div>
<input type="hidden" name="brochure_id" value="5">
{{ csrf_field() }}