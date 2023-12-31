<?php

namespace App\Models;

use CodeIgniter\Model;

class Ptk extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'ptk';
    protected $primaryKey = 'ptk_id';
    protected $useAutoIncrement = false;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'ptk_id',
        'ptk_induk',
        'tanggal_surat_tugas',
        'nama',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'agama_id_str',
        'nuptk',
        'nik',
        'jenis_ptk_id_str',
        'status_kepegawaian_id_str',
        'nip',
        'pendidikan_terakhir',
        'bidang_studi_terakhir',
        'pangkat_golongan_terakhir'
    ];
}
