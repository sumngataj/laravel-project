<div class="flex w-full mt-2 space-x-3 max-w-sm message">

    <div class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-300">
        @if(Auth::check() && Auth::user()->isAdmin())
        <div class="profile-pic" style="background-color:pink;">
            <div class="initial text-md">U</div>
        </div>
        @else
        <div class="profile-pic">
            <div class="initial text-md">A</div>
        </div>
        @endif
    </div>
    <div>
        <div class="bg-gray-300 p-3 rounded-r-lg rounded-bl-lg">
            <p class="text-sm">{{$message}}</p>
        </div>

    </div>
</div>