<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pesan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model("m_pesan");
	}

	public function simpan(){
		$id_pesan = $this->input->post('id_pesan');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$pesan = $this->input->post('pesan');
		
		$data = array(
			'nama' => $nama,
			'email' => $email,
			'pesan' => $pesan
			);

		$this->m_pesan->simpan($data);
		redirect('C_utama_user/about_us');	
	}
}