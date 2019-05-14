@extends('layouts.auth')

@section('content')
    <div class="container mx-auto">
        <div class="flex flex-wrap justify-center">
            <div class="w-full max-w-sm">

                @if (session('status'))
                    <div class="text-sm border border-t-8 rounded text-green-600 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">

                    <div class="font-semibold bg-gray-100 text-gray-600 py-5 mb-0 rounded-t text-center">PASSWORD RESET</div>

                    <form class="w-full p-6 form-nofill" method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="flex flex-wrap mb-6">
                            <label for="email" class="block text-gray-600 text-sm font-bold mb-2">
                                {{ __('E-Mail Address') }}:
                            </label>

                            <input id="email" type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-600 leading-tight focus:outline-none focus:shadow-outline{{ $errors->has('email') ? ' border-red-500' : '' }}" name="email" value="{{ old('email') }}" required>
                            @error('email')<p class="text-red-500 text-xs italic mt-4">{{ $message }}</p>@enderror
                        </div>

                        <div class="flex flex-wrap">
                            <button type="submit" class="bg-blue-500 w-full hover:bg-blue-600 text-white py-3 px-4 rounded focus:outline-none focus:shadow-outline">
                                {{ __('Send Magic Link') }}
                            </button>

                            <p class="w-full text-xs text-center text-gray-600 mt-8 -mb-1">
                                <a class="text-blue-500 hover:text-blue-600 no-underline" href="{{ route('login') }}">{{ __('Back to login') }}</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
