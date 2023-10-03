<!DOCTYPE html>
<html  x-data="data()" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
              @if ($message = Session::get('success'))
                <div x-data="{show: true}"
                    x-show="show"
                    x-init="setTimeout(() => show = false, 3000)"
                    class="m-3 p-3 rounded-lg bg-green-100 text-green-700 flex items-center">
                    <span class="mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                            <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                        </svg>
                    </span>
                    <span>{{ $message }}</span>
                </div>
              @endif 
                <div class="container px-6 mx-auto grid">
                  <h2
                    class="my-6 text-2xl font-semibold text-gray-700"
                  >
                    Dashboard
                  </h2>
                  <!-- Cards -->
                  <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
                    <!-- Card -->
                    <div
                      class="flex items-center p-4 bg-white rounded-lg shadow-xs"
                    >
                      <div
                        class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full"
                      >
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                          <path
                            d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
                          ></path>
                        </svg>
                      </div>
                      <div>
                        <p
                          class="mb-2 text-sm font-medium text-gray-600"
                        >
                          Total clients
                        </p>
                        <p
                          class="text-lg font-semibold text-gray-700"
                        >
                          6389
                        </p>
                      </div>
                    </div>
                    <!-- Card -->
                    <div
                      class="flex items-center p-4 bg-white rounded-lg shadow-xs"
                    >
                      <div
                        class="p-3 mr-4 text-green-500 bg-green-100 rounded-full"
                      >
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                          <path
                            fill-rule="evenodd"
                            d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                            clip-rule="evenodd"
                          ></path>
                        </svg>
                      </div>
                      <div>
                        <p
                          class="mb-2 text-sm font-medium text-gray-600"
                        >
                          Booked Events
                        </p>
                        <p
                          class="text-lg font-semibold text-gray-700"
                        >
                        {{ $bookingsCount }}
                        </p>
                      </div>
                    </div>
                    <!-- Card -->
                    <div
                      class="flex items-center p-4 bg-white rounded-lg shadow-xs"
                    >
                      <div
                        class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full"
                      >
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                          <path
                            d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"
                          ></path>
                        </svg>
                      </div>
                      <div>
                        <p
                          class="mb-2 text-sm font-medium text-gray-600"
                        >
                          Reservations
                        </p>
                        <p
                          class="text-lg font-semibold text-gray-700"
                        >
                        {{ $reservations->total() }}
                        </p>
                      </div>
                    </div>
                    <!-- Card -->
                    <div
                      class="flex items-center p-4 bg-white rounded-lg shadow-xs"
                    >
                      <div
                        class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full"
                      >
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                          <path
                            fill-rule="evenodd"
                            d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                            clip-rule="evenodd"
                          ></path>
                        </svg>
                      </div>
                      <div>
                        <p
                          class="mb-2 text-sm font-medium text-gray-600"
                        >
                          Pending contacts
                        </p>
                        <p
                          class="text-lg font-semibold text-gray-700"
                        >
                          35
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                
              <div class="container px-6 mx-auto grid">
                <h2 class="my-6 text-2xl font-semibold text-gray-700 relative">
                  Reservations
                </h2>
              </div>
            
              <div class="w-auto m-2 border border-gray overflow-hidden rounded-lg shadow-lg">
                <div class="w-full overflow-x-auto">
                  <table class="w-full whitespace-no-wrap">
                    <!-- Table Header -->
                    <thead>
                      <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b"
                      >
                        <th class="px-4 py-3">User</th>
                        <th class="px-4 py-3">Package</th>
                        <th class="px-4 py-3">Venue</th>
                        <th class="px-4 py-3">Reservation Date</th>
                        <th class="px-4 py-3">Status</th> 
                        <th class="px-4 py-3">Actions</th>
                      </tr>
                    </thead>
                    <!-- Table Body -->
                    <tbody class="bg-white divide-y">
                      @foreach($reservations as $reservation)
                      <tr class="text-gray-700"
                        x-show="search === '' || 
                        '{{ strtolower($reservation->package->package_name) }}'.includes(search.toLowerCase())">
                        <td class="px-4 py-3">
                          <div class="flex items-center text-sm">
                              <p class="font-semibold">{{ $reservation->user->email }}</p>
                          </div>
                        </td>
                        <td class="px-4 py-3">
                          <div class="flex items-center text-sm">
                              <p class="font-semibold">{{ $reservation->package->package_name }}</p>
                          </div>
                        </td>
                        <td class="px-4 py-3">
                          <div class="flex items-center text-sm">
                              <p class="font-semibold">{{ $reservation->venue->name }}</p>
                          </div>
                        </td>
                        <td class="px-4 py-3">
                            <div class="flex items-center text-sm">
                                <p class="font-semibold">{{ $reservation->reservation_date }}</p>
                            </div>
                        </td>
                        <td class="px-4 py-3">
                          <div class="flex items-center text-sm">
                              <p class="font-semibold">{{ $reservation->status }}</p>
                          </div>
                        </td>
                        <td class="px-4 py-3">
                          <div class="flex items-center space-x-4 text-sm">
                            <form action="{{ route('reservation.update',$reservation->reservation_id) }}" method="POST">
                              @csrf
                              @method('PUT')
                              <button
                                class="inline-flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-pink-800 rounded-lg focus:outline-none focus:shadow-outline-gray hover:bg-gray-200"
                                aria-label="Edit"
                                type="submit"
                              >
                                <svg
                                  class="w-5 h-5"
                                  aria-hidden="true"
                                  fill="none"
                                  viewBox="0 0 24 24" 
                                  stroke-width="1.5" 
                                  stroke="currentColor" 
                                >
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" />
                                
                                </svg>
                              </button>
                            </form>

                            {{-- <form action="{{ route('packages.destroy',$package->package_id) }}" method="POST"
                              onsubmit="return confirm('{{ trans('Do you really want to delete it? ') }}');">
                              @csrf
                              @method('DELETE')
                            <button
                              type="submit"
                              class="inline-flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-red-500 rounded-lg focus:outline-none focus:shadow-outline-gray hover:bg-gray-200"
                              aria-label="Delete"
                            >
                              <svg
                                class="w-5 h-5"
                                aria-hidden="true"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                              >
                                <path
                                  fill-rule="evenodd"
                                  d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                  clip-rule="evenodd"
                                ></path>
                              </svg>
                            </button>
                            </form> --}}

                          </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <div
                  class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t bg-gray-50 sm:grid-cols-9"
                >
                  <span class="flex items-center col-span-3">
                    Showing {{ $reservations->firstItem() }}-{{ $reservations->lastItem() }} of {{ $reservations->total() }}
                  </span>
                  <span class="col-span-2"></span>
                  <!-- Pagination -->
                  <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                    {{ $reservations->links('pagination::tailwind') }}
                  </span>
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
          search: '',
        };
      }
      </script>
      

</body>
</html>
