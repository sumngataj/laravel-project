@section('homeSlider')
<div class="relative">
<div class="relative overflow-hidden">
            <ul" class="sliderHeader flex transition-transform transform ease-in-out duration-1000 h-[60rem]
              ">
                <li class="w-full">
                    <div class="shadow-md">
                        <img src="https://plus.unsplash.com/premium_photo-1675003662316-4ffec8b7bc24?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="object-cover" alt="Image 1">
                    </div>
                </li>
                <li class="w-full">
                    <div class="shadow-md">
                        <img src="https://images.unsplash.com/photo-1606800052052-a08af7148866?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="object-cover" alt="Image 1">
                    </div>
                </li>
            </ul>
</div>
    <div class="absolute top-1/2 right-4 space-y-3 cursor-pointer">
        <div class="header-indicator border border-white rounded-full w-4 h-4 active-white"></div>
        <div class="header-indicator border border-white rounded-full w-4 h-4"></div>
    </div>
</div>
@endsection

