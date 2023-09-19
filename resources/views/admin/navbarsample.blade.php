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

            <main class="h-full pb-16 overflow-y-auto">
              <div class="container grid px-6 mx-auto">
                <h2
                  class="my-6 text-2xl font-semibold text-gray-700"
                >
                  Modals
                </h2>
                <div>
                  <button
                    @click="openModal"
                    class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                  >
                    Open Modal
                  </button>
                </div>
                <div class="container grid px-6 mx-auto">
                  <h2
                    class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
                  >
                    Buttons
                  </h2>
                  <!-- CTA -->
                  <a
                    class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
                    href="https://github.com/estevanmaito/windmill-dashboard"
                  >
                    <div class="flex items-center">
                      <svg
                        class="w-5 h-5 mr-2"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                      >
                        <path
                          d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                        ></path>
                      </svg>
                      <span>Star this project on GitHub</span>
                    </div>
                    <span>View more &RightArrow;</span>
                  </a>
      
                  <!-- Button sizes -->
                  <h4
                    class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
                  >
                    Sizes
                  </h4>
                  <div
                    class="flex flex-col flex-wrap mb-4 space-y-4 md:flex-row md:items-end md:space-x-4"
                  >
                    <!-- Divs are used just to display the examples. Use only the button. -->
                    <div>
                      <button
                        class="px-10 py-4 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                      >
                        Larger button
                      </button>
                    </div>
      
                    <!-- Divs are used just to display the examples. Use only the button. -->
                    <div>
                      <button
                        class="px-5 py-3 font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                      >
                        Large button
                      </button>
                    </div>
      
                    <!-- Divs are used just to display the examples. Use only the button. -->
                    <div>
                      <button
                        class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                      >
                        Regular
                      </button>
                    </div>
      
                    <!-- Divs are used just to display the examples. Use only the button. -->
                    <div>
                      <!-- For disabled buttons ADD these classes: 
                        opacity-50 cursor-not-allowed
      
                        And REMOVE these classes:
                        active:bg-purple-600 hover:bg-purple-700 focus:shadow-outline-purple
                      -->
                      <button
                        class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg opacity-50 cursor-not-allowed focus:outline-none"
                      >
                        Disabled
                      </button>
                    </div>
      
                    <!-- Divs are used just to display the examples. Use only the button. -->
                    <div>
                      <button
                        class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                      >
                        Small
                      </button>
                    </div>
                  </div>
                  <p class="mb-8 text-gray-700 dark:text-gray-400">
                    Apply
                    <code>w-full</code>
                    to any button to create a block level button.
                  </p>
      
                  <!-- Buttons with icons -->
                  <h4
                    class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
                  >
                    Icons
                  </h4>
                  <div
                    class="flex flex-col flex-wrap mb-8 space-y-4 md:flex-row md:items-end md:space-x-4"
                  >
                    <!-- Divs are used just to display the examples. Use only the button. -->
                    <div>
                      <button
                        class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                      >
                        <span>Icon right</span>
                        <svg
                          class="w-4 h-4 ml-2 -mr-1"
                          fill="currentColor"
                          aria-hidden="true"
                          viewBox="0 0 20 20"
                        >
                          <path
                            d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                            clip-rule="evenodd"
                            fill-rule="evenodd"
                          ></path>
                        </svg>
                      </button>
                    </div>
      
                    <!-- Divs are used just to display the examples. Use only the button. -->
                    <div>
                      <button
                        class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                      >
                        <svg
                          class="w-4 h-4 mr-2 -ml-1"
                          fill="currentColor"
                          aria-hidden="true"
                          viewBox="0 0 20 20"
                        >
                          <path
                            d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                            clip-rule="evenodd"
                            fill-rule="evenodd"
                          ></path>
                        </svg>
                        <span>Icon left</span>
                      </button>
                    </div>
      
                    <!-- Divs are used just to display the examples. Use only the button. -->
                    <div>
                      <button
                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                        aria-label="Like"
                      >
                        <svg
                          class="w-5 h-5"
                          aria-hidden="true"
                          fill="currentColor"
                          viewBox="0 0 20 20"
                        >
                          <path
                            d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                            clip-rule="evenodd"
                            fill-rule="evenodd"
                          ></path>
                        </svg>
                      </button>
                    </div>
      
                    <!-- Divs are used just to display the examples. Use only the button. -->
                    <div>
                      <button
                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-full active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                        aria-label="Edit"
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
                      </button>
                    </div>
                  </div>
                </div>
                <div class="py-12">
                  <h2 class="text-2xl font-bold">Unstyled</h2>
                  <p class="mt-2 text-lg text-gray-600">This is how form elements look out of the box.</p>
                  <div class="mt-8 max-w-md">
                    <div class="grid grid-cols-1 gap-6">
                      <label class="block">
                        <span class="text-gray-700">Full name</span>
                        <input type="text" class="mt-1 block w-full" placeholder="" />
                      </label>
                      <label class="block">
                        <span class="text-gray-700">Email address</span>
                        <input type="email" class="mt-1 block w-full" placeholder="john@example.com" />
                      </label>
                      <label class="block">
                        <span class="text-gray-700">When is your event?</span>
                        <input type="date" class="mt-1 block w-full" />
                      </label>
                      <label class="block">
                        <span class="text-gray-700">What type of event is it?</span>
                        <select class="block w-full mt-1">
                          <option>Corporate event</option>
                          <option>Wedding</option>
                          <option>Birthday</option>
                          <option>Other</option>
                        </select>
                      </label>
                      <label class="block">
                        <span class="text-gray-700">Additional details</span>
                        <textarea class="mt-1 block w-full" rows="3"></textarea>
                      </label>
                      <div class="block">
                        <div class="mt-2">
                          <div>
                            <label class="inline-flex items-center">
                              <input type="checkbox" checked />
                              <span class="ml-2">Email me news and special offers</span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="py-12">
                  <h2 class="text-2xl font-bold">Simple</h2>
                  <div class="mt-8 max-w-md">
                    <div class="grid grid-cols-1 gap-6">
                      <label class="block">
                        <span class="text-gray-700">Full name</span>
                        <input
                          type="text"
                          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                          placeholder=""
                        />
                      </label>
                      <label class="block">
                        <span class="text-gray-700">Email address</span>
                        <input
                          type="email"
                          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                          placeholder="john@example.com"
                        />
                      </label>
                      <label class="block">
                        <span class="text-gray-700">When is your event?</span>
                        <input
                          type="date"
                          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        />
                      </label>
                      <label class="block">
                        <span class="text-gray-700">What type of event is it?</span>
                        <select
                          class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        >
                          <option>Corporate event</option>
                          <option>Wedding</option>
                          <option>Birthday</option>
                          <option>Other</option>
                        </select>
                      </label>
                      <label class="block">
                        <span class="text-gray-700">Additional details</span>
                        <textarea
                          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                          rows="3"
                        ></textarea>
                      </label>
                      <div class="block">
                        <div class="mt-2">
                          <div>
                            <label class="inline-flex items-center">
                              <input
                                type="checkbox"
                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50"
                                checked
                              />
                              <span class="ml-2">Email me news and special offers</span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="py-12">
                  <h2 class="text-2xl font-bold">Underline</h2>
                  <div class="mt-8 max-w-md">
                    <div class="grid grid-cols-1 gap-6">
                      <label class="block">
                        <span class="text-gray-700">Full name</span>
                        <input
                          type="text"
                          class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black"
                          placeholder=""
                        />
                      </label>
                      <label class="block">
                        <span class="text-gray-700">Email address</span>
                        <input
                          type="email"
                          class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black"
                          placeholder="john@example.com"
                        />
                      </label>
                      <label class="block">
                        <span class="text-gray-700">When is your event?</span>
                        <input
                          type="date"
                          class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black"
                        />
                      </label>
                      <label class="block">
                        <span class="text-gray-700">What type of event is it?</span>
                        <select
                          class="block w-full mt-0 px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black"
                        >
                          <option>Corporate event</option>
                          <option>Wedding</option>
                          <option>Birthday</option>
                          <option>Other</option>
                        </select>
                      </label>
                      <label class="block">
                        <span class="text-gray-700">Additional details</span>
                        <textarea
                          class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-black"
                          rows="2"
                        ></textarea>
                      </label>
                      <div class="block">
                        <div class="mt-2">
                          <div>
                            <label class="inline-flex items-center">
                              <input
                                type="checkbox"
                                class="border-gray-300 border-2 text-black focus:border-gray-300 focus:ring-black"
                              />
                              <span class="ml-2">Email me news and special offers</span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="py-12">
                  <h2 class="text-2xl font-bold">Solid</h2>
                  <div class="mt-8 max-w-md">
                    <div class="grid grid-cols-1 gap-6">
                      <label class="block">
                        <span class="text-gray-700">Full name</span>
                        <input
                          type="text"
                          class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                          placeholder=""
                        />
                      </label>
                      <label class="block">
                        <span class="text-gray-700">Email address</span>
                        <input
                          type="email"
                          class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                          placeholder="john@example.com"
                        />
                      </label>
                      <label class="block">
                        <span class="text-gray-700">When is your event?</span>
                        <input
                          type="date"
                          class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                        />
                      </label>
                      <label class="block">
                        <span class="text-gray-700">What type of event is it?</span>
                        <select
                          class="block w-full mt-1 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                        >
                          <option>Corporate event</option>
                          <option>Wedding</option>
                          <option>Birthday</option>
                          <option>Other</option>
                        </select>
                      </label>
                      <label class="block">
                        <span class="text-gray-700">Additional details</span>
                        <textarea
                          class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
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
                    </div>
                  </div>
                </div>
      
                  <!-- General elements -->
                  <h4
                    class="mb-4 text-lg font-semibold text-gray-600"
                  >
                    Elements
                  </h4>
                  <div
                    class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md"
                  >
                    <label class="block text-sm">
                      <span class="text-gray-700">Name</span>
                      <input
                        class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                        placeholder="Jane Doe"
                      />
                    </label>
      
                    <div class="mt-4 text-sm">
                      <span class="text-gray-700">
                        Account Type
                      </span>
                      <div class="mt-2">
                        <label
                          class="inline-flex items-center text-gray-600"
                        >
                          <input
                            type="radio"
                            class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple"
                            name="accountType"
                            value="personal"
                          />
                          <span class="ml-2">Personal</span>
                        </label>
                        <label
                          class="inline-flex items-center ml-6 text-gray-600"
                        >
                          <input
                            type="radio"
                            class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple"
                            name="accountType"
                            value="busines"
                          />
                          <span class="ml-2">Business</span>
                        </label>
                      </div>
                    </div>
      
                    <label class="block mt-4 text-sm">
                      <span class="text-gray-700">
                        Requested Limit
                      </span>
                      <select
                        class="block w-full mt-1 text-sm form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple"
                      >
                        <option>$1,000</option>
                        <option>$5,000</option>
                        <option>$10,000</option>
                        <option>$25,000</option>
                      </select>
                    </label>
      
                    <label class="block mt-4 text-sm">
                      <span class="text-gray-700">
                        Multiselect
                      </span>
                      <select
                        class="block w-full mt-1 text-sm form-multiselect focus:border-purple-400 focus:outline-none focus:shadow-outline-purple"
                        multiple
                      >
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                        <option>Option 4</option>
                        <option>Option 5</option>
                      </select>
                    </label>
      
                    <label class="block mt-4 text-sm">
                      <span class="text-gray-700">Message</span>
                      <textarea
                        class="block w-full mt-1 text-sm form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple"
                        rows="3"
                        placeholder="Enter some long form content."
                      ></textarea>
                    </label>
      
                    <div class="flex mt-6 text-sm">
                      <label class="flex items-center">
                        <input
                          type="checkbox"
                          class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple"
                        />
                        <span class="ml-2">
                          I agree to the
                          <span class="underline">privacy policy</span>
                        </span>
                      </label>
                    </div>
                  </div>
      
                  <!-- Validation inputs -->
                  <h4
                    class="mb-4 text-lg font-semibold text-gray-600"
                  >
                    Validation
                  </h4>
                  <div
                    class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md"
                  >
                    <!-- Invalid input -->
                    <label class="block text-sm">
                      <span class="text-gray-700">
                        Invalid input
                      </span>
                      <input
                        class="block w-full mt-1 text-sm border-red-600 focus:border-red-400 focus:outline-none focus:shadow-outline-red form-input"
                        placeholder="Jane Doe"
                      />
                      <span class="text-xs text-red-600">
                        Your password is too short.
                      </span>
                    </label>
      
                    <!-- Valid input -->
                    <label class="block mt-4 text-sm">
                      <span class="text-gray-700">
                        Valid input
                      </span>
                      <input
                        class="block w-full mt-1 text-sm border-green-600 focus:border-green-400 focus:outline-none focus:shadow-outline-green form-input"
                        placeholder="Jane Doe"
                      />
                      <span class="text-xs text-green-600">
                        Your password is strong.
                      </span>
                    </label>
      
                    <!-- Helper text -->
                    <label class="block mt-4 text-sm">
                      <span class="text-gray-700">
                        Helper text
                      </span>
                      <input
                        class="block w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                        placeholder="Jane Doe"
                      />
                      <span class="text-xs text-gray-600">
                        Your password must be at least 6 characters long.
                      </span>
                    </label>
                  </div>
      
                  <!-- Inputs with icons -->
                  <h4
                    class="mb-4 text-lg font-semibold text-gray-600"
                  >
                    Icons
                  </h4>
                  <div
                    class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md"
                  >
                    <label class="block text-sm">
                      <span class="text-gray-700">Icon left</span>
                      <!-- focus-within sets the color for the icon when input is focused -->
                      <div
                        class="relative text-gray-500 focus-within:text-purple-600"
                      >
                        <input
                          class="block w-full pl-10 mt-1 text-sm text-black focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                          placeholder="Jane Doe"
                        />
                        <div
                          class="absolute inset-y-0 flex items-center ml-3 pointer-events-none"
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
                              d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                            ></path>
                          </svg>
                        </div>
                      </div>
                    </label>
      
                    <label class="block mt-4 text-sm">
                      <span class="text-gray-700">Icon right</span>
                      <!-- focus-within sets the color for the icon when input is focused -->
                      <div
                        class="relative text-gray-500 focus-within:text-purple-600"
                      >
                        <input
                          class="block w-full pr-10 mt-1 text-sm text-black focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                          placeholder="Jane Doe"
                        />
                        <div
                          class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none"
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
                              d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                            ></path>
                          </svg>
                        </div>
                      </div>
                    </label>
                  </div>
      
                  <!-- Inputs with buttons -->
                  <h4
                    class="mb-4 text-lg font-semibold text-gray-600"
                  >
                    Buttons
                  </h4>
                  <div
                    class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md"
                  >
                    <label class="block text-sm">
                      <span class="text-gray-700">
                        Button left
                      </span>
                      <div class="relative">
                        <input
                          class="block w-full pl-20 mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                          placeholder="Jane Doe"
                        />
                        <button
                          class="absolute inset-y-0 px-4 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-l-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                        >
                          Click
                        </button>
                      </div>
                    </label>
      
                    <label class="block mt-4 text-sm">
                      <span class="text-gray-700">
                        Button right
                      </span>
                      <div
                        class="relative text-gray-500 focus-within:text-purple-600"
                      >
                        <input
                          class="block w-full pr-20 mt-1 text-sm text-black focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                          placeholder="Jane Doe"
                        />
                        <button
                          class="absolute inset-y-0 right-0 px-4 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-r-md active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                        >
                          Click
                        </button>
                      </div>
                    </label>
                  </div>
                </div>
              





                
              <!-- With actions -->
            <h4
            class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
          >
            Table with actions
          </h4>
          <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
              <table class="w-full whitespace-no-wrap">
                <thead>
                  <tr
                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                  >
                    <th class="px-4 py-3">Client</th>
                    <th class="px-4 py-3">Amount</th>
                    <th class="px-4 py-3">Status</th>
                    <th class="px-4 py-3">Date</th>
                    <th class="px-4 py-3">Actions</th>
                  </tr>
                </thead>
                <tbody
                  class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                >
                  <tr class="text-gray-700 dark:text-gray-400">
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
                          <p class="text-xs text-gray-600 dark:text-gray-400">
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
                        class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                      >
                        Approved
                      </span>
                    </td>
                    <td class="px-4 py-3 text-sm">
                      6/10/2020
                    </td>
                    <td class="px-4 py-3">
                      <div class="flex items-center space-x-4 text-sm">
                        <button
                          class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                          aria-label="Edit"
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
                        </button>
                        <button
                          class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
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
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div
              class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
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
                          class="w-4 h-4 fill-current"
                          aria-hidden="true"
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

    <div
      x-show="isModalOpen"
      x-transition:enter="transition ease-out duration-150"
      x-transition:enter-start="opacity-0"
      x-transition:enter-end="opacity-100"
      x-transition:leave="transition ease-in duration-150"
      x-transition:leave-start="opacity-100"
      x-transition:leave-end="opacity-0"
      class="fixed inset-0 z-50 flex items-center bg-black bg-opacity-30 sm:items-center sm:justify-center"
    >
      <!-- Modal -->
      <div
        x-show="isModalOpen"
        x-transition:enter="transition ease-out duration-150"
        x-transition:enter-start="opacity-0 transform translate-y-1/2"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0  transform translate-y-1/2"
        @click.away="closeModal"
        @keydown.escape="closeModal"
        class="w-1/2 px-6 py-4 overflow-hidden bg-white rounded-t-lg sm:rounded-lg sm:m-4 sm:max-w-xl"
        role="dialog"
        id="modal"
        z-auto
      >
        <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
        <header class="flex justify-end">
          <button
            class="inline-flex items-center justify-center w-6 h-6 text-gray-400 transition-colors duration-150 rounded hover:text-gray-700"
            aria-label="close"
            @click="closeModal"
          >
            <svg
              class="w-4 h-4"
              fill="currentColor"
              viewBox="0 0 20 20"
              role="img"
              aria-hidden="true"
            >
              <path
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"
                fill-rule="evenodd"
              ></path>
            </svg>
          </button>
        </header>
        <!-- Modal body -->
        <div class="mt-4 mb-6">
          <!-- Modal title -->
          <p
            class="mb-2 text-lg font-semibold text-gray-700"
          >
            Modal header
          </p>
          <div class="grid grid-cols-1 gap-6">
            <label class="block">
              <span class="text-gray-700">Full name</span>
              <input
                type="text"
                class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                placeholder=""
              />
            </label>
            <label class="block">
              <span class="text-gray-700">Email address</span>
              <input
                type="email"
                class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                placeholder="john@example.com"
              />
            </label>
            <label class="block">
              <span class="text-gray-700">When is your event?</span>
              <input
                type="date"
                class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
              />
            </label>
            <label class="block">
              <span class="text-gray-700">What type of event is it?</span>
              <select
                class="block w-full mt-1 rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
              >
                <option>Corporate event</option>
                <option>Wedding</option>
                <option>Birthday</option>
                <option>Other</option>
              </select>
            </label>
            <label class="block">
              <span class="text-gray-700">Additional details</span>
              <textarea
                class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
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
          </div>
        </div>
        <footer
          class="flex flex-col items-center justify-end px-6 py-3 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50"
        >
          <button
            @click="closeModal"
            class="w-full px-5 py-3 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray"
          >
            Cancel
          </button>
          <button
            class="w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
          >
            Accept
          </button>
        </footer>
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
