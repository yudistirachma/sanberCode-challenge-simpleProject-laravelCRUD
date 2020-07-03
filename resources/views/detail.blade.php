@extends('layout.app');
@section('title')
    Detail
@endsection
@section('content')
    <div class="card">
    <div class="card-body">
        <h5 class="card-title">{{$data[0]->judul}}</h5>
        <p class="card-text">{{$data[0]->isi}}</p>
        <p class="card-link"><span class="badge mr-2 badge-pill badge-info">created : {{$data[0]->tanggalBuat}}</span><span class="badge badge-pill badge-primary">edited : {{$data[0]->tanggalEdit}}</span></p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item card-subtitle mb-2 text-muted">Jawaban</li>
        @foreach ($jawaban as $isi)
            <li class="list-group-item">{{$isi->isi}}</li>
        @endforeach
    </ul>
    </div>
@endsection