@extends('layouts.app')

@section('title', 'Articles')
@section('header', 'Articles')

@section('content')
    <h1>{{$article->name}}</h1>
    <div>{{$article->body}}</div>
@endsection