<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCutisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cutis', function (Blueprint $table) {
            $table->id('id_cuti');
            $table->integer('id_user');
            $table->integer('jatah_cuti');
            $table->integer('cuti_dipakai')->default(0);
            $table->integer('sisa_cuti_tahun_lalu')->default(0);
            $table->integer('sisa_cuti_tahun_ini')->default(0);
            $table->integer('total_sisa_cuti')->default(0);
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
        Schema::dropIfExists('cutis');
    }
}
