@section('floatingNavbar')

<nav id="scroll-container" class="bg-white p-2 h-16 sticky top-0 hidden shadow-md">

    <div class="flex justify-between items-center w-full">
        <div class="flex lg:hidden justify-center items-center">
            <button id="mobile-menu-button" class="p-2 text-gray-800 dark:text-white focus:outline-none">
                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="black"
                    viewBox="0 0 24 24">
                    <path d="M4 6h16M4 12h16M4 18h16" stroke="black" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
            <p class="uppercase hidden md:flex">Menu</p>
        </div>
        <div id="" class="lg:w-1/2 md:flex md:ml-0 lg:flex sm:flex md:w-full sm:w-full justify-center items-center">
            <a id="" href="" class="text-black text-2xl font-bold uppercase"> <img
                    src="{{ asset('images/kaluhasLogoIcon.png') }}" class="w-12" alt="My Image">
            </a>
        </div>
        <div class="hidden lg:hidden md:flex sm:flex p-2">
            <button><svg xmlns="http://www.w3.org/2000/svg" class="w-4" viewBox="0 0 512 512">
                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path
                        d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                </svg></button>
        </div>

        <div class="lg:flex lg:w-full lg:ml-10 md:hidden hidden uppercase text-xs">
            <div class="flex lg:w-8/12 md:w-6/12 space-x-10">
                <a href="#" class="hover:border-b border-gray-300">Home</a>
                <a>About</a>
                <a>Packages</a>
                <a>Gallery</a>
            </div>
            <div id="" class="">
                <a class="text-sm font-semibold tracking-wide ">Login / Register</a>
            </div>

        </div>






        <!---->

    </div>


    <!-- <div id="mobile-menu" class="hidden">

        <a href="#" class="block py-2 px-4 text-gray-600 hover:text-black">Home</a>
        <a href="#" class="block py-2 px-4 text-gray-600 hover:text-black">Pricing</a>
        <a href="#" class="block py-2 px-4 text-gray-600 hover:text-black">Packages</a>

    </div> -->

    </div>

</nav>

@endsection