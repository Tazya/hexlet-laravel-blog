
@extends('layouts.app')

@section('title', 'About')
@section('header', 'About')

@section('content')
<p>Experiments on Laravel with Hexlet</p>
<h2>Our Team:</h2>
<ul>
    @foreach ($team as $member)
    <li><strong>{{ $member['name'] }}</strong>: {{ $member['role'] }}</li>
    @endforeach
</ul>
@endsection
