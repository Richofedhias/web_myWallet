<?php

namespace App\Controllers;

use App\Models\TabunganModel;

class TabungandanTarget extends BaseController
{

    protected $tabunganModel;
    public function __construct()
    {
        $this->tabunganModel = new TabunganModel();
    }

    public function dashboardsaving()
    {

        // Manual
        // $db = \Config\Database::connect();
        // $komik = $db->query("SELECT * FROM pemasukan");

        // dd($komik);
        $tabungan = $this->tabunganModel->findAll();
        $data = [
            'tabungan' => $tabungan
        ];



        // dd($pemasukan);

        return view('template/dashboardsaving', $data);
    }

    public function detailpagesaving()
    {

        // Manual
        // $db = \Config\Database::connect();
        // $komik = $db->query("SELECT * FROM pemasukan");

        // dd($komik);
        $tabungan = $this->tabunganModel->findAll();
        $data = [
            'tabungan' => $tabungan
        ];



        // dd($pemasukan);

        return view('template/detailpagesaving', $data);
    }
}
