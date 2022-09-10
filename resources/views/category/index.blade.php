@extends('layouts.app')

{{-- title --}}
@section('title', 'Cryptocurrency Prices, Charts And Market Capitalizations : CryptoGainers')


@section('nav')
    {{-- start:nav --}}
    {{-- @include('layouts.nav') --}}
    {{-- end:nav --}}
@endsection


@section('content')
    {{-- start:nav --}}
    @include('layouts.nav')
    {{-- end:nav --}}



    <div class="container lg:my-4 my-2 lg:p-4 md:p-3 p-2">
        <div class="flex flex-col mb-5">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-none">
                            <thead class="bg-white">
                                <tr>
                                    {{-- <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium whitespace-nowrap text-gray-500 uppercase tracking-wider dark:bg-gray-800 dark:text-gray-400">
                                        Icon
                                    </th> --}}

                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium whitespace-nowrap text-gray-500 uppercase tracking-wider dark:bg-gray-800 dark:text-gray-400">
                                        Name
                                    </th>

                                    <th scope="col"
                                        class="hidden md:table-cell px-6 py-3 text-left text-xs font-medium whitespace-nowrap text-gray-500 uppercase tracking-wider dark:bg-gray-800 dark:text-gray-400">
                                        Coins
                                    </th>

                                    <th scope="col"
                                        class="text-center hidden md:table-cell px-6 py-3 text-xs font-medium whitespace-nowrap text-gray-500 uppercase tracking-wider dark:bg-gray-800 dark:text-gray-400">
                                        24h %
                                    </th>

                                    <th scope="col"
                                        class="text-center hidden md:table-cell px-6 py-3 text-xs font-medium whitespace-nowrap text-gray-500 uppercase tracking-wider dark:bg-gray-800 dark:text-gray-400">
                                        7d %
                                    </th>

                                    {{-- <th scope="col"
                                        class="text-center hidden sm:table-cell px-6 py-3 text-xs font-medium whitespace-nowrap text-gray-500 uppercase tracking-wider dark:bg-gray-800 dark:text-gray-400">
                                        30d %
                                    </th> --}}

                                    <th scope="col"
                                        class="hidden md:table-cell px-6 py-3 text-left text-xs font-medium whitespace-nowrap text-gray-500 uppercase tracking-wider dark:bg-gray-800 dark:text-gray-400">
                                        Circulating Supply
                                    </th>

                                    {{-- <th scope="col"
                                        class="hidden md:table-cell px-6 py-3 text-left text-xs font-medium whitespace-nowrap text-gray-500 uppercase tracking-wider dark:bg-gray-800 dark:text-gray-400">
                                        Total Supply
                                    </th> --}}
                                    {{-- <th scope="col"
                                        class="hidden md:table-cell px-6 py-3 text-left text-xs font-medium whitespace-nowrap text-gray-500 uppercase tracking-wider dark:bg-gray-800 dark:text-gray-400">
                                        Max Supply
                                    </th> --}}

                                    {{-- <th scope="col"
                                        class="hidden md:table-cell px-6 py-3 text-left text-xs font-medium whitespace-nowrap text-gray-500 uppercase tracking-wider dark:bg-gray-800 dark:text-gray-400">
                                        Market Cap
                                    </th> --}}

                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium whitespace-nowrap text-gray-500 uppercase tracking-wider dark:bg-gray-800 dark:text-gray-400">
                                        Last 7 Days
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-200/30">


                                @foreach ($categories as $category)
                                    <tr
                                        class="bg-white  hover:bg-gray-50 dark:bg-gray-700/30 hover:dark:bg-gray-800/100 dark:text-white">

                                        {{-- <td class="px-6 py-4 whitespace-nowrap text-sm font-medium dark:text-white">
                                            <img src="{{ $coin->meta->logo }}" class="w-8 h-8 rounded-full">
                                        </td> --}}

                                        <td class="md:px-6 px-1 py-4 whitespace-nowrap text-sm font-medium dark:text-white">
                                            <a class="relative"
                                                href="{{ route('category.show', $category->slug) }}">
                                                {{ $category->name() }} ({{ count($category->coin) }})
                                            </a>
                                        </td>

                                        <td
                                            class="hidden md:table-cell px-6 py-4 whitespace-nowrap text-sm font-medium dark:text-white">
                                            <p class="truncate w-60">
                                                {{ implode(', ', array_slice(Arr::pluck($category->coin, 'name'), 0, 3)) }}
                                            </p>
                                        </td>

                                        <td class="hidden md:table-cell px-6 py-4 whitespace-nowrap text-sm font-medium ">
                                            <span class="relative flex items-center">

                                            </span>
                                        </td>

                                        <td class="hidden md:table-cell px-6 py-4 whitespace-nowrap text-sm font-medium  ">

                                        </td>

                                        {{-- <td
                                            class="hidden md:table-cell px-6 py-4 whitespace-nowrap text-sm font-medium {{ $coin->isNagitive($coin->quote->USD->percent_change_30d) ? 'text-red-500' : 'text-green-500' }}  ">

                                            <span class="relative flex items-center">
                                                @if ($coin->isNagitive($coin->quote->USD->percent_change_30d))
                                                    <svg class="h-5 w-5 mr-1" xmlns="http://www.w3.org/2000/svg"
                                                        fill="currentColor">
                                                        <path d="m11.998 17 7-8h-14z"></path>
                                                    </svg>
                                                @else
                                                    <svg class="h-5 w-5 mr-1" xmlns="http://www.w3.org/2000/svg"
                                                        fill="currentColor">
                                                        <path d="M5 15h14l-7-8z"></path>
                                                    </svg>
                                                @endif
                                                {{ $coin->percentage($coin->quote->USD->percent_change_30d) }}
                                            </span>
                                        </td> --}}

                                        <td
                                            class="hidden md:table-cell px-6 py-4 whitespace-nowrap text-sm font-medium dark:text-white">
                                            {{-- {{ $coin->circulating_supply }} --}}
                                        </td>


                                        {{-- <td
                                            class="hidden md:table-cell px-6 py-4 whitespace-nowrap text-sm font-medium dark:text-white">
                                            {{ $coin->total_supply }}
                                        </td> --}}

                                        {{-- <td
                                            class="hidden md:table-cell px-6 py-4 whitespace-nowrap text-sm font-medium dark:text-white">
                                            {{ $coin->max_supply }}
                                        </td> --}}

                                        {{-- <td
                                            class="hidden md:table-cell px-6 py-4 whitespace-nowrap text-sm font-medium dark:text-white">
                                            {{ $coin->marketCap() }}
                                        </td> --}}

                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium dark:text-white">
                                            {{-- <img class="{{ $coin->isNagitive($coin->quote->USD->percent_change_7d) ? 'negative-sperkline' : 'posative-sperkline' }}"
                                                src="{{ $coin->weeklySperkline() }}" alt="{{ $coin->name }}"> --}}

                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        {{ $categories->links() }}

    </div>

@endsection


@section('footer')
    {{-- start:nav --}}
    @include('layouts.footer')
    {{-- end:nav --}}
@endsection
