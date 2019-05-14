@extends('layouts.auth')

@section('content')
    <div class="container mx-auto">
        <div class="flex flex-wrap justify-center">
            <div class="w-full max-w-xs">

                {{-- @include('partials.alert') --}}

                <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">

                    <div class="font-semibold bg-gray-100 text-gray-600 py-5 mb-0 rounded-t text-center">SIGN IN</div>

                    <form class="w-full p-6 form-nofill" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="flex flex-wrap mb-6">
                            <label for="identity" class="block tracking-wide text-gray-600 text-xs font-bold mb-2">{{ __('E-Mail or Username') }}:</label>
                            <input id="identity" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-600 leading-tight focus:outline-none focus:shadow-outline{{ $errors->has('identity') ? ' border-red-500' : '' }}" name="identity" value="{{ old('identity') }}" required autofocus>
                            @error('identity')<p class="text-red-500 text-xs italic mt-4">{{ $message }}</p>@enderror
                        </div>

                        <div class="flex flex-wrap mb-6">
                            <label for="password" class="block tracking-wide text-gray-600 text-xs font-bold mb-2">{{ __('Password') }}:</label>
                            @if (Route::has('password.request'))
                                <a class="text-xs text-blue-500 hover:text-blue-600 whitespace-no-wrap no-underline ml-auto focus:outline-none" href="{{ route('password.request') }}" tabindex="-1">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                            <input id="password" type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-600 leading-tight focus:outline-none focus:shadow-outline{{ $errors->has('password') ? ' border-red-500' : '' }}" name="password" required>
                            @error('password')<p class="text-red-500 text-xs italic mt-4">{{ $message }}</p>@enderror
                        </div>

                        @if (config('auth.remember') == true)
                        <div class="flex flex-wrap items-center mb-6">
                            <div class="form-switch inline-block align-middle">
                                <input type="checkbox" class="form-switch-checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-switch-label" for="remember"></label>
                            </div>
                            <label class="text-sm text-gray-600 cursor-pointer" for="remember">Remember me!</label>
                        </div>
                        @endif

                        <div class="flex flex-wrap items-center">
                            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white py-3 px-8 rounded focus:outline-none focus:shadow-outline font-semibold">
                                {{ __('Login') }}
                            </button>
                            @if (Route::has('register'))
                                <p class="w-full text-xs text-center text-gray-600 mt-6 -mb-1">
                                    Don't have an account? <a class="text-blue-500 hover:text-blue-600 no-underline" href="{{ route('register') }}">Sign Up</a>
                                </p>
                            @endif
                        </div>
                    </form>
                </div>

                <div class="text-center mt-6">
                    <a href="{{ route('home') }}" class="no-underline text-sm text-white hover:text-blue-lighter">&laquo; back to front page</a>
                </div>

            </div>
        </div>
    </div>
@endsection
