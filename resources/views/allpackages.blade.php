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
</head>

<body>
    @include('components.nav')
    @yield('nav')
    <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <h2 class="sr-only">Products</h2>
            <label for="countries"
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
            </form>

            <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                <a href="#" class="group">
                    <div
                        class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-01.jpg"
                            alt="Tall slender porcelain bottle with natural clay textured body and cork stopper."
                            class="h-full w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <h3 class="mt-4 text-sm text-gray-700">Earthen Bottle</h3>
                    <p class="mt-1 text-lg font-medium text-gray-900">$48</p>
                </a>
                <a href="#" class="group">
                    <div
                        class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-02.jpg"
                            alt="Olive drab green insulated bottle with flared screw lid and flat top."
                            class="h-full w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <h3 class="mt-4 text-sm text-gray-700">Nomad Tumbler</h3>
                    <p class="mt-1 text-lg font-medium text-gray-900">$35</p>
                </a>
                <a href="#" class="group">
                    <div
                        class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-03.jpg"
                            alt="Person using a pen to cross a task off a productivity paper card."
                            class="h-full w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <h3 class="mt-4 text-sm text-gray-700">Focus Paper Refill</h3>
                    <p class="mt-1 text-lg font-medium text-gray-900">$89</p>
                </a>
                <a href="#" class="group">
                    <div
                        class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-04.jpg"
                            alt="Hand holding black machined steel mechanical pencil with brass tip and top."
                            class="h-full w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <h3 class="mt-4 text-sm text-gray-700">Machined Mechanical Pencil</h3>
                    <p class="mt-1 text-lg font-medium text-gray-900">$35</p>
                </a>

                <!-- More products... -->
            </div>
        </div>
    </div>
    @include('components.footer')
    @yield('footer')
</body>

</html>