@section('packages')
<div class="container w-10/12 my-20 mx-auto px-4 md:px-12">
    <p class="text-center uppercase text-gray-400 font-semibold tracking-tight">Kaluhas Features</p>
    <h1 class="text-center p-4 text-2xl uppercase font-bold">Our latest packages</h1>
    <div class="flex flex-wrap -mx-1 lg:-mx-4"
        data-replace='{ "translate-y-12": "translate-y-0", "opacity-0": "opacity-100" }'>

        <div class="my-1  px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">


            <article class="overflow-hidden shadow-lg">

                <a href=" #">
                    <img alt="Placeholder" class="h-auto w-full hover:scale-105 transition-transform duration-300"
                        src="https://images.unsplash.com/photo-1599142296733-1c1f2073e6de?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1887&q=80"
                        loading="lazy">
                </a>



            </article>


        </div>

        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">


            <article class="overflow-hidden shadow-lg hover:scale-100 transition-transform duration-300">
                <a href="#">
                    <img alt="Placeholder" class="block h-auto w-full hover:scale-105 transition-transform duration-300"
                        src="https://images.unsplash.com/photo-1621621667797-e06afc217fb0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80">
                </a>

                <!-- Text with white background -->

            </article>

            <article class="overflow-hidden shadow-lg hover:scale-100 transition-transform duration-300">
                <a href="#">
                    <img alt="Placeholder" class="block h-auto w-full hover:scale-105 transition-transform duration-300"
                        src="https://images.unsplash.com/photo-1621621667797-e06afc217fb0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80">
                </a>

                <!-- Text with white background -->

            </article>

        </div>

        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">


            <article class="overflow-hidden shadow-lg">

                <a href="#">
                    <img alt="Placeholder" class="block h-96 w-full hover:scale-105 transition-transform duration-300"
                        src="https://picsum.photos/600/400/?random">
                </a>

                <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                    <h1 class="text-lg">
                        <a class="no-underline hover:underline text-black" href="#">
                            Medium Package
                        </a>
                    </h1>
                    <p class="text-grey-darker text-sm  font-semibold rounded-full bg-gray-100 p-2 text-yellow-600">
                        ₱35000
                    </p>
                </header>

                <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                    <a class="flex items-center no-underline hover:underline text-black ml-2 text-sm" href="#">
                        View Details
                    </a>
                    <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                        <span class="hidden">Like</span>
                        <i class="fa fa-heart"></i>
                    </a>
                </footer>


            </article>


        </div>



    </div>
</div>

@endsection