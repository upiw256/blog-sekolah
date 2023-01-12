<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\News;
class Admin extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $session = \Config\Services::session();
        if ($session->get('logged_in')!==true) {
            return redirect()->to('/login');
        }
        $data=  
        [
            'users'=>$session->get('level'),
            'menu'=>'menu',
            'submenu'=>'home'
        ];
        return view('dashboard/index',$data);
    }
    public function news()
    {
        $newsModel = new News();
        
        $session = \Config\Services::session();
        if ($session->get('logged_in')!==true) {
            return redirect()->to('/login');
        }
        
        $data=  
        [
            'users'=>$session->get('level'),
            'menu'=>'menu',
            'submenu'=>'news',
            'news'=>$newsModel->get_all()
        ];
        return view('dashboard/news',$data);
    }
    
    public function syncron()
    {
        $session = \Config\Services::session();
        if ($session->get('logged_in')!==true) {
            return redirect()->to('/login');
        }
        $data=  
        [
            'users'=>$session->get('level'),
            'menu'=>'menu',
            'submenu'=>'news'
        ];
        return view('dashboard/news',$data);
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
        $newsModel = new News();
        $hasil= base64_decode($id);
        // Dapatkan data berita yang akan ditampilkan
        $data = [
            'news'=>$newsModel->getNewsSummary($hasil),
            'menu'=>'menu',
            'submenu'=>'news',
            'users'=>$session->get('level'),
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
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}
