@extends('layouts.app')

@section('title', 'Create Article')
@section('header', 'Create Article')

@section('content')
    {{ Form::model($article, ['url' => route('articles.store')]) }}
        @include('article.form')
        {{ Form::submit('Create') }}
    {{ Form::close() }}
@endsection