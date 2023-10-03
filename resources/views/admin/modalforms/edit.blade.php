<!DOCTYPE html>
<html x-data="data()" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="{{ asset('images/kaluhasLogoIcon.png') }}">
    <title>Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>

  </head>
  <body>
    @include('admin.components.sidebar')
    @include('admin.components.mobile')
    @include('admin.components.topbar')


    <div
      class="flex h-screen bg-gray-50"
      :class="{ 'overflow-hidden': isSideMenuOpen }"
    >

    @yield('sidebar')
    @yield('mobile')

        <div class="flex flex-col flex-1 w-full">

            @yield('topbar')

            <main class="h-full overflow-y-auto">
              <div class="flex justify-start w-full mt-4 py-2">
                <a href="{{ route('venues.index') }}" class="ml-5 text-2xl italic text-gray-700 relative hover:text-black-900 hover:font-semibold">
                  Venue
                </a>
                <h2 class="ml-2 text-2xl font-semibold text-gray-700 relative">
                  / Update
                </h2>
              </div>
              
              
              <div class="py-12">
                <div class="max-w-4xl mx-auto">
                  <form action="{{ route('venues.update', $venue->venue_id) }}" method="POST" enctype="multipart/form-data">
                    @csrf    
                    @method('PUT')
              
                    <div class="mt-8 max-w-4xl">
                      <div class="grid grid-cols-4 gap-2">
                        <div class="col-span-4 sm:col-span-2">
                          <label class="block">
                            <span class="text-gray-700">Venue Name</span>
                            <input
                              type="text"
                              name="name"
                              class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                              value="{{ $venue->name }}"
                              placeholder=""
                            />
                          </label>
                        </div>
                        <div class="col-span-4 sm:col-span-2">
                          <label class="block">
                            <span class="text-gray-700">Venue Image</span>
                            <input
                                name="image"
                                type="file"
                                class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                            />
                            <!-- Hidden field to store the current image path -->
                            <input type="hidden" name="current_image" value="{{ $venue->image_path }}">
                          </label>                        
                        </div>
                        <div class="col-span-4 sm:col-span-2">
                          <label class="block">
                            <span class="text-gray-700">Location</span>
                            <input
                              type="text"
                              name="location"
                              class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                              value="{{ $venue->location }}"
                              placeholder=""
                            />
                          </label>
                        </div>
                        <div class="col-span-4 sm:col-span-2">
                          <label class="block">
                            <span class="text-gray-700">Capacity</span>
                            <input
                              type="number"
                              name="capacity"
                              class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                              value="{{ $venue->capacity }}"
                              placeholder=""
                            />
                          </label>
                        </div>
                        <div class="col-span-4 sm:col-span-3">
                          <label class="block">
                            <span class="text-gray-700">Amenities</span>
                            <textarea
                              class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                              name="amenities"
                              rows="3"
                            >{{ $venue->amenities }}</textarea>
                          </label>
                        </div>
                        <div class="col-span-4 sm:col-span-1">
                          <label class="block">
                            <span class="text-gray-700">Price</span>
                            <input
                              type="number"
                              name="price"
                              class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                              value="{{ $venue->price }}"
                              placeholder=""
                            />
                          </label>
                        </div>
                        
                        <button
                          type="submit" class="col-span-4 mt-10 w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-pink-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-pink-600 hover:bg-pink-700 focus:outline-none focus:shadow-outline-purple"
                        >
                          Submit
                        </button>
                        
                        <div
                          onclick="window.location='{{ route('venues.index') }}';"
                          style="cursor: pointer;"
                          class="col-span-4 flex justify-center px-5 py-3 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg sm:px-4 sm:py-2 active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray"
                        >
                          <span>Cancel</span>
                        </div>
              
                      </div>
                    </div>
              
                  </form>
                </div>
              </div>
              
                
            </main>
        </div>    
    </div>


    <script>
      function data() {
        return {
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
