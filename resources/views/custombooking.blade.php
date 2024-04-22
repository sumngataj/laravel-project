<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaluhas PH | Wedding Booking</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/kaluhasLogoIcon.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flatpickr@4.6.3/dist/flatpickr.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script type="module" src="/path-to-your-vite-assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://js.pusher.com/8.2.0/pusher.min.js" defer></script>
    @vite('resources/css/app.css')
    <style>

    </style>
</head>

<body>

    @include('components.newNav')
    @include('components.bookingNav')
    @include('components.footer')
    @include('components.loginSideModal')
    @include('components.floatingNavbar')
    @include('components.searchToggle')
    @include('components.sideMenu')
    @yield('sideMenu')

    @yield('loginSideModal')
    @yield('toggleSearch')
    @yield('bookingNav')



    <div
        class="bg-[url('https://henann.com/henannpark/wp-content/uploads/2021/12/function-room-scaled.jpg')] bg-no-repeat bg-cover bg-center mx-auto w-full h-[30rem]">

    </div>

    @if(session('success'))
    <script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer);
            toast.addEventListener('mouseleave', Swal.resumeTimer);
        }
    });

    Toast.fire({
        icon: 'success',
        title: '{{ session('
        success ') }}'
    });
    </script>
    @endif

    <form method="POST" action="{{ route('reservations.custom') }}" enctype="multipart/form-data">
        @csrf
        <section class="h-auto">
            <div class="flex justify-around items-start">
                <div class="relative mt-6 w-2/3">
                    <div id="stepperContent" class="relative">
                        <div class="absolute -top-56 w-1/2 h-56 p-4 space-y-3"
                            style="background: rgba(255,255,255,0.75);">
                            <p class="text-xl text-gold-highlight">Kaluhas Bohol</p>
                            <p class="flex items-center space-x-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
                                </svg>
                                <span>118 B. Aquino Street Baranggay Cogon 6300, Tagbilaran City, Philippines</span>
                            </p>
                            <p class="flex items-center space-x-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                </svg>
                                <span class="text-pink-violet">+63 2 8888 0777</span>
                            </p>
                            <p class="flex items-center space-x-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                                </svg>
                                <span class="text-pink-violet">https://www.kaluhas.com</span>
                            </p>
                        </div>
                        <div id="firstBtns" class="flex border border-gray-500 w-full">
                            <button type="button" id="" onclick="toggleOverlay()" class="w-1/2 text-left p-2"><a
                                    class="flex text-gold-highlight font-bold"><svg xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 mr-2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                                    </svg>
                                    Guests</a> <span id="selectedCapacity" class="text-xs font-light">0
                                    people</span></button>
                            <button type="button" id="dateButton"
                                class="w-1/2 text-left p-2 border-l border-gray-500 h-full"><a
                                    class="flex text-gold-highlight font-bold"><svg xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 mr-2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                    </svg>
                                    Date
                                </a>
                                <span id="selectedDate" class="text-xs font-light"></span>
                            </button>

                        </div>
                        <div id="dateSlideIn" class="flex justify-end items-end border border-gray-500 p-4 hidden">

                            <input type="date" id="datepicker" name="reservation_date"
                                class="border border-gray-300 p-2 w-0 h-0 opacity-0 absolute">

                        </div>
                        <div id="stepHeading" class="mt-6">
                            <p class="text-4xl text-gold-highlight tracking-normal font-lightbold">Select a Venue</p>
                        </div>
                    </div>
                    <div id="overlays"
                        class="absolute top-20 left-0 right-0 bottom-0 bg-white z-[1] w-56 hidden shadow-xl h-40 border border-gray-300 ">
                        <div class="relative items-center">
                            <div class="flex justify-between items-center p-2 border-b border-gray-300">
                                <p class="">Select Guest</p>
                                <svg onclick="toggleOverlay()" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>

                            </div>
                            <div class="flex justify-center items-center mt-4">
                                <div id="decrement"
                                    class="flex justify-center items-center bg-pink-violet border border-gray-300 h-10 w-10 hover:bg-pink-hover">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                                    </svg>

                                </div>
                                <input type="text" id="guestCount" name="attendee"
                                    class="border border-gray-300 pl-10 pr-10 py-2 text-center w-32 focus:ring-0"
                                    value="0">
                                <div id="increment"
                                    class="flex justify-center items-center bg-pink-violet border border-gray-300 h-10 w-10 hover:bg-pink-hover">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 4.5v15m7.5-7.5h-15" />
                                    </svg>
                                </div>


                            </div>
                            <div class="flex justify-end items-end p-2 mt-2">
                                <button type="button"
                                    class="p-2 uppercase text-pink-violet tracking-wide text-xs hover:opacity-50"
                                    onclick="toggleOverlay()">Cancel</button>
                                <button type="button" id="applyButton"
                                    class="bg-pink-violet p-2 uppercase text-white tracking-wide text-xs hover:bg-pink-hover"
                                    onclick="applyGuestCount()">Apply</button>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-start mt-4">
                        <div id="stepperCount" class="flex space-x-10">
                            <!-- Step 1 -->
                            <div class="relative w-64">
                                <div>
                                    <button type="button" id="step1"
                                        class="flex items-center justify-center w-10 h-10 bg-pink-violet text-white rounded-full font-bold"
                                        onclick="step1()" disabled>1
                                        <span id="step1Check" class="ml-2 text-sm hidden">&#10003;</span></button>
                                </div>
                                <div id="step1Label" class="mt-2 text-xs font-bold">Venues</div>
                                <hr id="step1Connector"
                                    class="border-t-2 border-gray-300 absolute left-10 top-5 w-full">

                            </div>
                            <!-- Step 2 -->
                            <div class="relative w-64">
                                <div>
                                    <button type="button" id="step2"
                                        class="flex items-center justify-center w-10 h-10 bg-white border border-gray-300 text-black  rounded-full font-bold"
                                        onclick="step2()" disabled>2</button>
                                </div>
                                <div id="step2Label" class="mt-2 text-xs font-light">Add-Ons</div>
                                <hr id="step2Connector"
                                    class="border-t-2 border-gray-300 absolute left-10 top-5 w-full">

                            </div>
                            <!-- Step 3 -->
                            <div class="relative w-64">
                                <div>
                                    <button type="button" id="step3"
                                        class="flex items-center justify-center w-10 h-10 bg-white border border-gray-300 text-black rounded-full font-bold"
                                        onclick="step3()" disabled>
                                        3</button>
                                </div>
                                <div id="step3Label" class="mt-2 text-xs font-light">Guest Details</div>
                                {{-- <hr id="step3Connector"
                                    class="border-t-2 border-gray-300 absolute left-10 top-5 w-full"> --}}

                            </div>
                            {{-- <!-- Step 4 -->
                            <div class="relative w-32">
                                <div id="step4"
                                    class="flex items-center justify-center w-10 h-10 bg-white border border-gray-300 text-black rounded-full font-bold">
                                    4</div>
                                <div class="mt-2 text-xs font-light">Review</div>
                                <hr class="border-t-2 border-gray-300 absolute left-10 top-5 w-full">

                            </div>
                            <!-- Step 5 -->
                            <div class="relative w-32">
                                <div id="step5"
                                    class="flex items-center justify-center w-10 h-10 bg-white border border-gray-300 text-black rounded-full font-bold">
                                    5</div>
                                <div class="mt-2 text-xs font-light">Confirmation</div>

                            </div> --}}
                        </div>
                    </div>
                    <div id="guestDetails" class="relative hidden mt-10">
                        <div class="relative w-full border border-gray-400 p-4">
                            <h1 class="text-gold-highlight font-light text-2xl tracking-wide">Contact Info</h1>
                            <div class="flex justify-between items-center space-x-4">
                                @guest
                                <input type="text" class="w-full" placeholder="Fullname" />
                                @else
                                <div class="relative w-full">
                                    <label class="text-sm font-light">First Name *</label>
                                    <input type="text" name="first_name" class="w-full font-light"
                                        value="{{ Auth::user()->name }}" required />
                                </div>
                                <div class="relative w-full">
                                    <label class="text-sm font-light">Last Name *</label>
                                    <input type="text" name="last_name" class="w-full font-light"
                                        value="{{ Auth::user()->name }}" required />
                                </div>

                            </div>
                            <div class="flex justify-between items-center space-x-4 mt-4">
                                <div class="relative w-full">
                                    <label class="text-sm font-light">Phone</label>
                                    <input type="number" name="phone" class="w-full font-light" required />
                                </div>
                                <div class="relative w-full">
                                    <label class="text-sm font-light">Mobile Number</label>
                                    <input type="number" name="mobile_number" class="w-full font-light" required />
                                </div>
                            </div>
                            <div class="relative w-[49%] mt-4">
                                <label class="text-sm font-light">Email Address *</label>
                                <input type="text" name="email" class="w-full font-light"
                                    value="{{ Auth::user()->email }}" required />
                            </div>
                            @endguest
                            <h1 class="text-gold-highlight font-light text-2xl tracking-wide mt-4">Address</h1>
                            <div class="relative w-[49%]">
                                <select id="countrySelect"
                                    class="block font-light w-full hover:border-gray-500 px-3 py-2 pr-8 focus:outline-none focus:shadow-outline"
                                    onchange="updateAddress()">
                                    <option value="" selected disabled>Select a country</option>
                                </select>
                                <div
                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">

                                </div>
                            </div>
                            <div class="flex justify-between items-center space-x-4 mt-4">
                                <div class="relative w-full">
                                    <label class="text-sm font-light">Province *</label>
                                    <input type="text" id="provinceInput" name="province" class="w-full font-light"
                                        onchange="updateAddress()" required />
                                </div>
                                <div class="relative w-full">
                                    <label class="text-sm font-light">City *</label>
                                    <input type="text" id="cityInput" name="city" class="w-full font-light"
                                        onchange="updateAddress()" required />
                                </div>
                            </div>
                            <div class="flex justify-between items-center space-x-4 mt-4">
                                <div class="relative w-full">
                                    <label class="text-sm font-light">Barangay / Purok / Street *</label>
                                    <input type="text" id="barangayInput" name="barangay" class="w-full font-light"
                                        onchange="updateAddress()" required />
                                </div>
                                <div class="relative w-full">
                                    <label class="text-sm font-light">Zip / Postal Code *</label>
                                    <input type="text" id="postalCodeInput" name="postal_code" class="w-full font-light"
                                        onchange="updateAddress()" required />
                                </div>

                                <input type="hidden" id="fullAddress" name="address" class="w-full font-light"
                                    readonly />

                            </div>
                            <div class="flex justify-center items-center p-2 border-b border-gray-400 mt-4"></div>
                            <div class="relative">
                                <h1 class="text-gold-highlight font-light text-2xl tracking-wide mt-4">Payment Options
                                </h1>
                            </div>
                        </div>
                        <div class="flex justify-end items-end w-full mt-4">
                            <button type="submit" id="continueStep4"
                                class="bg-pink-violet p-2 w-40 text-white uppercase tracking-wide font-lightbold">Continue</button>
                        </div>
                    </div>
                    <div id="adOns" class="relative w-full mt-10 space-y-5 hidden">
                        <div class="relative">
                            <div id="cateringsDivBtn"
                                class="flex justify-between items-center border-2 border-gold-highlight p-4 font-bold uppercase text-gold-highlight">
                                Caterings <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    id="cateringsIcon" stroke-width="3" stroke="currentColor" class="ml-2 w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </div>
                            <div id="slideInCaterings" class="border-b-2 border-r-2 border-l-2 border-gold-highlight">

                                <ul id="cater" class="w-full font-lightbold">
                                    @foreach($catering as $item)
                                    <li
                                        class="group flex justify-between items-center hover:text-white hover:bg-gold-highlight border-b border-gold-highlight p-4 cursor-pointer">
                                        <p class="w-full">{{ $item->name }}</p>
                                        <h5 class="hidden group-hover:block">{{ $item->description }}</h5>
                                        <h1 class="text-md">₱</h1>
                                        <span>{{ number_format($item->price, 2) }}</span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="relative">
                            <div id="cakesDivBtn"
                                class="flex justify-between items-center border-2 border-gold-highlight p-4 font-bold uppercase text-gold-highlight">
                                Cakes <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    id="cakesIcon" stroke-width="3" stroke="currentColor" class="ml-2 w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </div>
                            <div id="slideInCakes" class="border-b-2 border-r-2 border-l-2 border-gold-highlight">
                                <ul id="cakes" class="w-full font-lightbold">
                                    @foreach($cake as $item)
                                    <li
                                        class="group flex justify-between items-center hover:text-white hover:bg-gold-highlight border-b border-gold-highlight p-4 cursor-pointer">
                                        <p class="w-full">{{ $item->name }}</p>
                                        <h5 class="hidden group-hover:block">{{ $item->description }}</h5>
                                        <h1 class="text-md">₱</h1>
                                        <span>{{ number_format($item->price, 2) }}</span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="relative">
                            <div id="flowersDivBtn"
                                class="flex justify-between items-center border-2 border-gold-highlight p-4 font-bold uppercase text-gold-highlight">
                                Flowers <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    id="flowersIcon" stroke-width="3" stroke="currentColor" class="ml-2 w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </div>
                            <div id="slideInFlowers" class="border-b-2 border-r-2 border-l-2 border-gold-highlight">
                                <ul id="flowers" class="w-full font-lightbold">
                                    @foreach($flower as $item)
                                    <li
                                        class="group flex justify-between items-center hover:text-white hover:bg-gold-highlight border-b border-gold-highlight p-4 cursor-pointer">
                                        <p class="w-full">{{ $item->name }}</p>
                                        <h5 class="hidden group-hover:block">{{ $item->description }}</h5>
                                        <h1 class="text-md">₱</h1>
                                        <span>{{ number_format($item->price, 2) }}</span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="relative">
                            <div id="photographersDivBtn"
                                class="flex justify-between items-center border-2 border-gold-highlight p-4 font-bold uppercase text-gold-highlight">
                                Photographers
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    id="photographersIcon" stroke-width="3" stroke="currentColor" class="ml-2 w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </div>
                            <div id="slideInPhotographers"
                                class="border-b-2 border-r-2 border-l-2 border-gold-highlight">
                                <ul id="photographers" class="w-full font-lightbold">
                                    @foreach($photographers as $item)
                                    <li
                                        class="group flex justify-between items-center hover:text-white hover:bg-gold-highlight border-b border-gold-highlight p-4 cursor-pointer">
                                        <p class="w-full">{{ $item->name }}</p>
                                        <h5 class="hidden group-hover:block">{{ $item->description }}</h5>
                                        <h1 class="text-md">₱</h1>
                                        <span>{{ number_format($item->price, 2) }}</span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="relative">
                            <div id="makeupsDivBtn"
                                class="flex justify-between items-center border-2 border-gold-highlight p-4 font-bold uppercase text-gold-highlight">
                                Hair and Makeup Artists <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" id="makeupsIcon" stroke-width="3" stroke="currentColor"
                                    class="ml-2 w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </div>
                            <div id="slideInMakeups" class="border-b-2 border-r-2 border-l-2 border-gold-highlight">
                                <ul id="makeups" class="w-full font-lightbold">
                                    @foreach($makeup as $item)
                                    <li
                                        class="group flex justify-between items-center hover:text-white hover:bg-gold-highlight border-b border-gold-highlight p-4 cursor-pointer">
                                        <p class="w-full">{{ $item->name }}</p>
                                        <h5 class="hidden group-hover:block">{{ $item->description }}</h5>
                                        <h1 class="text-md">₱</h1>
                                        <span>{{ number_format($item->price, 2) }}</span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="relative">
                            <div id="botiquesDivBtn"
                                class="flex justify-between items-center border-2 border-gold-highlight p-4 font-bold uppercase text-gold-highlight">
                                Botiques <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    id="botiquesIcon" stroke-width="3" stroke="currentColor" class="ml-2 w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </div>
                            <div id="slideInBotiques" class="border-b-2 border-r-2 border-l-2 border-gold-highlight">
                                <ul id="botiques" class="w-full font-lightbold">
                                    @foreach($botiques as $item)
                                    <li
                                        class="group flex justify-between items-center hover:text-white hover:bg-gold-highlight border-b border-gold-highlight p-4 cursor-pointer">
                                        <p class="w-full">{{ $item->name }}</p>
                                        <h5 class="hidden group-hover:block">{{ $item->description }}</h5>
                                        <h1 class="text-md">₱</h1>
                                        <span>{{ number_format($item->price, 2) }}</span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="relative">
                            <div id="lightingsDivBtn"
                                class="flex justify-between items-center border-2 border-gold-highlight p-4 font-bold uppercase text-gold-highlight">
                                Lightings <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    id="lightingsIcon" stroke-width="3" stroke="currentColor" class="ml-2 w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </div>
                            <div id="slideInLightings" class="border-b-2 border-r-2 border-l-2 border-gold-highlight">
                                <ul id="lightings" class="w-full font-lightbold">
                                    @foreach($lighting as $item)
                                    <li
                                        class="group flex justify-between items-center hover:text-white hover:bg-gold-highlight border-b border-gold-highlight p-4 cursor-pointer">
                                        <p class="w-full">{{ $item->name }}</p>
                                        <h5 class="hidden group-hover:block">{{ $item->description }}</h5>
                                        <h1 class="text-md">₱</h1>
                                        <span>{{ number_format($item->price, 2) }}</span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="relative">
                            <div id="soundsDivBtn"
                                class="flex justify-between items-center border-2 border-gold-highlight p-4 font-bold uppercase text-gold-highlight">
                                Sound Systems <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    id="soundsIcon" stroke-width="3" stroke="currentColor" class="ml-2 w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </div>
                            <div id="slideInSounds" class="border-b-2 border-r-2 border-l-2 border-gold-highlight">
                                <ul id="sounds" class="w-full font-lightbold">
                                    @foreach($sound as $item)
                                    <li
                                        class="group flex justify-between items-center hover:text-white hover:bg-gold-highlight border-b border-gold-highlight p-4 cursor-pointer">
                                        <p class="w-full">{{ $item->name }}</p>
                                        <h5 class="hidden group-hover:block">{{ $item->description }}</h5>
                                        <h1 class="text-md">₱</h1>
                                        <span>{{ number_format($item->price, 2) }}</span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="relative">
                            <div id="vehiclesDivBtn"
                                class="flex justify-between items-center border-2 border-gold-highlight p-4 font-bold uppercase text-gold-highlight">
                                Vehicles <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    id="vehiclesIcon" stroke-width="3" stroke="currentColor" class="ml-2 w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </div>
                            <div id="slideInVehicles" class="border-b-2 border-r-2 border-l-2 border-gold-highlight">
                                <ul id="vehicles" class="w-full font-lightbold">
                                    @foreach($vehicles as $item)
                                    <li
                                        class="group flex justify-between items-center hover:text-white hover:bg-gold-highlight border-b border-gold-highlight p-4 cursor-pointer">
                                        <p class="w-full">{{ $item->name }}</p>
                                        <h5 class="hidden group-hover:block">{{ $item->description }}</h5>
                                        <h1 class="text-md">₱</h1>
                                        <span>{{ number_format($item->price, 2) }}</span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="relative">
                            <div id="sweetsDivBtn"
                                class="flex justify-between items-center border-2 border-gold-highlight p-4 font-bold uppercase text-gold-highlight">
                                Sweets and Desserts <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" id="sweetsIcon" stroke-width="3" stroke="currentColor"
                                    class="ml-2 w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </div>
                            <div id="slideInSweets" class="border-b-2 border-r-2 border-l-2 border-gold-highlight">
                                <ul id="sweets" class="w-full font-lightbold">
                                    @foreach($sweets as $item)
                                    <li
                                        class="group flex justify-between items-center hover:text-white hover:bg-gold-highlight border-b border-gold-highlight p-4 cursor-pointer">
                                        <p class="w-full">{{ $item->name }}</p>
                                        <h5 class="hidden group-hover:block">{{ $item->description }}</h5>
                                        <h1 class="text-md">₱</h1>
                                        <span>{{ number_format($item->price, 2) }}</span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="flex justify-end items-end"><button type="button" id="continueStep3"
                                class="bg-pink-violet p-2 w-40 text-white uppercase tracking-wide font-lightbold">Continue</button>
                        </div>
                    </div>

                    <div id="discardEdits" class="hidden">
                        <div
                            class="flex justify-around items-center border border-gray-400 w-full text-sm font-semibold p-2 mt-10">
                            <div class="flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1"
                                    stroke="currentColor" class="w-16 h-16 text-gray-500">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                </svg>
                                <div class="relative">
                                    <h1 class="text-lg font-light">You are editing your reservation.</h1>
                                    <p class="text-sm font-light">
                                        Please select a different venue and rate below, or update your stay details
                                        above. Availability might change.
                                    </p>
                                </div>
                            </div>
                            <button
                                class="border border-pink-violet p-4 text-pink-violet text-sm uppercase tracking-widest leading-5 font-lightbold hover:bg-pink-hover hover:text-white hover:border-2">
                                Discard Edits
                            </button>
                        </div>
                    </div>

                    <div id="venueListings" class="">
                        <div id="filter"
                            class="flex justify-end items-end border border-gray-400 w-full text-sm font-semibold p-2 mt-10 hidden">
                            <div class="relative">
                                <div id="filter-btn" class="relative p-2 hover:text-white hover:bg-black">
                                    <div>
                                        <h1 class="font-light text-xs">Sort By</h1>
                                    </div>
                                    <button type="button" class="flex items-center font-bold text-sm"><span
                                            id="filter-label">Recommended</span> <svg xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" id="sort-icon" stroke-width="3"
                                            stroke="currentColor" class="ml-2 w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </div>
                                <div id="sorting-dropdown" class="triangle-div shadow-2xl h-auto w-48 hidden">
                                    <div class="relative">
                                        <button type="button" id="recommended-btn"
                                            class="w-full p-4 text-left font-light tracking-wide active">Recommended</button>
                                        <button type="button" id="lowest-btn"
                                            class="w-full p-4 hover:bg-gray-100 text-left font-light tracking-wide">Lowest
                                            to Highest</button>
                                        <button type="button" id="highest-btn"
                                            class="w-full p-4 hover:bg-gray-100 text-left font-light tracking-wide">Highest
                                            to Lowest</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @foreach ($venues as $venue)
                        <div id="venueListingsLoading" style="display:none;"
                            class="animate-spin rounded-full h-64 w-64 border-t-2 border-b-2 border-gray-400 ml-[32%] mt-32">
                            <i class="fas fa-spinner fa-spin text-purple-600 text-3xl"></i>
                        </div>

                        <div id="venues" class="w-full border border-gray-400 flex mt-10 venue"
                            data-capacity="{{$venue->capacity}}">
                            <div class=" h-48 lg:h-auto lg:w-64 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l
                text-center overflow-hidden p-4">
                                <img src="{{ asset('images/venue_images/' . $venue->image_path) }}"
                                    class="h-48 object-cover" />
                            </div>
                            <div class="p-4 flex flex-col justify-between leading-normal">
                                <div class="mb-8">
                                    <div class="flex justify-between text-gold-highlight font-lightbold text-xl mb-2">
                                        <p>{{$venue->name}}</p>
                                    </div>
                                    <p class="text-gray-700 text-base">{{ substr($venue->amenities, 0, 179) }}...</p>
                                </div>
                                <div class="flex items-center">
                                    <div class="text-sm">
                                        <p class="text-gray-900 leading-none">{{$venue->location}}</p>
                                        <div class="flex items-center text-gray-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                                            </svg>
                                            {{$venue->capacity}}
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-end items-end w-full border-t border-gray-400 mt-4">
                                    <div class="relative mt-2">
                                        <div class="flex justify-end items-end">
                                            <span class="font-bold leading-wide text-xl text-right">₱</span>
                                            <p id="venuePrice" name="price"
                                                class="font-bold leading-wide text-xl text-right">
                                                {{ number_format($venue->price) }}</p><span
                                                class="font-bold leading-wide text-xl text-right">.00</span>
                                        </div>
                                        <div id="bookNowButtonsContainer">
                                            <button type="button"
                                                class="book-now-button bg-pink-violet p-3 uppercase text-white mt-2 text-sm font-bold"
                                                data-venue-id="{{$venue->venue_id}}"
                                                data-venue-capacity="{{$venue->capacity}}"
                                                data-venue-location="{{$venue->location}}"
                                                data-venue-price="{{$venue->price}}" data-venue-name="{{$venue->name}}">
                                                SELECT</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="relative sticky top-5 bg-gray-300 h-auto p-4 w-96 mt-6">
                    <div class="flex justify-start items-start">
                        <div class="border-b border-gray-400 w-full">
                            <h1 class="text-xl text-gold-highlight font-light">Your Booking Summary</h1>
                            <h2 class="mt-4 font-semibold text-sm">Event Date</h2>
                            <p id="date" class="text-sm font-light tracking wide"></p>
                            <p id="guest" class="text-sm font-light mb-4 tracking-wide">0 People</p>
                            <div class="flex justify-between items-start mt-2">
                                <div class="relative">
                                    <p id="display-venue"
                                        class="text-gold-highlight underline font-lightbold tracking-widest text-lg">
                                    </p>
                                    <p id="display-capacity" class="text-sm font-lightbold"></p>
                                    <p id="display-venue-location" class="text-sm font-lightbold tracking-wide"></p>
                                </div>
                                <p id="display-price-venue" class="font-semibold"></p>
                            </div>
                            <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
                            <input type="hidden" name="venue_id" id="venue_id" value="">
                            <input type="hidden" name="guests" id="guestInput" value="">
                            <input type="hidden" name="price" id="price" value="">
                            <input type="hidden" name="add_ons" id="add_ons" value="">
                            <div class="flex justify-between items-center mt-2">
                                <p id="venuesummary"
                                    class="font-light mb-4 tracking-wide text-gold-highlight underline">
                                </p>
                                <p id="venuepricing" class="font-semibold mb-4 tracking-wide text-black"></p>
                            </div>
                            <div class="relative mb-4">
                                <div id="addOnHeading" class="flex justify-between items-center hidden">
                                    <h1 class="font-semibold tracking-wide text-black text-sm">Add
                                        Ons:
                                    </h1>
                                    <a id="removeAllAddOns" onclick="removeAllAddOns()"
                                        class="flex items-center text-pink-violet text-xs uppercase hover:underline">
                                        Remove All
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-4 h-4 text-pink-violet text-semibold text-xs ml-1">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>

                                    </a>
                                </div>
                                <ul id="addOnList" class="addOnList">
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mt-2">
                        <p class="text-lg font-semibold">Total:</p>
                        <div>
                            <span class="text-lg font-semibold">₱</span><span id="totalSummaryPrice"
                                class="text-lg font-semibold">0</span><span class="text-lg font-semibold">.00</span>
                        </div>
                    </div>
                </div>
            </div>
            </div>

        </section>
    </form>


    @yield('footer')

    @vite('resources/js/app.js')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.3/dist/flatpickr.min.js"></script>
    <script>
    const countrySelect = document.getElementById("countrySelect");
    const countryProvinceSelect = document.getElementById("countryProvince");
    const apiUrl = "https://restcountries.com/v3.1/all";

    fetch(apiUrl)
        .then((response) => response.json())
        .then((data) => {
            data.sort((a, b) => {
                const nameA = a.name.common.toUpperCase();
                const nameB = b.name.common.toUpperCase();
                return nameA.localeCompare(nameB);
            });
            data.forEach((country) => {
                const option = document.createElement("option");
                option.value = country
                    .name.common;
                option.text = country.name
                    .common;
                countrySelect.appendChild(option);
            });
        })
        .catch((error) => {
            console.error("Error fetching countries:", error);
        });
    </script>
    <script>
    const sortingDropdown = document.getElementById('sorting-dropdown');
    const filter = document.getElementById('filter');
    const filterBtn = document.getElementById('filter-btn');
    const filterLabel = document.getElementById('filter-label');
    const sortingIcon = document.getElementById('sort-icon');

    let currentSelectedBtn = document.getElementById('recommended-btn');
    let currentLabelText = 'Recommended';
    sortingDropdown.addEventListener('click', (event) => {
        if (event.target.tagName === 'BUTTON') {
            // Remove 'active' class from the previously selected button
            currentSelectedBtn.classList.add('hover:bg-gray-100');
            currentSelectedBtn.classList.remove('active');

            // Update the currently selected button
            currentSelectedBtn = event.target;

            // Add 'active' class to the newly selected button
            currentSelectedBtn.classList.add('active');
            currentSelectedBtn.classList.remove('hover:bg-gray-100');

            // Update the filter label text based on the selected button
            filterLabel.textContent = event.target.textContent;
            filterBtn.classList.add('active');
            // Close the sorting dropdown


            // Update the sorting icon to the original one
            sortingIcon.innerHTML = `
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
        `;
        }
    });

    filter.addEventListener('click', () => {
        const isOpen = sortingDropdown.classList.contains('hidden');
        filterBtn.classList.toggle('active');
        sortingDropdown.classList.toggle('hidden');
        if (!isOpen) {
            // If it was open, change the icon to the original one
            sortingIcon.innerHTML = `
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
        `;
        } else {
            // If it was closed, change the icon to the alternate one
            sortingIcon.innerHTML = `
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
        `;
        }

    });
    </script>
    <script>
    let currentStep = 1;
    const cateringsDivBtn = document.getElementById('cateringsDivBtn');
    const cateringsIcon = document.getElementById('cateringsIcon');
    const slideInCaterings = document.getElementById('slideInCaterings');
    const cakesDivBtn = document.getElementById('cakesDivBtn');
    const cakesIcon = document.getElementById('cakesIcon');
    const slideInCakes = document.getElementById('slideInCakes');
    const flowersDivBtn = document.getElementById('flowersDivBtn');
    const flowersIcon = document.getElementById('flowersIcon');
    const slideInFlowers = document.getElementById('slideInFlowers');
    const photographersDivBtn = document.getElementById('photographersDivBtn');
    const photographersIcon = document.getElementById('photographersIcon');
    const slideInPhotographers = document.getElementById('slideInPhotographers');
    const makeupsDivBtn = document.getElementById('makeupsDivBtn');
    const makeupsIcon = document.getElementById('makeupsIcon');
    const slideInMakeups = document.getElementById('slideInMakeups');
    const lightingsDivBtn = document.getElementById('lightingsDivBtn');
    const lightingsIcon = document.getElementById('lightingsIcon');
    const slideInLightings = document.getElementById('slideInLightings');
    const soundsDivBtn = document.getElementById('soundsDivBtn');
    const soundsIcon = document.getElementById('soundsIcon');
    const slideInSounds = document.getElementById('slideInSounds');
    const vehiclesDivBtn = document.getElementById('vehiclesDivBtn');
    const vehiclesIcon = document.getElementById('vehiclesIcon');
    const slideInVehicles = document.getElementById('slideInVehicles');
    const sweetsDivBtn = document.getElementById('sweetsDivBtn');
    const sweetsIcon = document.getElementById('sweetsIcon');
    const slideInSweets = document.getElementById('slideInSweets');
    const botiquesDivBtn = document.getElementById('botiquesDivBtn');
    const botiquesIcon = document.getElementById('botiquesIcon');
    const slideInBotiques = document.getElementById('slideInBotiques');

    cateringsDivBtn.addEventListener('click', () => {
        const isOpen = slideInCaterings.classList.contains('open');
        slideInCaterings.classList.toggle('open');
        if (isOpen) {
            // If it was open, change the icon to the original one
            cateringsIcon.innerHTML = `
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
        `;
        } else {
            // If it was closed, change the icon to the alternate one
            cateringsIcon.innerHTML = `
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
        `;
        }
    });

    cakesDivBtn.addEventListener('click', () => {
        const isOpen = slideInCakes.classList.contains('open');
        slideInCakes.classList.toggle('open');
        if (isOpen) {
            // If it was open, change the icon to the original one
            cakesIcon.innerHTML = `
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
        `;
        } else {
            // If it was closed, change the icon to the alternate one
            cakesIcon.innerHTML = `
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
        `;
        }
    });
    flowersDivBtn.addEventListener('click', () => {
        const isOpen = slideInFlowers.classList.contains('open');
        slideInFlowers.classList.toggle('open');
        if (isOpen) {
            // If it was open, change the icon to the original one
            flowersIcon.innerHTML = `
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
        `;
        } else {
            // If it was closed, change the icon to the alternate one
            flowersIcon.innerHTML = `
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
        `;
        }
    });
    makeupsDivBtn.addEventListener('click', () => {
        const isOpen = slideInMakeups.classList.contains('open');
        slideInMakeups.classList.toggle('open');
        if (isOpen) {
            makeupsIcon.innerHTML = `
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
        `;
        } else {
            makeupsIcon.innerHTML = `
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
        `;
        }
    });

    photographersDivBtn.addEventListener('click', () => {
        const isOpen = slideInPhotographers.classList.contains('open');
        slideInPhotographers.classList.toggle('open', !isOpen);
        if (isOpen) {
            photographersIcon.innerHTML = `
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            `;
        } else {
            photographersIcon.innerHTML = `
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
            `;
        }
    });

    lightingsDivBtn.addEventListener('click', () => {
        const isOpen = slideInLightings.classList.contains('open');
        slideInLightings.classList.toggle('open', !isOpen);
        if (isOpen) {
            lightingsIcon.innerHTML = `
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            `;
        } else {
            lightingsIcon.innerHTML = `
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
            `;
        }
    });

    soundsDivBtn.addEventListener('click', () => {
        const isOpen = slideInSounds.classList.contains('open');
        slideInSounds.classList.toggle('open', !isOpen);
        if (isOpen) {
            soundsIcon.innerHTML = `
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            `;
        } else {
            soundsIcon.innerHTML = `
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
            `;
        }
    });

    vehiclesDivBtn.addEventListener('click', () => {
        const isOpen = slideInVehicles.classList.contains('open');
        slideInVehicles.classList.toggle('open', !isOpen);
        if (isOpen) {
            vehiclesIcon.innerHTML = `
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            `;
        } else {
            vehiclesIcon.innerHTML = `
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
            `;
        }
    });

    sweetsDivBtn.addEventListener('click', () => {
        const isOpen = slideInSweets.classList.contains('open');
        slideInSweets.classList.toggle('open', !isOpen);
        if (isOpen) {
            sweetsIcon.innerHTML = `
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            `;
        } else {
            sweetsIcon.innerHTML = `
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
            `;
        }
    });

    botiquesDivBtn.addEventListener('click', () => {
        const isOpen = slideInBotiques.classList.contains('open');
        slideInBotiques.classList.toggle('open', !isOpen);
        if (isOpen) {
            botiquesIcon.innerHTML = `
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            `;
        } else {
            botiquesIcon.innerHTML = `
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
            `;
        }
    });


    document.addEventListener('DOMContentLoaded', () => {

        const bookNowButtons = document.querySelectorAll('.book-now-button');
        const venuePriceElement = document.getElementById('venuePrice');
        const totalSummaryPriceElement = document.getElementById('totalSummaryPrice');
        const step2Btn = document.getElementById('continueStep3');
        const addOns = document.getElementById('adOns');
        const firstBtns = document.getElementById('firstBtns');
        const guestDetails = document.getElementById('guestDetails');
        const venueListings = document.getElementById('venueListings');
        const stepHeading = document.getElementById('stepHeading');

        function updateTotalSummaryPrice(price) {
            const addOns = calculateTotalPrice();
            const totalPrice = parseInt(price) + parseInt(addOns);

            const formattedPrice = totalPrice.toLocaleString();

            totalSummaryPriceElement.textContent = formattedPrice;

            const priceInput = document.getElementById('price');
            const priceLabel = document.getElementById('display-price-venue');

            const priceWithoutCommas = formattedPrice.replace(/,/g, '');
            priceInput.value = priceWithoutCommas;

            priceLabel.innerHTML = "₱" + formattedPrice + ".00";
        }

        function enableStep1Button() {
            const step1Button = document.getElementById('step1');
            step1Button.removeAttribute('disabled');
        }

        function enableStep2Button() {
            const step2Button = document.getElementById('step2');
            step2Button.removeAttribute('disabled');
        }

        function enableStep3Button() {
            const step3Button = document.getElementById('step3');
            step3Button.removeAttribute('disabled');
        }

        function disableStep1Button() {
            const step1Button = document.getElementById('step1');
            step1Button.removeAttribute('disabled');
        }

        function disableStep2Button() {
            const step2Button = document.getElementById('step2');
            step2Button.removeAttribute('disabled');
        }

        function disableStep3Button() {
            const step3Button = document.getElementById('step3');
            step3Button.removeAttribute('disabled');
        }

        function step1() {
            const discardEdits = document.getElementById('discardEdits');
            const step1 = document.getElementById('step1');
            const step1Label = document.getElementById('step1Label');
            const step1Connector = document.getElementById('step1Connector');
            const step2 = document.getElementById('step2');
            const step2Label = document.getElementById('step2Label');
            const step2Connector = document.getElementById('step2Connector');
            const step3 = document.getElementById('step3');
            const step3Label = document.getElementById('step3Label');
            discardEdits.classList.remove('hidden');
            step1.innerHTML = '1';
            step2.innerHTML = '2';
            step3.innerHTML = '3';
            step1.classList.remove('bg-gold-highlight');
            step1.classList.add('bg-pink-violet');
            step1Label.classList.remove('font-light', 'text-gold-highlight');
            step1Connector.classList.add('border-gray-300');
            step1Connector.classList.remove('border-gold-highlight');
            step2.classList.remove('bg-pink-violet', 'text-white');
            step2.classList.add('bg-white', 'border');
            step2Label.classList.remove('text-gold-highlight');
            step2Label.classList.add('text-black');
            step2Label.classList.add('font-light');
            step2Label.classList.remove('font-bold');
            console.log('Step 1 button clicked');
            guestDetails.classList.add('hidden');
            venueListings.style.display = 'block';
            firstBtns.style.display = 'flex';
            stepHeading.classList.add('mt-6');
            stepHeading.querySelector('p').textContent = 'Select a Venue';
            addOns.classList.add('hidden');
            step2Connector.classList.remove('border-gold-highlight');
            step2Connector.classList.add('border-gray-300');
            step3.classList.remove('bg-pink-violet', 'text-white');
            step3.classList.add('bg-white', 'border');
            step3Label.classList.remove('font-bold');
            step3Label.classList.add('font-light');

        }

        function step2() {
            const dateSlideIn = document.getElementById("dateSlideIn");
            const discardEdits = document.getElementById('discardEdits');
            const step1 = document.getElementById('step1');
            const step1Label = document.getElementById('step1Label');
            const step1Connector = document.getElementById('step1Connector');
            const step2 = document.getElementById('step2');
            const step2Label = document.getElementById('step2Label');
            const step2Connector = document.getElementById('step2Connector');
            const step3 = document.getElementById('step3');
            const step3Label = document.getElementById('step3Label');
            dateSlideIn.classList.add('hidden');
            discardEdits.classList.add('hidden');
            step1.innerHTML = '&#10003';
            step2.innerHTML = '2';
            step3.innerHTML = '3';
            step1.classList.remove('bg-pink-violet');
            step1.classList.add('bg-gold-highlight');
            step1Label.classList.add('font-light', 'text-gold-highlight');
            step1Connector.classList.remove('border-gray-300');
            step1Connector.classList.add('border-gold-highlight');
            step2.classList.remove('bg-white', 'border');
            step2.classList.add('bg-pink-violet', 'text-white');
            step2Label.classList.remove('text-gold-highlight');
            step2Label.classList.add('text-black');
            step2Label.classList.remove('font-light');
            step2Label.classList.add('font-bold');
            venueListings.style.display = 'none';
            firstBtns.style.display = 'none';
            stepHeading.classList.remove('mt-6');
            guestDetails.classList.add('hidden');
            stepHeading.querySelector('p').textContent = 'Select your add ons';
            addOns.classList.remove('hidden');
            step2Connector.classList.remove('border-gold-highlight');
            step2Connector.classList.add('border-gray-300');
            step3.classList.remove('bg-pink-violet', 'text-white');
            step3.classList.add('bg-white', 'border');
            step3Label.classList.remove('font-bold');
            step3Label.classList.add('font-light');
        }

        function step3() {
            const dateSlideIn = document.getElementById("dateSlideIn");
            const discardEdits = document.getElementById('discardEdits');
            const step1 = document.getElementById('step1');
            const step1Label = document.getElementById('step1Label');
            const step1Connector = document.getElementById('step1Connector');
            const step2 = document.getElementById('step2');
            const step2Label = document.getElementById('step2Label');
            const step2Connector = document.getElementById('step2Connector');
            const step3 = document.getElementById('step3');
            const step3Label = document.getElementById('step3Label');
            dateSlideIn.classList.add('hidden');
            discardEdits.classList.add('hidden');
            step1.innerHTML = '&#10003';
            step2.innerHTML = '&#10003';
            step3.innerHTML = '3';
            step1.classList.remove('bg-pink-violet');
            step1.classList.add('bg-gold-highlight');
            step1Label.classList.add('font-light', 'text-gold-highlight');
            step1Connector.classList.remove('border-gray-300');
            step1Connector.classList.add('border-gold-highlight');
            step2.classList.remove('text-black');
            step2.classList.add('text-white');
            step2.classList.remove('bg-white', 'bg-pink-violet');
            step2.classList.add('bg-gold-highlight');
            step2Label.classList.add('font-light', 'text-gold-highlight');
            step2Connector.classList.remove('border-gray-300');
            step2Connector.classList.add('border-gold-highlight');
            step3.classList.remove('bg-white', 'border');
            step3.classList.add('bg-pink-violet', 'text-white');
            step3Label.classList.remove('font-light');
            step3Label.classList.add('font-bold');
            stepHeading.classList.remove('mt-6');
            stepHeading.querySelector('p').textContent = 'Guest Details';
            venueListings.style.display = 'none';
            firstBtns.style.display = 'none';
            addOns.classList.add('hidden');
            guestDetails.classList.remove('hidden');

        }

        let lastClickedButton = null;

        bookNowButtons.forEach((button) => {
            button.addEventListener('click', () => {
                const dateSlideIn = document.getElementById("dateSlideIn");
                const discardEdits = document.getElementById('discardEdits');
                const venuePrice = button.getAttribute('data-venue-price');
                const venueId = button.getAttribute('data-venue-id');
                const venueCapacity = button.getAttribute('data-venue-capacity');
                const venueLocation = button.getAttribute('data-venue-location');
                const venueName = button.getAttribute('data-venue-name');
                updateTotalSummaryPrice(venuePrice);
                const displayVenueName = document.getElementById('display-venue');
                displayVenueName.innerHTML = venueName;
                // const displayCapacity = document.getElementById('display-capacity');
                // displayCapacity.innerHTML = venueCapacity + "People";
                const displayLocation = document.getElementById('display-venue-location');
                displayLocation.innerHTML = venueLocation;
                const venueIdInput = document.getElementById('venue_id');
                venueIdInput.value = venueId;
                const step1 = document.getElementById('step1');
                const step1Label = document.getElementById('step1Label');
                const step1Connector = document.getElementById('step1Connector');
                const step2 = document.getElementById('step2');
                const step2Label = document.getElementById('step2Label');
                const step1Check = document.getElementById('step1Check');
                dateSlideIn.classList.add('hidden');
                discardEdits.classList.add('hidden');
                step1.innerHTML = '&#10003';
                step1.classList.remove('bg-pink-violet');
                step1.classList.add('bg-gold-highlight');
                step1Label.classList.add('font-light', 'text-gold-highlight');
                step1Connector.classList.remove('border-gray-300');
                step1Connector.classList.add('border-gold-highlight');
                step2.classList.remove('bg-white', 'border');
                step2.classList.add('bg-pink-violet', 'text-white');
                step2Label.classList.remove('font-light');
                step2Label.classList.add('font-bold');
                venueListings.style.display = 'none';
                firstBtns.style.display = 'none';
                stepHeading.classList.remove('mt-6');
                stepHeading.querySelector('p').textContent = 'Select your add ons';
                addOns.classList.remove('hidden');
                enableStep1Button();
                enableStep2Button();
                if (currentStep === 3) {
                    const dateSlideIn = document.getElementById("dateSlideIn");
                    const discardEdits = document.getElementById('discardEdits');
                    const step1 = document.getElementById('step1');
                    const step1Label = document.getElementById('step1Label');
                    const step1Connector = document.getElementById('step1Connector');
                    const step2 = document.getElementById('step2');
                    const step2Label = document.getElementById('step2Label');
                    const step2Connector = document.getElementById('step2Connector');
                    const step3 = document.getElementById('step3');
                    const step3Label = document.getElementById('step3Label');
                    dateSlideIn.classList.add('hidden');
                    discardEdits.classList.add('hidden');
                    step1.innerHTML = '&#10003';
                    step2.innerHTML = '&#10003';
                    step3.innerHTML = '3';
                    step1.classList.remove('bg-pink-violet');
                    step1.classList.add('bg-gold-highlight');
                    step1Label.classList.add('font-light', 'text-gold-highlight');
                    step1Connector.classList.remove('border-gray-300');
                    step1Connector.classList.add('border-gold-highlight');
                    step2.classList.remove('text-black');
                    step2.classList.add('text-white');
                    step2.classList.remove('bg-white', 'bg-pink-violet');
                    step2.classList.add('bg-gold-highlight');
                    step2Label.classList.add('font-light', 'text-gold-highlight');
                    step2Connector.classList.remove('border-gray-300');
                    step2Connector.classList.add('border-gold-highlight');
                    step3.classList.remove('bg-white', 'border');
                    step3.classList.add('bg-pink-violet', 'text-white');
                    step3Label.classList.remove('font-light');
                    step3Label.classList.add('font-bold');
                    stepHeading.classList.remove('mt-6');
                    stepHeading.querySelector('p').textContent = 'Guest Details';
                    venueListings.style.display = 'none';
                    firstBtns.style.display = 'none';
                    addOns.classList.add('hidden');
                    guestDetails.classList.remove('hidden');
                }

                if (lastClickedButton) {
                    lastClickedButton.textContent = 'Select'; // Revert the previous button
                }
                button.textContent = 'Keep Venue';
                lastClickedButton = button;
            });
        });

        step2Btn.addEventListener('click', () => {
            const step2 = document.getElementById('step2');
            const step2Label = document.getElementById('step2Label');
            const step2Connector = document.getElementById('step2Connector');
            const step3 = document.getElementById('step3');
            const step3Label = document.getElementById('step3Label');
            const step2Check = document.getElementById('step2Check');
            step3.classList.remove('bg-white', 'border');
            step3.classList.add('bg-pink-violet', 'text-white');
            step3Label.classList.remove('font-light');
            step3Label.classList.add('font-bold');
            stepHeading.classList.remove('mt-6');
            stepHeading.querySelector('p').textContent = 'Guest Details';
            addOns.classList.add('hidden');
            guestDetails.classList.remove('hidden');
            step2.innerHTML = '&#10003';
            step2.classList.remove('bg-pink-violet');
            step2.classList.add('bg-gold-highlight');
            step2Label.classList.add('font-light', 'text-gold-highlight');
            step2Connector.classList.remove('border-gray-300');
            step2Connector.classList.add('border-gold-highlight');
            enableStep1Button();
            enableStep2Button();
            enableStep3Button();
            currentStep = 3;

        });




        const step1Button = document.getElementById('step1');
        const step2Button = document.getElementById('step2');
        const step3Button = document.getElementById('step3');

        step1Button.addEventListener('click', step1);
        step2Button.addEventListener('click', step2);
        step3Button.addEventListener('click', step3);


    });
    </script>
    <script>
    let clickCount = 0;
    const clickedValues = new Map(); // Map to store clicked values and their counts

    const flowerItems = document.querySelectorAll('#flowers li p');
    const flowerItemsPrice = document.querySelectorAll('#flowers li span');
    const cakeItems = document.querySelectorAll('#cakes li p');
    const cakeItemsPrice = document.querySelectorAll(
        '#cakes li span');
    const caterItems = document.querySelectorAll('#cater li p');
    const caterItemsPrice = document.querySelectorAll(
        '#cater li span');
    const photographerItems = document.querySelectorAll('#photographers li p');
    const photographerItemsPrice = document.querySelectorAll('#photographers li span');
    const makeupItems = document.querySelectorAll('#makeups li p');
    const makeupItemsPrice = document.querySelectorAll('#makeups li span');
    const lightingItems = document.querySelectorAll('#lightings li p');
    const lightingItemsPrice = document.querySelectorAll('#lightings li span');
    const soundItems = document.querySelectorAll('#sounds li p');
    const soundItemsPrice = document.querySelectorAll('#sounds li span');
    const vehicleItems = document.querySelectorAll('#vehicles li p');
    const vehicleItemsPrice = document.querySelectorAll('#vehicles li span');
    const sweetItems = document.querySelectorAll('#sweets li p');
    const sweetItemsPrice = document.querySelectorAll('#sweets li span');
    const botiqueItems = document.querySelectorAll('#botiques li p');
    const botiqueItemsPrice = document.querySelectorAll('#botiques li span');

    const totalSummaryPriceElement = document.getElementById('totalSummaryPrice');
    const addOnList = document.getElementById('addOnList');
    const removeAllButton = document.getElementById('removeAllButton');

    // Function to calculate the total price
    function calculateTotalPrice() {
        let totalPrice = 0;
        clickedValues.forEach((value) => {
            totalPrice += value.price;
        });
        return totalPrice.toFixed(2);
    }

    function addToAddOnList(itemText, itemPrice) {
        const headingDisplay = document.getElementById('addOnHeading');
        const clickedValue = itemText.trim();
        const clickedPrice = parseFloat(itemPrice);

        if (!clickedValues.has(clickedValue)) {
            clickedValues.set(clickedValue, {
                count: 1,
                price: clickedPrice,

            });
            headingDisplay.classList.remove('hidden');
        } else {
            const existingValue = clickedValues.get(clickedValue);
            const updatedCount = existingValue.count + 1;
            const updatedPrice = clickedPrice * updatedCount;
            clickedValues.set(clickedValue, {
                count: updatedCount,
                price: updatedPrice,

            });
        }

        const specificText = clickedValues.get(clickedValue).count.toString();
        const priceText = clickedValues.get(clickedValue).price.toFixed(2);

        // Format the priceText with commas
        const formattedPriceText = parseFloat(priceText).toLocaleString() + ".00";

        const liElement = document.createElement('li');
        liElement.textContent = `(${specificText}) ${clickedValue} - ₱${formattedPriceText} - ${removeButton}`;

        const removeButton = document.createElement('button');
        removeButton.textContent = 'Remove';
        removeButton.addEventListener('click', () => {
            removeItem(clickedValue, clickedPrice);
        });

        // Append the remove button to the list item
        liElement.appendChild(removeButton);

        const existingLi = addOnList.querySelector(`li[data-value="${clickedValue}"]`);
        if (existingLi) {
            existingLi.textContent = `(${specificText}) ${clickedValue} - ₱${formattedPriceText}`;
        } else {
            liElement.setAttribute('data-value', clickedValue);
            addOnList.appendChild(liElement);
        }

        const totalPrice = calculateTotalPrice();
        const priceInput = document.getElementById('price');
        const currentTotalPrice = parseFloat(totalSummaryPriceElement.textContent.replace(/[^\d.]/g,
            '')); // Remove non-numeric characters
        const newTotalPrice = currentTotalPrice + parseFloat(clickedPrice);

        // Format the newTotalPrice with commas
        const formattedNewTotalPrice = newTotalPrice.toLocaleString();

        totalSummaryPriceElement.textContent = formattedNewTotalPrice;
        const priceWithoutCommas = formattedNewTotalPrice.replace(/,/g, '');
        priceInput.value = priceWithoutCommas;

        const addOnsInput = document.getElementById('add_ons');
        addOnsInput.value = getAddOnsAsString();
    }

    function removeAllAddOns() {
        // Calculate the total price of the items to be removed
        let removedPrice = 0;
        clickedValues.forEach((value) => {
            removedPrice += value.price;
        });

        // Clear the clickedValues map
        clickedValues.clear();

        const addOnList = document.getElementById('addOnList');
        addOnList.innerHTML = '';

        const addOnsInput = document.getElementById('add_ons');
        addOnsInput.value = '';

        // Subtract the removedPrice from the currentTotalPrice
        const currentTotalPrice = parseFloat(totalSummaryPriceElement.textContent.replace(/[^\d.]/g,
            '')); // Remove non-numeric characters
        const newTotalPrice = currentTotalPrice - removedPrice;

        const formattedNewTotalPrice = newTotalPrice.toLocaleString();

        totalSummaryPriceElement.textContent = formattedNewTotalPrice;

        const headingDisplay = document.getElementById('addOnHeading');
        headingDisplay.classList.add('hidden');
    }

    // Event listener for flower items
    flowerItems.forEach((item, index) => {
        const clickedValue = item.textContent.trim();
        const clickedPrice = flowerItemsPrice[index].textContent.trim().replace(/,/g, '');

        item.closest('li').addEventListener('click', () => {
            addToAddOnList(clickedValue, clickedPrice);
        });
    });

    cakeItems.forEach((item, index) => {
        const clickedValue = item.textContent.trim();
        const clickedPrice = cakeItemsPrice[index].textContent.trim().replace(/,/g, '');

        item.closest('li').addEventListener('click', () => {
            addToAddOnList(clickedValue, clickedPrice);
        });
    });

    caterItems.forEach((item, index) => {
        const clickedValue = item.textContent.trim();
        const clickedPrice = caterItemsPrice[index].textContent.trim().replace(/,/g, '');

        item.closest('li').addEventListener('click', () => {
            addToAddOnList(clickedValue, clickedPrice);
        });
    });

    photographerItems.forEach((item, index) => {
        const clickedValue = item.textContent.trim();
        const clickedPrice = photographerItemsPrice[index].textContent.trim().replace(/,/g, '');

        item.closest('li').addEventListener('click', () => {
            addToAddOnList(clickedValue, clickedPrice);
        });
    });

    makeupItems.forEach((item, index) => {
        const clickedValue = item.textContent.trim();
        const clickedPrice = makeupItemsPrice[index].textContent.trim().replace(/,/g, '');

        item.closest('li').addEventListener('click', () => {
            addToAddOnList(clickedValue, clickedPrice);
        });
    });

    lightingItems.forEach((item, index) => {
        const clickedValue = item.textContent.trim();
        const clickedPrice = lightingItemsPrice[index].textContent.trim().replace(/,/g, '');

        item.closest('li').addEventListener('click', () => {
            addToAddOnList(clickedValue, clickedPrice);
        });
    });

    soundItems.forEach((item, index) => {
        const clickedValue = item.textContent.trim();
        const clickedPrice = soundItemsPrice[index].textContent.trim().replace(/,/g, '');

        item.closest('li').addEventListener('click', () => {
            addToAddOnList(clickedValue, clickedPrice);
        });
    });

    vehicleItems.forEach((item, index) => {
        const clickedValue = item.textContent.trim();
        const clickedPrice = vehicleItemsPrice[index].textContent.trim().replace(/,/g, '');

        item.closest('li').addEventListener('click', () => {
            addToAddOnList(clickedValue, clickedPrice);
        });
    });

    sweetItems.forEach((item, index) => {
        const clickedValue = item.textContent.trim();
        const clickedPrice = sweetItemsPrice[index].textContent.trim().replace(/,/g, '');

        item.closest('li').addEventListener('click', () => {
            addToAddOnList(clickedValue, clickedPrice);
        });
    });

    botiqueItems.forEach((item, index) => {
        const clickedValue = item.textContent.trim();
        const clickedPrice = botiqueItemsPrice[index].textContent.trim().replace(/,/g, '');

        item.closest('li').addEventListener('click', () => {
            addToAddOnList(clickedValue, clickedPrice);
        });
    });

    function getAddOnsAsString() {
        const addOnList = document.getElementById('addOnList');
        const liElements = addOnList.querySelectorAll('li');
        const addOnsArray = [];

        liElements.forEach((li) => {
            const liText = li.textContent;
            const match = liText.match(/\(([^)]+)\) (.+?) -/); // Extract "(4) cake"
            if (match) {
                const extractedText = `${match[1]} ${match[2]}`; // Combine the captured parts
                addOnsArray.push(extractedText);
            }
        });

        return addOnsArray.join(', ');
    }
    // Event listener for the Remove All button
    removeAllButton.addEventListener('click', () => {
        removeAllAddOns();
    });
    </script>


    <script>
    function updateVenueVisibility(selectedCapacity) {
        const venueList = document.getElementById("venueListings");
        const venues = venueList.getElementsByClassName("venue");
        const filterList = document.getElementById("filter");

        const venueListLoading = document.getElementById("venueListingsLoading");
        venueListLoading.style.display = "block";

        for (let i = 0; i < venues.length; i++) {
            const venue = venues[i];
            const venueCapacity = parseInt(venue.getAttribute("data-capacity"));
            if (venueCapacity >= selectedCapacity) {
                venue.style.display = "flex";
                filterList.classList.remove("hidden");

            } else {
                venue.style.display = "none"; // Hide the venue
            }
        }
        venueListLoading.style.display = "none";
    }

    const applyButton = document.getElementById("applyButton");
    let isLoading = false;
    applyButton.addEventListener("click", function() {
        if (!isLoading) {
            isLoading = true;
            showLoadingAnimation();

            // Get the selected capacity from the guestCount input field
            const guestCountInput = document.getElementById("guestCount");
            const selectedCapacity = parseInt(guestCountInput.value);

            // Simulate an asynchronous operation (e.g., an AJAX request)
            setTimeout(function() {
                // Call the updateVenueVisibility function with the selected capacity
                updateVenueVisibility(selectedCapacity);

                // Update the selectedCapacity span
                const selectedCapacitySpan = document.getElementById("selectedCapacity");
                const guestSpan = document.getElementById("guest");
                const guestInput = document.getElementById("guestInput");
                guestInput.value = selectedCapacity;
                guestSpan.textContent = selectedCapacity + " People";
                selectedCapacitySpan.textContent = selectedCapacity + " people";

                // Hide the loading element and update the loading state
                hideLoadingAnimation();
                isLoading = false;

                toggleOverlay();
            }, 2000); // Simulate loading for 2 seconds (adjust the duration as needed)
        }
    });

    function showLoadingAnimation() {
        // Show the loading element for the venueList
        const venueListLoading = document.getElementById("venueListingsLoading");
        venueListLoading.style.display = "block";
    }

    function hideLoadingAnimation() {
        // Hide the loading element for the venueList
        const venueListLoading = document.getElementById("venueListingsLoading");
        venueListLoading.style.display = "none";
    }

    function sortVenuesHighToLow() {
        const venueList = document.getElementById("venueListings");
        const venues = Array.from(venueList.getElementsByClassName("venue"));
        const sortedVenues = venues.sort((a, b) => {
            const priceA = parseFloat(a.getAttribute("data-price"));
            const priceB = parseFloat(b.getAttribute("data-price"));
            return priceB - priceA;
        });

        // Append the sorted venues back to the venueList
        sortedVenues.forEach((venue) => {
            venueList.appendChild(venue);
        });
    }

    // Attach an event listener to the "High to Low" button
    const highToLowButton = document.getElementById("highest-btn");
    const lowToHighButton = document.getElementById("lowest-btn");
    highToLowButton.addEventListener("click", function() {
        console.log('clicked');
        sortVenuesHighToLow();
    });
    lowToHighButton.addEventListener("click", function() {
        sortVenuesHighToLow();
    });


    document.addEventListener("DOMContentLoaded", function() {
        const incrementButton = document.getElementById("increment");
        const decrementButton = document.getElementById("decrement");
        const guestCountInput = document.getElementById("guestCount");

        incrementButton.addEventListener("click", function() {
            // Parse the current value as an integer and increment it
            let currentValue = parseInt(guestCountInput.value);
            if (!isNaN(currentValue)) {
                guestCountInput.value = (currentValue + 1).toString();
            }
        });

        decrementButton.addEventListener("click", function() {
            // Parse the current value as an integer and decrement it, but not below 0
            let currentValue = parseInt(guestCountInput.value);
            if (!isNaN(currentValue) && currentValue > 0) {
                guestCountInput.value = (currentValue - 1).toString();
            }
        });
    });

    function toggleOverlay() {
        const overlay = document.getElementById("overlays");
        overlay.classList.toggle("hidden");
    }

    const dateButton = document.getElementById("dateButton");
    const dateSlideIn = document.getElementById("dateSlideIn");

    dateButton.addEventListener("click", () => {
        if (dateSlideIn.classList.contains("hidden")) {
            dateSlideIn.classList.remove("hidden");
            dateSlideIn.classList.add("block");
        } else {
            dateSlideIn.classList.remove("block");
            dateSlideIn.classList.add("hidden");
        }
    });

    function updateSelectedDate() {
        const datepicker = document.getElementById("datepicker");
        const selectedDate = document.getElementById("selectedDate");
        const selectedBookingDate = document.getElementById("date");

        if (datepicker.value === "") {
            // If no date is chosen, set the default date to today
            const today = new Date();
            const options = {
                weekday: 'short',
                month: 'long',
                day: 'numeric',
                year: 'numeric'
            };
            const formattedDate = today.toLocaleDateString('en-US', options);
            selectedDate.textContent = formattedDate;
            selectedBookingDate.textContent = formattedDate;
        } else {
            // Parse and format the chosen date
            const chosenDate = new Date(datepicker.value);
            const options = {
                weekday: 'short',
                month: 'long',
                day: 'numeric',
                year: 'numeric'
            };
            const formattedDate = chosenDate.toLocaleDateString('en-US', options);
            selectedDate.textContent = formattedDate;
            selectedBookingDate.textContent = formattedDate;
        }
    }

    const datepicker = document.getElementById("datepicker");
    datepicker.addEventListener("change", updateSelectedDate);

    // Initial update
    updateSelectedDate();
    </script>
    <script>
    $(document).ready(function() {
        // Attach an event listener to the select element
        $("#venueSelect").on("change", function() {
            // Get the selected value
            var selectedVenue = $(this).val();

            $.ajax({
                url: "/path-to-your-endpoint", // Replace with the actual endpoint
                method: "GET",
                data: {
                    venue: selectedVenue
                },
                success: function(data) {
                    // Update the ul element with the retrieved data
                    $("#venueDataList").html(data);
                },
                error: function(error) {
                    console.error("Error:", error);
                }
            });
        });
    });
    </script>
    <script>
    flatpickr("#datepicker", {
        inline: true,
        minDate: "today",
        defaultDate: "today",
    });
    </script>

    <script>
    function showTab(tabNumber) {
        document.querySelectorAll('.tab-content').forEach(content => {
            content.classList.add('hidden');
        });

        document.getElementById(`tabContent${tabNumber}`).classList.remove('hidden');
    }
    </script>
    <script>
    const steps = document.querySelectorAll('.step');
    const prevButton = document.getElementById('prevButton');
    const nextButton = document.getElementById('nextButton');
    let currentStep = 0;

    function updateStep() {
        steps.forEach((step, index) => {
            if (index === currentStep) {
                step.classList.add('active');
            } else {
                step.classList.remove('active');
            }
        });
    }

    prevButton.addEventListener('click', () => {
        if (currentStep > 0) {
            currentStep--;
            updateStep();
        }
    });

    nextButton.addEventListener('click', () => {
        if (currentStep < steps.length - 1) {
            currentStep++;
            updateStep();
        }
    });

    updateStep();
    </script>

    <script>
    const toggleButtons = document.getElementById('toggle-buttons');
    const contentToToggles = document.getElementById('toggle-divs');

    toggleButtons.addEventListener('click', function(event) {
        event.stopPropagation();
        contentToToggles.classList.toggle('hidden');
    });

    document.addEventListener('click', function(event) {
        if (!toggleButtons.contains(event.target) && !contentToToggles.contains(event.target)) {
            contentToToggles.classList.add('hidden');
        }
    });
    </script>

    <script>
    // Function to update the full address field
    function updateAddress() {
        // Get values from individual input fields
        // const countrySelect = document.getElementById("countrySelect");
        const selectedCountry = countrySelect.value;
        var country = document.getElementById("countrySelect").value;
        var city = document.getElementById("cityInput").value;
        var province = document.getElementById("provinceInput").value;
        var barangay = document.getElementById("barangayInput").value;
        var postalCode = document.getElementById("postalCodeInput").value;

        // Concatenate the values into a single string
        var fullAddress = city + ", " + province + ", " + barangay + ", " + postalCode + ", " + selectedCountry;

        // Update the fullAddress input field with the concatenated value
        document.getElementById("fullAddress").value = fullAddress;
    }

    // Call the updateAddress function initially to populate the full address
    updateAddress();
    </script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const toggleScrollDivs = document.getElementById("toggle-scroll-divs");
        const toggleScrollButton = document.getElementById("toggle-scroll-buttons");

        function toggleDropdown() {
            toggleScrollDivs.classList.toggle("hidden");
        }

        toggleScrollButton.addEventListener("click", function(e) {
            e.stopPropagation(); // Prevent button click from immediately closing the dropdown
            toggleDropdown();
        });

        document.addEventListener("click", function(e) {
            if (!toggleScrollDivs.contains(e.target)) {
                // Close the dropdown if the click is outside of it
                toggleScrollDivs.classList.add("hidden");
            }
        });

        // Close the dropdown when the overlay is clicked
        overlay.addEventListener("click", toggleDropdown);
    });
    </script>

</body>

</html>