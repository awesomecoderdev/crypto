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
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="flex flex-col mb-5">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        #</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Name</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Title</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Exchange Score</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Role</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Edit</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @php $rank= (($exchanges->currentPage() * $exchanges->perPage()) - ($exchanges->perPage()-1)) ; @endphp
                                @foreach ($exchanges as $exchange)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ $rank }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">

                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <a href="{{ route('exchanges.show', $exchange->slug) }}">
                                                        <img class="h-10 w-10 rounded-full" src="{{ $exchange->logo }}"
                                                            alt="{{ $exchange->name }}">
                                                    </a>
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        <a href="{{ route('exchanges.show', $exchange->slug) }}">
                                                            {{ $exchange->name }}
                                                        </a>
                                                    </div>
                                                    <a href="{{ route('exchanges.show', $exchange->slug) }}">
                                                        <div class="text-sm text-gray-500">{{ $exchange->country }}</div>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">
                                                {{ $exchange->trade_volume_24h_btc }}
                                            </div>
                                            <div class="text-sm text-gray-500">Optimization</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">


                                            {{ $exchange->trust_score }}
                                            @if ($exchange->trust_score > 6)
                                                @empty($exchange->trust_score)
                                                    <span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                                        ?</span>
                                                @else
                                                    <span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                        {{ $exchange->trust_score }} </span>
                                                @endempty
                                            @elseif ($exchange->trust_score > 4)
                                                @empty($exchange->trust_score)
                                                    <span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                                        ?</span>
                                                @else
                                                    <span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                                        {{ $exchange->trust_score }} </span>
                                                @endempty
                                            @else
                                                @empty($exchange->trust_score)
                                                    <span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                                        ?</span>
                                                @else
                                                    <span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                        {{ $exchange->trust_score }} </span>
                                                @endempty
                                            @endif

                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Admin</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        </td>
                                    </tr>
                                    @php $rank++; @endphp
                                @endforeach

                                <!-- More people... -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        {{-- pagenation --}}
        {{ $exchanges->appends(request()->except(['search']))->links() }}


    </div>
@endsection


@section('footer')
    {{-- start:nav --}}
    @include('layouts.footer')
    {{-- end:nav --}}
@endsection
