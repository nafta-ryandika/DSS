<?php
	class C_kriteria extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model("m_kriteria");
		}
		public function data_kriteria(){
			$data['query'] = $this->m_kriteria->get_data_kriteria();
			$this->load->view('administrator/element/header');
			$this->load->view('administrator/element/navigation');
			$this->load->view('administrator/v_data_kriteria',$data);
			$this->load->view('administrator/element/footer');
		}
}