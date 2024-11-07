// sw.js
const cashname = "my-app-cache-v1"
self.addEventListener("install", (event) => {

    // self.skipWaiting();
  event.waitUntil(
    caches.open(cashname).then((cache) => {
      return cache.addAll([
        "/",
        "/favicon.ico",
        "/project",
        "/getserv",
        "/aboutus",
        "/contactus",
        "/getcv",
        "/getprodata",
        "/manifest.json",
        "/icons/android/android-launchericon-192-192.png",
        "/icons/android/android-launchericon-144-144.png",
        "/icons/android/android-launchericon-96-96.png",
        "/icons/ios/16.png",
        "/icons/ios/20.png",
        "/icons/ios/29.png",
        "/icons/ios/32.png",

        // Add other assets here
      ]);
    })
  );
});

self.addEventListener("activate", (event) => {
  event.waitUntil( caches.keys().then((keys)=>{
    return Promise.all(

      keys.filter((key)=> key != cashname )

      .map((key) => caches.delete(key))
    )

  })
)

  //  clients.claim();


});

self.addEventListener('fetch', (event) => {
  event.respondWith(

       caches.match(event.request).then((response) => {

        returnfetch(event.request).then((fetchRes)=>{


            return caches.open(cashname).then((cacheRes)=>{

              cacheRes.put(event.request,fetchRes.clone())

              return fetchRes;
            })
          }) || response ;

    })
  );
});
