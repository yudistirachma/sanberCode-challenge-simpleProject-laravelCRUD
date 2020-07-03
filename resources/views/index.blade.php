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
            <th scope="col">Detail</th>
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
                    <a class="badge badge-pill badge-danger" href="/pertanyaan/{{$d->id}}">hapus</a>
                </td>
                <td><a href="/pertanyaan/{{$d->id}}">lihat</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection