<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;


class CreateJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban', function (Blueprint $table) {
            $table->id('id');
            $table->id('pertanyaan_id');
            $table->foreign('pertanyaan_id')->references('id')->on('pertanyaan');
            $table->string('isi', 191)->nullable(false)->change();
            $table->timestamp('tanggalBuat')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('tanggalEdit')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawaban', function (Blueprint $table) {
            $table->dropForeign('lists_pertanyaan_id_foreign');
            $table->dropIndex('lists_pertanyaan_id_index');
            $table->dropColumn('user_id');
        });
    }
}
