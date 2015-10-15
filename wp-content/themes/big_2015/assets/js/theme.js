/**
 * THEME JAVASCRIPT
 */

/**
 * Imports
 * 
 * place all require statements here using relative links
 * or npm module names. jQuery is an example below. both
 * styles of naming conventions are used just in case
 */
global.jQuery = require( '../../../../../bower_components/jquery/dist/jquery.min.js' );
var $ = jQuery;

var owlcar = require('../../../../../bower_components/owlcar/owl-carousel/owl.carousel.js');

// other examples
//var foo = require( './foo.js' );
//var bar = require( 'bar' );

/**
 * Place Your Code Here
 */


$(document).ready(function() {

	// var owl = $(".owl-demo");

	// owl.owlCarousel({

	// items : 3, //10 items above 1000px browser width
	// itemsDesktop : [1000,3], //5 items between 1000px and 901px
	// itemsDesktopSmall : [1024,2], // 3 items betweem 900px and 601px
	// itemsTablet: [980,1], //2 items between 600 and 0;
	// itemsMobile : [600,1] // itemsMobile disabled - inherit from itemsTablet option

	// });

	// Custom Navigation Events
	// $(".next").click(function(){
	// owl.trigger('owl.next');
	// })
	// $(".prev").click(function(){
	// owl.trigger('owl.prev');
	// })
	// $(".play").click(function(){
	// owl.trigger('owl.play',1000);
	// })
	// $(".stop").click(function(){
	// owl.trigger('owl.stop');
	// })
	
	$('.partner__wrap').owlCarousel({
		pagination : false,
		navigation : true,
		navigationText : ["&lsaquo;","&rsaquo;"]
	});
	$('.testimonial__wrap').owlCarousel({
		items : 1,
		itemsMobile : [600,1],
		pagination : true,
		paginationNumbers: false,
		autoHeight : true
	});
	$('.overview-slider').owlCarousel({
		items : 1,
		itemsMobile : [600,1],
		pagination : true,
		paginationNumbers: false,
	});

	$('.contact__dropdown').on('click', function(){
		$('.contact__dropdown--form').toggle();
	});
});