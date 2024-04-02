importScripts('https://storage.googleapis.com/workbox-cdn/releases/4.3.1/workbox-sw.js');

if (workbox) {
  console.log(`Super ! Workbox est chargé 🎉`);
  workbox.routing.registerRoute(
    /\.(?:html|js|css|webp|png|jpg|jpeg|svg|gif)$/,
    new workbox.strategies.StaleWhileRevalidate()
  );
}

const NomDuCache = "CacheSW";

self.addEventListener('install', evt => {
  evt.waitUntil(
    caches.open(NomDuCache).then(cache => {
      const urls = [
        "/Livrable4_WEB/Assets/CSS/Accueil.css",
        "/Livrable4_WEB/Assets/CSS/style_creer_compte.css",
        "/Livrable4_WEB/Assets/CSS/style_creer_entreprise.css",
        "/Livrable4_WEB/Assets/CSS/style_postulation.css",
        "/Livrable4_WEB/Assets/CSS/style_site.css",

        "/Livrable4_WEB/Assets/JS/Accueil.js",
        "/Livrable4_WEB/Assets/JS/Connexion.js",
        "/Livrable4_WEB/Assets/JS/Creer_compte.js",
        "/Livrable4_WEB/Assets/JS/Creer_entreprise.js",
        "/Livrable4_WEB/Assets/JS/Creer_offre.js",
        "/Livrable4_WEB/Assets/JS/Postuler.js",

        "/Livrable4_WEB/Images/images.webp",
        "/Livrable4_WEB/Images/B.webp",
        "/Livrable4_WEB/Images/gmail.webp",
        "/Livrable4_WEB/Images/icon-180x180.webp",
        "/Livrable4_WEB/Images/icon-1024x1024.webp",
        "/Livrable4_WEB/Images/insta.webp",
        "/Livrable4_WEB/Images/linkedin1.webp",
        "/Livrable4_WEB/Images/logo.webp",
        "/Livrable4_WEB/Images/ytb.webp"
      ];
      return cache.addAll(urls);
    })
  );
});

self.addEventListener('activate', evt => {
  console.log('le Service Worker a été installé ');
});

// Fetch event afin de répondre quand on est en mode hors ligne.
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