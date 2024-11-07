<div class=" p-4 pt-20 mx-2 ">
<div class="container mx-auto p-6 ">

    @if($getdata->youtube_url)
    <h2 class="text-center mb-10 mt-6 dark:text-gray-200 text-gray-700">  {{__('welecome.prodes')}} </h2>

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

        <div class="dark:text-gray-300 text-gray-700 " >{!! $getdata?->des !!}</div>

      </div>

      @if($getdata)

      <h3 class="text-center mb-6 mt-6 dark:text-gray-200 text-gray-700">  {{__('welecome.proimages')}}</h3>

      @endif
            <div class="grid sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-4  dark:bg-gray-800 mx-auto max-w-5xl ">


                @if($getdata)
            @foreach(json_decode($getdata->images) as $key=> $value)

            <div>
                <img class="h-80 max-w-full rounded-lg   dark:bg-gray-800" src="{{asset('storage/'. $value)}}" alt="">
            </div>


            @endforeach

            @endif



            </div>


            <h4 class="text-center mb-10 mt-6 dark:text-gray-200 text-gray-700"> {{__('welecome.prolinks')}}  </h4>

            <div class="flex justify-center items-center  ">


                   @if($getdata?->github_link)

                   <a href="{{$getdata?->github_link}}" class="inline-flex items-center mx-4 px-3 py-2 text-sm font-medium text-center text-white bg-green-500 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-400 dark:focus:ring-green-800">
                     رابط الجيت هب

                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github mr-2 ml-2" viewBox="0 0 16 16">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                      </svg>
                </a>

                   @endif

                   @if($getdata?->project_link)

                   <a href="{{$getdata?->project_link}}" class="inline-flex  mr-2 ml-2items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">

                    {{__('welecome.showpro')}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-link-45deg mr-2 ml-2 " viewBox="0 0 16 16">
                        <path d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1 1 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4 4 0 0 1-.128-1.287z"/>
                        <path d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243z"/>
                      </svg>
                </a>

                   @endif

               </div>


</div>


</div>
