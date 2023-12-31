@section('newNav')
<nav id="newNav" class="bg-white w-full h-auto fixed top-0 z-[1000]">
    <div class="relative p-4">
        <div class="flex justify-center">
            <div class="flex justify-center items-center w-full ml-72">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('images/kaluhasLogoIcon.png') }}" class="w-16" alt="My Image">
                </a>
            </div>
            <div class="flex justify-end items-center space-x-8">
                {{-- <button>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </button>
                <p class="text-gray-200 font-light text-xl">|</p> --}}
                @guest
                <button id="toggle-button">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" st roke-width="1.5"
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
                <a onclick="window.open(this.href,'_blank');return false;" href="{{ route('custom.booking') }}"
                    target="_blank">
                    <button id="myButton3"
                        class="w-32 bg-pink-violet p-2 uppercase text-white font-lightbold tracking-widest">Book
                        Now
                    </button>
                </a>
            </div>
        </div>
    </div>
    <div id="navbar" class="relative border-t border-gray-300">
        <div class="flex justify-around items-center">
            {{-- <div class="flex justify-start items-center">
            <button class="w-40 bg-pink-violet p-2 uppercase text-white font-lightbold tracking-widest">GETTING HERE</button>
        </div> --}}

            <div x-data="{ 'showModal': false }" @keydown.escape="showModal = false">

                <div class="flex justify-start items-center">
                    <button class="w-40 bg-pink-violet p-2 uppercase text-white font-lightbold tracking-widest"
                        @click="showModal = true">GETTING HERE</button>
                </div>

                <div class="fixed inset-0 z-30 flex items-center justify-center overflow-auto bg-black bg-opacity-50"
                    x-show="showModal">
                    <div class="max-w-3xl px-6 py-4 mx-auto text-left bg-white rounded shadow-lg"
                        @click.away="showModal = false" x-transition:enter="motion-safe:ease-out duration-300"
                        x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                        <div class="flex items-center justify-between">
                            <h5 class="mr-3 text-black max-w-none"></h5>

                            <button type="button" class="z-50 cursor-pointer" @click="showModal = false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <div class="mapouter">
                            <div class="gmap_canvas"><iframe
                                    src="https://maps.google.com/maps?q=Kaluhas%20Wedding%20And%20Event%20Specialist%20&amp;t=k&amp;z=15&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                                    frameborder="0" scrolling="no" style="width: 480px; height: 420px;"></iframe>
                                <style>
                                .mapouter {
                                    position: relative;
                                    height: 420px;
                                    width: 480px;
                                    background: #fff;
                                }

                                .maprouter a {
                                    color: #fff !important;
                                    position: absolute !important;
                                    top: 0 !important;
                                    z-index: 0 !important;
                                }
                                </style><a href="https://blooketjoin.org/blooket-login/">blooket login</a>
                                <style>
                                .gmap_canvas {
                                    overflow: hidden;
                                    height: 420px;
                                    width: 480px
                                }

                                .gmap_canvas iframe {
                                    position: relative;
                                    z-index: 2
                                }
                                </style>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <ul class="flex justify-center items-center uppercase space-x-10 tracking-widest text-sm mr-64">
                <li class="p-6">
                    <a href="{{ url('/') }}"
                        class="border-b-4 border-transparent hover:border-pink-violet hover:text-pink-violet p-5">Home</a>
                </li>
                <li class="p-6">
                    <a href="/#section2"
                        class="border-b-4 border-transparent hover:border-pink-violet hover:text-pink-violet p-5">Packages</a>
                </li>
                <li class="p-6">
                    <a href="/#section3"
                        class="border-b-4 border-transparent hover:border-pink-violet hover:text-pink-violet p-5">Venues</a>
                </li>
                <li class="p-6 dropdown">
                    <a
                        class="border-b-4 border-transparent hover:border-pink-violet hover:text-pink-violet p-5">About</a>
                    <div class="dropdown-content shadow-lg p-4 tracking-widest text-xs leading-5">
                        <h2 class="text-xl font-semibold tracking-widest"><span class="text-3xl">A</span>bout <span
                                class="text-3xl">K</span>ALUHAS <span class="text-3xl">W</span>EDDING <span
                                class="text-3xl">E</span>VENT</h2>
                        <p>Welcome to KALUHAS WEDDING EVENT, your premier choice for creating unforgettable and magical
                            weddings. We are dedicated to making your dream wedding a reality and turning your special
                            day into an extraordinary celebration of love.</p>
                        <p>With years of experience in event planning and a passion for creating stunning weddings, we
                            take pride in our attention to detail, creativity, and commitment to excellence. Your vision
                            is our inspiration, and we work tirelessly to bring it to life.</p>
                        <p>Our team of expert wedding planners, decorators, and coordinators will work closely with you
                            to design a wedding that reflects your unique style and personality. From breathtaking
                            venues to exquisite floral arrangements, from delectable catering to seamless logistics, we
                            handle every aspect of your wedding with care and precision.</p>
                        <p>At KALUHAS WEDDING EVENT, we understand that your wedding day is one of the most important
                            moments in your life, and we are honored to be part of it. Let us turn your dreams into
                            cherished memories.</p>
                    </div>
                </li>
            </ul>
            {{-- <div class="flex justify-end items-center">
            <label class="relative inline-flex items-center cursor-pointer">
                <input type="checkbox" value="" class="sr-only peer" checked>
                <div class="w-11 h-6 bg-gray-200 rounded-full peer dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-pink-violet"></div>
                <span class="ml-3 text-sm font-medium text-black">Dark Mode</span>
            </label>
        </div> --}}
        </div>
    </div>
</nav>


@endsection