<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{ darkMode: localStorage.getItem('dark') === 'true' }" x-init="$watch('darkMode', val => localStorage.setItem('dark', val))"
    x-bind:class="{ 'dark': darkMode }">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:site_name" content="CryptoGainers" />
    <meta property="og:title" content='@yield("title")' />
    <meta name="twitter:label1" content='@yield("title")' />
    <meta name="description" content='@yield("description")' />
    <meta property="og:description" content='@yield("description")' />
    <meta property="og:url" content='@yield("url")' />
    <meta property="article:modified_time" content="2021-10-10T15:31:51+00:00" />
    <meta property="og:image:width" content="1920" />
    <meta property="og:image:height" content="1005" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta property="og:image" content='@yield("image")' />
    <meta name="twitter:image" content='@yield("image")' />
    <meta name="twitter:data1" content="1 minute" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <title>@yield("title")</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link href="{{ asset('css/app.css?var=') }}{{ md5(filemtime(public_path('css/app.css'))) }}" rel="stylesheet">
    @yield("styles")
    <script src="{{ asset('js/main.js?var=') }}{{ md5(filemtime(public_path('js/main.js'))) }}"></script>
    <script src="{{ asset('js/app.js?var=') }}{{ md5(filemtime(public_path('js/app.js'))) }}" defer></script>
</head>

<body class="antialiased text-slate-500 dark:text-slate-400 bg-white dark:bg-slate-900" x-data="PublicController()">

    {{-- body:start --}}
    @yield("content")
    {{-- body:end --}}

    @yield("scripts")
</body>

</html>
