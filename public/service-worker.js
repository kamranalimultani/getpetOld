// service-worker.js

const CACHE_NAME = "my-pwa-cache-v1";
const urlsToCache = [
    "/",
    "/css/app.css",
    "/js/app.js",
    // Add other assets to cache as needed
];

self.addEventListener("install", (event) => {
    event.waitUntil(
        caches.open(CACHE_NAME).then((cache) => cache.addAll(urlsToCache))
    );
});

self.addEventListener("fetch", (event) => {
    event.respondWith(
        caches
            .match(event.request)
            .then((response) => response || fetch(event.request))
    );
});
