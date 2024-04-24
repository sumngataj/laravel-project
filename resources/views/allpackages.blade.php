<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packages View</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/kaluhasLogoIcon.png') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
    #countries option:hover {
        background-color: red;
        /* Background color of options on hover */
    }
    </style>
    @vite('resources/css/app.css')
</head>

<body>
    @include('components.nav')
    @yield('nav')
    <div class="bg-white">

        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <h2 class="text-5xl text-black mb-12">All Packages</h2>
          
            {{-- <label for="countries"
                class="flex items-center justify-center block mb-2 text-sm font-medium text-gray-900">Filter by Price
                Range:</label>
            <form class="max-w-sm mx-auto mb-6">
                <select id="countries" class="border-b border-gray-500 text-gray-900 text-sm block w-full p-2.5">
                    <option selected>Choose a country</option>
                    <option value="US">United States</option>
                    <option value="CA">Canada</option>
                    <option value="FR">France</option>
                    <option value="DE">Germany</option>
                </select>
            </form> --}}

            <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                @foreach($packages as $package)
                <div class="group">
                    <div
                        class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                        <img src="{{ asset('images/package_images/' . $package->image_path) }}"
                        alt="{{ $package->package_name }}"
                            class="h-full w-full object-cover object-center group-hover:opacity-75">
                    </div>
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
                    <h3 class="mt-4 text-sm text-gray-700">   {{ $package->package_name }}</h3>
                    <p class="mt-1 text-lg font-medium text-gray-900">{{ substr($package->description, 0, 50) }} </p>
                    <a id="myButton2" href="{{ route('packages.displayById', $package->package_id) }}"
                        class="text-sm text-pink-violet tracking-tight hover:opacity-50">View details</a>
                    </div>
  
                @endforeach

                <!-- More products... -->
            </div>
        </div>
    </div>
    @include('components.footer')
    @yield('footer')
</body>

</html>