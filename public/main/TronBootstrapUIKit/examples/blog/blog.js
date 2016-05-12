/*
 * Tron UI Kit
 * Blog Page Template Scripts
 */

$(document).ready(function(e) {
	'use strict';
	
  // Dynamically adding classes to navbar on window scroll
  $(window).scroll( function() {
    if ($(window).scrollTop() > 80) {
        $('.navbar-animated').addClass('navbar-condensed');
    } else {
        $('.navbar-animated').removeClass('navbar-condensed');
    }
  });

});// End of Document Ready

