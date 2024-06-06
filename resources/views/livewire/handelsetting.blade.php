<div class="pt-16 overflow-y-auto">


    <div class="container mx-auto">



<div class="mb-4 border-b border-gray-200 dark:border-gray-700" >
    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist" wire:ignore>
        <li class="me-2 " role="presentation ">
            <a href="#"

            id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"
            class="inline-flex items-center justify-center p-4   border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mx-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
              </svg>
                  logo
            </a>

        </li>
        <li class="me-2" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600
             hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab"
              data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard"
               aria-selected="false">compony-name</button>
        </li>
        <li class="me-2" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Settings</button>
        </li>

    </ul>
</div>



<div id="default-tab-content " >
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab"  wire:ignore>

         <div>
            <form wire:submit.prevent="uploadlogo">

                <label class="ms-1 inline-block rounded bg-success px-6 mx-5 mb-3 pb-2 mt-2 pt-2.5 text-sm
                font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out
                 hover:bg-green-900 hover:shadow-primary-2 focus:bg-green-800 focus:shadow-success-2 focus:outline-none focus:ring-0
                  active:bg-green-600 active:shadow-primary-2 dark:shadow-black/30 dark:hover:shadow-dark-strong

                  dark:focus:shadow-dark-strong dark:active:shadow-dark-strong cursor-pointer" for="imglogo"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 7.5h-.75A2.25 2.25 0 0 0 4.5 9.75v7.5a2.25 2.25 0 0 0 2.25 2.25h7.5a2.25 2.25 0 0 0 2.25-2.25v-7.5a2.25 2.25 0 0 0-2.25-2.25h-.75m0-3-3-3m0 0-3 3m3-3v11.25m6-2.25h.75a2.25 2.25 0 0 1 2.25 2.25v7.5a2.25 2.25 0 0 1-2.25 2.25h-7.5a2.25 2.25 0 0 1-2.25-2.25v-.75" />
                  </svg>
                  </label>






            <div x-data ="{src: null }">

                @if($getlogotemp)
                <img  src= "{{asset('storage/'.$getlogotemp)}}" class=" rounded-md"   width="250" height="250" alt="logo"/>
                @endif
                @if($this->logo_status)

                <img x-on:click="$refs.sumnail.click()" :src=" src"  class=" rounded-md"  width="220" height="220"/>

                @endif

           <input  x-ref="sumnail" accept="image/*" class=" w-full text-sm hidden text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400
            focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"  wire:model="logo"
            wire:change="changstatus"
            @change=" src = URL.createObjectURL($event.target.files[0])"
             id="imglogo" type="file">


             @error('logo') <span class="text-danger ">{{ $message }}</span> @enderror

             <button

             type="submit"
             id="update-submit"

             class="ms-1 inline-block rounded bg-success px-6 mx-5 pb-2 mt-2 pt-2.5 text-sm
             font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out
              hover:bg-green-900 hover:shadow-primary-2 focus:bg-green-800 focus:shadow-success-2 focus:outline-none focus:ring-0
               active:bg-green-600 active:shadow-primary-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong">
               {{__('projects.updatebtn')}}
            </button>

            </div>

        </form>
         </div>

    </div>
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
    </div>
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel" aria-labelledby="settings-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Settings tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
    </div>

</div>

    </div>

    <div class="container"></div>


</div>
@script
<script>


Livewire.on('logo-updated',() =>{






Swal.fire({
position: "center",
icon: "success",
title: "{{__('swal.updatetitle') }}",
showConfirmButton: false,
timer: 1500
});



});
</script>


@endscript
