@extends('layouts.landing')

@section('content')
    <div class="sectionTitle">
        <h1>Productos</h1>
    </div>
    <div class="container">
        @forelse ($products as $product)
            <div class="productCard">
                <h4 class="productTitle">{{ $product->name }}</h4>
                <hr color="royalblue">
                <div class="productDescription">
                    <p>{{ $product->short_description }}</p>
                </div>
                <div class="productPrice">
                    {{ $product->price }}
                </div>
            </div>
        @empty
            <h3>No data.</h3>
        @endforelse
    </div>

    <style>
        .productCard {
            width: 200px;
            height: 300px;
            border: 2px solid royalblue;
            border-radius: 25px;
            text-align: center;
            background-color: burlywood;
        }

        .container {
            padding-left: 25px;
            padding-right: 25px;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem
        }

        .productDescription {
            min-height: 80px;
        }

        .productTitle {
            min-height: 40px
        }

        .productPrice {}
    </style>
@endsection
