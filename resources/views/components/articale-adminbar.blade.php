<div class="fixed  z-50">
    @can('update')
        <div
            class="w-full border bg-white dark:bg-slate-800  border-primary-100 dark:border-primary-100/20 mt-5 p-1 rounded-lg shadow-md drop-shadow-lg">
            <div class="relative flex flex-col items-center ">
                <a href="{{ route('admin.dashboard') }}"
                    class="lg:text-sm lg:leading-6 font-medium text-slate-700 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300">
                    <div
                        class="items-center pointer-events-none mx-1 bg-gray-50/5 rounded-md ring-1 ring-slate-900/5 shadow-sm group-hover:shadow group-hover:ring-slate-900/10 dark:ring-0 dark:shadow-none dark:group-hover:shadow-none dark:group-hover:highlight-white/10 group-hover:shadow-primary-200 dark:group-hover:bg-primary-500 dark:bg-slate-400/10 dark:highlight-white/5">

                        <svg class="h-7 w-5 m-1" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M6 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V8ZM6 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2v-1Z"
                                class="fill-purple-400 group-hover:fill-purple-500 dark:group-hover:fill-purple-300 dark:fill-slate-600">
                            </path>
                            <path d="M13 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2V8Z"
                                class="fill-purple-200 group-hover:fill-purple-300 dark:group-hover:fill-white dark:fill-slate-400">
                            </path>
                            <path d="M13 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1Z"
                                class="fill-purple-400 group-hover:fill-purple-500 dark:group-hover:fill-purple-300 dark:fill-slate-600">
                            </path>
                        </svg>

                        {{-- <span class="pr-2">Dashboard</span> --}}
                    </div>
                </a>

                <a href="{{ route('admin.articles.create') }}"
                    class="lg:text-sm lg:leading-6 font-medium text-slate-700 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300">
                    <div
                        class="items-center pointer-events-none mx-1 bg-gray-50/5 rounded-md ring-1 ring-slate-900/5 shadow-sm group-hover:shadow group-hover:ring-slate-900/10 dark:ring-0 dark:shadow-none dark:group-hover:shadow-none dark:group-hover:highlight-white/10 group-hover:shadow-primary-200 dark:group-hover:bg-primary-500 dark:bg-slate-400/10 dark:highlight-white/5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-5 m-1 p-0.5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        {{-- <span class="pr-2">Create</span> --}}
                    </div>
                </a>

                <a href="{{ route('admin.articles.edit', $article->id) }}"
                    class="lg:text-sm lg:leading-6 font-medium text-slate-700 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300">
                    <div
                        class="items-center pointer-events-none mx-1 bg-gray-50/5 rounded-md ring-1 ring-slate-900/5 shadow-sm group-hover:shadow group-hover:ring-slate-900/10 dark:ring-0 dark:shadow-none dark:group-hover:shadow-none dark:group-hover:highlight-white/10 group-hover:shadow-primary-200 dark:group-hover:bg-primary-500 dark:bg-slate-400/10 dark:highlight-white/5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-5 m-1 p-0.5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                            </path>
                        </svg>
                        {{-- <span class="pr-2">Edit</span> --}}
                    </div>
                </a>

                <a href="{{ route('admin.coins.index') }}"
                    class=" lg:text-sm lg:leading-6  font-medium text-slate-700 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300">
                    <div
                        class="items-center pointer-events-none mx-1 bg-gray-50/5 rounded-md ring-1 ring-slate-900/5 shadow-sm group-hover:shadow group-hover:ring-slate-900/10 dark:ring-0 dark:shadow-none dark:group-hover:shadow-none dark:group-hover:highlight-white/10 group-hover:shadow-primary-200 dark:group-hover:bg-primary-500 dark:bg-slate-400/10 dark:highlight-white/5">
                        <svg class="h-7 w-5 m-1 p-0.5" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor"
                            stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                class="fill-pink-50 group-hover:fill-pink-100 dark:group-hover:fill-transparent dark:fill-transparent"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                        {{-- <span class="pr-2">Coins</span> --}}
                    </div>
                </a>

                @can('isSupperAdmin')
                    <a href="{{ route('admin.exchanges.index') }}"
                        class=" lg:text-sm lg:leading-6  font-medium text-slate-700 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300">
                        <div
                            class="items-center pointer-events-none mx-1 bg-gray-50/5 rounded-md ring-1 ring-slate-900/5 shadow-sm group-hover:shadow group-hover:ring-slate-900/10 dark:ring-0 dark:shadow-none dark:group-hover:shadow-none dark:group-hover:highlight-white/10 group-hover:shadow-primary-200 dark:group-hover:bg-primary-500 dark:bg-slate-400/10 dark:highlight-white/5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="  h-7 w-5 m-1 p-0.5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    class="fill-indigo-100 group-hover:fill-indigo-200/80 dark:fill-transparent dark:group-hover:fill-transparent"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                                </path>
                            </svg>
                            {{-- <span class="pr-2">Exchanges</span> --}}
                        </div>
                    </a>

                    <a href="{{ route('admin.users.index') }}"
                        class=" lg:text-sm lg:leading-6  font-medium text-slate-700 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300">
                        <div
                            class="items-center pointer-events-none mx-1 bg-gray-50/5 rounded-md ring-1 ring-slate-900/5 shadow-sm group-hover:shadow group-hover:ring-slate-900/10 dark:ring-0 dark:shadow-none dark:group-hover:shadow-none dark:group-hover:highlight-white/10 group-hover:shadow-primary-200 dark:group-hover:bg-primary-500 dark:bg-slate-400/10 dark:highlight-white/5">
                            <svg class="h-7 w-5 m-1 p-0.5 " viewBox="0 0 24 24" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9 3C6.23858 3 4 5.23858 4 8C4 10.7614 6.23858 13 9 13C11.7614 13 14 10.7614 14 8C14 5.23858 11.7614 3 9 3ZM6 8C6 6.34315 7.34315 5 9 5C10.6569 5 12 6.34315 12 8C12 9.65685 10.6569 11 9 11C7.34315 11 6 9.65685 6 8Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M16.9084 8.21828C16.6271 8.07484 16.3158 8.00006 16 8.00006V6.00006C16.6316 6.00006 17.2542 6.14956 17.8169 6.43645C17.8789 6.46805 17.9399 6.50121 18 6.5359C18.4854 6.81614 18.9072 7.19569 19.2373 7.65055C19.6083 8.16172 19.8529 8.75347 19.9512 9.37737C20.0496 10.0013 19.9987 10.6396 19.8029 11.2401C19.6071 11.8405 19.2719 12.3861 18.8247 12.8321C18.3775 13.2782 17.8311 13.6119 17.2301 13.8062C16.6953 13.979 16.1308 14.037 15.5735 13.9772C15.5046 13.9698 15.4357 13.9606 15.367 13.9496C14.7438 13.8497 14.1531 13.6038 13.6431 13.2319L13.6421 13.2311L14.821 11.6156C15.0761 11.8017 15.3717 11.9248 15.6835 11.9747C15.9953 12.0247 16.3145 12.0001 16.615 11.903C16.9155 11.8059 17.1887 11.639 17.4123 11.416C17.6359 11.193 17.8035 10.9202 17.9014 10.62C17.9993 10.3198 18.0247 10.0006 17.9756 9.68869C17.9264 9.37675 17.8041 9.08089 17.6186 8.82531C17.4331 8.56974 17.1898 8.36172 16.9084 8.21828Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M19.9981 21C19.9981 20.475 19.8947 19.9551 19.6938 19.47C19.4928 18.9849 19.1983 18.5442 18.8271 18.1729C18.4558 17.8017 18.0151 17.5072 17.53 17.3062C17.0449 17.1053 16.525 17.0019 16 17.0019V15C16.6821 15 17.3584 15.1163 18 15.3431C18.0996 15.3783 18.1983 15.4162 18.2961 15.4567C19.0241 15.7583 19.6855 16.2002 20.2426 16.7574C20.7998 17.3145 21.2417 17.9759 21.5433 18.7039C21.5838 18.8017 21.6217 18.9004 21.6569 19C21.8837 19.6416 22 20.3179 22 21H19.9981Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M16 21H14C14 18.2386 11.7614 16 9 16C6.23858 16 4 18.2386 4 21H2C2 17.134 5.13401 14 9 14C12.866 14 16 17.134 16 21Z"
                                    fill="currentColor"></path>
                            </svg>
                            {{-- <span class="pr-2">Users</span> --}}
                        </div>
                    </a>

                    <a href="{{ route('admin.settings') }}"
                        class=" lg:text-sm lg:leading-6  font-medium text-slate-700 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300">
                        <div
                            class="items-center pointer-events-none mx-1 bg-gray-50/5 rounded-md ring-1 ring-slate-900/5 shadow-sm group-hover:shadow group-hover:ring-slate-900/10 dark:ring-0 dark:shadow-none dark:group-hover:shadow-none dark:group-hover:highlight-white/10 group-hover:shadow-primary-200 dark:group-hover:bg-primary-500 dark:bg-slate-400/10 dark:highlight-white/5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-5 m-1 p-0.5 " fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z">
                                </path>
                            </svg>
                            {{-- <span class="pr-2">Settings</span> --}}
                        </div>
                    </a>
                @endcan

                <div
                    class=" lg:text-sm lg:leading-6 cursor-pointer font-medium text-slate-700 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300">

                    <div @click="edit =!edit"
                        class="items-center cursor-pointer  mx-1  bg-gray-50/5 rounded-md ring-1 ring-slate-900/5 shadow-sm group-hover:shadow group-hover:ring-slate-900/10 dark:ring-0 dark:shadow-none dark:group-hover:shadow-none dark:group-hover:highlight-white/10 group-hover:shadow-primary-200 dark:group-hover:bg-primary-500 dark:bg-slate-400/10 dark:highlight-white/5">
                        <svg x-show="edit" xmlns="http://www.w3.org/2000/svg" class="text-primary-400 h-7 w-5 m-1 p-0.5"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                            <path fill-rule="evenodd"
                                d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                clip-rule="evenodd" />
                        </svg>

                        <svg x-show="!edit" xmlns="http://www.w3.org/2000/svg" class="text-primary-400 h-7 w-5 m-1 p-0.5"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M3.707 2.293a1 1 0 00-1.414 1.414l14 14a1 1 0 001.414-1.414l-1.473-1.473A10.014 10.014 0 0019.542 10C18.268 5.943 14.478 3 10 3a9.958 9.958 0 00-4.512 1.074l-1.78-1.781zm4.261 4.26l1.514 1.515a2.003 2.003 0 012.45 2.45l1.514 1.514a4 4 0 00-5.478-5.478z"
                                clip-rule="evenodd" />
                            <path
                                d="M12.454 16.697L9.75 13.992a4 4 0 01-3.742-3.741L2.335 6.578A9.98 9.98 0 00.458 10c1.274 4.057 5.065 7 9.542 7 .847 0 1.669-.105 2.454-.303z" />
                        </svg>
                    </div>
                </div>

            </div>
        </div>
    @endcan
</div>
