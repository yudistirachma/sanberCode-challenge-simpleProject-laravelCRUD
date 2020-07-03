
@extends('layout.app')
@section('title')
    Create
@endsection
@section('content')
    <form class="ml-4 mr-4" action="/pertanyaan" method="post">
        @csrf
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" name="judul" id="judul">
        </div>
        <div class="form-group">
            <label for="isi">Comment:</label>
            <textarea class="form-control" name="isi" rows="5" id="isi"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection