@extends('layouts.landing')

@section('title')
    About
@endsection

@section('content')
    <h1>About</h1>
    <ul>
        @forelse ($things as $thing)
            <li>
                {{ $thing->name }} - {{ $thing->value }} - {{ $thing->is_active }}
            </li>


        @empty
            <h3>No hay cosas</h3>
        @endforelse
    </ul>
@endsection
