@section('packages')
<div id="section2" class="relative mt-16">
    <div
        class="bg-[url('https://ak-d.tripcdn.com/images/0224y120008xogv3222D2_Z_960_660_R5_D.webp?proc=watermark/image_trip1,l_ne,x_16,y_16,w_67,h_16;digimark/t_image,logo_tripbinary;ignoredefaultwm,1A8F')] bg-no-repeat h-[48rem] bg-cover bg-center absolute w-full">
    </div>
    <div class="pt-16"></div>
    <section id="package"
        class="overflow-hidden -translate-x-[150%] bg-white h-[40rem] shadow-lg border border-golden-highlight ">
        <div id="sliderFloatText">

        </div>
        <div class="flex">


            <div id="sliderContainer" class="w-11/12 overflow-hidden translate-y-[150%]">
                <ul id="slider" class="flex w-full duration-700">
                    @foreach($packages as $package)
                    <li class="p-5">
                        <div class="h-full">
                            <img class="h-96 w-full object-cover"
                                src="{{ asset('images/package_images/' . $package->image_path) }}"
                                alt="{{ $package->package_name }}" />
                            <div class="flex justify-start items-center mt-4">
                                <h2 class="font-light tracking-wide text-2xl text-gold-highlight">
                                    {{ $package->package_name }}</h2>
                                <div class="border-l h-20 border-gold-highlight ml-5">
                                    <div class="ml-3">
                                        <p class="text-sm">{{ substr($package->description, 0, 100) }}...</p>

                                        <a href="{{ route('packages.displayById', $package->package_id) }}"
                                            class="text-sm text-pink-violet tracking-tight hover:opacity-50">View
                                            details</a>
                                        
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
                                            <p class="ml-2 text-sm font-medium text-gray-500 dark:text-gray-400">{{ $averageStars }} out of 5</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div id="sliderText" class="relative p-18 w-[25%] ml-8 mt-16 opacity-0">
                <div class="flex items-center">
                    <div class="relative">
                        <h2 class="text-gold-highlight tracking-tight font-light text-4xl">Packages</h2>
                        <p class="text-sm mt-8 w-11/12"><b class="text-lg">"</b>Experience sophistication at its
                            finest,
                            right at the
                            heart of
                            Entertainment... With our meticulously crafted packages, we invite you to indulge in a world
                            of luxury and elegance that transcends the ordinary. Elevate your moments, create lasting
                            memories, and savor the essence of opulence with our exclusive offerings.<b
                                class="text-lg">"</b>
                        </p>
                    </div>
                </div>
                <div class="w-1/12 flex items-center justify-between mt-56">
                    <div class="w-full text-right">
                        <button id="prevButton" class="p-3 mr-5 hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                                stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                            </svg>
                        </button>
                    </div>
                    <div id="indicators" class="flex justify-around ml-10">
                    </div>

                    <div class="w-full text-left">
                        <button id="nextButton" class="p-3 ml-5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                                stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>
@endsection