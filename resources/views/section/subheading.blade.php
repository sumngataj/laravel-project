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
                <a href="{{route('custom.booking')}}">
                <button type="button"
                    class="text-white bg-red-600 font-medium rounded-lg text-md px-5 py-4 text-center hover:bg-red-700 hover:drop-shadow-md transition duration-300 ease-in-out">Book
                    Now</button>
                </a>
                
                    <div x-data="{ 'showModal': false }" @keydown.escape="showModal = false">

                        <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" type="button"
                        class="text-gray-900 bg-gray-200 font-medium rounded-lg px-5 py-4 text-center ml-4 md:mr-0 hover:bg-gray-300 hover:drop-shadow-md focus:bg-gray-400 transition duration-300 ease-in-out"
                        @click="showModal = true">Get Directions
                        </button>
        
                        <div class="fixed inset-0 z-30 flex items-center justify-center overflow-auto bg-black bg-opacity-50"
                            x-show="showModal">
                            <div class="max-w-3xl px-6 py-4 mx-auto text-left bg-white rounded shadow-lg"
                                @click.away="showModal = false" x-transition:enter="motion-safe:ease-out duration-300"
                                x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
                                <div class="flex items-center justify-between">
                                    <h5 class="mr-3 text-black max-w-none"></h5>
        
                                    <button type="button" class="z-50 cursor-pointer" @click="showModal = false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="mapouter">
                                    <div class="gmap_canvas"><iframe
                                            src="https://maps.google.com/maps?q=Kaluhas%20Wedding%20And%20Event%20Specialist%20&amp;t=k&amp;z=15&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                                            frameborder="0" scrolling="no" style="width: 480px; height: 420px;"></iframe>
                                        <style>
                                        .mapouter {
                                            position: relative;
                                            height: 420px;
                                            width: 480px;
                                            background: #fff;
                                        }
        
                                        .maprouter a {
                                            color: #fff !important;
                                            position: absolute !important;
                                            top: 0 !important;
                                            z-index: 0 !important;
                                        }
                                        </style><a href="https://blooketjoin.org/blooket-login/">blooket login</a>
                                        <style>
                                        .gmap_canvas {
                                            overflow: hidden;
                                            height: 420px;
                                            width: 480px
                                        }
        
                                        .gmap_canvas iframe {
                                            position: relative;
                                            z-index: 2
                                        }
                                        </style>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>





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