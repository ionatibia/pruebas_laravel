@extends('layouts.landing')

@section('content')
    <a href="{{ route('note.create') }}">Crear</a>
    <h1>Create</h1>
    <ul>
        @forelse ($notes as $note)
            <li><a href="{{ route('note.show', $note->id) }}">{{ $note->title }}</a> | <a
                    href="{{ route('note.edit', ['note' => $note->id]) }}">MODI</a> |
                <form action="{{ route('note.destroy', $note->id) }}" method="post">
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
