@extends('layouts.landing')

@section('content')
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('note.store') }}" method="POST" class="form">
        @csrf
        <label>Titulo:</label>
        <input type="text" name="title" class="@error('title') danger @enderror"> <br>
        @error('title')
            <p style="color: red">{{ $message }}</p>
        @enderror

        <label>Descripción</label>
        <input type="text" name="description"> <br>
        @error('description')
            <p style="color: red">{{ $message }}</p>
        @enderror

        <input type="submit" value="Crear">
    </form>
    <a href="{{ route('note.index') }}">Volver</a>
@endsection
<style>
    .form {
        margin-top: 50px;
    }

    .danger {
        border: 2px solid red;
    }
</style>
