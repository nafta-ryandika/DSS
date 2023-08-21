<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kriteria extends CI_Model {

	public function get_data_kriteria()
	{
		$query=$this->db->query("select kriteria, bobot from tbl_kriteria join tbl_bobot_kriteria on tbl_kriteria.id_kriteria = tbl_bobot_kriteria.id_kriteria");
		return $query;
	}
}