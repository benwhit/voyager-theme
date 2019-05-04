jQuery(function($){

	// Mobile menu
	$('.mobile-menu-toggle').click(function(){
		$('body').toggleClass('mobile-menu-expanded');
	});
	$('.submenu-expand').click(function(){
		$(this).parent().toggleClass('submenu-active');
	});

});
/**
 * File skip-link-focus-fix.js.
 *
 * Helps with accessibility for keyboard only users.
 *
 * Learn more: https://git.io/vWdr2
 */
( function() {
	var isIe = /(trident|msie)/i.test( navigator.userAgent );

	if ( isIe && document.getElementById && window.addEventListener ) {
		window.addEventListener( 'hashchange', function() {
			var id = location.hash.substring( 1 ),
				element;

			if ( ! ( /^[A-z0-9_-]+$/.test( id ) ) ) {
				return;
			}

			element = document.getElementById( id );

			if ( element ) {
				if ( ! ( /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) ) ) {
					element.tabIndex = -1;
				}

				element.focus();
			}
		}, false );
	}
} )();

jQuery(function($){

	// Smooth Scroll
	function smooth_scroll( hash ) {
		var target = null;

		try {
			target = $( hash );
		} catch( error ) {
			// Perhaps worth adding some error logging here in the future.
			return false;
		}

		target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		if (target.length) {
			var top_offset = 0;
			if ( $('.site-header').css('position') == 'fixed' ) {
				top_offset = $('.site-header').height();
			}
			if( $('body').hasClass('admin-bar') ) {
				top_offset = top_offset + $('#wpadminbar').height();
			}
			 $('html,body').animate({
				 scrollTop: target.offset().top - top_offset
			}, 1000);
			return false;
		}
	}

	// -- Smooth scroll on pageload
	if( window.location.hash ) {
		smooth_scroll( window.location.hash );
	}
	// -- Smooth scroll on click
	$('a[href*="#"]:not([href="#"]):not(.no-scroll)').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') || location.hostname == this.hostname) {
			smooth_scroll( this.hash );
		}
	});

});