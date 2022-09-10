{{-- @if (Route::current() != null)
    @if (Route::current()->getName() == 'news.index')
        @include('layouts.nav.news')
    @elseif (Route::current()->getName() == 'coins.index')
        @include('layouts.nav.coins')
    @elseif (Route::current()->getName() == 'exchanges.index')
        @include('layouts.nav.exchanges')
    @else
        @include('layouts.nav.index')
    @endif
@else
    @include('layouts.nav.index')
@endif --}}

@include('layouts.nav.index')
