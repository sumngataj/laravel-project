@section('bookingNav')
<nav class="bg-white mx-auto h-28">
    <div class="flex container mx-auto justify-around items-center pt-4">
        <a href="{{ url('/') }}" class="flex justify-start w-1/2">
            <img src="{{ asset('images/kaluhasLogoIcon.png') }}" class="w-20" alt="My Image">
        </a>        
        <div class="flex space-x-5 ">
            <button class="uppercase tracking-widest hover:text-pink-violet">Company Info</button>
            <button class="flex items-center space-x-2 hover:text-pink-violet">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                </svg>
                <span class="tracking-widest">+63 2 8888 0777</span>
            </button>
        </div>
    </div>
</nav>


@endsection