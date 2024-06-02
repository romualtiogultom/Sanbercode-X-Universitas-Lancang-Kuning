@extends('layout.master')

@section('title')
Show Cast
@endsection

@section('content')
    <h1>Show Cast</h1>

    @if ($cast)
        <div class="card">
            <div class="card-header">
                {{ $cast->nama }}
            </div>
            <div class="card-body">
                <ul>
                    <li>Umur: {{ $cast->umur }}</li>
                    <li>Bio: {{ $cast->bio }}</li>
                </ul>

                <a href="/cast/{{ $cast->id }}/edit" class="btn btn-primary">Edit</a>
                <form action="/cast/{{ $cast->id }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    @else
        <p>Cast member not found.</p>
    @endif
@endsection