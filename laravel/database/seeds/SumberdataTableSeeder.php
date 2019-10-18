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
          'sumberdata' => 'MOU',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'LP3M',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'Kemahasiswaan',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'PMB',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'BAK',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'PUSKOM',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'Pusat Studi Wanita',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'Kepegawaian, Akademik dan Struktural',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'SIAKAD',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'CCED Unila',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'Kepegawaian Akademik/Non-Akademik',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'Sentra HAKI Unila',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'Sentra Inkubator Unila',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'BAAK',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'IT Unila',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'Pengabdian Masyarakat Unila',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'BPI',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'Dewan Riset Daerah (DRD)',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'Pemerintah Daerab',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'Tenaga Ahli',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'Kuliah Umum',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'sumberdata' => 'Universitas Lampung',
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ]
      ]);
    }
}
