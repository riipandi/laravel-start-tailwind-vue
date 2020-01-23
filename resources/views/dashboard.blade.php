@extends('layouts.app')

@section('content')
    <div class="flex items-center">
        <div class="w-full lg:w-1/2 px-6 md:px-0 mx-auto">
            @if (session('status'))
                <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <example-component></example-component>
        </div>
    </div>
@endsection
