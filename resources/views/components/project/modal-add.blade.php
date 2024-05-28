<div class="container mx-auto p-4 ">

    <form wire:submit.prevent="addproject" id="catogery-update-form">

        <div class=" grid lg:grid-cols-3 sm:grid-cols-1 md:grid-cols-3 gap-4 ">


            <div>
                <label for="cat_en"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">name.en</label>
                <input type="text"  wire:model.live ="name.en"  id="cat_en" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400
                  dark:text-white" placeholder="name.en"  />
                  <div class="text-red-700">@error("name.en") {{ $message }} @enderror</div>

            </div>

              <div>
                <label for="cat_ar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">name.ar</label>
                <input type="text" wire:model.live="name.ar"   id="cat_ar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600
                dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name.ar"  />
               <div class="text-red-700">@error('name.ar') {{ $message }} @enderror</div>
              </div>



               <div>

                    <form class="max-w-sm mx-auto">
                        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">catogery name</label>
                        <select id="countries" wire:model.live="catogery_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @if($this->getproject_id)
                            <option  selected>....</option>
                        @foreach ($this->getproject_id as $item)

                        <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach

                        @endif


                        </select>
                        <div class="text-red-700">@error('catogery_id') {{ $message }} @enderror</div>
                    </form>


             </div>


        </div>




        <div class=" grid lg:grid-cols-3 sm:grid-cols-1 md:grid-cols-3 gap-4 ">


            <div>
                <label for="cat_en"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">project_link</label>
                <input type="text"  wire:model.live ="project_link"  id="cat_en" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400
                  dark:text-white" placeholder="project_link"  />
                  <div class="text-red-700">@error("project_link") {{ $message }} @enderror</div>

            </div>

              <div>
                <label for="cat_ar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">github_link</label>
                <input type="text" wire:model.live="github_link"   id="cat_ar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600
                dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="github_link"  />
               <div class="text-red-700">@error('github_link') {{ $message }} @enderror</div>
              </div>

              <div>
                <label for="cat_ar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">youtube_url</label>
                <input type="text" wire:model.live="youtube_url"   id="cat_ar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600
                dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="youtube_url"  />
               <div class="text-red-700">@error('youtube_url') {{ $message }} @enderror</div>
              </div>



        </div>


       <div class="grid lg:grid-cols-2 sm:grid-cols-1 md:grid-cols-2 gap-4 my-4">

            <div>
                <label for="message0" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">shortdes en</label>
                <textarea id="message0" rows="4" wire:model="shortdes.en" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50
                rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700
                dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Write your thoughts here..."></textarea>


            </div>


            <div>
                <label for="message1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">shortdes ar</label>
                <textarea id="message1" rows="4" wire:model="shortdes.ar" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50
                rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700
                dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Write your thoughts here..."></textarea>

            </div>
   </div>





   <div class="grid lg:grid-cols-2 sm:grid-cols-1 md:grid-cols-2 gap-4 my-4">

    <div>
        <label for="message2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">des en</label>
        <textarea id="message2" wire:model="des.en" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50
        rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700
        dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        placeholder="Write your thoughts here..."></textarea>


    </div>


    <div>
        <label for="message3" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">des ar</label>
        <textarea id="message3" rows="4" wire:model="des.ar"  class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50
        rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700
        dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        placeholder="Write your thoughts here..."></textarea>

    </div>
</div>

<div class="grid lg:grid-cols-2 sm:grid-cols-1 md:grid-cols-2 gap-4 my-4">

    <div>

   <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload sumnail</label>
   <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">



    </div>


    <div>

   <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload images</label>
   <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">


    </div>
</div>

        </form>

 <!-- Modal footer -->
 <div
 class="flex flex-shrink-0 flex-wrap items-center justify-center rounded-b-md border-t-2 border-neutral-100 p-4 dark:border-white/10">


 <button
 type="submit"
   form="catogery-update-form"
 class="ms-1 inline-block rounded bg-success px-6 mx-5 pb-2 mt-2 pt-2.5 text-sm
 font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out
  hover:bg-green-900 hover:shadow-primary-2 focus:bg-green-800 focus:shadow-success-2 focus:outline-none focus:ring-0
   active:bg-green-600 active:shadow-primary-2 dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong">
   {{__('catogery.updatecat')}}
</button>
 <button
   type="button"

   x-data @click="$dispatch('close-modal','handel-add-proj')"
   class="inline-block rounded bg-red-700 px-6 pb-2 pt-2.5 mt-2 text-xs font-medium uppercase leading-normal text-white
     dark:text-white transition duration-150 ease-in-out hover:bg-red-600 focus:bg-primary-accent-200 focus:outline-none focus:ring-0
      active:bg-primary-accent-200 dark:bg-red-700 dark:hover:bg-red-900 dark:focus:bg-red-900 dark:active:bg-red-400">
   Close
 </button>

</div>
    </div>
