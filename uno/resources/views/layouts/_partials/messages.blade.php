@if ($message = Session::get('success'))
    {{ $message }}
@endif
@if ($message = Session::get('danger'))
    {{ $message }}
@endif
