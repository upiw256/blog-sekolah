<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Users extends Seeder
{
    public function run()
    {
        $data = [
            'username' => 'admin@admin.com',
            'password'    => password_hash('admin123', PASSWORD_DEFAULT),
        ];
        $this->db->table('users')->insert($data);
    }
}
