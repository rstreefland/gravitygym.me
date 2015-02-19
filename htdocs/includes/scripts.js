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

//Find every element with this class
$('.js-activeOnClick-donate').each( function() {

	//Add a click handler
	$(this).click( function() {

		//Remove class from every other one
		$('.js-activeOnClick-donate').each( function() { $(this).removeClass('button-primary'); } );

		//Add class to the clicked one
		$(this).addClass('button-primary');

		//Find out what the value the user clicked is
		var value = $(this).data('value');

		//Set the link and the text accordingly
		$('.js-setHref-donate').attr('href', './pay/?p=' + value);
		$('.js-setValue-donate').text(' of £' + value);
	})
});
