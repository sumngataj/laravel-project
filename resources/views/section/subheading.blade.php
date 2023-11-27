@section('process')
<div id="section1" class="lg:flex justify-center items-center mt-20 w-full space-x-44">
    <div class="flex lg:justify-end justify-center lg:w-1/2 w-full">
    
    <iframe width="650" height="500" src="https://www.youtube.com/embed/st4ctBmnKm0?si=iEmQ8OVRm7Mvw9gw"
        title="YouTube video player" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen></iframe>

    </div>
    <div class="lg:flex md:hidden justify-between w-1/3">
        <div class="lg:relative">
            <p class="text-center w-36 p-0">
        <span class="text-2xl" style="font-family: 'Cedarville Cursive', cursive;
">Welcome to </span><br>
        <span class="font-semibold text-4xl">KALUHAS</span>
        </p>
   
        <h3 class="text-gold-highlight font-light text-4xl mt-6 tracking-wide leading-10">Exprience a wedding <br>like never
            before</h3>
        <p class="text-sm mt-6 font-light tracking-wide leading-6">Cherished moments are best shared in a place <br> where you feel at home with yourself and your loved <br> ones </p>
    </div>
    </div>
</div>
<div class="lg:flex md:relative relative py-20 container mx-auto">
        <div class="relative p-4 w-full animation-slide-up">
                <h2 class="lg:text-4xl text-2xl font-light text-gold-highlight tracking-wide lg:text-left text-center leading-10">Events List</h2>
                <p class="lg:text-sm md:text-sm text-xs lg:text-left text-center py-8">Take advantage of unique offers and events brought to you by Kaluhas BHL. Enjoy a host of offers from Reward Circle, restaurants, hotel stays, and all the special events organized for your indulgence.</p>
                <a onclick="window.open(this.href,'_blank');return false;" href="{{ route('custom.booking') }}" target="_blank">
                    <button id="myButton"
                        class="bg-pink-violet p-2 text-sm font-light mt-16 hover:opacity-80 w-1/2 text-white animation-slide-up uppercase tracking-widest lg:relative">
                        Book Now
                    </button>
                </a>
        </div>
   <div class="relative container mx-auto lg:w-9/12">
        <div id="sliderContainer" class="relative overflow-hidden bg-white lg:translate-x-[20%]">
            <ul id="slider" class="flex transition-transform transform ease-in-out duration-1000
              ">
  
                <li class="w-1/5 p-4 relative" x-data="{ isHovered: false }" @mouseover="isHovered = true" @mouseout="isHovered = false">
                    <div class="shadow-md">
                        <img src="https://images.unsplash.com/photo-1591604466107-ec97de577aff?auto=format&fit=crop&q=80&w=2071&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image 1">
                        <div x-show="isHovered" class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white">
                            <p>Wedding</p>
                        </div>
                    </div>
                </li>
                <li class="w-1/5 p-4 relative" x-data="{ isHovered: false }" @mouseover="isHovered = true" @mouseout="isHovered = false">
                    <div class="shadow-md">
                        <img src="https://images.unsplash.com/photo-1519225421980-715cb0215aed?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image 2">
                        <div x-show="isHovered" class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white">
                            <p>Birthday</p>
                        </div>
                    </div>
                </li>
                <li class="w-1/5 p-4 relative" x-data="{ isHovered: false }" @mouseover="isHovered = true" @mouseout="isHovered = false">
                    <div class="shadow-md">
                        <img src="https://images.unsplash.com/photo-1513623935135-c896b59073c1?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image 3">
                        <div x-show="isHovered" class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white">
                            <p>Debut</p>
                        </div>
                    </div>
                </li>
                <li class="w-1/5 p-4 relative" x-data="{ isHovered: false }" @mouseover="isHovered = true" @mouseout="isHovered = false">
                    <div class="shadow-md">
                        <img src="https://images.unsplash.com/photo-1464366400600-7168b8af9bc3?q=80&w=1769&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image 4">
                        <div x-show="isHovered" class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white">
                            <p>Baptism</p>
                        </div>
                    </div>
                </li>
                <li class="w-1/5 p-4 relative" x-data="{ isHovered: false }" @mouseover="isHovered = true" @mouseout="isHovered = false">
                    <div class="shadow-md">
                        <img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?q=80&w=1769&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image 5">
                        <div x-show="isHovered" class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white">
                            <p>Meeting</p>
                        </div>
                    </div>
                </li>
         
            </ul>
      
        </div>
        <div class="relative">
        <div class="flex justify-center items-center py-8 space-x-8">
        <button id="prevButton" class="text-gray-500">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
        </svg>

        </button>
        
        <div class="indicator-containers lg:flex md:flex sm:flex space-x-4 hidden">
        <div class="indicator h-4 w-4 rounded-full active"></div>
        <div class="indicator h-4 w-4 rounded-full"></div>
        <div class="indicator h-4 w-4 rounded-full"></div>
        <div class="indicator h-4 w-4 rounded-full"></div>
        <div class="indicator h-4 w-4 rounded-full"></div>
        </div>

        <button id="nextButton" class="text-gray-500">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
</svg>

        </button>
    </div>
    <center>
    <a onclick="window.open(this.href,'_blank');return false;" href="{{ route('custom.booking') }}" target="_blank">
            <button id="myButton"
                class="bg-pink-violet p-2 text-sm font-light mt-16 hover:opacity-80 w-1/2 text-white animation-slide-up uppercase tracking-widest lg:hidden">
                Book Now
            </button>
        </a>
    </center>
    </div>
    </div>
</div>
</div>

@endsection