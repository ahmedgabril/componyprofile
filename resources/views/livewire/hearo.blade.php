<div class="pt-30">

    <section class="bg-center object-cover    bg-gray-700 bg-blend-multiply" style="background-image: url({{ asset("storage/".$gethearo?->hearoimg) }})">
        <div class="px-4 mx-auto max-w-screen-xl text-center items-center  py-32 lg:py-56">
            <h2 class="mb-4 font-extrabold tracking-wider   text-white  md:leading-10 lg:text-6xl">{{$gethearo?->hearotitle}}</h2>
            <p class="mb-8 text-lg font-normal sm:leading-6  tracking-wider  text-gray-300 lg:text-xl sm:px-16 lg:px-48">{{$gethearo?->shortdes}}</p>
            {{-- <div class="flex flex-col space-y-4   sm:flex-row sm:justify-center sm:space-y-0">

                <a href="#" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                    Learn more
                </a>
            </div> --}}
        </div>
    </section>



</div>
