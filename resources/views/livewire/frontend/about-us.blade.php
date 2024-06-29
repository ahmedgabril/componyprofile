
<div class=" pt-52">



        <div class="container mx-auto p-6 pt-24">

            {!!$getdata?->des!!}


            </div>



    <h3 class="text-center  text-gray-800 font-bold dark:text-white  p-8 py-8 mb-8" style="font-size:28px">{{ __('welecome.ourteam') }} </h3>

   <div class="container flex gap-4 flex-wrap justify-center items-center  mx-auto p-4 w-full ">



    @if($getourteame)
    @forelse ($getourteame as $key => $item)
    <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow
     dark:bg-gray-800 dark:border-gray-700" wire:key="{{$key }}">
        <div class="flex justify-end px-4 pt-4">


        </div>
        <div class="flex flex-col items-center pb-10">
            <img class="w-24 h-24 mb-6 mt-6 rounded-full shadow-lg" src="{{ asset('storage/'.$item->avatar) }}" alt="Bonnie image"/>
            <h5 class="mb-3 text-xl font-medium text-gray-900 dark:text-white">{{$item->name}}</h5>
            <span class="text-sm text-gray-500 dark:text-gray-400"> {{$item->gob}}</span>
            <div class="flex mt-4 md:mt-6">
            </div>
        </div>
    </div>
   @empty


   <div class="container mx-auto flex justify-center items-center  dark:bg-gray-800 bg-gray-50 p-8">

    {{__('team.nodata')}}
   </div>

    @endforelse

    @endif



  </div>
</div>
