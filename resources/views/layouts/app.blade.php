<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @stack('styles')
</head>

<body pmargin="0" leftmargin="0">
    @yield('content')
    @stack('scripts')
</body>

</html>
