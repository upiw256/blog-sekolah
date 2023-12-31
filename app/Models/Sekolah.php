<?php

namespace App\Models;

use CodeIgniter\Model;

class Sekolah extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'sekolah';
    protected $primaryKey       = 'sekolah_id';
    protected $useAutoIncrement = false;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['sekolah_id','nama','nss','npsn','bentuk_pendidikan_id_str','status_sekolah_str','alamat_jalan','rt','rw','kode_pos','nomor_telepon','email','website','is_sks','lintang','bujur','dusun','desa_kelurahan','kecamatan','kabupaten_kota','provinsi'];

}
