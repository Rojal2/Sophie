<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Sophie International') }}</title>

        <!-- Bootstrap 5 CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body class="bg-light">
        <div class="min-vh-screen d-flex flex-column justify-content-center align-items-center pt-5">
            <div>
                <a href="/">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" height="100">
                </a>
            </div>

            <div class="w-100 px-4 mt-4" style="max-width: 450px;">
                <div class="card border-0 shadow-sm p-4 rounded-4">
                    {{ $slot }}
                </div>
            </div>
        </div>
        <!-- Bootstrap 5 JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
