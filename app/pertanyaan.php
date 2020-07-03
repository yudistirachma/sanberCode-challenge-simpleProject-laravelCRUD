<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class pertanyaan extends Model
{
    public static function getAll()
    {
        return DB::table('pertanyaan')->get();
    }
    public static function store($data)
    {
        unset($data["_token"]);
        $newData = DB::table('pertanyaan')->insert($data);
        return $newData;
    }
    public static function detail($id)
    {
        return DB::table('pertanyaan')->where('id', $id)->get();
    }
}
