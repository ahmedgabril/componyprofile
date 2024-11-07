<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"   >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="theme-color" content="#ffffff">
        <!-- Twitter -->

          <title>app</title>
        <!-- Facebook -->

        <meta property="og:description" content="Get started with a free and open-source admin dashboard layout built with Tailwind CSS and Flowbite featuring charts, widgets, CRUD layouts, authentication pages, and more">
        <meta property="og:type" content="article">
        <meta property="og:image:type" content="image/png">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="application-name" content="PWA">
        <link rel="icon" sizes="512x512" href="/icons/android/android-launchericon-512-512.png">

        <!-- Add to homescreen for Safari on iOS -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="PWA">
        <link rel="apple-touch-icon" href="/icons/ios/512.png">
        <link rel="manifest" href="/manifest.json"/>
        <title>{{ $title ?? 'Page Title' }}</title>


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">


<link href="{{asset('asset/backend/css/filePond.css')}}" rel="stylesheet" />
<link
    href="{{asset('asset/backend/css/filePond-imagePreview.css')}}"
    rel="stylesheet"
/>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="{{ asset('asset/backend/css/backend.css') }}"/>
        <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/decoupled-document/ckeditor.js"></script>

        {{-- <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script> --}}


    </head>
    <body class="" dir="{{ app()->getLocale() === 'ar'? 'rtl':'ltr' }}" >


        <div class="min-h-screen bg-gray-200 dark:bg-gray-900 ">

            {{-- <div class="loader-container  bg-gray-900" wire:loading>

                <div class="loader "></div>
            </div> --}}


                <header>

                    <livewire:backend.navbar />

                    <livewire:backend.sidebar />
                </header>


                {{-- @include('backend.navbar')
                @include('backend.sidebar') --}}

      {{-- <livewire:layout.navigation /> --}}
            <!-- Page Content -->
            <main class="pt-14 overflow-y-auto">

                {{$slot}}

            </main>


                {{-- <input type="file" id="test"  /> --}}



        </div>












        <script src="{{asset('asset/backend/js/filePond-imagePreview.js')}}"></script>
        <script src="{{asset('asset/backend/js/filePond.js')}}"></script>



    <script>

     FilePond.registerPlugin(FilePondPluginImagePreview);

       if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }



     var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
    var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

    // Change the icons inside the button based on previous settings
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        themeToggleLightIcon.classList.remove('hidden');
    } else {
        themeToggleDarkIcon.classList.remove('hidden');
    }

    var themeToggleBtn = document.getElementById('theme-toggle');

    themeToggleBtn.addEventListener('click', function() {

        // toggle icons inside button
        themeToggleDarkIcon.classList.toggle('hidden');
        themeToggleLightIcon.classList.toggle('hidden');

        // if set via local storage previously
        if (localStorage.getItem('color-theme')) {
            if (localStorage.getItem('color-theme') === 'light') {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            }

        // if NOT set via local storage previously
        } else {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            }
        }

    });


    </script>



                <script>



                    document.addEventListener("DOMContentLoaded", function () {


                            // document.querySelector('.loader-container ').classList.add('loader-hidden');
                            // document.body.removeChild( document.querySelector('.loader-container '));





                        initFlowbite();

                    },{ once: true });




                document.addEventListener('livewire:navigated', () => {


                  initFlowbite();







                     });


            </script>



</body>

</html>
