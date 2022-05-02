// Initialize and add the map
function initMap() {

  $.get("http://api.local/teste-maps/index", function(data){
    const location = new google.maps.LatLng(data.lat, data.lng);
    // The map, centered at location
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 4,
      center: location,
    });
    // The marker, positioned at location
    const marker = new google.maps.Marker({
      position: location,
      map: map,
    });
  });
    
  }