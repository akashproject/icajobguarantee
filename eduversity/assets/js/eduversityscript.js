$('#eduvarsity_popup_lead_capture_form input').on('keyup', function() {
	console.log("jo");
	if ($("#eduvarsity_popup_lead_capture_form").valid()) {
		$('#eduvarsity_popup_lead_capture_form .submit_eduversity_lead_generation_form').prop('disabled', false);  
	} else {
		$('#eduvarsity_popup_lead_capture_form .submit_eduversity_lead_generation_form').prop('disabled', 'disabled');
	}
});

//Eduversity Form Validation
$("#eduvarsity_popup_lead_capture_form").validate({
	messages: {
		name: {
			required: "Please enter full name",
		},
		email: {
			required: "Please enter valid email address",
			email_rule: "Please enter valid email address",
		},
		mobile: {
			required: "Please enter valid mobile number",
			min: "Please enter valid mobile number",
			max: "Please enter valid mobile number",
		},
		city: {
			required: "Please enter City",
		},
	},
	submitHandler: function(form) {
		eduversityOnFormSubmitProcess(form);
		return false; // required to block normal submit since you used ajax
	}
});

$('#eduvarsity_lead_capture_form input').on('keyup', function() {
	console.log("jo");
	if ($("#eduvarsity_lead_capture_form").valid()) {
		$('#eduvarsity_lead_capture_form .submit_eduversity_lead_generation_form').prop('disabled', false);  
	} else {
		$('#eduvarsity_lead_capture_form .submit_eduversity_lead_generation_form').prop('disabled', 'disabled');
	}
});

//Eduversity Form Validation
$("#eduvarsity_lead_capture_form").validate({
	messages: {
		name: {
			required: "Please enter full name",
		},
		email: {
			required: "Please enter valid email address",
			email_rule: "Please enter valid email address",
		},
		mobile: {
			required: "Please enter valid mobile number",
			min: "Please enter valid mobile number",
			max: "Please enter valid mobile number",
		},
		city: {
			required: "Please enter City",
		},
	},
	submitHandler: function(form) {
		eduversityOnFormSubmitProcess(form);
		return false; // required to block normal submit since you used ajax
	}
});

$('#affliate-registration input').on('keyup', function() {
	if ($("#affliate-registration").valid()) {
		$('#affliate-registration .submit_affliate_registration_form').prop('disabled', false);  
	} else {
		$('#affliate-registration .submit_affliate_registration_form').prop('disabled', 'disabled');
	}
});

$("#affliate-registration").validate({
	messages: {
		name: {
			required: "Please enter full name",
		},
		email: {
			required: "Please enter valid email address",
			email_rule: "Please enter valid email address",
		},
		mobile: {
			required: "Please enter valid mobile number",
			min: "Please enter valid mobile number",
			max: "Please enter valid mobile number",
		},
	},
	submitHandler: function(form) {
		let formId = $(form).attr('id');
		if(jQuery("#" + formId + " .formFieldOtpResponse").val() == ""){
			jQuery("#" + formId + " .submit_affliate_registration_form").prop('disabled', 'disabled');
			eduversitySendMobileOtp(formId);
			return false;
		}

		if(jQuery("#" + formId + " .verify_otp").val() != '' && jQuery("#" + formId + " .formFieldOtpResponse").val() == jQuery("#" + formId + " .verify_otp").val()){
			form.submit();
		} else {
			jQuery("#" + formId + " .response_status").html("OTP is Invalid");
			jQuery("#" + formId + " .checkout_loader").hide();
			return false;
		}
		return false; // required to block normal submit since you used ajax
	}
	
});

$("#affiliate-login").validate({
	messages: {
		mobile: {
			required: "Please enter valid mobile number",
			min: "Please enter valid mobile number",
			max: "Please enter valid mobile number",
		},
	},
	submitHandler: function(form) {
		let formId = $(form).attr('id');
		if(jQuery("#" + formId + " .formFieldOtpResponse").val() == ""){
			jQuery("#" + formId + " .submit_affiliate_login_form").prop('disabled', 'disabled');
			eduversitySendMobileOtp(formId);
			return false;
		}

		if(jQuery("#" + formId + " .verify_otp").val() != '' && jQuery("#" + formId + " .formFieldOtpResponse").val() == jQuery("#" + formId + " .verify_otp").val()){
			form.submit();
		} else {
			jQuery("#" + formId + " .response_status").html("OTP is Invalid");
			jQuery("#" + formId + " .checkout_loader").hide();
			return false;
		}
		return false; // required to block normal submit since you used ajax
	}
	
});

function eduversityOnFormSubmitProcess(form){
	let formId = $(form).attr('id');
	jQuery("#" + formId + " .checkout_loader").show();
			
	if(`${isEnableOtp}` == 0 && `${isAjaxSubmit}` == 0){
		jQuery("#" + formId + " .submit_eduversity_lead_generation_form").prop('disabled', 'disabled');
		form.submit();
	}

	if(`${isEnableOtp}` == 1 && `${isAjaxSubmit}` == 0){
		if(jQuery("#" + formId + " .formFieldOtpResponse").val() == ""){
			jQuery("#" + formId + " .submit_eduversity_lead_generation_form").prop('disabled', 'disabled');
			eduversitySendMobileOtp(formId);
			return false;
		}

		if(jQuery("#" + formId + " .verify_otp").val() != '' && jQuery("#" + formId + " .formFieldOtpResponse").val() == jQuery("#" + formId + " .verify_otp").val()){
			form.submit();
		} else {
			jQuery("#" + formId + " .response_status").html("OTP is Invalid");
			jQuery("#" + formId + " .checkout_loader").hide();
			return false;
		}
	}

	if(`${isEnableOtp}` == 1 && `${isAjaxSubmit}` == 1){
		if(jQuery("#" + formId + " .formFieldOtpResponse").val() == ""){
			eduversitySendMobileOtp(formId);
			return false;
		}
		if(jQuery("#" + formId + " .verify_otp").val() != '' && jQuery("#" + formId + " .formFieldOtpResponse").val() == jQuery("#" + formId + " .verify_otp").val()){
			jQuery("#" + formId + " .submit_eduversity_lead_generation_form").prop('disabled', 'disabled');
			captureLead(form,formId);
		} else {
			jQuery("#" + formId + " .response_status").html("OTP is Invalid");
			return false;
		}
	}
	
	if(`${isEnableOtp}` == 0 && `${isAjaxSubmit}` == 1){
		jQuery("#" + formId + " .submit_eduversity_lead_generation_form").prop('disabled', 'disabled');
		captureLead(form,formId)
	}
}

// Otp
function eduversitySendMobileOtp(formId) {
	var mobileNo = jQuery("#" + formId + " input[name='mobile']").val();
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	$.ajax({
		url: `${globalUrl}submit-mobile-otp`,
		type: "post",
		data: {
			mobile: mobileNo,
		},
		success: function(result) {
			if (result) {
				jQuery("#" + formId + " .submit_eduversity_lead_generation_form").prop('disabled', false);  
				jQuery("#" + formId + " .formFieldOtpResponse").val(result.otp_value);
				jQuery("#" + formId + " .lastDigit").text(result.lastdigit);
				jQuery("#" + formId + " .lead_steps").removeClass("active");
				jQuery("#" + formId + " .lead_steps.step2").addClass("active");
				jQuery(".checkout_loader").hide();
				return true;
			} else {
				jQuery("#" + formId + " .response_status").html("OTP Sent Failed! Please Try Again Later");
				jQuery(".checkout_loader").hide();
				return true;
			}
		}
	});
}

function sendMobileOtp(formId) {
	var mobileNo = jQuery("#" + formId + " input[name='mobile']").val();
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	$.ajax({
		url: `${globalUrl}submit-mobile-otp`,
		type: "post",
		data: {
			mobile: mobileNo,
		},
		success: function(result) {
			if (result) {
				jQuery("#" + formId + " .submit_classroom_lead_generation_form").prop('disabled', false);  
				jQuery("#" + formId + " .formFieldOtpResponse").val(result.otp_value);
				jQuery("#" + formId + " .lastDigit").text(result.lastdigit);
				jQuery("#" + formId + " .lead_steps").removeClass("active");
				jQuery("#" + formId + " .lead_steps.step2").addClass("active");
				jQuery(".checkout_loader").hide();
				return true;
			} else {
				jQuery("#" + formId + " .response_status").html("OTP Sent Failed! Please Try Again Later");
				jQuery(".checkout_loader").hide();
				return true;
			}
		}
	});
}