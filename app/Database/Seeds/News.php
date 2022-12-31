<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class News extends Seeder
{
    public function run()
    {
        $rand = rand(10, 300);
        $rand2 = rand(10, 300);
        $rand3 = rand(10, 300);
        $rand4 = rand(10, 300);
        $this->db->table('news')->insert([
            'title' => 'Berita 1',
            'author' => 'John Doe',
            'content' => 'Konten berita 1',
            'status' => 'published',
            'img' => "https://picsum.photos/id/$rand/200/300"
        ]);
        $this->db->table('news')->insert([
            'title' => 'Berita 2',
            'author' => 'John Doe',
            'content' => 'Konten berita 2',
            'status' => 'published',
            'img' => "https://picsum.photos/id/$rand2/200/300"
        ]);
        $this->db->table('news')->insert([
            'title' => 'Berita 3',
            'author' => 'John Doe',
            'content' => 'Konten berita 3',
            'status' => 'published',
            'img' => "https://picsum.photos/id/$rand3/200/300"
        ]);
        $this->db->table('news')->insert([
            'title' => 'Berita 4',
            'author' => 'John Doe',
            'content' => 'Konten berita 4',
            'status' => 'published',
            'img' => "https://picsum.photos/id/$rand4/200/300"
        ]);
    }
}
