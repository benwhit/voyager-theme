(function($) {

	// Sticky Navbar
	$(window).on('load', function(event) {
	    var scrollValue = $(window).scrollTop();
	    if (scrollValue > 70) {
	         $('.navbar').addClass('stuck');
	    }
	});
	$(window).on('scroll', function(event) {
		var scrollValue = $(window).scrollTop();
	    if (scrollValue > 70) {
	         $('.navbar').addClass('stuck');
	    } else if (scrollValue < 70) {
	         $('.navbar').removeClass('stuck');
	    }
	});

	// Overlay Menu
	$(".navbar__button").click(function(){
	   $(".overlay").toggleClass('open');
	   $(this).toggleClass('js-menu-close');
	});

	// Posts Carousel
	$('.post-carousel').owlCarousel({
    loop:true,
    margin:10,
    dots: false,
    responsiveClass:true,
    responsive:{
      0:{
          items:1,
          nav:true
      },
      600:{
          items:3,
          nav:false
      },
      1000:{
          items:4,
          nav:true,
          loop:false
      }
	  },
	  navText : ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"]
	});

}(jQuery));