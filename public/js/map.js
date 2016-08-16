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

var neighborhoods = [{
	lat: 52.511,
	lng: 13.447
}, {
	lat: 52.549,
	lng: 13.422
}, {
	lat: 52.497,
	lng: 13.396
}, {
	lat: 52.517,
	lng: 13.394
}];

var markers = [];
var map;
var show_count = 0;

function initMap() {
	map = new google.maps.Map(document.getElementById('map'), {
		zoom: 12,
		scrollwheel: false,
		center: {
			lat: 52.520,
			lng: 13.410
		}
	});

	drop();
}

function drop() {
	clearMarkers();
	for(var i = 0; i < neighborhoods.length; i++) {
		addMarkerWithTimeout(neighborhoods[i], i * 200);
	}
}

function addMarkerWithTimeout(position, timeout) {
	var show_info = [0];
	window.setTimeout(function() {
		var marker = new google.maps.Marker({
			position: position,
			map: map,
			animation: google.maps.Animation.DROP
		});
		markers.push(marker);

		var contentString = '<div id="content">' +
			'<div id="siteNotice">' +
			'</div>' +
			'<h1 id="firstHeading" class="firstHeading">Uluru</h1>' +
			'<div id="bodyContent">' +
			'<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
			'sandstone rock formation in the southern part of the ' +
			'Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) ' +
			'south west of the nearest large town, Alice Springs; 450&#160;km ' +
			'(280&#160;mi) by road. Kata Tjuta and Uluru are the two major ' +
			'features of the Uluru - Kata Tjuta National Park. Uluru is ' +
			'sacred to the Pitjantjatjara and Yankunytjatjara, the ' +
			'Aboriginal people of the area. It has many springs, waterholes, ' +
			'rock caves and ancient paintings. Uluru is listed as a World ' +
			'Heritage Site.</p>' +
			'<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">' +
			'https://en.wikipedia.org/w/index.php?title=Uluru</a> ' +
			'(last visited June 22, 2009).</p>' +
			'</div>' +
			'</div>';

		var infowindow = new google.maps.InfoWindow({
			content: contentString
		});
		
		if($.inArray( show_count, show_info ) != -1){
			infowindow.open(map, marker);
		}
		
		marker.addListener('click', function() {
			infowindow.open(map, marker);
		});
		
		show_count++;

	}, timeout);

}

function clearMarkers() {
	for(var i = 0; i < markers.length; i++) {
		markers[i].setMap(null);
	}
	markers = [];
}

function toggleBounce() {
	if(marker.getAnimation() !== null) {
		marker.setAnimation(null);
	} else {
		marker.setAnimation(google.maps.Animation.BOUNCE);
	}
}

function geocodeAddress(resultsMap, address) {
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
