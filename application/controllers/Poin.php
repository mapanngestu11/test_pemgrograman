<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_transaksi');
		$this->load->model('M_nasabah');

	}

	public function index()
	{

		$poin_pulsa = $this->M_transaksi->hitung_poin_pulsa();
		$poin_listrik  = $this->M_transaksi->hitung_poin_listrik();

		$data_nasabah = $this->M_nasabah->tampil_data();


		// beli pulsa
		foreach ($poin_pulsa as $po_pulsa) {

			$cek = $po_pulsa->Amount;
			$Name = $po_pulsa->Name ;
			if ($cek == '10000') {
				$poin_pulsa1 = 0 ;
			}elseif ($cek >= '30000') {
				$poin_pulsa2 = 1 ;
			}elseif ($cek <= '30000') {
				$poin_pulsa3 = 2 ;
			}

		}


		$total_poin_pulsa = $poin_pulsa1 + $poin_pulsa2 + $poin_pulsa3;

		// beli listrik
		foreach ($poin_listrik as $po_listrik) {

			$cek = $po_listrik->Amount;


			if ($cek == '50000') {
				$poin1 = $cek * 0 ;

			}elseif ($cek <= '100000') {
				$poin2 = ($cek / 2000) * 1 ;

			}elseif ($cek >= '100000') {

				$poin3 = ($cek/ 2000) * 2 ;

			}

		}

		$total_poin_listrik = $poin1 + $poin2 + $poin3;

		$total_poin = $total_poin_listrik + $total_poin_pulsa;

		$data['data_total_poin'] =  array(
			'nama' => $Name,
			'total_poin' => $total_poin
			
		);


		$this->load->view('Poin.php',$data);
	}

}
