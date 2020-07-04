<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pertanyaan;
use Illuminate\Support\Facades\Redirect;
use App\Jawaban;

class PertanyaanController extends Controller
{
    public function index()
    {
        $data = pertanyaan::getAll();
        return view('index', compact('data'));
    }
    public function create()
    {
        return view('create');
    }
    public function store()
    {
        $data = request()->all();
        $hasil = pertanyaan::store($data);
        if ($hasil) {
            return redirect()->action('PertanyaanController@index');
        } else {
            redirect('/pertanyaan/create');
        }
    }
    public function detail($id)
    {
        $jawaban = Jawaban::getAll($id);
        $data = pertanyaan::detail($id);
        return view('detail', compact('data', 'jawaban'));
    }
    public function edit($id)
    {
        $data = pertanyaan::detail($id);
        return view('edit', compact('data'));
    }
    public function update($id)
    {
        $data = request()->all();
        pertanyaan::ubah($id, $data);
        return redirect('/pertanyaan');
    }
    public function delete($id)
    {
        pertanyaan::hapus($id);
        return redirect('/pertanyaan');
    }
}
