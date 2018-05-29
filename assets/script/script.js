 $(window).on('load', function(){
   switch (window.location.pathname) {
     case '/projet_boostrap_resto/fragment/index.php':
       $('#home').addClass('active');
       break;
     default: $('#home').addClass('active');
     case '/projet_boostrap_resto/fragment/Carte.php':
       $('#menu').addClass('active');
       break;
      case '/projet_boostrap_resto/fragment/gallery.php':
        $('#gallery').addClass('active');
        break;
      case '/projet_boostrap_resto/fragment/restaurant.php':
        $('#restaurant').addClass('active');
        break;
      case '/projet_boostrap_resto/fragment/contact.php':
        $('#contact').addClass('active');
        break;
   }
 });

$("#pOne").click(function(){
  $("#imOne").attr("src", "../assets/images/salmon-filet.jpeg");
  $("#imTwo").attr("src", "../assets/images/spinahc-beetroot-salad.jpg");
  $("#imThree").attr("src", "../assets/images/spinach-chicken-pomegranate-salad");
  $(this).addClass('active');
});

$("#pTwo").click(function(){
  $("#imOne").attr("src", "../assets/images/fried-vegetables.jpeg");
  $("#imTwo").attr("src", "../assets/images/garlic-shrimp.jpeg");
  $("#imThree").attr("src", "../assets/images/shrimp-ramen.jpeg");
  $(this).addClass('active');
});

$("#pThree").click(function(){
  $("#imOne").attr("src", "../assets/images/spaghetti.jpg");
  $("#imTwo").attr("src", "../assets/images/steak.jpeg");
  $("#imThree").attr("src", "../assets/images/wines.jpeg");
  $(this).addClass('active');
});

$("#pFour").click(function(){
  $("#imOne").attr("src", "../assets/images/blueberry-parfait.jpeg");
  $("#imTwo").attr("src", "../assets/images/chocolate-cake.jpeg");
  $("#imThree").attr("src", "../assets/images/pancakes.jpeg");
  $(this).addClass('active');
});
