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
        @for ($i = 1; $i < 15; $i++)
            @component('_components.card')
                @slot('title')
                    Service {{ $i }}
                @endslot
                @slot('content')
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut soluta optio cupiditate debitis excepturi delectus?
                    Nulla
                    minima distinctio ex tenetur ducimus molestiae, voluptatem consequatur reprehenderit dicta iste, hic itaque
                    perspiciatis?
                @endslot
            @endcomponent
        @endfor
    </div>
@endsection
