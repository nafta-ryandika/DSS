<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_perbandingan_kriteria extends CI_Model {

    public function get_daftar_kriteria(){
        $this->db->select('*');
        $this->db->from('tbl_kriteria');
        return $this->db->get();
    }
    public function select_perbandingan_kriteria(){
        $this->db->select('*');
        $this->db->from('tbl_perbandingan_kriteria');
        return $this->db->get();
    }
    public function update_bobot_kriteria($id_kriteria, $data){
        $this->db->where('id_kriteria',$id_kriteria);
        $this->db->update('tbl_bobot_kriteria',$data);
    }
     function update_bobot_perbandingan_kriteria($id_perbandingan_kriteria, $id_kriteria_1, $id_kriteria_2, $data){
        $this->db->where('id_perbandingan_kriteria', $id_perbandingan_kriteria);
        $this->db->where('id_kriteria_1', $id_kriteria_1);
        $this->db->where('id_kriteria_2', $id_kriteria_2);
        $this->db->update('tbl_perbandingan_kriteria', $data);
    }
}