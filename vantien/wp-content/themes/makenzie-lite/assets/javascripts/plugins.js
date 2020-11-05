"use strict";

/**
 * File plugins.js.
 */
( function( $ ) {

	var autoplay1 = $('#slider-1').data('autoplay');
	if (autoplay1 > 0) {
		var autoState1 = true;
	} else {
		var autoState1 = false;
	}

	$('#slider-1 .slider-content')
	.on('init', function(slick) {
	$('#slider-1 .slider-content').fadeTo( 600 , 1, function() {
	});
	})
	.slick({
		arrows: true,
		dots: false,
		fade: true,
		autoplay: autoState1,
 		autoplaySpeed: autoplay1,
		adaptiveHeight: true,
		mobileFirst: true,
		cssEase: 'linear'
	});

	$('#slider-2 .slider-content')
	.on('init', function(slick) {
	$('#slider-2 .slider-content').fadeTo( 600 , 1, function() {
	// animation complete.
	});
	})

	var autoplay2 = $('#slider-2').data('autoplay');
	if (autoplay2 > 0) {
		var autoState2 = true;
	} else {
		var autoState2 = false;
	}

	$('#slider-2 .slider-content').slick({
	infinite: true,
	adaptiveHeight: true,
	slidesToShow: 3,
	slidesToScroll: 3,
	arrows: false,
	autoplay: autoState2,
	autoplaySpeed: autoplay2,
	dots: true,
	  responsive: [
	{
	  breakpoint: 1300,
	  settings: {
		slidesToShow: 2,
		slidesToScroll: 1,
		infinite: true
	  }
	},
	{
	  breakpoint: 950,
	  settings: {
		slidesToShow: 1,
		slidesToScroll: 1
	  }
	}
	// You can unslick at a given breakpoint now by adding:
	// settings: "unslick"
	// instead of a settings object
  ]
});

	// Wrap centered images in a new figure element

	$('img.aligncenter').wrap('<figure class="centered-image"></figure>');

	// Toggle visibility for the search form

	var $searchform = $('.site-header .search-form');

	$('.search-toggle').click(function() {
		$(this).toggleClass('search-toggle-active');
		$('.custom-logo-link, .site-title').toggleClass('hide-logo');
		if($($searchform).css('opacity') == 0) {
		    $($searchform).fadeTo( 400 , 1, function() {
		$('.site-header .search-form input').focus();
		});
		} else {
			 $($searchform).fadeTo( 400 , 0, function() {
			 	 $($searchform).css("display", "none");
		});
		}
	});

} )( jQuery );