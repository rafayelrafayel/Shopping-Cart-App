<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shopping App</title>


    <link rel="stylesheet" type="text/css" href="{{ asset('css/public.css') }}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="{{ asset('js/public.js') }}"></script>
</head>

<body class="antialiased">
    <header>
        @if (Route::has('login'))
            <span> Welcome Back!</span>
        @else
            <span>Shopping App</span>
        @endif

    </header>
    <div class="content">
        @yield('content')
    </div>
</body>

</html>
