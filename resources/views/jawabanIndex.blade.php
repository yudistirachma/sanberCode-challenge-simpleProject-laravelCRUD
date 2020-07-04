@extends('layout.app');
@section('title')
    jawaban
@endsection
@section('content')
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Judul : {{$pertanyaan[0]->judul}}</h5>
    <p class="card-text">{{$pertanyaan[0]->isi}}</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item card-subtitle mb-2 text-muted">Jawaban</li>
    @foreach ($jawaban as $isi)
        <li class="list-group-item">{{$isi->isi}}</li>
    @endforeach
  </ul>
  <div class="card-body">
    <form class="ml-4 mr-4" action="/jawaban/{{$pertanyaan[0]->id}}" method="post">
        @csrf
        <div class="form-group">
            <label for="isi">jawab : </label>
            <textarea class="form-control" required name="isi" rows="5" id="isi"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
@endsection