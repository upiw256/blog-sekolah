<?php

namespace App\Models;

use CodeIgniter\Model;

class News extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'news';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
    public function get_all_news()
    {
        // Buat query untuk mengambil semua data dari tabel news
        $builder = $this->db->table($this->table);

        // Jalankan query dan kembalikan hasilnya
        return $builder->get()->getResult();
    }
    public function getNews($perPage = 10, $page = 1)
    {
        $builder = $this->db->table($this->table)
            ->where('status', 'published')
            ->orderBy('created_at', 'desc')
            ->limit($perPage, $page);

        // Jalankan query dan kembalikan hasilnya
        return $builder->get()->getResult();
    }
    public function getNewsSummary($id)
  {
    $builder = $this->db->table($this->table)
      ->select('*')
      ->where('id', $id)
      ->where('status', 'published');

    // Jalankan query dan kembalikan hasilnya
    $news = $builder->get()->getRow();

    return $news;
  }
  public function search($id)
{
  // dd($id);
  $builder = $this->db->table($this->table);
  $builder->like('title', $id['cari']);
  $builder->orlike('content', $id['cari']);;
    return $builder->get()->getRow();
}
}
