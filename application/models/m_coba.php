<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_coba extends CI_Model {

	public function get_daftar_kriteria(){
		$daftar_kriteria=$this->db->query("select * from tbl_kriteria");
		return $daftar_kriteria;
	}
	public function get_perbandingan_kriteria(){
		$perbandingan_kriteria=$this->db->query("select * from tbl_perbandingan_kriteria");
		return $perbandingan_kriteria;
	}
	function update_persentase($id_kriteria, $data){
        $this->db->where("id_kriteria", $id_kriteria);
        $this->db->update('tbl_kriteria', $data);
    }
}