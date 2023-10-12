@section('venues')
<div id="section3" class="relative mt-16 h-[40rem]">
    <div class="w-[25%] absolute left-[2%] mt-12">
        <h1 class="text-gold-highlight font-light text-4xl tracking-wide ">The Best of Bohol</h1>
        <p class="text-sm font-light tracking-wide mt-12">
            "We've carefully curated the most enchanting locations in Bohol for your dream wedding."</p>
        <p class="mt-8 font-bold text-xl uppercase text-gold-highlight">Check it out ->>></p>
    </div>
    <div
        class="bg-[url('https://gttp.imgix.net/288638/x/0/be-grand-bohol.jpg?ar=1.91:1&w=1200&fit=crop')] bg-no-repeat h-[20rem] bg-cover bg-center mt-96 absolute w-1/2 -z-10">
    </div>
    <section id="package" class="overflow-hidden h-[40rem] translate-x-[30%]">
        <div id="sliderVenueContainer" class="w-full overflow-hidden">
            <div id="sliderVenue" class="flex w-full duration-700">
                @foreach($venues as $venue)
                <div id="p-5" class="p-5">
                    <div class="h-full border border-gold-highlight bg-white">
                        <img class="h-96 w-full object-cover"
                            src="{{ asset('images/venue_images/' . $venue->image_path) }}" alt="MyImage" />
                        <div class="p-8">
                            <h2 class="font-light tracking-wide text-2xl text-gold-highlight">{{$venue->name}}</h2>
                            <div class="w-10/12">
                                <p class="text-sm font-light">{{$venue->location}}</p>
                                <a href="{{ route('venues.displayById', $venue->venue_id) }}"
                                    class="text-sm text-pink-violet tracking-tight hover:opacity-50">View
                                    details</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
</div>

</section>
</div>
@endsection