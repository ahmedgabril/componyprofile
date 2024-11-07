<div class="container flex flex-wrap justify-center items-center gap-4 mx-auto p-4">


@if ($getdata)
    @foreach ($getdata as $key => $item)
    <div class="w-96 p-6 flex flex-col justify-center bg-white border border-gray-200
    rounded-lg shadow dark:bg-gray-800  dark:hover:bg-gray-600  hover:bg-gray-300 mx-2
     dark:border-gray-700 transition-transform hover:-translate-y-1 hover:scale-110 duration-700 " wire:key="{{$key}}">
        <div class="flex flex-col items-center justify-center  mx-auto my-auto mb-4 w-24 h-24 ">
            {!!$item?->icon!!}
        </div>

           <div class="flex flex-col  justify-center items-center mx-auto my-auto ">
               <dt class="mb-4 text-3xl font-extrabold ">{{$item?->number}}</dt>
               <dd class="text-gray-500 dark:text-gray-400 mt-4">{{$item?->name}}</dd>
           </div>
       </div>

    @endforeach
@endif





</div>
