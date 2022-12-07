@extends('layout.main')

@section('content')
    @foreach ($data as $item)
        <a href="{{ 'show-data/' . $item->id }}">
            {{ $item->title }} <br>
        </a>
    @endforeach
@endsection
