@extends('administrator.layouts.admin')
    @section('content')
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group row">
					    <h4  class="col-sm-2 text-right"> Product Info </h4>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 text-right control-label col-form-label">Student Name</label>
                        <div class="col-sm-9 text-left control-label col-form-label">
                            <span >{{$enquiry->name }}</span >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 text-right control-label col-form-label">Student Address</label>
                        <div class="col-sm-9 text-left control-label col-form-label">
                            <span >{{$enquiry->address }}</span >
                        </div>
                    </div>
                   
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 text-right control-label col-form-label">City</label>
                        <div class="col-sm-9 text-left control-label col-form-label">
                            <span >{{$enquiry->city }}</span >
                        </div>
                    </div>    
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 text-right control-label col-form-label">Pincode</label>
                        <div class="col-sm-9 text-left control-label col-form-label">
                            <span >{{$enquiry->pincode }}</span >
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 text-right control-label col-form-label">Date of Birth</label>
                        <div class="col-sm-9 text-left control-label col-form-label">
                            <span >{{$enquiry->dob }}</span >
                        </div>
                    </div>  
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 text-right control-label col-form-label">Occupation</label>
                        <div class="col-sm-9 text-left control-label col-form-label">
                            <span >{{$enquiry->occupation }}</span >
                        </div>
                    </div>  
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 text-right control-label col-form-label">Mobile</label>
                        <div class="col-sm-9 text-left control-label col-form-label">
                            <span >{{$enquiry->mobile }}</span >
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 text-right control-label col-form-label">Email Address</label>
                        <div class="col-sm-9 text-left control-label col-form-label">
                            <span >{{$enquiry->email }}</span >
                        </div>
                    </div>  
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 text-right control-label col-form-label">Parent name</label>
                        <div class="col-sm-9 text-left control-label col-form-label">
                            <span >{{$enquiry->parent_name }}</span >
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 text-right control-label col-form-label">Parent mobile</label>
                        <div class="col-sm-9 text-left control-label col-form-label">
                            <span >{{$enquiry->parent_mobile }}</span >
                        </div>
                    </div>   
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 text-right control-label col-form-label">Parent email</label>
                        <div class="col-sm-9 text-left control-label col-form-label">
                            <span >{{$enquiry->parent_email }}</span >
                        </div>
                    </div>  
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 text-right control-label col-form-label">Parent occupation</label>
                        <div class="col-sm-9 text-left control-label col-form-label">
                            <span >{{$enquiry->parent_occupation }}</span >
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 text-right control-label col-form-label">Qualification</label>
                        <div class="col-sm-9 text-left control-label col-form-label">
                            @foreach($enquiry->qualification as $value)
                            <span > @php
                                        echo "<pre>"; print_r($value)
                                    @endphp
                            </span >
                            @endforeach
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 text-right control-label col-form-label">Professional qualification</label>
                        <div class="col-sm-9 text-left control-label col-form-label">
                            <span >{{$enquiry->professional_qualification }}</span >
                        </div>
                    </div>   
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 text-right control-label col-form-label">Know From</label>
                        <div class="col-sm-9 text-left control-label col-form-label">
                            <span >{{$enquiry->know_from }}</span >
                        </div>
                    </div>  
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 text-right control-label col-form-label">Job Interest</label>
                        <div class="col-sm-9 text-left control-label col-form-label">
                            <span >{{$enquiry->job_interest }}</span >
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 text-right control-label col-form-label">Admission Date</label>
                        <div class="col-sm-9 text-left control-label col-form-label">
                            <span >{{$enquiry->admission_date }}</span >
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 text-right control-label col-form-label">Slot Day</label>
                        <div class="col-sm-9 text-left control-label col-form-label">
                            <span >{{$enquiry->slot_day }}</span >
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 text-right control-label col-form-label">Slot Time</label>
                        <div class="col-sm-9 text-left control-label col-form-label">
                            <span >{{$enquiry->slot_time }}</span >
                        </div>
                    </div> 
                </div>                   
            </div>                   
        </div>                   
    @endsection
    @section('script')
@endsection