<div class="pt-16 overflow-y-auto">


    <div class="container mx-auto" x-data="{showtap: 'logoimg'}" >



<div class="mb-4 border-b border-gray-200 dark:border-gray-700" >
    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab"  >
        <li class="me-2 " >
            <a href="#"
            @click="showtap ='logoimg' "

            id="profile-tab"  type="button" role="tab"
            :class=" showtap == 'logoimg' ? 'text-green-600 border-green-600':''"
            class="inline-flex items-center justify-center p-4   border-b-2 border-transparent rounded-t-lg dark:text-gray-300 hover:text-green-600 hover:border-green-600 dark:hover:text-green-600 group">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mx-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
              </svg>
                  Uploade Logo
            </a>

        </li>

        <li class="me-2 " >
            <a href="#"
            @click="showtap = 'hearo' "

            id="profile-tab"  type="button" role="tab"
            :class="showtap =='hearo' ? 'text-green-600 border-green-600':'' "
            class="inline-flex items-center justify-center p-4   border-b-2 border-transparent rounded-t-lg dark:text-gray-300 hover:text-green-600 hover:border-green-600 dark:hover:text-green-600 group">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 ml-2 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9.75v6.75m0 0-3-3m3 3 3-3m-8.25 6a4.5 4.5 0 0 1-1.41-8.775 5.25 5.25 0 0 1 10.233-2.33 3 3 0 0 1 3.758 3.848A3.752 3.752 0 0 1 18 19.5H6.75Z" />
              </svg>

                  heraro image
            </a>

        </li>


        <li class="me-2 " >
            <a href="#"
            @click="showtap = 'hearocontent' "

            id="profile-tab"  type="button" role="tab"
            :class="showtap =='hearocontent' ? 'text-green-600 border-green-600':'' "
            class="inline-flex items-center justify-center p-4   border-b-2 border-transparent rounded-t-lg dark:text-gray-300 hover:text-green-600 hover:border-green-600 dark:hover:text-green-600 group">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 ml-2 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
              </svg>


                  heraro content
            </a>

        </li>

    </ul>
</div>






    <div class=" p-4 rounded-lg bg-gray-50 dark:bg-gray-800 shadow-lg">



         <div class="logos"

         x-show="showtap == 'logoimg' "
        >



            @if($getlogotemp && $logo == null)
            <div class="flex justify-center">
                <img  src= "{{asset('storage/'.$getlogotemp)}}" class=" rounded-md mb-4"   width="400" height="400" alt="logo"/>
            </div>

            @endif








            <div class="" x-data   wire:ignore



            >






          <input type="file" id="imglogo" x-ref="inputlogo" accept="image/.*" wire:model="logo"  />




            </div>



            <button

          type="button"

          wire:click.prevent="uploadlogo"
          class="ms-1 inline-block rounded bg-success px-6 mx-5 pb-2 mt-2 pt-2.5 text-sm
          font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out
           hover:bg-green-900 hover:shadow-primary-2 focus:bg-green-800 focus:shadow-success-2 focus:outline-none focus:ring-0
            active:bg-green-600 active:shadow-primary-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong">
            {{__('projects.updatebtn')}}
         </button>

             <div>
                @error('logo') <span class="text-danger ">{{ $message }}</span> @enderror
            </div>











         </div>





         <div class="heraroimgs "





         x-show="showtap == 'hearo' "
          >

          <div class="flex justify-center">

            @if($getheroimgtemp && $hearoimg == null)
            <img  src= "{{asset('storage/'.$getheroimgtemp)}}" class=" rounded-md mb-4"   width="400" height="400" alt="logo"/>
            @endif
          </div>

         <div class=""   wire:ignore>






       <input type="file"  id="imagehearo" accept="image/.*" wire:model="hearoimg"  />


       <button

       type="button"

       wire:click.prevent="uploadhearo"
       class="ms-1 inline-block rounded bg-success px-6 mx-5 pb-2 mt-2 pt-2.5 text-sm
       font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out
        hover:bg-green-900 hover:shadow-primary-2 focus:bg-green-800 focus:shadow-success-2 focus:outline-none focus:ring-0
         active:bg-green-600 active:shadow-primary-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong">
         {{__('projects.updatebtn')}}
      </button>


         </div>
          <div>
             @error('hearoimg') <span class="text-danger ">{{ $message }}</span> @enderror
          </div>
       </div>
     <div class="hearocontent" x-show="showtap == 'hearocontent' ">



        <form class=" max-w-4xl mx-auto p-6 mt-3 mb-3" wire:submit.prevent="updatehearocontent">


            <div class="grid md:grid-cols-2 md:gap-6 p-5">
              <div class="relative z-0 w-full mb-5 group">
                  <input type="text" name="floating_first_name" id="floating_first_name"

                  wire:model="compony_name.ar"
                   class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300
                   appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0
                    focus:border-blue-600 peer" placeholder=" "  />
                  <label for="floating_first_name"
                  class="peer-focus:font-medium absolute text-sm
                   text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0
                    rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100
                     peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">componyname-ar</label>
              </div>






              <div class="relative z-0 w-full mb-5 group">
                  <input type="text"

                  wire:model="compony_name.en"
                  name="floating_last_name" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                  <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600
                   peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0
                   peer-focus:scale-75 peer-focus:-translate-y-6">componyname-en</label>
              </div>



            </div>






            <div class="grid md:grid-cols-2 md:gap-6">
              <div class="relative z-0 w-full mb-5 group">


                <label for="hearotitlear"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">hearotitle-ar</label>
                <textarea id="hearotitlear" rows="4"
                wire:model="hearotitle.ar"
                class="block p-2.5 w-full text-sm
                 text-gray-900 bg-gray-50 rounded-lg border
                  border-gray-300 focus:ring-blue-500 focus:border-blue-500
                   dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                   placeholder="Leave a comment..."></textarea>

              </div>



              <div class="relative z-0 w-full mb-5 group">

                <label for="hearotitleen" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">hearotitle-en</label>
                <textarea id="hearotitleen" wire:model="hearotitle.en" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment..."></textarea>
              </div>
            </div>


            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 w-full mb-5 group">


                  <label for="messageshortdesar"   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">shortdes-ar</label>
                  <textarea id="messageshortdesar"
                  wire:model="shortdes.ar"
                  rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment..."></textarea>

                </div>


                <div class="relative z-0 w-full mb-5 group">

                  <label for="messageshortdesen" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">shortdes-en</label>
                  <textarea id="messageshortdesen" wire:model="shortdes.en" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment..."></textarea>
                </div>
              </div>



            <button type="submit"
            class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none
             focus:ring-green-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">save</button>
          </form>


     </div>

    </div>




    </div>




</div>



@script






<script>




    FilePond.registerPlugin(FilePondPluginImagePreview);

    FilePond.setOptions({
        server: {


            process: (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {

           @this.upload('logo',file,load);
           @this.upload('hearoimg',file,load);

            },


          revert:(filename, load, error) => {
            @this.removeUpload('logo',filename,load)
            @this.removeUpload('hearoimg',filename,load)

          },


        },
    });

    const inputElement = document.querySelector("#imglogo");
    const hearoimginput = document.querySelector("#imagehearo");
    const pond = FilePond.create(inputElement);
    const pondhearo = FilePond.create(hearoimginput);





Livewire.on('logo-updated',() => {

 const colsebtn = document.querySelector('.filepond--action-revert-item-processing');


if(colsebtn){

    colsebtn.click();
}



        Swal.fire({
        position: "center",
        icon: "success",
        title: "{{__('swal.updatetitle') }}",
        showConfirmButton: false,
        timer: 1500
        });



        });



  Livewire.on('hearoimg-updated',() => {

const colsebtn = document.querySelector('.filepond--action-revert-item-processing');


if(colsebtn){

   colsebtn.click();
}



       Swal.fire({
       position: "center",
       icon: "success",
       title: "{{__('swal.updatetitle') }}",
       showConfirmButton: false,
       timer: 1500
       });



       });


       Livewire.on('hearocon-updated',() => {



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
