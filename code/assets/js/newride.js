$(document).ready(function(){
  $('select').material_select();
  var defaultBounds = new google.maps.LatLngBounds(
  new google.maps.LatLng(37.3316565, -121.9141247),
  new google.maps.LatLng(37.3772118, -121.9141084));

var input = document.getElementById('pac-input');
var options = {
  bounds: defaultBounds,
  types: ['establishment']
};

autocomplete = new google.maps.places.Autocomplete(input, options);

autocomplete.addListener('place_changed', function() {
  var place = autocomplete.getPlace();
  if (!place.geometry) {
    window.alert("Autocomplete's returned place contains no geometry");
    return;
  }
  var coord = [place.geometry.location.lat(),place.geometry.location.lng()];
  console.log(coord);
});

});
