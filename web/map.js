function initMap() {
  var térkép = new google.maps.Map(document.getElementById('térkép'), {
    center: {lat: 47.4979, lng: 19.0402}, // Budapest koordinátái
    zoom: 12
  });
}