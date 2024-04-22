@section('events')
<div class="md:px-12 text-center mt-10">
    <h1 class="text-2xl font-bold mb-2 text-center text-gray-600">What kind of <span class="text-red-500">Events</span>
        do we
        offer?
    </h1>
    <p>Birthdays? We've got you! Meetings? We have it here. </p>

</div>
<div class="container flex flex-wrap justify-around mx-auto mt-10 md:px-12 md:flex-row">
    <div id="contents" class="lg:w-1/2">
        <div id="div1" class="content border-solid border-3 border-gray-500 w-full transition ease-in-out">
            <img src="{{ asset('images/1.jpg') }}" class="h-96 object-cover w-full rounded" alt="logo">
        </div>
        <div id="div2" class="content hidden border-solid border-3 border-gray-500 w-full transition ease-in-out">
            <img src="{{ asset('images/2.jpg') }}" class="h-96 object-cover w-full rounded" alt="logo">
        </div>
        <div id="div3" class="content hidden border-solid border-3 border-gray-500 w-full">
            <img src="{{ asset('images/3.jpg') }}" class="h-96 w-auto rounded" alt="logo">
        </div>
        <div id="div4" class="content hidden border-solid border-3 border-gray-500 w-full">
            <img src="{{ asset('images/4.jpg') }}" class="h-96 w-auto rounded" alt="logo">
        </div>
        <div id="div5" class="content hidden border-solid border-3 border-gray-500 w-full">
            <img src="{{ asset('images/5.jpg') }}" class="h-96 w-auto rounded" alt="logo">
        </div>
        <div id="div6" class="content hidden border-solid border-3 border-gray-500 w-full">
            <img src="{{ asset('images/6.jpg') }}" class="h-96 w-auto rounded" alt="logo">
        </div>
    </div>
    <!-- Add more divs with unique IDs and content as needed -->

    <div class="btns" class="lg:w-1/2 flex flex-col">
        <div class="flex flex-row space-x-10 w-full">
            <button id="btn1"
                class="bg-gray-200 text-black-500 rounded w-32 flex flex-col items-center justify-center"><img
                    width="24" height="24" src="https://img.icons8.com/material-rounded/24/birthday.png"
                    alt="birthday" />Birthdays</button>
            <button id="btn2" class="py-8 text-gray-500 w-32 rounded flex flex-col items-center"><img width="50"
                    height="50" src="https://img.icons8.com/ios-filled/50/meeting.png"
                    alt="meeting" />Conferences</button>
            <button id="btn2" class="py-8 text-gray-500 w-32 rounded flex flex-col items-center"><img width="64"
                    height="64"
                    src="https://img.icons8.com/external-icongeek26-glyph-icongeek26/64/external-rings-honeymoon-icongeek26-glyph-icongeek26.png"
                    alt="external-rings-honeymoon-icongeek26-glyph-icongeek26" />Weddings</button>
        </div>
        <div class="flex flex-row space-x-10 w-full mt-10">
            <button id="btn1" class="py-8 text-gray-500 w-32 rounded flex flex-col items-center"><img width="50"
                    height="50" src="https://img.icons8.com/ios/50/disco-ball.png" alt="disco-ball" />Debut</button>
            <button id="btn2" class="py-8 text-gray-500 w-32 rounded flex flex-col items-center">
                <img width="24" height="24" src="https://img.icons8.com/material-outlined/24/workshop.png"
                    alt="workshop" class="text-gray-500 invert-0" />
                Workshops
            </button>
            <button id="btn2" class="py-8 text-gray-500 w-32 rounded flex flex-col items-center"><img width="64"
                    height="64" src="https://img.icons8.com/pastel-glyph/64/footgear--v1.png"
                    alt="footgear--v1" />Sports
                Events</button>
        </div>
    </div>
</div>
<div class="flex flex-wrap items-center justify-center md:px-12 md:flex-row">
    <button type="button"
        class="mt-10 text-gray-900 w-96 bg-gray-200 font-medium rounded-lg px-5 py-4 text-center ml-4 md:mr-0 hover:bg-gray-300 hover:drop-shadow-md focus:bg-gray-400 transition duration-300 ease-in-out">All
        Events &nbsp<i class="fa-solid fa-arrow-right"></i></button>
</div>
@endsection