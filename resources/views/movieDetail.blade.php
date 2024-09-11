@extends('layouts.main')


@section('content')
<div class="container my-5">
    <h1 class="mb-3">{{ $movie->title }}</h1>
    <h4 class="mb-3">{{ $movie->original_title }}</h4>
    <div class="mb-3"><b>Nationality:</b> {{ $movie->nationality }}</div>
    <div class="mb-3"><b>Release date:</b> {{ $movie->date }}</div>
    <div class="mb-5"><b>Vote:</b> {{ $movie->vote }}</div>
    <a href="{{ route('about') }}" class="btn btn-primary">Back</a>
</div>

@endsection