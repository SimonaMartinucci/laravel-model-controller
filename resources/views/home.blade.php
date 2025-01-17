@extends('layouts.main')

@section('content')
<div class="container my-5">
    <h1 class="mb-5">LISTA FILM</h1>

    <div class="col-md-4">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">TITLE</th>
                </tr>
            </thead>
            <tbody>
                @foreach($movies as $movie)
                <tr>
                <th scope="row">{{ $movie->id }}</th>
                <td>{{ $movie->title }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection