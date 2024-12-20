// const STATIC_CASHE = "my-app-static-cache-v2";
const DYNAMIC_CASHE = "my-app-dynamic-cache-v1";

self.addEventListener("install", (event) => {
  event.waitUntil(
    caches.open(DYNAMIC_CASHE).then((cache) => {
      return cache.addAll([
        "/",
        "/favicon.ico",
        "/ar/project",
        "/ar/getserv",
        "/ar/aboutus",
        "/ar/contactus",
        "/ar/getcv",
        "/ar/getprodata",
        "/manifest.json",
        "/resources/js/app.js",
        "/resources/css/app.css",
        "/offline.html",
        "/icons/android/android-launchericon-192-192.png",
        "/icons/android/android-launchericon-144-144.png",
        "/icons/android/android-launchericon-96-96.png",
        "/icons/ios/16.png",
        "/icons/ios/20.png",
        "/icons/ios/29.png",
        "/icons/ios/32.png",
        // Add other assets here
      ]).catch((error) => { console.error('Failed to cache:', error); });
    })
  );
});

self.addEventListener("activate", (event) => {
  event.waitUntil(
    caches.keys().then((keys) => {
      return Promise.all(
        keys.filter((key) => key !== DYNAMIC_CASHE)
          .map((key) => caches.delete(key))
      );
    })
  );
});

self.addEventListener('fetch', (event) => {
  event.respondWith(
    caches.match(event.request).then((cachedResponse) => {
      if (cachedResponse) {
        // Return cached response
        return cachedResponse || fetch(event.request);
      }
      // Fetch from network and update cache
      return fetch(event.request).then((networkResponse) => {
        return caches.open(DYNAMIC_CASHE).then((cache) => {
          cache.put(event.request, networkResponse.clone());
          return networkResponse;
        });
      });
    }).catch(() => {
      // If both cache and network fail, return a default offline response (optional)
      return caches.match('/offline.html');
    })
  );
});



// self.addEventListener('fetch', (event) => {
//     event.respondWith(
//         fetch(event.request)
//             .then((networkResponse) => {
//                 return caches.open(DYNAMIC_CASHE).then((cache) => {
//                     cache.put(event.request, networkResponse.clone());
//                     return networkResponse;
//                 });
//             })
//             .catch(() => {
//                 return caches.match(event.request).then((cacheResponse) => {
//                     return cacheResponse || fetch(event.request);
//                 });
//             })
//     );
// });
