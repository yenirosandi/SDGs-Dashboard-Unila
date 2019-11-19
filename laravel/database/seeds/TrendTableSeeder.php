<?php

use Illuminate\Database\Seeder;

class TrendTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('t_trends')->insert([
            [
                'id_trend'  			=> 1,
                'simbol_trend'  	    => '<i class="fas fa-arrow-circle-up" style="color:#00d43f;"></i>',
                'keterangan'		    => 'Data Naik',
                'poin'                  => 1

            ],
            [
                'id_trend'  			=> 2,
                'simbol_trend'  	    => '<i class="fas fa-arrow-circle-right" style="color:#ffb700;"></i>',
                'keterangan'		    => 'Data Konstan',
                'poin'                  => 0

            ],
            [
                'id_trend'  			=> 3,
                'simbol_trend'  	    => '<i class="fas fa-arrow-circle-down" style="color:#ed0000;"></i>',
                'keterangan'		    => 'Data Turun',
                'poin'                  => -1

            ],
            [
                'id_trend'  			=> 4,
                'simbol_trend'  	    => '<i class="fas fa-ellipsis-h"></i>',
                'keterangan'		    => 'Tidak Ada Data',
                'poin'                  => 0


            ]
            ]);

    }
}
