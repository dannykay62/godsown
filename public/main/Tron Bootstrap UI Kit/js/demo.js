/*
 * Tron UI Kit v1.0
 * Copyright 2014 8Guild.com
 * Scripts for Tron Demo Pages
 */

$(document).ready(function(e) {
	'use strict';
	
  // Dynamically adding classes to navbar on window scroll
  $(window).scroll( function() {
    if ($(window).scrollTop() > 80) {
        $('.tron-nav-demo-home').removeClass('navbar-transparent').addClass('navbar-condensed');
    } else {
        $('.tron-nav-demo-home').addClass('navbar-transparent').removeClass('navbar-condensed');
    }
  });
  $(window).scroll( function() {
    if ($(window).scrollTop() > 80) {
        $('.tron-nav-demo-page').addClass('navbar-condensed');
    } else {
        $('.tron-nav-demo-page').removeClass('navbar-condensed');
    }
  });

  // Animated scroll on click
	$('.scrollTo').click(function(){  
    var offsetTop = $(this).data('offset-top');
	  $('html, body').stop().animate({
	    scrollTop: $( $(this).attr('href') ).offset().top - offsetTop
	  }, 700);
	  return false;
	});


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

