<?php

namespace App\Models;

use CodeIgniter\Model;

class RombonganBelajar extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'rombongan_belajar';
    protected $primaryKey = 'rombongan_belajar_id';
    protected $useAutoIncrement = false;
    protected $returnType = 'array';
    protected $allowedFields = [
        'rombongan_belajar_id',
        'nama',
        'tingkat_pendidikan_id_str',
        'jenis_rombel_str',
        'kurikulum_id_str',
        'id_ruang_str',
        'moving_class',
        'ptk_id_str',
        'jurusan_id_str',
    ];

}
