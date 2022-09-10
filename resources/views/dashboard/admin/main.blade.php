@extends("dashboard.admin.template")
@section('title', 'Dashboard | CryptoGainers')

@section('styles')
    <script src="{{ asset('js/admin.js?var=') }}{{ md5(filemtime(public_path('js/admin.js'))) }}"></script>
@endsection

@section('contents')

    <img src="{{ auth()->user()->avatar }}" alt="">
    @json(auth()->user())
@endsection
