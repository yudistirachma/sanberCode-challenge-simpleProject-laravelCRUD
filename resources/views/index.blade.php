@extends('layout.app')
@section('title')
    Hasil Data
@endsection
@section('content')
<table class="table">
    <thead>
        <tr>
            <th scope="col">Pertanyaan</th>
            <th scope="col">isi</th>
            <th scope="col">jawaban</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $d)
            <tr>
                <td>{{$d->judul}}</td>
                <td>{{$d->isi}}</td>
                <td><a href="/jawaban/{{$d->id}}">lihat</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection