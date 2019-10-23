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
            $table->string('waktu_pengambilan')->nullable();
            $table->integer('fk_id_indikator')->unsigned();
            $table->integer('fk_id_m_sumberdata')->unsigned()->nullable();
            // $table->dropUnique('fk_id_m_sumberdata'); //bingung
            $table->foreign('fk_id_indikator')
                  ->references('id_indikator')->on('t_m_indikator')
                  ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('fk_id_m_sumberdata')
                  ->references('id_m_sumberdata')->on('t_m_sumberdata')
                  ->onDelete('cascade')->onUpdate('cascade');

            // $table->unique(['id_m_subindikator', 'fk_id_indikator']);

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
