
<!-- working side navigation -->
$('body').scrollspy({
		target: '.tron-docs-sidebar',
		offset: 40
});

$(document).ready(function() {
	
	var menu = $('.tron-docs-sidebar');
	var origOffsetY = menu.offset().top;

	function scroll() {
			if ($(window).scrollTop() >= origOffsetY) {
					menu.addClass('affix');
					menu.removeClass('affix-top');
			} else {
					menu.removeClass('affix');
					menu.addClass('affix-top');
			}

	}

	document.onscroll = scroll;

		function scrollNav() {
	 $('.tron-docs-sidenav a, .back-to-top').click(function(){  
	   $('html, body').stop().animate({
	       scrollTop: $( $(this).attr('href') ).offset().top -15
	   }, 300);
	   return false;
	 });
	}
	scrollNav();

	$('.tron-example .nav a').click(function(e){
		e.preventDefault();
	});

});


//=====================================================================//
//																Examples 														 //
//=====================================================================//

$(document).ready(function(e) {
	'use strict';

	/* Slider Examples
	*******************************************/

	// Basic example
	$('#slider-basic').slider({
		formatter: function(value) {
			return 'Current value: ' + value;
		}
	});

	// Vertical slider
	$('#slider-vertical').slider({
		formatter: function(value) {
			return 'Current value: ' + value;
		}
	});

	// Slider Range
	$("#slider-range").slider();

	// Slider Disabled
	$("#slider-disabled").slider();


	/* Datepicker Examples
	*******************************************/

  // Basic Examples
  $('#datepicker-base').datepicker({
    todayHighlight: true,
    orientation: "top auto"
  });

  // With input addon
  $('#datepicker-addon').datepicker({
    todayHighlight: true,
    orientation: "top auto"
  });

  // Date Range
  $('.input-daterange').datepicker({
    orientation: "top auto"
  });

  // Inline Datepicker
  $('#datepicker-inline').datepicker({
    todayHighlight: true,
    orientation: "top auto"
  });


});// End of Document Ready
