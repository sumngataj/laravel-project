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

     @include('components.newNav')    
     @include('components.footer')
     @include('components.loginSideModal')
     @include('components.searchToggle')
     @include('components.sideMenu')
     @include('components.chatBox')
     @yield('newNav')
     @yield('sideMenu')
     @yield('content')
     @yield('loginSideModal')
     @yield('toggleSearch')

     <div class="bg-black mt-32 p-16">
         <div class="max-w-7xl mx-auto">
             <div class="flex justify-center p-8 items-center space-x-10 space-y-2 overflow-hidden">
                 <p class="text-white font-semibold text-5xl">Venue Section</p>
             </div>
         </div>
     </div>

     @if ($message = Session::get('success'))
     <script>
     window.alert('{{ $message }}');
     </script>
     @endif


     <section class="flex items-start p-12 h-auto">
         <div class="relative w-2/3">
             <img class="w-full h-[60rem] object-cover" src="{{ asset('images/venue_images/' . $venue->image_path) }}"
                 alt="MyImage" />
             <div class="flex items-center">
                 <h2 class="flex items-center font-bold text-3xl text-gold-highlight uppercase mt-2">{{$venue->name}}
                 </h2>
                 {{-- <button id="venue-btn-book"
                     class="flex justify-end items-center text-xs bg-pink-violet p-2 mt-3 uppercase font-semibold text-white ml-2 rounded-full"
                     disabled>
                     Book
                     Now</button> --}}
             </div>
             <h2 class="flex items-center font-lightbold text-sm uppercase tracking-widest mt-1">{{$venue->location}}
             </h2>
             <p class="font-light text-justify text-sm mt-4 tracking-wide leading-6">{!! nl2br(e($venue->amenities)) !!}
             </p>
         </div>
     </section>


     @yield('chatbox')
     @yield('footer')

     @vite('resources/js/app.js')
     <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.3/dist/flatpickr.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <script>
     document.addEventListener("DOMContentLoaded", function() {
         const bookVenueBtn = document.getElementById("venue-btn-book");
         @if(Auth::check())
         bookVenueBtn.removeAttribute('disabled');
         @endif

     });
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



     let sliderContainer = document.getElementById("sliderContainers");
     if (sliderContainer) {
         let slider = document.getElementById("sliders");
         let cards = slider.getElementsByClassName("li");

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
     }
     </script>


     <script>
     const commentContainer = document.getElementById('commentContainer');
     const commentText = document.getElementById('commentText');

     function appendComment() {
         const comment = {
             avatar: 'https://www.disneyplusinformer.com/wp-content/uploads/2021/06/Luca-Profile-Avatars-3.png',
             text: commentText.value.trim(),
         };

         if (comment.text !== '') {
             const commentElement = document.createElement('div');
             commentElement.classList.add('comment');

             // Create a flex container for the avatar, username, and text
             const commentContent = document.createElement('div');
             commentContent.classList.add('comment-content');
             commentContent.style.display = 'flex'; // Add flex direction

             // Create an avatar element (img)
             const avatar = document.createElement('img');
             avatar.src = comment.avatar;
             avatar.alt = 'Avatar';
             avatar.classList.add('avatar');
             commentContent.appendChild(avatar);

             // Create a div for the username and text
             const usernameAndText = document.createElement('div');
             usernameAndText.classList.add('username-text');

             // Create a username element (span)
             const username = document.createElement('span');
             username.textContent = comment.username;
             username.classList.add('username');
             usernameAndText.appendChild(username);

             // Create a comment text element (p)
             const commentTextElement = document.createElement('p');
             commentTextElement.textContent = comment.text;
             commentTextElement.classList.add('comment-text');
             commentTextElement.style.backgroundColor = 'white';
             commentTextElement.style.padding = '10px'; // Add padding for spacing
             commentTextElement.style.borderRadius = '10px'; // Add rounded corners
             commentTextElement.style.boxShadow = '0px 2px 4px rgba(0, 0, 0, 0.5)';
             usernameAndText.appendChild(commentTextElement);

             // Append the username and text container to the comment content
             commentContent.appendChild(usernameAndText);

             // Append the comment content to the comment element
             commentElement.appendChild(commentContent);

             const lineBreak = document.createElement('br');
             commentElement.appendChild(lineBreak);
             // Append the comment element to the comment container
             commentContainer.appendChild(commentElement);

             commentText.value = '';
         }
     }


     $(document).ready(function() {
         // Attach an event listener to the select element
         $("#venueSelect").on("change", function() {
             // Get the selected value
             var selectedVenue = $(this).val();

             // Send an Ajax request to retrieve data based on the selected venue
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

         datepicker.addEventListener("change", function() {

             const selectedDateString = datepicker.value;
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


     <script>
     const packagePriceElement = document.getElementById('package-price');
     const venuePriceElement = document.getElementById('venue-price');
     const totalPriceElement = document.getElementById('total-price');
     const priceInput = document.getElementById('price');

     const packagePrice = parseFloat(packagePriceElement.textContent);
     const venuePrice = parseFloat(venuePriceElement.textContent);

     const totalPrice = packagePrice + venuePrice;

     totalPriceElement.textContent = `₱${totalPrice.toFixed(2)}`;

     priceInput.value = totalPrice.toFixed(2);
     </script>



     {{-- <script>
        var venues = [
            @foreach ($venues as $venue)
                {
                    id: {{ $venue->venue_id }},
     amenities: {!! json_encode($venue->amenities) !!}
     },
     @endforeach
     ];

     function fetchAmenities() {
     // Get the selected venue_id
     var selectedVenueId = document.getElementById("venue_id").value;

     // Find the venue with the selected ID in the venues array
     var selectedVenue = venues.find(function (venue) {
     return venue.id == selectedVenueId;
     });

     // Display the amenities for the selected venue
     var amenitiesContainer = document.getElementById("amenities-container");
     var amenitiesPlaceholder = document.getElementById("amenities-placeholder");

     if (selectedVenue) {
     amenitiesPlaceholder.style.display = "none";
     amenitiesContainer.innerHTML = selectedVenue.amenities;
     } else {
     amenitiesPlaceholder.style.display = "block";
     amenitiesContainer.innerHTML = '';
     }
     }
     </script> --}}




 </body>

 </html>