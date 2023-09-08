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
                    Bookings
                  </h2>
                  <div class="w-full overflow-hidden rounded-lg shadow-xs"
                    <div class="w-full overflow-x-auto">
                      <table class="w-full whitespace-no-wrap">
                        <thead>
                          <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b"
                          >
                            <th class="px-4 py-3">Client</th>
                            <th class="px-4 py-3">Amount</th>
                            <th class="px-4 py-3">Status</th>
                            <th class="px-4 py-3">Date</th>
                          </tr>
                        </thead>
                        <tbody
                          class="bg-white divide-y"
                        >
                          <tr class="text-gray-700">
                            <td class="px-4 py-3">
                              <div class="flex items-center text-sm">
                                <!-- Avatar with inset shadow -->
                                <div
                                  class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                                >
                                  <img
                                    class="object-cover w-full h-full rounded-full"
                                    src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                    alt=""
                                    loading="lazy"
                                  />
                                  <div
                                    class="absolute inset-0 rounded-full shadow-inner"
                                    aria-hidden="true"
                                  ></div>
                                </div>
                                <div>
                                  <p class="font-semibold">Hans Burger</p>
                                  <p class="text-xs text-gray-600">
                                    10x Developer
                                  </p>
                                </div>
                              </div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                              $ 863.45
                            </td>
                            <td class="px-4 py-3 text-xs">
                              <span
                                class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full"
                              >
                                Approved
                              </span>
                            </td>
                            <td class="px-4 py-3 text-sm">
                              6/10/2020
                            </td>
                          </tr>
      
                          <tr class="text-gray-700">
                            <td class="px-4 py-3">
                              <div class="flex items-center text-sm">
                                <!-- Avatar with inset shadow -->
                                <div
                                  class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                                >
                                  <img
                                    class="object-cover w-full h-full rounded-full"
                                    src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&facepad=3&fit=facearea&s=707b9c33066bf8808c934c8ab394dff6"
                                    alt=""
                                    loading="lazy"
                                  />
                                  <div
                                    class="absolute inset-0 rounded-full shadow-inner"
                                    aria-hidden="true"
                                  ></div>
                                </div>
                                <div>
                                  <p class="font-semibold">Jolina Angelie</p>
                                  <p class="text-xs text-gray-600">
                                    Unemployed
                                  </p>
                                </div>
                              </div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                              $ 369.95
                            </td>
                            <td class="px-4 py-3 text-xs">
                              <span
                                class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full"
                              >
                                Pending
                              </span>
                            </td>
                            <td class="px-4 py-3 text-sm">
                              6/10/2020
                            </td>
                          </tr>
      
                          <tr class="text-gray-700">
                            <td class="px-4 py-3">
                              <div class="flex items-center text-sm">
                                <!-- Avatar with inset shadow -->
                                <div
                                  class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                                >
                                  <img
                                    class="object-cover w-full h-full rounded-full"
                                    src="https://images.unsplash.com/photo-1551069613-1904dbdcda11?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                    alt=""
                                    loading="lazy"
                                  />
                                  <div
                                    class="absolute inset-0 rounded-full shadow-inner"
                                    aria-hidden="true"
                                  ></div>
                                </div>
                                <div>
                                  <p class="font-semibold">Sarah Curry</p>
                                  <p class="text-xs text-gray-600">
                                    Designer
                                  </p>
                                </div>
                              </div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                              $ 86.00
                            </td>
                            <td class="px-4 py-3 text-xs">
                              <span
                                class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full"
                              >
                                Denied
                              </span>
                            </td>
                            <td class="px-4 py-3 text-sm">
                              6/10/2020
                            </td>
                          </tr>
      
                          <tr class="text-gray-700">
                            <td class="px-4 py-3">
                              <div class="flex items-center text-sm">
                                <!-- Avatar with inset shadow -->
                                <div
                                  class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                                >
                                  <img
                                    class="object-cover w-full h-full rounded-full"
                                    src="https://images.unsplash.com/photo-1551006917-3b4c078c47c9?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                    alt=""
                                    loading="lazy"
                                  />
                                  <div
                                    class="absolute inset-0 rounded-full shadow-inner"
                                    aria-hidden="true"
                                  ></div>
                                </div>
                                <div>
                                  <p class="font-semibold">Rulia Joberts</p>
                                  <p class="text-xs text-gray-600">
                                    Actress
                                  </p>
                                </div>
                              </div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                              $ 1276.45
                            </td>
                            <td class="px-4 py-3 text-xs">
                              <span
                                class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full"
                              >
                                Approved
                              </span>
                            </td>
                            <td class="px-4 py-3 text-sm">
                              6/10/2020
                            </td>
                          </tr>
      
                          
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
                                class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple"
                              >
                                3
                              </button>
                            </li>
                            <li>
                              <button
                                class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                              >
                                4
                              </button>
                            </li>
                            <li>
                              <span class="px-3 py-1">...</span>
                            </li>
                            <li>
                              <button
                                class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                              >
                                8
                              </button>
                            </li>
                            <li>
                              <button
                                class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                              >
                                9
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
