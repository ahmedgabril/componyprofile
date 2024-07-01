<div id=" pdf-container" class=" mt-36 container mx-auto overflow-x-auto bg-gray-50 p-6 dark:text-gray-300 dark:bg-gray-800 rounded-md mb-10">


  <div class="container mx-auto max-w-2xl p-6 mb-6">



    <form wire:submit.prevent="addcv" >


        <div  class="mb-4">
            <label for="cat_en"  class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">{{ __('backend.handelcv') }}</label>
            <input type="file"
             wire:model ="doc"
               accept=".pdf, image/*"
             id="cat_en" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
             focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400
              dark:text-white" placeholder="{{ __('catogery.catname_en') }}"  />
              <div class="text-red-700">@error('doc') {{ $message }} @enderror</div>

        </div>
     <div class="flex justify-center">
        <button
        type="submit"

        class="ms-1 inline-block rounded bg-success px-6 pb-2 pt-2.5 text-sm
        font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out
         hover:bg-green-900 hover:shadow-primary-2 focus:bg-green-800 focus:shadow-success-2 focus:outline-none focus:ring-0
          active:bg-green-600 active:shadow-primary-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong">
          {{ __('backend.handelcv') }}
      </button>

     </div>
      </form>
  </div>


        @if($getpdf)
            <iframe   class=" w-full mx-w-5xl mx-auto" height="950" src="{{asset('storage/'.$getpdf->doc)}}" frameborder="0"></iframe>
                {{-- <h4>{{ $filename }}</h4> --}}
        @endif


</div>

</div>
