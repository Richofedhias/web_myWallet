<?php

namespace App\Controllers;

use App\Models\PinjamanModel;

class Pinjaman extends BaseController
{

    protected $pinjamanModel;
    public function __construct()
    {
        $this->pinjamanModel = new PinjamanModel();
    }

    public function dashboardloan()
    {

        // Manual
        // $db = \Config\Database::connect();
        // $komik = $db->query("SELECT * FROM pemasukan");

        // dd($komik);
        $pinjaman = $this->pinjamanModel->findAll();
        $data = [
            'pinjaman' => $pinjaman
        ];



        // dd($pemasukan);

        return view('template/dashboardloan', $data);
    }
}
