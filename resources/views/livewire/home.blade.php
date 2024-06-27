<div class="">

    <livewire:hearo/>
    <div class="container mx-auto mt-0 mb-4">

        <livewire:frontend.project/>
        </div>


        <div class="mt-4 ">

            <livewire:frontend.getservies/>
        </div>



        <h2 class="text-center  text-gray-800 font-bold dark:text-white  p-8 py-16">{{ __('welecome.ourstatistics') }}</h2>
        <div class="mt-4 mb-4">

            @include('frontend.facts')
        </div>


        <h2 class="text-center  text-gray-800 font-bold dark:text-white  p-8 py-16">{{ __('welecome.aboutus') }}</h2>
        <div class="mt-4 mb-4">
            @include('frontend/aboutus')
            @include('frontend.ourteame')
        </div>

        <h2 class="text-center  text-gray-800 font-bold dark:text-white  p-8 py-8 mb-8" style="">{{ __('welecome.contactus')  }}</h2>

        <div class="w-full mb-16 ">

           @include('frontend/contactus')

        </div>

</div>
