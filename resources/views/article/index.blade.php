@extends('layouts.app')

@section('title', 'Articles')
@section('header', 'Articles')

@section('content')
    @foreach ($articles as $article)
    <div style="margin: 20px; padding: 10px; border: 1px solid #ccc">
        <a href="{{ route('articles.show', $article->id) }}"><h2>{{ $article->name }}</h2></a>
        <div>{{ Str::limit($article->body, 200) }}</div>
    </div>
    @endforeach

    {{ $articles->links() }}
@endsection
