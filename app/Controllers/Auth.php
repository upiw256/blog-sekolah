<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Users;
class Auth extends BaseController
{
    public function index()
    {
        return view('auth/login');
    }
    public function login()
    {
        $model = new Users();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $user = $model->where('username', $username)
                      ->first();
                      if (!$user)
                      {
                          session()->setFlashdata('error', 'Username tidak ditemukan.');
                          return redirect()->to('/login');
                      }
              
                      if (!password_verify($password, $user['password']))
                      {
                        // dd(password_verify($password, $user['password']));
                          session()->setFlashdata('error', 'Password salah.');
                          return redirect()->to('/login');
                      }
                      $data = [
                        'id' => $user['id'],
                        'username' => $user['username'],
                        'level' => $user['level'],
                        'logged_in' => true
                    ];
            
                    // $this->session()->set($data);
                    $session = \Config\Services::session();
                    $session->set($data);
                    return redirect()->to('/admin');

    }
}
