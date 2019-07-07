<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>
        <link rel="stylesheet" href="{{ secure_asset('/css/app.css') }}" />
    </head>
    <body>
        @include('partials.nav')
        @yield('content')
    </body>
</html>
