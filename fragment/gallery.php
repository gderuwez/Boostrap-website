<?php
  include('./partials/header.php');
?>
<div class="container">
  <div class="row mt-md-2">
    <div class="col-md-6 mb-2 mb-md-0 zoom">
      <img id="imOne" src="../assets/images/salmon-filet.jpeg" alt="salmon filet" class="img-fluid mb-2">
    </div>
    <div class="col-md-6 mb-2 mb-md-0 zoom">
      <img id="imTwo" src="../assets/images/spinahc-beetroot-salad.jpg" alt="spinach and beetroot salad" class="img-fluid">
    </div>
  </div>

  <div class="row mt-md-2">
   <div class="col-md-6 offset-md-3 zoom">
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

<?php
include('./partials/footer.php');
 ?>
