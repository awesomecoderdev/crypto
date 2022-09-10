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
    <div class="whitespace-pre-wrap text-ellipsis">
        @foreach ($articles as $article)
            <a href="{{ route('news.show', $article->slug) }}">{{ $article->title }}</a>
        @endforeach
    </div>

    {{ $articles->appends(request()->except(['search']))->links() }}

@endsection


@section('footer')
    {{-- start:nav --}}
    @include('layouts.footer')
    {{-- end:nav --}}
@endsection
