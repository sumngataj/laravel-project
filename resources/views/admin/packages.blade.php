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
                <div class="container px-6 mx-auto grid">
                  <h2
                    class="my-6 text-2xl font-semibold text-gray-700"
                  >
                    Packages
                  </h2>
                  <div class="w-full overflow-hidden rounded-lg shadow-xs"
                    <div class="w-full overflow-x-auto">
                      <table class="w-full whitespace-no-wrap">
                        <thead>
                            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b">
                                <th class="px-4 py-3">Package ID</th>
                                <th class="px-4 py-3">Package Name</th>
                                <th class="px-4 py-3">Description</th>
                                <th class="px-4 py-3">Price</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y">
                          @foreach($packages as $package)
                          <tr class="text-gray-700">
                              <td class="px-4 py-3">{{ $package->id }}</td>
                              <td class="px-4 py-3">{{ $package->package_name }}</td>
                              <td class="px-4 py-3">{{ $package->description }}</td>
                              <td class="px-4 py-3">{{ $package->price }}</td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                    
                    </div>
                    <div
                      class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t"
                    >
                      <span class="flex items-center col-span-3">
                        Showing 21-30 of 100
                      </span>
                      <span class="col-span-2"></span>
                      <!-- Pagination -->
                      <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                        <nav aria-label="Table navigation">
                          <ul class="inline-flex items-center">
                            <li>
                              <button
                                class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                                aria-label="Previous"
                              >
                                <svg
                                  aria-hidden="true"
                                  class="w-4 h-4 fill-current"
                                  viewBox="0 0 20 20"
                                >
                                  <path
                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                    clip-rule="evenodd"
                                    fill-rule="evenodd"
                                  ></path>
                                </svg>
                              </button>
                            </li>
                            <li>
                              <button
                                class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                              >
                                1
                              </button>
                            </li>
                            <li>
                              <button
                                class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                              >
                                2
                              </button>
                            </li>
                            <li>
                              <button
                                class="px-3 py-1 text-white transition-colors duration-150 bg-pink-violet border border-r-0 border-pink-violet rounded-md focus:outline-none focus:shadow-outline-purple"
                              >
                                3
                              </button>
                            </li>
                            
                            <li>
                              <button
                                class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                                aria-label="Next"
                              >
                                <svg
                                  class="w-4 h-4 fill-current"
                                  aria-hidden="true"
                                  viewBox="0 0 20 20"
                                >
                                  <path
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"
                                    fill-rule="evenodd"
                                  ></path>
                                </svg>
                              </button>
                            </li>
                          </ul>
                        </nav>
                      </span>
                    </div>
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
