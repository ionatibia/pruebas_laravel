@extends('layouts.landing')

@section('content')
    <a href="{{ route('note.create') }}">Crear</a>
    <h1>Create</h1>
    <ul>
        @forelse ($notes as $note)
            <li><a href="#">{{ $note->title }}</a> | <a href="{{ route('note.edit', ['note' => $note->id]) }}">MODI</a> |
                <a href="">BORR</a></li>
        @empty
            <h3>No data</h3>
        @endforelse
    </ul>
@endsection
