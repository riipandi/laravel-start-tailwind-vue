@extends('layouts.web')

@section('content')
<div class="content">
    <div class="title m-b-md">
        {{ config('app.name') }}
    </div>
    <div class="links">
        <a href="//laravel.com/docs">Docs</a>
        <a href="//laracasts.com">Laracasts</a>
        <a href="//laravel-news.com">News</a>
        <a href="//blog.laravel.com">Blog</a>
        <a href="//nova.laravel.com">Nova</a>
        <a href="//forge.laravel.com">Forge</a>
        <a href="//github.com/laravel/laravel">GitHub</a>
    </div>
</div>
@endsection
