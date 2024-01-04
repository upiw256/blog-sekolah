<?php

namespace App\Controllers;


use App\Models\News;
use App\Controllers\BaseController;
use GuzzleHttp\Client;

class Admin extends BaseController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $session = \Config\Services::session();
        if ($session->get('logged_in') !== true) {
            return redirect()->to('/login');
        }
        // $siswa = new Siswa;
        $jumlahSiswa = $this->siswa->countAllResults();
        // $ptk = new Ptk;
        $jumlahPtk = $this->ptk->countAllResults();
        // $kelas = new RombonganBelajar;
        $jumlahKelas = $this->kelas->like('jenis_rombel_str', 'kelas', 'after')->countAllResults();
        // $news = new News;
        $jumlahNews = $this->news->countAllResults();
        $berita = $this->news->limit(3)->orderBy('id', 'DESC')->get()->getResult();
        $data =
            [
                'users' => $session->get('level'),
                'menu' => 'menu',
                'submenu' => 'home',
                'siswa' => $jumlahSiswa,
                'ptk' => $jumlahPtk,
                'kelas' => $jumlahKelas,
                'news' => $jumlahNews,
                'update' => $berita,
            ];
        return view('dashboard/index', $data);
    }

    public function syncron()
    {
        $api_url = getenv('DAPODIK_URL');
        $headers = [
            'x-Barrier' => 'margaasih',
        ];
        $client = new Client();
        $sekolahData = $client->request('GET', $api_url . '/sekolah', ['headers' => $headers]);
        $siswaData = $client->request('GET', $api_url . '/siswa', ['headers' => $headers]);
        $ptkData = $client->request('GET', $api_url . '/guru', ['headers' => $headers]);
        $rombelData = $client->request('GET', $api_url . '/rombel', ['headers' => $headers]);

        $sekolah = json_decode($sekolahData->getBody(), true);
        $siswa = json_decode($siswaData->getBody(), true);
        $ptk = json_decode($ptkData->getBody(), true);
        $rombel = json_decode($rombelData->getBody(), true);
        $this->sekolah->truncate();
        $this->siswa->truncate();
        $this->ptk->truncate();
        $this->kelas->truncate();
        $result = $this->sekolah->insert($sekolah['rows']);
        foreach ($siswa['rows'] as $row) {
            $result = $this->siswa->insert($row);
        }
        foreach ($ptk['rows'] as $row) {
            $result = $this->ptk->insert($row);
        }
        foreach ($rombel['rows'] as $row) {
            $result = $this->kelas->insert($row);
        }
        if ($result) {
            $response['status'] = 'success';
            $response['message'] = 'Data berhasil disimpan ke dalam database.';
        } else {
            $response['status'] = 'error';
            $response['message'] = 'Gagal menyimpan data ke dalam database.';
        }

        return $this->response->setJSON($response);
    }
}
