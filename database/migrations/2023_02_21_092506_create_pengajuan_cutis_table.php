<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanCutisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_cutis', function (Blueprint $table) {
            $table->id('id_pengajuan_cuti');
            $table->integer('id_user');
            $table->date('tgl_mulai');
            $table->integer('lama_cuti');
            $table->string('alasan');
            $table->string('keterangan');
            $table->string('status_hrd');
            $table->string('status_atasan');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengajuan_cutis');
    }
}
