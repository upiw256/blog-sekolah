<?php

namespace App\Controllers;

use App\Models\RombonganBelajar;
use CodeIgniter\RESTful\ResourceController;
use App\Models\News;
use App\Models\Siswa;
use App\Models\Sekolah;
use App\Models\Ptk;
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
        $siswa = new Siswa;
        $jumlahSiswa = $siswa->countAllResults();
        $ptk = new Ptk;
        $jumlahPtk = $ptk->countAllResults();
        $kelas = new RombonganBelajar;
        $jumlahKelas = $kelas->like('jenis_rombel_str', 'kelas', 'after')->countAllResults();
        $news = new News;
        $jumlahNews = $news->countAllResults();
        $berita = $news->limit(3)->orderBy('id', 'DESC')->get()->getResult();
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

    public function news()
    {
        $delete = $this->request->getGet('delete');
        $newsModel = new News();
        $session = \Config\Services::session();
        if ($session->get('logged_in') !== true) {
            return redirect()->to('/login');
        }

        $data =
            [
                'users' => $session->get('level'),
                'menu' => 'menu',
                'submenu' => 'news',
                'news' => $newsModel->get_all(),
            ];
        if ($delete !== null) {
            $newsModel->delete(base64_decode($delete));
            return redirect()->to('/admin/news')->with('message', 'Data Berhasil di hapus');
        }
        return view('dashboard/news', $data);
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
        $sekolahModel = new Sekolah();
        $siswaModel = new Siswa();
        $ptkModel = new Ptk();
        $rombelModel = new RombonganBelajar;
        $sekolah = json_decode($sekolahData->getBody(), true);
        $siswa = json_decode($siswaData->getBody(), true);
        $ptk = json_decode($ptkData->getBody(), true);
        $rombel = json_decode($rombelData->getBody(), true);
        $sekolahModel->truncate();
        $siswaModel->truncate();
        $ptkModel->truncate();
        $rombelModel->truncate();
        $result = $sekolahModel->insert($sekolah['rows']);
        foreach ($siswa['rows'] as $row) {
            $result = $siswaModel->insert($row);
        }
        foreach ($ptk['rows'] as $row) {
            $result = $ptkModel->insert($row);
        }
        foreach ($rombel['rows'] as $row) {
            $result = $rombelModel->insert($row);
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

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {

    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        //
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {

        $session = \Config\Services::session();
        if ($session->get('logged_in') !== true) {
            return redirect()->to('/login');
        }
        $newsModel = new News();
        $hasil = base64_decode($id);
        // Dapatkan data berita yang akan ditampilkan
        $data = [
            'news' => $newsModel->getNewsSummary($hasil),
            'menu' => 'menu',
            'submenu' => 'news',
            'users' => $session->get('level'),

        ];

        // Tampilkan view
        if (!$data['news']) {
            return view('errors/404');
        }
        return view('dashboard/edit_news', $data);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $session = \Config\Services::session();
        if ($session->get('logged_in') !== true) {
            return redirect()->to('/login');
        }
        $file = $this->request->getFile('img');
        $author = $session->get("username");
        $title = $this->request->getVar("title");
        $content = $this->request->getVar("content");
        $fileSize = $file->getSize();
        if ($fileSize > 2 * 1024 * 1024) {
            // Ukuran file lebih dari 2MB
            // Tampilkan pesan error atau redirect ke halaman yang sesuai
            return redirect()->to('/admin/news')->with('error', 'Ukuran file maksimal 2MB');
        }
        // Mendapatkan tipe file
        $fileType = $file->getMimeType();
        // Memverifikasi bahwa file yang diupload hanya merupakan gambar saja
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        if (!in_array($fileType, $allowedTypes)) {
            // Tipe file yang diupload bukan gambar
            // Tampilkan pesan error atau redirect ke halaman yang sesuai
            return redirect()->to('/admin/news')->with('error', 'Hanya file gambar yang diperbolehkan');
        }
        $fileName = $file->getRandomName();
        $file->move(ROOTPATH . 'public/assets/image/upload/', $fileName);

        // code untuk menyimpan informasi file ke dalam database
        $newsModel = new News();
        $newsModel->table('news')->set([
            'title' => $title,
            'author' => $author,
            'content' => trim($content),
            'img' => $fileName
        ])->where('id', $id);
        $newsModel->update();
        // redirect ke halaman yang sesuai
        return redirect()->to('/admin/news')->with('message', 'Data Berhasil di tambah');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {

    }
}
