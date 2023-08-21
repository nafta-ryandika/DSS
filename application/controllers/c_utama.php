<?php
	class C_utama extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model("m_kriteria");
			$this->load->model("m_administrator");
		}
		public function halaman_utama_administrator(){
			$this->load->view('administrator/element/header');
			$this->load->view('administrator/element/navigation');
			$this->load->view('administrator/v_halaman_utama_administrator');
			$this->load->view('administrator/element/footer');
		}
		public function data_administrator(){
			$data['query'] = $this->m_administrator->get_data_administrator();
			$data['query2'] = $this->m_administrator->get_data_log();
			$this->load->view('administrator/element/header');
			$this->load->view('administrator/element/navigation');
			$this->load->view('administrator/v_data_administrator',$data);
			$this->load->view('administrator/element/footer');
		}
}