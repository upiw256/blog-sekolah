<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterNewsContent extends Migration
{
    public function up()
    {
        $this->db->query("ALTER TABLE `news`
        CHANGE COLUMN `content` `content` LONGTEXT NULL COLLATE 'utf8mb3_general_ci' AFTER `author`");
    }

    public function down()
    {
        $this->db->query("ALTER TABLE `news`
        CHANGE COLUMN `content` `content` TEXT NULL COLLATE 'utf8mb3_general_ci' AFTER `author`");
    }
}
