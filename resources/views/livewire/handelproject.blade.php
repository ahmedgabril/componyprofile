

<div class=" overflow-y-auto">

    <div class="container mx-auto   my-16 shadow-md">

        <h2 class="text-gray-800 dark:text-white p-4 mx-auto">{{ __('projects.mangeproj') }}   </h2>
    </div>
    <div class="container mx-auto   my-16 p-5 ">
        <button x-data
        x-data @click="$dispatch('open-modal','handel-add-proj')"
        class=" mb-5 block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">


        {{ __('projects.addproj') }}


        </button>



<x-modal name="handel-add-proj" maxWidth="5xl" title="{{ __('projects.addproj') }} " postion="top" resetdata="{{'resetvalue'}}" >


<x-project.modal-add/>




</x-modal>



</div>
 <!-- Modal toggle -->



 <x-modal name="updateproj" maxWidth="5xl" title=" Update Project" postion="top" resetdata="{{'resetvalue'}}" >


    <x-project.modal-update/>




    </x-modal>



    <div class="container mx-auto p-6 rounded-md bg-gray-300 dark:bg-gray-800 my-16 mb-8 shadow-lg">









<div class="relative overflow-x-auto  sm:rounded-lg p-4 ">
<div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4 p-2">


      <x-search-input wire_model="search" input_id="table-search1" placeholder="{{__('catogery.search')}}" />



            <x-selectbox wire_model="sortdir" select_id="countries"  >
                <option value="desc"> {{__('catogery.desc')}}</option>
                <option value="asc"> {{__('catogery.asc')}} </option>

            </x-selectbox>


                <x-selectbox wire_model="paginate" select_id="count"  >
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="30">30</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                    <option value="150">150</option>

                </x-selectbox>


</div>


<div>

    <div class=" grid  md:grid-cols-4 lg:grid-cols-5 sm:grid-cols-1 gap-4 ">


    @forelse($this->getprojects as $item)


    <div class=" card-pro h-96 mb-4   bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" wire:key="{{$item->id}}" >
        <a href="#">
            <img class="rounded-t-lg w-full object-cover " src="{{ asset('storage/'.$item->imgsumnail) }}" alt="sumnail" style="height: 200px" wire:key="{{$item->id}}"/>
        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-2xl  mt-4 font-bold tracking-tight text-gray-900 dark:text-white capitalize text-center break-words">{{$item->name}}</h5>

            </a>
            {{-- <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-wrap capitalize indent-1  truncate">{{$item->des}}</p> --}}

        </div>





        <div class="flex  justify-around items-center mb-5 mt-10">


         <div class="flex cursor-pointer">
         <a href="http://127.0.0.1:8000/en/handelcat?search={{$item->catogery->name}}" wire:navigate class=" text-orange-600 mx-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
              </svg>

         </a>

               <svg class="w-6 h-7 text-green-800 dark:text-green-700"   wire:click.prevent="editproj({{ $item->id }})"

            x-data @click="$dispatch('open-modal','updateproj')"

        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 14v4.833A1.166 1.166 0 0 1 16.833 20H5.167A1.167 1.167 0 0 1 4 18.833V7.167A1.166 1.166 0 0 1 5.167 6h4.618m4.447-2H20v5.768m-7.889 2.121 7.778-7.778"/>
          </svg>


        <svg  class="w-[20px] h-[26px] text-red-700 dark:text-red-800"

        wire:click.prevent="deleteconfirm({{ $item->id }},'{{$item->name}}')"
        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd" d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"/>
          </svg>



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
<div class="my-6 p-4">{{$this->getprojects->links( data: ['scrollTo' => false])}}</div>



        </div>


        </div>




    </div>

    </div>




    @script



<script>


Livewire.on('proj-updated',() =>{






    Swal.fire({
  position: "top-start",
  icon: "success",
  title: "{{__('swal.updatetitle') }}",
  showConfirmButton: false,
  timer: 1500
   });



});
window.addEventListener('deleteproj', (event) => {

    const data = event.detail;
    // const projname = event.detail['proname'];
    Swal.fire({
  title: "{{__('swal.swaltitle') }}" ,
  text: "{{ __('swal.swaltext') }}",
  icon: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "{{ __('swal.swalconfirmButtonText')}} ",
}).then((result) => {
  if (result.isConfirmed) {


    Livewire.dispatch('confirmdel',{ data : data});

  }
});

    });


    Livewire.on('projdeleted', (event) => {



 Swal.fire({
       title: "{{__('swal.swaldeletetitle') }}" ,
      text: "{{ __('swal.swaldeletetext') }}",
      icon: "success",
      timer: 1700,
      showConfirmButton: false,
    });
    });







    window.addEventListener('close-modal',() => {



        Livewire.dispatch('resetvalue')

    });















    </script>

@endscript
