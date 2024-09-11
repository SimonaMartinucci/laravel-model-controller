@extends('layouts.main')

@section('content')
<div class="container my-5">
    <h1 class="mb-5">LISTA FILM</h1>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">TITLE</th>
            <th scope="col">ORIGINAL TITLE</th>
            <th scope="col">VOTE</th>
            </tr>
        </thead>
        <tbody>
            @foreach($movies as $movie)
            <tr>
            <th scope="row">{{ $movie->id }}</th>
            <td>{{ $movie->title }}</td>
            <td>{{ $movie->original_title }}</td>
            <td>{{ $movie->vote }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection