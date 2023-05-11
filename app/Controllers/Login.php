<?php

namespace App\Controllers;

use App\Models\User;
use CodeIgniter\Controller;

class Login extends Controller
{
    public function register()
    {
        helper(['form', 'session']);

        $data = [];
        $model = new User();

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'username' => 'required',
                'nama' => 'required',
                'email' => 'required|valid_email',
                'password' => 'required'
            ];

            if ($this->validate($rules)) {
                $data = [
                    'username' => $this->request->getVar('username'),
                    'nama' => $this->request->getVar('nama'),
                    'email' => $this->request->getVar('email'),
                    'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
                ];

                if ($model->insert($data)) {
                    // Notifikasi jika akun berhasil dibuat
                    $session = session();
                    $session->setFlashdata('success', 'Akun berhasil dibuat');
                    return redirect()->to('/');
                } else {
                    // Notifikasi jika akun sudah ada
                    $session = session();
                    $session->setFlashdata('error', 'Akun sudah ada');
                    return redirect()->back();
                }
            } else {
                $data['validation'] = $this->validator;
            }
        }

        echo view('login/login', $data);
    }

    public function login()
    {
        helper(['form']);
        $data = [];
        if ($this->request->getMethod() == 'post') {
            $session = session();
            $model = new User();
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');
            $data = $model->where('username', $username)->first();
            if ($data) {
                $verify_pass = password_verify($password, $data['password']);
                if ($verify_pass) {
                    $ses_data = [
                        'username' => $data['username'],
                        'logged_in' => TRUE
                    ];
                    $session->set($ses_data);
                    return redirect()->to('/dashboard');
                } else {
                    $data['error'] = 'Username atau Password salah';
                }
            } else {
                $data['error'] = 'Username atau Password salah';
            }
        }
        echo view('web/home', $data);
    }
}
