<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SubTableSeeder extends Seeder
{
    public function run()
    {
      $date = Carbon::now();
      $createdDate = clone($date);
      // \App\SubIndikator_model::insert([
      DB::table('t_m_subindikator')->insert([
        [
          'subindikator'      => 'Proporsi makalah penelitian yang dilihat atau diunduh',
          // // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 1,
          // 'fk_id_m_sumberdata'=> 13,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Proporsi makalah yang di sitasi dalam pedoman medis',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 1,
          // 'fk_id_m_sumberdata'=> 13,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Jumlah publikasi',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 1,
          // 'fk_id_m_sumberdata'=> 13,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Jumlah lulusan dalam bidang kesehatan',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 2,
          // 'fk_id_m_sumberdata'=> 1,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Kolaborasi dengan istitusi kesehatan lokal/global untuk meningkatkan kesehatan dan kesejahteraan',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 3,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Program penjangkauan di masyarakat setempat untuk meningkatkan kesehatan dan kesejahteraan',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 3,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Layanan gratis untuk kesehatan seksual dan reproduksi untuk mahasiswa',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 3,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Dukungan kesehatan mental gratis untuk mahamahasiswa dan staf',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 3,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Akses komunitas/masyarakat ke fasilitas olahraga universitas',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 3,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Proporsi makalah penelitian yang dilihat atau diunduh',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 4,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Proporsi makalah penelitian yang termasuk dalam 10% dari jurnal yang telah didefinisikan oleh Citescore',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 4,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Jumlah publikasi',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 4,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Jumlah lulusan dengan kualifikasi mengajar',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 5,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Akses ke sumber daya pendidikan bagi mereka yang tidak belajar di universitas',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 6,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Kegiatan pendidikan yang terbuka untuk umum, seperti kuliah atau kursus pendidikan khusus',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 6,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Acara pendidikan yang menyediakan pelatihan kejuruan bagi mereka yang tidak belajar di universitas',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 6,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Kegiatan penjangkauan pendidikan di komunitas lokal, termasuk sekolah',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 6,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Kebijakan untuk memastikan bahwa kegiatan ini terbuka untuk umum',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 6,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Proporsi dari mahasiswa generasi pertama',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 7,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Proporsi dari total hasil penelitian yang ditulis oleh perempuan di universitas ',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 8,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Proporsi dari makalah tentang kesetaraan gender dalam 10% jurnal teratas yang didefinisikan oleh Citescore',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 8,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Jumlah publikasi',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 8,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],[
          'subindikator'      => 'Proporsi dari mahasiswa perempuan generasi pertama ',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 9,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Tracking application,tingkat penerimaan  dan penyelesaian untuk siswa perempuan',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 10,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],[
          'subindikator'      => 'Mempertimbangkan masalah regional ketika mengembangkan kebijakan tentang partisipasi perempuan',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 10,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Penyediaan skema akses perempuan yang sesuai, seperti mentoring',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 10,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],[
          'subindikator'      => 'Encouraging applications di daerah dimana perempuan under-represented',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 10,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Proporsi akademisi perempuan senior',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 11,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],[
          'subindikator'      => 'Proporsi perempuan yang menerima gelar',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 12,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Kebijakan non-diskriminasi terhadap perempuan ',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 13,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],[
          'subindikator'      => 'Kebijakan non-diskriminasi terhadap waria/transgender',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 13,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Kebijakan maternitas/maternity dan paternity yang mendukung partisipasi perempuan',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 13,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],[
          'subindikator'      => 'Fasilitas pengasuhan anak yang mudah diakses mahasiswa',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 13,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Fasilitas pengasuhan anak yang mudah diakses staff',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 13,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],[
          'subindikator'      => 'Skema mentoring perempuan dengan partisipasi luas',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 13,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Tingkat kelulusan perempuan, dengan rencana aksi yang sesuai',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 13,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],[
          'subindikator'      => 'Kebijakan melindungi mereka yang melaporkan diskriminasi',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 13,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Proporsi makalah penelitian yang termasuk dalam 10% dari jurnal yang telah didefinisikan oleh Citescore',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 14,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],[
          'subindikator'      => 'Jumlah publikasi',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 14,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Pembayaran upah untuk staf dan pengajar',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 15,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],[
          'subindikator'      => 'Pengakuan hak serikat dan pekerja',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 15,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Kebijakan tentang diskriminasi di tempat kerja ',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 15,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],[
          'subindikator'      => 'Kebijakan menentang perbudakan moderen, kerja paksa, perdagangan manusia, dan pekerja anak-anak',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 15,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Jaminan standar yang sama untuk tenanga outsourcing',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 15,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],[
          'subindikator'      => 'Kebijakan seputar pay scale equity dan gender pay gaps',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 15,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Komitmen untuk melacak dan mengatasi masalah seputar pay scale equity dan gender pay gaps',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 15,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],[
          'subindikator'      => 'Proses bagi karyawan untuk mengajukan banding atas keputusan',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 15,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Proporsi siswa yang mengambil penempatan kerja',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 16,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],[
          'subindikator'      => 'Proporsi karyawan dengan kontrak aman/tetap',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 17,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Penelitian relevan dengan industri, inovasi, dan infrastruktur',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 18,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],[
          'subindikator'      => 'Paten yang mengutip penelitian',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 19,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'University spin-off',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 20,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],[
          'subindikator'      => 'Pendapatan penelitian dari industri',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 21,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Proporsi makalah dalam 10 persen jurnal teratas sebagaimana didefinisikan oleh Citescore ',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 22,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],[
          'subindikator'      => 'Field-weighted citation index of papers produced by the university',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 22,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Jumlah Publikasi',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 22,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],[
          'subindikator'      => 'Mahasiswa generasi pertama (first generation students)',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 23,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Siswa dari negara berkembang',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 24,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Proporsi siswa penyandang cacat',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 25,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Proporsi karyawan penyandang cacat',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 25,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Kebijakan penerimaan non-diskriminatif',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 26,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Aplikasi pelacakan dan tingkat penerimaan kelompok yang kurang terwakili (under-represented group)',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 26,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Memberikan program untuk merekrut dari kelompok yang kurang terwakili  (under-represented group)',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 26,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Kebijakan anti-diskriminasi dan anti-pelecehan untuk staf dan siswa',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 26,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Keberadaan keanekaragaman dan kesetaraan komite atau petugas ',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 26,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Memberikan bimbingan atau program dukungan lain yang ditujukan untuk siswa dan staf dari kelompok yang kurang terwakili (under-represented group)',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 26,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Memberikan kesadaran lintas budaya atau kampanye pelatihan (training campaigns)',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 26,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Proporsi makalah dalam 10 persen jurnal teratas sebagaimana didefinisikan oleh Citescore ',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 27,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Field-weighted citation index of papers produced by the university ',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 27,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Jumlah publikasi',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 27,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Akses publik ke gedung-gedung penting di universitas',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 28,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Akses publik ke perpustakaan universitas ',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 28,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Akses publik ke museum dan koleksi universitas',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 28,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Akses publik ke ruang dan monumen yang signifikan di dalam universitas ',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 28,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Menyediakan acara artistik untuk anggota masyarakat, seperti konser',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 28,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Merekam dan melestarikan warisan lokal ',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 28,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Pengeluaran untuk seni dan warisan ',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 29,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Target sekitar komuter berkelanjutan ',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 30,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Mempromosikan Komuter Berkelanjutan ',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 30,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Mendorong telecommuting, kerja jarak jauh atau minggu kerja padat ',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 30,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Menyediakan perumahan yang terjangkau bagi siswa ',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 30,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Menyediakan perumahan yang terjangkau untuk staf ',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 30,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Memberikan prioritas kepada pejalan kaki di kampus ',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 30,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Bekerja dengan pihak berwenang setempat dalam masalah perencanaan, termasuk penyediaan perumahan yang terjangkau bagi penduduk lokal ',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 30,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Membangun ke standar yang berkelanjutan',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 30,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Menggunakan kembali situs brownfield(opposite lahan hijau) /(bekas2 industri)',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 30,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Proporsi makalah dalam 10 persen jurnal teratas sebagaimana didefinisikan oleh Citescore ',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 31,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Field-weighted citation index of papers produced by the university ',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 31,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Jumlah publikasi',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 31,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Kebijakan sumber etis barang (legal/ilegal)',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 32,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Kebijakan tentang pembuangan limbah berbahaya yang tepat ',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 32,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Kebijakan meminimalkan limbah yang dikirim ke TPA / memaksimalkan daur ulang ',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 32,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Kebijakan meminimalkan penggunaan plastik',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 32,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Kebijakan meminimalkan penggunaan barang sekali pakai ',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 32,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Bukti bahwa kebijakan ini juga berlaku untuk layanan outsourcing ',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 32,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Bukti bahwa kebijakan ini juga berlaku untuk pemasok outsourcing ',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 32,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Proporsi limbah yang didaur ulang ',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 33,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Proporsi limbah yang tidak dikirim ke TPA ',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 33,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Publikasi laporan keberlanjutan',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 34,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Proporsi makalah dalam 10 persen jurnal teratas sebagaimana didefinisikan oleh Citescore ',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 35,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Field-weighted citation index of papers produced by the university ',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 35,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Jumlah publikasi',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 35,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Penggunaan energi rendah karbon ',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 36,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Memberikan pendidikan lokal tentang dampak perubahan iklim ',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 37,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Menghasilkan rencana aksi iklim universitas',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 37,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Bekerja dengan pemerintah lokal atau nasional untuk menangani perencanaan perubahan iklim ',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 37,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Menginformasikan dan mendukung pemerintah tentang masalah yang terkait dengan perubahan iklim',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 37,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Bekerja sama dengan LSM tentang perubahan iklim',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 37,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Proporsi makalah dalam 10 persen jurnal teratas sebagaimana didefinisikan oleh Citescore ',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 38,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Field-weighted citation index of papers produced by the university ',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 38,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Jumlah publikasi',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 38,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Representasi yang dipilih pada badan pengelola universitas ',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 39,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Pengakuan perhimpunan siswa',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 39,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Kebijakan untuk melibatkan pemangku kepentingan/ stakeholderuniversitas',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 39,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Badan partisipatif yang mencakup penduduk lokal',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 39,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Kebijakan pada kejahatan terorganisir dan korupsi ',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 39,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Kebijakan yang menjamin kebebasan akademik',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 39,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Publikasi data keuangan universitas ',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 39,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Memberikan saran ahli kepada pemerintah ',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 40,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Memberikan penjangkauan kepada pemerintah pusat dan daerah ',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 40,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Menghasilkan penelitian atas permintaan pemerintah atau yang langsung digunakan oleh pemerintah ',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 40,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Menyediakan platform netral untuk diskusi topik yang menantang ',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 40,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Proporsi lulusan dalam penegakan hukum dan sipil ',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 41,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Proporsi publikasi akademik dengan co-author dari negara lain',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 42,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Jumlah publikasi yang terkait dengan 11 SDG ',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 42,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Pengembangan kebijakan dengan pemerintah atau LSM',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 43,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Mempromosikan dialog lintas sektoral dengan pemerintah atau LSM',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 43,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Berkolaborasi secara internasional untuk mengambil data terkait SDG ',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 43,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Bekerja secara internasional untuk mempromosikan best practice di sekitar SDGs',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 43,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Mendukung pendidikan LSM sehubungan dengan SDG',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 43,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ],
        [
          'subindikator'      => 'Publikasi laporan SDG',
          // 'waktu_pengambilan' => null,
          'fk_id_indikator'   => 44,
          // 'fk_id_m_sumberdata'=> null,
          'created_at'        => $createdDate,
          'updated_at'        => $createdDate
        ]
      ]);
    }
}
