<?php
  include('./partials/header.php');
?>
<div class="container-fluid">
  <div class="row mt-md-2">
    <div class="col-md-4 offset-md-1 mb-2 mb-md-0">
      <img id="imOne" src="../assets/images/salmon-filet.jpeg" alt="salmon filet" class="img-fluid mb-2">
    </div>
    <div class="col-md-4 offset-md-2 mb-2 mb-md-0">
      <img id="imTwo" src="../assets/images/spinahc-beetroot-salad.jpg" alt="spinach and beetroot salad" class="img-fluid">
    </div>
  </div>

  <div class="row mt-md-2">
   <div class="col-md-4 offset-md-4">
     <img id="imThree" src="../assets/images/spinach-chicken-pomegranate-salad" alt="spinach chicken pomegranate salad" class="img-fluid">
   </div>
  </div>

  <ul class="pagination justify-content-center mt-4">
    <li class="page-item" id="pOne"><a class="page-link" href=>1</a></li>
    <li class="page-item" id="pTwo"><a class="page-link" href=>2</a></li>
    <li class="page-item" id="pThree"><a class="page-link" href=>3</a></li>
    <li class="page-item" id="pFour"><a class="page-link" href=>4</a></li>
  </ul>
</div>

<?php
include('./partials/footer.php');
 ?>
