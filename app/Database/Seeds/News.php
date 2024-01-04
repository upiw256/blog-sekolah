<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class News extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 11; $i++) {
            $rand = $faker->numberBetween(10, 100);
            $this->db->table('news')->insert([
                'title' => $faker->realText($faker->numberBetween(10, 20)),
                'author' => $faker->name(),
                'content' => $faker->paragraph(),
                'status' => 'published',
                'img' => "https://picsum.photos/id/$rand/1800/900"
            ]);
        }
    }
}
