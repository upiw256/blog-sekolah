<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDbSekolah extends Migration
{
    public function up()
    {
        $fields = [
            'sekolah_id' => [
               'type' => 'VARCHAR',
               'constraint' => '36'
            ],
            'nama' => [
               'type' => 'VARCHAR',
               'constraint' => '255'
            ],
            'nss' => [
               'type' => 'VARCHAR',
               'constraint' => '255'
            ],
            'npsn' => [
               'type' => 'VARCHAR',
               'constraint' => '255'
            ],
            
            'bentuk_pendidikan_id_str' => [
               'type' => 'VARCHAR',
               'constraint' => '255'
            ],
           
            'status_sekolah_str' => [
               'type' => 'VARCHAR',
               'constraint' => '255'
            ],
            'alamat_jalan' => [
               'type' => 'VARCHAR',
               'constraint' => '255'
            ],
            'rt' => [
               'type' => 'VARCHAR',
               'constraint' => '255'
            ],
            'rw' => [
               'type' => 'VARCHAR',
               'constraint' => '255'
            ],
            
            'kode_pos' => [
               'type' => 'VARCHAR',
               'constraint' => '255'
            ],
            'nomor_telepon' => [
               'type' => 'VARCHAR',
               'constraint' => '255'
            ],
            'email' => [
               'type' => 'VARCHAR',
               'constraint' => '255'
            ],
            'website' => [
               'type' => 'VARCHAR',
               'constraint' => '255'
            ],
            'is_sks' => [
               'type' => 'TINYINT',
               'constraint' => '1'
            ],
            'lintang' => [
               'type' => 'DECIMAL',
               'constraint' => '10,6'
            ],
            'bujur' => [
               'type' => 'DECIMAL',
               'constraint' => '10,6'
            ],
            'dusun' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
             ],
             'desa_kelurahan' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
             ],
             'kecamatan' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
             ],
             'kabupaten_kota' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
             ],
             'provinsi' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
             ],
          ];
          $this->forge->addField($fields);
            $this->forge->addKey('sekolah_id', true);
            $this->forge->createTable('sekolah');
    }

    public function down()
    {
        $this->forge->dropTable('sekolah');
    }
}
