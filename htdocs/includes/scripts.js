$( document ).ready(function() {
	//If link points to current page in navigation, add class to it
	$('nav .navigation a').each(function() {
		if (jQuery(this).attr('href')  ===  window.location.pathname) {
			jQuery(this).addClass('current');
		}
	});

	//Run sliders
/*	$('#firstinfo .slider').slick({
		speed: 2000,
		autoplay: true,
		autoplaySpeed: 3000,
		slide: '.slider > .slide',
		fade: true,
		cssEase: 'ease-in-out',
		arrows: false,
		dots: false,
		draggable: false,
		swipe: false
	}); */

	//Masonry when images have loaded
	var $container = $('.masonry-container');
	$container.imagesLoaded( function() {
		$container.masonry({
			itemSelector: '.masonry-item'
		});
		$container.addClass('loaded');
	});
});
