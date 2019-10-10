<?php

use Illuminate\Database\Seeder;

class TrendTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('t_trends')->insert([
            [
                'id_trend'  			=> 1,
                'simbol_trend'  		=> 'img/sdgs/trend up.png',
                'keterangan'		    => 'trend up',

            ],
            [
                'id_trend'  			=> 2,
                'simbol_trend'  		=> 'img/sdgs/trend better.png',
                'keterangan'		    => 'trend better',

            ],
            [
                'id_trend'  			=> 3,
                'simbol_trend'  		=> 'img/sdgs/trend constant.png',
                'keterangan'		    => 'trend constant',

            ],
            [
                'id_trend'  			=> 4,
                'simbol_trend'  		=> 'img/sdgs/trend down.png',
                'keterangan'		    => 'trend down',

            ],
            [
                'id_trend'  			=> 5,
                'simbol_trend'  		=> 'img/sdgs/trend not yet.png',
                'keterangan'		    => 'trend not yet',

            ]
            ]);

    }
}
