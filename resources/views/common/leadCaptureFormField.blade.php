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
    <select class="center" name="center" required>
        @php
            $centers = get_centers('',isset($center_id)?$center_id:'');
        @endphp
        @if(count($centers) > 1)
        <option value="" selected> Select Location </option>
        @endif
        @foreach($centers as $value)
            <option value="{{$value->name}}" > {{$value->name}} </option>
        @endforeach
    </select>
</div>