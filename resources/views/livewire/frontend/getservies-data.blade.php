<div class=" pt-24 p-4  mx-2 ">
    <div class="container mx-auto p-6 ">

        @if($getdata->youtube_url)
        <h2 class="text-center mb-10 mt-6 dark:text-gray-200 text-gray-700"> {{__('welecome.servtitle')}} </h2>

        @endif

        @if($getdata->youtube_url)



        <div class="  mx-auto mt-5 mb-5  flex justify-start items-center max-w-5xl ">
            @php

                $pattern = "/^(?:https?:\/\/)?(?:www\.)?(?:youtu\.be\/|youtube\.com\/(?:embed\/|v\/|watch\?v=))([\w-]{11})(?:.*)$/";
              preg_match($pattern, $getdata->youtube_url, $matches);
               $youtube_id = $matches[1];
            @endphp
            <iframe width="100%" height="500" src="https://www.youtube.com/embed/{{$youtube_id}}"
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media;
                                gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


        </div>
    @endif
        <div class="container mx-auto p-8 mt-20 max-w-5xl bg-slate-50  dark:bg-gray-800  ">

            <div class="dark:text-gray-300 text-gray-700 " >{!! $getdata->des !!}</div>

          </div>

          @if($getdata)

          <h3 class="text-center mb-6 mt-6 dark:text-gray-200 text-gray-700">{{__('welecome.servimges')}}</h3>

          @endif
                <div class="grid sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-4 bg-slate-50  dark:bg-gray-800 mx-auto max-w-5xl ">


                    @if($getdata)
                @foreach(json_decode($getdata->images) as $key=> $value)

                <div>
                    <img class="h-80 max-w-full rounded-lg  bg-slate-50  dark:bg-gray-800" src="{{asset('storage/'. $value)}}" alt="">
                </div>


                @endforeach

                @endif



                </div>


          <div class="container mx-auto p-6 dark:bg-gray-800 bg-gray-50 mt-8 max-w-5xl">

            <h4 class="text-center mb-10 mt-6 dark:text-gray-200 text-gray-700">   {{__('welecome.servprice')}} <span> {{$getdata->price}}$</span> </h4>
            <div class="text-gray-800  flex-wrap dark:text-gray-300 mx-auto flex justify-center  ">

                {{__('welecome.serv_hint')}}
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left mr-2 ml-2 text-white bg-green-700 rounded-md font-extrabold" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
                  </svg>  <strong>  <a href="/contact" class="mx-2 text-blue-700 border-y-4 border-indigo-500" wire:navigate>{{__('welecome.contact')}}</a>

               </strong>
            </div>


          </div>


    </div>


    </div>
