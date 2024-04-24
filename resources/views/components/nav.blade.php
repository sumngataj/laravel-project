@section('nav')
<nav class="py-5 bg-white sticky top-0 border-b border-gray-100 z-[1000]">
    <div class="container md:px-12 md:flex md:items-center md:justify-between">
        <div class="flex items-center justify-between">
            <a href="/" class="flex items-center">
                <!-- <img src="dist/img/logo.svg" class="h-10 mr-3" alt="logo"> -->
                <img src="{{ asset('images/kaluhasLogoIcon.png') }}" class="h-10 mr-3" alt="logo">
                <span class="text-2xl text-gray-900 font-sans font-bold">Kaluhas</span>
            </a>
            <span class="block mx-2 text-3xl bg-gray-100 p-2 rounded-lg md:hidden">
                <svg name="menu" onclick="Menu(this)" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.7" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                </svg>
            </span>
        </div>
        <ul
            class="p-5 z-10 absolute bg-white/80 backdrop-blur w-full left-0 py-4 opacity-0 top-[-400px] transition-all ease-in duration-500 md:p-0 md:flex md:items-center md:space-x-8 md:static md:w-auto md:opacity-100">
            <li class="md:my-0">
                <a href="/" class="font-medium duration-500 text-gray-900 hover:text-indigo-600"
                    aria-current="page">Home</a>
            </li>
            <li class="my-6 md:my-0">
                <a href="/#about" class="font-medium duration-500 text-gray-900 hover:text-indigo-600"
                    aria-current="page">About</a>
            </li>
            <li class="my-6 md:my-0">
                <a href="/#eventlist" class="font-medium duration-500 text-gray-900 hover:text-indigo-600"
                    aria-current="page">Events</a>
            </li>
            <li class="my-6 md:my-0">
                <a href="{{ route('packages-view') }}" class="font-medium duration-500 text-gray-900 hover:text-indigo-600"
                    aria-current="page">Packages</a>
            </li>
            @guest
            <a data-modal-target="authentication-modal" href="{{ route('login') }}" data-modal-toggle="authentication-modal" type="button"
                class="w-full text-white bg-red-500 font-medium rounded-lg text-md px-3.5 py-3 text-center hover:bg-red-600 hover:drop-shadow-md transition duration-300 ease-in-out">Login</a>
            @else
            <div class="relative ml-8">
                <div class="ml-3 relative">
                    <div>   
                        <button id="toggle-buttons"
                            class="max-w-xs  rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-white"
                            aria-haspopup="true">
                            <!-- <span class="text-lg font-bold tracking-wide mr-1">Hi,</span> -->
                            <div class="profile-pic" style="background-color: pink;">
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
                        {{-- <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover-bg-gray-100"
                            role="menuitem">Settings</a> --}}
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
        </ul>
    </div>
</nav>

@endsection