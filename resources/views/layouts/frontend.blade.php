<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar'? 'rtl':'ltr' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @livewire('frontend.meta-tag', ['title' => 'ahmed-gabril-compony-profile',
         'description' => ' شركه جراي تك لخدمات المواقع  والتطبيقات برمجه تصميم  تحسين محركات البحث', 'keywords' => ['gray tec','ahmed gabril', 'compony profile','cv','احمد جبريل','جراي تك','احمد جبريل']])


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
    <body class="font-sans text-gray-900 bg-gray-200  dark:bg-slate-900 dark:text-white  antialiased " style=" "
>
        <div class="p-0 mt-0  ">


          <livewire:frontend.navbar/>





                <main class="mb-16">
                    {{$slot}}
                </main>


                <livewire:frontend.footer/>

        </div>


        @livewireScripts

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
