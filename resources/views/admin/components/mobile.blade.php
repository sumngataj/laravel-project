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
            class="ml-11 text-lg font-bold text-gray-800"
            href="{{ url('/admin') }}"
          >
            KALUHAS ADMIN
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
                x-data="{ isActive: {{ Request::is('payments') ? 'true' : 'false' }} }"
                x-show="isActive"
                class="absolute inset-y-0 left-0 w-1 bg-pink-violet rounded-tr-lg rounded-br-lg"
                aria-hidden="true"
              ></span>
              <a
                x-data="{ isActive: {{ Request::is('payments') ? 'true' : 'false' }} }"
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800"
                :class="isActive ? 'text-gray-800' : ''"
                href="{{ url('/payments') }}"
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
                  <path stroke-linecap="round" 
                  stroke-linejoin="round" 
                  d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                </svg>
                <span class="ml-4">Payments</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <span
                x-data="{ isActive: {{ Request::is('bookings') ? 'true' : 'false' }} }"
                x-show="isActive"
                class="absolute inset-y-0 left-0 w-1 bg-pink-violet rounded-tr-lg rounded-br-lg"
                aria-hidden="true"
              ></span>
              <a
                x-data="{ isActive: {{ Request::is('bookings') ? 'true' : 'false' }} }"
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800"
                :class="isActive ? 'text-gray-800' : ''"
                href="{{ url('/bookings') }}"
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
                  <path stroke-linecap="round" 
                  stroke-linejoin="round" 
                  d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                </svg>
                <span class="ml-4">Bookings</span>
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
            <li class="relative px-6 py-3">
              <span
                x-data="{ isActive: {{ Request::is('addons') ? 'true' : 'false' }} }"
                x-show="isActive"
                class="absolute inset-y-0 left-0 w-1 bg-pink-violet rounded-tr-lg rounded-br-lg"
                aria-hidden="true"
              ></span>
              <a
                x-data="{ isActive: {{ Request::is('addons') ? 'true' : 'false' }} }"
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800"
                :class="isActive ? 'text-gray-800' : ''"
                href="{{ url('/addons') }}"
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
                  <path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" />
                </svg>
                <span class="ml-4">Addons</span>
              </a>
            </li>
          </ul>
        </div>
      </aside>

@endsection