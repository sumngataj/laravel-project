@section('content')

<div class="flex flex-wrap justify-between items-start h-10 bg-pink-violet w-full p-2">

    <p
        class="lg:flex lg:ml-36 justify-start items-start text-black font-semibold text-xs tracking-wide uppercase mt-1 hidden">
        Welcome to Kaluhas
    </p>
    <div class="lg:flex lg:w-8/12 justify-center items-center space-x-3">

        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-4" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
            </svg></a>
        <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4" fill="currentColor" viewBox="0 0 24 24">
                <path
                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
            </svg>
        </a>

    </div>


</div>

<nav id="" class="bg-white p-4 h-24 sticky top-0 z-10">

    <div class="flex justify-between items-center w-full">
        <div class="lg:hidden md:flex justify-center items-center">
            <button id="mobile-menu-button" class="flex p-2 text-gray-800 dark:text-white focus:outline-none">
                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24">
                    <path d="M4 6h16M4 12h16M4 18h16" stroke="black" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
            <p class="uppercase hidden md:flex">Menu</p>
        </div>
        <div id="" class="lg:ml-32 lg:w-24 md:flex md:ml-0 sm:flex md:w-full sm:w-full justify-center items-center">
            <a id="" href="" class="text-black text-left text-2xl font-bold uppercase"> <img
                    src="{{ asset('images/kaluhasLogoIcon.png') }}" class="w-16" alt="My Image">
            </a>
        </div>

        <div class="lg:flex justify-start items-center lg:w-full lg:ml-10 md:hidden hidden">
            <input type="search"
                class="h-10 lg:w-8/12 md:w-6/12 border border-gray-300 text-gray-500 focus:outline-none focus:border-gray-300 focus:ring-1 focus:ring-gray-300"
                placeholder="What are you looking for?" />

            <div id="" class="lg:ml-16">
                <a class="uppercase text-sm font-semibold tracking-wide ">Login / Register</a>
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
<nav class="bg-white border-y border-gray-300 p-4 h-16">

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