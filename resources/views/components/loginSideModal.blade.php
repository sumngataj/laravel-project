@section('loginSideModal')
<div id="overlay" class="fixed top-0 left-0 w-full h-full bg-black opacity-50 z-50 hidden"></div>
<div id="toggle-div"
    class="fixed top-0 right-0 h-full w-0 bg-white overflow-hidden transition-transform duration-300 transform translate-x-full">
    <div class="flex justify-between items-center border-b border-gray-300 p-4 uppercase">
        <h1 class="text-lg font-semibold">Sign In</h1>
        <button id="close-btn" class="flex flex-wrap justify-center items-center text-sm uppercase"><svg
                xmlns="http://www.w3.org/2000/svg" class="w-3 mr-1" viewBox="0 0 384 512">
                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                <path
                    d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
            </svg>Close</button>
    </div>
    <div class="border-b border-gray-300 px-5 py-5">
        <form action="{{ route('authenticate') }}" method="POST">
            @csrf
            <div class="relative mb-6">
                <label for="email_or_name" class="block">
                    <span class="text-black font-light">Username or email address <span
                            class="text-red-500">*</span></span>
                    <input type="text" class="
                    mt-1
                    block
                    w-full
                    border-gray-300
                    shadow-sm
                  focus:outline-none focus:border-gray-300 focus:ring-1 focus:ring-gray-300
                  @error('email_or_name') is-invalid @enderror
                  " placeholder="" id="email_or_name" name="email_or_name" value="{{ old('email_or_name') }}" autocomplete="email" required>
                </label>
                @if ($errors->has('email_or_name'))
                                <span class="text-red-500">{{ $errors->first('email_or_name') }}</span>
                            @endif
            </div>

            <div class="relative mb-6">
                <label for="password" class="block">
                    <span class="text-black font-light">Password <span class="text-red-500">*</span></span>
                    <input type="password" class="
                    mt-1
                    block
                    w-full
                    border-gray-300
                    shadow-sm
                   focus:outline-none focus:border-gray-300 focus:ring-1 focus:ring-gray-300
                   form-control @error('password') is-invalid @enderror
                  " placeholder="" id="password" name="password" required>
                </label>
                @if ($errors->has('password'))
                    <span class="text-red-500">{{ $errors->first('password') }}</span>
                @endif
            </div>

            <button type="submit" value="Login" class="uppercase bg-pink-violet w-full p-3 shadow-sm text-sm hover:bg-pink-hover font-semibold">log
                in</button>
        </form>
    </div>
    <div class="flex flex-wrap justify-center items-center w-full py-5 border-b border-gray-300">
        <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-16 opacity-10 ml-8" fill="black" viewBox="0 0 448 512">
                <path
                    d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
            </svg>
            <p class="font-semibold text-xs text-center p-2">No account yet?</p>
            <a href="" class="font-semibold uppercase tracking-tight text-sm underline">create an
                account</a>
        </div>
    </div>
</div>

@endsection