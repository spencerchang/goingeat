//function initMap() {
//	var center = {
//		lat: -25.363,
//		lng: 131.044
//	};
//	
//	var map = new google.maps.Map(document.getElementById('map'), {
//		zoom: 8,
//		center: center
//	});
//	
//	var marker = new google.maps.Marker({
//		map: map,
//		animation: google.maps.Animation.DROP,
//		position: center,
//		title: 'food!',
//		icon: './img/food.png'
//	});
//	
//	marker.addListener('click', function(){
//		toggleBounce(marker);
//	});
//	
//	var myLatLng = {
//		lat: -50.363,
//		lng: 131.044
//	};
//	var marker = new google.maps.Marker({
//		map: map,
//		position: myLatLng,
//		title: 'food!',
//		icon: './img/food.png'
//	});
//		var myLatLng = {
//		lat: -80.363,
//		lng: 131.044
//	};
//	var marker = new google.maps.Marker({
//		map: map,
//		position: myLatLng,
//		title: 'food!',
//		icon: './img/food.png'
//	});
	
//	geocodeAddress(map,address='Sydney, NSW');
//}

var neighborhoods = [
  {lat: 52.511, lng: 13.447},
  {lat: 52.549, lng: 13.422},
  {lat: 52.497, lng: 13.396},
  {lat: 52.517, lng: 13.394}
];

var markers = [];
var map;

function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    zoom: 12,
    scrollwheel: false,
    center: {lat: 52.520, lng: 13.410}
  });
  
  drop();
}

function drop() {
  clearMarkers();
  for (var i = 0; i < neighborhoods.length; i++) {
    addMarkerWithTimeout(neighborhoods[i], i * 200);
  }
}

function addMarkerWithTimeout(position, timeout) {
  window.setTimeout(function() {
    markers.push(new google.maps.Marker({
      position: position,
      map: map,
      animation: google.maps.Animation.DROP
    }));
    
  }, timeout);
  
  
}

function clearMarkers() {
  for (var i = 0; i < markers.length; i++) {
    markers[i].setMap(null);
  }
  markers = [];
}

function toggleBounce() {
  if (marker.getAnimation() !== null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
}

function geocodeAddress(resultsMap,address) {
	var geocoder = new google.maps.Geocoder();
	
	geocoder.geocode({
		'address': address
	}, function(results, status) {
		if(status === google.maps.GeocoderStatus.OK) {
			//console.log(results[0].geometry.location.toJSON());
			resultsMap.setCenter(results[0].geometry.location);
			var marker = new google.maps.Marker({
				map: resultsMap,
				position: results[0].geometry.location,
				title: 'food!',
				icon: './img/food.png'
			});
		} else {
			alert('Geocode was not successful for the following reason: ' + status);
		}
	});
}