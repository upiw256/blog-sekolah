<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use GuzzleHttp\Client;

class Data extends BaseController
{
    public function index()
    {
        $data = [
            'news' => $this->news->paginate(2),
            'allNews' => $this->news->findAll(),
            'pager' => $this->news->pager,
            'sekolah' => $this->sekolah->first(),
        ];
        return view('layout/fix', $data);

    }
}
