@extends('layouts.landing')

@section('title')
    Home
@endsection

@section('content')
    <h1>Home</h1>
    @if ($user)
        <div>
            {{ $user->name }}
        </div>
        <div>
            @foreach ($user->phones as $phone)
                {{ $phone->phone_number }}<br>
            @endforeach
        </div>
    @endif
@endsection
