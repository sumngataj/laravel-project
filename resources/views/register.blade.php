 <!DOCTYPE html>
 <html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Kaluhas PH | Wedding Booking</title>
     <link rel="icon" type="image/x-icon" href="{{ asset('images/kaluhasLogoIcon.png') }}">
     <script type="module" src="/path-to-your-vite-assets/js/main.js"></script>
     @vite('resources/css/app.css')
     <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
 </head>


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
                 <p class="text-white font-semibold text-5xl">My account</p>
             </div>
         </div>
     </div>
     <div class="flex flex-wrap justify-between items-center w-full p-6 h-96">
         <div class="flex justify-end items-end w-2/6">
             <div>
                 <form action="{{route('store')}}" method="post" id="register">
                     @csrf
                     <div class="form-step" id="step1">
                         <p class="text-sm w-80">Please provide a valid <span class="font-medium underline">email
                                 address</span>. Upon registering a password
                             will be sent to your email.
                         </p>
                         <input type="email"
                             class="w-80 border mt-4 border-gray-300 hover:ring-pink-violet hover:ring-1 focus:outline-none focus:ring-1 focus:border-pink-violet focus:ring-pink-violet"
                             placeholder="Email address" id="email" name="email" value="{{ old('email') }}" />
                         <div id="emailError" class="text-red-600 hidden text-sm mt-2">Please provide an email
                             address.</div>
                         <div class="flex items-center mt-6">
                             <input type="checkbox" value=""
                                 class="w-4 h-4 text-pink-hover bg-gray-100 border-gray-300 focus:outline-none focus:ring-0">
                             <label for="default-checkbox" class="ml-2 text-sm font-lightbold">Subscribe to
                                 newsletter</label>
                         </div>
                         <p class="w-80 text-xs mt-2">Subscribe to our newsletter and keep up-to-date with the latest
                             price,
                             package
                             and discount
                             updates. Don't miss out!
                         </p>
                         <button type="button" class="w-80 bg-pink-violet mt-4 p-2 hover:bg-pink-hover"
                             onclick="nextStep()" id="nextBtn">Register</button>
                         <p class="text-xs w-80 text-justify-center mt-2">By clicking Register, I agree to the <a
                                 class="text-indigo-500">Terms of
                                 Service</a>
                             and
                             <a class="text-indigo-500">Privacy
                                 Statement</a>
                         </p>
                     </div>
                     <div class="form-step" id="step2">
                         <p class="text-sm w-80">Please provide the necessary inputs of <span
                                 class="font-medium underline">your
                                 credentials</span> below.
                         </p>
                         <div>
                             <input type="text"
                                 class="w-80 border mt-4 border-gray-300 hover:ring-pink-violet hover:ring-1 focus:outline-none focus:ring-1 focus:border-pink-violet focus:ring-pink-violet"
                                 placeholder="Fullname" id="name" name="name" value="{{ old('name') }}" /><br>
                             <input type="password"
                                 class="w-80 border mt-4 border-gray-300 hover:ring-pink-violet hover:ring-1 focus:outline-none focus:ring-1 focus:border-pink-violet focus:ring-pink-violet"
                                 placeholder="Password" id="password" name="password" value="{{ old('password') }}" />
                         </div>
                         <p class="w-80 text-xs mt-2 text-red-600">Note: Please make sure to input all fields. Thank
                             you!
                         </p>
                         <button type="submit" class="w-80 bg-pink-violet mt-4 p-2 hover:bg-pink-hover"
                             onclick="submitForm()" id="registerBtn">Register</button>
                         </p>
                     </div>

                     <button type="button" onclick="prevStep()" id="prevBtn" style="display: none;"
                         class="w-80 bg-gray-300 mt-4 p-2 hover:bg-gray-400">Previous</button>
                 </form>
             </div>
         </div>
         <div class="w-2 h-80 border-r border-gray-300"></div>
         <div class="flex justify-self-start items-start w-2/6">
             <div class="text-justify-center">
                 <h2 class="text-2xl font-semibold -skew-y-3 bg-pink-violet text-center p-2">Welcome Back!</h2>
                 <p class="text-sm mt-4 w-64">To keep connected with us please
                     login with your personal info</p>
                 <button class="bg-gray-100 mt-5 border border-gray-200 p-2 w-64 hover:bg-gray-200">Login</button>
             </div>
         </div>
     </div>

     @yield('chatbox')
     @yield('footer')

     @vite('resources/js/app.js')
     <script>
     let currentStep = 1;
     const formSteps = document.querySelectorAll('.form-step');
     const prevBtn = document.getElementById('prevBtn');
     const nextBtn = document.getElementById('nextBtn');
     const submitBtn = document.getElementById('submitBtn');

     function showStep(step) {
         formSteps.forEach((stepElement, index) => {
             if (index + 1 === step) {
                 stepElement.style.display = 'block';
             } else {
                 stepElement.style.display = 'none';
             }
         });

         prevBtn.style.display = step === 1 ? 'none' : 'block';
         nextBtn.style.display = step === formSteps.length ? 'none' : 'block';
         submitBtn.style.display = step === formSteps.length ? 'block' : 'none';
     }

     function prevStep() {
         if (currentStep > 1) {
             currentStep--;
             showStep(currentStep);
         }
     }

     function nextStep() {
         if (currentStep < formSteps.length) {
             // Check if it's the first step (step1) and the email input is empty

             if (currentStep === 1) {
                 const emailInput = document.querySelector('#step1 input[type="email"]');
                 const emailError = document.querySelector('#emailError');
                 if (emailInput && emailInput.value.trim() === '') {
                     emailError.classList.remove("hidden");
                     return; // Prevent proceeding to the next step
                 } else {
                     emailError.classList.add("hidden");
                 }

             }
             currentStep++;
             showStep(currentStep);
         }

         function submitForm() {

             document.getElementById('register').submit();
         }
     }

     showStep(currentStep);
     </script>

 </body>

 </html>