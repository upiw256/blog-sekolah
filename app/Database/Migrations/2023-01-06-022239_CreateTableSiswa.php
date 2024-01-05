<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableSiswa extends Migration
{
   public function up()
   {
      $fields = [
         'nipd' => [
            'type' => 'VARCHAR',
            'constraint' => '255',
            'null' => true
         ],
         'tanggal_masuk_sekolah' => [
            'type' => 'DATE'
         ],
         'sekolah_asal' => [
            'type' => 'VARCHAR',
            'constraint' => '255',
            'null' => true
         ],
         'peserta_didik_id' => [
            'type' => 'VARCHAR',
            'constraint' => '36'
         ],
         'nama' => [
            'type' => 'VARCHAR',
            'constraint' => '255'
         ],
         'nisn' => [
            'type' => 'VARCHAR',
            'constraint' => '255',
            'null' => true
         ],
         'jenis_kelamin' => [
            'type' => 'VARCHAR',
            'constraint' => '1'
         ],
         'nik' => [
            'type' => 'VARCHAR',
            'constraint' => '255',
            'null' => true
         ],
         'tempat_lahir' => [
            'type' => 'VARCHAR',
            'constraint' => '255'
         ],
         'tanggal_lahir' => [
            'type' => 'DATE'
         ],
         'agama_id_str' => [
            'type' => 'VARCHAR',
            'constraint' => '255'
         ],
         'alamat_jalan' => [
            'type' => 'VARCHAR',
            'constraint' => '255'
         ],
         'nomor_telepon_rumah' => [
            'type' => 'VARCHAR',
            'constraint' => '255',
            'null' => true
         ],
         'nomor_telepon_seluler' => [
            'type' => 'VARCHAR',
            'constraint' => '255',
            'null' => true
         ],
         'nama_ayah' => [
            'type' => 'VARCHAR',
            'constraint' => '255',
            'null' => true
         ],
         'pekerjaan_ayah_id_str' => [
            'type' => 'VARCHAR',
            'constraint' => '255'
         ],
         'nama_ibu' => [
            'type' => 'VARCHAR',
            'constraint' => '255'
         ],
         'pekerjaan_ibu_id_str' => [
            'type' => 'VARCHAR',
            'constraint' => '255'
         ],
         'nama_wali' => [
            'type' => 'VARCHAR',
            'constraint' => '255',
            'null' => true
         ],
         'pekerjaan_wali_id_str' => [
            'type' => 'VARCHAR',
            'constraint' => '255'
         ],
         'anak_keberapa' => [
            'type' => 'INT',
            'constraint' => '11',
            'null' => true
         ],
         'tinggi_badan' => [
            'type' => 'INT',
            'constraint' => '11'
         ],
         'berat_badan' => [
            'type' => 'INT',
            'constraint' => '11'
         ],
         'email' => [
            'type' => 'VARCHAR',
            'constraint' => '255',
            'null' => true
         ],
         'tingkat_pendidikan_id' => [
            'type' => 'INT',
            'constraint' => '11'
         ],
         'nama_rombel' => [
            'type' => 'VARCHAR',
            'constraint' => '255'
         ],
         'kurikulum_id_str' => [
            'type' => 'VARCHAR',
            'constraint' => '255'
         ]
      ];
      $this->forge->addfield($fields);
      $this->forge->addkey('peserta_didik_id', TRUE);
      $this->forge->createtable('siswa');
   }

   public function down()
   {
      $this->forge->droptable('siswa');
   }
}
