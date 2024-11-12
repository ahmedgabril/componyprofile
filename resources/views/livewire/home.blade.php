<div class="">

    <livewire:hearo />
    <div class="container mx-auto mt-0 mb-4">
        <h1>Device Detection</h1>
        <p id="device-type">Detecting device...</p>
        <livewire:frontend.project />
    </div>


    <div class="mt-4 ">

        <livewire:frontend.getservies />
    </div>



    <h2 class="text-center  text-gray-800 font-bold dark:text-white  p-8 py-16">{{ __('welecome.ourstatistics') }}</h2>
    <div class="mt-4 ">
        <livewire:frontend.getfact />

    </div>


    {{-- <h2 class="text-center  text-gray-800 font-bold dark:text-white  p-8 py-16">{{ __('welecome.aboutus') }}</h2> --}}


    <div class="w-full mb-16 ">


        <livewire:frontend.contact-us />

    </div>

</div>
<script>
    document.title = "ahmed-gabril-compony-profile";
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        function detectDevice() {
            const userAgent = navigator.userAgent || navigator.vendor || window.opera;
            let deviceType = 'desktop';

            // iOS detection
            if (/iPad/.test(userAgent)) {
                deviceType = 'ios-tablet';
            } else if (/iPhone|iPod/.test(userAgent) && !window.MSStream) {
                deviceType = 'ios-mobile';
            }
            // Android detection
            else if (/android/i.test(userAgent)) {
                if (/mobile/i.test(userAgent)) {
                    deviceType = 'android-mobile';
                } else {
                    deviceType = 'android-tablet';
                }
            }
            // Other mobile and tablet detection
            else if (/Mobi|Tablet|iPad|iPhone|Android/i.test(userAgent)) {
                deviceType = 'mobile';
            }

            return deviceType;
        }

        const deviceType = detectDevice();
        document.getElementById('device-type').innerText = `Device Type: ${deviceType}`;
        @this.call('setDeviceType', deviceType);
    });
</script>
