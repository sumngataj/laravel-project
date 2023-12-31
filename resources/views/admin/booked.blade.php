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
                <h2 class="my-6 text-2xl font-semibold text-gray-700 relative">
                    Reservations
                </h2>
            </div>

            <div class="w-auto m-2 mb-10 border border-gray overflow-hidden rounded-lg shadow-lg">
                <div class="w-full overflow-x-auto">
                    <table class="w-full whitespace-no-wrap">
                        <!-- Table Header -->
                        <thead>
                            <tr
                                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b">
                                <th class="px-4 py-3">User</th>
                                <th class="px-4 py-3">Contact Number</th>
                                <th class="px-4 py-3">Package</th>
                                <th class="px-4 py-3">Venue</th>
                                <th class="px-4 py-3">Add-ons</th>
                                <th class="px-4 py-3">Reservation Date</th>
                                <th class="px-4 py-3">Actions</th>
                            </tr>
                        </thead>
                        <!-- Table Body -->
                        <tbody class="bg-white divide-y">
                            @foreach($reservations as $reservation)
                            <tr class="text-gray-700" x-show="search === '' || 
                            '{{ strtolower($reservation->user->email) }}'.includes(search.toLowerCase()) ||
                            '{{ strtolower(date('F j, Y', strtotime($reservation->reservation_date))) }}'.includes(search.toLowerCase())">
                                <td class="px-4 py-3">
                                    <div class="flex items-center text-sm">
                                        <p class="font-semibold">{{ $reservation->email }}</p>
                                    </div>
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center text-sm">
                                        <p class="font-semibold">{{ $reservation->mobile_number }}</p>
                                    </div>
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center text-sm">
                                        @if ($reservation->package)
                                        <p class="font-semibold">{{ $reservation->package->package_name }}</p>
                                        @else
                                        <p class="font-semibold">N/A</p>
                                        @endif
                                    </div>
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center text-sm">
                                        <p class="font-semibold">{{ $reservation->venue->name }}</p>
                                    </div>
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center text-sm">
                                        @if ($reservation->add_ons)
                                        <p class="font-semibold">{{ $reservation->add_ons }}</p>
                                        @else
                                        <p class="font-semibold">N/A</p>
                                        @endif
                                    </div>
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center text-sm">
                                        <p class="font-semibold">
                                            {{ date('F j, Y', strtotime($reservation->reservation_date)) }}</p>
                                    </div>
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center space-x-4 text-sm">
                                        {{-- <form
                                            action="{{ route('reservation.update',$reservation->reservation_id) }}"
                                        method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button
                                            class="inline-flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-pink-800 rounded-lg focus:outline-none focus:shadow-outline-gray hover:bg-gray-200"
                                            aria-label="Edit" type="submit">
                                            <svg class="w-5 h-5" aria-hidden="true" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" />

                                            </svg>
                                        </button>
                                        </form>

                                        <form
                                            action="{{ route('reservation.decline',$reservation->reservation_id) }}"
                                            method="POST"
                                            onsubmit="return confirm('{{ trans('Do you really want to decline reservation? ') }}');">
                                            @csrf
                                            @method('PUT')
                                            <button
                                                class="inline-flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-pink-800 rounded-lg focus:outline-none focus:shadow-outline-gray hover:bg-gray-200"
                                                aria-label="Edit" type="submit">
                                                <svg class="w-5 h-5" fill="pink" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="red" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5m6 4.125l2.25 2.25m0 0l2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                                </svg>
                                            </button>
                                        </form> --}}


                                        <form x-data="{ showForm: '{{ $reservation->status !== 'accept' }}' }"
                                            x-show="showForm"
                                            action="{{ route('reservation.update', $reservation->reservation_id) }}"
                                            method="POST"
                                            onsubmit="return confirm('{{ trans('Do you really want to accept reservation? ') }}');">
                                            @csrf
                                            @method('PUT')
                                            <div x-data="{ tooltip: false }" class="relative inline-flex">
                                                <button x-on:mouseover="tooltip = true"
                                                    x-on:mouseleave="tooltip = false"
                                                    class="inline-flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-pink-800 rounded-lg focus:outline-none focus:shadow-outline-gray hover:bg-gray-200"
                                                    aria-label="Edit" type="submit">
                                                    <svg class="w-5 h-5" aria-hidden="true" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="green">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                </button>
                                                <div class="relative" x-cloak
                                                    x-show.transition.origin.top="tooltip">
                                                    <div
                                                        class="absolute top-0 z-10 w-36 p-2 -mt-1 text-sm leading-tight text-white transform -translate-x-1/2 -translate-y-full bg-green-500 rounded-lg shadow-lg">
                                                        Accept Reservation
                                                    </div>
                                                    <svg class="absolute z-10 w-6 h-6 text-green-500 transform -translate-x-12 -translate-y-3 fill-current stroke-current"
                                                        width="8" height="8">
                                                        <rect x="12" y="-10" width="8" height="8"
                                                            transform="rotate(45)" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </form>

                                        <form action="{{ route('reservation.book', $reservation->reservation_id) }}"
                                            method="POST"
                                            onsubmit="return confirm('{{ trans('Do you really want to book reservation? ') }}');">
                                            @csrf
                                            @method('PUT')
                                            <div x-data="{ tooltip: false }" class="relative inline-flex">
                                                <button x-on:mouseover="tooltip = true"
                                                    x-on:mouseleave="tooltip = false"
                                                    class="inline-flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-pink-800 rounded-lg focus:outline-none focus:shadow-outline-gray hover:bg-gray-200"
                                                    aria-label="Edit" type="submit">
                                                    <svg class="w-5 h-5" aria-hidden="true" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" />
                                                    </svg>
                                                </button>
                                                <div class="relative" x-cloak
                                                    x-show.transition.origin.top="tooltip">
                                                    <div
                                                        class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-white transform -translate-x-1/2 -translate-y-full bg-pink-500 rounded-lg shadow-lg">
                                                        Accept Booking
                                                    </div>
                                                    <svg class="absolute z-10 w-6 h-6 text-pink-500 transform -translate-x-12 -translate-y-3 fill-current stroke-current"
                                                        width="8" height="8">
                                                        <rect x="12" y="-10" width="8" height="8"
                                                            transform="rotate(45)" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </form>


                                        <form
                                            action="{{ route('reservation.decline', $reservation->reservation_id) }}"
                                            method="POST"
                                            onsubmit="return confirm('{{ trans('Do you really want to decline reservation? ') }}');">
                                            @csrf
                                            @method('PUT')
                                            <div x-data="{ tooltip: false }" class="relative inline-flex">
                                                <button x-on:mouseover="tooltip = true"
                                                    x-on:mouseleave="tooltip = false"
                                                    class="inline-flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-pink-800 rounded-lg focus:outline-none focus:shadow-outline-gray hover:bg-gray-200"
                                                    aria-label="Decline" type="submit">
                                                    <svg class="w-5 h-5" fill="pink" viewBox="0 0 24 24"
                                                        stroke-width="1.5" stroke="red" class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5m6 4.125l2.25 2.25m0 0l2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                                    </svg>
                                                </button>
                                                <div class="relative" x-cloak
                                                    x-show.transition.origin.top="tooltip">
                                                    <div
                                                        class="absolute top-0 z-10 w-32 p-2 -mt-1 text-sm leading-tight text-white transform -translate-x-1/2 -translate-y-full bg-red-500 rounded-lg shadow-lg">
                                                        Decline Booking
                                                    </div>
                                                    <svg class="absolute z-10 w-6 h-6 text-red-500 transform -translate-x-12 -translate-y-3 fill-current stroke-current"
                                                        width="8" height="8">
                                                        <rect x="12" y="-10" width="8" height="8"
                                                            transform="rotate(45)" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </form>


                                        {{-- <form action="{{ route('packages.destroy',$package->package_id) }}"
                                        method="POST"
                                        onsubmit="return
                                        confirm('{{ trans('Do you really want to delete it? ') }}');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="inline-flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-red-500 rounded-lg focus:outline-none focus:shadow-outline-gray hover:bg-gray-200"
                                            aria-label="Delete">
                                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                    clip-rule="evenodd"></path>
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
                    class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t bg-gray-50 sm:grid-cols-9">
                    <span class="flex items-center col-span-3">
                        Showing {{ $reservations->firstItem() }}-{{ $reservations->lastItem() }} of
                        {{ $reservations->total() }}
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
