<div class="mt-40 container mx-auto p-6">
    <h1 class="text-center  text-gray-800 font-bold dark:text-white  p-8 py-16">{{ __('backend.dashboard') }}</h1>

<div class="flex flex-wrap justify-center items-center gap-4">
    <div class="w-96 p-6 flex flex-col justify-center bg-white border border-gray-200
    rounded-lg shadow dark:bg-gray-800  dark:hover:bg-gray-600  hover:bg-gray-300 mx-2
     dark:border-gray-700 transition-transform hover:-translate-y-1 hover:scale-110 duration-700 " >
        <div class="flex flex-col items-center justify-center dark:text-gray-400  mx-auto my-auto mb-4 w-24 h-24 ">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.429 9.75 2.25 12l4.179 2.25m0-4.5 5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0 4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0-5.571 3-5.571-3" />
              </svg>

        </div>

           <div class="flex flex-col  justify-center items-center mx-auto my-auto ">
               <dt class="mb-4 text-3xl font-extrabold dark:text-gray-400 ">{{$allproject?->count()}}</dt>
               <dd class="text-gray-500 dark:text-gray-400 mt-4">{{__('projects.pronum')}}</dd>
           </div>
       </div>



       <div class="w-96 p-6 flex flex-col justify-center bg-white border border-gray-200
    rounded-lg shadow dark:bg-gray-800  dark:hover:bg-gray-600  hover:bg-gray-300 mx-2
     dark:border-gray-700 transition-transform hover:-translate-y-1 hover:scale-110 duration-700 " >
        <div class="flex flex-col items-center dark:text-gray-400 justify-center  mx-auto my-auto mb-4 w-24 h-24 ">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5M6 7.5h3v3H6v-3Z" />
              </svg>

        </div>

           <div class="flex flex-col  justify-center  items-center mx-auto my-auto ">
               <dt class="mb-4 text-3xl font-extrabold dark:text-gray-400 ">{{$allserv?->count()}}</dt>
               <dd class="text-gray-500 dark:text-gray-400 mt-4">{{__('serveies.servnum')}}</dd>
           </div>
       </div>


       <div class="w-96 p-6 flex flex-col justify-center bg-white border border-gray-200
    rounded-lg shadow dark:bg-gray-800  dark:hover:bg-gray-600  hover:bg-gray-300 mx-2
     dark:border-gray-700 transition-transform hover:-translate-y-1 hover:scale-110 duration-700 " >
        <div class="flex flex-col items-center justify-center dark:text-gray-400  mx-auto my-auto mb-4 w-24 h-24 ">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-12">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
              </svg>


        </div>

           <div class="flex flex-col  justify-center items-center mx-auto my-auto ">
               <dt class="mb-4 text-3xl font-extrabold dark:text-gray-400 ">{{$allcat?->count()}}</dt>
               <dd class="text-gray-500 dark:text-gray-400 mt-4">{{__('catogery.catnum')}}</dd>
           </div>
       </div>


    </div>




    <div class="container p-6 mx-auto mt-6">

        <h3 class="text-center  text-gray-800 font-bold dark:text-white  p-8 py-16">{{ __('backend.pro_lateset') }}</h3>


        <div class=" flex flex-wrap justify-center items-center gap-6 mx-auto ">


        @forelse($allproject as $item)


        <div class=" card-pro h-96 mb-4 transition-transform hover:-translate-y-1 hover:scale-110 duration-700

         max-w-80
         bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" wire:key="{{$item->id}}" >
            <a href="#">
                <img class="rounded-t-lg w-full object-cover " src="{{ asset('storage/'.$item->imgsumnail) }}" alt="sumnail" style="height: 200px" wire:key="{{$item->id}}"/>
            </a>
            <div class="p-1">
                <a href="#">
                    <h5 class="mb-2 text-2xl  mt-4 font-bold tracking-tight text-gray-900 dark:text-white capitalize text-center break-words">{{$item->name}}</h5>

                </a>
                {{-- <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-wrap capitalize indent-1  truncate">{{$item->des}}</p> --}}

            </div>





            <div class="flex  justify-around items-center mb-5 mt-10">


             <div class="flex cursor-pointer">
             <a href="http://127.0.0.1:8000/handelcat?search={{$item->catogery->name}}" wire:navigate class=" text-orange-600 mx-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                  </svg>

             </a>





                    </div>
                <div>

                    <span class="text-gray-500 text-sm text-justify">{{$item->created_at->diffForHumans(null, true). ' '.'ago'}}</span>
                </div>
                            </div>
        </div>

        @empty
        <div class="flex items-center   p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div class="">
              <span class="font-medium">{{__('swal.dangeralert')}} !!</span> {{__('swal.notfound')}}
            </div>
          </div>
        @endforelse


        </div>


    </div>


    <div class="container p-6 mx-auto mt-6">

        <h3 class="text-center  text-gray-800 font-bold dark:text-white  p-8 py-16">{{ __('backend.serv_lateset') }}</h3>


        <div class=" flex flex-wrap justify-center items-center gap-6 mx-auto ">


        @forelse($allserv as $item)


        <div class=" card-pro h-96 mb-4 transition-transform hover:-translate-y-1 hover:scale-110 duration-700

         max-w-80
         bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" wire:key="{{$item->id}}" >
            <a href="#">
                <img class="rounded-t-lg w-full object-cover " src="{{ asset('storage/'.$item->imgsumnail) }}" alt="sumnail" style="height: 200px" wire:key="{{$item->id}}"/>
            </a>
            <div class="p-1">
                <a href="#">
                    <h5 class="mb-2 text-2xl  mt-4 font-bold tracking-tight text-gray-900 dark:text-white capitalize text-center break-words">{{$item->name}}</h5>

                </a>
                {{-- <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-wrap capitalize indent-1  truncate">{{$item->des}}</p> --}}

            </div>





            <div class="flex  justify-around items-center mb-5 mt-10">



                <div>

                    <span class="text-gray-500 text-sm text-justify">{{$item->created_at->diffForHumans(null, true). ' '.'ago'}}</span>
                </div>
                            </div>
        </div>

        @empty
        <div class="flex items-center   p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div class="">
              <span class="font-medium">{{__('swal.dangeralert')}} !!</span> {{__('swal.notfound')}}
            </div>
          </div>
        @endforelse


        </div>


    </div>

    <div class="container p-6 mx-auto mt-6">

        <h3 class="text-center  text-gray-800 font-bold dark:text-white  p-8 py-16">{{ __('backend.cat_lateset') }}</h3>


        <div class=" flex flex-wrap justify-center items-center gap-6 mx-auto ">


        @forelse($allcat as $item)


        <div class=" card-pro h-80 mb-4 transition-transform hover:-translate-y-1 hover:scale-110 duration-700

         max-w-80
         bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" wire:key="{{$item->id}}" >
            <a href="#">
                <img class="rounded-t-lg w-full object-cover " src="{{ asset('storage/'.$item->icon) }}" alt="sumnail" style="height: 200px" wire:key="{{$item->id}}"/>
            </a>
            <div class="p-0">
                <a href="#">
                    <h5 class="mb-2 text-2xl  mt-4 font-bold tracking-tight text-gray-900 dark:text-white capitalize text-center break-words">{{$item->name}}</h5>

                </a>
                {{-- <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-wrap capitalize indent-1  truncate">{{$item->des}}</p> --}}

            </div>





            <div class="flex  justify-around items-center mb-5 mt-4">



                <div>

                    <span class="text-gray-500 text-sm text-justify">{{$item->created_at->diffForHumans(null, true). ' '.'ago'}}</span>
                </div>
                            </div>
        </div>

        @empty
        <div class="flex items-center   p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div class="">
              <span class="font-medium">{{__('swal.dangeralert')}} !!</span> {{__('swal.notfound')}}
            </div>
          </div>
        @endforelse


        </div>


    </div>









</div>
