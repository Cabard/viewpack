@extends('viewpack::layouts.' . ($template ?? 'lk'))
@section('title', $pageName ?? 'Новость')

@section('content')
    @include('viewpack::components.content')
@endsection
