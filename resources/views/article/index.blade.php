@extends('layouts.app')

@section('title', 'Articles')
@section('header', 'Articles')

@section('content')
    @if ($flashMessage)
        <div style="color: lightgreen">{{ $flashMessage }}</div>
    @endif
    @foreach ($articles as $article)
    <div style="margin: 20px; padding: 10px; border: 1px solid #ccc">
        <a href="{{ route('articles.show', $article->id) }}"><h2>{{ $article->name }}</h2></a>
        <div>{{ Str::limit($article->body, 200) }}</div>
        <a href="{{ route('articles.edit', $article) }}"><small>Edit article</small></a>
        <a href="{{ route('articles.destroy', $article) }}" data-confirm="Are you confirm?" data-method="delete" rel="nofollow">Удалить</a>
    </div>
    @endforeach

    {{ $articles->links() }}
@endsection
