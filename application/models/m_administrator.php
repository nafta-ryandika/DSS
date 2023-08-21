<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_administrator extends CI_Model {

	public function get_data_administrator(){
		$query=$this->db->query("select * from tbl_administrator");
		return $query;
	}
	public function get_data_log(){
		$query2=$this->db->query("select * from tbl_administrator join tbl_log_aktivitas on tbl_administrator.id_administrator = tbl_log_aktivitas.id_administrator order by tbl_log_aktivitas.tanggal desc");
		return $query2;
	}
	public function edit($id){
		$this->db->where("id_administrator",$id);
		return $this->db->get('tbl_administrator');
	}
	public function update($id,$data){
		$this->db->where("id_administrator",$id);
		$this->db->update('tbl_administrator',$data);
	}
}