<div>



    <a href="{{route('home')}}" wire:navigate class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="{{asset('storage/'.$getdata?->logo)}}" class="h-8" alt="Flowbite Logo" />
        <span class="self-center text-2xl font-semibold capitalize whitespace-nowrap dark:text-white">{{ $getdata?->compony_name}}</span>

    </a>
</div>
