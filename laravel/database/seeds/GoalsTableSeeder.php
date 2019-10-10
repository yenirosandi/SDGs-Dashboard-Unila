<?php

use Illuminate\Database\Seeder;

class GoalsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('t_goals')->insert([
          [
            'id_goal'=>'3',
            'nama_goal'=>'Kesehatan yang Baik dan Kesejahteraan',
            'deskripsi_goal'=>'Goal 3 dalam Tujuan Pembangunan Berkelanjutan (TPB) atau yang dikenal dengan sebutan SDGs memiliki tujuan memastikan kehidupan yang sehat dan mempromosikan kesejahteraan untuk semua usia.
                               SDGs dalam universitas berfokus pada penelitian yang dilakukan mengenai kesehatan dapat berupa suatu penyakit yang berdampak besar pada hasil kesehatan di seluruh dunia, dukungan bagi mereka yang memiliki profesi kesehatan, dan kesehatan bagi mahasiswa dan staf.',
            'gambar'=>'img/sdgs/3.png',
          ],
          [
            'id_goal'=>'4',
            'nama_goal'=>'Pendidikan Bermutu',
            'deskripsi_goal'=>'Goal 4 dalam Tujuan Pembangunan Berkelanjutan (TPB) atau yang dikenal dengan sebutan SDGs memiliki tujuan memastikan pendidikan yang inklusif dan berkualitas merata, juga mendukung kesempatan belajar seumur hidup bagi semua.
                               SDGs dalam universitas berfokus pada kontribusi universitas pada awal tahun dan pembelajaran seumur hidup, penelitian pedagogi dan komitmen terhadap pendidikan inklusif.',
            'gambar'=>'img/sdgs/4.png',
          ],
          [
            'id_goal'=>'5',
            'nama_goal'=>'Kesetaraan Gender',
            'deskripsi_goal'=>'Goal 5 dalam Tujuan Pembangunan Berkelanjutan (TPB) atau yang dikenal dengan sebutan SDGs memiliki tujuan mencapai kesetaraan gender dan memberdayakan semua perempuan dan anak perempuan.
                               SDGs dalam universitas berfokus pada penelitian universitas tentang studi gender, kebijakan mereka tentang kesetaraan gender dan komitmen mereka untuk merekrut dan mempromosikan perempuan. SDG ini bukan berarti mengungkapkan secara eksplisit mendukung perempuan, namun kita tidak bisa berharap untuk mengembangkan dunia secara berkelanjutan jika kebutuhan lebih dari separuh populasinya tidak terpenuhi.',
            'gambar'=>'img/sdgs/5.png',
          ],
          [
            'id_goal'=>'8',
            'nama_goal'=>'Pekerjaan Layak dan Pertumbuhan Ekonomi',
            'deskripsi_goal'=>'Goal 8 dalam Tujuan Pembangunan Berkelanjutan (TPB) atau yang dikenal dengan sebutan SDGs memiliki tujuan mendukung pertumbuhan ekonomi yang inklusif dan berkelanjutan, tenaga kerja penuh dan produktif dan pekerjaan yang layak bagi semua.
                               SDGs dalam universitas berfokus pada peran universitas sebagai mesin untuk pertumbuhan ekonomi dan tanggung jawab mereka sebagai pemberi kerja. Ini mengeksplorasi penelitian ekonomi lembaga, praktik ketenagakerjaan mereka dan bagian dari mahasiswa yang mengambil penempatan kerja.',
            'gambar'=>'img/sdgs/8.png',
          ],
          [
            'id_goal'=>'9',
            'nama_goal'=>'Infrastruktur, Industri dan Inovasi',
            'deskripsi_goal'=>'Goal 9 dalam Tujuan Pembangunan Berkelanjutan (TPB) atau yang dikenal dengan sebutan SDGs memiliki tujuan membangun infrastruktur yang tangguh, mendukung industrialisasi yang inklusif dan berkelanjutan, dan membantu perkembangan inovasi.
                               SDGs dalam universitas berfokus pada peran universitas dalam mendorong inovasi dan melayani kebutuhan industri. Ini mengeksplorasi penelitian institusi pada industri dan inovasi, jumlah paten mereka dan perusahaan spin-off dan pendapatan penelitian universitas dari industri.',
            'gambar'=>'img/sdgs/9.png',
          ],
          [
            'id_goal'=>'10',
            'nama_goal'=>'Mengurangi Ketimpangan',
            'deskripsi_goal'=>'Goal 10 dalam Tujuan Pembangunan Berkelanjutan (TPB) atau yang dikenal dengan sebutan SDGs memiliki tujuan mengurangi ketimpangan didalam dan antar negara.Mengurangi ketidaksetaraan, kebijakan harus bersifat universal, memperhatikan kebutuhan populasi kurang beruntung dan terpinggirkan.
                               SDGs dalam universitas berfokus pada penelitian universitas tentang kesenjangan sosial, kebijakan mereka tentang diskriminasi dan komitmen universitas untuk merekrut staf dan siswa dari kelompok yang kurang terwakili.',
            'gambar'=>'img/sdgs/10.png',
          ],
          [
            'id_goal'=>'11',
            'nama_goal'=>'Kota dan Komunitas yang Berkelanjutan',
            'deskripsi_goal'=>'Goal 11 dalam Tujuan Pembangunan Berkelanjutan (TPB) atau yang dikenal dengan sebutan SDGs memiliki tujuan membangun kota dan pemukiman yang inklusif, aman, tangguh dan berkelanjutan. Perlu ada masa depan di mana kota memberikan peluang bagi semua, dengan akses ke layanan dasar, energi, perumahan, transportasi, dan banyak lagi.
                               SDGs dalam universitas berfokus pada pengelolaan sumber daya untuk melihat peran universitas dalam mempertahankan dan melestarikan warisan masyarakat. Ini mengeksplorasi penelitian lembaga tentang keberlanjutan, peran universitas sebagai pemelihara seni dan warisan dan pendekatan internal untuk keberlanjutan.',
            'gambar'=>'img/sdgs/11.png',
          ],
          [
            'id_goal'=>'12',
            'nama_goal'=>'Konsumsi dan Produksi yang Bertanggung Jawab',
            'deskripsi_goal'=>'Goal 12 dalam Tujuan Pembangunan Berkelanjutan (TPB) atau yang dikenal dengan sebutan SDGs memiliki tujuan memastikan pola konsumsi dan produksi yang berkelanjutan.
                               SDGs dalam universitas berfokus pada penggunaan sumber daya yang efisien dan meminimalkan pemborosan. Universitas harus memainkan perannya dalam memastikan bahwa konsumsi diminimalkan, terutama di mana sumber daya tidak terbarukan.',
            'gambar'=>'img/sdgs/12.png',
          ],
          [
            'id_goal'=>'13',
            'nama_goal'=>'Penanganan Perubahan Iklim',
            'deskripsi_goal'=>'Goal 13 dalam Tujuan Pembangunan Berkelanjutan (TPB) atau yang dikenal dengan sebutan SDGs memiliki tujuan mengambil aksi segera untuk memerangi perubahan iklim dan dampaknya karena perubahan iklim adalah tantangan global yang memengaruhi setiap orang.
                               SDGs dalam universitas berfokus pada mengeksplorasi penelitian universitas tentang perubahan iklim, penggunaan energi dan persiapan untuk menghadapi konsekuensi dari perubahan iklim.',
            'gambar'=>'img/sdgs/13.png',
          ],
          [
            'id_goal'=>'16',
            'nama_goal'=>'Perdamaian, Keadilan dan Kelembagaan yang Kuat',
            'deskripsi_goal'=>'Goal 16 dalam Tujuan Pembangunan Berkelanjutan (TPB) atau yang dikenal dengan sebutan SDGs memiliki tujuan mendukung masyarakat yang damai dan inklusif untuk pembangunan berkelanjutan.
                               SDGs dalam universitas berfokus pada bagaimana universitas dapat mendukung institusi yang kuat di negaranya dan mempromosikan perdamaian dan keadilan. Ini mengeksplorasi penelitian universitas tentang hukum dan hubungan internasional, partisipasi universitas sebagai penasihat bagi pemerintah dan kebijakan universitas tentang kebebasan akademik.',
            'gambar'=>'img/sdgs/16.png',
          ],
          [
            'id_goal'=>'17',
            'nama_goal'=>'Kemitraan Untuk Mencapai Tujuan',
            'deskripsi_goal'=>'Goal 17 dalam Tujuan Pembangunan Berkelanjutan (TPB) atau yang dikenal dengan sebutan SDGs memiliki tujuan menguatkan ukuran implementasi dan merevitalisasi kemitraan global untuk pembangunan berkelanjutan.
                               SDGs dalam universitas berfokus melihat cara-cara yang lebih luas di mana universitas mendukung SDGs melalui kolaborasi dengan negara-negara lain, promosi praktik-praktik terbaik dan publikasi data. Kecuali jika semua mitra bekerja bersama menuju SDG, mereka tidak dapat dicapai.',
            'gambar'=>'img/sdgs/17.png',
          ]
        ]);
    }
}
