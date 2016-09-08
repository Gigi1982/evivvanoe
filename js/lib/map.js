
function initMap() {
  var myLatLng = {lat: 45.074494, lng: 7.663522};

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 18,
    center: myLatLng,
      styles: [{
      featureType: 'poi',
      stylers: [{ visibility: 'off' }]  // Turn off points of interest.
    }, {
      featureType: 'transit.station',
      stylers: [{ visibility: 'off' }]  // Turn off bus stations, train stations, etc.
    }],
    disableDoubleClickZoom: true
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Via giuseppe grassi 16'
  });
}