<div x-data="{}" id="projects" class=" pt-36 container mx-auto">

    <div class="flex flex-wrap text-sm justify-center font-medium text-center text-gray-400  mb-8
     border-gray-200 rounded-t-lg  dark:text-gray-300 pr-4" >


     <h2 class="text-center  text-gray-800 font-bold dark:text-white  ">{{ __('welecome.ourservices') }}</h2>



    </div>



     @if($getcatdata )

          <div class=" getcardpro flex flex-wrap justify-center border-spacing-4 items-center gap-6 mx-auto  p-4   rounded-lg md:p-8 "  >

            @forelse($getcatdata as $key => $value)

          <div class=" card-pro bg-white border  border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 w-80 transition ease-in-out delay-3000

          hover:-translate-y-1 hover:scale-110  duration-300"


          wire:key="{{$key}}">
          <a href="/getservdata/{{$value->id}}" wire:navigate >
                <img class="rounded-t-lg h-48 w-full  object-cover " src="{{ asset('storage/'.$value->imgsumnail) }}" alt="" />
          </a>
          <a href="/getservdata/{{$value->id}}" wire:navigate >

            <div class="p-5">

                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$value->name}}</h5>

                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-2">

                {{$value->shortdes}}
                </p>
           <div class="flex justify-center items-center ">

            <a  href="/getservdata/{{$value->id}}" wire:navigate  class="inline-flex items-center px-3 py-2 mx-2 text-sm font-medium text-center
             text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          {{__('welecome.more')}}
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">

                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>

                </svg>

            </a>

               @if($value->price)

               <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-grren-500 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-400 dark:focus:ring-green-800">

                <span class="text-md font-bold text-gray-900 dark:text-white">${{$value->price}}</span>

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
