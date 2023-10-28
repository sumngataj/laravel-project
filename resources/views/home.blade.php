 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="csrf-token" content="{{ csrf_token() }}">
     <title>Kaluhas PH | Wedding Booking</title>
     <link rel="icon" type="image/x-icon" href="{{ asset('images/kaluhasLogoIcon.png') }}">
     <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

     <script type="module" src="/path-to-your-vite-assets/js/main.js"></script>
     <script src="https://code.jquery.com/jquery-3.7.1.min.js"
         integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

     @vite('resources/css/app.css')
 </head>

 <body>

     @include('components.navbar')
     @include('components.newNav')
     @include('components.footer')
     @include('section.package')
     @include('components.loginSideModal')
     @include('section.portfolio')
     @include('components.floatingNavbar')
     @include('components.searchToggle')
     @include('components.sideMenu')
     @include('components.chatBox')
     @include('section.subheading')
     @include('components.homeSlider')
     @include('section.venues')
     @yield('sideMenu')
     @yield('floatingNavbar')
     @yield('newNav')
     @yield('loginSideModal')
     @yield('toggleSearch')

     @if ($message = Session::get('message'))
     <script>
     Swal.fire({
         icon: 'success',
         title: 'Success',
         text: "{{ $message }}",
         confirmButtonText: 'OK'
     });
     </script>
     @endif
     @if(session('success'))
     <script>
     Swal.fire({
         icon: 'success',
         title: 'Success',
         text: "{{ session('success') }}",
         confirmButtonText: 'OK'
     });
     </script>

     @endif
     @if($errors->has('email'))
     <script>
     console.log('Script is executing'); // Add this line to check
     window.alert('{{ $errors->first('
         email ') }}');
     </script>
     @endif



     @yield('homeSlider')

     @yield('process')


     @yield('packages')


     @yield('venues')


     @yield('chatbox')
     <!-- @yield('portfolio') -->
     <br>
     <br>
     <br>

     @yield('footer')

     @vite('resources/js/app.js')
     <script>
     var slideIndex = 1;
     showDivs(slideIndex);

     // Auto advance the slides every 3 seconds (3000 milliseconds)
     var slideInterval = setInterval(function() {
         plusDivs(1);
     }, 60000);

     function plusDivs(n) {
         showDivs(slideIndex += n);
     }

     function showDivs(n) {
         var i;
         var x = document.getElementsByClassName("mySlides");
         if (n > x.length) {
             slideIndex = 1
         }
         if (n < 1) {
             slideIndex = x.length
         }
         for (i = 0; i < x.length; i++) {
             x[i].style.display = "none";
         }
         x[slideIndex - 1].style.display = "block";
     }

     // Clear the auto slide interval when the user clicks on a navigation button
     document.querySelector(".w3-button").addEventListener("click", function() {
         clearInterval(slideInterval);
     });
     </script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
     <script>
     const csrfToken = document.querySelector("meta[name='csrf-token']").getAttribute('content');
     </script>

     <script>
     const searchInput = document.getElementById("searchInput");


     searchInput.addEventListener("input", function() {
         const query = searchInput.value;
         const searchResults = document.getElementById("searchResults");
         console.log("Query:", query);

         fetch(`/search?q=${query}`, {
                 method: 'GET',
                 headers: {
                     'X-CSRF-TOKEN': csrfToken,
                     'Content-Type': 'application/json',
                 },

             })
             .then(response => {
                 console.log("response params", response);
                 if (!response.ok) {
                     throw new Error('Network response was not ok');
                 }
                 return response.json();
             })
             .then(data => {
                 console.log(data);

                 searchResults.classList.remove('hidden');
                 searchResults.innerHTML = "";

                 data.forEach(item => {
                     const resultContainer = document.createElement("div");
                     resultContainer.classList.add('result-container', 'border-b',
                         'border-gray-300', 'mb-2', );

                     const imgElement = document.createElement("img");
                     imgElement.src = item.image_url;
                     resultContainer.appendChild(imgElement);

                     const resultItem = document.createElement("div");
                     resultItem.innerHTML =
                         `<span style="font-weight: bold;">${item.package_name}</span><br><span style="font-weight: light; font-size: 14px;">${item.truncated_description}</span>`;
                     resultContainer.appendChild(resultItem);

                     searchResults.appendChild(resultContainer);


                 });
                 if (query.trim() === "") {

                     searchResults.innerHTML = "";
                     searchResults.classList.add('hidden');
                     return;
                 }

             })
             .catch(error => {
                 console.error('Fetch error:', error);
             });
     });
     </script>
     <script>
     function getRandomColor() {
         const letters = '0123456789ABCDEF';
         let color = '#';
         for (let i = 0; i < 6; i++) {
             color += letters[Math.floor(Math.random() * 16)];
         }
         return color;
     }

     const profilePic = document.querySelector('.profile-pic');
     profilePic.style.backgroundColor = getRandomColor();

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
                 const prev = document.getElementById("prevButton");
                 if (i === currentIndex) {
                     indicator.classList.remove("bg-white");
                     indicator.classList.add("bg-gray-300");
                     prev.classList.remove("hidden");
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
             currentIndex++;
             if (currentIndex > totalCards) {
                 currentIndex = 1;
             }
             updateIndicators(currentIndex);
         });

         prevButton.addEventListener("click", function() {
             currentIndex--;
             if (currentIndex < 1) {
                 currentIndex = totalCards;
             }
             updateIndicators(currentIndex);
         });
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



     let sliderContainer = document.getElementById("sliderContainer");
     if (sliderContainer) {
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
     }
     </script>

     <script>
     document.addEventListener("DOMContentLoaded", function() {
         const myButton = document.getElementById("myButton");

         myButton.addEventListener("click", function() {
             @if(!Auth::check())
             Swal.fire({
                 title: 'Login Required',
                 text: 'You need to be logged in to perform this action.',
                 icon: 'warning',
                 confirmButtonText: 'OK'
             });
             @endif
         });
     });
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