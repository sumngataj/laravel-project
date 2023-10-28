@section('newNav')
<nav class="bg-white w-full h-auto">
    <div class="relative p-4">
        <div class="flex justify-center">
            <div class="flex justify-center items-center w-full ml-72">
                <img src="{{ asset('images/kaluhasLogoIcon.png') }}" class="w-16" alt="My Image">
            </div>
            <div class="flex justify-end items-center space-x-8">
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </button>
                <p class="text-gray-200 font-light text-xl">|</p>
                @guest
                <button id="toggle-button">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>
                </button>
                @else <div class="relative ml-8">
                    <div class="ml-3 relative">
                        <div>
                            <button id="toggle-buttons"
                                class="max-w-xs  rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-white"
                                aria-haspopup="true">
                                <!-- <span class="text-lg font-bold tracking-wide mr-1">Hi,</span> -->
                                <div class="profile-pic">
                                    <div class="initial">{{ substr(Auth::user()->name, 0, 1) }}</div>
                                </div>
                                <!-- <span class="text-lg font-bold ml-1">!</span> -->
                                <!-- <span
                                        class="mr-2 uppercase font-semibold">{{ substr(Auth::user()->name, 0, 20) }}</span> -->
                            </button>
                        </div>
                        <div id="toggle-divs"
                            class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 hidden z-10"
                            role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                            <a href="{{route('profile.displayByProfileId', Auth::user()->id)}}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Your
                                Profile</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover-bg-gray-100"
                                role="menuitem">Settings</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="w-full">
                                @csrf
                                <a href="#"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign
                                    out</a>
                            </form>
                        </div>
                    </div>
                </div>
                @endguest
                <button class="w-32 bg-pink-violet p-2 uppercase text-white font-lightbold tracking-widest">Book
                    Now</button>
            </div>
        </div>
    </div>
    <div class="relative border-y border-gray-300 p-6">
        <div class="flex justify-center items-center">
            <ul class="flex justify-center items-center uppercase space-x-20 tracking-widest">
                <li><a>Home</a></li>
                <li><a>Packages</a></li>
                <li><a>Venues</a></li>
                <li><a>About</a></li>

            </ul>
        </div>
    </div>
</nav>


@endsection