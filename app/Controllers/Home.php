<?php

namespace App\Controllers;

class Home extends BaseController
{
  public function index()
  {
    $data = [
      'news' => $this->news->paginate(2),
      'pager' => $this->news->pager,
    ];
    // dd($data);
    return view('home/home', $data);
  }
  public function read($id)
  {
    // Buat instance dari model NewsModel

    // Dapatkan data berita yang akan ditampilkan
    $data['news'] = $this->news->getNewsSummary($id);

    // Tampilkan view
    if (!$data['news']) {
      return view('errors/404');
    }
    return view('home/news', $data);
  }
  public function search_ajax()
  {
    $keyword = $this->request->getVar();
    $array = $this->news->search($keyword);

    $data = [
      'news' => $array,
      'pager' => $this->news->pager,
    ];
    return view('home/home', $data);
  }
}
