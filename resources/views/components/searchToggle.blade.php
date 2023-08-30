@section('toggleSearch')'

<div id="toggleDiv" class="w-full h-4/5 lg:h-5/6 lg:drop-shadow-2xl hidden overflow-hidden mx-0 p-0">

    <div class="relative w-full">
        <input type="text"
            class="mt-0 block w-full px-0.5 border-0 border-b-2 p-4 border-gray-200 focus:ring-0 focus:border-gray-200 lg:text-4xl text-center text-black font-semibold"
            fdprocessedid="4xzu0v" placeholder="What are you looking for?">

        <button id="toggle-exit" class="hidden lg:flex absolute top-4 right-5 text-gray-500"><svg
                xmlns="http://www.w3.org/2000/svg" class="w-4 lg:w-8" viewBox="0 0 384 512">
                <path
                    d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
            </svg>
        </button>

    </div>

</div>


@endsection