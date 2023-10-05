@section('process')
<div id="section1" class="flex justify-around items-center mt-20">
    <iframe width="650" height="500" src="https://www.youtube.com/embed/st4ctBmnKm0?si=iEmQ8OVRm7Mvw9gw"
        title="YouTube video player" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen></iframe>
    <div class="w-1/3">
        <h1 class="text-pink-violet font-semibold text-3xl">@KALUHAS</h1>
        <h3 class="text-gold-highlight font-light text-3xl mt-6 tracking-wide">Exprience a wedding like<br> never
            before</h3>
        <p class="text-sm mt-6 w-9/12 font-light tracking-wide">Embarking on the journey of marriage is a momentous
            occasion,
            especially in the
            beautiful setting of the
            Philippines. The archipelago's rich culture and stunning landscapes provide the perfect backdrop for a
            wedding celebration filled with love and joy. At Kaluhas Wedding and Events Specialist, we understand the
            significance of this special day and the importance of a well-planned timeline. In this article, we will
            take you through the ideal months to consider when planning your dream wedding in the Philippines, ensuring
            every detail is flawlessly executed.</p>
        <!-- <button class="bg-pink-violet p-4 text-sm font-semibold mt-6 hover:bg-pink-hover animation-slide-up">
            Book Now
        </button> -->
    </div>
</div>


<div class="flex justify-center items-start space-x-16 mt-20 w-full">
    <div class="w-56">
        <h1 class="font-lightbold text-3xl text-gold-highlight tracking-wide">Kaluhas offers</h1>
        <p class="text-sm mt-6">Take advantage of unique offers and events brought to you by Kaluhas wedding and events
            specialist.</p>
        <a onclick="window.open(this.href,'_blank');return false;" href="{{ route('custom.booking') }}" target="_blank">
            <button
                class="bg-pink-violet p-4 text-sm font-semibold mt-16 hover:bg-pink-hover animation-slide-up w-full">
                Book Now
            </button>
        </a>
    </div>
    <div class="flex justify-start items-start space-x-5 w-8/12">
        <div class="max-w-sm overflow-hidden border border-gold-highlight text-center">
            <center>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="green" class="w-36 h-36">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </center>
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Economical Offerings</div>
                <p class="text-gray-700 text-base">
                    "Affordable Options
                    Discover cost-effective choices that won't compromise on quality. Explore our budget-friendly
                    selections, ensuring you get the best value for your investment."
                </p>
            </div>
        </div>
        <div class="max-w-sm overflow-hidden border border-gold-highlight text-center">
            <center>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="gray"
                    class="w-36 h-36">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>

            </center>
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Best Venues</div>
                <p class="text-gray-700 text-base">
                    "Top-Rated Venues
                    Explore our carefully curated selection of the finest venues. We've handpicked the best locations to
                    ensure your event is hosted in style and comfort, making your occasion truly exceptional."
                </p>
            </div>

        </div>
        <div class="max-w-sm overflow-hidden border border-gold-highlight text-center">
            <center>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="pink"
                    class="w-36 h-36">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                </svg>

            </center>
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Book an Event</div>
                <p class="text-gray-700 text-base">
                    "Reserve Your Event
                    Secure your upcoming event with ease. Our user-friendly booking system ensures a seamless
                    experience, allowing you to plan and confirm your occasion hassle-free."
                </p>
            </div>

        </div>
    </div>
</div>


@endsection