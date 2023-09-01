<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaluhas PH | Wedding Booking</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/kaluhasLogoIcon.png') }}">
    <script type="module" src="/path-to-your-vite-assets/js/main.js"></script>
    @vite('resources/css/app.css')
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
</head>

<body>

    @include('components.navbar')
    @include('components.footer')
    @include('section.package')
    @include('components.loginSideModal')

    @yield('floatingNavbar')
    @yield('content')

    @yield('loginSideModal')


    <div class="bg-dirty-gray">
        <div class="max-w-7xl mx-auto">

            <div class="">

                <div class="flex justify-center items-center space-x-10 space-y-2 overflow-hidden">

                    <div class="w-1/2 px-4 sm:px-6 lg:px-8">
                        <h2 class="text-5xl font-semibold text-gray-800 animation-slide-up">Lorem Ipsum</h2>
                        <p class="mt-2 text-gray-600 animation-slide-up">This is the reservation form.
                        </p>

                        <button class="bg-pink-violet p-4 text-sm font-semibold mt-5 animation-slide-up">
                            Book Now
                        </button>
                    </div>

                    <div class="flex justify-center items-center w-1/2">
                        <img src="{{ asset('images/dressedResize.png') }}" class="animation-slide-in" alt="My Image">
                    </div>

                </div>
            </div>

        </div>
    </div>


    @yield('footer')

    @vite('resources/js/app.js')

    <script>
        function data() {
          function getThemeFromLocalStorage() {
              // if user already changed the theme, use it
              if (window.localStorage.getItem("dark")) {
                  return JSON.parse(window.localStorage.getItem("dark"));
              }
        
              // else return their preferences
              return (
                  !!window.matchMedia &&
                  window.matchMedia("(prefers-color-scheme: dark)").matches
              );
          }
        
          function setThemeToLocalStorage(value) {
              window.localStorage.setItem("dark", value);
          }
        
          return {
              dark: getThemeFromLocalStorage(),
              toggleTheme() {
                  this.dark = !this.dark;
                  setThemeToLocalStorage(this.dark);
              },
              isSideMenuOpen: false,
              toggleSideMenu() {
                  this.isSideMenuOpen = !this.isSideMenuOpen;
              },
              closeSideMenu() {
                  this.isSideMenuOpen = false;
              },
              isNotificationsMenuOpen: false,
              toggleNotificationsMenu() {
                  this.isNotificationsMenuOpen = !this.isNotificationsMenuOpen;
              },
              closeNotificationsMenu() {
                  this.isNotificationsMenuOpen = false;
              },
              isProfileMenuOpen: false,
              toggleProfileMenu() {
                  this.isProfileMenuOpen = !this.isProfileMenuOpen;
              },
              closeProfileMenu() {
                  this.isProfileMenuOpen = false;
              },
              isPagesMenuOpen: false,
              togglePagesMenu() {
                  this.isPagesMenuOpen = !this.isPagesMenuOpen;
              },
              // Modal
              isModalOpen: false,
              trapCleanup: null,
              openModal() {
                  this.isModalOpen = true;
                  this.trapCleanup = focusTrap(document.querySelector("#modal"));
              },
              closeModal() {
                  this.isModalOpen = false;
                  this.trapCleanup();
              },
          };
          }
        </script>
    
</body>



</html>