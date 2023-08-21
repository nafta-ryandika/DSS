<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_rekomendasi_topik_skripsi extends CI_Model {
	function __construct()
	{
		parent::__construct();
	}
	public function simpan($data){
        $this->db->insert('tbl_rekomendasi_topik_skripsi', $data);
    }
    public function get_daftar_rekomendasi_topik_skripsi(){
    	$this->db->select('*');
        $this->db->from('tbl_rekomendasi_topik_skripsi');
        return $this->db->get();
    }
    public function get_daftar_kriteria(){
    	$this->db->select('*');
        $this->db->from('tbl_kriteria');
        return $this->db->get();
    }
    public function select_bobot_kriteria($id_kriteria){
        $this->db->select('*');
        $this->db->from('tbl_bobot_kriteria');
        $this->db->where('id_kriteria', $id_kriteria);
        return $this->db->get();
    }
    public function update_rekomendasi_topik_skripsi($id_rekomendasi_topik_skripsi, $data){
    	$this->db->where('id_rekomendasi_topik_skripsi', $id_rekomendasi_topik_skripsi);
        $this->db->update('tbl_rekomendasi_topik_skripsi', $data);
    }
	public function get_daftar_ranking(){
        $get_daftar_ranking=$this->db->query("select * from tbl_rekomendasi_topik_skripsi join tbl_topik_skripsi on tbl_rekomendasi_topik_skripsi.id_topik_skripsi = tbl_topik_skripsi.id_topik_skripsi order by score desc");
        return $get_daftar_ranking;
	}
	public function get_daftar_perbandingan_kriteria(){
		$this->db->select('*');
        $this->db->from('tbl_perbandingan_kriteria');
        return $this->db->get();
	}
    public function get_bobot_subkriteria($id_subkriteria){
        $this->db->select('*');
        $this->db->from('tbl_bobot_subkriteria');
        $this->db->where('id_subkriteria', $id_subkriteria);
        return $this->db->get();
    }
	public function get_bobot($id_subkriteria_2){
		$this->db->select('*');
        $this->db->from('tbl_bobot_subkriteria_2');
        $this->db->where('id_subkriteria_2', $id_subkriteria_2);
        return $this->db->get();
	}
    public function selesai(){
        $query="truncate table tbl_rekomendasi_topik_skripsi";
        return $query;
    }
}