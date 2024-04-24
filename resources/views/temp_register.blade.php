<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaluhas PH | Wedding Booking</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/kaluhasLogoIcon.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flatpickr@4.6.3/dist/flatpickr.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script type="module" src="/path-to-your-vite-assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    @vite('resources/css/app.css')
</head>

<body>

    {{-- @include('components.newNav')     --}}
    @include('components.footer')
    @include('components.loginSideModal')
    @include('components.searchToggle')
    @include('components.sideMenu')
    @include('components.chatBox')
    {{-- @yield('newNav') --}}
    @include('components.nav')
    @yield('nav')

    @yield('sideMenu')
    @yield('content')
    @yield('loginSideModal')
    @yield('toggleSearch')


<div class="flex items-center min-h-screen p-6 bg-gray-50">
    <div
      class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl"
    >
      <div class="flex flex-col overflow-y-auto md:flex-row">
        <div class="h-32 md:h-auto md:w-1/2">
          <img
            aria-hidden="true"
            class="object-cover w-full h-full"
            src="{{ asset('images/reg.jpg') }}"
            alt="Office"
          />
        </div>
        <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
          <div class="w-full">
            <h1
              class="flex justify-center mb-10 text-xl font-semibold text-gray-700"
            >
              Sign Up
            </h1>
            <form action="{{ route('store') }}" method="POST">
              @csrf
            <label class="block text-sm">
              <span class="text-gray-700">Name</span> @if ($errors->has('Name'))<span class="text-red-500">*</span>@endif
              <input
                class="block w-full mt-1 border border-gray-300 rounded-lg text-sm focus:border-pink-400 focus:outline-none focus:shadow-outline-pink form-input @error('name') is-invalid @enderror"
                placeholder="Fullname" type="text"
                id="name" name="name" value="{{ old('name') }}" autocomplete="name" required
              />
                @if ($errors->has('name'))
                <span class="text-red-500">{{ $errors->first('name') }}</span>
                @endif
            </label>
            <label class="block mt-4 text-sm">
              <span class="text-gray-700">Email </span> @if ($errors->has('email'))<span class="text-red-500">*</span>@endif
              <input
                class="block w-full mt-1 border border-gray-300 rounded-lg text-sm focus:border-pink-400 focus:outline-none focus:shadow-outline-pink form-input @error('email') is-invalid @enderror"
                placeholder="Email" type="email"
                id="email" name="email" value="{{ old('email') }}" autocomplete="email" required
              />
                @if ($errors->has('email'))
                <span class="text-red-500">{{ $errors->first('email') }}</span>
                @endif
            </label>
            <div x-data="{ showPassword: false, showConfirmPassword: false }">
                <label class="block mt-4 text-sm">
                    <span class="text-gray-700">Password </span> @if ($errors->has('password'))<span class="text-red-500">*</span>@endif
                    <div class="relative">
                        <input
                            class="block w-full mt-1 border border-gray-300 rounded-lg text-sm focus:border-pink-400 focus:outline-none focus:shadow-outline-pink form-input @error('password') is-invalid @enderror"
                            id="password" name="password" required :type="showPassword ? 'text' : 'password'"
                            placeholder="***************"
                        />
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
                            <button type="button" @click="showPassword = !showPassword"
                                    class="text-gray-700 focus:outline-none focus:text-gray-800">
                                <svg :class="{ 'hidden': showPassword, 'block': !showPassword }" class="h-6" fill="none"
                                     stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                     <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                     <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <svg :class="{ 'block': showPassword, 'hidden': !showPassword }" class="h-6" fill="none"
                                     stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                     <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    @if ($errors->has('password'))
                        <span class="text-red-500">{{ $errors->first('password') }}</span>
                    @endif
                </label>
            
                <label class="block mt-4 text-sm">
                    <span class="text-gray-700">Confirm Password </span>@if ($errors->has('password'))<span class="text-red-500">*</span>@endif
                    <div class="relative">
                        <input
                            class="block w-full mt-1 border border-gray-300 rounded-lg text-sm focus:border-pink-400 focus:outline-none focus:shadow-outline-pink form-input @error('password') is-invalid @enderror"
                            id="password_confirmation" name="password_confirmation" required :type="showConfirmPassword ? 'text' : 'password'"
                            placeholder="***************"
                        />
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
                            <button type="button" @click="showConfirmPassword = !showConfirmPassword"
                                    class="text-gray-700 focus:outline-none focus:text-gray-800">
                                <svg :class="{ 'hidden': showConfirmPassword, 'block': !showConfirmPassword }" class="h-6" fill="none"
                                     stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                     <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                     <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <svg :class="{ 'block': showConfirmPassword, 'hidden': !showConfirmPassword }" class="h-6" fill="none"
                                     stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                     <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </label>
            </div>
            

            <button type="submit" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-pink-violet border border-transparent rounded-lg focus:outline-none focus:shadow-outline-pink">
              Sign Up
            </button>
          
            </form>
            <hr class="my-8" />
          </div>
        </div>
      </div>
    </div>
  </div>



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




</body>

</html>