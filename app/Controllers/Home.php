<?php

namespace App\Controllers;

use App\Models\PemasukanModel;
use App\Models\PengeluaranModel;
use App\Models\TabunganModel;
use App\Models\PinjamanModel;

class Home extends BaseController
{
	protected $pemasukanModel;
	protected $pengeluaranModel;
	protected $tabunganModel;
	protected $pinjamanModel;
	public function __construct()
	{
		$this->pemasukanModel = new PemasukanModel();
		$this->pengeluaranModel = new PengeluaranModel();
		$this->tabunganModel = new TabunganModel();
		$this->pinjamanModel = new PinjamanModel();
	}

	public function index()
	{
		echo view('template/landingpage');
	}





	public function dashboard()
	{
		$session = session();
		echo "Welcome back, " . $session->get('user_name');

		// Manual
		// $db = \Config\Database::connect();
		// $komik = $db->query("SELECT * FROM pemasukan");

		// dd($komik);
		$pemasukan = $this->pemasukanModel->findAll();
		$pengeluaran = $this->pengeluaranModel->findAll();
		$tabungan = $this->tabunganModel->findAll();
		$pinjaman = $this->pinjamanModel->findAll();

		$data = [
			'pemasukan' => $pemasukan,
			'pengeluaran' => $pengeluaran,
			'tabungan' => $tabungan,
			'pinjaman' => $pinjaman
		];

		// dd($pemasukan);

		return view('template/dashboard', $data);
	}


	public function dashboardsavingpredictio()
	{
		echo view('template/dashboardsavingpredictio');
	}
}
