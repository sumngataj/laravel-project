 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="csrf-token" content="{{ csrf_token() }}">
     <title>Kaluhas PH | Wedding Booking</title>
     <link rel="icon" type="image/x-icon" href="{{ asset('images/kaluhasLogoIcon.png') }}">
     <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
     <link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&display=swap" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
     <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
     <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>


     <script type="module" src="/path-to-your-vite-assets/js/main.js"></script>
     <script src="https://code.jquery.com/jquery-3.7.1.min.js"
         integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

     @vite('resources/css/app.css')
 </head>

 <body>

     @include('components.navbar')
     @include('components.newNav')
     @include('components.footer')
     @include('section.package')
     @include('components.loginSideModal')
     @include('section.portfolio')
     @include('components.floatingNavbar')
     @include('components.searchToggle')
     @include('components.sideMenu')
     @include('components.chatBox')
     @include('section.subheading')
     @include('components.homeSlider')
     @include('section.venues')
     @yield('sideMenu')
     @yield('floatingNavbar')
     @yield('newNav')
     @yield('loginSideModal')
     @yield('toggleSearch')

     @if ($message = Session::get('message'))
     <script>
     Swal.fire({
         icon: 'success',
         title: 'Success',
         text: "{{ $message }}",
         confirmButtonText: 'OK'
     });
     </script>
     @endif
     @if(session('success'))
     <script>
     Swal.fire({
         icon: 'success',
         title: 'Success',
         text: "{{ session('success') }}",
         confirmButtonText: 'OK'
     });
     </script>

     @endif
     @if($errors->has('email'))
     <script>
     console.log('Script is executing'); 
     window.alert('{{ $errors->first('
         email ') }}');
     </script>
     @endif



     @yield('homeSlider')

     @yield('process')


     @yield('packages')


     @yield('venues')


     @yield('chatbox')
     <!-- @yield('portfolio') -->
     <br>
     <br>
     <br>

     @yield('footer')

     @vite('resources/js/app.js')

     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    $(document).ready(function () {
    const navbar = $('#navbar');
    
    // Function to toggle the 'border-b' class based on scroll position
    function toggleBorder() {
        if (window.scrollY > 500) {
            navbar.addClass('border-b');
        } else {
            navbar.removeClass('border-b');
        }
    }
    
    // Initial check for scroll position on page load
    toggleBorder();

    // Listen for scroll events and call the toggleBorder function
    $(window).scroll(function () {
        toggleBorder();
    });

    // Rest of your existing code...
});

</script>
<script>
    $(document).ready(function(){
        const slider = $('.sliderHeader');
        const indicators = $('.header-indicator');
        slider.slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
        });
        indicators.each(function(index) {
        $(this).on('click', function() {
            slider.slick('slickGoTo', index); 
        });
        slider.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
      
      indicators.removeClass('active-white');
      
     
      indicators.eq(nextSlide).addClass('active-white');
  });
    });
    });
</script>
<script>
    $(document).ready(function(){
        const slider = $('.sliderVenue');

        slider.slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true,
        });
        indicators.each(function(index) {
        $(this).on('click', function() {
            slider.slick('slickGoTo', index); 
        });
        slider.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
      
      indicators.removeClass('active-white');
      
     
      indicators.eq(nextSlide).addClass('active-white');
  });
    });
    });
</script>
<script>
$(document).ready(function () {
    const slider = $('.sliders');
    const indicators = $('.indicators');
    const prevButton = $('#prevButtons');
    const nextButton = $('#nextButtons');

    slider.slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        adaptiveHeight: true,
    });

    indicators.each(function(index) {
        $(this).on('click', function() {
            slider.slick('slickGoTo', index); 
        });
    });

    indicators.first().addClass('active');
    prevButton.click(function () {
        slider.slick('slickPrev');
    });


    nextButton.click(function () {
        slider.slick('slickNext');
    });

    slider.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
      
        indicators.removeClass('active');
        
       
        indicators.eq(nextSlide).addClass('active');
    });
});
</script>
     <script>
 $(document).ready(function () {
  var slider = $('#slider');
  var indicatorContainer = $('.indicator-containers');

  slider.slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    prevArrow: $('#prevButton'),
    nextArrow: $('#nextButton'),
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 567,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });
  indicatorContainer.find('.indicator').eq(0).addClass('active');

  slider.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
    // Find the indicators and remove the 'active' class from all
    indicatorContainer.find('.indicator').removeClass('active');
    
    // Add the 'active' class to the indicator of the next slide
    indicatorContainer.find('.indicator').eq(nextSlide).addClass('active');
  });
});

</script>

     <script>
    document.addEventListener("DOMContentLoaded", function () {
        const carousel = document.getElementById("default-carousel");
        const carouselItems = carousel.querySelectorAll("[data-carousel-item]");
        const slideButtons = carousel.querySelectorAll("[data-carousel-slide-to]");
        const prevButton = carousel.querySelector("[data-carousel-prev]");
        const nextButton = carousel.querySelector("[data-carousel-next]");
        let currentIndex = 0;

        // Function to show the current slide and update the indicators
        function showSlide(index) {
            carouselItems.forEach((item, i) => {
                if (i === index) {
                    item.classList.remove("translate-x-full");
                    item.classList.add("translate-x-0");
                    item.style.opacity = 1;
                    slideButtons[i].setAttribute("aria-current", "true");
                } else {
                    item.classList.remove("translate-x-0");
                    item.classList.add("translate-x-full");
                    item.style.opacity = 0;
                    slideButtons[i].setAttribute("aria-current", "false");
                }
            });
        }

        // Function to show the next slide
        function nextSlide() {
            currentIndex = (currentIndex + 1) % carouselItems.length;
            showSlide(currentIndex);
        }

        // Function to show the previous slide
        function prevSlide() {
            currentIndex = (currentIndex - 1 + carouselItems.length) % carouselItems.length;
            showSlide(currentIndex);
        }

        // Event listeners for slide buttons
        slideButtons.forEach((button, index) => {
            button.addEventListener("click", function () {
                currentIndex = index;
                showSlide(currentIndex);
            });
        });

        // Event listeners for next and previous buttons
        nextButton.addEventListener("click", nextSlide);
        prevButton.addEventListener("click", prevSlide);

        // Initial display
        showSlide(currentIndex);

        // Automatic slide change (e.g., every 5 seconds)
        setInterval(nextSlide, 5000); // Adjust the interval as needed
    });
</script>

     <script>
     var slideIndex = 1;
     showDivs(slideIndex);

     // Auto advance the slides every 3 seconds (3000 milliseconds)
     var slideInterval = setInterval(function() {
         plusDivs(1);
     }, 60000);

     function plusDivs(n) {
         showDivs(slideIndex += n);
     }

     function showDivs(n) {
         var i;
         var slides = document.getElementsByClassName("mySlides");
        var indicators = document.getElementsByClassName("indicator");
        if (n > slides.length) {
            slideIndex = 1;
        }
        if (n < 1) {
            slideIndex = slides.length;
        }

        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
            slides[i].style.left = "100%";
            
        }
        slides[slideIndex - 1].style.left = "0";

        for (i = 0; i < indicators.length; i++) {
            indicators[i].classList.remove("active-indicator");
        }

        slides[slideIndex - 1].style.display = "block";
        indicators[slideIndex - 1].classList.add("active-indicator");
     }

     // Clear the auto slide interval when the user clicks on a navigation button
     document.querySelector(".w3-button").addEventListener("click", function() {
         clearInterval(slideInterval);
     });
     </script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
     <script>
     const csrfToken = document.querySelector("meta[name='csrf-token']").getAttribute('content');
     </script>

     <script>
     const searchInput = document.getElementById("searchInput");


     searchInput.addEventListener("input", function() {
         const query = searchInput.value;
         const searchResults = document.getElementById("searchResults");
         console.log("Query:", query);

         fetch(`/search?q=${query}`, {
                 method: 'GET',
                 headers: {
                     'X-CSRF-TOKEN': csrfToken,
                     'Content-Type': 'application/json',
                 },

             })
             .then(response => {
                 console.log("response params", response);
                 if (!response.ok) {
                     throw new Error('Network response was not ok');
                 }
                 return response.json();
             })
             .then(data => {
                 console.log(data);

                 searchResults.classList.remove('hidden');
                 searchResults.innerHTML = "";

                 data.forEach(item => {
                     const resultContainer = document.createElement("div");
                     resultContainer.classList.add('result-container', 'border-b',
                         'border-gray-300', 'mb-2', );

                     const imgElement = document.createElement("img");
                     imgElement.src = item.image_url;
                     resultContainer.appendChild(imgElement);

                     const resultItem = document.createElement("div");
                     resultItem.innerHTML =
                         `<span style="font-weight: bold;">${item.package_name}</span><br><span style="font-weight: light; font-size: 14px;">${item.truncated_description}</span>`;
                     resultContainer.appendChild(resultItem);

                     searchResults.appendChild(resultContainer);


                 });
                 if (query.trim() === "") {

                     searchResults.innerHTML = "";
                     searchResults.classList.add('hidden');
                     return;
                 }

             })
             .catch(error => {
                 console.error('Fetch error:', error);
             });
     });
     </script>
     <script>
     function getRandomColor() {
         const letters = '0123456789ABCDEF';
         let color = '#';
         for (let i = 0; i < 6; i++) {
             color += letters[Math.floor(Math.random() * 16)];
         }
         return color;
     }

     const profilePic = document.querySelector('.profile-pic');
     profilePic.style.backgroundColor = getRandomColor();

     document.addEventListener("DOMContentLoaded", function() {
         const slider = document.getElementById("slider");
         const indicatorsContainer = document.getElementById("indicators");

         const totalCards = slider.children.length;

         for (let i = 1; i <= totalCards; i++) {
             const indicator = document.createElement("div");
             indicator.id = `indicator-${i}`;
             indicator.classList.add("h-3", "w-3", "rounded-full", "bg-white", "border", "border-gray-600",
                 "mx-1");
             indicator.setAttribute("data-slide-index", i);
             indicatorsContainer.appendChild(indicator);
         }


         function updateIndicators(currentIndex) {
             for (let i = 1; i <= totalCards; i++) {
                 const indicator = document.getElementById(`indicator-${i}`);
                 const prev = document.getElementById("prevButton");
                 if (i === currentIndex) {
                     indicator.classList.remove("bg-white");
                     indicator.classList.add("bg-gray-300");
                     prev.classList.remove("hidden");
                 } else {
                     indicator.classList.remove("bg-gray-300");
                     indicator.classList.add("bg-white");
                 }
             }
         }
         let currentIndex = 1;

         const nextButton = document.getElementById("nextButton");
         const prevButton = document.getElementById("prevButton");

         nextButton.addEventListener("click", function() {
             currentIndex++;
             if (currentIndex > totalCards) {
                 currentIndex = 1;
             }
             updateIndicators(currentIndex);
         });

         prevButton.addEventListener("click", function() {
             currentIndex--;
             if (currentIndex < 1) {
                 currentIndex = totalCards;
             }
             updateIndicators(currentIndex);
         });
     });
     </script>
     <script>
     const toggleButtons = document.getElementById('toggle-buttons');
     const contentToToggles = document.getElementById('toggle-divs');

     toggleButtons.addEventListener('click', function(event) {
         event.stopPropagation();
         contentToToggles.classList.toggle('hidden');
     });

     document.addEventListener('click', function(event) {
         if (!toggleButtons.contains(event.target) && !contentToToggles.contains(event.target)) {
             contentToToggles.classList.add('hidden');
         }
     });



     let sliderContainer = document.getElementById("sliderContainers");
     if (sliderContainer) {
         let slider = document.getElementById("sliders");
         let cards = slider.getElementsByClassName("li");

         let elementsToShow = 3;
         if (document.body.clientWidth < 1000) {
             elementsToShow = 1;
         } else if (document.body.clientWidth < 1500) {
             elementsToShow = 2;
         }

         let sliderContainerWidth = sliderContainer.clientWidth;

         let cardWidth = sliderContainerWidth / elementsToShow;

         slider.style.width = cards.length * cardWidth + "px";
         slider.style.transition = "transform 1s";

         const nextButton = document.getElementById("nextButton");
         const prevButton = document.getElementById("prevButton");

         for (let index = 0; index < cards.length; index++) {
             const element = cards[index];
             element.style.width = cardWidth + "px";
         }

         let currentIndex = 0;

         function prev() {
             if (currentIndex > 0) {
                 currentIndex--;
                 const translateX = -currentIndex * cardWidth;
                 slider.style.transform = `translateX(${translateX}px)`;
             }
         }

         function next() {
             if (currentIndex < cards.length - elementsToShow) {
                 currentIndex++;
                 const translateX = -currentIndex * cardWidth;
                 slider.style.transform = `translateX(${translateX}px)`;
             }
         }
         nextButton.addEventListener("click", next);
         prevButton.addEventListener("click", prev);
     }
     </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const myButton = document.getElementById("myButton");
            const myButton2 = document.getElementById("myButton2");
            const myButton3 = document.getElementById("myButton3");

            function showLoginRequiredMessage() {
                Swal.fire({
                    title: 'Login Required',
                    text: 'You need to be logged in to perform this action.',
                    icon: 'warning',
                    confirmButtonText: 'OK'
                });
            }

            myButton.addEventListener("click", function() {
                @if(!Auth::check())
                    showLoginRequiredMessage();
                @endif
            });

            myButton2.addEventListener("click", function() {
                @if(!Auth::check())
                    showLoginRequiredMessage();
                @endif
            });

            myButton3.addEventListener("click", function() {
                @if(!Auth::check())
                    showLoginRequiredMessage();
                @endif
            });
        });
        
    </script>

     



     <script>
     document.addEventListener("DOMContentLoaded", function() {
         const toggleScrollDivs = document.getElementById("toggle-scroll-divs");
         const toggleScrollButton = document.getElementById("toggle-scroll-buttons");

         function toggleDropdown() {
             toggleScrollDivs.classList.toggle("hidden");
         }

         toggleScrollButton.addEventListener("click", function(e) {
             e.stopPropagation(); // Prevent button click from immediately closing the dropdown
             toggleDropdown();
         });

         document.addEventListener("click", function(e) {
             if (!toggleScrollDivs.contains(e.target)) {
                 // Close the dropdown if the click is outside of it
                 toggleScrollDivs.classList.add("hidden");
             }
         });

         // Close the dropdown when the overlay is clicked
         overlay.addEventListener("click", toggleDropdown);
     });
     </script>



 </body>

 </html>