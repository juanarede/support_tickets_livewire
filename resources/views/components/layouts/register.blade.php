<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        <link href="https://unpkg.com/filepond/dist/filepond.min.css" rel="stylesheet">
        <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css" rel="stylesheet">
        @vite('resources/css/register.css')
    </head>
    <body>
        {{ $slot }}
        <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
        @vite('resources/js/register.js')
    </body>
</html>
