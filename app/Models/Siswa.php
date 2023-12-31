<?php

namespace App\Models;

use CodeIgniter\Model;

class Siswa extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'siswa';
    protected $primaryKey = 'peserta_didik_id';
    protected $useAutoIncrement = false;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'nipd',
        'tanggal_masuk_sekolah',
        'sekolah_asal',
        'nama',
        'nisn',
        'jenis_kelamin',
        'nik',
        'tempat_lahir',
        'tanggal_lahir',
        'agama_id_str',
        'alamat_jalan',
        'nomor_telepon_rumah',
        'nomor_telepon_seluler',
        'nama_ayah',
        'pekerjaan_ayah_id_str',
        'nama_ibu',
        'pekerjaan_ibu_id_str',
        'nama_wali',
        'pekerjaan_wali_id_str',
        'anak_keberapa',
        'tinggi_badan',
        'berat_badan',
        'email',
        'tingkat_pendidikan_id',
        'nama_rombel',
        'kurikulum_id_str'
    ];

}
