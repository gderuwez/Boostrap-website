<?php
  include('./partials/header.php');
?>
<div class="container">
  <div class=" col-xs-12 mT70"></div>
  <form action="index.html" method="post">
    <div class="form-group">
      <label for="Nom">Nom</label>
      <input type="text" class="form-control" id="Name" placeholder="Name" name="name">
      <label for="Prenom">Prénom</label>
      <input type="text" class="form-control" id="FirstName" placeholder="First name" name="firstName">
      <label for="email">email</label>
      <input type="text" class="form-control" id="email" placeholder="eMail" name="email">
      <label for="select">But de votre contact</label>
      <select class="form-control" name="select1">
        <option>Reservation</option>
        <option>Commandation</option>
        <option>Inquiries</option>
        <option>complaints</option>
      </select>
      <textarea name="select2" rows="8" cols="50"></textarea>
      <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <button type="submit" name="button">Submit</button>
      </div>
    </div>
  </form>
</div>

<?php
include('./partials/footer.php');
 ?>
