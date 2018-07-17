<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="Description" content="Site de restaurant">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/style/style.css" defer>
  <link rel="manifest" href="../manifest.json">
  <title>Franchise Restaurant</title>
</head>
<?php
include 'menu.php';
 ?>

<main>
  <div class="container-fluid">
    <div class="row mt-md-5 pt-md-5">
      <div class="col-md-4 zoom">
        <img id="imOne" src="../assets/images/salmon-filet.jpeg" alt="salmon filet" class="img-fluid mb-2">
      </div>
      <div class="col-md-4 zoom">
        <img id="imTwo" src="../assets/images/spinahc-beetroot-salad.jpg" alt="spinach and beetroot salad" class="img-fluid">
      </div>
      <div class="col-md-4 zoom">
        <img id="imThree" src="../assets/images/spinach-chicken-pomegranate-salad" alt="spinach chicken pomegranate salad" class="img-fluid">
      </div>
    </div>

    <ul class="pagination justify-content-center mt-4">
      <li class="page-item active" id="pOne"><span class="page-link">1</span></li>
      <li class="page-item" id="pTwo"><span class="page-link">2</span></li>
      <li class="page-item" id="pThree"><span class="page-link">3</span></li>
      <li class="page-item" id="pFour"><span class="page-link">4</span></li>
    </ul>
  </div>
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="../assets/script/script.js"></script>
<script>
$(document).ready(function(){
  $("#pOne").click(function(){
    $("#imOne").attr("src", "../assets/images/salmon-filet.jpeg");
    $("#imTwo").attr("src", "../assets/images/spinahc-beetroot-salad.jpg");
    $("#imThree").attr("src", "../assets/images/spinach-chicken-pomegranate-salad");
    $(this).addClass('active');
    $("#pTwo, #pThree, #pFour").removeClass('active');
  });

  $("#pTwo").on('click', function(){
    console.log("test");
    $("#imOne").attr("src", "../assets/images/fried-vegetables.jpeg");
    $("#imTwo").attr("src", "../assets/images/garlic-shrimp.jpeg");
    $("#imThree").attr("src", "../assets/images/shrimp-ramen.jpeg");
    $(this).addClass('active');
    $("#pOne, #pThree, #pFour").removeClass('active');
  });

  $("#pThree").click(function(){
    $("#imOne").attr("src", "../assets/images/spaghetti.jpg");
    $("#imTwo").attr("src", "../assets/images/steak.jpeg");
    $("#imThree").attr("src", "../assets/images/wines.jpeg");
    $(this).addClass('active');
    $("#pTwo, #pOne, #pFour").removeClass('active');
  });

  $("#pFour").click(function(){
    $("#imOne").attr("src", "../assets/images/blueberry-parfait.jpeg");
    $("#imTwo").attr("src", "../assets/images/chocolate-cake.jpeg");
    $("#imThree").attr("src", "../assets/images/pancakes.jpeg");
    $(this).addClass('active');
    $("#pTwo, #pThree, #pOne").removeClass('active');
  });
});
</script>
</body>
</html>
