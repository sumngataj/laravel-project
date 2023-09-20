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
                <div class="py-12">
                    <h2 class="text-2xl font-bold">Update Venue</h2>
                    <form action="{{ route('venues.update',$venue->venue_id) }}" method="POST">
                        @csrf    
                        @method('PUT')
                        
                    <div class="mt-8 max-w-md">
                      <div class="grid grid-cols-1 gap-6">
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
                        <label class="block">
                            <span class="text-gray-700">Capacity</span>
                            <input
                              type="text"
                              name="capacity"
                              class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                              value="{{ $venue->capacity }}"
                              placeholder=""
                            />
                        </label>
                        <label class="block">
                          <span class="text-gray-700">Amenities</span>
                          <textarea
                            class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                            name="amenities"
                            value="{{ $venue->amenities }}"
                            rows="3"
                          ></textarea>
                        </label>
                        <div class="block">
                          <div class="mt-2">
                            <div>
                              <label class="inline-flex items-center">
                                <input
                                  type="checkbox"
                                  class="rounded bg-gray-200 border-transparent focus:border-transparent focus:bg-gray-200 text-gray-700 focus:ring-1 focus:ring-offset-2 focus:ring-gray-500"
                                />
                                <span class="ml-2">Email me news and special offers</span>
                              </label>
                            </div>
                          </div>
                        </div>
                        <button
            type="submit" class="w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-pink-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-pink-600 hover:bg-pink-700 focus:outline-none focus:shadow-outline-purple"
          >
            Submit
          </button>
                      </div>
                    </div>
                    </form>
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
          //Edit Modal
          isEditModalOpen: false,
          eTrapCleanup: null,
          openEditModal() {
            this.isEditModalOpen = true;
            this.eTrapCleanup = focusTrap(document.querySelector("#modal"));
          },
          closeEditModal() {
            this.isEditModalOpen = false;
            this.eTrapCleanup();
          },
          
        };
      }
      </script>
      

</body>
</html>
