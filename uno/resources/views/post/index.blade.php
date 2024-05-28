@extends('layouts.landing')

@section('content')
    <a href="{{ route('post.create') }}">Crear</a>
    <h1>Create</h1>
    <ul>
        @forelse ($posts as $post)
            <li><a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a> | <a
                    href="{{ route('post.edit', ['post' => $post->id]) }}">MODI</a> |
                <form action="{{ route('post.destroy', $post->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="BORR">
                </form>
            </li>
        @empty
            <h3>No data</h3>
        @endforelse
    </ul>
@endsection
