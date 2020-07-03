<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JawabanController extends Controller
{
    public function index(Request $request, $id)
    {
        return view('jawabanIndex', ["id" => $id]);
    }
    public function store()
    {
    }
}
