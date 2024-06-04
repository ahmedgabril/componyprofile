<div class="container mx-auto p-4">

    <form wire:submit.prevent="updatecatogery" id="catogery-update-form">


        <div>
            <label for="cat_en"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('catogery.catname_en') }}</label>
            <input type="text"  wire:model.live ="name.en"  id="cat_en" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
             focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400
              dark:text-white" placeholder="{{ __('catogery.catname_en') }}"  />
              <div class="text-red-700">@error('name.en') {{ $message }} @enderror</div>

        </div>

          <div>
            <label for="cat_ar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('catogery.catname_ar') }}</label>
            <input type="text" wire:model.live="name.ar"   id="cat_ar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
            focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600
            dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="{{ __('catogery.catname_ar') }}"  />
           <div class="text-red-700">@error('name.ar') {{ $message }} @enderror</div>
          </div>
          <div x-data ="{src: null }">


          @if($this->icon && $this->sumnail_status == false)

          <div class="mb-3 mt-4" >


            <label class="block mb-2 mt-4 text-sm font-medium text-gray-900 dark:text-white" for="image-icons">{{__('catogery.icon')}}</label>


              <img    class="" src="{{asset('storage/'.$this->icon)}}" height="200" width="250">



          </div>


      @endif

          @if($this->sumnail_status)


        <img x-on:click="$refs.icon.click()" :src= "src ? src :'' "   width="250" height="250"/>
        @endif
       <input
       wire:change="chang_icon_status"

       x-ref="icon" accept="image/*" class=" w-full text-sm hidden text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400
        focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" wire:model="icon"

      @change=" src = URL.createObjectURL($event.target.files[0])"
         id="image-icons" type="file">


         @error('icon') <span class="text-danger ">{{ $message }}</span> @enderror



    </div>
        </form>

 <!-- Modal footer -->
 <div
 class="flex flex-shrink-0 flex-wrap items-center justify-center rounded-b-md border-t-2 border-neutral-100 p-4 dark:border-white/10">
 <button
   type="button"

   x-data @click="$dispatch('close-modal','handelcat')"
   class="inline-block rounded bg-red-700 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white
     dark:text-white transition duration-150 ease-in-out hover:bg-red-600 focus:bg-primary-accent-200 focus:outline-none focus:ring-0
      active:bg-primary-accent-200 dark:bg-red-700 dark:hover:bg-red-900 dark:focus:bg-red-900 dark:active:bg-red-400">
   Close
 </button>
 <button
   type="submit"
     form="catogery-update-form"
   class="ms-1 inline-block rounded bg-success px-6 pb-2 pt-2.5 text-sm
   font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out
    hover:bg-green-900 hover:shadow-primary-2 focus:bg-green-800 focus:shadow-success-2 focus:outline-none focus:ring-0
     active:bg-green-600 active:shadow-primary-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong">
     {{__('catogery.updatecat')}}
 </button>
</div>
    </div>
