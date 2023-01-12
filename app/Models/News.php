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
  public function get_all()
    {
        return $this->findAll();
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
  public function search($keyword)
  {
    // dd($keyword['cari']);
    $builder = $this->db->table($this->table);
    $builder->select('*');
    $builder->like('title', $keyword['cari']);
    $builder->orlike('content', $keyword['cari']);
    return $builder->get()->getResultArray();
  }
}
