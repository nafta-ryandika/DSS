<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_perbandingan_subkriteria_2 extends CI_Model {

    public function get_daftar_kriteria(){
        $this->db->select('*');
        $this->db->from('tbl_kriteria');
        return $this->db->get();
    }
    public function select_subkriteria($id_kriteria){
        $this->db->select('*');
        $this->db->from('tbl_subkriteria_2');
        $this->db->where('id_kriteria',$id_kriteria);
        return $this->db->get();
    }
    public function select_perbandingan_subkriteria($id_kriteria){
        $this->db->select('*');
        $this->db->from('tbl_perbandingan_subkriteria_2');
        $this->db->where('id_kriteria',$id_kriteria);
        return $this->db->get();
    }
    public function update_bobot_subkriteria($id_kriteria, $id_subkriteria_2, $data){
        $this->db->where('id_kriteria',$id_kriteria);
        $this->db->where('id_subkriteria_2',$id_subkriteria_2);
        $this->db->update('tbl_bobot_subkriteria_2',$data);
    }
    public function update_bobot_perbandingan_subkriteria($id_kriteria, $id_subkriteria_2_1, $id_subkriteria_2_2, $data){
        $this->db->where('id_kriteria', $id_kriteria);
        $this->db->where('id_subkriteria_2_1', $id_subkriteria_2_1);
        $this->db->where('id_subkriteria_2_2', $id_subkriteria_2_2);
        $this->db->update('tbl_perbandingan_subkriteria_2', $data);
    }
}