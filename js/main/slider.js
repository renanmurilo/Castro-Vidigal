$(document).ready(() => {
    $(".slider").addClass("owl-carousel").owlCarousel({
		loop: true,
		dots: false,
		responsive: {
			0: {
				items: 1,
				nav: false,
			},
			1260: {
				items: 1,
			},
		},
	});

	$(".slider-single").addClass("owl-carousel").owlCarousel({
		loop: false,
		dots: false,
		responsive: {
			0: {
				items: 1,
				nav: false,
				margin: 24,
			},
			1260: {
				items: 3,
				margin: 24,
				autoWidth: 293
			},
		},
	});
	
	$(".slider-obrigado").addClass("owl-carousel").owlCarousel({
		loop: false,
		dots: true,
		nav: true,
		responsive: {
			0: {
				items: 2,
				nav: true,
				dots: false,
				margin: 16,
				autoWidth: 135
			},
			1260: {
				items: 5,
				margin: 28,
			},
		},
	});
})