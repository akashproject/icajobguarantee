(function() {
	"use strict";
	var Genius = {
		init: function() {
			this.Basic.init();  
		},
		Basic: {
			init: function() {
				this.preloader();
				this.menuBar();
				this.onePageNav();
				this.quickScroll2();
				this.courseSlide();
				this.fourGridSlide();
				this.threeGridSlide();
				this.serviceSlide();
				this.placementSlide()
				this.testimonialSlide();
				this.certificateSlide();
				this.videoPopup();
				this.sponsorSlide();
				this.bestproductSlide();
				this.faqTAB();
				this.contactMAP();
				this.rateReview();
				this.categorySlide();
				this.testi_2Slide();
				this.teacher2SLIDE();
				this.teacher3SLIDE();
				this.buttonSlide();
				this.testimonialSlide_3();
				this.categorySlide_3();
				this.advance3SLIDE();
				this.productRange();
				this.searchBAR();
				this.mobileMenu();
				this.mainSlide();
				this.countDown();
				this.quickScroll();
			},

/* Start Of Preloader
================================================*/
preloader: function (){

	jQuery(window).on('load', function(){
		jQuery('#preloader').fadeOut('slow',function(){jQuery(this).remove();});
	});
},
/* End  Of Preloader
================================================*/


/* - Start of menu bar
================================================*/
menuBar: function (){
	jQuery(window).on('scroll', function() {
		if (jQuery(window).scrollTop() > 50) {
			jQuery('.main-menu-container').addClass('menu-bg-overlay')
		} else {
			jQuery('.main-menu-container').removeClass('menu-bg-overlay')
		}
	})

	jQuery(window).on('scroll', function() {
		if (jQuery(window).scrollTop() > 450) {
			jQuery('.page-inside-menu').show()
		} else {
			jQuery('.page-inside-menu').hide()
		}
	})

},

onePageNav: function (){
	jQuery(window).on('scroll', function() {
		if (jQuery(window).scrollTop() > 20) {
			jQuery('.header_3').addClass('full-width-menu')
		} else {
			jQuery('.header_3').removeClass('full-width-menu')
		}
	})

},

quickScroll2: function (){
	$('.quick-menu').on("click", "a", function(){
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html, body').animate({
					scrollTop: target.offset().top -65
				}, 1000);
				return false;
			}
		}
	});
},
/* - End of menu bar
================================================*/

/* Start Of counter-up
================================================*/
counterUp: function (){
	$('.counter-count').counterUp({
		delay: 50,
		time: 2000,
	});
},
/* - End Of counter-up
================================================*/

/* Start Of course slide
================================================*/
mainSlide: function (){
	$('#slider-item').owlCarousel({
		margin:0,
		responsiveClass:true,
		nav: true,
		dots: true,
		autoplay: false,
		navText:["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
		smartSpeed: 1000,
		responsive:{
			0:{
				items:1,
			},
			400:{
				items:1,
			},
			600:{
				items:1,
			},
			700:{
				items:1,
			},
			800:{
				items:1,
			},
			1000:{
				items:1,

			}
		},
	})
},
/* End Of course slide
================================================*/

/* Start Of course slide
================================================*/
fourGridSlide: function (){
	$('.four-grid-slide').owlCarousel({
		margin:30,
		responsiveClass:true,
		nav: true,
		dots: false,
		autoplay: false,
		navText:["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
		smartSpeed: 1000,
		responsive:{
			0:{
				items:2,
				margin:5,
			},
			400:{
				items:2,
				margin:5,
			},
			600:{
				items:2,
				margin:5,
			},
			700:{
				items:3,
			},
			800:{
				items:4,
			},
			1000:{
				items:4,

			}
		},
	})
},
/* End Of course slide
================================================*/
threeGridSlide: function (){
	$('.tree-grid-slide').owlCarousel({
		margin:30,
		responsiveClass:true,
		nav: true,
		dots: false,
		autoplay: false,
		navText:["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
		smartSpeed: 1000,
		responsive:{
			0:{
				items:1,
			},
			400:{
				items:1,
			},
			600:{
				items:1,
			},
			700:{
				items:3,
			},
			800:{
				items:3,
			},
			1000:{
				items:3,

			}
		},
	})
},
/* Start Of course slide
================================================*/
courseSlide: function (){
	$('#course-slide-item').owlCarousel({
		loop:true,
		margin:10,
		dots: false,
		autoplay:true,
		nav:true,
		navText:["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
		responsiveClass:true,
		responsive:{
			0:{
				items:1.2,
				margin:2,
			},
			400:{
				items:1.2,
				margin:2,
			},
			600:{
				items:1.2,
				margin:2,
			},
			700:{
				items:2.2,
			},
			800:{
				items:3.2,
			},
			1000:{
				items:3.2,
			}
		}
	})
},
/* End Of course slide
================================================*/
/* - End Start Of Date picker
================================================*/

/* Start Of service slide
================================================*/
serviceSlide: function (){
	$('#service-slide-item').owlCarousel({
		margin:85,
		responsiveClass:true,
		nav: false,
		autoplay: false,
		smartSpeed: 1000,
		responsive:{
			0:{
				items:1,
			},
			400:{
				items:1,
			},
			600:{
				items:1,
			},
			700:{
				items:2,
			},
			1000:{
				items:3,

			}
		},
	})
},
/* End Of service slide
================================================*/


/* Start Of service slide
================================================*/
testimonialSlide: function (){
	$('#testimonial-slide-item').owlCarousel({
		margin:10,
		responsiveClass:true,
		nav: true,
		autoplay: false,
		navText:["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
		autoplay: false,
		dots: false,
		smartSpeed: 1000,
		responsive:{
			0:{
				items:1,
			},
			400:{
				items:1,
			},
			600:{
				items:1,
			},
			700:{
				items:2,
			},
			1000:{
				items:3,

			}
		},
	})
},

placementSlide: function (){
	$('#placement-slide-item').owlCarousel({
		margin:10,
		responsiveClass:true,
		nav: true,
		autoplay: false,
		navText:["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
		autoplay: false,
		dots: false,
		smartSpeed: 1000,
		responsive:{
			0:{
				items:2,
			},
			400:{
				items:2,
			},
			600:{
				items:3,
			},
			700:{
				items:4,
			},
			1000:{
				items:5,

			}
		},
	})
},


certificateSlide: function (){
	$('#certificate-slide-item').owlCarousel({
		margin:50,
		responsiveClass:true,
		nav: true,
		autoplay: false,
		navText:["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
		//autoplay: true,
		loop: true,
		dots: false,
		smartSpeed: 1000,
		items:1,
	})
},
/* End Of service slide
================================================*/


/* Start of popup
================================================*/
videoPopup: function (){
	jQuery('.popup-with-zoom-anim').magnificPopup({
		disableOn: 200,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,
		fixedContentPos: false
	});
	
},
/* End of popup
================================================*/

/* Start Of service slide
================================================*/
sponsorSlide: function (){
	$('.sponsor-item').owlCarousel({
		margin: 2,
		responsiveClass:true,
		nav: true,
		loop: true,
		autoplay: true,
		navText:["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
		dots: true,
		smartSpeed: 1000,
		responsive:{
			0:{
				items:2,
			},
			400:{
				items:2,
			},
			600:{
				items:3,
			},
			700:{
				items:4,
			},
			1000:{
				items:6,

			}
		},
	})
},
/* End Of service slide
================================================*/


/* Start Of best product
================================================*/
bestproductSlide: function (){
	$('#best-product-slide-item').owlCarousel({
		margin:25,
		responsiveClass:true,
		nav: true,
		dots: false,
		autoplay: true,
		navText:["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
		smartSpeed: 1000,
		responsive:{
			0:{
				items:1,
			},
			400:{
				items:1,
			},
			600:{
				items:2,
			},
			700:{
				items:2,
			},
			800:{
				items:2,
			},
			1000:{
				items:4,

			}
		},
	})
},
/* End Of best product
================================================*/


/* Start Of best product
================================================*/
faqTAB: function (){
	//$(".tab-content-1").hide();
	//$(".tab-content-1:first").show();

	// $(".course-tab-content-1").hide();
	// $(".course-tab-content-1:first").show();

	/* if in tab mode */
	$("ul.product-tab").on("click", "li", function() {
		
		$(".tab-content-1").hide();
		var activeTab = $(this).attr("rel"); 
		$("#"+activeTab).fadeIn();    
		
		$("ul.product-tab li").removeClass("active");
		$(this).addClass("active");

		$(".tab_drawer_heading").removeClass("d_active");
		$(".tab_drawer_heading[rel^='"+activeTab+"']").addClass("d_active");
		
	});

	$("ul.course-tab").on("click", "li", function() {
		
		$(".course-tab-content-1").hide();
		var activeTab = $(this).attr("rel"); 
		$("#"+activeTab).fadeIn();    
		
		$("ul.course-tab li").removeClass("active");
		$(this).addClass("active");

		$(".tab_drawer_heading").removeClass("d_active");
		$(".tab_drawer_heading[rel^='"+activeTab+"']").addClass("d_active");
		
	});

	$(".courseMenu").on("click", "li", function() {
		$(".tab-content-1").hide();
		var activeTab = $(this).attr("rel"); 
		console.log("here",activeTab);
		$("#"+activeTab).fadeIn();    
		
		$("ul.courseMenu li").removeClass("active");
		$(this).addClass("active");

		$(".tab_drawer_heading").removeClass("d_active");
		$(".tab_drawer_heading[rel^='"+activeTab+"']").addClass("d_active");
		
	});

	/* if in drawer mode */
	$(".tab_drawer_heading").on("click", function() {
		$(".tab-content-1").hide();
		var d_activeTab = $(this).attr("rel"); 
		$("#"+d_activeTab).fadeIn();
		
		$(".tab_drawer_heading").removeClass("d_active");
		$(this).addClass("d_active");
		
		$("ul.product-tab li").removeClass("active");
		$("ul.product-tab li[rel^='"+d_activeTab+"']").addClass("active");

		$("ul.course-tab li").removeClass("active");
		$("ul.course-tab li[rel^='"+d_activeTab+"']").addClass("active");
	});
	
	
  /* Extra class "tab_last" 
     to add border to right side
     of last tab */
     $('ul.product-tab li').last().addClass("tab_last");
	 $('ul.course-tab li').last().addClass("tab_last");
 },
/* End Of best product
================================================*/


/* Start  Contact Map section
================================================*/
contactMAP: function (){
	function isMobile() { 
		return ('ontouchstart' in document.documentElement);
	}

	function init_gmap() {
		if ( typeof google == 'undefined' ) return;
		var options = {
			center: [40.712775, -74.005973],
			zoom: 14,
			styles: [
			{elementType: 'geometry', stylers: [{color: '#eeeeee'}]},
			{elementType: 'labels.text.stroke', stylers: [{color: '#eeeeee'}]},
			{elementType: 'labels.text.fill', stylers: [{color: '#eeeeee'}]},
			{
				featureType: 'administrative.locality',
				elementType: 'labels.text.fill',
				stylers: [{color: '#cdc9c2'}]
			},
			{
				featureType: 'poi',
				elementType: 'labels.text.fill',
				stylers: [{color: '#cdc9c2'}]
			},
			{
				featureType: 'poi.park',
				elementType: 'geometry',
				stylers: [{color: '#cdc9c2'}]
			},
			{
				featureType: 'poi.park',
				elementType: 'labels.text.fill',
				stylers: [{color: '#c6c9c3'}]
			},
			{
				featureType: 'road',
				elementType: 'geometry',
				stylers: [{color: '#c6c9c3'}]
			},
			{
				featureType: 'road',
				elementType: 'geometry.stroke',
				stylers: [{color: '#cdc9c2'}]
			},
			{
				featureType: 'road',
				elementType: 'labels.text.fill',
				stylers: [{color: '#cdc9c2'}]
			},
			{
				featureType: 'road.highway',
				elementType: 'geometry',
				stylers: [{color: '#cdc9c2'}]
			},
			{
				featureType: 'road.highway',
				elementType: 'geometry.stroke',
				stylers: [{color: '#cdc9c2'}]
			},
			{
				featureType: 'road.highway',
				elementType: 'labels.text.fill',
				stylers: [{color: '#cdc9c2'}]
			},
			{
				featureType: 'transit',
				elementType: 'geometry',
				stylers: [{color: '#e4e4e3'}]
			},
			{
				featureType: 'transit.station',
				elementType: 'labels.text.fill',
				stylers: [{color: '#e4e4e3'}]
			},
			{
				featureType: 'water',
				elementType: 'geometry',
				stylers: [{color: '#c3c7cc'}]
			},
			{
				featureType: 'water',
				elementType: 'labels.text.fill',
				stylers: [{color: '#c3c7cc'}]
			},
			{
				featureType: 'water',
				elementType: 'labels.text.stroke',
				stylers: [{color: '#c3c7cc'}]
			}
			],
			mapTypeControl: true,
			mapTypeControlOptions: {
				style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
			},
			navigationControl: true,
			scrollwheel: false,
			streetViewControl: true,
		}

		if (isMobile()) {
			options.draggable = false;
		}

		$('#googleMaps').gmap3({
			map: {
				options: options
			},
			marker: {
				latLng: [40.712775, -74.005973],
				options: { icon: 'assets/img/map.png' }

			}
		});
	}
	init_gmap();
	
},

/* End Contact Map section
================================================*/


/* - Start of faq accordion
================================================*/
rateReview: function (){
	$(':radio').change(function() {
		console.log('New star rating: ' + this.value);
		$("#rating").val(this.value);

	});
},
/* - End of faq accordion
================================================*/



/* Start Of best product
================================================*/
categorySlide: function (){
	$('.category-slide-item').owlCarousel({
		margin:25,
		responsiveClass:true,
		nav: true,
		dots: false,
		autoplay: false,
		navText:["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
		smartSpeed: 1000,
		responsive:{
			0:{
				items:1,
			},
			400:{
				items:1,
			},
			600:{
				items:2,
			},
			700:{
				items:3,
			},
			1000:{
				items:4,

			}
		},
	})
},
/* End Of best product
================================================*/

/* Start Of service slide
================================================*/
testi_2Slide: function (){
	$('.testimonial-secound-slide-area').owlCarousel({
		margin:10,
		responsiveClass:true,
		nav: false,
		autoplay: false,
		smartSpeed: 1000,
		responsive:{
			0:{
				items:1,
			},
			400:{
				items:1,
			},
			600:{
				items:1,
			},
			700:{
				items:1,
			},
			1000:{
				items:1,

			}
		},
	})
},
/* End Of service slide
================================================*/



/* Start Of teacher secoud Slide
================================================*/
teacher2SLIDE: function (){
	$('.teacher-secound-slide').owlCarousel({
		margin:25,
		responsiveClass:true,
		nav: true,
		dots: false,
		autoplay: false,
		navText:["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
		smartSpeed: 1000,
		responsive:{
			0:{
				items:1,
			},
			400:{
				items:1,
			},
			600:{
				items:2,
			},
			700:{
				items:2,
			},
			1000:{
				items:4,

			}
		},
	})
},
/* End Of teacher secoud Slide
================================================*/


/* Start Of teacher thired Slide
================================================*/
teacher3SLIDE: function (){
	$('.teacher-third-slide').owlCarousel({
		margin:30,
		responsiveClass:true,
		nav: true,
		dots: false,
		autoplay: false,
		navText:["<i class='fas fa-chevron-left'></i>",
		"<i class='fas fa-chevron-right'></i>"],
		smartSpeed: 1000,
		responsive:{
			0:{
				items:1,
			},
			400:{
				items:1,
			},
			600:{
				items:2,
			},
			700:{
				items:3,
			},
			1000:{
				items:5,

			}
		},
	})
},
/* End Of teacher thired Slide
================================================*/



/* Start Of best product
================================================*/
buttonSlide: function (){
	$('.button-tab').owlCarousel({
		margin:0,
		responsiveClass:true,
		nav: true,
		dots: false,
		autoplay: false,
		navText:["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
		smartSpeed: 1000,
		responsive:{
			0:{
				items:1,
			},
			400:{
				items:2,
			},
			600:{
				items:4,
			},
			700:{
				items:5,
			},
			1000:{
				items:6,

			}
		},
	})
},
/* End Of best product
================================================*/


/* Start Of service slide
================================================*/
testimonialSlide_3: function (){
	$('.testimonial-secound-slide-area_3').owlCarousel({
		margin:85,
		responsiveClass:true,
		nav: true,
		autoplay: false,
		navText:["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
		autoplay: false,
		dots: false,
		smartSpeed: 1000,
		responsive:{
			0:{
				items:1,
			},
			400:{
				items:1,
			},
			600:{
				items:1,
			},
			700:{
				items:1,
			},
			1000:{
				items:1,

			}
		},
	})
},
/* End Of service slide
================================================*/



/* Start Of category slide
================================================*/
categorySlide_3: function (){
	$('.category-slide').owlCarousel({
		margin:0,
		responsiveClass:true,
		nav: true,
		autoplay: false,
		navText:["<i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
		autoplay: false,
		dots: false,
		smartSpeed: 1000,
		responsive:{
			0:{
				items:1,
			},
			400:{
				items:2,
			},
			600:{
				items:3,
			},
			700:{
				items:4,
			},
			1000:{
				items:5,

			}
		},
	})
},
/* End Of  category slide
================================================*/


/* Start Of teacher thired Slide
================================================*/
advance3SLIDE: function (){
	$('.service-slide_3').owlCarousel({
		margin:10,
		responsiveClass:true,
		nav: true,
		dots: false,
		autoplay: false,
		navText:["<i class='fas fa-chevron-left'></i>",
		"<i class='fas fa-chevron-right'></i>"],
		smartSpeed: 1000,
		responsive:{
			0:{
				items:1,
			},
			400:{
				items:1,
			},
			600:{
				items:2,
			},
			700:{
				items:2,
			},
			1000:{
				items:3,

			}
		},
	})
},
/* End Of teacher thired Slide
================================================*/


/* Start Of category slide
================================================*/
productRange: function (){

	$( "#slider-range" ).slider({
		range: true,
		min: 0,
		max: 800,
		values: [ 175, 500 ],
		slide: function( event, ui ) {
			$( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
		}
	});
	$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
		" - $" + $( "#slider-range" ).slider( "values", 1 ) );
},
/* End Of  category slide
================================================*/



/* - Start of search bar
================================================*/
searchBAR: function (){
	$('.toggle-overlay').on('click', function() {
		$('.search-body').toggleClass('search-open');
	});

},
/* - End of search bar
================================================*/



		mobileMenu: function (){
			jQuery('.mobile-menu nav').meanmenu();
			function slideMenu() {
				var activeState = jQuery('#menu-container .menu-list').hasClass('active');
				jQuery('#menu-container .menu-list').animate({
					left: activeState ? '0%' : '-100%'
				}, 400);
			}
			jQuery('.alt-menu-btn').on ("click" , function(event) {
				event.stopPropagation();
				jQuery('.hamburger-menu').toggleClass('open');
				jQuery('.menu-list').toggleClass('active');
				slideMenu();

				jQuery('body').toggleClass('overflow-hidden');
			});
		},

		countDown:  function (){
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
		},

		quickScroll: function (){
			$(window).on("scroll", function() {
				if ($(this).scrollTop() > 200) {
					$('.scrollup').fadeIn();
				} else {
					$('.scrollup').fadeOut();
				}
			});

			$('.scrollup').on("click", function()  {
				$("html, body").animate({
					scrollTop: 0
				}, 800);
				return false;
			});
		},

	}
}
	jQuery(document).ready(function (){
		Genius.init();
		$('img').error(function(){
			$(this).hide();
		});
	});

	jQuery(".popup-close span").on("click",function(){
		
		let id = $(this).parent().parent().parent().parent().parent().attr("id");
		$("#"+id).modal('hide');
	});

	jQuery(".gotoCourseCategory").on("change",function (){
		window.location.href = $(this).val();
	});

	jQuery(".course-detail-tab-btn").on("click",function (){
		$(".course-view-content").removeClass("active");
		let id = $(this).attr("data-id");
		$("#"+id).addClass("active");
	})

	jQuery(".changeGivenNumber").on("click",function(){
		let formId = jQuery(this).closest("form").attr("id");
		jQuery("#" + formId + " .formFieldOtpResponse").val("");
		jQuery("#" + formId + " .form_process .lead_steps").removeClass("active");
		jQuery("#" + formId + " .form_process .lead_steps.step1").addClass("active");
	});

	jQuery.validator.addMethod('email_rule', function (value, element) {
		if (/^([a-zA-Z0-9_\-\.]+)\+?([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/.test(value)) {
		return true;
		} else {
		return false;
		};
	});

	jQuery.validator.addMethod("validPincode",function(value, element) {
		let response = true
		//jQuery(".checkout_loader").show();
		const pincode = ["711203", "700131", "700130", "700132"];
		console.log(pincode);
		console.log(getPincode);
		return pincode.includes(value);
	});

	$("#submit-review").validate({
		rules: {
			stars: {
				required: true,
			},
			reviewer_name: {
				required: true,
			},
			reviewer_email: {
				required: true,
			},
			title: {
				required: true,
			},
			review: {
				required: true,
			},
		},
		messages: {
			stars: {
				required: "Please select rating",
			},
			reviewer_name: {
				required: "Please enter your name",
			},
			reviewer_email: {
				required: "Please enter your email",
			},
			title: {
				required: "Please enter subject",
			},
			review: {
				required: "Submit your review",
			},
		}, 
		submitHandler: function(form) {
			$.ajaxSetup({
				headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			$.ajax({
				url: `${globalUrl}submit-review`,
				type: "post",
				data: $("#submit-review").serialize(),
				success: function(result) {
					$(".review-success").show();
					$("#submit-review")[0].reset();
				}
			});
		}
	})

	$('#classroom_popup_lead_capture_form input').on('keyup', function() {
		if ($("#classroom_popup_lead_capture_form").valid()) {
			$('#classroom_popup_lead_capture_form .submit_classroom_lead_generation_form').prop('disabled', false);  
		} else {
			$('#classroom_popup_lead_capture_form .submit_classroom_lead_generation_form').prop('disabled', 'disabled');
		}
	});

	$('#global_other_details_form input').on('keyup', function() {
		if ($("#global_other_details_form").valid()) {
			$('#global_other_details_form .submit_classroom_lead_generation_form').prop('disabled', false);  
		} else {
			$('#global_other_details_form .submit_classroom_lead_generation_form').prop('disabled', 'disabled');
		}
	});

	$('#global_other_details_form select').on('change', function() {
		if ($("#global_other_details_form").valid()) {
			$('#global_other_details_form .submit_classroom_lead_generation_form').prop('disabled', false);  
		} else {
			$('#global_other_details_form .submit_classroom_lead_generation_form').prop('disabled', 'disabled');
		}
	});

	$('#franchise_lead_capture_form input').on('keyup', function() {
        if ($("#franchise_lead_capture_form").valid()) {
            $('#franchise_lead_capture_form .submit_classroom_lead_generation_form').prop('disabled', false);  
        } else {
            $('#franchise_lead_capture_form .submit_classroom_lead_generation_form').prop('disabled', 'disabled');
        }
    });

	$('#franchise_lead_capture_form select').on('change', function() {
        if ($("#franchise_lead_capture_form").valid()) {
            $('#franchise_lead_capture_form .submit_classroom_lead_generation_form').prop('disabled', false);  
        } else {
            $('#franchise_lead_capture_form .submit_classroom_lead_generation_form').prop('disabled', 'disabled');
        }
    });

	$('#banner_lead_capture_form input').on('keyup', function() {
		if ($("#banner_lead_capture_form").valid()) {
			$('.submit_classroom_lead_generation_form').prop('disabled', false);  
		} else {
			$('.submit_classroom_lead_generation_form').prop('disabled', 'disabled');
		}
	});

	$('#banner_lead_capture_form select').on('change', function() {
		if ($("#banner_lead_capture_form").valid()) {
			$('.submit_classroom_lead_generation_form').prop('disabled', false);  
		} else {
			$('.submit_classroom_lead_generation_form').prop('disabled', 'disabled');
		}
	});

	
	//Popup Form Validation
	$("#classroom_popup_lead_capture_form").validate({
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
			pincode: {
				required: "Please enter valid pincode",
				min: "This pincode is not in India",
				max: "This pincode is not in India",
			},
		},
		submitHandler: function(form) {
			classroomOnFormSubmitProcess(form);
			return false; // required to block normal submit since you used ajax
		}
	});
	
	//Homepage Form Page Validation
	$("#banner_lead_capture_form").validate({
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
			pincode: {
				required: "Please enter valid pincode",
				min: "This pincode is not in India",
				max: "This pincode is not in India",
			},
		},
		submitHandler: function(form) {
			classroomOnFormSubmitProcess(form);
			return false; // required to block normal submit since you used ajax
		}
	});

	//Homepage Form Page Validation
	$("#lam_lead_capture_form").validate({
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
			pincode: {
				required: "Please enter valid pincode",
				min: "This pincode is not in India",
				max: "This pincode is not in India",
			},
		},
		submitHandler: function(form) {
			classroomOnFormSubmitProcess(form);
			return false; // required to block normal submit since you used ajax
		}
	});

	//Franchise Form Validation
	$("#franchise_lead_capture_form").validate({
		
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
			state: {
				required: "Please select State ",
			},
			city: {
				required: "Please select City ",
			},
			occupation: {
				required: "Please select Occupation ",
			},
			invest: {
				required: "Please select Invest ",
			},
		},
		submitHandler: function(form) {
			let formId = $(form).attr('id');
			jQuery("#" + formId + " .checkout_loader").show();
					
			if(`${isEnableOtp}` == 0 && `${isAjaxSubmit}` == 0){
				jQuery("#" + formId + " .submit_classroom_lead_generation_form").prop('disabled', 'disabled');
				form.submit();
			}
		
			if(`${isEnableOtp}` == 1 && `${isAjaxSubmit}` == 0){
				if(jQuery("#" + formId + " .formFieldOtpResponse").val() == ""){
					jQuery("#" + formId + " .submit_classroom_lead_generation_form").prop('disabled', 'disabled');
					sendMobileOtp(formId);
					countDown()
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
					sendMobileOtp(formId);
					countDown()
					return false;
				}
				if(jQuery("#" + formId + " .verify_otp").val() != '' && jQuery("#" + formId + " .formFieldOtpResponse").val() == jQuery("#" + formId + " .verify_otp").val()){
					jQuery("#" + formId + " .submit_classroom_lead_generation_form").prop('disabled', 'disabled');
					franchiseCaptureLead(form,formId);
				} else {
					jQuery("#" + formId + " .response_status").html("OTP is Invalid");
					return false;
				}
			}
			
			if(`${isEnableOtp}` == 0 && `${isAjaxSubmit}` == 1){
				jQuery("#" + formId + " .submit_classroom_lead_generation_form").prop('disabled', 'disabled');
				captureLead(form,formId)
			}
			return false; // required to block normal submit since you used ajax
		}
	});

	jQuery(".state").on("change",function(){
		let state_id = $(this).find(':selected').attr("data-id");
		console.log(state_id);
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$.ajax({
			url: `${globalUrl}get-city-by-state-id`,
			type: "post",
			data: {
				state_id: state_id,
			},
			success: function(result) {
				let htmlContent = '<option value="">Select City</option>';
				$.each(result, function (key, data) {
					htmlContent += '<option value="'+data.name+'"> '+data.name+' </option>';
				});
				$(".city_id").html(htmlContent);  
			}
		});
	});

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
					console.log(result);
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

	function insertLeadRecord(form,formId) {
		$.ajaxSetup({
			headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$.ajax({
			url: `${globalUrl}insert-lead-records`,
			type: "post",
			data: jQuery(form).serialize(),
			success: function(result) {
				console.log(result);
				jQuery("#" + formId + " .lead_id").val(result.id);
				return true;
			}
		});
	}

	function captureLead(form,formId){
		$.ajaxSetup({
			headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$.ajax({
			url: `${globalUrl}capture-lead`,
			type: "post",
			data: jQuery(form).serialize(),
			success: function(result) {
				jQuery("#" + formId + " .form_success").addClass("googleTrackerActive");
				jQuery("#" + formId + " .form_process").hide();
				jQuery("#" + formId + " .form_success").show();
				jQuery("#" + formId)[0].reset()
				downloadBrochure(result);
				return true;
			}
		});
	}

	function franchiseCaptureLead(form,formId){
		$.ajaxSetup({
			headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$.ajax({
			url: `${globalUrl}franchise-capture-lead`,
			type: "post",
			data: jQuery(form).serialize(),
			success: function(result) {
				jQuery("#" + formId + " .form_process").hide();
				jQuery("#" + formId + " .form_success").show();
				jQuery("#" + formId)[0].reset()
				downloadBrochure(result);
				return true;
			}
		});
	}

	jQuery(".course-header-menu").on("mouseenter",function(){
		jQuery(".submenu-courses").show();
	});

	jQuery(".desktop-menu li").on('mouseenter',function(){
		jQuery(".category-courses-submenu").removeClass("active");
		jQuery("#"+jQuery(this).attr("data-id")).addClass("active");
	});

	jQuery(".course-header-menu").on('mouseleave',function(){
		jQuery(".submenu-courses").hide();
	});

	jQuery(".resendOtp").on('click',function(){
		jQuery(this).addClass('display-none');
		jQuery('.countdown_label').removeClass('display-none');
		let form = jQuery(this).closest("form");
		let formId = $(form).attr('id');
		jQuery("#" + formId + " .submit_classroom_lead_generation_form").prop('disabled', 'disabled');
		jQuery("#" + formId + " .checkout_loader").show();
		countDown();
		sendMobileOtp(formId);
	});

	jQuery(".addMoreBtn").on("click",function(){
		let row = jQuery('.'+jQuery(this).attr("data-id")+' .row').first().clone();
		jQuery('.'+jQuery(this).attr("data-id")).append(row);
		console.log("hi");
		console.log(jQuery(this).attr("data-id"));
	});

	jQuery(".question_navigation").on("click",function(){
        let id = jQuery(this).attr("data-id");
        jQuery(".summary-wrap.questionlist").removeClass("active");
        jQuery("#question_"+id).addClass("active");
        jQuery(".question_navigation").removeClass("active");
        jQuery(this).addClass("active");
    });
	


	function classroomOnFormSubmitProcess(form){
		let formId = $(form).attr('id');
		jQuery("#" + formId + " .checkout_loader").show();
				
		if(`${isEnableOtp}` == 0 && `${isAjaxSubmit}` == 0){
			form.submit();
		}
	
		if(`${isEnableOtp}` == 1 && `${isAjaxSubmit}` == 0){
			if(jQuery("#" + formId + " .formFieldOtpResponse").val() == ""){
				sendMobileOtp(formId);
				insertLeadRecord(form,formId);
				countDown()
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
				sendMobileOtp(formId);
				countDown()
				return false;
			}
			if(jQuery("#" + formId + " .verify_otp").val() != '' && jQuery("#" + formId + " .formFieldOtpResponse").val() == jQuery("#" + formId + " .verify_otp").val()){
				$("#" + formId + " .submit_classroom_lead_generation_form").prop('disabled', 'disabled');
				captureLead(form,formId);
			} else {
				jQuery("#" + formId + " .response_status").html("OTP is Invalid");
				return false;
			}
		}

		if(`${isEnableOtp}` == 0 && `${isAjaxSubmit}` == 1){
			console.log("here");
			jQuery("#" + formId + " .submit_classroom_lead_generation_form").prop('disabled', 'disabled');
			captureLead(form,formId)
		}
	}

	function downloadBrochure(fileName){
		var file_path = fileName;
		var a = document.createElement('A');
		a.href = file_path;
		a.download = file_path.substr(file_path.lastIndexOf('/') + 1);
		document.body.appendChild(a);
		a.click();
		document.body.removeChild(a);
	}

	function globalFormSubmitProcess(form){
		let formId = $(form).attr('id');
		jQuery("#" + formId + " .checkout_loader").show();
				
		if(`${isEnableOtp}` == 0 && `${isAjaxSubmit}` == 0){
			form.submit();
		}
	
		if(`${isEnableOtp}` == 1 && `${isAjaxSubmit}` == 0){
			if(jQuery("#" + formId + " .formFieldOtpResponse").val() == ""){
				sendMobileOtp(formId);
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
				sendMobileOtp(formId);
				return false;
			}
			if(jQuery("#" + formId + " .verify_otp").val() != '' && jQuery("#" + formId + " .formFieldOtpResponse").val() == jQuery("#" + formId + " .verify_otp").val()){
				$("#" + formId + " .submit_classroom_lead_generation_form").prop('disabled', 'disabled');
				captureLead(form,formId);
			} else {
				jQuery("#" + formId + " .response_status").html("OTP is Invalid");
				return false;
			}
		}

		if(`${isEnableOtp}` == 0 && `${isAjaxSubmit}` == 1){
			console.log("here");
			jQuery("#" + formId + " .submit_classroom_lead_generation_form").prop('disabled', 'disabled');
			captureLead(form,formId)
		}
	}

	function countDown(){
		var timer2 = "0:59";
		var interval = setInterval(function() {
			var timer = timer2.split(':');
			//by parsing integer, I avoid all extra string processing
			var minutes = parseInt(timer[0], 10);
			var seconds = parseInt(timer[1], 10);
			--seconds;
			minutes = (seconds < 0) ? --minutes : minutes;
			if (minutes < 0) {
				clearInterval(interval)
				jQuery('.countdown_label').addClass("display-none");
				jQuery('.resendOtp').removeClass("display-none");
			};
			seconds = (seconds < 0) ? 59 : seconds;
			seconds = (seconds < 10) ? '0' + seconds : seconds;
			//minutes = (minutes < 10) ?  minutes : minutes;
			jQuery('.countdown').html(minutes + ':' + seconds);
			timer2 = minutes + ':' + seconds;
		}, 1000);
	}

})();

function lead_capture_form_btn(course_id,center_id) {
	jQuery(".lead_steps").removeClass("active");
	jQuery(".lead_steps.step1").addClass("active");
	jQuery('#lead-generation-form').modal('show');
	if (center_id) {
		getCenter(course_id,center_id);
	}
}

function getCenter(course_id,center_id) {
	$.ajaxSetup({
		headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	$.ajax({
		url: `${globalUrl}get-centers`,
		type: "post",
		data: {
			"course_id":course_id,
			"center_id":center_id
		},
		success: function(result) {
			$("#lead_capture_form .center").val(result);
			$("#lead_capture_form .course_id").val(course_id);
		}
	});
}

function gotoPrev(params) {
    $(".summary-wrap.questionlist").removeClass("active");
    $("#question_"+params).addClass("active");
}

function gotoNext(params) {
    $(".summary-wrap.questionlist").removeClass("active");
    $("#question_"+params).addClass("active");
}

var counter = document.getElementById("counter");
var sec         = 1800,
    secpass,
    countDown   = setInterval(function () {
        'use strict';               
        secpass();
    }, 1000);

function secpass() {
    'use strict';
    var min     = Math.floor(sec / 60), remSec  = sec % 60;
    if (remSec < 10) {                        
        remSec = '0' + remSec;                  
    }
    if (min < 10) {                   
        min = '0' + min;              
    }
    $("#counter").html(min + ":" + remSec);
    $("#counterValue").val(min + ":" + remSec);
    if (sec > 0) {                
        sec = sec - 1;              
    } else {             
        clearInterval(countDown);           
        $(".open-city-popup").trigger("click");
    }
}

let screenCount = 1;

jQuery('.init_screen').on("click",function() {	
	jQuery(".welcome_message_wrap").hide();
	jQuery(".form_section.step_"+screenCount).addClass('active'); //form_section
	screenCount++;
})
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

jQuery(".gotoNextStep").on("click",function(){
	console.log("here");
	enqueryFormValidate();
})