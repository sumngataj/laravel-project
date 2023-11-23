@section('packages')
<div id="section2" class="bg-[url('https://www.henann.com/uploads/slider/find-a-resort_bohol.jpg')] bg-no-repeat h-[50rem] bg-cover bg-center w-full py-20">
    <div class="bg-white w-full -translate-x-[15%] h-[40rem] z-10 shadow-lg relative border border-gray-300">
    <div class="absolute top-20 right-20 p-8">
        <div class="relative space-y-10">
            <p class="text-3xl text-gold-highlight">Discover the magic in  <br> our wedding packages</p>
            <p ckass="font-light text-sm">Experience a wedding like never before.</p>
            {{-- <button class="bg-pink-violet p-2 text-white w-44 uppercase text-sm">Discover More</button> --}}
            <div class="absolute">
            <div class="flex justify-center items-center py-8 space-x-8">
        <button id="prevButtons" class="text-gray-500">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
        </svg>

        </button>
        
        <div class="indicator-containers lg:flex md:flex sm:flex space-x-4 hidden">
        @foreach($packages as $package)
        <div class="indicators h-4 w-4 rounded-full"></div>
        @endforeach
        </div>

        <button id="nextButtons" class="text-gray-500">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
</svg>

        </button>
    </div>
            </div>
       </div>
            </div>
            <div class="sliders -translate-x-[30%]">
            @foreach($packages as $package)
                <div class="relative p-8"><img src="{{ asset('images/package_images/' . $package->image_path) }}"
                                alt="{{ $package->package_name }}" class="w-full h-[30rem] object-cover shadow-xl" />
                            
                                <div class="flex justify-between items-center w-full py-4">
                                <div class="relative w-1/2">
                                <div class="flex items-center mt-2">
                                            @php
                                            $averageRating = $averageRatings->where('package_id', $package->package_id)->first();
                                            $averageStars = $averageRating ? round($averageRating->average_rating) : 0;
                                            @endphp
                                            @for ($i = 1; $i <= 5; $i++)
                                            <svg class="w-4 h-4 text-{{ $i <= $averageStars ? 'yellow' : 'gray' }}-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                            </svg>
                                            
                                            @endfor
                                    </div>
                                    <h2 class="font-light tracking-wide text-2xl text-gold-highlight">
                                    {{ $package->package_name }}</h2>
</div>
<div><p class="text-5xl font-light text-gold-highlight">|</p></div>
<div class="relative w-1/2">
<p class="text-sm">{{ substr($package->description, 0, 50) }}...</p>
                                        <a id="myButton2" onclick="window.open(this.href,'_blank');return false;" href="{{ route('packages.displayById', $package->package_id) }}"
                                            class="text-sm text-pink-violet tracking-tight hover:opacity-50" target="_blank">View details</a>
                                        
</div>
<div>

</div>
</div>
                            </div>
                @endforeach
            </div>
        
        </div>

</div>
   
@endsection