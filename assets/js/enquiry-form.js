
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
	console.log(stepCount);
	jQuery(this).parents(".welcome_message_wrap").removeClass("active");
    jQuery(".form_section.step_"+stepCount).addClass('active'); //form_section
	stepCount++;
})

jQuery('.couse_input').on('change',function(){
	console.log(jQuery(this).val());
	jQuery(".course_list").hide();
	jQuery(".course_list."+jQuery(this).val()).show();
})

jQuery('.form-wizard-previous-btn').click(function() {
	stepCount--;
	console.log(stepCount);
    var previous = jQuery(this);
	previous.parents('.wizard-fieldset').removeClass("active","400");
	jQuery(".form_section.step_"+stepCount).addClass('active'); //form_section
});

jQuery('.form-wizard-next-btn').click(function() {
	console.log("hello",screenCount);
	screenCount++;
    var parentFieldset = jQuery(this).parents('.wizard-fieldset');
    var next = jQuery(this);
    var nextWizardStep = true;
    var currentActiveStep = jQuery(this).parents('.form-wizard-panel').find('.form-wizard-steps .active');
	var currentWelcomeScreen = jQuery(this).parents('.form_process').children().find('.welcome_message_wrap .active');
    
    parentFieldset.find('.wizard-required').each(function(){
        var thisValue = jQuery(this).valid();
        if(!thisValue){
            nextWizardStep = false;
        }
    });

    if(nextWizardStep) {
        next.parents('.wizard-fieldset').removeClass("active","400");
		console.log("hello",screenCount);
		jQuery(".welcome_message_wrap").removeClass('active');
		jQuery(".welcome_message_wrap.screen_"+screenCount).addClass('active');
    }
});