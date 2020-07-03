<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jawaban;
use Illuminate\Support\Facades\DB;

class JawabanController extends Controller
{
    public function index($id)
    {
        $jawaban = Jawaban::getAll($id);
        $pertanyaan = Jawaban::get($id);
        // dd($pertanyaan);
        return view('jawabanIndex', compact('jawaban', 'pertanyaan'));
    }
    public function store($id)
    {
        $data = request()->all();
        $hasil = Jawaban::store($data, $id);
        return redirect('/jawaban/' . $id);
    }
}
