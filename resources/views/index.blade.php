@extends('layout.app')
@section('title')
    Hasil Data
@endsection
@section('content')
<table class="table">
    <thead>
        <tr>
            <th scope="col">Judul</th>
            <th scope="col">Isi</th>
            <th scope="col">Jawaban</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $d)
            <tr>
                <td>{{$d->judul}}</td>
                <td>{{$d->isi}}</td>

                <td><a href="/jawaban/{{$d->id}}">comment</a></td>
                <td>
                    <a class="badge badge-pill badge-warning" href="/pertanyaan/{{$d->id}}/edit">edit</a>
                    <a class="badge badge-pill badge-primary" href="/pertanyaan/{{$d->id}}">lihat</a>
                    <form class="" action="/pertanyaan/{{$d->id}}" method="post" style="display : inline">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection