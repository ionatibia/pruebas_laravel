<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('styles')
    <title>
        @yield('title')
    </title>
</head>

<body>
    @include('layouts._partials.menu')
    @include('layouts._partials.messages')
    @yield('content')
</body>

<style>
    .sectionTitle {
        margin-bottom: 15px;
        padding: 15px;
        width: 100%;
        text-align: center;
        background-color: aliceblue;
    }

    body {
        width: 100%;
        padding: 0px;
        margin: 0px;
    }
</style>

</html>
