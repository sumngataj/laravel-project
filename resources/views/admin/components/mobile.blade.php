@section('mobile')

    <div
        x-show="isSideMenuOpen"
        x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
      ></div>
      <aside
        class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white md:hidden"
        x-show="isSideMenuOpen"
        x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0 transform -translate-x-20"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0 transform -translate-x-20"
        @click.away="closeSideMenu"
        @keydown.escape="closeSideMenu"
      >
        <div class="py-4 text-gray-500">
          <a
            class="ml-6 text-lg font-bold text-gray-800"
            href="#"
          >
            Admin Dashboard
          </a>
          <ul class="mt-6">
            <li class="relative px-6 py-3">
                <span
                  x-data="{ isActive: {{ Request::is('admin') ? 'true' : 'false' }} }"
                  x-show="isActive"
                  class="absolute inset-y-0 left-0 w-1 bg-pink-violet rounded-tr-lg rounded-br-lg"
                  aria-hidden="true"
                ></span>
                <a
                  x-data="{ isActive: {{ Request::is('admin') ? 'true' : 'false' }} }"
                  class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800"
                  :class="isActive ? 'text-gray-800' : ''"
                  href="{{ url('/admin') }}"
                >
                  <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                    ></path>
                  </svg>
                  <span class="ml-4">Dashboard</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                <span
                  x-data="{ isActive: {{ Request::is('venues') ? 'true' : 'false' }} }"
                  x-show="isActive"
                  class="absolute inset-y-0 left-0 w-1 bg-pink-violet rounded-tr-lg rounded-br-lg"
                  aria-hidden="true"
                ></span>
                <a
                  x-data="{ isActive: {{ Request::is('venues') ? 'true' : 'false' }} }"
                  class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800"
                  :class="isActive ? 'text-gray-800' : ''"
                  href="{{ url('/venues') }}"
                >
                  <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"
                    ></path>
                  </svg>
                  <span class="ml-4">Venues</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
              <span
                x-data="{ isActive: {{ Request::is('packages') ? 'true' : 'false' }} }"
                x-show="isActive"
                class="absolute inset-y-0 left-0 w-1 bg-pink-violet rounded-tr-lg rounded-br-lg"
                aria-hidden="true"
              ></span>
              <a
                x-data="{ isActive: {{ Request::is('packages') ? 'true' : 'false' }} }"
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800"
                :class="isActive ? 'text-gray-800' : ''"
                href="{{ url('/packages') }}"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"
                  ></path>
                </svg>
                <span class="ml-4">Packages</span>
              </a>
          </li>
          </ul>
        </div>
      </aside>

@endsection