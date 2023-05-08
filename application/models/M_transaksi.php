<?php
class M_transaksi extends CI_Model
{

	private $_table = "data_transaksi";

	function tampil_data()
	{
		return $this->db->get('data_transaksi');
	}

	function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}
	function hitung_poin_pulsa()
	{
		$this->db->select('
			a.AccountId,
			b.Name,
			a.Amount');
		$this->db->from('data_transaksi a');
		$this->db->where('Description','Beli Pulsa');
		$this->db->join('data_nasabah b', 'b.AccountId = a.AccountId');
		return $this->db->get('')->result();
	}
	function hitung_poin_listrik()
	{
		$this->db->select('
			a.AccountId,
			b.Name,
			a.Amount');
		$this->db->from('data_transaksi a');
		$this->db->where('Description','Bayar Listrik');
		$this->db->join('data_nasabah b', 'b.AccountId = a.AccountId');
		return $this->db->get('')->result();
	}

}
