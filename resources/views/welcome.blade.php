@extends('layouts.frontend')


@section('content')

<h2 class="text-center  text-gray-800 font-bold dark:text-white  p-8 py-16">{{ __('welcome.ourprojects') }}</h2>

<div class="container mx-auto mt-0 mb-4">

@include('frontend/projects')
</div>

<h2 class="text-center  text-gray-800 font-bold dark:text-white  p-8 py-16">{{ __('welcome.ourservices') }}</h2>
<div class="mt-4 mb-4">

    @include('frontend.serves')
</div>



<h2 class="text-center  text-gray-800 font-bold dark:text-white  p-8 py-16">{{ __('welcome.ourstatistics') }}</h2>
<div class="mt-4 mb-4">

    @include('frontend.facts')
</div>


<h2 class="text-center  text-gray-800 font-bold dark:text-white  p-8 py-16">{{ __('welcome.aboutus') }}</h2>
<div class="mt-4 mb-4">
    @include('frontend/aboutus')
    @include('frontend.ourteame')
</div>

<h2 class="text-center  text-gray-800 font-bold dark:text-white  p-8 py-8 mb-8" style="">{{ __('welcome.contactus')  }}</h2>

<div class="w-full mb-16 ">

   @include('frontend/contactus')

</div>




@endsection

