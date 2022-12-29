<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Users extends Seeder
{
    public function run()
    {
        $data = [
            'username' => 'admin',
            'password'    => 'admin123',
        ];
        $this->db->table('users')->insert($data);
    }
}
