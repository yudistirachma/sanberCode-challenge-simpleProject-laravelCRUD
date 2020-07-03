<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Jawaban extends Model
{
    // public static function getAll($id)
    // {
    //     DB::table('pertanyaan')->get();
    // }
    public static function getAll($id)
    {
        return DB::table('jawaban')->where('pertanyaan_id', $id)->get();
    }

    public static function get($id)
    {
        return DB::table('pertanyaan')->where('id', $id)->get();
    }

    public static function store($isi, $id)
    {
        unset($isi["_token"]);
        return DB::table('jawaban')->insert(['pertanyaan_id' => $id, 'isi' => $isi["isi"]]);
    }
}
