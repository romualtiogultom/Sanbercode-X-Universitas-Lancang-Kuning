@extends('layout.master')

@section('title')
Edit Cast
@endsection

@section('content')
    <h1>Edit Cast</h1>

    @if ($cast)
        <form action="/cast/{{ $cast->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" value="{{ $cast->nama }}">
            </div>

            <div class="form-group">
                <label>Umur</label>
                <input type="number" class="form-control" name="umur" value="{{ $cast->umur }}">
            </div>

            <div class="form-group">
                <label>Bio</label>
                <textarea name="bio" id="" cols="30" rows="10" class="form-control">{{ $cast->bio }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    @else
        <p>Cast member not found.</p>
    @endif
@endsection