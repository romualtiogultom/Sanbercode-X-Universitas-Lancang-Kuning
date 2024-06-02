@extends('layout.master')

@section('title')
 add cast
@endsection

@section('content')
<a href="/cast/create" class="btn btn-sm btn-primary">add cast</a>
<table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="$cast">#</th>
                <th scope="$cast">nama</th>
                <th scope="$cast">umur</th>
              </tr>
            </thead>
            <tbody>
            @forelse ($cast as $key=>$value)
                    <tr>
             <td>{{$key + 1}}</th>
            <td>{{$value->nama}}</td>
            <td>{{$value->umur}}</td>
              <td>
                 <a href="/cast/{{$value->id}}" class="btn btn-info">Show</a>
                <a href="/cast/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
                <form action="/cast/{{$value->id}}" method="POST">
                      @csrf
                    @method('DELETE')
                                <input type="submit" class="btn btn-danger my-1" value="Delete">
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr colspan="3">
                        <td>No data cast</td>
                    </tr>  
             @endforelse              
            </tbody>
        </table>
@endsection