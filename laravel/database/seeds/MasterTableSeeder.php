<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class MasterTableSeeder extends Seeder
{
    public function run()
    {
      $date = Carbon::now();
      $createdDate = clone($date);
      \App\Indikator_model::insert([
      // DB::table('t_m_indikator')->insert([
        [
          'indikator'  		=> 'Penelitian dibidang kesehatan dan kesejahteraan',
          'fk_id_goal'		=> 3,
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'indikator'  		=> 'Jumlah lulusan dalam bidang kesehatan',
          'fk_id_goal'		=> 3,
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'indikator'  		=> 'Kolaborasi dan layanan kesehatan',
          'fk_id_goal'		=> 3,
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'indikator'  		=> 'Penelitian dibidang pembelajaran (pedagogy)',
          'fk_id_goal'		=> 4,
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'indikator'  		=> 'Jumlah lulusan dengan kualifikasi mengajar',
          'fk_id_goal'		=> 4,
          'created_at' => $createdDate,
          'updated_at' => $createdDate
        ],
        [
          'indikator'  		=> 'Tindakan pembelajaran seumur hidup ',
          'fk_id_goal'		=> 4,
          'created_at' => $createdDate,
            'updated_at' => $createdDate
        ],
        [
          'indikator'  		=> 'Proporsi dari mahasiswa generasi pertama',
          'fk_id_goal'		=> 4,
          'created_at' => $createdDate,
            'updated_at' => $createdDate
        ],
        [
          'indikator'  		=> 'Penelitian dibidang kesetaraan gender',
          'fk_id_goal'		=> 5,
          'created_at' => $createdDate,
            'updated_at' => $createdDate
        ],
        [
          'indikator'  		=> 'Proporsi dari mahasiswa perempuan generasi pertama ',
          'fk_id_goal'		=> 5,
          'created_at' => $createdDate,
            'updated_at' => $createdDate
        ],
        [
          'indikator'  		=> 'Tindakan akses mahasiswa',
          'fk_id_goal'		=> 5,
          'created_at' => $createdDate,
            'updated_at' => $createdDate
        ],
        [
          'indikator'  		=> 'Proporsi akademisi perempuan senior',
          'fk_id_goal'		=> 5,
          'created_at' => $createdDate,
            'updated_at' => $createdDate
        ],
        [
          'indikator'  		=> 'Proporsi perempuan yang menerima gelar',
          'fk_id_goal'		=> 5,
          'created_at' => $createdDate,
            'updated_at' => $createdDate
        ],
        [
          'indikator'  		=> 'Ukuran kemajuan wanita',
          'fk_id_goal'		=> 5,
          'created_at' => $createdDate,
            'updated_at' => $createdDate
        ],
        [
          'indikator'  		=> 'Penelitian dibidang pertumbuhan ekonomi dan ketenagakerjaan',
          'fk_id_goal'		=> 8,
          'created_at' => $createdDate,
            'updated_at' => $createdDate
        ],
        [
          'indikator'  		=> 'Praktik ketenagakerjaan',
          'fk_id_goal'		=> 8,
          'created_at' => $createdDate,
            'updated_at' => $createdDate
        ],
        [
          'indikator'  		=> 'Proporsi siswa yang mengambil penempatan kerja',
          'fk_id_goal'		=> 8,
          'created_at' => $createdDate,
            'updated_at' => $createdDate
        ],
        [
          'indikator'  		=> 'Proporsi karyawan dengan kontrak aman/tetap',
          'fk_id_goal'		=> 8,
          'created_at' => $createdDate,
            'updated_at' => $createdDate
        ],
        [
          'indikator'  		=> 'Penelitian relevan dengan industri, inovasi, dan infrastruktur',
          'fk_id_goal'		=> 9,
          'created_at' => $createdDate,
            'updated_at' => $createdDate
        ],
        [
          'indikator'  		=> 'Paten yang mengutip penelitian',
          'fk_id_goal'		=> 9,
          'created_at' => $createdDate,
            'updated_at' => $createdDate
        ],
        [
          'indikator'  		=> 'University spin-off',
          'fk_id_goal'		=> 9,
          'created_at' => $createdDate,
            'updated_at' => $createdDate
        ],
        [
          'indikator'  		=> 'Pendapatan penelitian dari industri ',
          'fk_id_goal'		=> 9,
          'created_at' => $createdDate,
            'updated_at' => $createdDate
        ],
        [
          'indikator'  		=> 'Penelitian tentang pengurangan kesenjangan',
          'fk_id_goal'		=> 10,
          'created_at' => $createdDate,
            'updated_at' => $createdDate
        ],
        [
          'indikator'  		=> 'Mahasiswa generasi pertama (first generation students)',
          'fk_id_goal'		=> 10,
          'created_at' => $createdDate,
            'updated_at' => $createdDate
        ],
        [
          'indikator'  		=> 'Siswa dari negara berkembang',
          'fk_id_goal'		=> 10,
          'created_at' => $createdDate,
            'updated_at' => $createdDate
        ],
        [
          'indikator'  		=> 'Siswa dan staf penyandang cacat ',
          'fk_id_goal'		=> 10,
          'created_at' => $createdDate,
            'updated_at' => $createdDate
        ],
        [
          'indikator'  		=> 'Tindakan melawan diskriminasi ',
          'fk_id_goal'		=> 10,
          'created_at' => $createdDate,
            'updated_at' => $createdDate
        ],
        [
          'indikator'  		=> 'Penelitian tentang kota dan masyarakat yang berkelanjutan',
          'fk_id_goal'		=> 11,
          'created_at' => $createdDate,
            'updated_at' => $createdDate
        ],
        [
          'indikator'  		=> 'Dukungan seni dan warisan',
          'fk_id_goal'		=> 11,
          'created_at' => $createdDate,
            'updated_at' => $createdDate
        ],
        [
          'indikator'  		=> 'Pengeluaran untuk seni dan warisan ',
          'fk_id_goal'		=> 11,
          'created_at' => $createdDate,
            'updated_at' => $createdDate
        ],
        [
          'indikator'  		=> 'Praktek berkelanjutan',
          'fk_id_goal'		=> 11,
          'created_at' => $createdDate,
            'updated_at' => $createdDate
        ],
        [
          'indikator'  		=> 'Penelitian tentang bertanggung jawab pada konsumsi dan produksi',
          'fk_id_goal'		=> 12,
          'created_at' => $createdDate,
            'updated_at' => $createdDate
        ],
        [
          'indikator'  		=> 'Tindakan operasional ',
          'fk_id_goal'		=> 12,
          'created_at' => $createdDate,
            'updated_at' => $createdDate
        ],
        [
          'indikator'  		=> 'Proporsi limbah daur ulang',
          'fk_id_goal'		=> 12,
          'created_at' => $createdDate,
            'updated_at' => $createdDate
        ],
        [
          'indikator'  		=> 'Publikasi laporan keberlanjutan (SDGs)',
          'fk_id_goal'		=> 12,
          'created_at' => $createdDate,
            'updated_at' => $createdDate
        ],
        [
          'indikator'  		=> 'Penelitian tentang aksi iklim ',
          'fk_id_goal'		=> 13,
          'created_at' => $createdDate,
            'updated_at' => $createdDate
        ],
        [
          'indikator'  		=> 'Penggunaan energi rendah karbon ',
          'fk_id_goal'		=> 13,
          'created_at' => $createdDate,
            'updated_at' => $createdDate
        ],
        [
          'indikator'  		=> 'Tindakan pendidikan lingkungan',
          'fk_id_goal'		=> 13,
          'created_at' => $createdDate,
            'updated_at' => $createdDate
        ],
        [
          'indikator'  		=> 'Penelitian tentang perdamaian, keadilan, dan institusi yang kuat',
          'fk_id_goal'		=> 16,
          'created_at' => $createdDate,
            'updated_at' => $createdDate
        ],
        [
          'indikator'  		=> 'Tindakan tata kelola universitas',
          'fk_id_goal'		=> 16,
          'created_at' => $createdDate,
            'updated_at' => $createdDate
        ],
        [
          'indikator'  		=> 'Bekerja dengan pemerintah',
          'fk_id_goal'		=> 16,
          'created_at' => $createdDate,
            'updated_at' => $createdDate
        ],
        [
          'indikator'  		=> 'Proporsi lulusan dalam penegakan hukum dan sipi',
          'fk_id_goal'		=> 16,
          'created_at' => $createdDate,
            'updated_at' => $createdDate
        ],
        [
          'indikator'  		=> 'Penelitian yang berkolaborasi dengan peneliti negara lain ',
          'fk_id_goal'		=> 17,
          'created_at' => $createdDate,
            'updated_at' => $createdDate
        ],
        [
          'indikator'  		=> 'Hubungan/relasi untuk mendukung tujuan',
          'fk_id_goal'		=> 17,
          'created_at' => $createdDate,
            'updated_at' => $createdDate
        ],
        [
          'indikator'  		=> 'Publikasi laporan SDGs',
          'fk_id_goal'		=> 17,
          'created_at' => $createdDate,
            'updated_at' => $createdDate
        ]
      ]);
    }
}
