
let screenCount = 0;
let stepCount = 1;

function enqueryFormValidate(){
	console.log("hi");
	
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
			mobile: {
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
	console.log(jQuery(this).attr("id"));
	
	
	jQuery(".lead_preference_selection").removeClass('active');
	jQuery("."+jQuery(this).attr("id")).addClass('active');
});

jQuery(".add_more_role_btn").on("click",function(){
	let clonedElement = '<div class="row"><div class="col-md-8"><input id="formFieldJobRole" name="job_role[]" type="text" placeholder="What is your job role?" autocomplete="off" class="wizard-required job_role_elem"></div><div class="col-md-4"><input id="formFieldJobRoleTimePeriod" name="job_role_time[]" type="text" placeholder="Total Years" autocomplete="off" class="wizard-required job_role_elem"></div></div>';

	jQuery(".add_more_job_role").append(clonedElement);
	console.log(clonedElement);
	
});


jQuery("#onClickSendOtp").on("click",function(e){
	var global_other_details_form = $('#global_other_details_form')[0];
	if (global_other_details_form.checkValidity()) {
        let formId = $(global_other_details_form).attr('id');
		sendMobileOtp(formId);
		countDown()
	} else {
		alert('Form is invalid!');
	}
	return false;
});