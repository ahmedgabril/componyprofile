

<div>

    <div class="container mx-auto   my-16">

        <h2 class="text-gray-800 dark:text-white p-4 mx-auto">{{ __('catogery.mangecat') }}   </h2>
    </div>
    <div class="container mx-auto   my-16 p-5">



                <!-- Modal toggle -->
<button data-modal-target="catogery-modal" data-modal-toggle="catogery-modal"
class=" mb-5 block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">


{{ __('catogery.addcatoegery') }}


</button>



 <!-- Main modal -->
<div id="catogery-modal"  tabindex="-1"
aria-hidden="true"

wire:ignore.self

class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full" >
 <div class="relative p-4 w-full max-w-md max-h-full">
     <!-- Modal content -->
     <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
         <!-- Modal header -->
         <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
             <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
               {{ __('catogery.addcatoegery') }}
             </h3>
             <button type="button"
             id="closemodal" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900
              rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="catogery-modal">
                 <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                 </svg>
                 <span class="sr-only">Close modal</span>
             </button>
         </div>
         <!-- Modal body -->
         <div class="p-4 md:p-5">
            <form class="space-y-4" wire:submit="addcatogery">

                 <div>


                    <div>
                        <label for="cat_en"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('catogery.catname_en') }}</label>
                        <input type="text"  wire:model="name_en"  id="cat_en" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                         focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400
                          dark:text-white" placeholder="{{ __('catogery.catname_en') }}"  />
                          <div class="text-red-700">@error('name_en') {{ $message }} @enderror</div>

                    </div>
                     <label for="cat_ar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('catogery.catname_ar') }}</label>
                     <input type="text" wire:model="name_ar"   id="cat_ar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                      focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600
                       dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="{{ __('catogery.catname_ar') }}"  />
                       <div class="text-red-700">@error('name_ar') {{ $message }} @enderror</div>
                 </div>

                 <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none
                  focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600
                   dark:hover:bg-blue-700 dark:focus:ring-blue-800">  {{ __('catogery.addcatoegery') }}</button>
            </form>
         </div>

     </div>
 </div>
</div>

{{-- updatecatogery-model --}}

 <!-- Main modal -->
 <div id="update-cat"  tabindex="-1"
 aria-hidden="true"

 wire:ignore.self

 class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full" >
  <div class="relative p-4 w-full max-w-md max-h-full">
      <!-- Modal content -->
      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
          <!-- Modal header -->
          <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
              <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                {{ __('catogery.updatecat') }}
              </h3>
              <button type="button"
              id="closemodal" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900
               rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="update-cat">
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                  </svg>
                  <span class="sr-only">Close modal</span>
              </button>
          </div>
          <!-- Modal body -->
          <div class="p-4 md:p-5">
             <form class="space-y-4" wire:submit="updatecatogery">

                  <div>


                     <div>
                         <label for="cat_en"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('catogery.catname_en') }}</label>
                         <input type="text"  wire:model.live ="name_en"  id="cat_en" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                          focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400
                           dark:text-white" placeholder="{{ __('catogery.catname_en') }}"  />
                           <div class="text-red-700">@error('name_en') {{ $message }} @enderror</div>

                     </div>
                      <label for="cat_ar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('catogery.catname_ar') }}</label>
                      <input type="text" wire:model.live="name_ar"   id="cat_ar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                       focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600
                        dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="{{ __('catogery.catname_ar') }}"  />
                        <div class="text-red-700">@error('name_ar') {{ $message }} @enderror</div>
                  </div>

                  <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none
                   focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600
                    dark:hover:bg-blue-700 dark:focus:ring-blue-800">  {{ __('catogery.updatecat') }}</button>
             </form>
          </div>

      </div>
  </div>
 </div>



    </div>

    <div class="container mx-auto p-6 rounded-md bg-gray-200 dark:bg-gray-800 my-16 mb-5 shadow-2">









<div class="relative overflow-x-auto shadow-md sm:rounded-lg p-4">
<div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4 p-2">




    <label for="table-search" class="sr-only">{{__('catogery.search')}}</label>
    <div class="relative  ">
        <div class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
        </div>
        <input type="text" id="table-search" wire:model.live.debounce.200ms="search" class="block  ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg  w-60 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for items">
    </div>


    <div>


            <select id="countries" wire:model.live="sortdir" class="bg-gray-50 border border-gray-300
             text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5


             dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 pl-8">
              <option value="desc"> {{__('catogery.desc')}}</option>
              <option value="asc"> {{__('catogery.asc')}} </option>

            </select>


    </div>



    <div>


        <select id="countries" wire:model.live="paginate" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <option value="5">5</option>
          <option value="10">10</option>
          <option value="15">15</option>
          <option value="30">30</option>
           <option value="50">50</option>
           <option value="100">100</option>
           <option value="150">150</option>
        </select>


</div>




</div>


<div>

    <div class=" grid  md:grid-cols-4 lg:grid-cols-5 sm:grid-cols-1 gap-4 ">
    @forelse ($catogeries as $item)


            <div class=" ">

                <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-wrap  ">
                        {{ $item->name }}</h5>
                        <div class="flex justify-center">


                            <svg class="w-[19px] h-[19px] text-green-600 dark:text-green-600"
                                wire:click="editcatogery({{ $item->id}})" data-modal-target="update-cat" data-modal-toggle="update-cat"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.1" d="M18 14v4.833A1.166 1.166 0 0 1 16.833 20H5.167A1.167 1.167 0 0 1 4 18.833V7.167A1.166 1.166 0 0 1 5.167 6h4.618m4.447-2H20v5.768m-7.889 2.121 7.778-7.778"/>
                              </svg>

                            <svg  wire:click="deleteconfirm({{$item->id}})" class="w-[19px] h-[19px] text-red-700 dark:text-red-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"/>
                              </svg>

                        </div>

                </a>
            </div>

    @empty
    <div class="flex items-center   p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
        </svg>
        <span class="sr-only">Info</span>
        <div class="">
          <span class="font-medium">Danger alert!</span> catogeries not found.
        </div>
      </div>
    @endforelse


    </div>

    <div class="my-6 p-4">{{$catogeries->links()}}</div>

</div>



</div>





    </div>




    @script

<script>

window.addEventListener('catogery-updated',()=>{

    Swal.fire({
  position: "top-start",
  icon: "success",
  title: "catogery  has been updated",
  showConfirmButton: false,
  timer: 1500
});

const modal = document.getElementById('update-cat');

if (modal) {
modal.click();
}


});
window.addEventListener('deletecat', (event) => {

    const categoryId = event.detail;
    Swal.fire({
  title: "Are you sure?",
  text: "You won't be able to revert this!",
  icon: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes, delete it!"
}).then((result) => {
  if (result.isConfirmed) {

    $wire.dispatch('confirmdel',categoryId);

  }
});

    });


    window.addEventListener('catogerydeleted', (event) => {

 Swal.fire({
      title: "Deleted!",
      text: "Your catogery has been deleted.",
      icon: "success",
      timer: 1700,
      showConfirmButton: false,
    });
    });




    window.Livewire.on('categoryAdded', () => {

        Swal.fire({
        title: 'Catogery Created successfully!',
        icon: 'success',
        timer: 3000,
        toast: true,
        position: 'top-right',
        showConfirmButton: false,
    });

        const modal = document.getElementById('closemodal');

                if (modal) {
            modal.click();
        }










    });


















    </script>

@endscript
