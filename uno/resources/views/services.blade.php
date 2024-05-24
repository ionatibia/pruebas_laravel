@extends('layouts.landing')
@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/services.css') }}">
@endsection
@section('title')
    Services
@endsection
@section('content')
    <h1>Services</h1>
    <div class="services">
        @forelse ($services as $service)
            @component('_components.card')
                @slot('title')
                    {{ $service->title }}
                @endslot
                @slot('content')
                    {{ $service->description }}
                @endslot
                @slot('done')
                    {{ $service->done }}
                @endslot
            @endcomponent
        @empty
            <h3>No hay servicios para mostrar</h3>
            <style>
                h1 {
                    color: rgb(250, 7, 7);
                }
            </style>
        @endforelse
    </div>
@endsection
