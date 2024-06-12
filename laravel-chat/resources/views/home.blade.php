@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="main" data-user="{{ json_encode($user) }}"></div>
        <div id="main" data-service="{{ json_encode($services) }}"></div>
        <div>
            {{ $services }}
        </div>
        <example-component :user="{{ $user }}"></example-component>
        @foreach ($services as $service)
            <chat-component :service="{{ $service }}"></chat-component>
        @endforeach

    </div>
@endsection
