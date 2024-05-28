@extends('layouts.landing')

@section('content')
    <a href="{{ route('note.index') }}">Volver</a>
    <form action="{{ route('note.update', $note->id) }}" method="post">
        @method('PUT')
        @csrf
        <label>Titulo:</label>
        <input type="text" name="title" value="{{ $note->title }}">

        <label>Descripción</label>
        <input type="text" name="description" value="{{ $note->description }}">

        <input type="submit" value="Guardar">
    </form>
@endsection
