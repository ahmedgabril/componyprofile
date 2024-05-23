<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar'? 'rtl':'ltr' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">

         <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
          <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
        <link href="{{ asset('asset/frontend/custom.css') }}" rel="stylesheet" />
 
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

     
    </head>
    <body class="font-sans text-gray-900 bg-gray-200  dark:bg-slate-900 dark:text-white  antialiased " style=" "
>
        <div class="p-0 mt-0  ">
        
     
            @include('frontend/navbar')

            <div class="grid rounded-sm  lg:grid-cols-2 md:grid-cols-2  sm:grid-cols-1 justify-items-center overflow-hidden pt-16 p-2 "
             style="background-image: url('{{ asset('img/header.png') }}'); background-size:cover;height:750px border-radius: 6px" >
             <div class=" flex flex-col  justify-center py-16 hearo ">
   
                <img src="{{ asset('img/imgtest.webp') }}"  class=" w-full  " style="background-size: cover"/>
             </div>
             <div class="text-center flex justify-items-center " style="">

              <div class="py-16 text-center flex  flex-col justify-center">
                <h1 class="text-center text-wrap text-white pt-4" style="font-size: 40px;">Create stunning web experiences</h1>
                <p class=" text-wrap text-white mx-4">Our landing page template works on all devices, so you only<br>
                     have to set it up once, and get beautiful results forever.</p>
              </div>
             </div>


            </div>
    


          
       

                <main class="container mx-auto mb-16">
                    @yield('content')   
                </main> 
    
             <div class="pt-15px">

                @include('frontend/footer')
             </div>
         
           


        </div>

    </body>
</html>
