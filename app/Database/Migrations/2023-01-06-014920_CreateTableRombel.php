<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableRombel extends Migration
{
    public function up()
    {
        $fields = [
            'rombongan_belajar_id' => [
               'type' => 'VARCHAR',
               'constraint' => '36'
            ],
            'nama' => [
               'type' => 'VARCHAR',
               'constraint' => '255'
            ],
            'tingkat_pendidikan_id_str' => [
               'type' => 'VARCHAR',
               'constraint' => '255'
            ],
            'jenis_rombel_str' => [
               'type' => 'VARCHAR',
               'constraint' => '255'
            ],
            'kurikulum_id_str' => [
               'type' => 'VARCHAR',
               'constraint' => '255'
            ],
            'id_ruang_str' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
             ],
             'moving_class' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
             ],
             'ptk_id_str' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
             ],
             'jurusan_id_str' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
             ],
          ];
          
          $this->forge->addField($fields);
          $this->forge->addKey('rombongan_belajar_id', true);
          $this->forge->createTable('rombongan_belajar');
    }

    public function down()
    {
        $this->forge->dropTable('rombongan_belajar');
    }
}
