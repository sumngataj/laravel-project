@section('footer')
<footer class="w-full bg-pale-black h-auto">
    <div class="flex container justify-center items-center p-8 border-b border-white mx-auto">
        <div class="relative">
            <p class="text-white uppercase text-2xl">Kaluhas <span class="text-5xl font-semibold">WD </span>Events BHL .</p>

        </div>
    </div>
    <div class="flex container justify-start items-start p-8 border-b border-white mx-auto space-x-28">
        <div class="relative space-y-10">
            <div class="relative space-y-4">
                <p class="text-white uppercase font-semibold text-xs tracking-widest">Visitor Information</p>
                <div x-data="{ 'showModal': false }" @keydown.escape="showModal = false">
                    <p class="text-white text-xs tracking-widest cursor-pointer" @click="showModal = true">Getting Here</p>

                    <div class="fixed inset-0 z-30 flex items-center justify-center overflow-auto bg-black bg-opacity-50" x-show="showModal">
                        <div
                            class="max-w-3xl px-6 py-4 mx-auto text-left bg-white rounded shadow-lg"
                            @click.away="showModal = false"
                            x-transition:enter="motion-safe:ease-out duration-300"
                            x-transition:enter-start="opacity-0 scale-90"
                            x-transition:enter-end="opacity-100 scale-100"
                        >
                            <div class="flex items-center justify-between">
                                <h5 class="mr-3 text-black max-w-none"></h5>
        
                                <button type="button" class="z-50 cursor-pointer" @click="showModal = false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                            <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=Kaluhas%20Wedding%20And%20Event%20Specialist%20&amp;t=k&amp;z=15&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 480px; height: 420px;"></iframe><style>.mapouter{position:relative;height:420px;width:480px;background:#fff;} .maprouter a{color:#fff !important;position:absolute !important;top:0 !important;z-index:0 !important;}</style><a href="https://blooketjoin.org/blooket-login/">blooket login</a><style>.gmap_canvas{overflow:hidden;height:420px;width:480px}.gmap_canvas iframe{position:relative;z-index:2}</style></div></div>
                        </div>
                    </div>
                </div>
                <p class="text-white text-xs tracking-widest">FAQs</p>
            </div>
            <div class="relative space-y-4">
                <p class="text-white uppercase font-semibold text-xs tracking-widest">About Kaluhas Bhl</p>
                <p class="text-white text-xs tracking-widest">Company Information</p>
                <p class="text-white text-xs tracking-widest">Contact Us</p>
            </div>
        </div>
        <div class="relative space-y-4">
                <p class="flex items-center text-white uppercase font-semibold text-xs tracking-widest">Links 
    
                </p>
                <p class="text-gray-100 text-xs tracking-widest">Home</p>
                <p class="text-gray-100 text-xs tracking-widest">Packages</p>
                <p class="text-gray-100 text-xs tracking-widest">Venues</p>
        </div>
        <div class="relative space-y-4">
                <p class="text-white uppercase font-semibold text-xs tracking-widest">Reservations</p>
                <p class="text-white text-xs tracking-widest">Book Now</p>

        </div>
        <div class="relative space-y-4">
                <p class="text-white uppercase font-semibold text-xs tracking-widest">Latest Posts</p>
                <p class="text-white text-xs tracking-widest">Company Information</p>
                <p class="text-white text-xs tracking-widest">Company Information</p>
        </div>
        <div class="relative space-y-4">
                <p class="text-white uppercase font-semibold text-xs tracking-widest">Stay Updated</p>
                <p class="text-white text-xs font-light tracking-widest">Sign up for our newsletter about our latest deals and updates.</p>
                <input class="w-full text-white bg-transparent border border-pink-violet hover:ring-pink-violet hover:ring-1 focus:outline-none focus:ring-1 focus:border-pink-violet focus:ring-pink-violet" />
                <p class="text-white uppercase font-semibold text-xs tracking-widest">Follow us on social</p>
                <div class="flex justify-start items-center space-x-5 text-white">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                        </svg>
                    </a>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                        </svg>
                    </a>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </a>
                </div>
                <p class="text-white uppercase font-semibold text-xs tracking-widest">Contact Us</p>
                <div class="flex justify-between items-center">
                <p class="flex items-center space-x-2 text-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                    </svg>
                    <span class="text-white">+63 2 8888 0777</span>
                </p>
                    <p class="flex items-center space-x-2 text-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                        <span class="text-white">bhlkaluhas@gmail.com</span>
                    </p>
                </div>
                <div class="relative">
                  <table border="0" cellpadding="10" cellspacing="0" align="right">
                    <tr>
                        <td align="right"></td>
                    </tr>
                    <tr>
                        <td align="right">
                            <a href="https://www.paypal.com/webapps/mpp/paypal-popup" title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.com/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;">
                                <img src="https://www.paypalobjects.com/webstatic/mktg/logo/bdg_now_accepting_pp_2line_w.png" border="0" alt="Now accepting PayPal">
                            </a>
                        </td>
                    </tr>
                </table>
                </div>
        </div>
    </div>
    <div class="flex container justify-between items-center p-8 mx-auto">
        <div class="flex justify-start">
            <p class="text-white uppercase text-xs">ALL RIGHTS RESERVED. COPYRIGHT 2023 KALUHAS BHL.</p>
        </div>
        <div class="flex justify-end space-x-6">
            <p class="text-white text-xs"><a>Privacy Policy</a></p>
            <p class="text-white text-xs"><a>Terms of Use</a></p>
        </div>
    </div>
</footer>
@endsection