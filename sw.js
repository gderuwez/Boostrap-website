self.addEventListener('install', function(event) {
  event.waitUntil(
    caches.open('v1').then(function(cache) {
      return cache.addAll([
        '/',
        '/projet_boostrap_resto/',
        '/projet_boostrap_resto/fragment/',
        '/projet_boostrap_resto/fragment/index.html',
        '/projet_boostrap_resto/assets/',
        '/projet_boostrap_resto/assets/style/',
        '/projet_boostrap_resto/assets/script/',
        '/projet_boostrap_resto/assets/images/',
        '/projet_boostrap_resto/assets/style/style.css',
        '/projet_boostrap_resto/assets/script/script.js',
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
        '/projet_boostrap_resto/assets/images/icon-192.png',
        '/projet_boostrap_resto/assets/images/icon-512.png'
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
