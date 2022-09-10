@foreach ($heading as $headin)
    <p>{{ $headin }}</p>
    <br>
@endforeach

@foreach ($images as $image)
    <img src="{{ $image }}" alt="">
@endforeach
