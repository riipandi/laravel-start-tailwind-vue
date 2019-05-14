<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none">
    <div class="flex flex-col">
        @if(Route::has('login'))
            <div class="absolute top-0 right-0 mt-4 mr-10">
                @auth
                    <a href="{{ route('dashboard') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Dashboard') }}</a>
                @else
                    <a href="{{ route('login') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase pr-6">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Register') }}</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="min-h-screen flex items-center justify-center">
            <div class="flex flex-col justify-around h-full">
                <div>
                    <h1 class="text-gray-700 text-center font-400 tracking-wider text-5xl mb-12">
                        {{ config('app.name') }}
                    </h1>
                    <ul class="list-none p-0">
                        <li class="inline pr-8">
                            <a href="//laravel.com/docs" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase" title="Documentation">Documentation</a>
                        </li>
                        <li class="inline pr-8">
                            <a href="//laracasts.com" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase" title="Laracasts">Laracasts</a>
                        </li>
                        <li class="inline pr-8">
                            <a href="//laravel-news.com" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase" title="News">News</a>
                        </li>
                        <li class="inline pr-8">
                            <a href="//nova.laravel.com" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase" title="Nova">Nova</a>
                        </li>
                        <li class="inline pr-8">
                            <a href="//forge.laravel.com" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase" title="Forge">Forge</a>
                        </li>
                        <li class="inline pr-8">
                            <a href="//github.com/laravel/laravel" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase" title="GitHub">GitHub</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script> @stack('scripts')
    @if (Session::has('alert.config')) <script>Swal.fire({!! session()->pull('alert.config') !!});</script> @endif
</body>
</html>
