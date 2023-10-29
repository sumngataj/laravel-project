<!DOCTYPE html>
<html x-data="data()" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="{{ asset('images/kaluhasLogoIcon.png') }}">
    <title>Login - Admin Dashboard</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    @vite('resources/css/app.css')
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="../assets/js/init-alpine.js"></script>
  </head>
  <body>
    {{-- @if ($message = Session::get('message'))
        <script>
            window.alert('{{ $message }}');
        </script>
    @endif --}}

    @if (session('message'))
      <script>
      Swal.fire({
          icon: 'warning',
          title: 'Login Required',
          text: "{{ session('message') }}",
          confirmButtonText: 'OK'
      });
      </script>
    @endif


    <div class="flex items-center min-h-screen p-6 bg-gray-50">
      <div
        class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl"
      >
        <div class="flex flex-col overflow-y-auto md:flex-row">
          <div class="h-32 md:h-auto md:w-1/2">
            <img
              aria-hidden="true"
              class="object-cover w-full h-full"
              src="{{ asset('images/login.jpg') }}"
              alt="Office"
            />
          </div>
          <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
              <h1
                class="flex justify-center mb-10 text-xl font-semibold text-gray-700"
              >
                Kaluhas Admin Login
              </h1>
              <form action="{{ route('authenticate') }}" method="POST">
                @csrf
              <label class="block text-sm">
                <span class="text-gray-700">Email</span>
                <input
                  class="block w-full mt-1 border border-gray-300 rounded-lg text-sm focus:border-pink-400 focus:outline-none focus:shadow-outline-pink form-input @error('email_or_name') is-invalid @enderror"
                  placeholder="Username/Email"
                  id="email_or_name" name="email_or_name" value="{{ old('email_or_name') }}" autocomplete="email" required
                />
              </label>
                @if ($errors->has('email_or_name'))
                    <span class="text-red-500">{{ $errors->first('email_or_name') }}</span>
                @endif

              <label class="block mt-4 text-sm">
                <span class="text-gray-700">Password</span>
                <input
                  class="block w-full mt-1 border border-gray-300 rounded-lg text-sm focus:border-pink-400 focus:outline-none focus:shadow-outline-pink form-input @error('password') is-invalid @enderror"
                  id="password" name="password" required
                  placeholder="***************"
                  type="password"
                />
              </label>

              <button type="submit" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-pink-violet border border-transparent rounded-lg active:bg-pink-300 hover:bg-pink-300 focus:outline-none focus:shadow-outline-pink">
                Log in
              </button>
            
              </form>
              <hr class="my-8" />

              {{-- <button
                class="flex items-center justify-center w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-white text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray"
              >
                <svg
                  class="w-4 h-4 mr-2"
                  aria-hidden="true"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                >
                  <path
                    d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"
                  />
                </svg>
                Twitter
              </button> --}}

              {{-- <p class="mt-4">
                <a
                  class="text-sm font-medium text-purple-600 hover:underline"
                  href="./forgot-password.html"
                >
                  Forgot your password?
                </a>
              </p>
              <p class="mt-1">
                <a
                  class="text-sm font-medium text-purple-600 hover:underline"
                  href="./create-account.html"
                >
                  Create account
                </a>
              </p> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>