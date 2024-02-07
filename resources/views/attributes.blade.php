@if (isset($attributes))
    @foreach ($attributes as $attr => $val)
        {{$attr}}="{{$val}}"
    @endforeach
@endif
