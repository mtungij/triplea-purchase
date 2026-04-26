const CACHE_NAME = 'mikoposoft-v2';
const STATIC_ASSETS = [
  '/',
  '/assets/css/main.css',
  '/assets/css/color_skins.css',
  '/assets/img/logo_embedded.svg',
  '/assets/img/icon-192.png',
  '/assets/img/icon-512.png',
  '/assets/vendor/bootstrap/css/bootstrap.min.css',
  '/assets/vendor/font-awesome/css/font-awesome.min.css',
  '/assets/bundles/libscripts.bundle.js',
  '/assets/bundles/mainscripts.bundle.js'
];

// Install: cache static assets
self.addEventListener('install', function(event) {
  event.waitUntil(
    caches.open(CACHE_NAME).then(function(cache) {
      return cache.addAll(STATIC_ASSETS);
    }).then(function() {
      return self.skipWaiting();
    })
  );
});

// Activate: remove old caches
self.addEventListener('activate', function(event) {
  event.waitUntil(
    caches.keys().then(function(cacheNames) {
      return Promise.all(
        cacheNames.filter(function(name) {
          return name !== CACHE_NAME;
        }).map(function(name) {
          return caches.delete(name);
        })
      );
    }).then(function() {
      return self.clients.claim();
    })
  );
});

// Fetch: network-first for HTML/API, cache-first for static assets
self.addEventListener('fetch', function(event) {
  // Only handle GET requests and same-origin requests
  if (event.request.method !== 'GET') return;

  const url = new URL(event.request.url);
  if (url.origin !== location.origin) return;

  // Static assets (css, js, images, fonts): cache-first
  const isStatic = /\.(css|js|png|jpg|jpeg|gif|svg|ico|woff|woff2|ttf|eot)(\?.*)?$/.test(url.pathname);

  if (isStatic) {
    event.respondWith(
      caches.match(event.request).then(function(cached) {
        if (cached) return cached;
        return fetch(event.request).then(function(response) {
          if (response && response.status === 200) {
            var clone = response.clone();
            caches.open(CACHE_NAME).then(function(cache) {
              cache.put(event.request, clone);
            });
          }
          return response;
        });
      })
    );
  } else {
    // HTML/dynamic pages: network-first, fall back to cache
    event.respondWith(
      fetch(event.request).then(function(response) {
        if (response && response.status === 200) {
          var clone = response.clone();
          caches.open(CACHE_NAME).then(function(cache) {
            cache.put(event.request, clone);
          });
        }
        return response;
      }).catch(function() {
        return caches.match(event.request);
      })
    );
  }
});
