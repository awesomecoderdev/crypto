@extends("dashboard.admin.template")

@section('title', 'Profile | CryptoGainers')

@section('contents')
    {{-- @json(auth()->user()) --}}
    <pre>
    @php
    print_r(auth()->user());
    @endphp
    </pre>
@endsection
