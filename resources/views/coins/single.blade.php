@php
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
@endphp
{{-- index file --}}
@extends('layouts.app')

{{-- title --}}
@section('title', $coin->name . ' price today, ' . $coin->symbol . ' to USD live, marketcap and chart : CryptoGainers')

{{-- meta data --}}
@section('meta')
    <meta name="description"
        content="Leading news source for cryptocurrency, Bitcoin, Ethereum, Blockchain, DeFi, and more. Read the latest analysis and guides by CryptoGainers." />
    <meta property="og:title" content="Home" />
    <meta property="og:description"
        content="Leading news source for cryptocurrency, Bitcoin, Ethereum, Blockchain, DeFi, and more. Read the latest analysis and guides by CryptoGainers." />
    <meta property="og:url" content="https://watcher.guru/news/" />
    <meta property="og:site_name" content="CryptoGainers" />
    <meta property="article:modified_time" content="2021-10-10T15:31:51+00:00" />
    <meta property="og:image" content="https://watcher.guru/news/wp-content/uploads/2021/08/keyart.jpg" />
    <meta property="og:image:width" content="1920" />
    <meta property="og:image:height" content="1005" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="https://watcher.guru/news/wp-content/uploads/2021/08/keyart.jpg" />
    <meta name="twitter:label1" content="Est. reading time" />
    <meta name="twitter:data1" content="1 minute" />
@endsection

@section('nav')
    {{-- start:nav --}}
    {{-- @include('layouts.nav') --}}
    {{-- end:nav --}}
@endsection

{{-- content --}}
@section('content')
    {{-- start:nav --}}
    @include('layouts.nav')
    {{-- end:nav --}}
    <!-- Component Code -->
    <div class="relative">
        <div class="max-w-3xl mx-auto">
            <div class="mt-3 bg-white rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal">
                <div class="">
                    <h1 class="text-2xl font-bold my-5">#{{ $coin->rank() }}. {{ $coin->name }} price today,
                        {{ $coin->symbol }} to USD
                        live, marketcap and chart </h1>
                    <p class="text-base leading-8 my-5">{{ $coin->meta->description }}</p>
                    <p class="text-base leading-8 my-5">{{ $coin->description }}</p>
                    <img src="{{ $coin->icon() }}" alt="">


                    <img class="negative-sperkline" src="{{ $coin->weeklySperkline() }}" alt="">
                    <img class="negative-sperkline" src="{{ $coin->monthlySperkline() }}" alt="">
                    <img class="negative-sperkline" src="{{ $coin->sixtyDaysSperkline() }}" alt="">
                    <img class="negative-sperkline" src="{{ $coin->ninetyDaysSperkline() }}" alt="">



                    @php

                        // print_r($coin->weeklySperkline()->slug);
                        // echo $weeklySperkline = "https://s3.coinmarketcap.com/generated/sparklines/web/7d/2781/{$coin->weeklySperkline()->cmcid}.svg";
                        // $sperkline = "sperkline/coin/7d/{$coin->weeklySperkline()->slug}.svg";
                        // $path = public_path($sperkline);
                        // $response = Http::get($weeklySperkline);

                        // $response = Http::get($weeklySperkline);
                        // if ($response->successful()) {
                        //     File::put($path, $response);
                        // }

                        // print_r($coin->marketCap());
                    @endphp

                    @foreach ($coin->tags as $tag)
                        {{-- <a href="#{{ $tag }}" --}}
                        <a href="{{ route('category.show', $tag) }}"
                            class="bg-gray-100 px-2 mr-2 shadow-lg rounded-lg whitespace-normal text-xs text-primary-600 font-medium hover:text-gray-900 transition duration-500 ease-in-out">
                            #{{ $tag }}
                        </a>
                    @endforeach

                    <br>
                    <br>
                    <br>
                    <br>

                    @foreach ($coin->platform as $platform)
                        <a href="#"
                            class="bg-gray-100 px-2 mr-2 shadow-lg rounded-lg whitespace-normal text-xs text-primary-600 font-medium hover:text-gray-900 transition duration-500 ease-in-out">
                            {{-- #{{ $platform }} --}}
                            @json($platform)
                        </a>
                    @endforeach



                    <br>
                    <br>
                    <br>
                    <br>

                    <pre>
                    @php

                        // print_r($coin->meta->urls);
                        // print_r($coin->explorer());

                    @endphp
                    </pre>
                    @foreach ($coin->meta->urls as $key => $urls)
                        @empty(!$urls)
                            <h1 class="text-gray-700"> {{ $key }}</h1>

                            @foreach ($urls as $url)
                                <a href=" {{ $url }}" target="_blank"
                                    class="bg-gray-100 px-2 mr-2 shadow-lg rounded-lg whitespace-normal text-xs text-primary-600 font-medium hover:text-gray-900 transition duration-500 ease-in-out">
                                    {{ $url }}
                                </a>
                                <br>
                            @endforeach
                            <br>
                            <br>
                            <br>
                        @endempty
                    @endforeach



                    @foreach ($coin->meta->contract_address as $key => $contract)
                        {{-- <pre>
                        @php
                            print_r($contract);
                        @endphp
                        </pre> --}}
                        <h1>{{ $contract->platform->name }}</h1>
                        <h1>{{ $contract->contract_address }}</h1>
                    @endforeach

                </div>

            </div>
        </div>
    </div>

    {{-- @json($coin) --}}


@endsection

@section('footer')
    {{-- start:nav --}}
    @include('layouts.footer')
    {{-- end:nav --}}
@endsection
