<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterImg extends Migration
{
    public function up()
    {
        // Menambahkan kolom img pada tabel news
        $this->db->query("ALTER TABLE news ADD img VARCHAR(255) AFTER status");
    }

    public function down()
    {
        // Menghapus kolom img dari tabel news
        $this->db->query("ALTER TABLE news DROP COLUMN img");
    }
}
