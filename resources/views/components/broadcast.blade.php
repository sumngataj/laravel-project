<div class="flex w-full mt-2 space-x-3 max-w-xs ml-auto justify-end message">
    <div>
        <div class="bg-blue-600 text-white p-3 rounded-l-lg rounded-br-lg">
            <p class="text-sm">{{$message}}
            </p>
        </div>
    </div>
    <div class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-300">
        @if(Auth::check() && Auth::user()->isAdmin())
        <div class="profile-pic">
            <div class="initial text-md">{{ substr(Auth::user()->name, 0, 1) }}</div>
        </div>
        @else
        <div class="profile-pic" style="background-color: pink;">
            <div class="initial text-md">{{ substr(Auth::user()->name, 0, 1) }}</div>
        </div>
        @endif
    </div>
</div>