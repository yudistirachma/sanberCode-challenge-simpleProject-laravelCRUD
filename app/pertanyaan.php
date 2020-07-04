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
    public static function ubah($id, $data)
    {
        unset($data["_token"], $data["_method"]);
        $date = date("Y-m-d H:i:s");
        return DB::table('pertanyaan')
            ->where('id',  $id)
            ->update([
                "judul" => $data["judul"],
                "isi" => $data["isi"],
                "tanggalEdit" => $date
            ]);
    }
    public static function detail($id)
    {
        return DB::table('pertanyaan')->where('id', $id)->get();
    }
    public static function hapus($id)
    {
        DB::table('jawaban')->where('pertanyaan_id', $id)->delete();
        return DB::table('pertanyaan')->where('id', $id)->delete();
    }
}
