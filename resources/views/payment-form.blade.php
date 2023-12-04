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
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
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

    @include('components.bookingNav')
    @include('components.footer')
    @include('components.loginSideModal')
    @include('components.searchToggle')
    @include('components.sideMenu')
    @include('components.chatBox')
    @yield('sideMenu')
    @yield('bookingNav')
    @yield('content')
    @yield('loginSideModal')
    @yield('toggleSearch')

    <div class="bg-black p-16">
        <div class="max-w-7xl mx-auto">
            <div class="flex justify-center p-8 items-center space-x-10 space-y-2 overflow-hidden">
                <p class="text-white font-semibold text-5xl">Payment Form</p>
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



    <section class="flex justify-center p-12 h-auto">


    <form method="POST" action="{{ route('reservation.sendpayment') }}" enctype="multipart/form-data">
        @csrf
        <div id="guestDetails" class="relative mt-10">
            <div class="relative w-full border border-gray-400 p-4">
                <h1 class="text-gold-highlight mt-4 font-light text-2xl tracking-wide">Personal Details</h1>
                <div class="flex justify-between items-center space-x-4">
                    <div class="relative w-full">
                        <label class="text-sm font-light">Fullname *</label>
                        <input type="text" name="fullname" class="w-full font-light" required />
                    </div>
                    
                    
                </div>
                <div class="relative w-full">
                    <label class="text-sm font-light">Address *</label>
                    <input type="text" name="address" class="w-full font-light" required />
                </div>
                <div class="flex justify-between items-center space-x-4">
                    <div class="relative w-full">
                        <label class="text-sm font-light">Mobile Number *</label>
                        <input type="number" name="mobile_number" class="w-full font-light" required />
                    </div>
                    <div class="relative w-full">
                        <label class="text-sm font-light">Email *</label>
                        <input type="email" name="email" class="w-full font-light" required />
                    </div>
                </div>
                <h1 class="text-gold-highlight mt-4 font-light text-2xl tracking-wide">Mode of Payment</h1>
                <h1 class="text-md"> 1. Bank to Bank </h1>
                <h1 class="text-md"> 2. GCash </h1>
                <h1 class="text-gold-highlight mt-4 font-light text-2xl tracking-wide">Bank to Bank</h1>
                <div class="flex justify-center items-center">
                    <div class="w-96 shadow-md my-5">
                        <img src="https://www2.bpi.com.ph/content/api/contentstream-id/33f50d91-c898-4666-8a69-e09d571c5dcc/ac15de4d-54fe-4fb2-90b4-0f731d8cc700/Personal/Cards/Credit%20Cards/Visa%20Signature%20Card/card_bpi_visa_sig_2018_fa_c2p_01.png" alt="BPI Card">
                    </div>
                </div>
                <div class="flex justify-between items-center space-x-4">
                    <div class="relative w-full">
                        <label class="text-sm font-light">Bank Account Number *</label>
                        <input type="number" name="account_number" class="w-full font-light" />
                    </div>
                    <div class="relative w-full">
                        <label class="text-sm font-light">Bank Details *</label>
                        <input type="text" name="bank_details" class="w-full font-light" />
                    </div>
                </div>
                
                <div class="flex justify-between items-center space-x-4 mt-4">
                    <div x-data="{ fileName: '' }" class="relative w-full">
                        <label class="text-sm font-light">Bank Receipt *</label>
                        <label for="bankReceipt" class="flex items-center py-2 px-3 border border-black cursor-pointer">
                            <span class="text-gray-600 flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                </svg>
                                <span x-text="fileName ? fileName : 'Upload Bank Receipt File/Image'"></span>
                            </span>
                            <input x-on:change="fileName = $refs.bankReceipt.files[0] ? $refs.bankReceipt.files[0].name : ''" type="file" id="bankReceipt" name="bankReceipt" x-ref="bankReceipt" class="hidden" />
                        </label>
                    </div>
                </div>
                <h1 class="text-gold-highlight font-light text-2xl tracking-wide mt-4">GCash</h1>

                <div class="flex justify-center items-center">
                    <div class="w-80 shadow-md my-5">
                        <img src="{{ ('/images/qr.png') }}" alt="Payment Image">
                    </div>
                </div>
                
                <div class="flex justify-between items-center space-x-4">
                    <div class="relative w-full">
                        <label class="text-sm font-light">GCash Phone Number *</label>
                        <input type="number" name="gcash" class="w-full font-light" />
                    </div>
                    <div x-data="{ fileName: '' }" class="relative w-full">
                        <label class="text-sm font-light">GCash Receipt *</label>
                        <label for="gcashReceipt" class="flex items-center py-2 px-3 border border-black cursor-pointer">
                            <span class="text-gray-600 flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                </svg>
                                <span x-text="fileName ? fileName : 'Upload GCash Receipt File/Image'"></span>
                            </span>
                            <input x-on:change="fileName = $refs.gcashReceipt.files[0] ? $refs.gcashReceipt.files[0].name : ''" type="file" id="gcashReceipt" name="gcashReceipt" x-ref="gcashReceipt" class="hidden" />
                        </label>
                    </div>
                </div>
                
            </div>
            <div class="flex w-full mt-4">
                <button type="submit" name="submit" class="bg-pink-violet p-2 w-full text-white uppercase tracking-wide font-lightbold">Continue</button>
            </div>
        </div>
    </form>



    </section>


    @yield('chatbox')
    @yield('footer')

    @vite('resources/js/app.js')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.3/dist/flatpickr.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    

</body>

</html>