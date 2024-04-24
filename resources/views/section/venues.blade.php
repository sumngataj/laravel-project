@section('venues')
<section class="relative" id="more-bookings">
    <div class="container flex flex-wrap items-center justify-center mx-auto mt-10 md:flex-row">
        <svg class="absolute top-0 left-0 w-full h-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 229.63">
            <g data-name="lay-2">
                <path fill="#fff8ea"
                    d="M1440.35 21.36c-96.57-1.66-123.36-4-303.57-10.72C949 3.66 855.11.15 799.86 0c-58.63-.13-205.79.6-393.63 15.26-106.58 8.33-58.23 6.21-231.85 24.53C89.44 48.75 35.71 53.12 0 57.75v171.88h1920V19.5c-60.26 1.8-133.32 4.88-206.13 6.51-77.62 1.78-161.29-2.7-273.52-4.65z"
                    data-name="lay-1"></path>
            </g>
        </svg>

        <div class="relative mt-10" id="zt" style="background-color: #fff8ea">
            <div class="md:px-12 text-center">
                <h2 class="text-2xl font-bold mb-2 text-center text-gray-600">
                    <span class="text-red-500">Customize</span> your own Event bookings and schedule dates
                </h2>
                <p>Create your own customized event booking. Choose from our beautiful venues and set up your
                    itinerary.<br>You can even choose add ons and photographer. What are you waiting for? Customize with
                    us
                    now.</p>
            </div>
            <div class="container flex flex-wrap mx-auto md:py-12 md:px-12 md:flex-row items-center">
                <div class="border-solid border-4 border-red-400 p-2 rounded lg:w-1/2">
                    <img src="{{ asset('images/pic1.jpg') }}" class="h-auto w-full rounded" alt="logo">
                </div>
                <div class="lg:w-1/2 mx-auto md:px-12">
                    <div class="flex flex-col justify-between md:flex-row">
                        <div class="flex flex-col md:space-y-8 lg:text-lg">
                            <p><i class="fa-solid fa-calendar-days"></i>&nbsp Pick your date</p>
                            <p><i class="fa-solid fa-location-dot"></i>&nbsp Choose your itinerary</p>
                            <p><i class="fa-solid fa-users"></i>&nbsp Customize how many guest</p>
                        </div>
                        <div class="flex flex-col md:space-y-8 lg:text-lg">
                            <p><i class="fa-solid fa-camera"></i>&nbsp Choose the photographer you want</p>
                            <p><i class="fa-solid fa-location-arrow"></i>&nbsp Select your wanted add-ons</p>
                        </div>
                    </div>
                    <a href="{{route('custom.booking')}}">
                    <button type="button"
                        class="mt-10 w-full text-white bg-red-600 font-medium rounded-lg text-md px-5 py-4 text-center hover:bg-red-700 hover:drop-shadow-md transition duration-300 ease-in-out">
                         Customize &nbsp <i class="fa-solid fa-arrow-right"></i>
                    </button>
                    </a>
                </div>

            </div>

        </div>
    </div>
</section>
@endsection