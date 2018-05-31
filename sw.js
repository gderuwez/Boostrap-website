self.addEventListener('install', function(event) {
  event.waitUntil(
    caches.open('v1').then(function(cache) {
      return cache.addAll([
        '/',
        '/projet_boostrap_resto/',
        '/projet_boostrap_resto/fragment/',
        '/projet_boostrap_resto/assets/',
        '/projet_boostrap_resto/assets/style/',
        '/projet_boostrap_resto/assets/script/',
        '/projet_boostrap_resto/assets/images/',
        '/projet_boostrap_resto/fragment/index.php',
        '/projet_boostrap_resto/fragment/Carte.php',
        '/projet_boostrap_resto/fragment/contact.php',
        '/projet_boostrap_resto/fragment/gallery.php',
        '/projet_boostrap_resto/fragment/restaurant.php',
        '/projet_boostrap_resto/assets/style/style.css',
        '/projet_boostrap_resto/assets/script/script.min.js',
        '/projet_boostrap_resto/assets/images/blueberry-parfait.jpeg',
        '/projet_boostrap_resto/assets/images/chocolate-cake.jpeg',
        '/projet_boostrap_resto/assets/images/fried-vegetables.jpeg',
        '/projet_boostrap_resto/assets/images/gallery.jpg',
        '/projet_boostrap_resto/assets/images/garlic-shrimp.jpeg',
        '/projet_boostrap_resto/assets/images/green-celtic-vine-hi.png',
        '/projet_boostrap_resto/assets/images/menu.jpeg',
        '/projet_boostrap_resto/assets/images/pancakes.jpeg',
        '/projet_boostrap_resto/assets/images/salmon-filet.jpeg',
        '/projet_boostrap_resto/assets/images/shrimp-ramen.jpeg',
        '/projet_boostrap_resto/assets/images/spaghetti.jpg',
        '/projet_boostrap_resto/assets/images/spinach-chicken-pomegranate-salad.jpg',
        '/projet_boostrap_resto/assets/images/spinahc-beetroot-salad.jpg',
        '/projet_boostrap_resto/assets/images/steak.jpeg',
        '/projet_boostrap_resto/assets/images/wines.jpeg',
        '/projet_boostrap_resto/assets/images/wood-texture.jpg',
      ]);
    })
  );
})

self.addEventListener('fetch', function(event) {
  event.respondWith(
    caches.match(event.request).then(function(response) {
      return response || fetch(event.request);
    })
  );
});

/*self.addEventListener('fetch', function(event) {
  event.respondWith(
    caches.match(event.request).then(function(resp) {
      return resp || fetch(event.request).then(function(response) {
        let responseClone = response.clone();
        caches.open('v1').then(function(cache) {
          cache.put(event.request, responseClone);
        });

        return response;
      });
    }).catch(function() {
      return caches.match('/projet_boostrap_resto/fragment/assets/images/wood-texture.jpg');
    })
  );
});*/
