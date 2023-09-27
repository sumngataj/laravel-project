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

     <div class="bg-dirty-gray h-[30rem]">
         <div class="max-w-7xl mx-auto">
             <div class="relative">
             </div>
         </div>
     </div>

     <section class="flex p-12 h-[120rem]">
         <div>
             <div class="flex cursor-pointer w-[20%]">
                 <img class="thumbnail lg:w-36 h-24 opacity-50"
                     src="https://images.unsplash.com/photo-1591604466107-ec97de577aff?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80"
                     alt="Image 1"
                     onclick="displayImage(this, 'https://images.unsplash.com/photo-1591604466107-ec97de577aff?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80')">
                 <img class="thumbnail lg:w-36 lg:h-24"
                     src="https://images.unsplash.com/photo-1475721042966-f829c9b42aab?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80"
                     alt="Image 2"
                     onclick="displayImage(this, 'https://images.unsplash.com/photo-1475721042966-f829c9b42aab?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80')">
                 <img class="thumbnail lg:w-36 lg:h-24 "
                     src="https://images.unsplash.com/photo-1437226104525-c08c6dd0cc05?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2074&q=80"
                     alt="Image 3"
                     onclick="displayImage(this, 'https://images.unsplash.com/photo-1437226104525-c08c6dd0cc05?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2074&q=80')">
             </div>
             <div class="flex justify-between w-[90%]">
                 <img id="displayed-image"
                     src="https://images.unsplash.com/photo-1591604466107-ec97de577aff?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80"
                     alt="Displayed Image">
             </div>
             <h1 class="text-3xl mt-2">Package Name</h1>
             <div class="flex border-b border-gray w-11/12 mt-5">
                 <button
                     class="tab-link hover:text-gold-highlight p-2 hover:border-b hover:border-pink-violet active:text-blue-700  p-2 bg-gray-300 border-b border-pink-violet rounded-sm"
                     onclick="showTab(1)">Overview</button>
                 <button class="tab-link hover:text-blue-500 p-2 hover:border-b hover:border-pink-violet  p-2"
                     onclick="showTab(2)">Comments</button>
             </div>

             <div id="tabContent1" class="tab-content mt-2">
                 <p class="font-semibold">{{ $package->description }}</p>

             </div>
             <div id="tabContent2" class="tab-content hidden">Content for Tab 2</div>
         </div>

         <div id="dateSelection" class="lg:max-w-md mx-auto bg-white rounded-xl shadow-lg sticky top-20 h-[30rem]">
             <div class="1">
                 <div class="p-4">
                     <label>Choose a date:</label>
                     <input id="datepicker"
                         class="w-full bg-white border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-indigo-600"
                         type="text" placeholder="Select Date">
                 </div>
                 <div class="flex justify-center items-center p-2">
                     <button id="bookNowButton" class="bg-pink-violet rounded-full p-2 w-full text-white">
                         <p class="flex justify-center items-center">
                             <span id="loadingIcon" class="hidden">
                                 <!-- Add loading icon here -->
                                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2 animate-spin">
                                     <path stroke-linecap="round" stroke-linejoin="round"
                                         d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                                 </svg>


                             </span>
                             <svg id="date-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                                 <path stroke-linecap="round" stroke-linejoin="round"
                                     d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                             </svg>
                             Book Now
                         </p>
                     </button>
                 </div>
             </div>
         </div>

         <div id="bookingSummary" class="lg:w-2/4 mx-auto bg-white rounded-xl shadow-lg sticky top-20 h-[24rem] hidden">
             <div class="2">
                 <div class="p-4">
                     <label class="text-gold-highlight font-light tracking-wide text-xl">Your Booking Summary</label>
                     <div class="flex justify-between items-center mt-2">
                         <div>
                             <p class="font-semibold">Event Date</p>
                             <p class="text-sm" id="selectedDate">Date will appear here</p>
                         </div>
                         <div>
                             <p class="font-semibold">Venue</p>
                             <p class="text-sm">data from input</p>
                         </div>
                     </div>
                     <p class="font-semibold">Inclusions</p>
                     <ul class="text-sm">
                         <li>data</li>
                         <li>data</li>
                         <li>data</li>
                         <li>data</li>
                         <li>data</li>
                         <li>data</li>
                     </ul>
                 </div>
                 <center>
                     <div class="border-b-2 border-gray-200 w-11/12"></div>
                 </center>
                 <div class="flex justify-between items-center p-4">
                     <p class="font-semibold text-lg">Total:</p>
                     <p class="font-semibold text-lg">₱140000</p>
                 </div>
                 <div class="flex justify-between items-center p-2 w-full">
                     <button id="backButton" class="bg-pink-violet rounded-full p-2 w-24 text-white">
                         << Back</button>
                             <button class="bg-pink-violet rounded-full p-2 w-32 text-white">Proceed >></button>
                 </div>
             </div>
         </div>

     </section>



     @yield('chatbox')
     @yield('footer')

     @vite('resources/js/app.js')
     <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.3/dist/flatpickr.min.js"></script>
     <script>
     flatpickr("#datepicker", {
         dateFormat: "Y-m-d",
         inline: true,
         minDate: "today",
         defaultDate: "today",
     });
     </script>
     <script>
     const bookNowButton = document.getElementById('bookNowButton');
     const loadingIcon = document.getElementById('loadingIcon');
     const dateIcon = document.getElementById('date-icon');

     function toggleSections() {
         const dateSelection = document.getElementById('dateSelection');
         const bookingSummary = document.getElementById('bookingSummary');
         dateSelection.classList.toggle('hidden');
         bookingSummary.classList.toggle('hidden');
     }

     bookNowButton.addEventListener('click', () => {
         // Show the loading icon and hide the date icon
         loadingIcon.classList.remove('hidden');
         dateIcon.classList.add('hidden');

         // Disable the "Book Now" button while loading
         bookNowButton.disabled = true;

         // Simulate a delay (e.g., 2 seconds) for loading (replace with your actual loading logic)
         setTimeout(() => {
             // Hide the loading icon and show the date icon
             loadingIcon.classList.add('hidden');
             dateIcon.classList.remove('hidden');

             // Enable the "Book Now" button
             bookNowButton.disabled = false;

             // Toggle the sections
             toggleSections();
         }, 2000); // Adjust the timeout duration as needed
     });

     // ...


     backButton.addEventListener('click', toggleSections);
     </script>

     <script>
     document.addEventListener("DOMContentLoaded", function() {
         const datepicker = document.getElementById("datepicker");
         const selectedDate = document.getElementById("selectedDate");

         // Add an event listener to capture date changes
         datepicker.addEventListener("change", function() {
             // Get the selected date from the date picker
             const selectedDateString = datepicker.value;

             // Update the content of the "selectedDate" paragraph
             selectedDate.textContent = selectedDateString;
         });
     });
     </script>

     <script>
     function displayImage(image, imageSrc) {
         const displayedImage = document.getElementById("displayed-image");
         displayedImage.src = imageSrc;
         resetOpacity();
         image.classList.add("opacity-50");
     }

     function resetOpacity() {
         const images = document.querySelectorAll(".thumbnail");
         images.forEach(image => {
             image.classList.remove("opacity-50");
         });
     }
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