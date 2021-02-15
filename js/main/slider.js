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
})