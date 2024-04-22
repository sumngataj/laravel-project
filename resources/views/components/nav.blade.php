@section('nav')
<nav class="py-5 bg-white sticky top-0 border-b border-gray-100 z-[1000]">
    <div class="container md:px-12 md:flex md:items-center md:justify-between">
        <div class="flex items-center justify-between">
            <a href="#" class="flex items-center">
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
                <a href="#home" class="font-medium duration-500 text-gray-900 hover:text-indigo-600"
                    aria-current="page">Home</a>
            </li>
            <li class="my-6 md:my-0">
                <a href="#home" class="font-medium duration-500 text-gray-900 hover:text-indigo-600"
                    aria-current="page">About</a>
            </li>
            <li class="my-6 md:my-0">
                <a href="#home" class="font-medium duration-500 text-gray-900 hover:text-indigo-600"
                    aria-current="page">Events</a>
            </li>
            <li class="my-6 md:my-0">
                <a href="#home" class="font-medium duration-500 text-gray-900 hover:text-indigo-600"
                    aria-current="page">Packages</a>
            </li>
            <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" type="button"
                class="w-full text-white bg-red-500 font-medium rounded-lg text-md px-3.5 py-3 text-center hover:bg-red-600 hover:drop-shadow-md transition duration-300 ease-in-out">Login</button>
        </ul>
    </div>
</nav>

@endsection