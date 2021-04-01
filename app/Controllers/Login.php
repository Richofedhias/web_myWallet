<?php

namespace App\Controllers;

use App\Models\UserModel;


class Login extends BaseController
{
    protected $request;


    public function login()
    {
        echo view('template/loginview');
    }



    
}
