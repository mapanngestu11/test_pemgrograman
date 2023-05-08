<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nasabah extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_nasabah');

	}

	public function index()
	{

		$data['data_nasabah'] = $this->M_nasabah->tampil_data();
		$this->load->view('Nasabah.php',$data);
	}

	public function Add()
	{
		$name = $this->input->post('Name');

		$data = array(
			'Name' => $name

		);

		$this->M_nasabah->input_data($data, 'data_nasabah');
		redirect('Nasabah');
	}
}
