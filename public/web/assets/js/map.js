function initMap() {
    var storeLocation = {lat: YOUR_LATITUDE, lng: YOUR_LONGITUDE};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        center: storeLocation
    });
    var marker = new google.maps.Marker({
        position: storeLocation,
        map: map,
        title: 'Apex Globus'
    });
}
