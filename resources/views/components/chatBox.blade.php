@section('chatbox')
@guest

@else
<button id="toggleChatButton"
    class="fixed bottom-4 right-4 overflow-hidden rounded-full bg-pink-violet p-2 text-lg uppercase"><svg
        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round"
            d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
    </svg>
</button>


<div id="toggleChat" class="lg:w-3/12 lg:drop-shadow-2xl hidden overflow-hidden rounded-t-lg mx-0 p-0 bg-white chat">
    <div class="relative w-full">
        @if(Auth::check() && Auth::user()->isAdmin())
        <header id="toggleHeader"
            class="flex bg-pink-violet p-2 font-semibold justify-between items-center cursor-pointer">
            <div class="flex items-center">
                <div class="profile-pic" style="background-color:pink">
                    <div class="initial text-md">U</div>
                </div>
                <p class="ml-2">User</p>
            </div>

            <button id="" class="text-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4" viewBox="0 0 384 512">
                    <path
                        d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                </svg>
            </button>
        </header>
        @else

        <header id="toggleHeader"
            class="flex bg-pink-violet p-2 font-semibold justify-between items-center cursor-pointer">
            <div class="flex items-center">
                <div class="profile-pic">
                    <div class="initial text-md">A</div>
                </div>
                <p class="ml-2">Admin</p>
            </div>

            <button id="" class="text-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4" viewBox="0 0 384 512">
                    <path
                        d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                </svg>
            </button>
        </header>

        @endif
        <div id="slideInChat"
            class="flex flex-col flex-grow w-full max-w-xl bg-white h-[23rem] shadow-xl rounded-lg overflow-hidden">
            <div class="flex flex-col flex-grow p-4 overflow-auto messages">
                @if(Auth::check() && Auth::user()->isAdmin())
                @include('components.broadcast', ['message' => "Hi, how can i help you?"])
                @else
                @include('components.receive', ['message' => "Hi, how can i help you?"])
                @endif

            </div>
            <div class="border-t border-gray-300 p-2 bg-white w-full">
                <form method="post">
                    <div class="flex flex-wrap justify-between items-center">

                        <input type="text"
                            class="mt-0 block px-2 w-11/12 rounded-full border border-gray-200 bg-gray-300 outline-none focus:ring-0 focus:border-gray-200 text-sm text-black"
                            fdprocessedid="4xzu0v" id="message" name="message" placeholder="Aa" autocomplete="off">
                        <button type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4" viewBox="0 0 512 512">
                                <path
                                    d="M16.1 260.2c-22.6 12.9-20.5 47.3 3.6 57.3L160 376V479.3c0 18.1 14.6 32.7 32.7 32.7c9.7 0 18.9-4.3 25.1-11.8l62-74.3 123.9 51.6c18.9 7.9 40.8-4.5 43.9-24.7l64-416c1.9-12.1-3.4-24.3-13.5-31.2s-23.3-7.5-34-1.4l-448 256zm52.1 25.5L409.7 90.6 190.1 336l1.2 1L68.2 285.7zM403.3 425.4L236.7 355.9 450.8 116.6 403.3 425.4z" />
                            </svg>
                        </button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endguest
@endsection