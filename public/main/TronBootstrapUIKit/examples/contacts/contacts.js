/*
 * Tron UI Kit
 * Contacts Page Template Scripts
 */

$(document).ready(function(e) {
	'use strict';
	
  ///////////////////////////////////////////////////////////////////////
  /////////////////////////  Google Maps  //////////////////////////////
  //////////////////////////////////////////////////////////////////////
  var geocoder;
  var map;
  var query = $('.google-map').data('location');
  var zoom = $('.google-map').data('zoom');
  
  function initialize() {
    
    geocoder = new google.maps.Geocoder();
    var latlng = new google.maps.LatLng(-34.397, 150.644);
    
      var mapOptions = {
        center: latlng,
        zoom: zoom,
        
        disableDefaultUI: true,
        styles: [{"featureType":"landscape","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"stylers":[{"hue":"#00aaff"},{"saturation":-100},{"gamma":2.15},{"lightness":12}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"lightness":24}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":57}]}]
      };
      
      map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
      
      codeAddress();
  }
  
  function codeAddress() {
    var image = 'img/map-marker.png';
    var address = query;
    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        map.setCenter(results[0].geometry.location);
        var marker = new google.maps.Marker({
            map: map,
            position: results[0].geometry.location,
            icon: image,
            title: 'My Tron Office'
        });
      } else {
        alert('Geocode was not successful for the following reason: ' + status);
      }
    });
  }
  
  if($('#map-canvas').length > 0) {
    google.maps.event.addDomListener(window, 'load', initialize);
  }
  

});// End of Document Ready

