
@extends('layouts.app')

@section('title', 'О блоге')

@section('content')
<h1>About blog</h1>
<p>Experiments on Laravel with Hexlet</p>
<h2>Our Team:</h2>
<ul>
    @foreach ($team as $member)
    <li><strong>{{ $member['name'] }}</strong>: {{ $member['role'] }}</li>
    @endforeach
</ul>
@endsection
