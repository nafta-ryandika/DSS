<?php
	class C_subkriteria extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model("m_subkriteria");
		}
		public function data_subkriteria($id){
			$this->load->view('administrator/element/header');
			$this->load->view('administrator/element/navigation');
			$data['daftar_subkriteria'] = $this->m_subkriteria->get_data_subkriteria($id)->result();
			$data['daftar_topik_skripsi'] = $this->m_subkriteria->get_daftar_topik_skripsi()->result();
			$data['id'] = $id;

			$this->load->view('administrator/v_data_subkriteria',$data);
			$this->load->view('administrator/element/footer');
		}
}