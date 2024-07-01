<div class="container mx-auto p-4 "  x-data>

    <form wire:submit.prevent="addserveies" id="addserveies" >

        <div class=" grid lg:grid-cols-4 sm:grid-cols-1 md:grid-cols-4 gap-4 ">


            <div>
                <label for="cat_en"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('serveies.name.en')}}</label>
                <input type="text"  wire:model.blur  ="name.en"  id="cat_en" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400
                  dark:text-white" placeholder="name.en"  />
                  <div class="text-red-700">@error("name.en") {{ $message }} @enderror</div>

            </div>

              <div>
                <label for="cat_ar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('serveies.name.ar')}}</label>
                <input type="text" wire:model.blur ="name.ar"   id="cat_ar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600
                dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name.ar"  />
               <div class="text-red-700">@error('name.ar') {{ $message }} @enderror</div>
              </div>

              <div>
                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('serveies.price')}} </label>
                <input type="text" wire:model.blur ="price"   id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600
                dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"   />
               <div class="text-red-700">@error('price') {{ $message }} @enderror</div>
              </div>

              <div>
                <label for="cat_ar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> {{__('serveies.youtube_url')}}</label>
                <input type="text" wire:model.blur="youtube_url"   id="cat_ar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600
                dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="youtube_url"  />
               <div class="text-red-700">@error('youtube_url') {{ $message }} @enderror</div>
              </div>



        </div>





       <div class="grid lg:grid-cols-2 sm:grid-cols-1 md:grid-cols-2 gap-4 my-4">

            <div>
                <label for="message6" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> {{__('serveies.short-des_en')}}</label>
                <textarea id="message6" rows="4" wire:model.blur="shortdes.en" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50
                rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700
                dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Write your thoughts here..."></textarea>

                <div class="text-red-700">@error('shortdes.en') {{ $message }} @enderror</div>

            </div>


            <div>
                <label for="message7" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('serveies.short-des_ar')}}</label>
                <textarea id="message7" rows="4" wire:model.blur="shortdes.ar" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50
                rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700
                dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Write your thoughts here..."></textarea>
                <div class="text-red-700">@error('shortdes.ar') {{ $message }} @enderror</div>

            </div>


   </div>





   <div class="grid lg:grid-cols-2 sm:grid-cols-1 md:grid-cols-2 gap-4 my-4">

    <div>
        <div  wire:ignore>
        <label for="desen" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('serveies.des-en')}}</label>

        <div id="desen-container"></div>
        <div id="desen" wire:model.blur="des.en" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50
        rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700
        dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        placeholder="Write your thoughts here..."></div>

        </div>

        <div class="text-red-700">@error('des.en') {{ $message }} @enderror</div>

    </div>


    <div>
        <div  wire:ignore>
        <label for="desar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('serveies.des-ar')}}</label>

        <div id="desar-container"></div>
        <div id="desar"  wire:model.blur="des.ar"  class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50
        rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700
        dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        placeholder="Write your thoughts here..."></div>
    </div>
    <div class="text-red-700">@error('des.ar') {{ $message }} @enderror</div>

    </div>

</div>

<div class="grid lg:grid-cols-2 sm:grid-cols-1 md:grid-cols-2 gap-4 my-4">

    <div x-data ="{src: '' }">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image-sumnail">{{__('serveies.imgsumnail')}}</label>

    <img x-on:click="$refs.sumnail.click()" :src= "src ? src :'/img/uploadimg.jpg' "   width="250" height="250"/>

   <input  x-ref="sumnail" accept="image/*" class=" w-full text-sm hidden text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400
    focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" wire:model="imgsumnail"

  @change="src = URL.createObjectURL($event.target.files[0])"
     id="isumnail" type="file">


     @error('imgsumnail') <span class="text-red-700">{{ $message }}</span> @enderror

    </div>


    <div>


        <div class="uplodefile">

{{--
            @if ($this->images)
            <div class="grid grid-cols-4 gap-4">
                @foreach($this->images as $key => $screen)
                    <div style="position: relative">
                        <!-- Close button to remove the image -->
                        <a href="#" style="position: absolute; margin-right: 5px; margin-top: 6px; background-color: red;"
                           wire:click.prevent="removeimg('{{ $key }}')" class="btn-close">x</a>
                        <!-- Display the image -->
                        <img src="{{ $screen->temporaryUrl() }}" height="200" width="200"/>
                    </div>
                @endforeach
            </div>
        @endif --}}
                <div class="" wire:ignore>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">{{__('serveies.images')}}</label>
                    <input

                    id="ser_add" wire:model="images" type="file" multiple accept="image/*">

                    @error('images.*') <span class="text-danger ">{{ $message }}</span> @enderror

                </div>
    </div>

    </div>
</div>

        </form>

 <!-- Modal footer -->
 <div
 class="flex flex-shrink-0 flex-wrap items-center justify-center rounded-b-md border-t-2 border-neutral-100 p-4 dark:border-white/10">


 <button
 id="addser-submit"
 type="submit"
   form="addserveies"
 class="ms-1 inline-block rounded bg-success px-6 mx-5 pb-2 mt-2 pt-2.5 text-sm
 font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out
  hover:bg-green-900 hover:shadow-primary-2 focus:bg-green-800 focus:shadow-success-2 focus:outline-none focus:ring-0
   active:bg-green-600 active:shadow-primary-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong">
   {{__('serveies.addserv')}}
</button>
 <button
   type="button"
   {{-- wire:click.prevent = "resetvalue" --}}
   x-data @click="$dispatch('close-modal','add-serveies')"
   class="inline-block rounded bg-red-700 px-6 pb-2 pt-2.5 mt-2 text-xs font-medium uppercase leading-normal text-white
     dark:text-white transition duration-150 ease-in-out hover:bg-red-600 focus:bg-primary-accent-200 focus:outline-none focus:ring-0
      active:bg-primary-accent-200 dark:bg-red-700 dark:hover:bg-red-900 dark:focus:bg-red-900 dark:active:bg-red-400">
   Close
 </button>

</div>
    </div>
@script
<script>

let editorservar;
let editorserven;

DecoupledEditor
    .create( document.querySelector( '#desen' ), {

        // Configure the toolbar

        ckfinder: {
            uploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        },
        // Add heading options to the editor configuration

    })
    .then( editor => {
        editorserven = editor;
        const toolbarContainer = document.querySelector( '#desen-container' );
        toolbarContainer.appendChild( editor.ui.view.toolbar.element );
    })
    .catch( error => {
        console.error( error );
    });



        DecoupledEditor
        .create( document.querySelector( '#desar' ),{

            ckfinder:{

            uploadUrl:"{{route('ckeditor.upload',['_token'=> csrf_token()])}}",

            },
        } )
        .then( editor => {

            editorservar = editor;
            const toolbarContainer = document.querySelector( '#desar-container' );

            toolbarContainer.appendChild( editor.ui.view.toolbar.element );
        } )
        .catch( error => {
            console.error( error );
        } );








document.querySelector( '#addser-submit' ).addEventListener( 'click', () => {
    @this.des['ar'] = editorservar.getData();
    @this.des['en'] = editorserven.getData();


} );



</script>

@endscript
