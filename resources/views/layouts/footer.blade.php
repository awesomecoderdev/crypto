   {{-- footer --}}
   <footer
       class="lg:mt-10 md:mt-8 sm:mt-6 mt-5 bg-white dark:bg-gray-900 pb-2 text-sm leading-6 divide-y divide-gray-200 dark:divide-gray-800 border-t border-gray-200 dark:border-gray-800 pt-10">
       <div class="max-w-7xl mx-auto  divide-slate-200 px-4 sm:px-6 md:px-8 dark:divide-slate-700">
           <div class="flex">
               <div class="flex-none w-1/2 space-y-10 sm:space-y-8 lg:flex lg:space-y-0">
                   <div class="lg:flex-none lg:w-1/2">
                       <h2 class="font-semibold text-gray-900 dark:text-gray-100">Getting Started</h2>
                       <ul class="mt-3 space-y-2">
                           <li><a class="hover:text-gray-900 dark:hover:text-gray-300"
                                   href="/docs/installation">Installation</a></li>
                           <li><a class="hover:text-gray-900 dark:hover:text-gray-300" href="/docs/editor-setup">Editor
                                   Setup</a></li>
                           <li><a class="hover:text-gray-900 dark:hover:text-gray-300"
                                   href="/docs/browser-support">Browser
                                   Support</a></li>
                           <li><a class="hover:text-gray-900 dark:hover:text-gray-300"
                                   href="/docs/upgrade-guide">Upgrade
                                   Guide</a></li>
                       </ul>
                   </div>
                   <div class="lg:flex-none lg:w-1/2">
                       <h2 class="font-semibold text-gray-900 dark:text-gray-100">Core Concepts</h2>
                       <ul class="mt-3 space-y-2">
                           <li><a class="hover:text-gray-900 dark:hover:text-gray-300" href="/docs/dark-mode">Dark
                                   Mode</a></li>
                           <li><a class="hover:text-gray-900 dark:hover:text-gray-300"
                                   href="/docs/reusing-styles">Reusing
                                   Styles</a></li>
                           <li><a class="hover:text-gray-900 dark:hover:text-gray-300"
                                   href="/docs/adding-custom-styles">Adding Custom Styles</a></li>
                           <li><a class="hover:text-gray-900 dark:hover:text-gray-300"
                                   href="/docs/functions-and-directives">Functions &amp; Directives</a></li>
                       </ul>
                   </div>
               </div>
               <div class="flex-none w-1/2 space-y-10 sm:space-y-8 lg:flex lg:space-y-0">
                   <div class="lg:flex-none lg:w-1/2">
                       <h2 class="font-semibold text-gray-900 dark:text-gray-100">Support</h2>
                       <ul class="mt-3 space-y-2">
                           <li>
                               <a href="{{ route('page.terms') }}"
                                   class="hover:text-gray-900 dark:hover:text-gray-300" target="_blank">Terms
                                   and Conditions</a>
                           </li>
                           <li>
                               <a href="{{ route('page.contact') }}"
                                   class="hover:text-gray-900 dark:hover:text-gray-300" target="_blank">Contact Us</a>
                           </li>
                           <li>
                               <a href="{{ route('page.privacy') }}"
                                   class="hover:text-gray-900 dark:hover:text-gray-300" target="_blank">Privacy
                                   Policy</a>
                           </li>
                           <li>
                               <a href="{{ route('page.advertising') }}"
                                   class="hover:text-gray-900 dark:hover:text-gray-300" target="_blank">Advertising</a>
                           </li>
                           {{-- <li>
                        <a class="hover:text-gray-900 dark:hover:text-gray-300" href="#">Forum</a>
                    </li> --}}
                           <li>
                               <a href="{{ route('page.faq') }}" class="hover:text-gray-900 dark:hover:text-gray-300"
                                   target="_blank">FAQ</a>
                           </li>


                       </ul>
                   </div>
                   <div class="lg:flex-none lg:w-1/2">
                       <h2 class="font-semibold text-gray-900 dark:text-gray-100">Community</h2>
                       <ul class="mt-3 space-y-2">
                           <li>
                               <a class="hover:text-gray-900 dark:hover:text-gray-300"
                                   href="https://facebook.com/CryptoGainersIO" target="_blank">Facebook</a>
                           </li>
                           <li>
                               <a class="hover:text-gray-900 dark:hover:text-gray-300"
                                   href="https://twitter.com/CryptoGainersIO" target="_blank">Twitter</a>
                           </li>
                           <li>
                               <a class="hover:text-gray-900 dark:hover:text-gray-300"
                                   href="https://www.instagram.com/cryptogainers.io/" target="_blank">Instagram</a>
                           </li>
                           <li>
                               <a class="hover:text-gray-900 dark:hover:text-gray-300"
                                   href="https://www.pinterest.com/cryptogainersio" target="_blank">Pinterest</a>
                           </li>

                       </ul>
                   </div>
               </div>
           </div>


       </div>

       <div class="mt-10 pt-2 bg-white dark:bg-gray-900">
           <div class="container flex justify-center items-center">
               <img src="{{ asset('img/logo.png') }}" class="w-10" alt=""><span
                   class="text-gray-500 dark:text-gray-200">CryptoGainers</span>
           </div>
       </div>
   </footer>
