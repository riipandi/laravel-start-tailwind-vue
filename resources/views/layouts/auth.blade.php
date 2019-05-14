<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-blue-500 h-screen font-sans antialiased">
    <div id="app" class="container mx-auto p-4 h-full flex justify-center items-center">
        @yield('content')
    </div>
    <script src="{{ asset('js/app.js') }}"></script> @stack('scripts')
    @if (Session::has('alert.config')) <script>Swal.fire({!! session()->pull('alert.config') !!});</script> @endif
</body>
</html>
