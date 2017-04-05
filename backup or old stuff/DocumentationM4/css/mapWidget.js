function initMap() {
	var uluru = {lat: 49.2484593, lng: -123.0034012};
	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 15,
		center: uluru
	});
	var marker = new google.maps.Marker({
		position: uluru,
		map: map
	});
}