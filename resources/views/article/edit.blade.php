@extends('layouts.app')

@section('title', 'Edit Article')
@section('header', 'Edit Article')

@section('content')
    {{ Form::model($article, ['url' => route('articles.update', $article), 'method' => 'PATCH']) }}
        @include('article.form')
        {{ Form::submit('Update') }}
    {{ Form::close() }}
@endsection