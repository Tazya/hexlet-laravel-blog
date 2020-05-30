@extends('layouts.app')

@section('title', 'Create Article')
@section('header', 'Create Article')

@section('content')
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{ Form::model($article, ['url' => route('articles.store')]) }}
        {{ Form::label('name', 'Title') }}
        {{ Form::text('name') }}
        {{ Form::label('body', 'Content') }}
        {{ Form::textarea('body') }}
        {{ Form::submit('Создать') }}
    {{ Form::close() }}
@endsection