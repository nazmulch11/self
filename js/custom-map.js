(function ($) {
   "use strict";

jQuery(document).ready(function(){


	function initialize() {
			  var mapOptions = {
				zoom: 15,
				scrollwheel: false,
				center: new google.maps.LatLng(23.81033, 90.41252)
			  };

			  var map = new google.maps.Map(document.getElementById('googleMap'),
				  mapOptions);


			  var marker = new google.maps.Marker({
				position: map.getCenter(),
				animation:google.maps.Animation.BOUNCE,
				icon: 'img/logo/map-marker.png',
				map: map
			  });

			}

			google.maps.event.addDomListener(window, 'load', initialize);
});




})(jQuery); 