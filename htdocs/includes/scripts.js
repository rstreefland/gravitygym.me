$(document).ready(function() {
	$('.fade').each(function(i) {
		$(this).delay(i++*1000).css({"opacity": "1"});;
	});

	$('.slider').slick({
		speed: 1000,
		autoplay: true,
		autoplaySpeed: 3000,
		slide: 'img',
		cssEase: 'ease-in-out',
		fade: true,
		arrows: false
	});
});