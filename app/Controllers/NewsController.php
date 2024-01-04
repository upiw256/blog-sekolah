<?php

namespace App\Controllers;

use App\Models\News;
use App\Controllers\BaseController;

class NewsController extends BaseController
{
    public function index()
    {
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
        return view('dashboard/news', $data);
    }
    public function create()
    {
        $session = \Config\Services::session();
        if ($session->get('logged_in') !== true) {
            return redirect()->to('/login');
        }
        $data =
            [
                'users' => $session->get('level'),
                'menu' => 'menu',
                'submenu' => 'news',
            ];
        return view('/dashboard/create_news', $data);
    }
    public function post()
    {
        $response = [];
        helper(['form', 'url']);
        $newsModel = new News();
        $session = \Config\Services::session();
        $file = $this->request->getFile('image');
        $title = $this->request->getPost('title');
        $content = $this->request->getPost('content');
        // dd($content);
        $rules = [
            'image' => 'uploaded[image]|max_size[image,1024]|is_image[image]',
        ];
        if ($this->validate($rules)) {

            // Pindahkan file ke direktori yang diinginkan (misalnya, writable/uploads/)
            $file->move(WRITEPATH . 'uploads');
            // dd($file->getRealPath());
            // Simpan nama file ke database
            $data = [
                'img' => $file->getName(),
                'title' => $title,
                'author' => $session->get('username'),
                'content' => $content,
            ];

            $newsModel->insert($data);
            $response['success'] = true;
            $response['message'] = 'Gambar berhasil diunggah.';
        } else {
            $response['success'] = false;
            $response['errors'] = $this->validator->listErrors();
        }
        return $this->response->setJSON($response);
    }
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
}
