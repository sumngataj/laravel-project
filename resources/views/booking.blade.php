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
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
     @vite('resources/css/app.css')
     <style>
     /* Add this CSS to control the image size within the comment */

     .avatar {
         width: 40px;
         /* Set the width of the avatar image */
         height: 40px;
         /* Set the height of the avatar image */
         margin-right: 10px;
         /* Add margin for spacing between avatar and content */
         border-radius: 50%;
         /* Make the avatar image round */
     }

    /* Define the style for the active tab */
    .active-tab-color {
        background-color: #9ca3af;
        color: black; /* Change this to the desired gray color */
    }

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
                 <p class="text-white font-semibold text-5xl">Package Section</p>
             </div>
         </div>
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
                title: '{{ session('success') }}'
            });
        </script>
    @endif



     <section class="flex p-12 h-auto">
         <div>
             <!-- <div class="flex cursor-pointer w-[20%]">
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
             </div> -->
             <div class="flex justify-between w-[90%]">
                 <img id="displayed-image" src="{{ asset('images/package_images/' . $package->image_path) }}"
                     alt="Displayed Image">
             </div>
             <h1 class="text-3xl mt-2">{{ $package->package_name }}</h1>
             <div class="flex border-b border-gray w-11/12 mt-5">
                 <button
                     class="tab-link hover:text-gold-highlight p-2 hover:border-b hover:border-pink-violet  p-2 rounded-sm"
                     onclick="showTab(1)">Overview</button>
                 <button class="tab-link hover:text-blue-500 p-2 hover:border-b hover:border-pink-violet  p-2"
                     onclick="showTab(2)">Rating & Review</button>
             </div>

             <div id="tabContent1" class="tab-content mt-2 w-10/12">
                 <p class="font-semibold">Details</p>
                 <p class="font-light text-justify text-sm">{!! nl2br(e($package->description)) !!}</p>

             </div>
             <div id="tabContent2" class="tab-content hidden ">
                <form method="POST" action="{{ route('ratings.store') }}" enctype="multipart/form-data">

                    @csrf
                    <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="package_id" value="{{ $package->package_id }}">
                    <input type="hidden" name="rating" id="rating" value="5">
                    <p class="m-1 text-sm font-medium text-gray-500  mt-3">Rate Here:</p>
                        <div class="flex items-center" id="star-rating">
                            <svg class="w-4 h-4 text-yellow-300 mr-1 star" data-rating="1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300 mr-1 star" data-rating="2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300 mr-1 star" data-rating="3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300 mr-1 star" data-rating="4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300 mr-1 star" data-rating="5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                            <p class="ml-2 text-sm font-medium text-gray-500 starcount">5 out of 5</p>
                        </div>

                        <textarea id="commentText" name="comment" class="w-11/12 mt-2 h-56" required></textarea>
                        {{-- id="appendButton" onclick="appendComment()" --}}
                        <div class="w-11/12 flex justify-end items-end mt-4"><button  type="submit"  class="bg-pink-violet p-2 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                                </svg>
                            </button></div>
                        <div class="border border-gray-300 w-11/12 mt-4"></div>
                </form>
                <div id="commentContainer" class="w-11/12 h-[50rem] overflow-y-auto p-4 mt-8">
                    
                    <article>
                        @foreach ($ratings as $rating)
                            @if ($rating->package_id == $package->package_id)

                            <div class="flex items-center mb-4 space-x-4">
                                <img class="w-10 h-10 rounded-full" src="{{ asset('images/usericon.png') }}" alt="">
                                <div class="space-y-1 font-medium">
                                    <p>{{ $rating->user->name }}<time datetime="{{ $rating->user->created_at->format('Y-m-d H:i') }}" class="block text-sm text-gray-500">Joined on {{ $rating->user->created_at->format('F j, Y') }}</time></p>
                                </div>
                            </div>
                            <div class="flex items-center mb-1">
                                @for ($i = 1; $i <= 5; $i++)
                                    <svg class="w-4 h-4 text-{{ $i <= $rating->rating ? 'yellow' : 'gray' }}-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                    </svg>
                                @endfor
                                <svg class="w-4 h-4 text-gray-300 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path d=""/>
                                </svg>
                                {{-- <h3 class="ml-2 text-sm font-semibold text-gray-900">Rating</h3> --}}
                            </div>
                            <footer class="mb-5 text-sm text-gray-500">
                                <p>Reviewed on <time datetime="{{ $rating->created_at->format('Y-m-d H:i') }}">{{ $rating->created_at->format('F j, Y') }}</time></p>
                            </footer>                            
                            <p class="mb-10 text-gray-500 ">{!! nl2br(e($rating->comment)) !!}</p>
                            <div class="border mb-5 border-gray-300 w-11/12 mt-4"></div>
                            {{-- <a href="#" class="block mb-5 text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">Read more</a> --}}
                            {{-- <aside>
                                <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">19 people found this helpful</p>
                                <div class="flex items-center mt-3 space-x-3 divide-x divide-gray-200 dark:divide-gray-600">
                                    <a href="#" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-xs px-2 py-1.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Helpful</a>
                                    <a href="#" class="pl-4 text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">Report abuse</a>
                                </div>
                            </aside> --}}
                        
                            @endif
                        @endforeach

                    </article>

                </div>
             </div>
         </div>
         </div>

         <form method="POST" action="{{ route('reservations.store') }}" enctype="multipart/form-data">
             @csrf
             <div id="dateSelection" class="lg:max-w-md mx-auto bg-white rounded-xl shadow-lg sticky top-20 h-[30rem]">

                 <div class="1">
                     <div class="p-4">
                         <label>Choose a date:</label>
                         <input id="datepicker"
                             class="w-full bg-white border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-indigo-600"
                             type="text" placeholder="Select Date" name="reservation_date" id="reservation_date"
                             value="{{ date('Y-m-d') }}">
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


         <div id="bookingSummary" class="lg:w-max p-8 mx-auto bg-white rounded-xl shadow-lg sticky top-20 h-[24rem] hidden custom-width">
                <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
                <input type="hidden" name="package_id" id="package_id" value="{{ $package->package_id }}">
                <input type="hidden" name="venue_id" id="venue_id" value="{{ $package->venue_id }}">

             <div class="2">
                 <div class="p-4">
                     <label class="text-gold-highlight font-light tracking-wide text-xl">Your Booking Summary</label>
                     <div class="flex justify-between items-center mt-2">
                         <div class="mr-10">
                             <p class="font-semibold">Event Date</p>
                             <p class="text-sm" name="selectedDate" id="selectedDate">Date will appear here</p>
                         </div>
                         <div class="ml-3">
                            <p class="font-semibold">Venue</p>
                            <p class="text-sm">{{ $package->venue->name }}</p>
                        </div>
                         {{-- <div>
                            <p class="font-semibold">Venue</p>
                            <select
                                name="venue_id"
                                id="venue_id"
                                class="font-light text-sm focus:outline-none focus:ring-2 focus:ring-indigo-600 border-0 focus:border-0"
                                required
                                onchange="fetchAmenities()"
                            >
                                @foreach ($venues as $venue)
                                    <option value="{{ $venue->venue_id }}">{{ $venue->name }}</option>
                                @endforeach
                            </select>
                        </div>                                             --}}
                     </div>
                     <div id="amenities-container">
                        <p class="font-semibold mt-3">Inclusions</p>
                        {{-- <ul class="text-sm">
                            <li id="amenities-placeholder">Select a venue to see amenities.</li>
                        </ul> --}}
                        <ul class="text-sm">
                            <li>{!! nl2br(e($package->venue->amenities)) !!}</li>
                        </ul>
                    </div>

                 </div>
                 <center>
                     <div class="border-b-2 border-gray-200 w-11/12"></div>
                 </center>
                 <div class="p-4">
                    <div class="flex justify-between items-center">
                        <p class="font-semibold text-xs">Package:</p>
                        <p class="font-semibold text-xs" id="package-price">{{ $package->price }}</p>
                    </div>
                    <div class="flex justify-between items-center">
                        <p class="font-semibold text-xs">Venue:</p>
                        <p class="font-semibold text-xs" id="venue-price">{{ $package->venue->price }}</p>
                    </div>
                    <div class="flex justify-between items-center">
                        <p class="font-semibold text-lg">Total:</p>
                        <p class="font-semibold text-lg" id="total-price">₱</p>
                    </div>
                    <input type="hidden" name="price" id="price" value="">                    
                 </div>
                 <div class="flex justify-between items-center p-2 w-full">
                     <button id="backButton" class="bg-pink-violet rounded-full p-2 w-24 text-white">
                         << Back</button>
                             <button type="submit" class="bg-pink-violet rounded-full p-2 w-32 text-white">Proceed >></button>
                 </div>
             </div>
         </form>


     </section>


     @yield('chatbox')
     @yield('footer')

     @vite('resources/js/app.js')
     <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.3/dist/flatpickr.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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

            document.querySelectorAll('.tab-link').forEach(tab => {
                tab.classList.remove('active-tab-color');
            });

            document.getElementById(`tabContent${tabNumber}`).classList.remove('hidden');
            document.querySelector(`button[onclick="showTab(${tabNumber})"]`).classList.add('active-tab-color');
        }

        showTab(1);
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

    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <script>
        $(document).ready(function () {
        let currentRating = 0;
        let currentPackageId = null;

        // Handle star rating clicks
        $('.star').on('click', function () {
            const newRating = parseInt($(this).data('rating'));
            const packageId = parseInt($(this).data('package-id'));

            // Update the current rating and package ID
            currentRating = newRating;
            currentPackageId = packageId;

            // Update the visual representation of the rating
            $('.star').each(function () {
                const rating = parseInt($(this).data('rating'));
                if (rating <= newRating) {
                    $(this).addClass('text-yellow-300');
                } else {
                    $(this).removeClass('text-yellow-300');
                }
            });

            // Display the new rating text
            $('.starcount').text(currentRating + ' out of 5');

            $('#rating').val(currentRating);

            // Here, you can add code to submit the current rating and package ID to your server via AJAX when the user clicks a submit button or takes any action to submit their rating.
            // For example, you can send the `currentRating` and `currentPackageId` to your Laravel route for storing ratings.
        });
    });
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