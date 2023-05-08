<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_transaksi');
		$this->load->model('M_nasabah');

	}

	public function index()
	{

		$data['data_transaksi'] = $this->M_transaksi->tampil_data();
		$data['data_nasabah'] = $this->M_nasabah->tampil_data();
		$this->load->view('Transaksi.php',$data);
	}

	public function Add()
	{
		$AccountId = $this->input->post('AccountId');
		$TransactionDate = $this->input->post('TransactionDate');
		$Description = $this->input->post('Description');
		$DebitCreditStatus = $this->input->post('DebitCreditStatus');
		$Amount = $this->input->post('Amount');
		$waktu = date('d-M-y');


		$data = array(
			'AccountId' => $AccountId,
			'TransactionDate' => $TransactionDate,
			'Description' => $Description,
			'DebitCreditStatus' => $DebitCreditStatus,
			'Amount' => $Amount,
			'waktu' => $waktu
		);

		$this->M_transaksi->input_data($data, 'data_transaksi');
		redirect('Transaksi');
	}
}
