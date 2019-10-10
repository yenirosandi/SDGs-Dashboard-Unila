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
            $table->Increments('id_m_subindikator');
            $table->string('subindikator');
            // $table->string('waktu pengambilan');
            // $table->integer('fk_id_indikator')->unsigned();
            // $table->integer('fk_id_m_sumberdata')->unsigned(); //bingung
            // $table->foreign('fk_id_indikator')->references('id_indikator')->on('t_m_indikator')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('fk_id_m_sumberdata')->references('id_m_sumberdata')->on('t_m_sumberdata')->onDelete('cascade')->onUpdate('cascade');
            $table->string('waktu pengambilan');
            $table->integer('fk_id_indikator')->unsigned();
            $table->integer('fk_id_m_sumberdata')->unsigned(); //bingung
            $table->foreign('fk_id_indikator')
                  ->references('id_indikator')->on('t_m_indikator')
                  ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('fk_id_m_sumberdata')
                  ->references('id_m_sumberdata')->on('t_m_sumberdata')
                  ->onDelete('cascade')->onUpdate('cascade');

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