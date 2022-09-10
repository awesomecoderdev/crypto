<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    {{ Cache::has('theme') && Cache::get('theme') == 'dark' ? 'class=dark' : '' }}>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:site_name" content="CryptoGainers" />
    <meta property="og:title" content='@yield('title')' />
    <meta name="twitter:label1" content='@yield('title')' />
    <meta name="description" content='@yield('description')' />
    <meta property="og:description" content='@yield('description')' />
    <meta property="og:url" content='@yield('url')' />
    <meta property="article:modified_time" content='@yield('time')' />
    <meta property="og:image:width" content="1920" />
    <meta property="og:image:height" content="1005" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta property="og:image" content='@yield('image')' />
    <meta name="twitter:image" content='@yield('image')' />
    <meta name="twitter:data1" content="1 minute" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link href="{{ asset('css/app.css?var=') }}{{ md5(filemtime(public_path('css/app.css'))) }}" rel="stylesheet">
    @yield('styles')
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/turbolinks/5.2.0/turbolinks.js"></script> --}}
    <script src="{{ asset('js/public.js?var=') }}{{ md5(filemtime(public_path('js/public.js'))) }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.2/cdn.js"></script>
    <script src="{{ asset('js/app.js?var=') }}{{ md5(filemtime(public_path('js/app.js'))) }}" defer></script>

</head>

<body class="antialiased text-slate-500 dark:text-slate-400 bg-gray-50/70 dark:bg-slate-900" x-data="PublicController()">
    {{-- nav:start --}}
    @yield('nav')
    {{-- nav:end --}}
    {{-- content:start --}}
    @yield('content')
    {{-- content:end --}}
    {{-- footer --}}
    {{-- footer:start --}}
    @yield('footer')
    {{-- footer:end --}}
    {{-- scroll to top --}}
    <x-scroll-to-top />
    {{-- scripts:start --}}
    @yield('scripts')
    {{-- scripts:end --}}
</body>

</html>



{{-- <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Quantum Assets price today, QA to USD live, marketcap and chart. &raquo; CryptoGainers" />
    <meta property="og:description"
        content="Quantum Assets price today, QA to USD live, marketcap and chart.Quantum Assets price today, QA to USD live, marketcap and chart.Quantum Assets price today, QA to USD live, marketcap and chart.Quantum Assets price today, QA to USD live, marketcap and chart.Quantum Assets price today, QA to USD live, marketcap and chart.Quantum Assets price today, QA ... Read more" />
    <meta property="og:url" content="https://localhost/wordpress/coins/quantum-assets/" />
    <meta property="og:site_name" content="CryptoGainers" />
    <meta property="article:published_time" content="2021-12-09T19:52:20+00:00" />
    <meta property="article:modified_time" content="2022-05-06T12:30:51+00:00" />
    <meta property="og:image"
        content="https://localhost/wordpress/wp-content/uploads/2021/12/14691031_362148077458950_6907867204792178952_n.jpg" />
    <meta property="og:image:width" content="854" />
    <meta property="og:image:height" content="854" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:label1" content="Written by" />
    <meta name="twitter:data1" content="admin" />
    <meta name="twitter:label2" content="Est. reading time" />
    <meta name="twitter:data2" content="1 minute" /> --}}
