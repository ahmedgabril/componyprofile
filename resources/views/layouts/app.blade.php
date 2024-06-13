<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() === 'ar'? 'rtl':'ltr' }}"  >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="theme-color" content="#ffffff">
        <!-- Twitter -->


        <!-- Facebook -->

        <meta property="og:description" content="Get started with a free and open-source admin dashboard layout built with Tailwind CSS and Flowbite featuring charts, widgets, CRUD layouts, authentication pages, and more">
        <meta property="og:type" content="article">
        <meta property="og:image:type" content="image/png">


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

        {{-- <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script> --}}

@livewireStyles

    </head>
    <body class="bg-gray-50 dark:bg-gray-800" dir="{{ app()->getLocale() === 'ar'? 'rtl':'ltr' }}" >
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('backend.navbar')
            {{-- <livewire:layout.navigation /> --}}

            <!-- Page Heading -->


            <!-- Page Content -->
            <main class="pt-14 overflow-y-auto">
                {{$slot}}

            </main>


                {{-- <input type="file" id="test"  /> --}}



        </div>




        @livewireScripts



    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/decoupled-document/ckeditor.js"></script>




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

<script  >
document.addEventListener("DOMContentLoaded", function () {
    initFlowbite();

});




            document.addEventListener('livewire:navigated', () => {


                initFlowbite();


                    },{ once: true });


            </script>



</body>

</html>
