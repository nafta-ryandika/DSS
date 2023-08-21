<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_subkriteria extends CI_Model {
	public function get_data_subkriteria($id)
	{
		$daftar_subkriteria=$this->db->query("select subkriteria, bobot from tbl_subkriteria join tbl_bobot_subkriteria on tbl_subkriteria.id_subkriteria = tbl_bobot_subkriteria.id_subkriteria where tbl_bobot_subkriteria.id_topik_skripsi = $id");
		return $daftar_subkriteria;
	}

	 public function get_daftar_topik_skripsi(){
        $this->db->select('*');
        $this->db->from('tbl_topik_skripsi');
        return $this->db->get();
    }
}