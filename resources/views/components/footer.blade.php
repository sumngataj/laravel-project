@section('footer')
<div class="flex flex-wrap justify-between items-start max-w-full p-8 mt-16 shadow-md border-t border-gray-300">
    <div class="flex justify-between items-center ml-32">
        <div>
            <a id="" href="">
                <img src="{{ asset('images/kaluhasLogo.png') }}" class="w-48" alt="My Image" />
            </a>
            <div class="w-44 text-sm mt-2">
                <span class="font-medium">Address:</span> <span class="font-light">Tawala, Panglao, Bohol 6300,
                    Philippines</span> <span class="font-medium">Email:</span>
                <span class="text-indigo-600 font-semibold">kaluhas@gmail.com</span>
            </div>
        </div>
    </div>
    <div class="flex">
        <div>
            <p class="font-medium">Recent Post</p>
            <ul class="space-y-4 mt-4">
                <a href="#"
                    class="flex flex-col items-center bg-white border border-gray-200 w-80 shadow md:flex-row md:max-w-xl h-20">
                    <img class="object-cover w-24 h-20 "
                        src="https://images.unsplash.com/photo-1544078751-58fee2d8a03b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                        alt="">
                    <div class="text-xs p-4">
                        <h5 class="text-xs font-bold tracking-tight text-gray-900">Lorem Ipsum 2023</h5>
                        <p class="font-normal text-gray-700">Here are the biggest enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    </div>
                </a>
                <a href="#"
                    class="flex flex-col items-center bg-white border border-gray-200 w-80 shadow md:flex-row md:max-w-xl h-20">
                    <img class="object-cover w-24 h-20"
                        src="https://images.unsplash.com/photo-1509927083803-4bd519298ac4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                        alt="">
                    <div class="text-xs p-4">
                        <h5 class="text-xs font-bold tracking-tight text-gray-900">Lorem Ipsum 2019</h5>
                        <p class="font-normal text-gray-700">Here are the biggest enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>
                    </div>
                </a>
            </ul>
        </div>
    </div>
    <div class="flex">
        <div>
            <button id="toggleMenubtn" class="font-medium flex items-center">Useful Links <svg
                    class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg></button>
            <ul id="menu" class="mt-2 text-sm space-y-2">
                <li><a>Home</a></li>
                <li><a>About Us</a></li>
                <li><a>Packages</a></li>
                <li><a>Portfolio</a></li>
            </ul>
        </div>
    </div>
    <div class="flex lg:mr-32">
        <div>
            <p class="font-medium flex items-center">Contact Us</p>
            <div class="mt-2 text-sm">
                <ul>
                    <p class="mb-4 flex items-center justify-center md:justify-start">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="mr-3 h-5 w-5">
                            <path
                                d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
                            <path
                                d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
                        </svg>
                        Tawala, Panglao, Bohol 6300, Philippines
                    </p>
                    <p class="mb-4 flex items-center justify-center md:justify-start">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="mr-3 h-4 w-4">
                            <path
                                d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                            <path
                                d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                        </svg>
                        kaluhasbhl@gmail.com
                    </p>
                    <p class="mb-4 flex items-center justify-center md:justify-start mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="mr-3 h-4 w-4">
                            <path fill-rule="evenodd"
                                d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z"
                                clip-rule="evenodd" />
                        </svg>+639279161140
                    </p>
            </div>
        </div>
    </div>
</div>
<footer class="flex justify-between items-center border-y border-gray-300 p-4 text-xs">
    <p class="text-gray-500 lg:ml-36"><span class="font-semibold text-black">KALUHAS</span><span
            class="text-sm font-semibold">
            ©</span><span> 2023</span>
    </p>
    <div class="flex lg:mr-32 space-x-4">
        <img src="{{ asset('images/Gcash-Logo.png') }}" class="w-16" alt="My Image" />
        <img src="{{ asset('images/PayPal-Logo.png') }}" class="w-16" alt="My Image" />
    </div>
</footer>
@endsection