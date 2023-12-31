@section('profilebar')
<nav class="flex justify-around items-center w-full py-5 shadow-lg">
    <div class="flex justify-center w-1/2">
        <a id="profilebar-logo" href="{{ url('/') }}" class="text-left text-2xl font-bold uppercase"><span id="profile-label"></span>
            <img src="{{ asset('images/kaluhasLogoIcon.png') }}" class="w-16" alt="My Image">
        </a>
    </div>
    <div class="flex justify-center w-1/2 space-x-6">

        <a href="{{ url('/') }}" class="font-semibold uppercase transition duration-300 hover:text-pink-violet hover:underline">Home</a>
        {{-- <button id="dark-mode" class=""><svg xmlns="http://www.w3.org/2000/svg" fill="true" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" id="dark-mode-icon" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
            </svg>
        </button> --}}
    </div>
</nav>

@endsection