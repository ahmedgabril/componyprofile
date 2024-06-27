<div class="container mx-auto p-4 ">

    <form wire:submit.prevent="updateproj" id="project-update-form" >

        <div class=" grid lg:grid-cols-3 sm:grid-cols-1 md:grid-cols-3 gap-4 ">


            <div>
                <label for="cat_en"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('projects.name.en')}}</label>
                <input type="text"  wire:model.live ="name.en"  id="cat_en" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400
                  dark:text-white" placeholder="name.en"  />
                  <div class="text-red-700">@error("name.en") {{ $message }} @enderror</div>

            </div>

              <div>
                <label for="cat_ar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> {{__('projects.name.ar')}}</label>
                <input type="text" wire:model.live="name.ar"   id="cat_ar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600
                dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name.ar"  />
               <div class="text-red-700">@error('name.ar') {{ $message }} @enderror</div>
              </div>



               <div class="w-full mx-auto">


                        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> {{__('projects.catogery-name')}}</label>
                        <select id="countries" wire:model.live="catogery_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @if($this->getproject_id)
                            <option  selected>....</option>
                        @foreach ($this->getproject_id as $item)

                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach

                        @endif


                        </select>
                        <div class="text-red-700">@error('catogery_id') {{ $message }} @enderror</div>



             </div>


        </div>




        <div class=" grid lg:grid-cols-3 sm:grid-cols-1 md:grid-cols-3 gap-4 mt-4">


            <div>
                <label for="cat_en"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('projects.project_link')}}</label>
                <input type="text"  wire:model.live ="project_link"  id="cat_en" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400
                  dark:text-white" placeholder="project_link"  />
                  <div class="text-red-700">@error("project_link") {{ $message }} @enderror</div>

            </div>

              <div>
                <label for="cat_ar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('projects.github_link')}}</label>
                <input type="text" wire:model.live="github_link"   id="cat_ar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600
                dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="github_link"  />
               <div class="text-red-700">@error('github_link') {{ $message }} @enderror</div>
              </div>

              <div>
                <label for="cat_ar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('projects.youtube_url')}}</label>
                <input type="text" wire:model.live="youtube_url"   id="cat_ar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600
                dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="youtube_url"  />
               <div class="text-red-700">@error('youtube_url') {{ $message }} @enderror</div>
              </div>



        </div>


       <div class="grid lg:grid-cols-2 sm:grid-cols-1 md:grid-cols-2 gap-4 my-4">

            <div class="">
                <label for="message0" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('projects.short-des_en')}}</label>
                <textarea id="message0" rows="4" wire:model="shortdes.en" class="block p-2.5 min-w-full text-sm text-gray-900 bg-gray-50
                rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700
                dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Write your thoughts here..."></textarea>

                <div class="text-red-700">@error('shortdes.en') {{ $message }} @enderror</div>

            </div>


            <div>
                <label for="message1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('projects.short-des_ar')}}</label>
                <textarea id="message1" rows="4" wire:model="shortdes.ar" class="block p-2.5 min-w-full text-sm text-gray-900 bg-gray-50
                rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700
                dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Write your thoughts here..."></textarea>

                <div class="text-red-700">@error('shortdes.ar') {{ $message }} @enderror</div>
            </div>
   </div>





   <div class="grid lg:grid-cols-2 sm:grid-cols-1 md:grid-cols-2 gap-4 my-4 min-w-full">

    <div wire:ignore>
        <label for="updateproeditor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('projects.des-ar')}}</label>

        <div id="updatepro-container" class="min-w-full"></div>
        <div id="updateproeditor" wire:model.live="des.en"  class="block p-2.5 min-w-full text-sm text-gray-900 bg-gray-50
        rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700
        dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
       ></div>

        <div class="text-red-700">@error('des.en') {{ $message }} @enderror</div>

    </div>


    <div  wire:ignore>
        <label for="updatedesarmain" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('projects.des-en')}}</label>
        <div id="updatedesar-container"></div>
        <div id="updatedesarmain"  wire:model.live="des.ar"  class="block p-2.5 min-w-full text-sm text-gray-900 bg-gray-50
        rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700
        dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
       >

    </div>

    </div>
</div>

<div class="grid lg:grid-cols-2 sm:grid-cols-1 md:grid-cols-2 gap-4 my-4">

    <div >

        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">



 {{__('projects.imgsumnail')}}

 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 cursor-pointer text-center mt-2 mx-4">
    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
  </svg>
</label>

        @if($this->imgsumnail_temp )

        <div class="mb-3 mt-2" style="position: relative">




            <img   class="" src="{{asset('storage/'.$this->imgsumnail_temp)}}" height="200" width="250">



        </div>


        @endif






            <div class="sumnail" >


                <div>

                    <input  accept="image/*"
                    wire:model="imgsumnail"


                    id="updateimgsumnail"
                     type="file"




                    >
                </div>


                          @error('imgsumnail') <span class="text-danger ">{{ $message }}</span> @enderror
                         </div>



    </div>


    <div>

        <div class="uplodefile">

            @if ($this->images_temp && is_array($this->images_temp) || is_object($this->images_temp) )
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
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input"> {{__('projects.images')}}</label>
                    <input

                    id="imageupdate" wire:model="images" type="file" multiple accept="image/*">

                    @error('images.*') <span class="text-danger ">{{ $message }}</span> @enderror

                </div>
    </div>

    </div>
</div>
 <!-- Modal footer -->
 <div
 class="flex flex-shrink-0 flex-wrap items-center justify-center rounded-b-md border-t-2 border-neutral-100 p-4 dark:border-white/10">


 <button

 type="submit"
 id="update-submit"
   form="project-update-form"
 class="ms-1 inline-block rounded bg-success px-6 mx-5 pb-2 mt-2 pt-2.5 text-sm
 font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out
  hover:bg-green-900 hover:shadow-primary-2 focus:bg-green-800 focus:shadow-success-2 focus:outline-none focus:ring-0
   active:bg-green-600 active:shadow-primary-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong">
   {{__('projects.updatebtn')}}
</button>
 <button
   type="button"

   {{-- wire:click.prevent = "resetvalue" --}}
   x-data @click="$dispatch('close-modal','updateproj')"
   class="inline-block rounded bg-red-700 px-6 pb-2 pt-2.5 mt-2 text-xs font-medium uppercase leading-normal text-white
     dark:text-white transition duration-150 ease-in-out hover:bg-red-600 focus:bg-primary-accent-200 focus:outline-none focus:ring-0
      active:bg-primary-accent-200 dark:bg-red-700 dark:hover:bg-red-900 dark:focus:bg-red-900 dark:active:bg-red-400">
   Close
 </button>

</div>
        </form>


    </div>

    @script
    <script>

    let Updateeditorar;
    let updateeditoren;


        DecoupledEditor
            .create( document.querySelector( '#updateproeditor' ),{
        ckfinder:{

            uploadUrl:"{{route('ckeditor.upload',['_token'=> csrf_token()])}}",

        }

    })
            .then( editor => {
                Updateeditoren = editor;
                const toolbarContainer = document.querySelector( '#updatepro-container' );

                toolbarContainer.appendChild( editor.ui.view.toolbar.element );
            })
            .catch( error => {
                console.error( error );
            });





            DecoupledEditor
            .create( document.querySelector( '#updatedesarmain' ),{
        ckfinder:{

            uploadUrl:"{{route('ckeditor.upload',['_token'=> csrf_token()])}}",

        }


    })
            .then( editor => {

                Updateeditorar = editor;
                const toolbarContainer = document.querySelector( '#updatedesar-container' );

                toolbarContainer.appendChild( editor.ui.view.toolbar.element );
            } )
            .catch( error => {
                console.error( error );
            });








    document.querySelector( '#update-submit' ).addEventListener( 'click', () => {
        @this.des['ar'] = Updateeditorar.getData();
        @this.des['en'] = Updateeditoren.getData();



    });


    window.addEventListener('edit-des',()=>{

        Updateeditorar.setData(@this.des['ar']);
        Updateeditoren.setData(@this.des['en']);



});






    </script>

    @endscript

