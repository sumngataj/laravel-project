@section('floatingNavbar')

<nav id="scroll-container" class="bg-white p-2 h-16 sticky top-0 hidden shadow-md">

    <div class="flex justify-between items-center w-full">
        <div class="flex lg:hidden justify-center items-center">
            <button id="burger-scroll" class="p-2 text-gray-800 dark:text-white focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4" viewBox="0 0 448 512">
                    <path
                        d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
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
            <div class="">
                @guest
                    <button id="toggle-scroll-btn" class="text-sm font-semibold tracking-wide uppercase">Login / Register</button>
                @else
                <div class="relative ml-8">
                    <div class="ml-3 relative">
                      <div>
                        <button id="toggle-scroll-buttons" class="max-w-xs  rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-white" aria-haspopup="true">
                          <span class="mr-2">{{ Auth::user()->name }}</span>
                          <img class="h-8 w-8 rounded-full" src="{{ asset('images/usericon.png') }}" alt="">
                        </button>
                      </div>
                      <div id="toggle-scroll-divs" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 hidden" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Your Profile</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover-bg-gray-100" role="menuitem">Settings</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="w-full">
                            @csrf
                            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign out</a>
                        </form>
                      </div>
                    </div>
                  </div>
                @endguest
                
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
<button id="buttonUp" class="fixed bottom-16 right-4 bg-pink-violet rounded-full p-2 hidden"><svg
        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
    </svg>
</button>
@endsection