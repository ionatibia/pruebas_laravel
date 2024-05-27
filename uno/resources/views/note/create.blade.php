@extends('layouts.landing')

@section('content')
    <form action="{{ route('note.store') }}" method="POST" class="form">
        @csrf
        <label>Titulo:</label>
        <input type="text" name="title">

        <label>Descripción</label>
        <input type="text" name="description">

        <input type="submit" value="Crear">
    </form>
    <a href="{{ route('note.index') }}">Volver</a>
@endsection
<style>
    .form {
        margin-top: 50px;
    }
</style>
