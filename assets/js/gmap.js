/*
* Custom Google Maps.
*/
function initMap() {
		// Styles a map in night mode.
		var map = new google.maps.Map(document.getElementById('map'), {
			center: {lat: 38.168414, lng: -77.461421},
			zoom: 10,
			disableDefaultUI: true,
			styles: [
			{
				"elementType": "geometry",
				"stylers": [
				{
					"color": "#b4c8d6"
				}
				]
			},
			{
				"elementType": "labels.icon",
				"stylers": [
				{
					"visibility": "off"
				}
				]
			},
			{
				"elementType": "labels.text.fill",
				"stylers": [
				{
					"color": "#FFFFFF"
				}
				]
			},
			{
				"elementType": "labels.text.stroke",
				"stylers": [
				{
					"color": "#FFFFFF"
				}
				]
			},
			{
				"featureType": "administrative",
				"elementType": "geometry",
				"stylers": [
				{
					"color": "#757575"
				}
				]
			},
			{
				"featureType": "administrative.country",
				"elementType": "labels.text.fill",
				"stylers": [
				{
					"color": "#9e9e9e"
				}
				]
			},
			{
				"featureType": "administrative.land_parcel",
				"stylers": [
				{
					"visibility": "on"
				}
				]
			},
			{
				"featureType": "administrative.locality",
				"elementType": "labels.text.fill",
				"stylers": [
				{
					"color": "#010d87"
				}
				]
			},
			{
				"featureType": "poi",
				"elementType": "labels.text.fill",
				"stylers": [
				{
					"color": "#757575"
				}
				]
			},
			{
				"featureType": "poi.park",
				"elementType": "geometry",
				"stylers": [
				{
					"color": "#999999"
				}
				]
			},
			{
				"featureType": "poi.park",
				"elementType": "labels.text.fill",
				"stylers": [
				{
					"color": "#0446da"
				}
				]
			},
			{
				"featureType": "poi.park",
				"elementType": "labels.text.stroke",
				"stylers": [
				{
					"color": "#FFFFFF"
				}
				]
			},
			{
				"featureType": "road",
				"elementType": "geometry.fill",
				"stylers": [
				{
					"color": "#0446da"
				}
				]
			},
			{
				"featureType": "road",
				"elementType": "labels.text.fill",
				"stylers": [
				{
					"color": "#0446da"
				}
				]
			},
			{
				"featureType": "road.arterial",
				"elementType": "geometry",
				"stylers": [
				{
					"color": "#373737"
				}
				]
			},
			{
				"featureType": "road.highway",
				"elementType": "geometry",
				"stylers": [
				{
					"color": "#3c3c3c"
				}
				]
			},
			{
				"featureType": "road.highway.controlled_access",
				"elementType": "geometry",
				"stylers": [
				{
					"color": "#4e4e4e"
				}
				]
			},
			{
				"featureType": "road.local",
				"elementType": "labels.text.fill",
				"stylers": [
				{
					"color": "#FFDF00"
				},
				{
					"visibility": "on"
				}
				]
			},
			{
				"featureType": "transit",
				"elementType": "labels.text.fill",
				"stylers": [
				{
					"color": "#0446da"
				}
				]
			},
			{
				"featureType": "water",
				"elementType": "geometry",
				"stylers": [
				{
					"color": "#0446da"
				}
				]
			},
			{
				"featureType": "water",
				"elementType": "labels.text.fill",
				"stylers": [
				{
					"color": "#b4c8d6"
				}
				]
			}
			]
		});

		var pin ='./wp-content/themes/voyager-theme/assets/images/pin.svg';
		var marker = {
			url: pin,
		}

		var marker = new google.maps.Marker({
			position: map.getCenter(),
			origin: new google.maps.Point(0,0),
			icon: pin,
			map: map
		});
	}