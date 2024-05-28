@extends('layouts.landing')

@section('content')
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <a href="{{ route('note.index') }}">Volver</a>
    <form action="{{ route('note.update', $note->id) }}" method="post">
        @method('PUT')
        @csrf
        <label>Titulo:</label>
        <input type="text" name="title" value="{{ $note->title }}">
        @error('title')
            <p style="color: red">{{ $message }}</p>
        @enderror

        <label>Descripción</label>
        <input type="text" name="description" value="{{ $note->description }}">
        @error('description')
            <p style="color: red">{{ $message }}</p>
        @enderror

        <input type="submit" value="Guardar">
    </form>
@endsection
