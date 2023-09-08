<section class="max-w-2xl px-6 py-8 mx-auto bg-white dark:bg-gray-900">
    <header>
        <a href="#">
            <img class="w-auto h-7 sm:h-8" src="{{ asset('images/kaluhasLogo.png') }}" alt="">
        </a>
    </header>

    <main class="mt-8">
        <h2 class="text-gray-700 dark:text-gray-200">Hi {{$reciptient}},</h2>

        <p class="mt-2 leading-loose text-gray-600 dark:text-gray-300">
            Your email has been registered on <span class="font-semibold ">Kaluhas</span>.
        </p>

        <p
            class="flex items-center justify-center w-10 h-10 text-2xl font-medium text-blue-500 dark:border-blue-400 dark:text-blue-400 ">
            {{$body}}</p>

        <button
            class="px-6 py-2 mt-4 text-sm font-medium tracking-wider text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
            Login
        </button>

        <p class="mt-8 text-gray-600 dark:text-gray-300">
            Thanks, <br>
            Kaluhas BHL
        </p>
    </main>


    <footer class="mt-8">
        <p class="text-gray-500 dark:text-gray-400">
            This email was sent by <a href="#" class="text-blue-600 hover:underline dark:text-blue-400"
                target="_blank">kaluhasbhl@gmail.com</a>.
            If you'd rather not receive this kind of email, you can <a href="#"
                class="text-blue-600 hover:underline dark:text-blue-400">unsubscribe</a> or <a href="#"
                class="text-blue-600 hover:underline dark:text-blue-400">manage your email preferences</a>.
        </p>

        <p class="mt-3 text-gray-500 dark:text-gray-400">© <span id="current-year"></span> Kaluhas BHL. All Rights
            Reserved.</p>
    </footer>
</section>