
let screenCount = 0;
let stepCount = 1;

function enqueryFormValidate(){
	
	jQuery("#global_other_details_form").valid({
		rules: {
			"know_from[]": "required",
			"qualification[degree][]": "required",
			"qualification[board][]": "required",
		},
		messages: {
			name: {
				required: "Please enter full name",
			},
			email: {
				required: "Please enter valid email address",
			},
			mobile_number: {
				required: "Please enter valid mobile number",
				min: "Please enter valid mobile number",
				max: "Please enter valid mobile number",
			},
			center: {
				required: "Please enter center name",
			},
			location: {
				required: "Please select prefferd city",
			},
		},
		submitHandler: function(form) {                           
			globalFormSubmitProcess(form);
			return false; // required to block normal submit since you used ajax
		}
	});
}

jQuery("#global_other_details_form").on("submit",function(){
	enqueryFormValidate();
})

jQuery('.conversational_init-btn').click(function() {
	jQuery(this).parents(".wizerd_welcome_screen").hide();
    jQuery(this).parents(".wizerd_set").children(".wizerd_fieldset").show();
})

jQuery('.couse_input').on('change',function(){
	jQuery(".course_group").show();
	jQuery(".course_list").hide();
	jQuery(".course_list."+jQuery(this).val()).show();
	jQuery(this).parents(".wizerd_welcome_screen").hide();
	jQuery(this).parents(".wizerd_set").children(".wizerd_fieldset").show();
})

jQuery('.lead_prefference').on('change',function(){
	jQuery(".lead_preference_selection").removeClass('active');
	console.log(jQuery(this).attr("data-id"));
	jQuery("."+jQuery(this).attr("data-id")).addClass('active');	
});
let fieldCount = 0;
jQuery(".add_more_role_btn").on("click",function(){
	fieldCount++;
	const fieldContainer = $('<div class="row"></div>');
	const input = $('<div class=col-md-7><input autocomplete=off type="text" class="job_role_elem wizard-required"id=formFieldJobRole name=job_role['+fieldCount+'][name] placeholder="What is your job role?"></div><div class=col-md-3><input autocomplete=off class="job_role_elem wizard-required"id=formFieldJobRoleTimePeriod name=job_role['+fieldCount+'][time] placeholder="Total Years" type=number>');
	const removeBtn = $('<div class=col-md-2><a class=remove_role_btn href=javascript:void(0)>Remove</a></div>');
	
	removeBtn.click(function() {
		fieldContainer.remove();
	});
	
	fieldContainer.append(input).append(removeBtn);
	jQuery('.add_more_job_role').append(fieldContainer);
	
});

jQuery('.hide_show_text_field').change(function() {
	if(jQuery(this).is(':checked')) {
		jQuery(this).parent().parent().parent().parent().children(".specify_field").show();
	} else {
		jQuery(this).parent().parent().parent().parent().children(".specify_field").hide();
	}
});

jQuery(".copy_mobile_no").change(function(){
	if(jQuery(this).is(':checked')) {		
		let mobile = jQuery("#mobile_number").val();
		jQuery("#whatsapp_number").val(mobile);
	} else {
		jQuery("#whatsapp_number").val("");
	}
});

jQuery("#current_education_status").change(function(){
	let field = jQuery(this).attr("data-id");
	if(jQuery(this).is(':checked')) {	
		jQuery('.'+field).show();
	} else {
		jQuery('.'+field).hide();
	}
});

jQuery("#current_semester").change(function(){
	let field = jQuery(this).attr("data-id");
	jQuery('.'+field).show();
})

jQuery(".occupation").on("change",function(){
	if(jQuery(this).val() == "Other"){
		jQuery("."+jQuery(this).attr("data-id")).show();
	}
})

jQuery(".guardian_identity").on("change",function(){
	if(jQuery(this).val() == "Other"){
		jQuery("."+jQuery(this).attr("data-id")).show();
	} else {
		jQuery("."+jQuery(this).attr("data-id")).hide();
		jQuery("."+jQuery(this).attr("data-id")).val("");
	}
})

function sendMobileOtp(formId) {
    var mobileNo = jQuery("#" + formId + " input[name='mobile_number']").val();
	$.ajaxSetup({
		headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
    jQuery.ajax({
        url: `${globalUrl}submit-mobile-otp`,
		type: "post",
		data: {
			mobile: mobileNo,
		},
        success: function(result) {
            if (result.status == "success") {
                countDown()
                jQuery("#" + formId + " .responsed_otp").val(result.otp_value);
                jQuery("#" + formId + " .response_success").show();
                jQuery("#" + formId + " .response_status").html("OTP Has Been Sent Successfully");
                jQuery("#" + formId + " .response_status").css("color","green");
                return true;
            } else {
                jQuery("#" + formId + " .response_status").html("OTP Sent Failed! Please Try Again Later");
                jQuery("#" + formId + " .response_status").css("color","red");
                return true;
            }
        }
    });
}

function countDown() {
	if ($('.coming-countdown').length > 0) {
		// Specify the deadline date
		var deadlineDate = new Date('Decembar 21, 2018 23:59:59').getTime();

		// Cache all countdown boxes into consts
		var countdownDays = document.querySelector('.days .number');
		var countdownHours = document.querySelector('.hours .number');
		var countdownMinutes = document.querySelector('.minutes .number');
		var countdownSeconds = document.querySelector('.seconds .number');

		// Update the count down every 1 second (1000 milliseconds)
		setInterval(function () {
		// Get current date and time
		var currentDate = new Date().getTime();

		// Calculate the distance between current date and time and the deadline date and time
		var distance = deadlineDate - currentDate;

		// Time calculations for days, hours, minutes and seconds
		var days = Math.floor(distance / (1000 * 60 * 60 * 24));
		var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		var seconds = Math.floor((distance % (1000 * 60)) / 1000);

		// Insert the result data into individual countdown boxes
		countdownDays.innerHTML = days;
		countdownHours.innerHTML = hours;
		countdownMinutes.innerHTML = minutes;
		countdownSeconds.innerHTML = seconds;
		}, 1000);
	
	};
}