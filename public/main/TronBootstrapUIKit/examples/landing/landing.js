/*
 * Tron UI Kit
 * Landing Page Template Scripts
 */

$(document).ready(function(e) {
	'use strict';
	
  // Dynamically adding classes to navbar on window scroll
  $(window).scroll( function() {
    if ($(window).scrollTop() > 80) {
        $('.navbar-animated').removeClass('navbar-transparent').addClass('navbar-condensed');
    } else {
        $('.navbar-animated').addClass('navbar-transparent').removeClass('navbar-condensed');
    }
  });

  // Animated scroll on click
	$('.scrollTo').click(function(){
    var offsetTop = $(this).data('offset-top');  
	  $('html, body').stop().animate({
	    scrollTop: $( $(this).attr('href') ).offset().top - offsetTop
	  }, 500);
	  return false;
	});

});// End of Document Ready

