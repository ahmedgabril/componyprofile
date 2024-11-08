<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> gray-tec ahmed-gabril-compony-profile</title>

    <link rel="manifest" href="/manifest.json" />


    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="PWA">
    <link rel="icon" sizes="512x512" href="/icons/android/android-launchericon-512-512.png">
    <meta name="description" content="شركه جراي تك لخدمات المواقع  والتطبيقات برمجه تصميم  تحسين محركات البحث">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="PWA">
    <link rel="apple-touch-icon" href="/icons/ios/512.png">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <link href="{{ asset('asset/frontend/custom.css') }}" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])


    @livewireStyles


</head>

<body class="font-sans text-gray-900 bg-gray-200  dark:bg-slate-900 dark:text-white  antialiased " style=" ">
    <div class="p-0 mt-0  ">


        <livewire:frontend.navbar />


        <div id="install-prompt" class="container mx-auto flex-col items-center bg-gray-50 dark:bg-gray-700 dark:text-gray-50 lg:hidden   p-4 rounded-md ">
            <p class=" font-normal py-1">  هل تريد هذا الموقع يعمل كا تطبيق اصلي علي هذا الجهاز  لسهوله الاستخدام وا مكانيه الاتصال بدون انترنت</p>
          <div class="flex justify-around">

            <button class="text-green-600 p-2 rounded-md mt-8  hover:bg-gray-300 " onclick="showInstallPrompt()">تثبيت التطبيق</button>

            <button class="text-red-700 p-2 rounded-md mt-8  hover:bg-gray-300 " onclick="hideInstallPrompt()"> الغاء</button>


          </div>

        </div>


        <main class="mb-16">
            {{ $slot }}
        </main>


        <livewire:frontend.footer />

    </div>


    @livewireScripts

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            initFlowbite();


            let deferredPrompt;

            window.addEventListener('beforeinstallprompt', (event) => {
                event.preventDefault();
                deferredPrompt = event;
                document.getElementById('install-prompt').style.display = 'flex-col';
            });



            window.showInstallPrompt = function() {
                if (deferredPrompt) {
                    deferredPrompt.prompt();
                    deferredPrompt.userChoice.then((choiceResult) => {
                        if (choiceResult.outcome === 'accepted') {

                          document.getElementById('install-prompt').style.display = 'none';
                            console.log('User accepted the install prompt');
                        } else {
                            console.log('User dismissed the install prompt');
                            document.getElementById('install-prompt').style.display = 'none';
                        }
                        deferredPrompt = null;
                    });
                }
            };


            window.hideInstallPrompt = function(){
              document.getElementById('install-prompt').style.display = 'none';

            }


        });



       const cheekapp =  window.addEventListener("appinstalled", (event) => {
              console.log("Thank you for installing our app!",event);
            });

            if(cheekapp){
              document.getElementById('install-prompt').style.display = 'none';

            }

        document.addEventListener('livewire:navigated', () => {


            initFlowbite();


        }, {
            once: true
        });






        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('/sw.js')
                    .then(registration => {
                        console.log('Service Worker registered with scope:', registration.scope);
                    }).catch(error => {
                        console.error('Service Worker registration failed:', error);
                    });
            });
        }
    </script>
</body>

</html>
