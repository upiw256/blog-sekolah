<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterDeleteColumPtk extends Migration
{
    public function up()
    {
        $this->forge->dropColumn('ptk', 'tahun_ajaran_id');
        $this->forge->dropColumn('ptk', 'ptk_terdaftar_id');
        $this->forge->dropColumn('ptk', 'agama_id');
        $this->forge->dropColumn('ptk', 'jenis_ptk_id');
        $this->forge->dropColumn('ptk', 'status_kepegawaian_id');
    }

    public function down()
    {
        $this->forge->addColumn('rombongan_belajar', [
            'tahun_ajaran_id' => [
                'type' => 'VARCHAR',
                'constraint' => '4'
             ],
             'ptk_terdaftar_id' => [
                'type' => 'VARCHAR',
                'constraint' => '36'
             ],
             'agama_id' => [
                'type' => 'INT',
                'constraint' => '11'
             ],
             'jenis_ptk_id' => [
                'type' => 'INT',
                'constraint' => '11'
             ],
             'status_kepegawaian_id' => [
                'type' => 'INT',
                'constraint' => '11'
             ],
         ]);
    }
}
