// sw.js



let deferredPrompt;

window.addEventListener('beforeinstallprompt', (event) => {
    // Prevent the default prompt
    event.preventDefault();
    // Save the event for later use
    deferredPrompt = event;
    // Show your custom install prompt
    document.getElementById('install-prompt').style.display = 'block';
});

// Function to trigger the prompt
function showInstallPrompt() {
    if (deferredPrompt) {
        deferredPrompt.prompt();
        deferredPrompt.userChoice.then((choiceResult) => {
            if (choiceResult.outcome === 'accepted') {
                console.log('User accepted the install prompt');
            } else {
                console.log('User dismissed the install prompt');
            }
            deferredPrompt = null;
        });
    }
}

const cashname = "my-app-cache-v1"
self.addEventListener("install", (event) => {

    self.skipWaiting();
  event.waitUntil(
    caches.open(cashname).then((cache) => {
      return cache.addAll([
        "/",
        "/favicon.ico",
        "/ar/project",
        "/ar/getserv",
        "/ar/aboutus",
        "/ar/contactus",
        "/ar/getcv",
        "/ar/getprodata",
        "/en/project",
        "/en/getserv",
        "/en/aboutus",
        "/en/contactus",
        "/en/getcv",
        "/en/getprodata",
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
        fetch(event.request)
            .then((networkResponse) => {
                return caches.open(cashname).then((cache) => {
                    cache.put(event.request, networkResponse.clone());
                    return networkResponse;
                });
            })
            .catch(() => {
                return caches.match(event.request).then((cacheResponse) => {
                    return cacheResponse || fetch(event.request);
                });
            })
    );
});


// self.addEventListener('fetch', (event) => {
//   event.respondWith(

//        caches.match(event.request).then((response) => {

//         returnfetch(event.request).then((fetchRes)=>{


//             return caches.open(cashname).then((cacheRes)=>{

//               cacheRes.put(event.request,fetchRes.clone())

//               return fetchRes;
//             })
//           }) || response ;

//     })
//   );
// });

