 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Kaluhas PH | Wedding Booking</title>
     <link rel="icon" type="image/x-icon" href="{{ asset('images/kaluhasLogoIcon.png') }}">
     <script type="module" src="/path-to-your-vite-assets/js/main.js"></script>
     @vite('resources/css/app.css')
 </head>

 <body>

     @include('components.navbar')
     @include('components.footer')
     @include('section.package')
     @include('components.loginSideModal')
     @include('section.portfolio')
     @include('components.floatingNavbar')
     @include('components.searchToggle')
     @include('components.sideMenu')
     @include('components.chatBox')
     @include('section.subheading')
     @yield('sideMenu')
     @yield('floatingNavbar')
     @yield('content')
     @yield('loginSideModal')
     @yield('toggleSearch')


     <div
         class="bg-[url('https://www.henann.com/boracay/henanngarden/uploads/slider/overview3.jpg')] bg-no-repeat h-[35rem] bg-cover bg-center bg-fixed w-full">
         <!-- <div class="max-w-7xl mx-auto">
             <div class="">
                 <div class="flex justify-center items-center space-x-10 space-y-2 overflow-hidden">
                     <div class="w-1/2 px-4 sm:px-6 lg:px-8">
                         <h2 class="text-5xl font-semibold text-gray-800 animation-slide-up">Lorem Ipsum</h2>
                         <p class="mt-2 text-gray-600 animation-slide-up">Lorem ipsum dolor sit amet,
                             eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                             quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                         </p>

                         <button
                             class="bg-pink-violet p-4 text-sm font-semibold mt-5 hover:bg-pink-hover animation-slide-up">
                             Book Now
                         </button>
                     </div>
                     <div class="flex justify-center items-center w-1/2">
                         <img src="{{ asset('images/dressedResize.png') }}" class="animation-slide-in" alt="My Image">
                     </div>
                 </div>
             </div>
         </div> -->
     </div>
     @yield('process')
     @yield('packages')
     @yield('chatbox')
     @yield('portfolio')

     @yield('footer')

     @vite('resources/js/app.js')
     <script>
     
     document.addEventListener("DOMContentLoaded", function() {
         const slider = document.getElementById("slider");
         const indicatorsContainer = document.getElementById("indicators");

         const totalCards = slider.children.length;

         for (let i = 1; i <= totalCards; i++) {
             const indicator = document.createElement("div");
             indicator.id = `indicator-${i}`;
             indicator.classList.add("h-3", "w-3", "rounded-full", "bg-white", "border", "border-gray-600",
                 "mx-1");
             indicator.setAttribute("data-slide-index", i);
             indicatorsContainer.appendChild(indicator);
         }


         function updateIndicators(currentIndex) {
             for (let i = 1; i <= totalCards; i++) {
                 const indicator = document.getElementById(`indicator-${i}`);
                 if (i === currentIndex) {
                     indicator.classList.remove("bg-white");
                     indicator.classList.add("bg-gray-300");
                 } else {
                     indicator.classList.remove("bg-gray-300");
                     indicator.classList.add("bg-white");
                 }
             }
         }
         let currentIndex = 1;

         const nextButton = document.getElementById("nextButton");
         const prevButton = document.getElementById("prevButton");

         nextButton.addEventListener("click", function() {
             currentIndex++; // Update the currentIndex when moving to the next slide
             if (currentIndex > totalCards) {
                 currentIndex = 1; // Reset to the first slide if at the end
             }
             updateIndicators(currentIndex);
         });

         prevButton.addEventListener("click", function() {
             currentIndex--; // Update the currentIndex when moving to the previous slide
             if (currentIndex < 1) {
                 currentIndex = totalCards; // Loop to the last slide if at the beginning
             }
             updateIndicators(currentIndex);
         });
     });
     </script>
     <script>
     const toggleButtons = document.getElementById('toggle-buttons');
     const contentToToggles = document.getElementById('toggle-divs');

     toggleButtons.addEventListener('click', function(event) {
         event.stopPropagation(); // Prevent the event from reaching the document click listener
         contentToToggles.classList.toggle('hidden');
     });

     // Close the dropdown when clicking anywhere outside of it
     document.addEventListener('click', function(event) {
         if (!toggleButtons.contains(event.target) && !contentToToggles.contains(event.target)) {
             contentToToggles.classList.add('hidden');
         }
     });



     let sliderContainer = document.getElementById("sliderContainer");
     let slider = document.getElementById("slider");
     let cards = slider.getElementsByTagName("li");

     let elementsToShow = 3;
     if (document.body.clientWidth < 1000) {
         elementsToShow = 1;
     } else if (document.body.clientWidth < 1500) {
         elementsToShow = 2;
     }

     let sliderContainerWidth = sliderContainer.clientWidth;

     let cardWidth = sliderContainerWidth / elementsToShow;

     slider.style.width = cards.length * cardWidth + "px";
     slider.style.transition = "transform 1s";

     const nextButton = document.getElementById("nextButton");
     const prevButton = document.getElementById("prevButton");

     for (let index = 0; index < cards.length; index++) {
         const element = cards[index];
         element.style.width = cardWidth + "px";
     }

     let currentIndex = 0;

     function prev() {
         if (currentIndex > 0) {
             currentIndex--;
             const translateX = -currentIndex * cardWidth;
             slider.style.transform = `translateX(${translateX}px)`;
         }
     }

     function next() {
         if (currentIndex < cards.length - elementsToShow) {
             currentIndex++;
             const translateX = -currentIndex * cardWidth;
             slider.style.transform = `translateX(${translateX}px)`;
         }
     }

     nextButton.addEventListener("click", next);
     prevButton.addEventListener("click", prev);
     </script>

 </body>

 </html>