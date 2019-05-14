@extends('layouts.auth')

@section('content')
    <div class="container mx-auto">
        <div class="flex flex-wrap justify-center">
            <div class="w-full max-w-sm">
                <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">

                    <div class="font-semibold bg-gray-100 text-gray-600 py-5 mb-0 rounded-t text-center">SIGN UP</div>
                    <form class="w-full p-6" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="flex flex-wrap -mx-3 mb-5">
                            <div class="w-full px-3">
                                <label for="name" class="block text-gray-600 text-sm font-bold mb-2">{{ __('Your Name') }}</label>
                                <input id="name" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-600 leading-tight focus:outline-none focus:shadow-outline{{ $errors->has('name') ? ' border-red-500' : '' }}" name="name" value="{{ old('name') }}" required>
                                @error('name')<p class="text-red-500 text-xs italic mt-3">{{ $message }}</p>@enderror
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-5">
                            <div class="w-full px-3">
                                <label for="email" class="block text-gray-600 text-sm font-bold mb-2">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-600 leading-tight focus:outline-none focus:shadow-outline{{ $errors->has('email') ? ' border-red-500' : '' }}" name="email" value="{{ old('email') }}" required>
                                @error('email')<p class="text-red-500 text-xs italic mt-3">{{ $message }}</p>@enderror
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-5">
                            <div class="w-full px-3">
                                <label for="username" class="block text-gray-600 text-sm font-bold mb-2">{{ __('Username') }}</label>
                                <input id="username" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-600 leading-tight focus:outline-none focus:shadow-outline{{ $errors->has('username') ? ' border-red-500' : '' }}" name="username" value="{{ old('username') }}" required>
                                @error('username')<p class="text-red-500 text-xs italic mt-3">{{ $message }}</p>@enderror
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-5">
                            <div class="w-full px-3">
                                <label for="password" class="block text-gray-600 text-sm font-bold mb-2">{{ __('Password') }}</label>
                                <input id="password" type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-600 leading-tight focus:outline-none focus:shadow-outline{{ $errors->has('password') ? ' border-red-500' : '' }}" name="password" required>
                                @error('password')
                                    <p class="text-red-500 text-xs italic mt-3">{{ $message }}</p>
                                @else
                                    <p class="text-gray-600 text-xs italic mt-3">Make it as long and as crazy as you'd like</p>
                                @enderror
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-5">
                            <div class="w-full px-3">
                                <label for="password_confirmation" class="block text-gray-600 text-sm font-bold mb-2">{{ __('Confirm Password') }}</label>
                                <input id="password_confirmation" type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-600 leading-tight focus:outline-none focus:shadow-outline" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="flex flex-wrap">
                            <button type="submit" class="w-full align-middle text-center select-none border font-normal whitespace-no-wrap py-3 px-4 rounded text-base leading-normal no-underline text-blue-100 bg-blue-500 hover:bg-blue-400 font-semibold">
                                {{ __('Register') }}
                            </button>

                            <p class="w-full text-xs text-center text-gray-600 mt-8">
                                Already have an account?
                                <a class="text-blue-500 hover:text-blue-600 no-underline" href="{{ route('login') }}">Sign In</a>
                            </p>
                        </div>
                    </form>
                </div>

                <div class="text-center mt-6">
                    <a href="{{ url('/') }}" class="no-underline text-sm text-white hover:text-blue-lighter">&laquo; back to front page</a>
                </div>

            </div>
        </div>
    </div>
@endsection
