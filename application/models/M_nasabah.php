<?php
class M_nasabah extends CI_Model
{

    private $_table = "data_nasabah";

    function tampil_data()
    {
        return $this->db->get('data_nasabah');
    }

    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    
}
