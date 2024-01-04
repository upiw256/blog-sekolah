<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTablePtk extends Migration
{
   public function up()
   {
      $fields = [

         'ptk_id' => [
            'type' => 'VARCHAR',
            'constraint' => '36'
         ],
         'ptk_induk' => [
            'type' => 'INT',
            'constraint' => '11'
         ],
         'tanggal_surat_tugas' => [
            'type' => 'DATE'
         ],
         'nama' => [
            'type' => 'VARCHAR',
            'constraint' => '255'
         ],
         'jenis_kelamin' => [
            'type' => 'VARCHAR',
            'constraint' => '1'
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
         'nuptk' => [
            'type' => 'VARCHAR',
            'constraint' => '255',
            'null' => true
         ],
         'nik' => [
            'type' => 'VARCHAR',
            'constraint' => '255'
         ],
         'jenis_ptk_id_str' => [
            'type' => 'VARCHAR',
            'constraint' => '255'
         ],
         'status_kepegawaian_id_str' => [
            'type' => 'VARCHAR',
            'constraint' => '255'
         ],
         'nip' => [
            'type' => 'VARCHAR',
            'constraint' => '255',
            'null' => true
         ],
         'pendidikan_terakhir' => [
            'type' => 'VARCHAR',
            'constraint' => '255'
         ],
         'bidang_studi_terakhir' => [
            'type' => 'VARCHAR',
            'constraint' => '255'
         ],
         'pangkat_golongan_terakhir' => [
            'type' => 'VARCHAR',
            'constraint' => '255'
         ],
      ];
      $this->forge->addField($fields);
      $this->forge->addKey('ptk_id', true);
      $this->forge->createTable('ptk');
   }

   public function down()
   {
      $this->forge->dropTable('ptk');
   }
}
