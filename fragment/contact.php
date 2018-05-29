<?php
  include('./partials/header.php');
?>
<div class="container mt-4">
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
          <label for="select" class="h2">But de votre contact</label>
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
        <button type="submit" name="button" class="btn btn-primary">Submit</button>
      </form>
</div>

<?php
include('./partials/footer.php');
 ?>
