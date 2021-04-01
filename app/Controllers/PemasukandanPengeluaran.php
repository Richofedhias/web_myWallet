<?php

namespace App\Controllers;

use App\Models\PemasukanModel;
use App\Models\PengeluaranModel;

class PemasukandanPengeluaran extends BaseController
{

    protected $pemasukanModel;
    protected $pengeluaranModel;
    public function __construct()
    {
        $this->pemasukanModel = new PemasukanModel();        
        $this->pengeluaranModel = new PengeluaranModel();        
    }

    public function dashboardincomespending()
    {

        // Manual
        // $db = \Config\Database::connect();
        // $komik = $db->query("SELECT * FROM pemasukan");

        // dd($komik);
        $pemasukan = $this->pemasukanModel->findAll();
        $pengeluaran = $this->pengeluaranModel->findAll();

        $data = [
            'pemasukan' => $pemasukan,
            'pengeluaran' => $pengeluaran
        ];

        // dd($pemasukan);

        return view('template/dashboardincomespending', $data);
    }


    public function detailpageincome()
    {

        // Manual
        // $db = \Config\Database::connect();
        // $komik = $db->query("SELECT * FROM pemasukan");

        // dd($komik);
        $pemasukan = $this->pemasukanModel->findAll();
        $data = [
            'pemasukan' => $pemasukan
        ];

        // dd($pemasukan);

        return view('template/detailpageincome', $data);
        
    }

    public function detailpagespending()
    {

        // Manual
        // $db = \Config\Database::connect();
        // $komik = $db->query("SELECT * FROM pemasukan");

        // dd($komik);
        $pengeluaran = $this->pengeluaranModel->findAll();
        $data = [
            'pengeluaran' => $pengeluaran
        ];

        // dd($pemasukan);

        return view('template/detailpagespending', $data);
    }
}
