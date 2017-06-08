(function($) {
	$(window).on('scroll', function(event) {
	    var scrollValue = $(window).scrollTop();
	    if (scrollValue > 70) {
	         $('.navbar').addClass('stuck');
	    } else if (scrollValue < 70) {
	         $('.navbar').removeClass('stuck');
	    }
	});
}(jQuery));