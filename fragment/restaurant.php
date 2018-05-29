<?php
  include('./partials/header.php');
?>
<div class="container mt-2">
  <div class="row">
    <div class="col-md-7">
      <div id="map1" style="width:100%;height:400px;"></div>
    </div>
    <div class="col-md-5">
      <h1>Restaurant 1</h1>
      125 completely made up <br> 7090 Fictionville.
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <h3>Heures d'ouvertures</h3>
      Lundi-vendredi: 10h00 - 21h00 <br>
      Samedi & dimanche : 10 - 22h00
    </div>
    <div class="col-md-8">
      lorem ipsum
    </div>
  </div>
  <div class="row">
    <div class="col-md-7">
      <div id="map2" style="width:100%;height:400px;"></div>
    </div>
    <div class="col-md-5">
      <h1>Restaurant 1</h1>
      125 completely made up <br> 7090 Fictionville.
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <h3>Heures d'ouvertures</h3>
      Lundi-vendredi: 10h00 - 21h00 <br>
      Samedi & dimanche : 10 - 22h00
    </div>
    <div class="col-md-8">
      lorem ipsum
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
