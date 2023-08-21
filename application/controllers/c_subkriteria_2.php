<?php
	class C_subkriteria_2 extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model("m_subkriteria_2");
		}
		public function data_subkriteria($id){
			$this->load->view('administrator/element/header');
			$this->load->view('administrator/element/navigation');
			$data['daftar_subkriteria'] = $this->m_subkriteria_2->get_data_subkriteria($id)->result();
			$data['daftar_kriteria'] = $this->m_subkriteria_2->get_daftar_kriteria()->result();
			$data['id'] = $id;

			$this->load->view('administrator/v_data_subkriteria_2',$data);
			$this->load->view('administrator/element/footer');
		}
}