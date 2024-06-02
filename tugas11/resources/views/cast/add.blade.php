@extends('layout.master')

@section('title')
 ADD cast
@endsection

@section('content')
<form action="/cast" method="post" >

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    @csrf
  <div class="form-group">
    <label>nama</label>
    <input type="text" class="form-control" name="nama">
  </div>
  <div class="form-group">
    <label>umur</label>
    <input type="integer" class="form-control" name="umur">
  </div>
  <div class="form-group">
    <label>bio</label>
   <textarea name="bio" id="" cols="30" rows="10" class="form control"></textarea>
  </div>
  <button type="submit" class="btn btn-secondary">Submit</button>
</form>

@endsection