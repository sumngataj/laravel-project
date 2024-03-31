<!DOCTYPE html>
<html x-data="data()" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="{{ asset('images/kaluhasLogoIcon.png') }}">
    <title>Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


    <script>
    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('f02f29b979136936b8a1', {
        cluster: 'ap1'
    });

    function showSuccessToast(message) {
        const Toast = Swal.mixin({
            toast: true,
            position: 'bottom-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer);
                toast.addEventListener('mouseleave', Swal.resumeTimer);
            }
        });

        Toast.fire({
            icon: 'success',
            title: message
        });
    }

    let notificationCount = 0;
    var channel = pusher.subscribe('popup-channel');
    channel.bind('user-register', function(data) {
        console.log('Received Pusher event:', data);
        const notiftime = moment(data.uploaded);
        const message =
            `<span style="font-weight: bold;">${data.name}</span> has a reservation.<br>`;
        const notifmessage =
            `<span style="font-weight: bold; font-size:14px;">${data.name}</span> has a reservation.<br><span style="font-weight:semibold; font-size:12px;">${notiftime.fromNow()}</span>`;
        showSuccessToast(notifmessage);

        const listItem = document.createElement('li');
        listItem.classList.add('text-black', 'font-light', 'p-2', 'text-xs', 'border-b', 'border-gray-300');

        const elapsedTime = document.getElementById('elapsed-time');


        listItem.innerHTML = message;








        const notifCountSpan = document.getElementById('notif-count');
        const incrementValue = 1;
        const notificationsList = document.getElementById(
            'notifications-list');
        notificationsList.insertBefore(listItem, notificationsList.firstChild);
        notificationCount++;
        let currentCount = parseInt(notifCountSpan.textContent);

        currentCount += incrementValue;

        // Update the content of the notif-count span

        notifCountSpan.innerHTML = currentCount;
        const timestamp = document.createElement('span');
        timestamp.classList.add('timestamp');
        listItem.appendChild(timestamp);

        const time = moment(data.uploaded);
        timestamp.innerText = time.fromNow();

        // Update the timestamp every minute
        setInterval(function() {
            timestamp.innerText = time.fromNow();
        }, 60000);

    });
    </script>
</head>

<body>
    @include('admin.components.sidebar')
    @include('admin.components.mobile')
    @include('admin.components.topbar')
    @include('components.chatBox')

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

                    <h2 class="my-6 text-2xl font-semibold text-gray-700">
                        Dashboard
                    </h2>
                    <!-- Cards -->
                    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
                        <!-- Card -->
                        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs">
                            <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <p class="mb-2 text-sm font-medium text-gray-600">
                                    Total clients
                                </p>
                                <p class="text-lg font-semibold text-gray-700">
                                    {{ $usersCount }}
                                </p>
                            </div>
                        </div>
                        <!-- Card -->
                        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs">
                            <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="mb-2 text-sm font-medium text-gray-600">
                                    Booked Events
                                </p>
                                <p class="text-lg font-semibold text-gray-700">
                                    {{ $bookingsCount }}
                                </p>
                            </div>
                        </div>
                        <!-- Card -->
                        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs">
                            <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <p class="mb-2 text-sm font-medium text-gray-600">
                                    Reservations
                                </p>
                                <p class="text-lg font-semibold text-gray-700">
                                    {{ $reservations->total() }}
                                </p>
                            </div>
                        </div>
                        <!-- Card -->
                        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs">
                            <div class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="mb-2 text-sm font-medium text-gray-600">
                                    Pending contacts
                                </p>
                                <p class="text-lg font-semibold text-gray-700">
                                    {{ $reservations->total() }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container px-6 mx-auto grid">
                    <h2 class="my-6 text-2xl font-semibold text-gray-700 relative">
                      Booked Events
                    </h2>
                </div>
                
                <div class="w-auto m-2 border border-gray overflow-hidden rounded-lg shadow-lg">
                    <div class="w-full overflow-x-auto max-h-80">
                      <table class="w-full whitespace-no-wrap">
                        <!-- Table Header -->
                        <thead class="sticky top-0 bg-white">
                          <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b"
                          >
                            <th class="px-4 py-3">User</th>
                            <th class="px-4 py-3">Package</th>
                            <th class="px-4 py-3">Venue</th>
                            <th class="px-4 py-3">Reservation Date</th>
                            <th class="px-4 py-3">Add-ons</th>
                            <th class="px-4 py-3">Status</th>
                            {{-- <th class="px-4 py-3">Actions</th> --}}
                          </tr>
                        </thead>
                        <!-- Table Body -->
                        <tbody class="bg-white divide-y">
                          @foreach($reservations as $reservation)
                          <tr class="text-gray-700" x-show="search === '' || 
                            '{{ strtolower($reservation->user->email) }}'.includes(search.toLowerCase()) || 
                            '{{ strtolower($reservation->venue->name) }}'.includes(search.toLowerCase()) || 
                            '{{ strtolower($reservation->package->package_name ?? '') }}'.includes(search.toLowerCase()) || 
                            '{{ date('F j, Y', strtotime($reservation->reservation_date)) }}'.toLowerCase().includes(search.toLowerCase()) || 
                            '{{ strtolower($reservation->status) }}'.includes(search.toLowerCase())">
                            <td class="px-4 py-3">
                              <div class="flex items-center text-sm">
                                  <p class="font-semibold">{{ $reservation->email }}</p>
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
                                  <p class="font-semibold">{{ $reservation->venue_name }}</p>
                              </div>
                            </td>
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <p class="font-semibold">{{ date('F j, Y', strtotime($reservation->reservation_date)) }}</p>
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
                                    <p class="font-semibold">{{ $reservation->status }}</p>
                                </div>
                              </td>
                            {{-- <td class="px-4 py-3">
                              <div class="flex items-center space-x-4 text-sm">
                                <a
                                  @click="openEditModal"
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
                              </div>
                            </td> --}}
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
                @yield('chatbox')
            </main>
        </div>
    </div>

    @vite('resources/js/app.js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script>
    const csrfToken = '{{ csrf_token() }}';
    </script>
    <script>
    Pusher.logToConsole = true;

    var pusher = new Pusher('f02f29b979136936b8a1', {
        cluster: 'ap1'
    });
    var channel = pusher.subscribe('public');

    //Receive messages
    channel.bind('chat', function(data) {
        $.post("/receive", {
                _token: csrfToken,
                message: data.message,
            })
            .done(function(res) {
                $(".messages > .message").last().after(res);
                $(document).scrollTop($(document).height());
            });
    });

    //Broadcast messages
    $("form").submit(function(event) {
        event.preventDefault();

        $.ajax({
            url: "/broadcast",
            method: 'POST',
            headers: {
                'X-Socket-Id': pusher.connection.socket_id
            },
            data: {
                _token: csrfToken,
                message: $("form #message").val(),
            }
        }).done(function(res) {
            $(".messages > .message").last().after(res);
            $("form #message").val('');
            $(document).scrollTop($(document).height());
        });
    });
    </script>
    <script>
    const toggleChatButton = document.getElementById("toggleChatButton");
    const toggleChatBox = document.getElementById("toggleChat");

    toggleChatButton.addEventListener("click", () => {
        toggleChatBox.classList.toggle("slide-in");
        toggleChatBox.classList.toggle("slide-out");
        toggleChatBox.classList.toggle("hidden");
    });

    document.addEventListener("DOMContentLoaded", function() {
        const timestamps = document.querySelectorAll(".timestamp");
        const uploadedTimes = document.querySelectorAll(".uploaded-time");

        timestamps.forEach(function(timestamp, index) {
            const uploadedTime = uploadedTimes[index].value;
            const time = moment(uploadedTime);
            timestamp.innerText = time.fromNow();

            // Update the timestamp every minute
            setInterval(function() {
                timestamp.innerText = time.fromNow();
            }, 60000);
        });
    });
    </script>
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
    <script>
    const csrfToken = '{{ csrf_token() }}';
    </script>
    <script>
    const notifBtn = document.getElementById('notif-button');
    const notifList = document.getElementById('notifications-list');
    const liElements = notifList.getElementsByTagName('li');
    const notifCountSpan = document.getElementById('notif-count');

    notifBtn.addEventListener('click', function() {
        console.log('before');
        notifList.classList.toggle('hidden');
        console.log('before');
        markNotificationsAsRead();

    });


    function markNotificationsAsRead() {
        fetch('/mark-notifications-as-read', {
                method: 'PUT',
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({}),
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                // Handle the response if needed
                console.log(data);

                // Update the count badge, if necessary
                notifCountSpan.textContent = "0";
            })
            .catch(error => console.error('Error:', error));
    }

    // You may also want to close the notifications list when you click away from it
    document.addEventListener('click', function(event) {
        if (!notifBtn.contains(event.target) && !notifList.contains(event.target)) {
            notifList.classList.add('hidden'); // Add the 'hidden' class to hide the notifications list
        }
    });
    </script>


</body>

</html>