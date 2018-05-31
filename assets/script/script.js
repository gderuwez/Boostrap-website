if ('serviceWorker' in navigator) {
  window.addEventListener('load', function() {
    navigator.serviceWorker.register('projet_boostrap_resto/sw.js').then(function(registration) {
      // Registration was successful
      console.log('ServiceWorker registration successful with scope: ', registration.scope);
    }, function(err) {
      // registration failed :(
      console.log('ServiceWorker registration failed: ', err);
    });
  });
}

 $(window).on('load', function(){
   switch (window.location.pathname) {
     case '/projet_boostrap_resto/fragment/index.php':
       $('#home').addClass('active');
       break;
     case '/projet_boostrap_resto/fragment/Carte.php':
       $('#carte').addClass('active');
       $("body").addClass('wine');
       break;
      case '/projet_boostrap_resto/fragment/gallery.php':
        $('#gallery').addClass('active');
        $("body").addClass('gallery');
        break;
      case '/projet_boostrap_resto/fragment/restaurant.php':
        $('#restaurant').addClass('active');
        break;
      case '/projet_boostrap_resto/fragment/contact.php':
        $('#contact').addClass('active');
        break;
      default: $('#home').addClass('active');
   }
 });

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
