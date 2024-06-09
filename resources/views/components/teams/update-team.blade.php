<div>


    <form class=" max-w-4xl mx-auto p-6 mt-3 mb-3" wire:submit.prevent="updateteam">


        <div class="grid md:grid-cols-2 md:gap-6 p-5">
          <div class="relative z-0 w-full mb-5 group">
              <input type="text" name="floating_first_name" id="floating_first_name"

              wire:model="name.ar"
               class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300
               appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0
                focus:border-blue-600 peer" placeholder=" "  />
              <label for="floating_first_name"
              class="peer-focus:font-medium absolute text-sm
               text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0
                rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100
                 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">  {{__('team.name_ar')}}</label>
                 <div> @error('name.ar') <span class="text-danger ">{{ $message }}</span> @enderror </div>
          </div>






          <div class="relative z-0 w-full mb-5 group">
              <input type="text"

              wire:model="name.en"
              name="floating_last_name" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
              <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600
               peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0
               peer-focus:scale-75 peer-focus:-translate-y-6">{{__('team.name_en')}}</label>
               <div> @error('name.en') <span class="text-danger ">{{ $message }}</span> @enderror </div>
          </div>



        </div>


        <div class="grid md:grid-cols-2 md:gap-6 p-5">
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="floating_first_name" id="floating_first_name"

                wire:model="gob.ar"
                 class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300
                 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0
                  focus:border-blue-600 peer" placeholder=" "  />
                <label for="floating_first_name"
                class="peer-focus:font-medium absolute text-sm
                 text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0
                  rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100
                   peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">{{__('team.gob_ar')}}</label>
                   <div> @error('gob.ar') <span class="text-danger ">{{ $message }}</span> @enderror </div>
            </div>






            <div class="relative z-0 w-full mb-5 group">
                <input type="text"

                wire:model="gob.en"
                name="floating_last_name" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600
                 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0
                 peer-focus:scale-75 peer-focus:-translate-y-6">{{__('team.gob_en')}}</label>


                 <div> @error('gob.en') <span class="text-danger ">{{ $message }}</span> @enderror </div>
            </div>



          </div>

          <div class="flex justify-center">

            @if($this->getavatartemp )
            <img  src= "{{asset('storage/'.$this->getavatartemp)}}" class=" rounded-md mb-4"   width="250" height="250" alt="avatar"/>
            @endif
          </div>



         <div class="" wire:ignore>






       <input type="file"  id="avatarupdate" accept="image/.*" wire:model="avatar"  />




    </div>
          <div class="mb-4 mt-2">
             @error('avatar') <span class="text-danger ">{{ $message }}</span> @enderror
          </div>






        <button type="submit"
        class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none
         focus:ring-green-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">{{__('setting.btnsave')}}</button>
      </form>




</div>
