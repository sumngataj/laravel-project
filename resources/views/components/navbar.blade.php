    @section('content')

    <div class="lg:flex flex-wrap justify-between items-start h-10 bg-pink-violet w-full p-2">

        <p
            class="lg:flex lg:ml-36 justify-start items-start text-black font-semibold text-xs tracking-wide uppercase mt-1 hidden">
            Welcome to Kaluhas
        </p>
        <div class="flex md:ml-12 lg:w-8/12 justify-center items-center space-x-3">

            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-4" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                </svg></a>
            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-4" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                </svg></a>
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                </svg>
            </a>

        </div>


    </div>

    <nav id="" class="bg-white p-4 h-24 ">

        <div class="flex justify-between items-center w-full">
            <div class="lg:hidden flex justify-center items-center">
                <button id="menuBtn" class="flex items-center p-2 text-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4" fill="black" viewBox="0 0 448 512">
                        <path
                            d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
                    </svg>
                    <p class="uppercase hidden ml-2 md:flex">Menu</p>
                </button>
            </div>
            <div id="" class="lg:ml-32 lg:w-24 md:flex md:ml-0 sm:flex md:w-full sm:w-full justify-center items-center">
                <a id="" href="" class="text-black text-left text-2xl font-bold uppercase"> <img
                        src="{{ asset('images/kaluhasLogoIcon.png') }}" class="w-16" alt="My Image">
                </a>
            </div>
            <div class="flex lg:hidden p-2">
                <button id="toggleButton">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4" viewBox="0 0 512 512">
                        <path
                            d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                    </svg>
                </button>
                <button id="toggleClose" class="hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 lg:w-8" viewBox="0 0 384 512">
                        <path
                            d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                    </svg>
                </button>
            </div>

            <div class="lg:flex justify-start items-center lg:w-full lg:ml-10 md:hidden hidden">
                <input type="search"
                    class="h-10 lg:w-8/12 md:w-6/12 border border-gray-300 text-gray-500 focus:outline-none focus:border-gray-300 focus:ring-1 focus:ring-gray-300"
                    placeholder="What are you looking for?" />

                <div class="hidden lg:flex lg:ml-16">
                    <button id="toggle-button" class="uppercase text-sm font-semibold tracking-wide">
                        Login / Register
                    </button>
                </div>
            </div>
        </div>

    </nav>
    <nav
        class="flex flex-wrap justify-between items-center bg-white border-t lg:border-y border-gray-300 p-4 lg:h-16 uppercase">
        <div class="hidden lg:flex w-full lg:w-11/12 justify-center space-x-10 text-xs">
            <a href="#" class="hover:opacity-70">Home</a>
            <a href="#" class="hover:opacity-70">About</a>
            <a href="#" class="hover:opacity-70">Packages</a>
            <a href="#" class="hover:opacity-70">Gallery</a>
        </div>

    </nav>

    @endsection