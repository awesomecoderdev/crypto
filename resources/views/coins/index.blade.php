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
                                        Circulating Supply
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
                                @foreach ($coins as $coin)
                                    <tr
                                        class="bg-white  hover:bg-gray-50 dark:bg-gray-700/30 hover:dark:bg-gray-800/100 dark:text-white">

                                        {{-- <td class="px-6 py-4 whitespace-nowrap text-sm font-medium dark:text-white">
                                            <img src="{{ $coin->meta->logo }}" class="w-8 h-8 rounded-full">
                                        </td> --}}

                                        <td class="md:px-6 px-1 py-4 whitespace-nowrap text-sm font-medium dark:text-white">
                                            <a class="relative" href="{{ route('coins.show', $coin->slug) }}">
                                                <div class="flex">
                                                    <img src="{{ $coin->icon() }}" class="w-8 h-8 rounded-full mr-2">
                                                    <div class="flex items-center">
                                                        {{-- <div>#{{ $coin->rank() }}</div> --}}

                                                        <div class="flex flex-col">
                                                            <span>{{ $coin->name }}
                                                                <span
                                                                    class="bg-gray-400/30 px-1 rounded">#{{ $coin->rank() }}</span>
                                                            </span>
                                                            <span class=" pt-1">
                                                                <span
                                                                    class="bg-gray-400/30 px-1 rounded">{{ $coin->symbol }}</span>
                                                                {{-- <span
                                                                    class="transition-colors delay-75 {{ $coin->coinVar() }}">${{ $coin->price() }}
                                                                </span> --}}
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </td>

                                        <td
                                            class="hidden md:table-cell px-6 py-4 whitespace-nowrap text-sm font-medium dark:text-white">

                                            <span class="transition-colors delay-75"
                                                id="{{ $coin->coinVar() }}">${{ $coin->price() }}
                                            </span>


                                        </td>

                                        <td
                                            class="hidden md:table-cell px-6 py-4 whitespace-nowrap text-sm font-medium {{ $coin->isNagitive($coin->quote->USD->percent_change_24h) ? 'text-red-500' : 'text-green-500' }}  ">
                                            <span class="relative flex items-center">
                                                @if ($coin->isNagitive($coin->quote->USD->percent_change_24h))
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
                                                {{ $coin->percentage($coin->quote->USD->percent_change_24h) }}
                                            </span>
                                        </td>

                                        <td
                                            class="hidden md:table-cell px-6 py-4 whitespace-nowrap text-sm font-medium {{ $coin->isNagitive($coin->quote->USD->percent_change_7d) ? 'text-red-500' : 'text-green-500' }}  ">

                                            <span class="relative flex items-center">
                                                @if ($coin->isNagitive($coin->quote->USD->percent_change_7d))
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
                                                {{ $coin->percentage($coin->quote->USD->percent_change_7d) }}
                                            </span>
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
                                            {{ $coin->circulating_supply }}
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
                                            <img class="{{ $coin->isNagitive($coin->quote->USD->percent_change_7d) ? 'negative-sperkline' : 'posative-sperkline' }}"
                                                src="{{ $coin->weeklySperkline() }}" alt="{{ $coin->name }}">
                                            <script>
                                                var {{ $coin->coinVal() }} = null;
                                                var {{ $coin->coinVar() }} = new WebSocket(
                                                    "wss://stream.binance.com:9443/ws/{{ strtolower($coin->symbol) }}usdt@trade");
                                                {{ $coin->coinVar() }}.onmessage = (res) => {
                                                    var data = JSON.parse(res.data);
                                                    var price = parseFloat(data.p);
                                                    if (price >= 1) {
                                                        price.toFixed(2);
                                                    } else if (price >= 0.1) {
                                                        price.toFixed(4);
                                                    }
                                                    // console.log(data.s + " " + price);

                                                    var currentCoin = document.getElementById("{{ $coin->coinVar() }}");
                                                    currentCoin.innerHTML = "$" + price;
                                                    if (!{{ $coin->coinVal() }} || {{ $coin->coinVal() }} === price) {
                                                        currentCoin.classList.remove("text-green-500");
                                                        currentCoin.classList.remove("text-red-500");
                                                    } else if (price > {{ $coin->coinVal() }}) {
                                                        currentCoin.classList.remove("text-red-500");
                                                        currentCoin.classList.add("text-green-500");
                                                    } else {
                                                        currentCoin.classList.remove("text-green-500");
                                                        currentCoin.classList.add("text-red-500");
                                                    }
                                                    {{ $coin->coinVal() }} = price;
                                                };
                                            </script>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- pagenation --}}
        {{ $coins->appends(request()->except(['search']))->links() }}


    </div>
@endsection


@section('footer')
    {{-- start:nav --}}
    @include('layouts.footer')
    {{-- end:nav --}}
@endsection
