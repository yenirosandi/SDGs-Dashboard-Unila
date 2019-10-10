<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePencapaianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_pencapaian', function (Blueprint $table) {
            $table->bigIncrements('id_pencapaian');
            $table->integer('tahun');
            $table->string('fk_id_goal',5);
            $table->foreign('fk_id_goal')
                  ->references('id_goal')->on('t_goals')
                  ->onDelete('cascade')->onUpdate('cascade');
            $table->integer('fk_id_indikator')->unsigned();
            $table->foreign('fk_id_indikator')
                  ->references('id_indikator')->on('t_m_indikator')
                  ->onDelete('cascade')->onUpdate('cascade');
            $table->integer('fk_id_m_subindikator')->unsigned();
            $table->foreign('fk_id_m_subindikator')
                  ->references('id_m_subindikator')->on('t_m_subindikator')
                  ->onDelete('cascade')->onUpdate('cascade');
            $table->integer('fk_id_trend')->unsigned();
            $table->foreign('fk_id_trend')
                  ->references('id_trend')->on('t_trends')
                  ->onDelete('cascade')->onUpdate('cascade');
            $table->string('nilai');
            $table->string('keterangan');
            $table->string('berkas');

            // $table->foreign('fk_id_goal','fk_goal_pencapaian')->references('id_goal')->on('t_goals')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('fk_id_indikator','fk_master_pencapaian')->references('id_indikator')->on('t_m_indikator')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('fk_id_m_subindikator','fk_sub_pencapaian')->references('id_m_subindikator')->on('t_m_subindikator')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('fk_id_trend','fk_trend_pencapaian')->references('id_trend')->on('t_trends')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('t_pencapaian');
    }
}
