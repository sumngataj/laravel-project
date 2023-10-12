 <!DOCTYPE html>
 <html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Kaluhas PH | Wedding Booking</title>
     <link rel="icon" type="image/x-icon" href="{{ asset('images/kaluhasLogoIcon.png') }}">
     <script src="https://cdn.jsdelivr.net/alpine/2.8/alpine.min.js" defer></script>
     <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/flatpickr@4.6.3/dist/flatpickr.min.css" rel="stylesheet">
     <script type="module" src="/path-to-your-vite-assets/js/main.js"></script>
     @vite('resources/css/app.css')
     @php
     use Carbon\Carbon;
     @endphp
 </head>

 <body id="profile-section">
     @include('components.profileNavbar')

     @yield('profilebar')
     <section class="relative w-full h-auto py-10">

         @guest
         @else
         <div class="flex justify-center items-center">
             <div class="profile-pics">
                 <div class="uppercase text-8xl">{{ substr(Auth::user()->name, 0, 1) }}</div>
             </div>
             <div class="relative w-1/2 pl-10">
                 <h1 class="text-3xl uppercase font-semibold">{{Auth::user()->name }}</h1>
                 <h1 class="text-xl">{{Auth::user()->email }}</h1>
             </div>
         </div>
         @endguest

         @foreach($reservations as $reservation)
         <div class="flex justify-center items-center border-t border-gray-300 w-8/12 ml-64 mt-10 py-10">
             <div>
                 <h1 class="text-lg text-gray-500">
                     {{ \Carbon\Carbon::parse($reservation->reservation_date)->format('F j, Y') }}</h1>
             </div>
             <div class="relative w-9/12 pl-10 mt-6">
                 <div class="flex justify-between items-center">
                     <button class="text-3xl uppercase font-semibold open-modal" data-reservation='@json($reservation)'>
                         {{ !empty($reservation->package->name) ? $reservation->package->name : $reservation->venue->name  }}
                     </button>
                     <h1 class="bg-red-500 w-20 rounded-full text-center text-white p-2 text-xs uppercase">
                         {{$reservation->status }}</h1>
                 </div>
                 <div>
                     <p>{{$reservation->venue->location }}</p>
                 </div>
             </div>
         </div>

         @endforeach
         <div id="myModal" class="fixed inset-0 z-50 hidden bg-black bg-opacity-30">
             <div
                 class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 p-4 bg-white w-1/2 h-auto rounded-lg">
                 <div class="flex justify-between items-center">
                     <p class="text-2xl font-lightbold text-gold-highlight">Reservation Details <span id="modalStatus"
                             class="rounded-full p-2 bg-red-500 text-white text-xs ml-2"></span></p>
                     <button id="closeModal"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                             <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                         </svg>
                     </button>
                 </div>
                 <div class="flex items-center">
                     <p id="modalDate" class="font-bold"></p>
                 </div>
                 <div class="mt-4">
                     <p id="modalName" class="font-light"></p>
                     <p id="modalPackage" class="font-light"></p>
                     <p id="modalVenue" class="font-light"></p>
                     <p id="modalGuest" class="font-light"></p>
                 </div>
                 <div class="flex justify-end items-end">
                     <button
                         class="text-pink-violet border border-pink-violet hover:bg-pink-hover hover:text-white px-4 py-2 mt-4">
                         Cancel Reservation
                     </button>
                 </div>
             </div>
         </div>
     </section>

     @vite('resources/js/app.js')
     <script>
     document.addEventListener("DOMContentLoaded", function() {
         function getRandomColor() {
             const letters = '0123456789ABCDEF';
             let color = '#';
             for (let i = 0; i < 6; i++) {
                 color += letters[Math.floor(Math.random() * 16)];
             }
             return color;
         }

         const profilePic = document.querySelector('.profile-pics');
         profilePic.style.backgroundColor = getRandomColor();

         const darkmode = document.getElementById('dark-mode');
         const darkmodeicon = document.getElementById('dark-mode-icon');
         const sectionToDark = document.getElementById('profile-section');
         const profileLogoLink = document.getElementById('profilebar-logo');
         const profilelabel = document.getElementById('profile-label');
         const imgElement = profileLogoLink.querySelector('img');
         let isDarkMode = false;
         darkmode.addEventListener("click", () => {
             if (!isDarkMode) {
                 sectionToDark.classList.add('section-dark-mode');
                 imgElement.classList.add('hidden');
                 profilelabel.innerHTML = "KALUHAS";
                 darkmodeicon.innerHTML =
                     `<path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />`;
             } else {
                 sectionToDark.classList.remove('section-dark-mode');
                 profilelabel.innerHTML = "";
                 imgElement.classList.remove('hidden');
                 darkmodeicon.innerHTML =
                     `<path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />`;
             }
             isDarkMode = !isDarkMode;
         });

         const openModalButtons = document.querySelectorAll('.open-modal');
         const modal = document.getElementById('myModal');
         const modalDate = document.getElementById('modalDate');
         const modalName = document.getElementById('modalName');
         const closeModalButton = document.getElementById('closeModal');

         openModalButtons.forEach(button => {
             button.addEventListener('click', () => {
                 console.log('Button clicked'); // Add this line
                 const reservationData = JSON.parse(button.getAttribute('data-reservation'));

                 // Convert the reservation date string to a JavaScript Date object
                 const reservationDate = new Date(reservationData.reservation_date);

                 // Format the date using JavaScript
                 const formattedDate = new Intl.DateTimeFormat('en-US', {
                     year: 'numeric',
                     month: 'long',
                     day: 'numeric',
                 }).format(reservationDate);

                 modalDate.textContent = `${formattedDate}`;
                 modalStatus.textContent = `${reservationData.status}`;
                 modalName.textContent = `Name: ${reservationData.first_name}`;
                 modalVenue.textContent = `Venue: ${reservationData.venue.name}`;
                 modal.style.display = 'block';
             });
         });


         closeModalButton.addEventListener('click', () => {
             modal.style.display = 'none';
         });

         window.addEventListener('click', (event) => {
             if (event.target === modal) {
                 modal.style.display = 'none';
             }
         });


     });
     </script>



 </body>

 </html>