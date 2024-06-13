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
            <div class="service">
                {{ $service->name }}
                <hr>
                @foreach ($service->chats as $chat)
                    <chat-component :chat="{{ $chat }}"></chat-component>
                @endforeach
            </div>
        @endforeach

    </div>
@endsection
<style>
    .service {
        padding: 15px;
        width: 200px;
        height: 200px;
        border: 1px solid black;
        border-radius: 25px;
    }
</style>
