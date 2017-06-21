// requires: jquery-3.2.1.min.js

(function($) {	
	
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

	// News Template Filtering
	var $grid = $('.grid').isotope({
  	// options
	  itemSelector: '.grid__item',
	  layoutMode: 'fitRows',
	  filter: '.category-one'
	});

	// filter functions
	var filterFns = {
	};

	// bind filter button click
	$('#filters').on( 'click', 'button', function() {
	  var filterValue = $( this ).attr('data-filter');
	  // use filterFn if matches value
	  filterValue = filterValue;
	  $grid.isotope({ filter: filterValue });
	});

	// change is-checked class on buttons
	$('.button-group').each( function( i, buttonGroup ) {
	  var $buttonGroup = $( buttonGroup );
	  $buttonGroup.on( 'click', 'button', function() {
	    $buttonGroup.find('.is-checked').removeClass('is-checked');
	    $( this ).addClass('is-checked');
	  });
	});

}(jQuery));