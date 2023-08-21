<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_subkriteria_2 extends CI_Model {
	public function get_data_subkriteria($id)
	{
		$daftar_subkriteria=$this->db->query("select subkriteria_2, bobot from tbl_subkriteria_2 join tbl_bobot_subkriteria_2 on tbl_subkriteria_2.id_subkriteria_2 = tbl_bobot_subkriteria_2.id_subkriteria_2 where tbl_bobot_subkriteria_2.id_kriteria = $id");
		return $daftar_subkriteria;
	}

	 public function get_daftar_kriteria(){
        $this->db->select('*');
        $this->db->from('tbl_kriteria');
        return $this->db->get();
    }
}