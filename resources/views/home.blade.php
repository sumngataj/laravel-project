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

     @yield('floatingNavbar')
     @yield('content')

     @yield('loginSideModal')


     <div class="bg-dirty-gray">
         <div class="max-w-7xl mx-auto">

             <div class="">

                 <div class="flex justify-center items-center space-x-10 space-y-2 overflow-hidden">

                     <div class="w-1/2 px-4 sm:px-6 lg:px-8">
                         <h2 class="text-5xl font-semibold text-gray-800 animation-slide-up">Lorem Ipsum</h2>
                         <p class="mt-2 text-gray-600 animation-slide-up">Lorem ipsum dolor sit amet,
                             eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                             quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                         </p>

                         <button class="bg-pink-violet p-4 text-sm font-semibold mt-5 animation-slide-up">
                             Book Now
                         </button>
                     </div>

                     <div class="flex justify-center items-center w-1/2">
                         <img src="{{ asset('images/dressedResize.png') }}" class="animation-slide-in" alt="My Image">
                     </div>

                 </div>
             </div>

         </div>
     </div>

     @yield('packages')

     @yield('portfolio')

     @yield('footer')

     @vite('resources/js/app.js')
 </body>

 </html>