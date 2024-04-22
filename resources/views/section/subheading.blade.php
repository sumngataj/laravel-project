@section('process')
<section id="home" class="py-5">
    <div class="container flex flex-wrap items-start justify-center mx-auto mt-10 md:px-12 md:flex-row">
        <div class="mb-14 lg:mb-0 lg:w-1/2">
            <h1
                class="max-w-xl text-[2.2rem] leading-none text-gray-900 font-extrabold font-sans text-center md:text-5xl lg:text-left lg:leading-tight mb-5">
                Welcome to Kaluhas.
            </h1>
            <p class="max-w-xl text-center text-gray-500 lg:text-left lg:max-w-md">
                At Kaluhas Wedding & Event Specialist, we believe in making your wedding dreams come true. We hope to
                make the planning process an enjoyable part of your wedding preparations, filled with wonderful
                memories, love and lots of fun.
            </p>
            <div class="flex justify-center mt-14 lg:justify-start">
                <button type="button"
                    class="text-white bg-red-600 font-medium rounded-lg text-md px-5 py-4 text-center hover:bg-red-700 hover:drop-shadow-md transition duration-300 ease-in-out">Book
                    Now</button>
                <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" type="button"
                    class="text-gray-900 bg-gray-200 font-medium rounded-lg px-5 py-4 text-center ml-4 md:mr-0 hover:bg-gray-300 hover:drop-shadow-md focus:bg-gray-400 transition duration-300 ease-in-out">Get
                    Directions</button>
            </div>
        </div>
        <div class="lg:w-1/2">
            <iframe id="video-iframe" class="w-full aspect-auto border-solid border-4 border-black-500 p-2 rounded"
                height="400" src="https://www.youtube.com/embed/st4ctBmnKm0?si=iEmQ8OVRm7Mvw9gw"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>
    </div>
</section>

@endsection