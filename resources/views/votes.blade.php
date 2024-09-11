@extends('layouts.main')

@section('content')
<div class="container my-5">
    <h1 class="mb-5">VOTAZIONI</h1>
    
    <div class="col-md-6">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">TITLE</th>
                <th scope="col">VOTE</th>
                </tr>
            </thead>
            <tbody>
                @foreach($movies as $movie)
                <tr>
                <th scope="row">{{ $movie->title }}</th>
                <td>{{ $movie->vote }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection