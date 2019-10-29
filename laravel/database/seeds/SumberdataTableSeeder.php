<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SumberdataTableSeeder extends Seeder
{
    public function run()
    {
      $date = Carbon::now();
      $createdDate = clone($date);
      // \App\Sumberdata_model::insert([
      DB::table('t_m_sumberdata')->insert([
        [
          'sumberdata' => 'Fakultas Kedokteran',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'Fakultas Ekonomi dan Bisnis',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'Fakultas Hukum',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'Fakultas Keguruan dan Pendidikan',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'Fakultas Pertanian',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'Fakultas Teknik',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'Fakultas Ilmu Sosial dan Politik',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'Fakultas Matematika dan Ilmu Pengetahuan Alam',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'Rektor',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'Wakil Rektor 1',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'Wakil Rektor 2',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'Wakil Rektor 3',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'LPPM',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'BAAK',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'PMB',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'UPT TIK',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'Puslitbang Wanita, Anak dan Pembangunan',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'Biro Kepegawaian',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'CCED Unila',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'Unila:Kepegawaian Akademik/Non-Akademik',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'Sentra HAKI',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'Sentra Inovasi dan Inkubator Bisnis',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'UPT Perpustakaan',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'SPI',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'SDGs Center',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'see',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'Universitas Lampung',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'Wakil Rektor 4',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ]
      ]);
    }
}
