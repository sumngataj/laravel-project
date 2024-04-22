@section('footer')
<footer class="flex flex-col md:flex-col">
    <div class="container flex flex-wrap justify-between md:py-6 md:px-12 md:flex-row"
        style="background-color: #f1f6ff; ">
        <div>
            <h1 class="lg:text-2xl font-bold mb-2">Please feel free to get in <br>touch with us
            </h1>
        </div>
        <div class="flex flex-wrap md:flex-row justify-between items-start space-x-2">
            <i class="fa-solid fa-location-dot text-red-500 lg:text-2xl"></i>
            <div>
                <p class="lg:text-xl text-gray-600">Our location</p>
                <p class="text-gray-600">
                    118 B. Aquino Street Baranggay Cogon 6300, <br> Tagbilaran City, Philippines</p>
            </div>
        </div>
        <div class="flex flex-wrap md:flex-row justify-between items-start space-x-2">
            <i class="fa-regular fa-envelope text-red-500 lg:text-2xl"></i>
            <div>
                <p class="lg:text-xl text-gray-600">How can we help?</p>
                <p class="text-gray-600">
                    Hannaguidotti1993@icloud.com <br> 0965 146 1966</p>
            </div>
        </div>
    </div>
    <div
        class="flex flex-wrap items-center justify-between border-t border-gray-200 border-2 border-b-0 border-l-0 border-r-0 md:flex-row py-4 md:px-12">
        <div class="flex items-center justify-between">
            <a href="#" class="flex items-center">
                <!-- <img src="dist/img/logo.svg" class="h-10 mr-3" alt="logo"> -->
                <img src="{{ asset('images/kaluhasLogoIcon.png') }}" class="h-12 mr-3" alt="logo">
                <!-- <span class="text-3xl text-gray-900 font-sans font-bold">Kaluhas</span> -->
            </a>
        </div>
        <div>
            <p class="text-gray-600 lg:text-lg">© Copyright 2024 Kaluhas - All rights reserved.</p>
        </div>
        <div>
            <p class="text-gray-600">Follow us on socials</p> <a
                href="https://www.facebook.com/profile.php?id=100064175647336"><i class="fa-brands fa-facebook"></i></a>
        </div>
    </div>
</footer>
@endsection