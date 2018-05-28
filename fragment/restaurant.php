<?php
  include('./partials/header.php');
?>
<div class="container">
  <div class="col-md-5 col-md-offset-1">
    <h2>Restaurant 1</h2>
    125 completely made up 7090 Fictionville.
    <h3>Heures d'ouvertures</h3>
    <p>Lundi-vendredi: 10h00 - 21h00</p>
    <p>Samedi & dimanche : 10 - 22h00</p>
    <div id="map1" style="width:100%;height:400px;"></div>
  </div>
  <div class="col-md-5">
    <h2>Restaurant 2</h2>
    125 completely made up 7090 Fictionville.
    <h3>Heures d'ouvertures</h3>
    <p>Lundi-vendredi: 10h00 - 21h00</p>
    <p>Samedi & dimanche : 10 - 22h00</p>
    <div id="map2" style="width:100%;height:400px;"></div>
  </div>
</div>

<script>
function myMap1() {
var mapOptions = {
    center: new google.maps.LatLng(51.5, -0.12),
    zoom: 10,
    mapTypeId: google.maps.MapTypeId.ROADMAP
}
var mapOptions2 = {
    center: new google.maps.LatLng(51.5, -0.12),
    zoom: 15,
    mapTypeId: google.maps.MapTypeId.ROADMAP
}
var map1 = new google.maps.Map(document.getElementById("map1"), mapOptions);
var map2 = new google.maps.Map(document.getElementById("map2"), mapOptions2);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIfsWigwqjRG4SL9NbUknHQJpgTLikHvI&callback=myMap1"></script>


<?php
include('./partials/footer.php');
 ?>
