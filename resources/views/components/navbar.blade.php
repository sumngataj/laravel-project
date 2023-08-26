@section('content')

<div
    class="h-12 flex flex-wrap justify-center items-center mx-auto bg-gradient-to-r from-cyan-500 to-purple-500 w-full p-2">
    <p class="flex items-center text-white font-lightbold">
        Contact us?
    </p>
    <div class="flex ml-2 items-center">
        <a href="#" class="mr-6 text-sm font-semibold text-gray-500 dark:text-white hover:underline">(555)
            412-1234
        </a>
    </div>
</div>

<nav id="scroll-container" class="bg-white p-4 transition-shadow sticky top-0">

    <div class="container md:text-left mx-auto flex justify-between items-start">

        <div id="logo-container" class="flex lg:w-1/2 justify-center items-center">
            <a id="logo" href="" class="text-black text-xl font-bold uppercase mt-2">Kaluhas</a>
            <button id="icon-open-modal"
                class="flex lg:w-full ml-2 hidden justify-center items-center p-2 border border-gray-100 text-gray-500 rounded-full focus:outline-none focus:border-indigo-100 shadow-md">
                <svg class="w-4 h-4 mt-2 text-gray-800 dark:text-white" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox=" 0 0 20 20">
                    <path stroke="gray" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
            </button>
        </div>

        <div id="searchBtn" class="flex lg:w-full md:w-full sm:w-full justify-center items-center">
            <button id="open-modal"
                class="flex md:w-full lg:w-full text-left p-2 border border-gray-100 text-gray-500 rounded-lg focus:outline-none focus:border-indigo-100 shadow-md">
                <svg class="w-4 h-4 mt-1 mr-2 text-gray-800 dark:text-white" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox=" 0 0 20 20">
                    <path stroke="gray" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
                Search for Packages... </button>

        </div>

        <div id="nav-links" class="flex ml-5 mt-2 justify-content-center items-center lg:w-1/2 space-x-5">
            <a href="#" class=""><svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 20 20">
                    <path
                        d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                </svg></a>

            <a href="#" class="text-gray-600 hover:text-black">Pricing</a>
            <a href="#" class="text-gray-600 hover:text-black">Packages</a>
        </div>

        <a href="/" class="">
            <button id="loginBtn"
                class="flex fill-purple-500 bg-gray-100 text-black border border-gray-300 px-4 py-2 rounded-lg hover:bg-gray-200 space-x-2">
                <svg class="mt-1 w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 18">
                    <path
                        d="M7 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9Zm2 1H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                </svg>
                Login</button>
        </a>
        <button id="mobile-menu-button" class="flex p-2 ml-5 text-gray-800 dark:text-white focus:outline-none hidden">
            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path d="M4 6h16M4 12h16M4 18h16" stroke="black" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>

    </div>


    <div id="mobile-menu" class="hidden">

        <a href="#" class="block py-2 px-4 text-gray-600 hover:text-black">Home</a>
        <a href="#" class="block py-2 px-4 text-gray-600 hover:text-black">Pricing</a>
        <a href="#" class="block py-2 px-4 text-gray-600 hover:text-black">Packages</a>

    </div>

    </div>

</nav>




<div id="modal" class="fixed inset-0 flex items-start justify-center lg:w-full md:w-full sm:w-full h-screen hidden">
    <div id="modal-overlay" class="fixed w-full h-screen bg-black opacity-50 cursor-pointer">

    </div>
    <div class="fixed flex bg-white p-4 rounded shadow-lg lg:w-1/2">
        <svg class="w-4 h-4 mt-1 mr-2 mt-3 text-gray-800 dark:text-white" aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox=" 0 0 20 20">
            <path stroke="gray" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
        </svg>
        <input type="search" placeholder="Search for Packages..."
            class="flex lg:w-full text-left p-2 md:w-full sm:w-full border border-gray-50 text-gray-500 rounded-lg focus:outline-none focus:border-indigo-100">
    </div>
</div>



@endsection