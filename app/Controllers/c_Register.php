<?php

namespace App\Controllers;

use App\Models\UserModel;



class c_Register extends BaseController
{

    protected $request;
    private $login = '';
    public function __construct()
    {

        $this->login = new UserModel();
    }
    // public function __construct()
    // {
    //     helper('form');
    //     $this->validation = \Config\Services::validation();
    //     $this->session = session();
    // }

    public function register()
    {
        echo view('template/register');
    }

    public function login()
    {
        echo view('template/loginview');
    }

    public function dashboard()
    {
        echo view('template/dashboard');
    }


    public function save()
    {
        $userData = new UserModel();
        $_POST['password'] = md5($_POST['password'], PASSWORD_DEFAULT);
        $userData->insert($_POST);
        $session = session();
        session()->setFlashdata('message', 'Selamat Registrasi Berhasil!!');
        // echo view('template/loginview');
        return redirect()->to(base_url('c_Register/login'));
    }


    public function auth()
    {
        $data = array('username' => $this->request->getVar('username'), 'password' => md5($this->request->getVar('password')));
        $user =  $this->login->where($data);
        $rows = $this->login->countAllResults();
        $session = session();
        if ($rows == 1) {
            // return view('template/dashboard');
            dd($user);
        } else {
            $session->setFlashdata('msg', 'Invalid User');
            // return view('template/loginview');
            dd($user);
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('template/loginview');
    }


    // public function cek_login()
    // {
    //     $username = $this->request->getPost('username');
    //     $passwrod = $this->request->getPost('password');
    // }
}
