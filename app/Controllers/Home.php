<?php

namespace App\Controllers;

use App\Models\News;

class Home extends BaseController
{
    public function index()
    {
        $news = new News();
        $data = [
            'news' => $news->paginate(2),
            'pager' => $news->pager,
        ];
        return view('home/home', $data);
    }
    public function read($id)
  {
    // Buat instance dari model NewsModel
    $newsModel = new News();

    // Dapatkan data berita yang akan ditampilkan
    $data['news'] = $newsModel->getNewsSummary($id);

    // Tampilkan view
    if (!$data['news']) {
    return view('errors/404');
    }
    return view('home/news', $data);
  }
  public function search_ajax()
{
    $news = new News();
    $keyword = $this->request->getVar();
    // dd($news->search($keyword));
    $data=['news'=>$news->search($keyword)];
    
}
}
