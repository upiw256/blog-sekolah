<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function index()
    {
        return view('auth/login');
    }
    public function login()
    {
        $encrypter = \Config\Services::encrypter();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $enc = $encrypter->encrypt($password);
        $dec = $encrypter->decrypt($enc);
        dd($dec);
    }
}
