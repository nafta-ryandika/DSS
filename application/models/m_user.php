<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_user extends CI_Model {

	public function simpan($data)
	{
		$this->db->insert('tbl_pesan',$data);
	}
}