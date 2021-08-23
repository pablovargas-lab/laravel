<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <title>modulo admin</title>
</head>

<body>

    @include('Dashboard.partials.nav-header-main')
    
        @include('Dashboard.partials.session-flash-status')

        @yield('content')
    
</body>

</html>
