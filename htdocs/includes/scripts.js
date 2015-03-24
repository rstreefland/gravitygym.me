$( document ).ready(function() {
	//If link points to current page in navigation, add class to it
	$('nav .navigation a').each(function() {
		if (jQuery(this).attr('href')  ===  window.location.pathname) {
			jQuery(this).addClass('current');
		}
	});

	//Run sliders
	$('.gallery-list.slider').slick({
		speed: 2000,
		autoplay: true,
		autoplaySpeed: 3000,
		slide: '.slider > .slide',
		cssEase: 'ease-in-out',
		arrows: false,
		slidesToShow: 3,
		dots: false,
		draggable: false,
		swipe: false,
		centerMode: true,
		centerPadding: '60px'
	});

	//Masonry when images have loaded
	var $container = $('.masonry-container');
	$container.imagesLoaded( function() {
		$container.masonry({
			itemSelector: '.masonry-item'
		});
		$container.addClass('loaded');
	});

});

$(window).load(function() {
	$('.parallax-1').parallax({
		imageSrc: '/images/block-bg/1.jpg',
		positionY: '400px'
	}).resize();
	$('.parallax-5').parallax({imageSrc: '/images/block-bg/5.jpg'});


	  // place this within dom ready function
	// function fixParallax() {
	// 	$(window).trigger('resize');
	// }
	setTimeout(function() {
		$(window).trigger('resize')
	}, 10000)
});

$(function() {
	var pull 		= $('#pull');
	menu 		= $('nav .mobnavigation');
	menuHeight	= menu.height();

	$(pull).on('click', function(e) {
		e.preventDefault();
		menu.slideToggle();
	});

	$(window).resize(function(){
		var w = $(window).width();
		if(w > 768 && menu.is(':hidden')) {
			menu.removeAttr('style');
		}
	});
});
