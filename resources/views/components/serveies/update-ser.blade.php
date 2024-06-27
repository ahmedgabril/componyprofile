<div class="container mx-auto p-4 ">

    <form wire:submit.prevent="updateserv" id="serveies-update-form" >

        <div class=" grid lg:grid-cols-4 sm:grid-cols-1 md:grid-cols-4 gap-4 ">


            <div>
                <label for="cat_en"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('serveies.name.en')}}</label>
                <input type="text"  wire:model.live ="name.en"  id="cat_en" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400
                  dark:text-white" placeholder="name.en"  />
                  <div class="text-red-700">@error("name.en") {{ $message }} @enderror</div>

            </div>

              <div>
                <label for="cat_ar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> {{__('serveies.name.ar')}}</label>
                <input type="text" wire:model.live="name.ar"   id="cat_ar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600
                dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name.ar"  />
               <div class="text-red-700">@error('name.ar') {{ $message }} @enderror</div>
              </div>

              <div>
                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('serveies.price')}}</label>
                <input type="text" wire:model.blur ="price"   id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600
                dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"  />
               <div class="text-red-700">@error('price') {{ $message }} @enderror</div>
              </div>

              <div>
                <label for="cat_ar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('serveies.youtube_url')}}</label>
                <input type="text" wire:model.live="youtube_url"   id="cat_ar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600
                dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="youtube_url"  />
               <div class="text-red-700">@error('youtube_url') {{ $message }} @enderror</div>
              </div>


        </div>






       <div class="grid lg:grid-cols-2 sm:grid-cols-1 md:grid-cols-2 gap-4 my-4">

            <div>
                <label for="message0" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('serveies.short-des_en')}}</label>
                <textarea id="message0" rows="4" wire:model="shortdes.en" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50
                rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700
                dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Write your thoughts here..."></textarea>

                <div class="text-red-700">@error('shortdes.en') {{ $message }} @enderror</div>

            </div>


            <div>
                <label for="message1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('projects.short-des_ar')}}</label>
                <textarea id="message1" rows="4" wire:model="shortdes.ar" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50
                rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700
                dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Write your thoughts here..."></textarea>

                <div class="text-red-700">@error('shortdes.ar') {{ $message }} @enderror</div>
            </div>
   </div>





   <div class="grid lg:grid-cols-2 sm:grid-cols-1 md:grid-cols-2 gap-4 my-4">

    <div wire:ignore>
        <label for="updateserveditor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('serveies.des-ar')}}</label>

        <div id="updateserv-container"></div>
        <div id="updateserveditor" wire:model.live="des.en" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50
        rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700
        dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        placeholder="Write your thoughts here..."></div>

        <div class="text-red-700">@error('des.en') {{ $message }} @enderror</div>

    </div>


    <div  wire:ignore>
        <label for="updatedesarserv" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('serveies.des-en')}}</label>
        <div id="updatedesarserv-container"></div>
        <div id="updatedesarserv"  wire:model.live="des.ar"  class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50
        rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700
        dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        placeholder="Write your thoughts here..."></div>

    </div>
</div>

<div class="grid lg:grid-cols-2 sm:grid-cols-1 md:grid-cols-2 gap-4 my-4">

    <div x-data = "{src:''} " >
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image-sumnail">{{__('serveies.imgsumnail')}}</label>


        @if($this->imgsumnail_temp && $this->imgsumnail == null)

        <div class="mb-3 mt-2" style="position: relative">




            <img   class="" src="{{asset('storage/'.$this->imgsumnail_temp)}}" height="200" width="250">



        </div>


    @endif

<div class="" >

  @if($this->sumnail_status)

  <img x-on:click="$refs.sumnail.click()" :src=" src "   width="250" height="250"/>

  @endif

   <input x-ref="sumnail" accept="image/*" class=" w-full text-sm hidden text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400
    focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
    wire:change="changstatus"
    wire:model="imgsumnail"
    id="image-sumnail" type="file"
    @change=" src = URL.createObjectURL($event.target.files[0])"

    />


     @error('imgsumnail') <span class="text-red-600 ">{{ $message }}</span> @enderror
    </div>
    </div>


    <div>


        <div class="uplodefile">


            @if ($this->images_temp && is_array($this->images_temp) || is_object($this->images_temp))
            <div class="grid grid-cols-4 gap-4">

                    @foreach($this->images_temp as $key => $screen)
                        <div class=" " style="position: relative" wire:key="{{$key}}">

                            <a  href="#"
                               style="  position: absolute;
                            margin-right: 5px;
                            margin-top: 6px;
                    "
                                wire:click.prevent="removeimg( {{$key}} , '{{$screen}}' )" class="btn-close" >   <svg  class="w-[20px] h-[26px] text-red-600 dark:text-red-600"


                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"/>
                                  </svg>

                        </a>
                            <img   src="{{asset('storage/'.$screen) }}" class=" object-cover h-36 w-full" height="150" width="150"/>
                        </div>
                    @endforeach

          </div>

          @endif
                <div class="" wire:ignore>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="ser_update"> {{__('projects.images')}}</label>
                    <input

                    id="ser_update" wire:model="images" type="file" multiple accept="image/*">

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

 type="submit"
 id="update-serv-submit"
   form="serveies-update-form"
 class="ms-1 inline-block rounded bg-success px-6 mx-5 pb-2 mt-2 pt-2.5 text-sm
 font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out
  hover:bg-green-900 hover:shadow-primary-2 focus:bg-green-800 focus:shadow-success-2 focus:outline-none focus:ring-0
   active:bg-green-600 active:shadow-primary-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong">
   {{__('projects.updatebtn')}}
</button>
 <button
   type="button"

   {{-- wire:click.prevent = "resetvalue" --}}
   x-data @click="$dispatch('close-modal','update-serveies')"
   class="inline-block rounded bg-red-700 px-6 pb-2 pt-2.5 mt-2 text-xs font-medium uppercase leading-normal text-white
     dark:text-white transition duration-150 ease-in-out hover:bg-red-600 focus:bg-primary-accent-200 focus:outline-none focus:ring-0
      active:bg-primary-accent-200 dark:bg-red-700 dark:hover:bg-red-900 dark:focus:bg-red-900 dark:active:bg-red-400">
   Close
 </button>

</div>
    </div>

    @script
    <script>

    let Updateeditorar;
    let updateeditoren;


        DecoupledEditor
            .create( document.querySelector( '#updateserveditor' ),{
        ckfinder:{

            uploadUrl:"{{route('ckeditor.upload',['_token'=> csrf_token()])}}",

        },

    })
            .then( editor => {
                Updateeditoren = editor;
                const toolbarContainer = document.querySelector( '#updateserv-container' );

                toolbarContainer.appendChild( editor.ui.view.toolbar.element );
            })
            .catch( error => {
                console.error( error );
            } );





            DecoupledEditor
            .create( document.querySelector( '#updatedesarserv' ),{
        ckfinder:{

            uploadUrl:"{{route('ckeditor.upload',['_token'=> csrf_token()])}}",

        }

    })
            .then( editor => {

                Updateeditorar = editor;
                const toolbarContainer = document.querySelector( '#updatedesarserv-container' );

                toolbarContainer.appendChild( editor.ui.view.toolbar.element );
            } )
            .catch( error => {
                console.error( error );
            } );








    document.querySelector( '#update-serv-submit' ).addEventListener( 'click', () => {
        @this.des['ar'] = Updateeditorar.getData();
        @this.des['en'] = Updateeditoren.getData();



    } );


    window.addEventListener('edit-des',()=>{

        Updateeditorar.setData(@this.des['ar']);
        Updateeditoren.setData(@this.des['en']);



});

    Livewire.on('serv-updated',() =>{



        Updateeditorar.setData('');
        Updateeditoren.setData('');





        });



    </script>

    @endscript

