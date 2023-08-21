<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_perbandingan_subkriteria extends CI_Model {

    public function get_daftar_subkriteria(){
        $this->db->select('*');
        $this->db->from('tbl_subkriteria');
        return $this->db->get();
    }
    public function get_daftar_topik_skripsi(){
        $this->db->select('*');
        $this->db->from('tbl_topik_skripsi');
        return $this->db->get();
    }
    public function select_subkriteria($id_topik_skripsi){
        $this->db->select('*');
        $this->db->from('tbl_subkriteria');
        $this->db->where('id_topik_skripsi',$id_topik_skripsi);
        return $this->db->get();
    }
    public function select_perbandingan_subkriteria($id_topik_skripsi){
        $this->db->select('*');
        $this->db->from('tbl_perbandingan_subkriteria');
        $this->db->where('id_topik_skripsi',$id_topik_skripsi);
        return $this->db->get();
    }
    public function update_bobot_subkriteria($id_topik_skripsi, $id_subkriteria, $data){
        $this->db->where('id_topik_skripsi',$id_topik_skripsi);
        $this->db->where('id_subkriteria',$id_subkriteria);
        $this->db->update('tbl_bobot_subkriteria',$data);
    }
    public function update_bobot_perbandingan_subkriteria($id_topik_skripsi, $id_subkriteria_1, $id_subkriteria_2, $data){
        $this->db->where('id_topik_skripsi', $id_topik_skripsi);
        $this->db->where('id_subkriteria_1', $id_subkriteria_1);
        $this->db->where('id_subkriteria_2', $id_subkriteria_2);
        $this->db->update('tbl_perbandingan_subkriteria', $data);
    }
}