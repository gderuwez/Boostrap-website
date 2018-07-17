<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="Description" content="Site de restaurant">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/style/style.css" defer>
  <link href="https://fonts.googleapis.com/css?family=Pinyon+Script" rel="stylesheet">
  <link rel="manifest" href="../manifest.json">
  <title>Franchise Restaurant</title>
</head>
<?php
include 'menu.php';
 ?>

<main>
  <div class="container-fluid mt-2 mt-5 pt-3">
    <div class="card">
      <div class="card-header bg-wood">
        <div class="col-12 text-center">
          <h1>Delicious menu</h1>
          <div class="row justify-content-center">
            <div class="col-md-7">
              <p>Our menu is design to transport your sense to the furthest reaches of taste and appreciation.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body bg-light">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <a class="font-cursive h1 col-12 text-center" href="#entrance" data-toggle="collapse">Entrance</a>
            </div>
            <div class="row">
              <ul id="entrance" class="list-group collapse col-12">
                <li class="list-group-item border-0">Lorem Ipsum<span class="badge badge-light float-right">10</span></li>
                <li class="list-group-item border-0">Lorem Ipsum<span class="badge badge-light float-right">20</span></li>
                <li class="list-group-item border-0">Lorem Ipsum<span class="badge badge-light float-right">15</span></li>
                <li class="list-group-item border-0">Lorem Ipsum<span class="badge badge-light float-right">25</span></li>
              </ul>
            </div>
            <div class="row">
              <a class="font-cursive mt-3 h1 col-12 text-center" href="#main" data-toggle="collapse">Main courses</a>
            </div>
            <div class="row">
              <ul class="list-group collapse col-12" id="main">
                <li class="list-group-item border-0">Lorem Ipsum<span class="badge badge-light float-right">30</span></li>
                <li class="list-group-item border-0">Lorem Ipsum<span class="badge badge-light float-right">45</span></li>
                <li class="list-group-item border-0">Lorem Ipsum<span class="badge badge-light float-right">40</span></li>
                <li class="list-group-item border-0">Lorem Ipsum<span class="badge badge-light float-right">38</span></li>
              </ul>
            </div>

            <div class="row">
              <a class="font-cursive mt-3 h1 col-12 text-center" href="#desserts" data-toggle="collapse">Desserts</a>
            </div>
            <div class="row">
              <ul class="list-group collapse col-12" id="desserts">
                <li class="list-group-item border-0">Lorem Ipsum<span class="badge badge-light float-right">8</span></li>
                <li class="list-group-item border-0">Lorem Ipsum<span class="badge badge-light float-right">12</span></li>
                <li class="list-group-item border-0">Lorem Ipsum<span class="badge badge-light float-right">9</span></li>
                <li class="list-group-item border-0">Lorem Ipsum<span class="badge badge-light float-right">15</span></li>
              </ul>
            </div>
          </div>

          <div class="col-md-6">
            <div class="row">
              <a class="font-cursive mt-md-0 mt-3 h1 col-12 text-center" href="#snacks" data-toggle="collapse">Snacks</a>
            </div>
            <div class="row">
              <ul class="list-group collapse col-12" id="snacks">
                <li class="list-group-item border-0">Lorem Ipsum<span class="badge badge-light float-right">3</span></li>
                <li class="list-group-item border-0">Lorem Ipsum<span class="badge badge-light float-right">2</span></li>
                <li class="list-group-item border-0">Lorem Ipsum<span class="badge badge-light float-right">2.5</span></li>
                <li class="list-group-item border-0">Lorem Ipsum<span class="badge badge-light float-right">1.45</span></li>
              </ul>
            </div>

            <div class="row">
              <a class="font-cursive mt-3 h1 col-12 text-center" href="#drinks" data-toggle="collapse">Drinks</a>
            </div>
            <div class="row">
              <ul class="list-group collapse col-12" id="drinks">
                <li class="list-group-item border-0">Lorem Ipsum<span class="badge badge-light float-right">2</span></li>
                <li class="list-group-item border-0">Lorem Ipsum<span class="badge badge-light float-right">2.3</span></li>
                <li class="list-group-item border-0">Lorem Ipsum<span class="badge badge-light float-right">3</span></li>
                <li class="list-group-item border-0">Lorem Ipsum<span class="badge badge-light float-right">1.7</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="../assets/script/script.js"></script>

</body>
</html>
