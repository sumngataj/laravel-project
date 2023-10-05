<!DOCTYPE html>
<html x-data="data()" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="{{ asset('images/kaluhasLogoIcon.png') }}">
    <title>Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<body>
    @include('admin.components.sidebar')
    @include('admin.components.mobile')
    @include('admin.components.topbar')
    @include('admin.modalforms.addPackage')
    @include('admin.modalforms.packageImage')


    <div class="flex h-screen bg-gray-50" :class="{ 'overflow-hidden': isSideMenuOpen }">

        @yield('sidebar')
        @yield('mobile')

        <div class="flex flex-col flex-1 w-full">

            @yield('topbar')

            <main class="h-full overflow-y-auto">
                @if ($message = Session::get('success'))
                <div x-data="{show: true}" x-show="show" x-init="setTimeout(() => show = false, 3000)"
                    class="m-3 p-3 rounded-lg bg-green-100 text-green-700 flex items-center">
                    <span class="mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                            <path fill-rule="evenodd"
                                d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                    <span>{{ $message }}</span>
                </div>

              @endif 

              <div class="container px-6 mx-auto grid">
                <h2 class="my-6 text-2xl font-semibold text-gray-700 relative">
                  Packages
                  <button
                    @click="openModal"
                    class="absolute top-0 right-0 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-pink-600 border border-transparent rounded-lg active:bg-pink-600 hover:bg-pink-700 focus:outline-none focus:shadow-outline-purple"
                  >
                    Add Package
                  </button>
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
                        <th class="px-4 py-3">Package Name</th>
                        <th class="px-4 py-3">Venue</th>
                        <th class="px-4 py-3">Description</th>
                        <th class="px-4 py-3">Price</th>
                        <th class="px-4 py-3">Image</th>
                        <th class="px-4 py-3">Actions</th>
                      </tr>
                    </thead>
                    <!-- Table Body -->
                    <tbody class="bg-white divide-y">
                      @foreach($packages as $package)
                      <tr class="text-gray-700"
                        x-show="search === '' || 
                        '{{ strtolower($package->package_name) }}'.includes(search.toLowerCase()) || 
                        '{{ strtolower($package->price) }}'.includes(search.toLowerCase())">                    
                        <td class="px-4 py-3">
                          <div class="flex items-center text-sm">
                              <p class="font-semibold">{{ $package->package_name }}</p>
                          </div>
                        </td>
                        <td class="px-4 py-3">
                          <div class="flex items-center text-sm">
                              <p class="font-semibold">{{ $package->venue->name }}</p>
                          </div>
                        </td>
                        <td class="px-4 py-3">
                          <div class="flex items-center text-sm">
                              <p class="font-semibold">{{ $package->description }}</p>
                          </div>
                        </td>
                        <td class="px-4 py-3">
                          <div class="flex items-center text-sm">
                              <p class="font-semibold">{{ $package->price }}</p>
                          </div>
                        </td>
                        <td class="px-4 py-3">
                          <div class="flex items-center text-sm">
                            <button
                              class="inline-flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-pink-800 rounded-lg focus:outline-none focus:shadow-outline-gray hover:bg-gray-200"
                              @click="openImageModal('{{ asset('images/package_images/' . $package->image_path) }}')"
                            >
                              <svg
                                class="w-5 h-5 mr-2"
                                aria-hidden="true"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                              >
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                              </svg>
                              View Image
                            </button>
                          </div>
                        </td>
                        <td class="px-4 py-3">
                          <div class="flex items-center space-x-4 text-sm">
                            <a
                              {{-- @click="openEditModal" --}}
                              class="inline-flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-pink-800 rounded-lg focus:outline-none focus:shadow-outline-gray hover:bg-gray-200"
                              aria-label="Edit"
                              href="{{ route('packages.edit',$package->package_id) }}"
                            >
                              <svg
                                class="w-5 h-5"
                                aria-hidden="true"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                              >
                                <path
                                  d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                                ></path>
                              </svg>
                            </a>

                            <form action="{{ route('packages.destroy',$package->package_id) }}" method="POST"
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
                            </form>

                          </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>

                </div>

                <div class="w-auto m-2 border border-gray overflow-hidden rounded-lg shadow-lg">
                    <div class="w-full overflow-x-auto">
                        <table class="w-full whitespace-no-wrap">
                            <!-- Table Header -->
                            <thead>
                                <tr
                                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b">
                                    <th class="px-4 py-3">Package Name</th>
                                    <th class="px-4 py-3">Description</th>
                                    <th class="px-4 py-3">Price</th>
                                    <th class="px-4 py-3">Image</th>
                                    <th class="px-4 py-3">Actions</th>
                                </tr>
                            </thead>
                            <!-- Table Body -->
                            <tbody class="bg-white divide-y">
                                @foreach($packages as $package)
                                <tr class="text-gray-700" x-show="search === '' || 
                        '{{ strtolower($package->package_name) }}'.includes(search.toLowerCase()) || 
                        '{{ strtolower($package->price) }}'.includes(search.toLowerCase())">
                                    <td class="px-4 py-3">
                                        <div class="flex items-center text-sm">
                                            <p class="font-semibold">{{ $package->package_name }}</p>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center text-sm">
                                            <p class="font-semibold">{{ substr($package->description, 0, 100) }}...</p>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center text-sm">
                                            <p class="font-semibold">{{ $package->price }}</p>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center text-sm">
                                            <button
                                                class="inline-flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-pink-800 rounded-lg focus:outline-none focus:shadow-outline-gray hover:bg-gray-200"
                                                @click="openImageModal('{{ asset('images/package_images/' . $package->image_path) }}')">
                                                <svg class="w-5 h-5 mr-2" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                                </svg>
                                                View Image
                                            </button>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center space-x-4 text-sm">
                                            <a {{-- @click="openEditModal" --}}
                                                class="inline-flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-pink-800 rounded-lg focus:outline-none focus:shadow-outline-gray hover:bg-gray-200"
                                                aria-label="Edit"
                                                href="{{ route('packages.edit',$package->package_id) }}">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                    </path>
                                                </svg>
                                            </a>

                                            <form action="{{ route('packages.destroy',$package->package_id) }}"
                                                method="POST"
                                                onsubmit="return confirm('{{ trans('Do you really want to delete it? ') }}');">
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
                                            </form>

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
                            Showing {{ $packages->firstItem() }}-{{ $packages->lastItem() }} of {{ $packages->total() }}
                        </span>
                        <span class="col-span-2"></span>
                        <!-- Pagination -->
                        <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                            {{ $packages->links('pagination::tailwind') }}
                        </span>
                    </div>
                </div>

            </main>
        </div>
    </div>

    @yield('addPackage')
    @yield('imageModal')


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
            //Image Modal
            isImageModalOpen: false,
            trapImageCleanup: null,
            modalImagePath: '',

            openImageModal(imagePath) {
                this.modalImagePath = imagePath;
                this.isImageModalOpen = true;
            },
            closeImageModal() {
                this.isImageModalOpen = false;
            },


        };
    }
    </script>

</body>

</html>