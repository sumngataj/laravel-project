 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Home</title>
     <script type="module" src="/path-to-your-vite-assets/js/main.js"></script>
     @vite('resources/css/app.css')
 </head>

 <body>
     @include('components.navbar')

     @yield('content')
     <div style="height: 65vh;" class="lg:w-full md:w-full sm:w-full bg-gray-100">
     </div>


     <div class="container my-12 mx-auto px-4 md:px-12">
         <div class="flex flex-wrap -mx-1 lg:-mx-4"
             data-replace='{ "translate-y-12": "translate-y-0", "opacity-0": "opacity-100" }'>

             <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">


                 <article class="overflow-hidden rounded-lg shadow-lg">

                     <a href="#">
                         <img alt="Placeholder" class="block h-auto w-full" src="https://picsum.photos/600/400/?random"
                             loading="lazy">
                     </a>

                     <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                         <h1 class="text-lg">
                             <a class="no-underline hover:underline text-black p-2" href="#">
                                 Basic package
                             </a>
                         </h1>
                         <p class="text-grey-darker text-sm font-semibold rounded-full bg-gray-100 p-2 text-yellow-600">
                             ₱10000
                         </p>
                     </header>

                     <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                         <a class="flex items-center no-underline hover:underline text-black ml-2 text-sm" href="#">
                             View Details
                         </a>
                         <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                             <span class="hidden">Like</span>
                             <i class="fa fa-heart"></i>
                         </a>
                     </footer>

                 </article>


             </div>

             <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">


                 <article class="overflow-hidden rounded-lg shadow-lg">

                     <a href="#">
                         <img alt="Placeholder" class="block h-auto w-full" src="https://picsum.photos/600/400/?random">
                     </a>

                     <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                         <h1 class="text-lg">
                             <a class="no-underline hover:underline text-black" href="#">
                                 Minimum package
                             </a>
                         </h1>
                         <p
                             class="text-grey-darker text-sm  font-semibold rounded-full bg-gray-100 p-2 text-yellow-600">
                             ₱14000
                         </p>
                     </header>

                     <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                         <a class="flex items-center no-underline hover:underline text-black ml-2 text-sm" href="#">
                             View Details
                         </a>
                         <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                             <span class="hidden">Like</span>
                             <i class="fa fa-heart"></i>
                         </a>
                     </footer>

                 </article>


             </div>

             <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">


                 <article class="overflow-hidden rounded-lg shadow-lg">

                     <a href="#">
                         <img alt="Placeholder" class="block h-auto w-full" src="https://picsum.photos/600/400/?random">
                     </a>

                     <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                         <h1 class="text-lg">
                             <a class="no-underline hover:underline text-black" href="#">
                                 Medium Package
                             </a>
                         </h1>
                         <p
                             class="text-grey-darker text-sm  font-semibold rounded-full bg-gray-100 p-2 text-yellow-600">
                             ₱35000
                         </p>
                     </header>

                     <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                         <a class="flex items-center no-underline hover:underline text-black ml-2 text-sm" href="#">
                             View Details
                         </a>
                         <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                             <span class="hidden">Like</span>
                             <i class="fa fa-heart"></i>
                         </a>
                     </footer>

                 </article>


             </div>



         </div>
     </div>
     @vite('resources/js/app.js')
     @vite('resources/js/scroll.js')
     @vite('resources/js/clickedBody.js')
     @vite('resources/js/navbar.js')
 </body>

 </html>