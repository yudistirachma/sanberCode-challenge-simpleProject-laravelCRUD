
@extends('layout.app')
@section('title')
    Edit
@endsection
@section('content')
    <form class="ml-4 mr-4" action="/pertanyaan/{{$data[0]->id}}" method="post">
        @csrf
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" value="{{$data[0]->judul}}" name="judul" id="judul">
        </div>
        <div class="form-group">
            <label for="isi">Comment:</label>
            <textarea class="form-control" name="isi" rows="5" id="isi">{{$data[0]->isi}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">edit</button>
    </form>
@endsection