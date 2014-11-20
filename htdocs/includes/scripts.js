$( document ).ready(function() {
	//If link points to current page in navigation, add class to it
	$('nav .navigation a').each(function() {
		if (jQuery(this).attr('href')  ===  window.location.pathname) {
			jQuery(this).addClass('current');
		}
	});
});