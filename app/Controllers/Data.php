<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Data extends BaseController
{
    public function index()
    {
        return view('home/data');
    }
}
