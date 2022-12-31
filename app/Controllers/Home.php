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
}
