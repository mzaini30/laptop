<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <title>@yield("title")</title>
        <link rel="icon" href="/gambar/mabaiz.png">
        @yield("head")
    </head>
    <body>
        {{ $slot }}
    </body>
</html>
