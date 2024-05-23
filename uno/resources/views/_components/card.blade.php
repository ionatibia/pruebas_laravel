<div class="card">
    <h3>{{ $title }}</h3>
    <img src="{{ asset('assets/img/1.jpg') }}" alt="">
    <p>{{ $content }}</p>
</div>

<style>
    .card {
        width: 200px;
        min-height: 100px;
        border: 1px solid #333;
        border-radius: 25px;
        padding: 5px;
        text-align: center;
    }

    .card img {
        width: 200px
    }
</style>
