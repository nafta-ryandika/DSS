<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pesan extends CI_Model {

	public function getbuku()
	{
		$sql=$this->db->query("select * from tbl_buku");
		return $sql;
	}
	public function simpan($data)
	{
		$this->db->insert('tbl_pesan',$data);
	}
}
