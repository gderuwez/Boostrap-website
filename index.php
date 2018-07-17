<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="Description" content="Site de restaurant">
  <meta name="theme-color" content="#317EFB"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/style/style.css">
  <link rel="manifest" href="./manifest.json">
  <title>Franchise Restaurant</title>
</head>
<?php
include './fragment/menu.php'
 ?>

  <div class="jumbotron jumbotron-fluid mt-5" id="imageTest">
    <div class="container resto-heading-cont">
      <div class="row align-items-center text-center resto-heading-padding">
        <div class="col-12">
          <h1 class="text-white resto-heading">Welcome to L'étoile</h1>
          <h5 class="text-light">Come and eat with the stars</h3>
        </div>
      </div>
    </div>
  </div>
  <main>
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header bg-wood">
                <h3>Opening of a new restaurant in Brussels</h3>
              </div>
              <div class="card-body">
                <p>A new restaurant in our franchise opened this weekend at Brussels.
                Helmed by the renowned chef Arthur Dent this restaurant will offer all the
                services that our clientele has grown used to in the comfort of the
                capital.</p>
              </div>
            </div>
            <div class="card">
              <div class="card-header bg-wood">
                <h3>New dish</h3>
              </div>
              <div class="card-body">
                <p>To celebrate the opening of our new restaurant in Brussels, a brand new
                dish is being introduced. The dish, composed of delicately cooked shrimp in
                a soft miso flavoured sauce accompanying freshly baked noodles will
                naturally evoke the subtle fragrance of the orient.</p>
              </div>
            </div>
            <div class="card">
              <div class="card-header bg-wood">
                <h3>Lorem ipsum</h3>
              </div>
              <div class="card-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vehicula sem ac
                ultricies iaculis. Vestibulum condimentum velit ut dapibus tincidunt. In hac
                habitasse platea dictumst. Nulla placerat gravida sagittis. Nullam posuere
                malesuada nunc et interdum. Vestibulum varius dui lacus, quis tristique sapien
                consequat vel. Quisque fermentum ex et bibendum cursus. Proin eu suscipit
                nunc.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-header bg-wood">
                <h3>Promotions</h3>
              </div>
              <div class="card-body">
                <p>10% discount to the first 100 clients to visit our new restaurant in Brussels</p>
                <p>Half price on the wine selection this weekend</p>
                <p>another promotion for which I cannot think of a content right renowned</p>
                <p>And a fourth one for good measure</p>
              </div>
            </div>
          </div>
      </div>
    </div>
  </main>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <script src="./assets/script/script.js"></script>
</body>
</html>
