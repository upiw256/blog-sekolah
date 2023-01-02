<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class News extends Seeder
{
    public function run()
    {
        $rand = rand(10, 300);
        $rand2 = rand(10, 300);
        $rand3 = rand(10, 300);
        $rand4 = rand(10, 300);
        $this->db->table('news')->insert([
            'title' => 'Pemerintah Indonesia Selenggarakan Kurikulum 2013 di Seluruh Sekolah',
            'author' => 'John Doe',
            'content' => 'Pemerintah Indonesia baru-baru ini mengeluarkan kebijakan yang mengharuskan seluruh sekolah di Indonesia menggunakan Kurikulum 2013 untuk semua jenjang pendidikan. Kebijakan ini diambil setelah melakukan evaluasi terhadap kurikulum yang sebelumnya telah diterapkan. Kurikulum 2013 dianggap lebih menekankan pada aspek keterampilan dan kompetensi siswa, serta lebih adaptif terhadap perkembangan teknologi dan kebutuhan dunia kerja. Selain itu, Kurikulum 2013 juga dianggap lebih memberikan fleksibilitas bagi sekolah dalam menyusun kurikulum sesuai dengan kondisi dan kebutuhan masing-masing sekolah. Kebijakan ini diharapkan dapat meningkatkan kualitas pendidikan di Indonesia dan mempersiapkan siswa agar lebih siap menghadapi tantangan di era globalisasi saat ini.',
            'status' => 'published',
            'img' => "https://picsum.photos/id/$rand/1800/900"
        ]);
        $this->db->table('news')->insert([
            'title' => 'Universitas Terbuka Tambah Program Studi Baru',
            'author' => 'John Doe',
            'content' => 'Universitas Terbuka (UT), universitas terbesar di Indonesia yang menyelenggarakan program pendidikan jarak jauh, baru-baru ini mengumumkan bahwa mereka akan menambah jumlah program studi yang ditawarkan pada tahun akademik berikutnya. Hal ini merupakan respons positif dari UT terhadap permintaan masyarakat yang terus bertambah untuk mendapatkan pendidikan tinggi. UT menargetkan akan menambah sekitar 20 program studi baru pada tahun akademik yang akan datang, serta akan menambah jumlah dosen yang berkompeten di bidang terkait. Dengan demikian, UT diharapkan dapat memberikan pilihan program studi yang lebih variatif bagi mahasiswa, serta dapat meningkatkan kualitas pendidikan yang diberikan.',
            'status' => 'published',
            'img' => "https://picsum.photos/id/$rand2/1800/900"
        ]);
        $this->db->table('news')->insert([
            'title' => 'SMA Negeri XYZ Tambah Jam Pelajaran untuk Meningkatkan Hasil Belajar Siswa',
            'author' => 'John Doe',
            'content' => 'Sekolah Menengah Atas (SMA) Negeri XYZ baru-baru ini mengumumkan bahwa mereka akan menambah jam pelajaran pada semester depan. Keputusan ini diambil setelah melakukan evaluasi terhadap hasil belajar siswa di SMA Negeri XYZ yang tidak memuaskan. SMA Negeri XYZ menargetkan dengan menambah jam pelajaran, hasil belajar siswa dapat meningkat dan lebih siap menghadapi ujian akhir sekolah. Selain itu, dengan menambah jam pelajaran diharapkan dapat mengurangi tuntutan terlalu banyak untuk mengikuti kegiatan ekstrakurikuler, sehingga siswa dapat lebih fokus pada profesinya',
            'status' => 'published',
            'img' => "https://picsum.photos/id/$rand3/1800/900"
        ]);
        $this->db->table('news')->insert([
            'title' => 'Kementerian Pendidikan Berikan Bantuan Biaya Pendidikan bagi Siswa Berprestasi Tinggi',
            'author' => 'John Doe',
            'content' => 'Kementerian Pendidikan dan Kebudayaan baru-baru ini mengumumkan bahwa mereka akan menyediakan program bantuan biaya pendidikan bagi siswa berprestasi tinggi yang kurang mampu secara finansial. Program ini akan diberikan kepada siswa yang meraih nilai rata-rata di atas 8,5 pada ujian akhir sekolah. Tujuan dari program ini adalah untuk mendorong siswa yang berprestasi tinggi untuk terus belajar dan meningkatkan kualitas pendidikan di Indonesia. Selain itu, program ini juga diharapkan dapat memberikan kesempatan yang sama bagi semua siswa untuk mendapatkan pendidikan yang baik, tanpa terbebani oleh masalah finansial. Program ini akan diberikan kepada siswa yang berasal dari keluarga yang memiliki penghasilan di bawah rata-rata, sehingga dapat memberikan manfaat yang optimal bagi siswa yang membutuhkan.',
            'status' => 'published',
            'img' => "https://picsum.photos/id/$rand4/1800/900"
        ]);
    }
}
