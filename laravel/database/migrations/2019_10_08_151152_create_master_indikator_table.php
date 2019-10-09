<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterIndikatorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_m_indikator', function (Blueprint $table) {
            $table->bigIncrements('id_indikator');
            $table->string('indikator');
            // $table->integer('fk_id_goal')->unsigned();
            $table->timestamps();
        });
        // Schema::table('t_m_indikators', function (Blueprint $table) {
        //   $table->foreign('fk_id_goal')
        //     ->references('id_goal')->on('t_goals')
        //     ->onDelete('cascade')->onUpdate('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_m_indikators');
    }
}
