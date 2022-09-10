@extends("dashboard.admin.template")

@section('title', 'Users | CryptoGainers')

@section('contents')
    <div class="pb-6 mx-auto space-y-10 max-w-7xl">
        <div>

            <div class="flex-col ">
                <div class="md:flex md:justify-between mb-4 px-4 md:p-0">
                    <form class="w-full mb-4 md:mb-0 md:w-2/4 md:flex space-y-4 md:space-y-0 md:space-x-2"
                        action="{{ route('admin.users.index') }}" method="get">
                        <div class="flex rounded-md shadow-sm">
                            <input placeholder="Search" type="text" name="s" value="{{ request()->query('s') }}"
                                class="block w-full border-gray-300 rounded-md shadow-sm transition duration-150 ease-in-out sm:text-sm sm:leading-5 dark:bg-gray-700 dark:text-white dark:border-gray-600  focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 rounded-md ">
                        </div>

                        <div class="relative block md:inline-block text-left">
                            <div>
                                <button type="submit"
                                    class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:hover:bg-gray-600">
                                    Search
                                    <svg xmlns="http://www.w3.org/2000/svg" class="-mr-1 ml-2 h-5 w-5 pointer-events-none"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="relative block md:inline-block text-left">
                            <div>
                                <a href="{{ route('admin.users.create') }}"
                                    class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:hover:bg-gray-600">
                                    Create
                                    <svg xmlns="http://www.w3.org/2000/svg" class="-mr-1 ml-2 h-5 w-5 pointer-events-none "
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="shadow border-b border-gray-200 dark:border-gray-700 ">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-none ">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="table-cell px-3 py-2 md:px-6 md:py-3 text-center md:text-left bg-gray-50 dark:bg-gray-800">
                                <div class="flex items-center">
                                    <input id="checkbox-all" type="checkbox"
                                        class="w-4 h-4 text-primary-600 bg-gray-100 rounded border-gray-300 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-all" class="sr-only">checkbox</label>
                                </div>
                            </th>
                            <th scope="col" class="md:hidden table-cell dark:bg-gray-800"></th>

                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium whitespace-nowrap text-gray-500 uppercase tracking-wider dark:bg-gray-800 dark:text-gray-400">
                                Avatar
                            </th>

                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium whitespace-nowrap text-gray-500 uppercase tracking-wider dark:bg-gray-800 dark:text-gray-400">
                                Name
                            </th>

                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium whitespace-nowrap text-gray-500 uppercase tracking-wider dark:bg-gray-800 dark:text-gray-400">
                                E-mail
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium whitespace-nowrap text-gray-500 uppercase tracking-wider dark:bg-gray-800 dark:text-gray-400">
                                Roll
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium whitespace-nowrap text-gray-500 uppercase tracking-wider dark:bg-gray-800 dark:text-gray-400">
                                Provider
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium whitespace-nowrap text-gray-500 uppercase tracking-wider dark:bg-gray-800 dark:text-gray-400">
                                Verified
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-none">

                        @foreach ($users as $user)
                            <tr class="bg-white dark:bg-gray-700 dark:text-white">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium dark:text-white">
                                    <div class="inline-flex rounded-md shadow-sm">
                                        <input value="{{ $user->id }}" type="checkbox"
                                            class="rounded border-gray-300 text-primary-600 shadow-sm transition duration-150 ease-in-out focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 dark:bg-gray-900 dark:text-white dark:border-gray-600 dark:hover:bg-gray-600 dark:focus:bg-gray-600">
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium dark:text-white">
                                    <img src="{{ $user->avatar }}" class="w-8 h-8 rounded-full">
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium dark:text-white">
                                    {{ $user->name }}
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium dark:text-white">
                                    <p class="truncate w-60">{{ $user->email }}</p>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium dark:text-white">
                                    <span class="bg-green-100 rounded-full px-2 text-green-600 ">
                                        @if ($user->isAdmin)
                                            Admin
                                        @elseif($user->isSupperAdmin)
                                            Supper Admin
                                        @else
                                            User
                                        @endif
                                    </span>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium dark:text-white">
                                    {{ $user->provider == 'google' ? 'Google' : 'Email' }}
                                </td>

                                <td
                                    class="hidden sm:table-cell px-6 py-4 whitespace-nowrap text-sm font-medium dark:text-white">
                                    @if ($user->email_verified_at != null)
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="inline-block h-5 w-5  text-green-500 " fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    @else
                                        <svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-5 w-5  text-red-500 "
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z">
                                            </path>
                                        </svg>
                                    @endif

                                </td>
                            </tr>
                        @endforeach


                    </tbody>

                </table>
            </div>


            <div class="mt-5">
                {{ $users->withQueryString()->links() }}
            </div>
        </div>

    </div>
@endsection
