<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterSubindikatorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_m_subindikator', function (Blueprint $table) {
            $table->bigIncrements('id_m_subindikator');
            $table->string('subindikator');
            $table->json('waktu pengambilan');
            $table->bigIncrements('fk_id_indikator');
            $table->json('fk_id_m_sumberdata'); //bingung
            $table->foreign('fk_id_indikator','fk_master_subindikator')->references('id_indikator')->on('t_m_indikator')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('fk_id_m_sumberdata','fk_sumberdata_subindikator')->references('id_m_sumberdata')->on('t_m_sumberdata')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_m_subindikator');
    }
}
