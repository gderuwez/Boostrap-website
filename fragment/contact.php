<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="Description" content="Site de restaurant">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/style/style.css" defer>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="manifest" href="../manifest.json">
  <title>Franchise Restaurant</title>
</head>
<?php
include 'menu.php';
 ?>
<main>
  <div class="container-fluid mt-5 pt-4 bg-grey">
        <form action="index.html" method="post">
          <div class="form-group">
            <label for="Nom" class="h2">Nom</label>
            <input type="text" class="form-control" id="Name" placeholder="Name" name="name">
          </div>
          <div class="form-group">
            <label for="Prenom" class="h2">Prénom</label>
            <input type="text" class="form-control" id="FirstName" placeholder="First name" name="firstName">
          </div>
          <div class="form-group">
            <label for="email" class="h2">email</label>
            <input type="text" class="form-control" id="email" placeholder="eMail" name="email">
          </div>
          <div class="form-group">
            <label for="select" class="h2" data-toggle="tooltip" title="Select the reason for contacting us">But de votre contact</label>
            <select class="form-control" name="select1">
              <option>Reservation</option>
              <option>Commandation</option>
              <option>Inquiries</option>
              <option>complaints</option>
            </select>
          </div>
          <div class="form-group">
            <textarea name="select2" rows="8" cols="50"></textarea>
          </div>
          <i class="far fa-envelope-open"></i>
          <button type="submit" name="button" class="btn btn-primary">Submit</button>
        </form>
  </div>
</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="../assets/script/script.js"></script>

</body>
</html>
