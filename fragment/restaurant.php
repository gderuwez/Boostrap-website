<?php
  include('./partials/header.php');
?>
<main>
  <div class="container mt-5 pt-4">
    <div class="row">
      <div class="col-md-7 col-lg-5">
        <div class="mx-auto" id="map1"></div>
      </div>
      <div class="col-md-5">
        <div class="card">
          <div class="card-header"><h1>Restaurant 1</h1></div>
          <div class="card-body">125 completely made up <br> 7090 Fictionville.</div>
        </div>
      </div>
    </div>
    <div class="row mt-2">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h3>Heures d'ouvertures</h3>
            Lundi-vendredi: 10h00 - 21h00 <br>
            Samedi & dimanche : 10 - 22h00
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">lorem ipsum</div>
        </div>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-md-5">
        <div class="mx-auto" id="map2"></div>
      </div>
      <div class="col-md-5">
        <div class="card">
          <div class="card-header">
            <h1>Restaurant 2</h1>
          </div>
          <div class="card-body">
            125 completely made up <br> 7090 Fictionville.
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-2">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h3>Heures d'ouvertures</h3>
            Lundi-vendredi: 10h00 - 21h00 <br>
            Samedi & dimanche : 10 - 22h00
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            lorem ipsum
          </div>
        </div>
      </div>
    </div>

    <script>
    function myMap() {
      var myCenter = new google.maps.LatLng(51.508742,-0.120850);
      var mapCanvas = document.getElementById("map1");
      var mapOptions = {center: myCenter, zoom: 15};
      var map = new google.maps.Map(mapCanvas, mapOptions);
      var marker = new google.maps.Marker({position:myCenter});
      marker.setMap(map);

      var myCenter2 = new google.maps.LatLng(47.508742,-0.120850);
      var mapCanvas2 = document.getElementById("map2");
      var mapOptions2 = {center: myCenter2, zoom: 15};
      var map2 = new google.maps.Map(mapCanvas2, mapOptions2);
      var marker2 = new google.maps.Marker({position:myCenter2});
      marker2.setMap(map2);
    }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIfsWigwqjRG4SL9NbUknHQJpgTLikHvI&callback=myMap"></script>
</main>

<?php
include('./partials/footer.php');
 ?>
