@section('venues')
<div class="relative">
<div class="flex container mx-auto justify-around items-start w-full py-36 h-[50rem]">
    
    <div class="relative space-y-10">
        <p class="text-3xl text-gold-highlight">Unwind in our exquisite venues</p>
        <p>Our recreation amenities make the time you spend with us unforgettable.</p>
        <button class="bg-pink-violet p-2 text-white w-44 uppercase text-sm">Discover More</button>
    </div>
 
    <div class="sliderVenue w-9/12 translate-x-[20%]">
    @foreach($venues as $venue)
        <div class="p-5 w-full">
                    <div class="w-full h-full border border-gold-highlight bg-white">
                        <img class="h-80 w-full object-cover"
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
<div class="absolute bg-[url('https://roamulofied.files.wordpress.com/2017/07/dsc_0058.jpg?w=1060')] bg-no-repeat bg-cover bg-bottom w-7/12 h-[25rem] left-0 -bottom-12 -z-[1]"></div>
    </div>


@endsection
