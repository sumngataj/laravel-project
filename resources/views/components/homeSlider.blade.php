@section('homeSlider')

<div class="w3-content w3-display-container">
    <img class="mySlides object-cover"
        src="https://plus.unsplash.com/premium_photo-1675003662316-4ffec8b7bc24?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
        style="width:100%;  height:80vh;">
    <img class="mySlides object-cover"
        src="https://images.unsplash.com/photo-1492714485642-dd6df6baafa2?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
        style="width:100%;  height:80vh;">
    <img class="mySlides object-cover"
        src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
        style="width:100%; height:80vh;">

    <button class="absolute left-0 top-[60%] text-4xl hover:bg-white p-2 hover:opacity-50"
        onclick="plusDivs(-1)">&#10094;</button>
    <button class="absolute right-0 top-[60%] text-4xl hover:bg-white p-2 hover:opacity-50"
        onclick="plusDivs(1)">&#10095;</button>
</div>

@endsection