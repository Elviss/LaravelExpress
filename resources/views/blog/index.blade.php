@extends('blogs')

@section('content')

    @foreach($posts as $post)
    {{ $post['titulo'] }}
    @endforeach

@endsection