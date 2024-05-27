@extends('layouts.landing')

@section('content')
    <form action="" method="post">
        @csrf
        <label>Titulo:</label>
        <input type="text" name="title" value="{{ $note->title }}">

        <label>Descripción</label>
        <input type="text" name="description" value="{{ $note->description }}">

        <input type="submit" value="Guardar">
    </form>
@endsection
