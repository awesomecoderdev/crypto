@php
$navItems = [
    [
        'name' => 'Home',
        'link' => route('page.index'),
    ],
    [
        'name' => 'Coins',
        'link' => route('coins.index'),
    ],
    [
        'name' => 'Exchanges',
        'link' => route('exchanges.index'),
    ],
    [
        'name' => 'News',
        'link' => route('news.index'),
    ],
    [
        'name' => 'Category',
        'link' => route('category.index'),
    ],
];

@endphp
<div class=" bg-white dark:bg-slate-900" x-data="{ open: false }" @click.outside="open = false"
    @close.stop="open = false">
    {{-- mobile menu --}}
    <div class="fixed inset-0 flex z-40 lg:hidden" role="dialog" aria-modal="true" x-show="open">
        <div class="fixed inset-0 bg-black bg-opacity-25" aria-hidden="true" x-show="open"
            x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"></div>
        <div class=" relative max-w-xs w-full bg-white dark:bg-slate-900 shadow-xl pb-12 flex flex-col overflow-y-auto"
            x-show="open" x-transition:enter="transition ease-in-out duration-300 transform"
            x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
            x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0"
            x-transition:leave-end="-translate-x-full">
            <div class="px-4 py-3 flex">
                <button @click="open = ! open" type="button"
                    class="bg-white dark:bg-slate-800 p-2 rounded-md text-gray-400">
                    <span class="sr-only">Close menu</span>
                    <!-- Heroicon name: outline/x -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                {{-- logo --}}
                <div class="ml-4 flex  lg:ml-0">
                    <a href="{{ route('page.index') }}" class="flex items-center">
                        <div>
                            <span class="sr-only">CryptoGainers</span>
                            <img class="h-10 w-auto" src="{{ asset('img/logo.png') }}" alt="CryptoGainers">
                        </div>
                        <span class="text-gray-500 dark:text-gray-200 font-medium text-md">CryptoGainers </span>
                    </a>
                </div>
            </div>
            {{-- nav --}}
            <div class="border-t border-gray-200/70 dark:border-gray-200/10 py-6 px-4 space-y-6">
                @foreach ($navItems as $item)
                    <div class="flow-root">
                        <a href="{{ $item['link'] }}"
                            class="-m-2 p-2 block font-medium text-slate-900 dark:text-gray-400">
                            {{ $item['name'] }}</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    {{-- nav menu --}}
    <header class="relative bg-white dark:bg-slate-900 border-b border-gray-200 dark:border-gray-800 ">
        <nav aria-label="Top" class="max-w-7xl mx-auto  xl:px-0  lg:px-8 sm:px-6 px-4 ">
            <div class="">
                <div class="h-16 flex items-center">
                    <!-- Mobile menu toggle, controls the 'mobileMenuOpen' state. -->
                    <button @click="open = ! open" type="button"
                        class="bg-white dark:bg-slate-800 p-2 rounded-md text-gray-400 lg:hidden">
                        <span class="sr-only">Open menu</span>
                        <!-- Heroicon name: outline/menu -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                    {{-- logo --}}
                    <div class="ml-4 flex  lg:ml-0">
                        <a href="{{ route('page.index') }}" class="flex items-center">
                            <div>
                                <span class="sr-only">CryptoGainers</span>
                                <img class="h-10 w-auto" src="{{ asset('img/logo.png') }}" alt="CryptoGainers">
                            </div>
                            <span class="text-gray-500 dark:text-gray-200 font-medium text-md">CryptoGainers </span>
                        </a>
                    </div>
                    {{-- nav menu --}}
                    <div class="hidden lg:ml-8 lg:block lg:self-stretch">
                        <div class="h-full flex space-x-8">
                            @foreach ($navItems as $item)
                                <a href="{{ $item['link'] }}"
                                    class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800 dark:text-gray-200 hover:dark:text-gray-50 transition">
                                    {{ $item['name'] }}</a>
                            @endforeach
                        </div>
                    </div>

                    {{-- auth --}}
                    <div class="ml-auto flex items-center">
                        @if (Route::has('login'))
                            <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
                                @auth
                                    <a href="{{ route('admin.dashboard') }}"
                                        class="text-gray-700 hover:text-gray-800 dark:text-gray-200 hover:dark:text-gray-50 ">
                                        {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                                </svg> --}}
                                        {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                                        </svg> --}}
                                        {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                                </svg> --}}
                                    </a>
                                @else
                                    <a href="{{ route('login') }}"
                                        class=" border-none lg:border-slate-200 sm:border-slate-600 ml-6 pl-6 dark:border-slate-800 flex items-center text-sm font-medium text-gray-700 hover:text-gray-800 dark:text-gray-200 hover:dark:text-gray-50 transition">Sign
                                        in
                                        <svg aria-hidden="true" width="11" height="10" fill="none"
                                            class="flex-none ml-1.5 text-gray-400 group-hover:text-teal-400">
                                            <path
                                                d="M5.593 9.638L10.232 5 5.593.36l-.895.89 3.107 3.103H0v1.292h7.805L4.698 8.754l.895.884z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </a>

                                    {{-- @if (Route::has('register'))
                                        <span class="h-6 w-px bg-gray-200" aria-hidden="true"></span>
                                        <a href="{{ route('register') }}"
                                            class="text-sm font-medium text-gray-700 hover:text-gray-800 dark:text-gray-200 hover:dark:text-gray-50 transition">Create
                                            account</a>
                                    @endif --}}
                                @endauth
                            </div>
                        @endif
                    </div>
                    {{-- change theme --}}
                    <div class="relative">
                        <div class="flex items-center ">
                            @auth
                                {{-- <a href="{{ route('wishlist') }}"
                                    class="mr-3 text-gray-700 hover:text-gray-800 dark:text-gray-200 hover:dark:text-gray-50 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </a> --}}

                                {{-- <a href="{{  route('admin.dashboard') }}"
                                    class="lg:hidden text-gray-700 hover:text-gray-800 dark:text-gray-200 hover:dark:text-gray-50 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                                    </svg>
                                </a> --}}
                                @can('isUser')
                                    <a href="{{ route('user.dashboard.index') }}"
                                        class="text-gray-700 hover:text-gray-800 dark:text-gray-200 hover:dark:text-gray-50 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                                        </svg>
                                    </a>
                                @endcan

                                @can('isAdmin')
                                    <a href="{{ route('admin.dashboard') }}"
                                        class="text-gray-700 hover:text-gray-800 dark:text-gray-200 hover:dark:text-gray-50 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                                        </svg>
                                    </a>
                                @endcan
                            @else
                                <a href="{{ route('login') }}"
                                    class="lg:hidden text-gray-700 hover:text-gray-800 dark:text-gray-200 hover:dark:text-gray-50 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                                    </svg>
                                </a>
                            @endauth
                            <x-change-theme />
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</div>
