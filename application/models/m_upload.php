<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_upload extends CI_Model {

	function simpan($data = array())
		 {
		 $this->input = array(
		 'nama_file' => $this->input->post('nama_file'),
		 'keterangan' => $this->input->post('keterangan'),
		 'file' => $data['file'],
		 'thumbnail' => $data['thumbnail']
		  );
		 
		 $insert = $this->db->insert('file', $this->input);
		 return $insert;
		  }
}
