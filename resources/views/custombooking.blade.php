 <!DOCTYPE html>
 <html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Kaluhas PH | Wedding Booking</title>
     <link rel="icon" type="image/x-icon" href="{{ asset('images/kaluhasLogoIcon.png') }}">
     <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/flatpickr@4.6.3/dist/flatpickr.min.css" rel="stylesheet">
     <script type="module" src="/path-to-your-vite-assets/js/main.js"></script>
     @vite('resources/css/app.css')
     <style>

     </style>
 </head>

 <body>
     @include('components.navbar')
     @include('components.footer')
     @include('components.loginSideModal')
     @include('components.floatingNavbar')
     @include('components.searchToggle')
     @include('components.sideMenu')
     @include('components.chatBox')
     @yield('sideMenu')
     @yield('floatingNavbar')
     @yield('content')
     @yield('loginSideModal')
     @yield('toggleSearch')

     <div class="bg-black p-16">
         <div class="max-w-7xl mx-auto">
             <div class="flex justify-center p-8 items-center space-x-10 space-y-2 overflow-hidden">
                 <p class="text-white font-semibold text-5xl">Custom Section</p>
             </div>
         </div>
     </div>
     <section class="h-auto">
         <div class="flex justify-around items-start">
             <div class="relative mt-6">
                 <div id="stepperContent" class="relative">
                     <div id="firstBtns" class="flex border border-gray-500">
                         <button id="" onclick="toggleOverlay()" class="w-1/2 text-left p-2"><a
                                 class="flex text-gold-highlight font-bold"><svg xmlns="http://www.w3.org/2000/svg"
                                     fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                     class="w-6 h-6 mr-2">
                                     <path stroke-linecap="round" stroke-linejoin="round"
                                         d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                                 </svg>
                                 Guests</a> <span id="selectedCapacity" class="text-xs font-light">0
                                 people</span></button>
                         <button id="dateButton" class="w-1/2 text-left p-2 border-l border-gray-500 h-full"><a
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

                         <input type="date" id="datepicker"
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
                                     <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                 </svg>
                             </div>


                         </div>
                         <div class="flex justify-end items-end p-2 mt-2">
                             <button class="p-2 uppercase text-pink-violet tracking-wide text-xs hover:opacity-50"
                                 onclick="toggleOverlay()">Cancel</button>
                             <button id="applyButton"
                                 class="bg-pink-violet p-2 uppercase text-white tracking-wide text-xs hover:bg-pink-hover"
                                 onclick="applyGuestCount()">Apply</button>
                         </div>
                     </div>
                 </div>
                 <div class="flex items-center justify-center mt-4">
                     <div id="stepperCount" class="flex space-x-10 w-full">
                         <!-- Step 1 -->
                         <div class="relative w-32">
                             <div id="step1"
                                 class="flex items-center justify-center w-10 h-10 bg-pink-violet text-white rounded-full font-bold">
                                 1 <span id="step1Check" class="ml-2 text-sm hidden">&#10003;</span>
                             </div>
                             <div id="step1Label" class="mt-2 text-xs font-bold">Venues</div>
                             <hr id="step1Connector" class="border-t-2 border-gray-300 absolute left-10 top-5 w-full">

                         </div>
                         <!-- Step 2 -->
                         <div class="relative w-32">
                             <div id="step2"
                                 class="flex items-center justify-center w-10 h-10 bg-white border border-gray-300 text-black  rounded-full font-bold">
                                 2</div>
                             <div id="step2Label" class="mt-2 text-xs font-light">Add-Ons</div>
                             <hr id="step2Connector" class="border-t-2 border-gray-300 absolute left-10 top-5 w-full">

                         </div>
                         <!-- Step 3 -->
                         <div class="relative w-32">
                             <div id="step3"
                                 class="flex items-center justify-center w-10 h-10 bg-white border border-gray-300 text-black rounded-full font-bold">
                                 3</div>
                             <div id="step3Label" class="mt-2 text-xs font-light">Guest Details</div>
                             <hr id="step3Connector" class="border-t-2 border-gray-300 absolute left-10 top-5 w-full">

                         </div>
                         <!-- Step 4 -->
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

                         </div>
                     </div>
                 </div>

             </div>
             <div class="relative sticky top-20 bg-gray-300 h-auto p-4 w-96 mt-6">
                 <div class="flex justify-start items-start">
                     <div class="border-b border-gray-400 w-full">
                         <h1 class="text-xl text-gold-highlight font-light">Your Booking Summary</h1>
                         <h2 class="mt-4 font-semibold text-sm">Event Date</h2>
                         <p id="date" class="text-sm font-light tracking wide"></p>
                         <p id="guest" class="text-sm font-light mb-4 tracking-wide">0 People</p>
                     </div>
                 </div>
                 <div class="flex justify-between items-center mt-2">
                     <p class="text-lg font-semibold">Total:</p>
                     <p id="totalSummaryPrice" class="text-lg font-semibold">₱0.00</p>
                 </div>
             </div>
         </div>
         </div>
         <div id="guestDetails" class="relative w-1/2 ml-20 border border-gray-400 p-4 hidden">
             <h1 class="text-gold-highlight font-light text-2xl tracking-wide">Contact Info</h1>
             <div class="flex justify-between items-center space-x-4">
                 @guest
                 <input type="text" class="w-full" placeholder="Fullname" />
                 @else
                 <div class="relative w-full">
                     <label class="text-sm font-light">Full Name *</label>
                     <input type="text" name="fullname" class="w-full font-light" value="{{ Auth::user()->name }}" />
                 </div>
                 <div class="relative w-full">
                     <label class="text-sm font-light">Last Name *</label>
                     <input type="text" name="fullname" class="w-full font-light" />
                 </div>
             </div>
             <div class="flex justify-between items-center space-x-4 mt-4">
                 <div class="relative w-full">
                     <label class="text-sm font-light">Phone</label>
                     <input type="text" name="fullname" class="w-full font-light" />
                 </div>
                 <div class="relative w-full">
                     <label class="text-sm font-light">Mobile Number</label>
                     <input type="text" name="fullname" class="w-full font-light" />
                 </div>
             </div>
             <div class="relative w-[49%] mt-4">
                 <label class="text-sm font-light">Email Address *</label>
                 <input type="text" name="fullname" class="w-full font-light" value="{{ Auth::user()->email }}" />
             </div>
             @endguest
             <h1 class="text-gold-highlight font-light text-2xl tracking-wide mt-4">Address</h1>
             <div class="relative w-[49%]">
                 <select id="countrySelect"
                     class="block font-light w-full hover:border-gray-500 px-3 py-2 pr-8 focus:outline-none focus:shadow-outline">
                     <option value="" selected disabled>Select a country</option>
                 </select>
                 <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">

                 </div>
             </div>
             <div class="flex justify-between items-center space-x-4 mt-4">
                 <div class="relative w-full">
                     <select id="countryProvince"
                         class="block font-light w-full hover:border-gray-500 px-3 py-2 pr-8 focus:outline-none focus:shadow-outline">
                         <option value="" selected disabled>Select Province</option>
                     </select>
                     <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">

                     </div>
                 </div>
                 <div class="relative w-full">
                     <input type="text" name="fullname" class="w-full font-light" />
                 </div>
             </div>
             <div class="flex justify-between items-center space-x-4 mt-4">
                 <div class="relative w-full">
                     <label class="text-sm font-light">Barangay / Purok / Street *</label>
                     <input type="text" name="fullname" class="w-full font-light" />
                 </div>
                 <div class="relative w-full">
                     <label class="text-sm font-light">Zip / Postal Code *</label>
                     <input type="text" name="fullname" class="w-full font-light" />
                 </div>
             </div>
             <div class="flex justify-center items-center p-2 border-b border-gray-400 mt-4"></div>
             <div class="relative">
                 <h1 class="text-gold-highlight font-light text-2xl tracking-wide mt-4">Payment Options</h1>
             </div>
         </div>
         <div id="adOns" class="relative w-1/2 ml-20 space-y-5 hidden">
             <div class="relative">
                 <div id="cateringsDivBtn"
                     class="flex justify-between items-center border-2 border-gold-highlight p-4 font-bold uppercase text-gold-highlight">
                     Caterings <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                         stroke="currentColor" class="ml-2 w-4 h-4">
                         <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                     </svg>
                 </div>
                 <div id="slideInCaterings" class="border-b-2 border-r-2 border-l-2 border-gold-highlight">
                     <ul class="w-full font-lightbold">
                         <li
                             class="hover:text-white hover:bg-gold-highlight border-b border-gold-highlight p-4 cursor-pointer">
                             Cater 1
                         </li>
                         <li
                             class="hover:text-white hover:bg-gold-highlight border-b border-gold-highlight p-4 cursor-pointer">
                             Cater 2</li>
                         <li class="hover:text-white hover:bg-gold-highlight p-4 cursor-pointer">Cater 3</li>
                     </ul>
                 </div>
             </div>
             <div class="relative">
                 <div id="cakesDivBtn"
                     class="flex justify-between items-center border-2 border-gold-highlight p-4 font-bold uppercase text-gold-highlight">
                     Cakes <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                         stroke="currentColor" class="ml-2 w-4 h-4">
                         <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                     </svg>
                 </div>
                 <div id="slideInCakes" class="border-b-2 border-r-2 border-l-2 border-gold-highlight">
                     <ul class="w-full font-lightbold">
                         <li
                             class="hover:text-white hover:bg-gold-highlight border-b border-gold-highlight p-4 cursor-pointer">
                             Strawberry Cake
                         </li>
                         <li
                             class="hover:text-white hover:bg-gold-highlight border-b border-gold-highlight p-4 cursor-pointer">
                             Blueberry Cake</li>
                         <li class="hover:text-white hover:bg-gold-highlight p-4 cursor-pointer">Ube Yam Cake</li>
                     </ul>
                 </div>
             </div>
             <div class="relative">
                 <div id="flowersDivBtn"
                     class="flex justify-between items-center border-2 border-gold-highlight p-4 font-bold uppercase text-gold-highlight">
                     Flowers <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                         stroke="currentColor" class="ml-2 w-4 h-4">
                         <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                     </svg>
                 </div>
                 <div id="slideInFlowers" class="border-b-2 border-r-2 border-l-2 border-gold-highlight">
                     <ul class="w-full font-lightbold">
                         <li
                             class="hover:text-white hover:bg-gold-highlight border-b border-gold-highlight p-4 cursor-pointer">
                             Roses
                         </li>
                         <li
                             class="hover:text-white hover:bg-gold-highlight border-b border-gold-highlight p-4 cursor-pointer">
                             Sunflower</li>
                         <li class="hover:text-white hover:bg-gold-highlight p-4 cursor-pointer">Tullips</li>
                     </ul>
                 </div>
             </div>
             <div class="flex justify-end items-end"><button id="continueStep3"
                     class="bg-pink-violet p-2 w-40 text-white uppercase tracking-wide font-lightbold">Continue</button>
             </div>
         </div>

         <div id="venueListings" class="">
             <div id="filter"
                 class="flex justify-end items-end border border-gray-400 ml-20 w-1/2 p-4 text-sm font-semibold mt-10 hidden">
                 <div class="relative">
                     <div>
                         <h1 class="font-light text-xs">Sort By</h1>
                     </div>
                     <button class="flex items-center font-bold text-sm">Recommended <svg
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                             stroke="currentColor" class="ml-2 w-4 h-4">
                             <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                         </svg>
                     </button>
                 </div>
             </div>
             @foreach ($venues as $venue)
             <div id="venueListingsLoading" style="display:none;"
                 class="animate-spin rounded-full h-16 w-16 border-t-2 border-b-2 border-gray-400 ml-[28%] mt-32">
                 <i class="fas fa-spinner fa-spin text-purple-600 text-3xl"></i>
             </div>

             <div id="venues" class="ml-20 max-w-sm w-1/2 lg:max-w-full border border-gray-400 flex mt-10 venue"
                 data-capacity="{{$venue->capacity}}">
                 <div class=" h-48 lg:h-auto lg:w-64 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l
                 text-center overflow-hidden p-4">
                     <img src="{{ asset('images/venue_images/' . $venue->image_path) }}" class="h-48 object-cover" />
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
                             <p id="venuePrice" name="price" class="font-bold leading-wide text-xl text-right">₱26,000
                             </p>
                             <button id="bookNowButton" class="bg-pink-violet p-2 uppercase text-white mt-2 text-sm">
                                 BOOK NOW</button>
                         </div>
                     </div>
                 </div>
             </div>
             @endforeach
         </div>
     </section>


     @yield('chatbox')
     @yield('footer')

     @vite('resources/js/app.js')
     <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.3/dist/flatpickr.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
                     .code;
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
     const cateringsDivBtn = document.getElementById('cateringsDivBtn');
     const slideInCaterings = document.getElementById('slideInCaterings');
     const cakesDivBtn = document.getElementById('cakesDivBtn');
     const slideInCakes = document.getElementById('slideInCakes');
     const flowersDivBtn = document.getElementById('flowersDivBtn');
     const slideInFlowers = document.getElementById('slideInFlowers');

     cateringsDivBtn.addEventListener('click', () => {
         slideInCaterings.classList.toggle('open');
     });

     cakesDivBtn.addEventListener('click', () => {
         slideInCakes.classList.toggle('open');
     });
     flowersDivBtn.addEventListener('click', () => {
         slideInFlowers.classList.toggle('open');
     });
     document.addEventListener('DOMContentLoaded', () => {

         const bookNowButton = document.getElementById('bookNowButton');
         const venuePriceElement = document.getElementById('venuePrice');
         const totalSummaryPriceElement = document.getElementById('totalSummaryPrice');
         const step2Btn = document.getElementById('continueStep3');
         const addOns = document.getElementById('adOns');
         const firstBtns = document.getElementById('firstBtns');
         const guestDetails = document.getElementById('guestDetails');
         const venueListings = document.getElementById('venueListings');
         const stepHeading = document.getElementById('stepHeading');

         function updateTotalSummaryPrice() {
             const venuePriceText = venuePriceElement.textContent;
             totalSummaryPriceElement.textContent = venuePriceText;
         }

         bookNowButton.addEventListener('click', () => {
             const step1 = document.getElementById('step1');
             const step1Label = document.getElementById('step1Label');
             const step1Connector = document.getElementById('step1Connector');
             const step2 = document.getElementById('step2');
             const step2Label = document.getElementById('step2Label');
             const step1Check = document.getElementById('step1Check');
             step1.innerHTML = '&#10003';
             step1.classList.remove('bg-pink-violet');
             step1.classList.add('bg-gold-highlight');
             step1Label.classList.add('font-light', 'text-gold-highlight');
             step1Connector.classList.remove('border-gray-300');
             step1Connector.classList.add('border-gold-highlight');
             step1Check.classList.remove('hidden');
             step2.classList.remove('bg-white', 'border');
             step2.classList.add('bg-pink-violet', 'text-white');
             step2Label.classList.remove('font-light');
             step2Label.classList.add('font-bold');
             venueListings.style.display = 'none';
             firstBtns.style.display = 'none';
             stepHeading.classList.remove('mt-6');
             stepHeading.querySelector('p').textContent = 'Select your add ons';
             addOns.classList.remove('hidden');
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
             step2Check.classList.remove('hidden');


         });

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
 </body>

 </html>