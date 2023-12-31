@section('addReservation')
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
        <div class="mt-1 mb-6">
          <!-- Modal title -->
          <p
            class="mb-3 text-xl font-semibold text-gray-700"
          >
            Add Reservation
          </p>
          <form method="POST" action="{{ route('reservations.store') }}" enctype="multipart/form-data">
            @csrf
        
            <div class="grid grid-cols-1 gap-6">
              <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">

              <label for="package_id" class="block">
                <span class="text-gray-700">Package</span>
                  <select
                    name="package_id"
                    id="package_id"
                    class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    required
                  >
                  @foreach ($packages as $item)
                    <option value="{{ $item->package_id }}">{{ $item->package_name }}</option>
                  @endforeach
                  </select>
                </label>
        
                <label for="venue_id" class="block">
                    <span class="text-gray-700">Venue</span>
                    <select
                        name="venue_id"
                        id="venue_id"
                        class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                        required
                    >
                        @foreach ($venues as $item)
                            <option value="{{ $item->venue_id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </label>
        
                <label for="reservation_date" class="block">
                    <span class="text-gray-700">Reservation Date</span>
                    <input
                        name="reservation_date"
                        id="reservation_date"
                        type="date"
                        class="mt-1 block w-full rounded-md bg-gray-100 border-transparent focus:border-gray-500 focus:bg-white focus:ring-0"
                        required
                        value="{{ date('Y-m-d') }}"
                    />
                </label>
                
            </div>
        
            <footer class="flex flex-col items-center justify-end px-6 py-3 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50">
                <div
                    @click="closeModal"
                    style="cursor: pointer;"
                    class="w-full px-5 py-3 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray"
                >
                    <span>Cancel</span>
                </div>
                <button
                    type="submit"
                    class="w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-pink-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-pink-600 hover:bg-pink-700 focus:outline-none focus:shadow-outline-purple"
                >
                    Submit
                </button>
            </footer>
        </form>
        
      </div>
    </div>

@endsection