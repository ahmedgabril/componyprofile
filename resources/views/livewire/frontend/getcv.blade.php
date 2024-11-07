<div id=" pdf-container" class=" mt-36 container mx-auto overflow-x-auto bg-gray-50 p-6 dark:text-gray-300 dark:bg-gray-800 rounded-md mb-10">


    <a href="{{asset('storage/'.$getpdf?->doc)}}" download class=" text-gray-100 p-2 py-2 mb-4 flex max-w-40 cursor-pointer " style="background-color: rgb(50, 54, 57)">

        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mr-2 ml-2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 7.5h-.75A2.25 2.25 0 0 0 4.5 9.75v7.5a2.25 2.25 0 0 0 2.25 2.25h7.5a2.25 2.25 0 0 0 2.25-2.25v-7.5a2.25 2.25 0 0 0-2.25-2.25h-.75m-6 3.75 3 3m0 0 3-3m-3 3V1.5m6 9h.75a2.25 2.25 0 0 1 2.25 2.25v7.5a2.25 2.25 0 0 1-2.25 2.25h-7.5a2.25 2.25 0 0 1-2.25-2.25v-.75" />
          </svg>


        Download File </a>



          @if($getpdf)
              <iframe   class=" w-full mx-w-5xl mx-auto mt-2" height="950" src="{{asset('storage/'.$getpdf?->doc)}}" frameborder="0"></iframe>
                  {{-- <h4>{{ $filename }}</h4> --}}
          @endif


  </div>

  </div>
  <script>

    document.title = "my cv";
   </script>
