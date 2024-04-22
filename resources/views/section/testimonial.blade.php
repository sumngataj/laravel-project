@section('testimonial')
<div class="min-w-screen min-h-screen flex items-center justify-center py-5">
    <div class="w-full bg-white border-t border-b border-gray-200 px-5 py-16 md:py-24 text-gray-800">
        <div class="w-full max-w-6xl mx-auto">
            <div class="text-center max-w-xl mx-auto">
                <h1 class="text-2xl font-bold mb-5 text-gray-600">What people are saying.</h1>

                <div class="text-center mb-10">
                    <span class="inline-block w-1 h-1 rounded-full bg-red-500 ml-1"></span>
                    <span class="inline-block w-3 h-1 rounded-full bg-red-500 ml-1"></span>
                    <span class="inline-block w-40 h-1 rounded-full bg-red-500"></span>
                    <span class="inline-block w-3 h-1 rounded-full bg-red-500 ml-1"></span>
                    <span class="inline-block w-1 h-1 rounded-full bg-red-500 ml-1"></span>
                </div>
            </div>
            <div class="-mx-3 md:flex items-start justify-center">
                @foreach($ratings as $rating)
                <div class="px-3 md:w-1/3">

                    <div
                        class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                        <div class="w-full flex mb-4 items-center">
                            <div
                                class="flex overflow-hidden items-center justify-center rounded-full w-10 h-10 bg-gray-100 border border-gray-200">
                                {{substr($rating->user->name, 0, 1)}}
                            </div>
                            <div class="flex-grow pl-3">
                                <h6 class="font-bold text-sm uppercase text-gray-600">{{$rating->user->name}}.</h6>
                                <div class="flex">

                                    @php
                                    $ratingValue = $rating->rating;
                                    @endphp
                                    @for ($i = 1; $i <= 5; $i++) <svg
                                        class="w-4 h-4 text-{{ $i <=  $ratingValue ? 'yellow' : 'gray' }}-300"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                        @endfor
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <p class="text-sm leading-tight">{{$rating->comment}}</p>
                        </div>
                    </div>


                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>



@endsection