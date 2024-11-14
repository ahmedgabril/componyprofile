<div x-data="{}" id="projects" class="pt-24 container mx-auto">
    <h2 class="text-center  text-gray-800 font-bold dark:text-white  p-8 "> {{__('welecome.catogeries')}}</h2>

    <div class="flex flex-wrap text-sm justify-center font-medium text-center text-gray-400  mb-8
     border-gray-200 rounded-t-lg  dark:text-gray-300 pr-4" >



     <div class="me-2">




        <div class="hidden  md:flex justify-center border-spacing-4 items-center  w-60 h-48 rounded-md object-cover mb-3 mt-3 bg-center cursor-pointer
         bg-gray-800 hover:brightness-50 text-gray-50"

         @click='$dispatch("getalldata")' >
         <a   @click.prevent='$dispatch("getalldata")'' class="text-center  cursor-pointe font-bold" style="font-size:28px!important"> {{__('welecome.all')}}</a>

        </div>


        <div class=" md:hidden flex justify-center border-spacing-6 shadow-md items-center p-4 bg-gry-500   dark:bg-gray-700 dark:hover:bg-gray-800  hover:bg-gray-300 rounded-md  mb-3 mt-3  cursor-pointer
    "

        @click='$dispatch("getalldata")' >
        <a   @click.prevent='$dispatch("getalldata")' class="text-center  cursor-pointe font-bold text-gray-800   dark:text-white" > {{__('welecome.all')}}</a>

       </div>


    </div>



        @foreach($cats as $key => $value)
        <div class="me-2  cursor-pointer">




            <div class="hidden md:flex justify-center flex-wrap border-spacing-6 shadow-md items-center  w-60 h-48 rounded-md  object-cover mb-3 mt-3 bg-center cursor-pointer
             bg-gray-500 bg-blend-multiply" style="background-image: url('{{asset("storage/".$value?->icon) }}')"

           wire:key="{{ $key}}"
             @click="$dispatch('getcat',{ getid: {{$value->id}}})"
             >
             <a   @click.prevent="$dispatch('getcat',{ getid: {{$value->id}}})" class="text-center leading-none text-gray-50 cursor-pointe font-bold" style="font-size:28px!important">{{$value->name}}</a>

            </div>




            <div class=" md:hidden flex justify-center flex-wrap border-spacing-6 shadow-md items-center p-4 bg-gry-500   rounded-md  mb-3 mt-3   cursor-pointer dark:bg-gray-700 dark:hover:bg-gray-900  hover:bg-gray-300"

           wire:key="{{ $key}}"
             @click="$dispatch('getcat',{ getid: {{$value->id}}})"
             >
             <a    @click.prevent="$dispatch('getcat',{ getid: {{$value->id}}})" class="text-center  cursor-pointe text-gray-800   dark:text-white  font-bold" >{{$value->name}}</a>

            </div>


        </div>


        @endforeach





    </div>
    <h2 class="text-center   text-gray-800 font-bold dark:text-white  p-8 py-16">{{ __('welecome.ourprojects') }}</h2>


     @if($getcatdata )

          <div class=" getcardpro flex flex-wrap  justify-center border-spacing-4 items-center gap-6 mx-auto  p-4   rounded-lg md:p-8 "  >

            @forelse($getcatdata as $key => $value)

          <div class=" card-pro bg-white border  border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 w-80 transition ease-in-out delay-3000

          hover:-translate-y-1 hover:scale-110  duration-300"


          wire:key="{{$key}}">
          <a href="/getprodata/{{$value->id}}" wire:navigate >
                <img class="rounded-t-lg h-48 w-full  object-cover " src="{{ asset('storage/'.$value->imgsumnail) }}" alt="" />
          </a>
          <a href="/getprodata/{{$value->id}}" wire:navigate >

            <div class="p-5">

                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$value->name}}</h5>

                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-2">

                {{$value->shortdes}}
                </p>
           <div class="flex justify-center items-center ">

            <a  href="/getprodata/{{$value->id}}" wire:navigate  class="inline-flex items-center px-3 py-2 mx-2 text-sm font-medium text-center
             text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            {{__('welecome.more')}}
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">

                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>

                </svg>

            </a>

               {{-- @if($value->github_link)

               <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-grren-500 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-400 dark:focus:ring-green-800">


                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                  </svg>
            </a>

               @endif --}}

               @if($value->project_link)

               <a href="{{$value->project_link}}" class="inline-flex  mr-2 ml-2items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                {{__('welecome.showpro')}}
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link-45deg " viewBox="0 0 16 16">
                    <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1 1 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4 4 0 0 1-.128-1.287z"/>
                    <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243z"/>
                  </svg>
            </a>

               @endif

           </div>

            </div>
        </a>
          </div>





     @empty

     <div class="  container mx-auto dark:bg-gray-800  p-8 bg-gray-100 flex justify-center dark:text-gray-300 text-gray-700">no data added yet for this catogery!</div>



     @endforelse

    </div>


     @endif



</div>
   <script>

    document.title = "projects";
   </script>
