@section('topbar')

<header class="z-10 py-4 bg-pink-violet shadow-md">
    <div class="container flex items-center justify-between h-full px-6 mx-auto text-black">
        <!-- Mobile hamburger -->
        <button class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple"
            @click="toggleSideMenu" aria-label="Menu">
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
        <!-- Search input -->
        <div class="flex justify-center flex-1 lg:mr-32">
            <div class="relative w-full max-w-xl mr-6 focus-within:text-pink-500">
                <div class="absolute inset-y-0 flex items-center pl-2">
                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input x-model="search"
                    class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md focus:placeholder-gray-500 focus:bg-white focus:border-pink-300 focus:outline-none focus:shadow-outline-pink form-input"
                    type="text" placeholder="Search..." aria-label="Search" />
            </div>
        </div>
        <ul class="flex items-center flex-shrink-0 space-x-6">
            <!-- Notifications menu -->
            <li class="relative">
                <button type="button" id="notif-button"
                    class="relative align-middle rounded-md focus:outline-none focus:shadow-outline-purple">
                    <svg class="w-8 h-8" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
                        </path>
                    </svg>
                    <!-- Notification badge -->
                    <span id="notif-count" aria-hidden="true"
                        class="absolute -top-2 -right-3 inline-block w-8 h-8 text-xs transform translate-x-1 -translate-y-1 bg-red-600 border-2 border-white rounded-full py-1.5 font-bold">{{ $notifications->where('status', 0)->count() }}</span>
                </button>

                <ul id="notifications-list"
                    class="absolute -right-8 w-80 h-[40rem] overflow-y-auto space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md hidden">
                    @foreach($notifications as $notification)
                    <li class="text-black font-light p-2 text-xs border-b border-gray-300 hover:opacity-50">
                        <span class="font-bold">{{$notification->users->name}}</span> <span>has a
                            reservation.</span><br><span
                            class="timestamp">{{ \Carbon\Carbon::parse($notification->uploaded)->diffForHumans() }}</span>
                        <input type="hidden" class="uploaded-time" value="{{ $notification->uploaded }}">
                    </li>
                    @endforeach
                </ul>

            </li>
            <!-- Profile menu -->
            <li class="relative">
                <button
                    class="align-middle flex items-center rounded-full focus:shadow-outline-purple focus:outline-none"
                    @click="toggleProfileMenu" @keydown.escape="closeProfileMenu" aria-label="Account"
                    aria-haspopup="true">
                    <div class="profile-pic">
                        <div class="initial">{{ substr(Auth::user()->name, 0, 1) }}</div>
                    </div>
                </button>
                <template x-if="isProfileMenuOpen">
                    <ul x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0" @click.away="closeProfileMenu"
                        @keydown.escape="closeProfileMenu"
                        class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md"
                        aria-label="submenu">
                        {{-- <li class="flex">
                            <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800"
                                href="#">
                                <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                    </path>
                                </svg>
                                <span>Profile</span>
                            </a>
                        </li>
                        <li class="flex">
                            <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800"
                                href="#">
                                <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path
                                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                    </path>
                                    <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span>Settings</span>
                            </a>
                        </li> --}}
                        <li class="flex">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="w-full">
                                @csrf
                                <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800">
                                    <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path
                                            d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1">
                                        </path>
                                    </svg>
                                    <span>Log out</span>
                                </a>
                            </form>
                        </li>
                    </ul>
                </template>
            </li>
        </ul>
    </div>
</header>

@endsection