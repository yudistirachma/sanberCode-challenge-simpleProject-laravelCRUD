<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pertanyaan;
use Illuminate\Support\Facades\Redirect;

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
        echo $hasil;
    }
}
