@extends('layouts.main')

@section('content')
<div class="container my-5">
    <h1 class="mb-5">DETTAGLI FILM</h1>
    
    <div class="d-flex flex-wrap gap-3">
        @foreach($movies as $movie)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h4 class="card-title">{{ $movie->title }}</h4>
                <h6 class="card-subtitle mb-2 text-body-secondary">{{ $movie->original_title }}</h6>
                <div class="card-text"><b>Nationality:</b> {{ $movie->nationality }}</div>
                <div class="card-text mb-3"><b>Release date:</b> {{ $movie->date }}</div>
                <a href="{{ route('movieDetail', ['id' => $movie->id]) }}" class="btn btn-primary">View Movie</a>
            </div>
        </div>
        @endforeach
    </div>

</div>

@endsection