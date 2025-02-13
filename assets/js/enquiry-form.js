
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
	jQuery(".lead_preference_selection").removeClass('active');
	console.log(jQuery(this).attr("data-id"));
	jQuery("."+jQuery(this).attr("data-id")).addClass('active');	
});

jQuery(".add_more_role_btn").on("click",function(){
	const fieldContainer = $('<div class="row"></div>');
	const input = $('<div class=col-md-7><input autocomplete=off type="text" class="job_role_elem wizard-required"id=formFieldJobRole name=job_role[] placeholder="What is your job role?"></div><div class=col-md-3><input autocomplete=off class="job_role_elem wizard-required"id=formFieldJobRoleTimePeriod name=job_role_time[] placeholder="Total Years"type=number>');
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
		let mobile = jQuery("#formFieldMobile").val();
		jQuery("#formFieldWhatsapp").val(mobile);
	} else {
		jQuery("#formFieldWhatsapp").val("");
	}
})

jQuery(".occupation").on("change",function(){
	if(jQuery(this).val() == "Other"){
		
		jQuery("."+jQuery(this).attr("data-id")).show();
	}
})