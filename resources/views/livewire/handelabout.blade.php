

<div class=" overflow-y-auto mb-6">

    <div class="container mx-auto  my-16 shadow-md" x-data ="{}" >

        <h2 class="text-gray-500 dark:text-white p-4 mx-auto">{{ __('backend.mangeabout') }}   </h2>
    </div>

  <div class="container mx-auto mb-4 mt-4 bg-white p-6">
    <form wire:submit.prevent="updateabout">


        <div class="grid md:grid-cols-2 md:gap-6 p-5">



             <div class="relative z-0 min-w-full mb-5 group" >
                <label for="updateproeditor" class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">{{__('backend.aboutdesar')}}</label>

                <div wire:ignore>

                    <div id="updatedisar-container" class="  "></div>

                    <div class="relative z-0 min-w-full mb-5 group" id="updatedisar"   wire:model.live.debounce.150ms="des.ar">






                    </div>

                </div>

                <div>
                    @error('des.ar') <span class="text-danger ">{{ $message }}</span> @enderror
                </div>




             </div>






            <div class="relative z-0 w-full mb-5 group">
                <label for="updateproeditor" class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">{{__('backend.aboutdesen')}}</label>


             <div wire:ignore>
                <div id="updatedisen-container"></div>



                <div id="updatedisen"  wire:model.live.debounce.150ms="des.en">







              </div>

             </div>

            <div>
                @error('des.en') <span class="text-danger ">{{ $message }}</span> @enderror
            </div>


          </div>

        </div>

        <div
        class="flex flex-shrink-0 flex-wrap items-center justify-center rounded-b-md border-t-2 border-neutral-100 p-4 dark:border-white/10">


       <button

        type="submit"
        id="about-submit"

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



    {{-- <script src="{{asset('asset/backend/js/ckedtior.js')}}"></script> --}}
    @script




<script>

    let updatedisen;
    let updatedisar;



    // Initialize DecoupledEditor for 'en'
    DecoupledEditor
        .create(document.querySelector('#updatedisen'), {
            ckfinder: {
                uploadUrl: "{{route('ckeditor.upload',['_token'=> csrf_token()])}}",
            },

            toolbar: [
        'undo', 'redo',


        '|', 'heading',
        '|', 'fontfamily', 'fontsize', 'fontColor', 'fontBackgroundColor',
        '|', 'bold', 'italic',
        '|', 'link', 'uploadImage', 'insertTable', 'blockQuote', 'mediaEmbed',
        '|', 'bulletedList', 'numberedList', 'outdent', 'indent'
    ],

        })
        .then(editor => {
            updatedisen = editor;
            const toolbarContainer = document.querySelector('#updatedisen-container');
            toolbarContainer.appendChild(editor.ui.view.toolbar.element);



            // Set initial data for 'en' editor after Livewire component is done

                updatedisen.setData(@this.des['en']);


        })
        .catch(error => {
            console.error(error);
        });

    // Initialize DecoupledEditor for 'ar'
    DecoupledEditor
        .create(document.querySelector('#updatedisar'), {
            ckfinder: {
                uploadUrl: "{{route('ckeditor.upload',['_token'=> csrf_token()])}}",
            }
        })
        .then(editor => {
            updatedisar = editor;
            const toolbarContainer = document.querySelector('#updatedisar-container');
            toolbarContainer.appendChild(editor.ui.view.toolbar.element);

            // Set initial data for 'ar' editor after Livewire component is done


            updatedisar.setData(@this.des['ar']);

        })
        .catch(error => {
            console.error(error);
        });







    document.querySelector( '#about-submit' ).addEventListener( 'click', () => {

        @this.des['ar'] = updatedisar.getData();
        @this.des['en'] = updatedisen.getData();


    });



Livewire.on('about-updated',() =>{


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
