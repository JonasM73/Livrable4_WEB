importScripts('https://storage.googleapis.com/workbox-cdn/releases/4.3.1/workbox-sw.js');

if (workbox) {
  console.log(`Super ! Workbox est chargé 🎉`);
  workbox.routing.registerRoute(
    /\.(?:html|js|css|png|jpg|jpeg|svg|gif)$/,
    new workbox.strategies.StaleWhileRevalidate()
  );
}

const NomDuCache = "CacheSW";

self.addEventListener('install', evt => {
  evt.waitUntil(
    caches.open(NomDuCache).then(cache => {
      return cache.addAll([
        "index.html",
        "assets/style.css",
        "assets/java.js",
        "assets/icon-1024x1024.png"
      ]
      );
  }))
});

self.addEventListener('activate', evt => {
  console.log('le Service Worker a été installé ');
});

//fetch event afin de répondre quand on est en mode hors ligne.
self.addEventListener('fetch', function(event) {
  event.respondWith(
    caches.open(NomDuCache).then(function(cache) {
      return cache.match(event.request).then(function (response) {
        return response || fetch(event.request).then(function(response) {
          cache.put(event.request, response.clone());
          return response;
        });
      });
    })
  );
});